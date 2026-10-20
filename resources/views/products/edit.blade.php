@extends('layouts.app')

@section('title', 'Edit Barang - ' . $product->name)

@section('content')
  <div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <div class="page-pretitle">Inventori</div>
          <h1 class="page-title">Edit Barang: {{ $product->name }}</h1>
        </div>
        <div class="col-auto ms-auto d-print-none">
          <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">
            <!-- Arrow left -->
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
        <div class="col-md-8 col-lg-7">
          <div class="card shadow-sm">
            <div class="card-header">
              <h3 class="card-title">Perbarui Data Barang</h3>
            </div>
            <form action="{{ route('products.update', $product) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="row g-3">
                  <div class="col-sm-6">
                    <label class="form-label required" for="code">Kode Barang / Barcode</label>
                    <input type="text" id="code" name="code" class="form-control font-monospace @error('code') is-invalid @enderror" value="{{ old('code', $product->code) }}" required>
                    @error('code')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label required" for="name">Nama Barang</label>
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $product->name) }}" required>
                    @error('name')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label required" for="purchase_price">Harga Beli (Modal)</label>
                    <div class="input-group">
                      <span class="input-group-text">Rp</span>
                      <input type="number" id="purchase_price" name="purchase_price" class="form-control @error('purchase_price') is-invalid @enderror" value="{{ old('purchase_price', (int)$product->purchase_price) }}" min="0" step="100" required>
                    </div>
                    @error('purchase_price')
                      <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label required" for="selling_price">Harga Jual (Konsumen)</label>
                    <div class="input-group">
                      <span class="input-group-text">Rp</span>
                      <input type="number" id="selling_price" name="selling_price" class="form-control @error('selling_price') is-invalid @enderror" value="{{ old('selling_price', (int)$product->selling_price) }}" min="0" step="100" required>
                    </div>
                    @error('selling_price')
                      <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label required" for="stock">Stok Saat Ini</label>
                    <input type="number" id="stock" name="stock" class="form-control @error('stock') is-invalid @enderror" value="{{ old('stock', $product->stock) }}" min="0" required>
                    @error('stock')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label required" for="minimum_stock">Batas Minimum Stok</label>
                    <input type="number" id="minimum_stock" name="minimum_stock" class="form-control @error('minimum_stock') is-invalid @enderror" value="{{ old('minimum_stock', $product->minimum_stock) }}" min="0" required>
                    @error('minimum_stock')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="card-footer bg-light-subtle d-flex justify-content-end gap-2">
                <a href="{{ route('products.index') }}" class="btn btn-link link-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M5 12l5 5l10 -10" /></svg>
                  Perbarui Barang
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
