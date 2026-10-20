@extends('layouts.app')

@section('title', 'Manajemen Barang - Sistem POS UMKM')

@section('content')
  <div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <div class="page-pretitle">Inventori</div>
          <h1 class="page-title">Manajemen Data Barang</h1>
        </div>
        <div class="col-auto ms-auto d-print-none">
          <div class="btn-list">
            <a href="{{ route('products.create') }}" class="btn btn-primary d-inline-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon me-1"><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
              Tambah Barang Baru
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

      @if (session('error'))
        <div class="alert alert-danger alert-dismissible" role="alert">
          <div class="d-flex">
            <div>{{ session('error') }}</div>
          </div>
          <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
        </div>
      @endif

      <!-- Summary Metrics Cards -->
      <div class="row row-cards mb-4">
        <div class="col-sm-6 col-lg-4">
          <div class="card card-sm">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-auto">
                  <span class="bg-primary text-white avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" /><path d="M12 12l8 -4.5" /><path d="M12 12l0 9" /><path d="M12 12l-8 -4.5" /></svg>
                  </span>
                </div>
                <div class="col">
                  <div class="font-weight-medium">Total Produk</div>
                  <div class="text-secondary">{{ $totalProducts }} item terdaftar</div>
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
                  <span class="bg-warning text-white avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M12 9v4" /><path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" /><path d="M12 16h.01" /></svg>
                  </span>
                </div>
                <div class="col">
                  <div class="font-weight-medium">Stok Menipis</div>
                  <div class="text-secondary">{{ $lowStockCount }} produk &le; batas minimum</div>
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
                  <span class="bg-danger text-white avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M10 10l4 4m0 -4l-4 4" /></svg>
                  </span>
                </div>
                <div class="col">
                  <div class="font-weight-medium">Stok Habis</div>
                  <div class="text-secondary">{{ $outOfStockCount }} produk bernilai 0</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Main Products Card -->
      <div class="card">
        <div class="card-header d-flex flex-wrap align-items-center justify-content-between gap-2">
          <h3 class="card-title">Daftar Barang</h3>
          <div class="d-flex align-items-center gap-2">
            <!-- Filter Options -->
            <div class="btn-group" role="group">
              <a href="{{ route('products.index') }}" class="btn btn-sm {{ empty($filter) ? 'btn-primary' : 'btn-outline-secondary' }}">Semua</a>
              <a href="{{ route('products.index', ['filter' => 'low_stock']) }}" class="btn btn-sm {{ $filter === 'low_stock' ? 'btn-warning' : 'btn-outline-secondary' }}">Stok Menipis</a>
              <a href="{{ route('products.index', ['filter' => 'out_of_stock']) }}" class="btn btn-sm {{ $filter === 'out_of_stock' ? 'btn-danger' : 'btn-outline-secondary' }}">Stok Habis</a>
            </div>
            <!-- Search Form -->
            <form action="{{ route('products.index') }}" method="GET" class="d-flex align-items-center">
              @if ($filter)
                <input type="hidden" name="filter" value="{{ $filter }}">
              @endif
              <div class="input-icon">
                <span class="input-icon-addon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
                </span>
                <input type="text" name="search" value="{{ $search }}" class="form-control form-control-sm" placeholder="Cari nama / kode...">
              </div>
              @if ($search !== '')
                <a href="{{ route('products.index', $filter ? ['filter' => $filter] : []) }}" class="btn btn-sm btn-icon btn-ghost-secondary ms-1" title="Reset pencarian">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>
                </a>
              @endif
            </form>
          </div>
        </div>

        <div class="table-responsive">
          <table class="table table-vcenter card-table table-hover">
            <thead>
              <tr>
                <th style="width: 120px;">Kode</th>
                <th>Nama Barang</th>
                <th class="text-end">Harga Beli</th>
                <th class="text-end">Harga Jual</th>
                <th class="text-end">Margin Laba</th>
                <th class="text-center">Sisa Stok</th>
                <th class="text-center">Status</th>
                <th class="w-1 text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($products as $product)
                @php
                  $margin = $product->selling_price - $product->purchase_price;
                  $marginPercent = $product->purchase_price > 0 ? round(($margin / $product->purchase_price) * 100, 1) : 0;
                @endphp
                <tr>
                  <td><span class="badge bg-blue-lt font-monospace">{{ $product->code }}</span></td>
                  <td class="font-weight-medium">{{ $product->name }}</td>
                  <td class="text-end text-secondary">Rp {{ number_format($product->purchase_price, 0, ',', '.') }}</td>
                  <td class="text-end fw-bold text-dark">Rp {{ number_format($product->selling_price, 0, ',', '.') }}</td>
                  <td class="text-end">
                    <span class="text-success font-weight-medium">+Rp {{ number_format($margin, 0, ',', '.') }}</span>
                    <small class="text-secondary">({{ $marginPercent }}%)</small>
                  </td>
                  <td class="text-center font-weight-bold">
                    {{ $product->stock }}
                  </td>
                  <td class="text-center">
                    @if ($product->stock <= 0)
                      <span class="badge bg-danger text-uppercase">Habis</span>
                    @elseif ($product->isLowStock())
                      <span class="badge bg-warning text-uppercase" title="Batas minimum: {{ $product->minimum_stock }}">Menipis</span>
                    @else
                      <span class="badge bg-success text-uppercase">Aman</span>
                    @endif
                  </td>
                  <td class="text-center text-nowrap">
                    <div class="btn-list flex-nowrap justify-content-center">
                      <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-outline-primary" title="Edit Barang">
                        <!-- Edit SVG -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" /><path d="M13.5 6.5l4 4" /></svg>
                        Edit
                      </a>
                      <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#delete-modal-{{ $product->id }}" title="Hapus Barang">
                        <!-- Trash SVG -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                      </button>
                    </div>

                    <!-- Modal Konfirmasi Hapus -->
                    <div class="modal modal-blur fade" id="delete-modal-{{ $product->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          <div class="modal-status bg-danger"></div>
                          <div class="modal-body text-center py-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 9v4" /><path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" /><path d="M12 16h.01" /></svg>
                            <h3>Hapus Barang Ini?</h3>
                            <div class="text-secondary">Apakah Anda yakin ingin menghapus <strong>{{ $product->name }}</strong> ({{ $product->code }})? Tindakan ini tidak dapat dibatalkan.</div>
                          </div>
                          <div class="modal-footer">
                            <div class="w-100">
                              <div class="row">
                                <div class="col">
                                  <button type="button" class="btn w-100" data-bs-dismiss="modal">Batal</button>
                                </div>
                                <div class="col">
                                  <form action="{{ route('products.destroy', $product) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger w-100">Hapus</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="8" class="text-center py-5 text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-lg mb-2 text-muted" width="48" height="48" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" /><path d="M12 12l8 -4.5" /><path d="M12 12l0 9" /><path d="M12 12l-8 -4.5" /></svg>
                    <p class="mb-0">Tidak ada barang yang ditemukan.</p>
                  </td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>

        @if ($products->hasPages())
          <div class="card-footer d-flex align-items-center">
            <p class="m-0 text-secondary">Menampilkan <span>{{ $products->firstItem() }}</span> hingga <span>{{ $products->lastItem() }}</span> dari <span>{{ $products->total() }}</span> barang</p>
            <div class="ms-auto">
              {{ $products->links() }}
            </div>
          </div>
        @endif
      </div>
    </div>
  </main>
@endsection
