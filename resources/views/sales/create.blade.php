@extends('layouts.app')

@section('title', 'Transaksi Penjualan Baru (Kasir) - Sistem POS UMKM')

@section('content')
  <div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <div class="page-pretitle">Kasir / POS</div>
          <h1 class="page-title">Transaksi Penjualan Baru</h1>
        </div>
        <div class="col-auto ms-auto d-print-none">
          <a href="{{ route('sales.index') }}" class="btn btn-outline-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M9 14l-4 -4l4 -4" /><path d="M5 10h11a4 4 0 1 1 0 8h-1" /></svg>
            Riwayat Penjualan
          </a>
        </div>
      </div>
    </div>
  </div>

  <main id="content" class="page-body">
    <div class="container-xl">
      @if ($errors->any())
        <div class="alert alert-danger alert-dismissible" role="alert">
          <div class="d-flex">
            <div>
              <h4 class="alert-title">Gagal Memproses Transaksi</h4>
              <div class="text-secondary">{{ $errors->first() }}</div>
            </div>
          </div>
          <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
        </div>
      @endif

      <form id="pos-form" action="{{ route('sales.store') }}" method="POST">
        @csrf
        <div class="row row-cards">
          <!-- Left Column: Available Products Selection -->
          <div class="col-lg-7">
            <div class="card h-100 shadow-sm">
              <div class="card-header d-flex flex-wrap align-items-center justify-content-between gap-2">
                <h3 class="card-title">Pilih Barang</h3>
                <div class="input-icon" style="max-width: 250px;">
                  <span class="input-icon-addon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
                  </span>
                  <input type="text" id="search-product" class="form-control form-control-sm" placeholder="Cari nama / kode barang...">
                </div>
              </div>

              <div class="table-responsive" style="max-height: 520px; overflow-y: auto;">
                <table class="table table-vcenter card-table table-hover" id="products-table">
                  <thead>
                    <tr>
                      <th>Kode</th>
                      <th>Nama Barang</th>
                      <th class="text-end">Harga</th>
                      <th class="text-center">Sisa Stok</th>
                      <th class="w-1 text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($products as $p)
                      <tr class="product-row" data-id="{{ $p->id }}" data-name="{{ $p->name }}" data-price="{{ (int)$p->selling_price }}" data-stock="{{ $p->stock }}">
                        <td><span class="badge bg-blue-lt font-monospace">{{ $p->code }}</span></td>
                        <td class="product-name font-weight-medium">{{ $p->name }}</td>
                        <td class="text-end fw-bold text-dark">Rp {{ number_format($p->selling_price, 0, ',', '.') }}</td>
                        <td class="text-center">
                          <span class="badge {{ $p->stock <= $p->minimum_stock ? 'bg-warning-lt text-warning' : 'bg-success-lt text-success' }}">
                            {{ $p->stock }}
                          </span>
                        </td>
                        <td class="text-center">
                          <button type="button" class="btn btn-sm btn-primary add-to-cart-btn" data-id="{{ $p->id }}" data-name="{{ $p->name }}" data-price="{{ (int)$p->selling_price }}" data-stock="{{ $p->stock }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                            Tambah
                          </button>
                        </td>
                      </tr>
                    @empty
                      <tr>
                        <td colspan="5" class="text-center py-4 text-secondary">
                          Belum ada barang dengan stok tersedia. <a href="{{ route('products.create') }}">Tambah barang</a> terlebih dahulu.
                        </td>
                      </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- Right Column: Cart & Checkout Summary -->
          <div class="col-lg-5">
            <div class="card shadow-sm border-primary">
              <div class="card-header bg-primary text-white d-flex align-items-center justify-content-between">
                <div>
                  <h3 class="card-title text-white mb-0">Keranjang Belanja</h3>
                  <small class="text-white-50">Invoice: {{ $suggestedInvoice }}</small>
                </div>
                <span class="badge bg-white text-primary" id="cart-item-count">0 Item</span>
              </div>

              <!-- Cart items container -->
              <div class="card-body p-0" style="max-height: 320px; overflow-y: auto;">
                <table class="table table-vcenter mb-0" id="cart-table">
                  <thead class="table-light">
                    <tr>
                      <th>Barang</th>
                      <th class="text-center" style="width: 100px;">Qty</th>
                      <th class="text-end" style="width: 110px;">Subtotal</th>
                      <th style="width: 40px;"></th>
                    </tr>
                  </thead>
                  <tbody id="cart-items-body">
                    <tr id="empty-cart-row">
                      <td colspan="4" class="text-center py-4 text-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon text-muted mb-2"><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
                        <div>Keranjang masih kosong.</div>
                        <small class="text-muted">Klik tombol "+ Tambah" pada daftar barang.</small>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <!-- Cart Calculation Footer -->
              <div class="card-footer bg-light-subtle">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <span class="h3 mb-0">Total Belanja:</span>
                  <span class="h2 text-primary mb-0 fw-bold" id="grand-total-display">Rp 0</span>
                </div>

                <div class="mb-3">
                  <label class="form-label" for="paid-amount">Uang Tunai Diterima (Rp)</label>
                  <input type="number" id="paid-amount" name="paid_amount" class="form-control form-control-lg text-end fw-bold" placeholder="0" min="0" step="500">
                </div>

                <div class="d-flex justify-content-between align-items-center mb-3 p-2 rounded bg-body">
                  <span class="font-weight-medium text-secondary">Kembalian:</span>
                  <span class="h3 mb-0 text-success fw-bold" id="change-amount-display">Rp 0</span>
                </div>

                <button type="submit" id="submit-btn" class="btn btn-success btn-lg w-100" disabled>
                  <!-- Checkmark icon -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon me-1"><path d="M5 12l5 5l10 -10" /></svg>
                  Proses Transaksi & Simpan
                </button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </main>
@endsection

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const cart = {};
    const cartBody = document.getElementById('cart-items-body');
    const emptyRow = document.getElementById('empty-cart-row');
    const grandTotalDisplay = document.getElementById('grand-total-display');
    const changeDisplay = document.getElementById('change-amount-display');
    const paidInput = document.getElementById('paid-amount');
    const submitBtn = document.getElementById('submit-btn');
    const cartItemCountBadge = document.getElementById('cart-item-count');
    const searchInput = document.getElementById('search-product');

    // Search filter for product list
    searchInput.addEventListener('input', function () {
      const term = this.value.toLowerCase().trim();
      document.querySelectorAll('.product-row').forEach(row => {
        const text = (row.dataset.name + ' ' + row.querySelector('.badge').textContent).toLowerCase();
        row.style.display = text.includes(term) ? '' : 'none';
      });
    });

    // Add to cart click handler
    document.querySelectorAll('.add-to-cart-btn').forEach(btn => {
      btn.addEventListener('click', function () {
        const id = this.dataset.id;
        const name = this.dataset.name;
        const price = parseInt(this.dataset.price, 10);
        const maxStock = parseInt(this.dataset.stock, 10);

        if (cart[id]) {
          if (cart[id].qty < maxStock) {
            cart[id].qty += 1;
          } else {
            alert('Jumlah melebihi stok yang tersedia (' + maxStock + ' item)!');
            return;
          }
        } else {
          cart[id] = { id, name, price, qty: 1, maxStock };
        }

        renderCart();
      });
    });

    function formatRupiah(amount) {
      return 'Rp ' + amount.toLocaleString('id-ID');
    }

    function renderCart() {
      const keys = Object.keys(cart);

      if (keys.length === 0) {
        cartBody.innerHTML = '';
        cartBody.appendChild(emptyRow);
        grandTotalDisplay.textContent = 'Rp 0';
        changeDisplay.textContent = 'Rp 0';
        cartItemCountBadge.textContent = '0 Item';
        submitBtn.disabled = true;
        return;
      }

      emptyRow.remove();
      cartBody.innerHTML = '';

      let total = 0;
      let totalItems = 0;

      keys.forEach((key, index) => {
        const item = cart[key];
        const subtotal = item.qty * item.price;
        total += subtotal;
        totalItems += item.qty;

        const tr = document.createElement('tr');
        tr.innerHTML = `
          <td>
            <div class="font-weight-medium">${item.name}</div>
            <div class="small text-secondary">@ ${formatRupiah(item.price)}</div>
            <input type="hidden" name="items[${index}][product_id]" value="${item.id}">
          </td>
          <td class="text-center">
            <div class="input-group input-group-sm">
              <button type="button" class="btn btn-outline-secondary btn-icon dec-btn" data-id="${item.id}">-</button>
              <input type="number" name="items[${index}][quantity]" value="${item.qty}" min="1" max="${item.maxStock}" class="form-control text-center qty-input" data-id="${item.id}" style="width: 48px;">
              <button type="button" class="btn btn-outline-secondary btn-icon inc-btn" data-id="${item.id}">+</button>
            </div>
          </td>
          <td class="text-end fw-bold">${formatRupiah(subtotal)}</td>
          <td class="text-center">
            <button type="button" class="btn btn-sm btn-ghost-danger btn-icon del-btn" data-id="${item.id}" title="Hapus item">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>
            </button>
          </td>
        `;
        cartBody.appendChild(tr);
      });

      grandTotalDisplay.textContent = formatRupiah(total);
      cartItemCountBadge.textContent = totalItems + ' Item';
      submitBtn.disabled = false;

      attachCartEvents();
      calculateChange(total);
    }

    function attachCartEvents() {
      document.querySelectorAll('.inc-btn').forEach(btn => {
        btn.addEventListener('click', function () {
          const id = this.dataset.id;
          if (cart[id].qty < cart[id].maxStock) {
            cart[id].qty += 1;
            renderCart();
          } else {
            alert('Stok maksimum tercapai (' + cart[id].maxStock + ' item)!');
          }
        });
      });

      document.querySelectorAll('.dec-btn').forEach(btn => {
        btn.addEventListener('click', function () {
          const id = this.dataset.id;
          if (cart[id].qty > 1) {
            cart[id].qty -= 1;
            renderCart();
          } else {
            delete cart[id];
            renderCart();
          }
        });
      });

      document.querySelectorAll('.qty-input').forEach(input => {
        input.addEventListener('change', function () {
          const id = this.dataset.id;
          let val = parseInt(this.value, 10);
          if (isNaN(val) || val < 1) val = 1;
          if (val > cart[id].maxStock) {
            alert('Stok maksimum tercapai (' + cart[id].maxStock + ' item)!');
            val = cart[id].maxStock;
          }
          cart[id].qty = val;
          renderCart();
        });
      });

      document.querySelectorAll('.del-btn').forEach(btn => {
        btn.addEventListener('click', function () {
          const id = this.dataset.id;
          delete cart[id];
          renderCart();
        });
      });
    }

    function calculateChange(total) {
      const paid = parseFloat(paidInput.value) || 0;
      if (paid >= total && total > 0) {
        changeDisplay.textContent = formatRupiah(paid - total);
        changeDisplay.classList.remove('text-danger');
        changeDisplay.classList.add('text-success');
      } else if (paid > 0) {
        changeDisplay.textContent = 'Kurang ' + formatRupiah(total - paid);
        changeDisplay.classList.remove('text-success');
        changeDisplay.classList.add('text-danger');
      } else {
        changeDisplay.textContent = 'Rp 0';
        changeDisplay.classList.remove('text-danger');
        changeDisplay.classList.add('text-success');
      }
    }

    paidInput.addEventListener('input', function () {
      let total = 0;
      Object.keys(cart).forEach(k => {
        total += cart[k].qty * cart[k].price;
      });
      calculateChange(total);
    });
  });
</script>
@endpush
