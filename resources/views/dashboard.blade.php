@extends('layouts.app')

@section('title', 'Dashboard Penjualan & Stok - Sistem POS UMKM')

@section('content')
  <div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <div class="page-pretitle">Ringkasan Operasional</div>
          <h1 class="page-title">Dashboard UMKM</h1>
        </div>
        <div class="col-auto ms-auto d-print-none">
          <div class="btn-list">
            @if (Auth::user()?->isAdmin())
              <a href="{{ route('products.create') }}" class="btn btn-outline-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                Tambah Barang
              </a>
            @endif
            <a href="{{ route('sales.create') }}" class="btn btn-primary d-inline-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon me-1"><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
              Buka Kasir (POS)
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <main id="content" class="page-body">
    <div class="container-xl">
      @if (session('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
          <div class="d-flex">
            <div>{{ session('success') }}</div>
          </div>
          <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
        </div>
      @endif

      <!-- Top 4 Summary Cards -->
      <div class="row row-cards mb-4">
        <!-- 1. Penjualan Hari Ini -->
        <div class="col-sm-6 col-lg-3">
          <div class="card card-sm">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-auto">
                  <span class="bg-primary text-white avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12" /><path d="M20 12v4h-4a2 2 0 0 1 0 -4h4" /></svg>
                  </span>
                </div>
                <div class="col">
                  <div class="text-secondary small font-weight-medium">Penjualan Hari Ini</div>
                  <div class="h2 mb-0 fw-bold text-dark">Rp {{ number_format($todayRevenue, 0, ',', '.') }}</div>
                  <div class="text-secondary small mt-1">{{ $todayTransactionsCount }} transaksi selesai</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- 2. Penjualan Bulan Ini -->
        <div class="col-sm-6 col-lg-3">
          <div class="card card-sm">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-auto">
                  <span class="bg-success text-white avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M3 12m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" /><path d="M9 8m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" /><path d="M15 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" /><path d="M4 20l14 0" /></svg>
                  </span>
                </div>
                <div class="col">
                  <div class="text-secondary small font-weight-medium">Penjualan Bulan Ini</div>
                  <div class="h2 mb-0 fw-bold text-success">Rp {{ number_format($monthlyRevenue, 0, ',', '.') }}</div>
                  <div class="text-secondary small mt-1">{{ $monthlyTransactionsCount }} transaksi</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- 3. Estimasi Laba Kotor (Admin) atau Informasi Peran (Kasir) -->
        <div class="col-sm-6 col-lg-3">
          <div class="card card-sm">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-auto">
                  <span class="bg-azure text-white avatar">
                    @if (Auth::user()?->isAdmin())
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M12 3v18" /><path d="M16 7h-6a3.5 3.5 0 0 0 0 7h4a3.5 3.5 0 0 1 0 7h-6" /></svg>
                    @else
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
                    @endif
                  </span>
                </div>
                <div class="col">
                  @if (Auth::user()?->isAdmin())
                    <div class="text-secondary small font-weight-medium">Estimasi Laba Kotor</div>
                    <div class="h2 mb-0 fw-bold text-azure">Rp {{ number_format($monthlyProfit, 0, ',', '.') }}</div>
                    <div class="text-secondary small mt-1">Margin jual - beli</div>
                  @else
                    <div class="text-secondary small font-weight-medium">Peran Pengguna</div>
                    <div class="h2 mb-0 fw-bold text-azure">Kasir Aktif</div>
                    <div class="text-secondary small mt-1">Akses POS &amp; Riwayat</div>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- 4. Total Produk & Alert Stok -->
        <div class="col-sm-6 col-lg-3">
          <div class="card card-sm">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-auto">
                  <span class="bg-warning text-white avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" /><path d="M12 12l8 -4.5" /><path d="M12 12l0 9" /><path d="M12 12l-8 -4.5" /></svg>
                  </span>
                </div>
                <div class="col">
                  <div class="text-secondary small font-weight-medium">Total Produk</div>
                  <div class="h2 mb-0 fw-bold text-dark">{{ $totalProducts }} Item</div>
                  <div class="small mt-1">
                    @if ($lowStockCount > 0)
                      <span class="text-danger fw-bold">{{ $lowStockCount }} stok menipis</span>
                    @else
                      <span class="text-success">Semua stok aman</span>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Charts & Stock Alerts Row -->
      <div class="row row-cards mb-4">
        <!-- Sales Trend Chart 7 Days -->
        <div class="col-lg-8">
          <div class="card h-100 shadow-sm">
            <div class="card-header">
              <div>
                <h3 class="card-title">Tren Penjualan 7 Hari Terakhir</h3>
                <p class="card-subtitle text-secondary">Aktivitas nominal omset penjualan harian</p>
              </div>
            </div>
            <div class="card-body">
              <div id="sales-trend-chart" style="min-height: 250px;"></div>
            </div>
          </div>
        </div>

        <!-- Low Stock Warning Box -->
        <div class="col-lg-4">
          <div class="card h-100 shadow-sm">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h3 class="card-title text-warning d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon me-1 text-warning"><path d="M12 9v4" /><path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" /><path d="M12 16h.01" /></svg>
                Peringatan Stok
              </h3>
              <a href="{{ route('products.index', ['filter' => 'low_stock']) }}" class="small">Semua</a>
            </div>
            <div class="list-group list-group-flush list-group-hoverable">
              @forelse ($lowStockProducts as $lp)
                <div class="list-group-item">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="badge {{ $lp->stock <= 0 ? 'bg-danger' : 'bg-warning' }} text-white p-2">
                        {{ $lp->stock }}
                      </span>
                    </div>
                    <div class="col text-truncate">
                      @if (Auth::user()?->isAdmin())
                        <a href="{{ route('products.edit', $lp) }}" class="text-reset d-block font-weight-medium">{{ $lp->name }}</a>
                      @else
                        <span class="d-block font-weight-medium">{{ $lp->name }}</span>
                      @endif
                      <div class="d-block text-secondary text-truncate mt-n1 small">
                        Min. stok: {{ $lp->minimum_stock }} | Rp {{ number_format($lp->selling_price, 0, ',', '.') }}
                      </div>
                    </div>
                    <div class="col-auto">
                      @if (Auth::user()?->isAdmin())
                        <a href="{{ route('products.edit', $lp) }}" class="btn btn-sm btn-outline-primary" title="Edit / Tambah Stok">
                          Restok
                        </a>
                      @else
                        <span class="badge bg-warning-lt">Perlu Restok</span>
                      @endif
                    </div>
                  </div>
                </div>
              @empty
                <div class="text-center py-4 text-secondary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon text-success mb-2"><path d="M5 12l5 5l10 -10" /></svg>
                  <div>Tidak ada barang dengan stok menipis.</div>
                </div>
              @endforelse
            </div>
          </div>
        </div>
      </div>

      <!-- Recent Transactions Table -->
      <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h3 class="card-title">Transaksi Penjualan Terakhir</h3>
          <a href="{{ route('sales.index') }}" class="btn btn-sm btn-outline-primary">Lihat Semua Riwayat</a>
        </div>
        <div class="table-responsive">
          <table class="table table-vcenter card-table table-hover">
            <thead>
              <tr>
                <th>No. Invoice</th>
                <th>Waktu</th>
                <th>Kasir</th>
                <th class="text-center">Jumlah Item</th>
                <th class="text-end">Total Pembayaran</th>
                <th class="w-1 text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($recentSales as $sale)
                <tr>
                  <td>
                    <a href="{{ route('sales.show', $sale) }}" class="font-monospace fw-bold text-primary">
                      {{ $sale->invoice_number }}
                    </a>
                  </td>
                  <td class="text-secondary small">
                    {{ $sale->sold_at->diffForHumans() }} ({{ $sale->sold_at->format('H:i') }})
                  </td>
                  <td>
                    <span class="avatar avatar-xs rounded me-1" style="background-image: url('{{ asset('vendor/tabler/static/avatars/000m.jpg') }}')"></span>
                    {{ $sale->user->name ?? 'Kasir' }}
                  </td>
                  <td class="text-center">
                    <span class="badge bg-secondary-lt">{{ $sale->items->sum('quantity') }} pcs</span>
                  </td>
                  <td class="text-end fw-bold text-dark">
                    Rp {{ number_format($sale->total_amount, 0, ',', '.') }}
                  </td>
                  <td class="text-center text-nowrap">
                    <div class="btn-list flex-nowrap justify-content-center">
                      <a href="{{ route('sales.show', $sale) }}" class="btn btn-sm btn-outline-primary">Detail</a>
                      <a href="{{ route('sales.pdf', $sale) }}" class="btn btn-sm btn-outline-secondary">PDF</a>
                    </div>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="6" class="text-center py-4 text-secondary">
                    Belum ada transaksi. Silakan <a href="{{ route('sales.create') }}">buka kasir</a> untuk mencatat penjualan.
                  </td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>
@endsection

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const chartEl = document.getElementById('sales-trend-chart');
    if (!chartEl || !window.ApexCharts) return;

    const chartLabels = @json($chartLabels);
    const chartData = @json($chartData);

    const options = {
      chart: {
        type: 'area',
        height: 250,
        toolbar: { show: false },
        parentHeightOffset: 0
      },
      dataLabels: { enabled: false },
      fill: {
        type: 'gradient',
        gradient: {
          shadeIntensity: 1,
          opacityFrom: 0.45,
          opacityTo: 0.05,
          stops: [0, 90, 100]
        }
      },
      stroke: {
        curve: 'smooth',
        width: 3
      },
      colors: ['#0054a6'],
      series: [{
        name: 'Penjualan (Rp)',
        data: chartData
      }],
      xaxis: {
        categories: chartLabels,
        labels: {
          style: { colors: '#6c757d', fontSize: '12px' }
        }
      },
      yaxis: {
        labels: {
          formatter: function (val) {
            return 'Rp ' + (val / 1000).toLocaleString('id-ID') + 'k';
          },
          style: { colors: '#6c757d', fontSize: '12px' }
        }
      },
      tooltip: {
        y: {
          formatter: function (val) {
            return 'Rp ' + val.toLocaleString('id-ID');
          }
        }
      },
      grid: {
        strokeDashArray: 4
      }
    };

    const chart = new ApexCharts(chartEl, options);
    chart.render();
  });
</script>
@endpush
