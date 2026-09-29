@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<section class="py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <img src="https://picsum.photos/600/400?random=3" class="img-fluid rounded shadow" alt="Tentang Kami">
      </div>
      <div class="col-md-6 mt-4 mt-md-0">
        <h2>Profil Perusahaan</h2>
        <p>PT. Digital Nusantara adalah penyedia solusi teknologi terdepan yang berfokus pada efisiensi dan transformasi bisnis digital.</p>
        <h3>Visi</h3>
        <p>Menjadi pemimpin penyedia jasa teknologi terdepan di Indonesia.</p>
        <h3>Misi</h3>
        <ul>
          <li>Mengembangkan aplikasi berkualitas tinggi berbasis skala kebutuhan klien.</li>
          <li>Menyediakan layanan konsultasi IT terpercaya.</li>
        </ul>
      </div>
    </div>
  </div>
</section>
@endsection
