<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Masuk - Sistem Kasir & Stok UMKM</title>
    <link rel="icon" href="{{ asset('vendor/tabler/favicon.ico') }}" type="image/x-icon"/>
    <!-- CSS files -->
    <link href="{{ asset('vendor/tabler/dist/css/tabler.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('vendor/tabler/preview/css/demo.min.css') }}" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
        --tblr-font-sans-serif: 'Inter', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
        font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
  <body class="d-flex flex-column bg-body-tertiary">
    <script src="{{ asset('vendor/tabler/dist/js/tabler-theme.min.js') }}"></script>
    <div class="page page-center">
      <div class="container container-tight py-4">
        <div class="text-center mb-4">
          <a href="{{ url('/') }}" class="navbar-brand navbar-brand-autodark">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-building-store text-primary">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
              <path d="M3 21l18 0" />
              <path d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4" />
              <path d="M5 21l0 -10.15" />
              <path d="M19 21l0 -10.15" />
              <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
            </svg>
            <span class="h2 ms-2 mb-0 fw-bold">POS UMKM</span>
          </a>
        </div>

        @if (session('success'))
          <div class="alert alert-success alert-dismissible" role="alert">
            <div class="d-flex">
              <div>{{ session('success') }}</div>
            </div>
            <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
          </div>
        @endif

        @if (session('info'))
          <div class="alert alert-info alert-dismissible" role="alert">
            <div class="d-flex">
              <div>{{ session('info') }}</div>
            </div>
            <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
          </div>
        @endif

        @if ($errors->any())
          <div class="alert alert-danger alert-dismissible" role="alert">
            <div class="d-flex">
              <div>{{ $errors->first() }}</div>
            </div>
            <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
          </div>
        @endif

        <div class="card card-md shadow-sm">
          <div class="card-body">
            <h2 class="h2 text-center mb-4">Masuk ke Akun Anda</h2>
            <form action="{{ route('login.post') }}" method="POST" autocomplete="off" novalidate>
              @csrf
              <div class="mb-3">
                <label class="form-label" for="email">Alamat Email</label>
                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="admin@example.com" value="{{ old('email', 'admin@example.com') }}" required autofocus>
                @error('email')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-2">
                <label class="form-label" for="password">Kata Sandi</label>
                <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="••••••••" value="password" required>
                @error('password')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label class="form-check">
                  <input type="checkbox" name="remember" class="form-check-input" checked/>
                  <span class="form-check-label">Ingat saya di perangkat ini</span>
                </label>
              </div>
              <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100">
                  <!-- Download SVG icon from http://tabler.io/icons/icon/login -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M15 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" /><path d="M21 12h-13l3 -3" /><path d="M11 15l-3 -3" /></svg>
                  Masuk Sekarang
                </button>
              </div>
            </form>
          </div>
          <div class="card-footer bg-light-subtle text-secondary small text-center">
            Default Akun: <strong>admin@example.com</strong> | Password: <strong>password</strong>
          </div>
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <script src="{{ asset('vendor/tabler/dist/js/tabler.min.js') }}" defer></script>
  </body>
</html>
