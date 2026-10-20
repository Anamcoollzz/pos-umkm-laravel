@extends('layouts.app')

@section('title', 'Faktur Penjualan - ' . $sale->invoice_number)

@section('content')
  <div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <div class="page-pretitle">Detail Transaksi</div>
          <h1 class="page-title">Faktur #{{ $sale->invoice_number }}</h1>
        </div>
        <div class="col-auto ms-auto d-print-none">
          <div class="btn-list">
            <a href="{{ route('sales.index') }}" class="btn btn-outline-secondary">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M5 12l14 0" /><path d="M5 12l6 6" /><path d="M5 12l6 -6" /></svg>
              Riwayat
            </a>
            <a href="{{ route('sales.create') }}" class="btn btn-outline-primary">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
              Transaksi Baru
            </a>
            <a href="{{ route('sales.print', $sale) }}" target="_blank" class="btn btn-secondary">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" /><path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" /><path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z" /></svg>
              Cetak Struk
            </a>
            <a href="{{ route('sales.pdf', $sale) }}" class="btn btn-primary">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M12 17v-6" /><path d="M9.5 14.5l2.5 2.5l2.5 -2.5" /></svg>
              Unduh PDF
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

      <div class="card card-lg shadow-sm">
        <div class="card-body">
          <div class="row">
            <div class="col-6">
              <p class="h3 mb-1">TOKO UMKM KITA</p>
              <address class="text-secondary small">
                Jl. Niaga Raya No. 123, Pasar Jaya<br>
                Kota Anda, Indonesia<br>
                Telp / WhatsApp: 0812-3456-7890
              </address>
            </div>
            <div class="col-6 text-end">
              <p class="h2 text-primary font-monospace mb-1">{{ $sale->invoice_number }}</p>
              <div class="text-secondary small">
                Tanggal: <strong>{{ $sale->sold_at->translatedFormat('d F Y, H:i') }} WIB</strong><br>
                Kasir: <strong>{{ $sale->user->name ?? 'Kasir' }}</strong>
              </div>
            </div>
          </div>

          <div class="table-responsive my-4">
            <table class="table table-transparent table-responsive">
              <thead>
                <tr>
                  <th class="text-center" style="width: 1%">#</th>
                  <th>Deskripsi Barang</th>
                  <th class="text-center" style="width: 10%">Qty</th>
                  <th class="text-end" style="width: 20%">Harga Satuan</th>
                  <th class="text-end" style="width: 20%">Subtotal</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($sale->items as $index => $item)
                  <tr>
                    <td class="text-center text-secondary">{{ $index + 1 }}</td>
                    <td>
                      <p class="strong mb-0">{{ $item->product->name ?? 'Barang Dihapus' }}</p>
                      <div class="text-secondary small font-monospace">{{ $item->product->code ?? '-' }}</div>
                    </td>
                    <td class="text-center fw-bold">{{ $item->quantity }}</td>
                    <td class="text-end">Rp {{ number_format($item->unit_price, 0, ',', '.') }}</td>
                    <td class="text-end fw-bold">Rp {{ number_format($item->subtotal, 0, ',', '.') }}</td>
                  </tr>
                @endforeach
                <tr>
                  <td colspan="4" class="strong text-end pt-3">Total Tagihan</td>
                  <td class="text-end pt-3 h2 text-primary fw-bold">Rp {{ number_format($sale->total_amount, 0, ',', '.') }}</td>
                </tr>
              </tbody>
            </table>
          </div>

          <p class="text-secondary text-center small mt-5 mb-0">
            Terima kasih telah berbelanja di Toko UMKM Kami! Simpan struk ini sebagai bukti pembayaran yang sah.
          </p>
        </div>
      </div>
    </div>
  </main>
@endsection
