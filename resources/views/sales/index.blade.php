@extends('layouts.app')

@section('title', 'Riwayat Transaksi Penjualan - Sistem POS UMKM')

@section('content')
  <div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <div class="page-pretitle">Transaksi</div>
          <h1 class="page-title">Riwayat Penjualan</h1>
        </div>
        <div class="col-auto ms-auto d-print-none">
          <a href="{{ route('sales.create') }}" class="btn btn-primary d-inline-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon me-1"><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
            Transaksi Baru (Kasir)
          </a>
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

      <!-- Summary metrics cards -->
      <div class="row row-cards mb-4">
        <div class="col-sm-6 col-lg-4">
          <div class="card card-sm">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-auto">
                  <span class="bg-primary text-white avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" /><path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /><path d="M9 14l2 2l4 -4" /></svg>
                  </span>
                </div>
                <div class="col">
                  <div class="font-weight-medium">Total Transaksi</div>
                  <div class="text-secondary">{{ $totalTransactions }} struk tercatat</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card card-sm">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-auto">
                  <span class="bg-success text-white avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12" /><path d="M20 12v4h-4a2 2 0 0 1 0 -4h4" /></svg>
                  </span>
                </div>
                <div class="col">
                  <div class="font-weight-medium">Total Penjualan</div>
                  <div class="text-secondary fw-bold text-success">Rp {{ number_format($totalRevenue, 0, ',', '.') }}</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card card-sm">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-auto">
                  <span class="bg-info text-white avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" /><path d="M16 3l0 4" /><path d="M8 3l0 4" /><path d="M4 11l16 0" /><path d="M8 15h2v2h-2z" /></svg>
                  </span>
                </div>
                <div class="col">
                  <div class="font-weight-medium">Penjualan Hari Ini</div>
                  <div class="text-secondary fw-bold text-info">Rp {{ number_format($todayRevenue, 0, ',', '.') }}</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Main History Card -->
      <div class="card shadow-sm">
        <div class="card-header d-flex flex-wrap align-items-center justify-content-between gap-2">
          <h3 class="card-title">Daftar Faktur Penjualan</h3>
          <form action="{{ route('sales.index') }}" method="GET" class="d-flex flex-wrap align-items-center gap-2">
            <div class="input-icon">
              <span class="input-icon-addon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
              </span>
              <input type="text" name="search" value="{{ $search }}" class="form-control form-control-sm" placeholder="No. Invoice...">
            </div>
            @if (Auth::user()?->isAdmin())
            <select name="user_id" class="form-select form-select-sm" style="width: 160px;" title="Filter Staf/Kasir">
              <option value="">Semua Kasir</option>
              @foreach ($cashiers as $c)
                <option value="{{ $c->id }}" {{ $userId == $c->id ? 'selected' : '' }}>{{ $c->name }}</option>
              @endforeach
            </select>
            @endif
            <input type="date" name="date" value="{{ $date }}" class="form-control form-control-sm" style="width: 150px;" title="Filter Tanggal">
            <button type="submit" class="btn btn-sm btn-secondary">Filter</button>
            @if ($search !== '' || $date !== '' || (Auth::user()?->isAdmin() && !empty($userId)))
              <a href="{{ route('sales.index') }}" class="btn btn-sm btn-outline-secondary" title="Reset filter">Reset</a>
            @endif
          </form>
        </div>

        <div class="table-responsive">
          <table class="table table-vcenter card-table table-hover">
            <thead>
              <tr>
                <th>No. Invoice</th>
                <th>Tanggal & Waktu</th>
                <th>Kasir</th>
                <th class="text-center">Jumlah Item</th>
                <th class="text-end">Total Pembayaran</th>
                <th class="w-1 text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($sales as $sale)
                <tr>
                  <td>
                    <a href="{{ route('sales.show', $sale) }}" class="fw-bold text-primary font-monospace">
                      {{ $sale->invoice_number }}
                    </a>
                  </td>
                  <td class="text-secondary">
                    {{ $sale->sold_at->translatedFormat('d M Y, H:i') }}
                  </td>
                  <td>
                    <span class="avatar avatar-xs me-1 rounded" style="background-image: url('{{ asset('vendor/tabler/static/avatars/000m.jpg') }}')"></span>
                    {{ $sale->user->name ?? 'Kasir' }}
                  </td>
                  <td class="text-center">
                    <span class="badge bg-secondary-lt">{{ $sale->items->sum('quantity') }} pcs ({{ $sale->items->count() }} jenis)</span>
                  </td>
                  <td class="text-end fw-bold text-dark">
                    Rp {{ number_format($sale->total_amount, 0, ',', '.') }}
                  </td>
                  <td class="text-center text-nowrap">
                    <div class="btn-list flex-nowrap justify-content-center">
                      <a href="{{ route('sales.show', $sale) }}" class="btn btn-sm btn-outline-primary" title="Detail Transaksi">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                        Detail
                      </a>
                      <a href="{{ route('sales.pdf', $sale) }}" class="btn btn-sm btn-outline-secondary" title="Unduh Invoice PDF">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M12 17v-6" /><path d="M9.5 14.5l2.5 2.5l2.5 -2.5" /></svg>
                        PDF
                      </a>
                    </div>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="6" class="text-center py-5 text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-lg mb-2 text-muted" width="48" height="48" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" /><path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /></svg>
                    <p class="mb-0">Belum ada transaksi penjualan yang tercatat.</p>
                  </td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>

        @if ($sales->hasPages())
          <div class="card-footer d-flex align-items-center">
            <p class="m-0 text-secondary">Menampilkan <span>{{ $sales->firstItem() }}</span> hingga <span>{{ $sales->lastItem() }}</span> dari <span>{{ $sales->total() }}</span> transaksi</p>
            <div class="ms-auto">
              {{ $sales->links() }}
            </div>
          </div>
        @endif
      </div>
    </div>
  </main>
@endsection
