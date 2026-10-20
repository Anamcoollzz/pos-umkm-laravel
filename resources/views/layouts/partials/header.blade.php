<!-- BEGIN NAVBAR (DESKTOP) -->
<header class="navbar navbar-expand-md d-none d-lg-flex d-print-none">
  <div class="container-xl">
    <div class="d-none d-md-flex align-items-center">
      <span class="badge bg-green-lt me-2">● Online</span>
      <span class="text-secondary small">Sistem Kasir &amp; Inventori UMKM</span>
    </div>

    <!-- BEGIN NAVBAR ACTIONS -->
    <div class="navbar-nav flex-row order-md-last ms-auto">
      <div class="d-none d-sm-flex me-3">
        <!-- Theme Toggle -->
        <div class="nav-item">
          <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Mode Gelap" data-bs-toggle="tooltip" data-bs-placement="bottom">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454l0 .008" /></svg>
          </a>
          <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Mode Terang" data-bs-toggle="tooltip" data-bs-placement="bottom">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M8 12a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg>
          </a>
        </div>
      </div>

      <!-- Quick Action POS -->
      <div class="nav-item d-none d-md-flex me-3">
        <a href="{{ route('sales.create') }}" class="btn btn-sm btn-primary">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon me-1"><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
          Buka Kasir
        </a>
      </div>

      <!-- User Dropdown Menu -->
      <div class="nav-item dropdown">
        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Menu pengguna">
          <span class="avatar avatar-sm rounded" style="background-image: url('{{ asset('vendor/tabler/static/avatars/000m.jpg') }}')"></span>
          <div class="d-none d-xl-block ps-2">
            <div>{{ Auth::user()->name ?? 'Administrator' }}</div>
            <div class="mt-1 small text-secondary">
              @if (Auth::user()?->isAdmin())
                <span class="badge bg-blue-lt">Admin</span>
              @else
                <span class="badge bg-green-lt">Kasir</span>
              @endif
            </div>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
          <div class="dropdown-header">Akun: {{ Auth::user()->email ?? 'admin@example.com' }}</div>
          <a href="{{ route('dashboard') }}" class="dropdown-item">Dashboard</a>
          @if (Auth::user()?->isAdmin())
            <a href="{{ route('products.index') }}" class="dropdown-item">Manajemen Barang</a>
          @endif
          <a href="{{ route('sales.index') }}" class="dropdown-item">Riwayat Penjualan</a>
          <div class="dropdown-divider"></div>
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="dropdown-item text-danger">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon me-1"><path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" /><path d="M9 12h12l-3 -3" /><path d="M18 15l3 -3" /></svg>
              Keluar (Logout)
            </button>
          </form>
        </div>
      </div>
    </div>
    <!-- END NAVBAR ACTIONS -->
  </div>
</header>
<!-- END NAVBAR -->
