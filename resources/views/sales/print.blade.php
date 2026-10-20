<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Struk {{ $sale->invoice_number }}</title>
  <style>
    body {
      font-family: 'Courier New', Courier, monospace;
      font-size: 13px;
      color: #000;
      background: #fff;
      margin: 0;
      padding: 15px;
    }
    .receipt {
      max-width: 320px;
      margin: 0 auto;
    }
    .text-center { text-align: center; }
    .text-end { text-align: right; }
    .bold { font-weight: bold; }
    .dashed-line {
      border-top: 1px dashed #000;
      margin: 8px 0;
    }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    td {
      padding: 3px 0;
      vertical-align: top;
    }
    @media print {
      body { padding: 0; }
      .no-print { display: none !important; }
    }
  </style>
</head>
<body>
  <div class="receipt">
    <div class="no-print" style="margin-bottom: 15px; text-align: center;">
      <button onclick="window.print()" style="padding: 6px 12px; cursor: pointer; font-size: 14px;">Cetak Sekarang</button>
      <button onclick="window.close()" style="padding: 6px 12px; cursor: pointer; font-size: 14px; margin-left: 5px;">Tutup</button>
    </div>

    <div class="text-center">
      <div class="bold" style="font-size: 16px;">TOKO UMKM KITA</div>
      <div>Jl. Niaga Raya No. 123, Pasar Jaya</div>
      <div>Telp: 0812-3456-7890</div>
    </div>

    <div class="dashed-line"></div>

    <div>No: {{ $sale->invoice_number }}</div>
    <div>Tgl: {{ $sale->sold_at->format('d/m/Y H:i') }}</div>
    <div>Kasir: {{ $sale->user->name ?? 'Kasir' }}</div>

    <div class="dashed-line"></div>

    <table>
      @foreach ($sale->items as $item)
        <tr>
          <td colspan="2" class="bold">{{ $item->product->name ?? 'Barang' }}</td>
        </tr>
        <tr>
          <td>{{ $item->quantity }} x {{ number_format($item->unit_price, 0, ',', '.') }}</td>
          <td class="text-end">{{ number_format($item->subtotal, 0, ',', '.') }}</td>
        </tr>
      @endforeach
    </table>

    <div class="dashed-line"></div>

    <table>
      <tr class="bold">
        <td>TOTAL:</td>
        <td class="text-end">Rp {{ number_format($sale->total_amount, 0, ',', '.') }}</td>
      </tr>
    </table>

    <div class="dashed-line"></div>

    <div class="text-center" style="margin-top: 12px;">
      <div>*** TERIMA KASIH ***</div>
      <div style="font-size: 11px; margin-top: 4px;">Barang yang sudah dibeli tidak dapat ditukar/dikembalikan</div>
    </div>
  </div>

  <script>
    window.addEventListener('load', function() {
      window.print();
    });
  </script>
</body>
</html>
