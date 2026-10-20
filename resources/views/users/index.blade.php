@extends('layouts.app')

@section('title', 'Manajemen Pengguna & Kasir - Sistem POS UMKM')

@section('content')
  <div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <div class="page-pretitle">Pengaturan Pengguna</div>
          <h1 class="page-title">Manajemen Kasir &amp; Pengguna</h1>
        </div>
        <div class="col-auto ms-auto d-print-none">
          <a href="{{ route('users.create') }}" class="btn btn-primary d-inline-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon me-1"><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
            Tambah Pengguna Baru
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

      @if (session('error'))
        <div class="alert alert-danger alert-dismissible" role="alert">
          <div class="d-flex">
            <div>{{ session('error') }}</div>
          </div>
          <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
        </div>
      @endif

      <!-- Summary metrics cards -->
      <div class="row row-cards mb-4">
        <div class="col-sm-6 col-lg-4">
          <div class="card card-sm shadow-sm">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-auto">
                  <span class="bg-primary text-white avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
                  </span>
                </div>
                <div class="col">
                  <div class="font-weight-medium">Total Akun Pengguna</div>
                  <div class="text-secondary">{{ $totalUsers }} akun terdaftar</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card card-sm shadow-sm">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-auto">
                  <span class="bg-success text-white avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
                  </span>
                </div>
                <div class="col">
                  <div class="font-weight-medium">Staf Kasir</div>
                  <div class="text-secondary fw-bold text-success">{{ $totalKasir }} kasir bertugas</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card card-sm shadow-sm">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-auto">
                  <span class="bg-blue text-white avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3" /></svg>
                  </span>
                </div>
                <div class="col">
                  <div class="font-weight-medium">Administrator</div>
                  <div class="text-secondary fw-bold text-primary">{{ $totalAdmin }} admin sistem</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Main Users Table Card -->
      <div class="card shadow-sm">
        <div class="card-header d-flex flex-wrap align-items-center justify-content-between gap-2">
          <h3 class="card-title">Daftar Akun Pengguna</h3>
          <div class="d-flex align-items-center gap-2">
            <div class="btn-group" role="group">
              <a href="{{ route('users.index') }}" class="btn btn-sm {{ empty($role) ? 'btn-primary' : 'btn-outline-secondary' }}">Semua</a>
              <a href="{{ route('users.index', ['role' => 'kasir']) }}" class="btn btn-sm {{ $role === 'kasir' ? 'btn-success' : 'btn-outline-secondary' }}">Kasir</a>
              <a href="{{ route('users.index', ['role' => 'admin']) }}" class="btn btn-sm {{ $role === 'admin' ? 'btn-blue' : 'btn-outline-secondary' }}">Admin</a>
            </div>

            <form action="{{ route('users.index') }}" method="GET" class="d-flex align-items-center">
              @if ($role)
                <input type="hidden" name="role" value="{{ $role }}">
              @endif
              <div class="input-icon">
                <span class="input-icon-addon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
                </span>
                <input type="text" name="search" value="{{ $search }}" class="form-control form-control-sm" placeholder="Cari nama / email...">
              </div>
              @if ($search !== '')
                <a href="{{ route('users.index', $role ? ['role' => $role] : []) }}" class="btn btn-sm btn-icon btn-ghost-secondary ms-1" title="Reset">
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
                <th>Pengguna</th>
                <th>Email Login</th>
                <th class="text-center">Peran (Role)</th>
                <th class="text-center">Total Transaksi Diproses</th>
                <th>Dibuat Pada</th>
                <th class="w-1 text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($users as $user)
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="avatar avatar-sm me-2 rounded" style="background-image: url('{{ asset('vendor/tabler/static/avatars/000m.jpg') }}')"></span>
                      <div>
                        <div class="font-weight-medium">{{ $user->name }}</div>
                        @if (Auth::id() === $user->id)
                          <div class="badge bg-secondary-lt" style="font-size: 10px;">Akun Anda Saat Ini</div>
                        @endif
                      </div>
                    </div>
                  </td>
                  <td class="text-secondary font-monospace">{{ $user->email }}</td>
                  <td class="text-center">
                    @if ($user->isAdmin())
                      <span class="badge bg-blue text-white">ADMINISTRATOR</span>
                    @else
                      <span class="badge bg-green text-white">KASIR</span>
                    @endif
                  </td>
                  <td class="text-center font-weight-bold">
                    {{ $user->sales_count }} transaksi
                  </td>
                  <td class="text-secondary small">
                    {{ $user->created_at ? $user->created_at->translatedFormat('d M Y') : '-' }}
                  </td>
                  <td class="text-center text-nowrap">
                    <div class="btn-list flex-nowrap justify-content-center">
                      <a href="{{ route('users.edit', $user) }}" class="btn btn-sm btn-outline-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" /><path d="M13.5 6.5l4 4" /></svg>
                        Edit
                      </a>

                      @if (Auth::id() !== $user->id)
                        <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#delete-user-modal-{{ $user->id }}">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                        </button>
                      @endif
                    </div>

                    <!-- Modal Delete User -->
                    @if (Auth::id() !== $user->id)
                      <div class="modal modal-blur fade" id="delete-user-modal-{{ $user->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="modal-status bg-danger"></div>
                            <div class="modal-body text-center py-4">
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 9v4" /><path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" /><path d="M12 16h.01" /></svg>
                              <h3>Hapus Akun Pengguna?</h3>
                              <div class="text-secondary">Apakah Anda yakin ingin menghapus <strong>{{ $user->name }}</strong> ({{ $user->email }})?</div>
                            </div>
                            <div class="modal-footer">
                              <div class="w-100">
                                <div class="row">
                                  <div class="col">
                                    <button type="button" class="btn w-100" data-bs-dismiss="modal">Batal</button>
                                  </div>
                                  <div class="col">
                                    <form action="{{ route('users.destroy', $user) }}" method="POST">
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
                    @endif
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="6" class="text-center py-4 text-secondary">
                    Tidak ada akun pengguna yang sesuai kriteria pencarian.
                  </td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>

        @if ($users->hasPages())
          <div class="card-footer d-flex align-items-center">
            <p class="m-0 text-secondary">Menampilkan <span>{{ $users->firstItem() }}</span> hingga <span>{{ $users->lastItem() }}</span> dari <span>{{ $users->total() }}</span> pengguna</p>
            <div class="ms-auto">
              {{ $users->links() }}
            </div>
          </div>
        @endif
      </div>
    </div>
  </main>
@endsection
