<!-- BEGIN SIDEBAR -->
<aside class="navbar navbar-vertical navbar-expand-lg">
  <div class="container-fluid">
    <!-- BEGIN NAVBAR TOGGLER -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu" aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle sidebar navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- END NAVBAR TOGGLER -->

    <!-- BEGIN NAVBAR LOGO -->
    <div class="navbar-brand navbar-brand-autodark px-0 py-3 text-start">
      <a href="{{ route('dashboard') }}" class="d-flex align-items-center text-decoration-none text-reset">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-building-store text-primary me-2">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <path d="M3 21l18 0" />
          <path d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4" />
          <path d="M5 21l0 -10.15" />
          <path d="M19 21l0 -10.15" />
          <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
        </svg>
        <div>
          <div class="h3 mb-0 fw-bold">POS UMKM</div>
          <div class="small text-secondary" style="font-size: 11px;">Penjualan &amp; Stok</div>
        </div>
      </a>
    </div>
    <!-- END NAVBAR LOGO -->

    <!-- BEGIN SIDEBAR USER (MOBILE/DESKTOP) -->
    <div class="navbar-footer d-none d-lg-block order-last mt-auto border-top pt-3">
      <div class="d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center text-truncate">
          <span style="background-image: url('{{ asset('vendor/tabler/static/avatars/000m.jpg') }}')" class="avatar avatar-sm me-2"></span>
          <div class="text-truncate">
            <div class="font-weight-medium text-truncate">{{ Auth::user()->name ?? 'Administrator' }}</div>
            <div class="small text-secondary text-truncate d-flex align-items-center gap-1 mt-1" style="font-size: 11px;">
              @if (Auth::user()?->isAdmin())
                <span class="badge bg-blue-lt">Admin</span>
              @else
                <span class="badge bg-green-lt">Kasir</span>
              @endif
              <span class="text-truncate">{{ Auth::user()->email ?? '' }}</span>
            </div>
          </div>
        </div>
        <form action="{{ route('logout') }}" method="POST" class="ms-2">
          @csrf
          <button type="submit" class="btn btn-sm btn-icon btn-ghost-danger" title="Keluar / Logout">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" /><path d="M9 12h12l-3 -3" /><path d="M18 15l3 -3" /></svg>
          </button>
        </form>
      </div>
    </div>
    <!-- END SIDEBAR USER -->

    <nav class="collapse navbar-collapse" id="sidebar-menu" aria-label="Sidebar">
      <ul class="navbar-nav pt-lg-3">
        <li class="nav-section-title">Menu Utama</li>

        <!-- 1. Dashboard -->
        <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('dashboard') }}">
            <span class="nav-link-icon">
              <!-- Home icon -->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
            </span>
            <span class="nav-link-title">Dashboard</span>
          </a>
        </li>

        <li class="nav-section-title mt-2">Penjualan</li>

        <!-- 2. Transaksi Kasir -->
        <li class="nav-item {{ request()->routeIs('sales.create') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('sales.create') }}">
            <span class="nav-link-icon text-primary">
              <!-- Cashier / Cart icon -->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
            </span>
            <span class="nav-link-title">Kasir (POS Baru)</span>
            <span class="badge badge-sm bg-primary-lt ms-auto">POS</span>
          </a>
        </li>

        <!-- 3. Riwayat Transaksi -->
        <li class="nav-item {{ request()->routeIs('sales.index') || request()->routeIs('sales.show') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('sales.index') }}">
            <span class="nav-link-icon">
              <!-- Receipt icon -->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2m4 -14h6m-6 4h6m-2 4h2" /></svg>
            </span>
            <span class="nav-link-title">Riwayat Penjualan</span>
          </a>
        </li>

        @if (Auth::user()?->isAdmin())
        <li class="nav-section-title mt-2">Inventori (Admin)</li>

        <!-- 4. Data Barang -->
        <li class="nav-item {{ request()->routeIs('products.index') || request()->routeIs('products.edit') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('products.index') }}">
            <span class="nav-link-icon">
              <!-- Package icon -->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" /><path d="M12 12l8 -4.5" /><path d="M12 12l0 9" /><path d="M12 12l-8 -4.5" /></svg>
            </span>
            <span class="nav-link-title">Manajemen Barang</span>
          </a>
        </li>

        <!-- 5. Tambah Barang -->
        <li class="nav-item {{ request()->routeIs('products.create') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('products.create') }}">
            <span class="nav-link-icon">
              <!-- Plus icon -->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
            </span>
            <span class="nav-link-title">Tambah Barang Baru</span>
          </a>
        </li>

        <li class="nav-section-title mt-2">Pengguna (Admin)</li>

        <!-- 6. Kelola Pengguna / Kasir -->
        <li class="nav-item {{ request()->routeIs('users.*') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('users.index') }}">
            <span class="nav-link-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>
            </span>
            <span class="nav-link-title">Kelola Kasir &amp; Akun</span>
          </a>
        </li>
        @endif
      </ul>
    </nav>
  </div>
</aside>
<!-- END SIDEBAR -->
