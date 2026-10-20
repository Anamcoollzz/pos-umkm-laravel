<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Invoice {{ $sale->invoice_number }}</title>
  <style>
    body {
      font-family: Helvetica, Arial, sans-serif;
      font-size: 12px;
      color: #333;
      line-height: 1.4;
      margin: 0;
      padding: 0;
    }
    .header {
      width: 100%;
      margin-bottom: 25px;
      border-bottom: 2px solid #0054a6;
      padding-bottom: 12px;
    }
    .title {
      font-size: 20px;
      font-weight: bold;
      color: #0054a6;
      margin: 0 0 5px 0;
    }
    .subtitle {
      color: #666;
      font-size: 11px;
    }
    .meta-table {
      width: 100%;
      margin-bottom: 20px;
    }
    .meta-table td {
      vertical-align: top;
    }
    .items-table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }
    .items-table th {
      background-color: #f1f5f9;
      color: #334155;
      text-align: left;
      padding: 8px 10px;
      font-size: 11px;
      border-bottom: 1px solid #cbd5e1;
    }
    .items-table td {
      padding: 8px 10px;
      border-bottom: 1px solid #e2e8f0;
    }
    .text-center { text-align: center; }
    .text-right { text-align: right; }
    .bold { font-weight: bold; }
    .total-row td {
      border-top: 2px solid #0054a6;
      font-size: 14px;
      color: #0054a6;
      padding-top: 10px;
    }
    .footer {
      text-align: center;
      margin-top: 40px;
      color: #64748b;
      font-size: 11px;
      border-top: 1px dashed #cbd5e1;
      padding-top: 15px;
    }
  </style>
</head>
<body>
  <div class="header">
    <table style="width: 100%;">
      <tr>
        <td>
          <div class="title">TOKO UMKM KITA</div>
          <div class="subtitle">Sistem Pencatatan Penjualan &amp; Stok Barang</div>
          <div class="subtitle">Jl. Niaga Raya No. 123, Pasar Jaya | Telp: 0812-3456-7890</div>
        </td>
        <td class="text-right" style="vertical-align: top;">
          <div style="font-size: 16px; font-weight: bold; color: #0054a6;">FAKTUR PENJUALAN</div>
          <div style="font-family: monospace; font-size: 13px; font-weight: bold;">{{ $sale->invoice_number }}</div>
        </td>
      </tr>
    </table>
  </div>

  <table class="meta-table">
    <tr>
      <td style="width: 50%;">
        <strong>Diterbitkan Oleh:</strong><br>
        Kasir: {{ $sale->user->name ?? 'Kasir Toko' }}<br>
        Status: <span style="color: #16a34a; font-weight: bold;">LUNAS (Cash)</span>
      </td>
      <td style="width: 50%;" class="text-right">
        <strong>Waktu Transaksi:</strong><br>
        {{ $sale->sold_at->format('d/m/Y') }}<br>
        Pukul {{ $sale->sold_at->format('H:i') }} WIB
      </td>
    </tr>
  </table>

  <table class="items-table">
    <thead>
      <tr>
        <th style="width: 5%;" class="text-center">No</th>
        <th style="width: 45%;">Nama Barang</th>
        <th style="width: 15%;" class="text-center">Qty</th>
        <th style="width: 15%;" class="text-right">Harga Satuan</th>
        <th style="width: 20%;" class="text-right">Subtotal</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($sale->items as $idx => $item)
        <tr>
          <td class="text-center">{{ $idx + 1 }}</td>
          <td>
            <strong>{{ $item->product->name ?? 'Barang' }}</strong><br>
            <span style="font-family: monospace; font-size: 10px; color: #64748b;">{{ $item->product->code ?? '-' }}</span>
          </td>
          <td class="text-center">{{ $item->quantity }}</td>
          <td class="text-right">Rp {{ number_format($item->unit_price, 0, ',', '.') }}</td>
          <td class="text-right bold">Rp {{ number_format($item->subtotal, 0, ',', '.') }}</td>
        </tr>
      @endforeach
      <tr class="total-row">
        <td colspan="4" class="text-right bold">TOTAL PEMBAYARAN:</td>
        <td class="text-right bold">Rp {{ number_format($sale->total_amount, 0, ',', '.') }}</td>
      </tr>
    </tbody>
  </table>

  <div class="footer">
    Terima kasih atas kunjungan dan kepercayaan Anda berbelanja di Toko UMKM Kita.<br>
    Bukti transaksi ini dihasilkan secara otomatis oleh sistem komputer.
  </div>
</body>
</html>
