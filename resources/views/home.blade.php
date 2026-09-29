@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Slider / Carousel Interaktif -->
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://picsum.photos/1200/400?random=1" class="d-block w-100" alt="Banner 1">
      <div class="carousel-caption d-none d-md-block">
        <h5>Solusi Transformasi Digital</h5>
        <p>Membantu bisnis Anda berkembang pesat di era modern.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/1200/400?random=2" class="d-block w-100" alt="Banner 2">
      <div class="carousel-caption d-none d-md-block">
        <h5>Inovasi Tanpa Batas</h5>
        <p>Pengembangan perangkat lunak yang aman dan andal.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<section class="py-5">
  <div class="container text-center">
    <h2>Selamat Datang di PT. Digital Nusantara</h2>
    <p class="lead mt-3">Mitra terpercaya dalam solusi teknologi informasi dan software engineering terintegrasi.</p>
  </div>
</section>
@endsection
