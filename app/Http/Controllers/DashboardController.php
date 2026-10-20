<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sale;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Display the UMKM inventory & sales dashboard.
     */
    public function index(): View
    {
        $user = Auth::user();
        $isKasir = $user && ! $user->isAdmin();

        $today = Carbon::today();
        $thisMonth = Carbon::now()->month;
        $thisYear = Carbon::now()->year;

        // Base sale query scoped by cashier if not admin
        $baseSaleQuery = Sale::query();
        if ($isKasir) {
            $baseSaleQuery->where('user_id', $user->id);
        }

        // Daily Sales
        $todaySales = (clone $baseSaleQuery)->whereDate('sold_at', $today);
        $todayRevenue = (float) $todaySales->sum('total_amount');
        $todayTransactionsCount = $todaySales->count();

        // Monthly Sales
        $monthlySales = (clone $baseSaleQuery)->whereMonth('sold_at', $thisMonth)->whereYear('sold_at', $thisYear);
        $monthlyRevenue = (float) $monthlySales->sum('total_amount');
        $monthlyTransactionsCount = $monthlySales->count();

        // Estimated profit this month (Selling Price - Purchase Price) - only for Admin
        $monthlyProfit = 0;
        if (! $isKasir) {
            $monthlyProfit = (float) DB::table('sale_items')
                ->join('sales', 'sale_items.sale_id', '=', 'sales.id')
                ->join('products', 'sale_items.product_id', '=', 'products.id')
                ->whereMonth('sales.sold_at', $thisMonth)
                ->whereYear('sales.sold_at', $thisYear)
                ->sum(DB::raw('sale_items.subtotal - (sale_items.quantity * products.purchase_price)'));
        }

        // Products & Stock summary
        $totalProducts = Product::count();
        $lowStockCount = Product::lowStock()->count();
        $outOfStockCount = Product::where('stock', '<=', 0)->count();

        // Low stock products warning
        $lowStockProducts = Product::lowStock()
            ->orderBy('stock')
            ->take(5)
            ->get();

        // Recent transactions (scoped to cashier if kasir)
        $recentSales = (clone $baseSaleQuery)->with(['user', 'items.product'])
            ->latest('sold_at')
            ->take(6)
            ->get();

        // Sales trend for last 7 days (scoped to cashier if kasir)
        $chartLabels = [];
        $chartData = [];

        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::today()->subDays($i);
            $chartLabels[] = $date->translatedFormat('d M');
            $chartData[] = (float) (clone $baseSaleQuery)->whereDate('sold_at', $date)->sum('total_amount');
        }

        return view('dashboard', compact(
            'todayRevenue',
            'todayTransactionsCount',
            'monthlyRevenue',
            'monthlyTransactionsCount',
            'monthlyProfit',
            'totalProducts',
            'lowStockCount',
            'outOfStockCount',
            'lowStockProducts',
            'recentSales',
            'chartLabels',
            'chartData'
        ));
    }
}
