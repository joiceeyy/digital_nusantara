@extends('layouts.app')

@section('title', 'Layanan')

@section('content')
<section class="py-5">
  <div class="container">
    <h2 class="text-center mb-5">Layanan Kami</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Pengembangan Web</h5>
            <p class="card-text">Pembuatan website responsif, aman, dan scalable menggunakan teknologi terkini.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Aplikasi Mobile</h5>
            <p class="card-text">Pengembangan aplikasi Android dan iOS intuitif untuk berbagai kebutuhan industri.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Konsultasi IT</h5>
            <p class="card-text">Layanan analisis sistem dan rekomendasi arsitektur perangkat lunak bisnis.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
