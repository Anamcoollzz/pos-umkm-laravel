@extends('layouts.app')

@section('title', 'Tambah Pengguna / Kasir Baru - Sistem POS UMKM')

@section('content')
  <div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <div class="page-pretitle">Pengaturan Pengguna</div>
          <h1 class="page-title">Tambah Pengguna Baru</h1>
        </div>
        <div class="col-auto ms-auto d-print-none">
          <a href="{{ route('users.index') }}" class="btn btn-outline-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M5 12l14 0" /><path d="M5 12l6 6" /><path d="M5 12l6 -6" /></svg>
            Kembali
          </a>
        </div>
      </div>
    </div>
  </div>

  <main id="content" class="page-body">
    <div class="container-xl">
      <div class="row row-cards justify-content-center">
        <div class="col-md-8 col-lg-6">
          <div class="card shadow-sm">
            <div class="card-header">
              <h3 class="card-title">Formulir Akun Pengguna</h3>
            </div>
            <form action="{{ route('users.store') }}" method="POST">
              @csrf
              <div class="card-body">
                <div class="mb-3">
                  <label class="form-label required" for="name">Nama Lengkap</label>
                  <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Contoh: Budi Santoso" required autofocus>
                  @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label required" for="email">Alamat Email (Untuk Login)</label>
                  <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="budi@example.com" required>
                  @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label required" for="password">Kata Sandi</label>
                  <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Minimal 6 karakter" required>
                  @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label required">Peran Akun (Role)</label>
                  <div class="form-selectgroup">
                    <label class="form-selectgroup-item">
                      <input type="radio" name="role" value="kasir" class="form-selectgroup-input" {{ old('role', 'kasir') === 'kasir' ? 'checked' : '' }}>
                      <span class="form-selectgroup-label d-flex align-items-center p-3">
                        <span class="me-3">
                          <span class="form-selectgroup-check"></span>
                        </span>
                        <span class="form-selectgroup-label-content">
                          <span class="form-selectgroup-title strong mb-1">Kasir (Staf Penjualan)</span>
                          <span class="d-block text-secondary small">Akses hanya ke Kasir (POS) dan Riwayat Penjualan.</span>
                        </span>
                      </span>
                    </label>

                    <label class="form-selectgroup-item mt-2">
                      <input type="radio" name="role" value="admin" class="form-selectgroup-input" {{ old('role') === 'admin' ? 'checked' : '' }}>
                      <span class="form-selectgroup-label d-flex align-items-center p-3">
                        <span class="me-3">
                          <span class="form-selectgroup-check"></span>
                        </span>
                        <span class="form-selectgroup-label-content">
                          <span class="form-selectgroup-title strong mb-1">Administrator (Pemilik Toko)</span>
                          <span class="d-block text-secondary small">Akses penuh ke semua menu termasuk Laba Kotor dan Manajemen Barang.</span>
                        </span>
                      </span>
                    </label>
                  </div>
                  @error('role')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                  @enderror
                </div>
              </div>

              <div class="card-footer bg-light-subtle d-flex justify-content-end gap-2">
                <a href="{{ route('users.index') }}" class="btn btn-link link-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M5 12l5 5l10 -10" /></svg>
                  Simpan Akun
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
