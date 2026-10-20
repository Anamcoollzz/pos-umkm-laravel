<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     */
    public function index(Request $request): View
    {
        $search = $request->string('search')->trim()->value();
        $filter = $request->string('filter')->value();

        $query = Product::query();

        if ($search !== '') {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('code', 'like', "%{$search}%");
            });
        }

        if ($filter === 'low_stock') {
            $query->lowStock();
        } elseif ($filter === 'out_of_stock') {
            $query->where('stock', '<=', 0);
        }

        $products = $query->latest('id')->paginate(10)->withQueryString();

        $totalProducts = Product::count();
        $lowStockCount = Product::lowStock()->count();
        $outOfStockCount = Product::where('stock', '<=', 0)->count();

        return view('products.index', compact(
            'products',
            'search',
            'filter',
            'totalProducts',
            'lowStockCount',
            'outOfStockCount'
        ));
    }

    /**
     * Show the form for creating a new product.
     */
    public function create(): View
    {
        $lastProduct = Product::latest('id')->first();
        $nextNumber = $lastProduct ? ($lastProduct->id + 1) : 1;
        $suggestedCode = 'BRG-'.str_pad((string) $nextNumber, 3, '0', STR_PAD_LEFT);

        return view('products.create', compact('suggestedCode'));
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'code' => ['required', 'string', 'max:50', 'unique:products,code'],
            'name' => ['required', 'string', 'max:255'],
            'purchase_price' => ['required', 'numeric', 'min:0'],
            'selling_price' => ['required', 'numeric', 'min:0', 'gte:purchase_price'],
            'stock' => ['required', 'integer', 'min:0'],
            'minimum_stock' => ['required', 'integer', 'min:0'],
        ], [
            'code.required' => 'Kode barang wajib diisi.',
            'code.unique' => 'Kode barang sudah digunakan.',
            'name.required' => 'Nama barang wajib diisi.',
            'purchase_price.required' => 'Harga beli wajib diisi.',
            'selling_price.required' => 'Harga jual wajib diisi.',
            'selling_price.gte' => 'Harga jual tidak boleh lebih kecil dari harga beli.',
            'stock.required' => 'Jumlah stok awal wajib diisi.',
            'minimum_stock.required' => 'Batas minimum stok wajib diisi.',
        ]);

        Product::create($validated);

        return redirect()->route('products.index')
            ->with('success', 'Barang "'.$validated['name'].'" berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified product.
     */
    public function edit(Product $product): View
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified product in storage.
     */
    public function update(Request $request, Product $product): RedirectResponse
    {
        $validated = $request->validate([
            'code' => ['required', 'string', 'max:50', 'unique:products,code,'.$product->id],
            'name' => ['required', 'string', 'max:255'],
            'purchase_price' => ['required', 'numeric', 'min:0'],
            'selling_price' => ['required', 'numeric', 'min:0', 'gte:purchase_price'],
            'stock' => ['required', 'integer', 'min:0'],
            'minimum_stock' => ['required', 'integer', 'min:0'],
        ], [
            'code.required' => 'Kode barang wajib diisi.',
            'code.unique' => 'Kode barang sudah digunakan oleh barang lain.',
            'name.required' => 'Nama barang wajib diisi.',
            'purchase_price.required' => 'Harga beli wajib diisi.',
            'selling_price.required' => 'Harga jual wajib diisi.',
            'selling_price.gte' => 'Harga jual tidak boleh lebih kecil dari harga beli.',
            'stock.required' => 'Jumlah stok wajib diisi.',
            'minimum_stock.required' => 'Batas minimum stok wajib diisi.',
        ]);

        $product->update($validated);

        return redirect()->route('products.index')
            ->with('success', 'Data barang "'.$product->name.'" berhasil diperbarui.');
    }

    /**
     * Remove the specified product from storage.
     */
    public function destroy(Product $product): RedirectResponse
    {
        if ($product->saleItems()->exists()) {
            return back()->with('error', 'Barang "'.$product->name.'" tidak dapat dihapus karena sudah memiliki riwayat transaksi.');
        }

        $name = $product->name;
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Barang "'.$name.'" berhasil dihapus.');
    }
}
