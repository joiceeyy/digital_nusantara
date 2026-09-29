@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
<section class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h2 class="text-center mb-4">Hubungi Kami</h2>

        @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <form action="{{ route('kontak.kirim') }}" method="POST">
          @csrf

          <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" placeholder="Masukkan nama Anda">
            @error('nama')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="contoh@domain.com">
            @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea name="pesan" id="pesan" rows="5" class="form-control @error('pesan') is-invalid @enderror" placeholder="Tuliskan pesan Anda">{{ old('pesan') }}</textarea>
            @error('pesan')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <button type="submit" class="btn btn-primary w-100">Kirim Pesan</button>
        </form>

      </div>
    </div>
  </div>
</section>
@endsection
