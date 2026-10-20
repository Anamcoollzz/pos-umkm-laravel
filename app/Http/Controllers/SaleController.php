<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sale;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class SaleController extends Controller
{
    /**
     * Display a listing of sales transactions.
     */
    public function index(Request $request): View
    {
        $search = $request->string('search')->trim()->value();
        $date = $request->string('date')->value();

        $query = Sale::with(['user', 'items.product'])->latest('sold_at');

        if ($search !== '') {
            $query->where('invoice_number', 'like', "%{$search}%");
        }

        if ($date !== '') {
            $query->whereDate('sold_at', $date);
        }

        $sales = $query->paginate(10)->withQueryString();

        $totalTransactions = Sale::count();
        $totalRevenue = Sale::sum('total_amount');
        $todayRevenue = Sale::whereDate('sold_at', now()->today())->sum('total_amount');

        return view('sales.index', compact(
            'sales',
            'search',
            'date',
            'totalTransactions',
            'totalRevenue',
            'todayRevenue'
        ));
    }

    /**
     * Show the point-of-sale checkout page.
     */
    public function create(): View
    {
        $products = Product::where('stock', '>', 0)
            ->orderBy('name')
            ->get();

        $suggestedInvoice = Sale::generateInvoiceNumber();

        return view('sales.create', compact('products', 'suggestedInvoice'));
    }

    /**
     * Store a newly created sale in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'items' => ['required', 'array', 'min:1'],
            'items.*.product_id' => ['required', 'exists:products,id'],
            'items.*.quantity' => ['required', 'integer', 'min:1'],
            'paid_amount' => ['nullable', 'numeric', 'min:0'],
        ], [
            'items.required' => 'Pilih minimal satu barang untuk transaksi.',
            'items.min' => 'Pilih minimal satu barang untuk transaksi.',
            'items.*.quantity.min' => 'Jumlah barang minimal 1.',
        ]);

        $sale = DB::transaction(function () use ($request) {
            $totalAmount = 0;
            $itemsData = [];

            foreach ($request->input('items') as $itemInput) {
                // Lock row for update to ensure safe concurrent stock deduction
                $product = Product::where('id', $itemInput['product_id'])
                    ->lockForUpdate()
                    ->firstOrFail();

                $qty = (int) $itemInput['quantity'];

                if ($product->stock < $qty) {
                    throw ValidationException::withMessages([
                        'items' => "Stok untuk barang '{$product->name}' tidak mencukupi (Tersedia: {$product->stock}, Diminta: {$qty}).",
                    ]);
                }

                $subtotal = $qty * (float) $product->selling_price;
                $totalAmount += $subtotal;

                // Decrement stock automatically
                $product->decrement('stock', $qty);

                $itemsData[] = [
                    'product_id' => $product->id,
                    'quantity' => $qty,
                    'unit_price' => $product->selling_price,
                    'subtotal' => $subtotal,
                ];
            }

            $sale = Sale::create([
                'user_id' => Auth::id() ?? 1,
                'invoice_number' => Sale::generateInvoiceNumber(),
                'total_amount' => $totalAmount,
                'sold_at' => now(),
            ]);

            foreach ($itemsData as $item) {
                $sale->items()->create($item);
            }

            return $sale;
        });

        return redirect()->route('sales.show', $sale)
            ->with('success', 'Transaksi berhasil disimpan dengan Invoice '.$sale->invoice_number.'. Stok barang otomatis diperbarui.');
    }

    /**
     * Display the specified sale transaction detail.
     */
    public function show(Sale $sale): View
    {
        $sale->load(['user', 'items.product']);

        return view('sales.show', compact('sale'));
    }

    /**
     * Print preview for browser printing.
     */
    public function print(Sale $sale): View
    {
        $sale->load(['user', 'items.product']);

        return view('sales.print', compact('sale'));
    }

    /**
     * Download the invoice as a PDF file.
     */
    public function downloadPdf(Sale $sale): Response
    {
        $sale->load(['user', 'items.product']);

        $pdf = Pdf::loadView('sales.invoice-pdf', compact('sale'))
            ->setPaper('a5', 'portrait');

        return $pdf->download("invoice-{$sale->invoice_number}.pdf");
    }
}
