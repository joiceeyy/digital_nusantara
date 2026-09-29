<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PT. Digital Nusantara - @yield('title')</title>
  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { display: flex; flex-direction: column; min-height: 100vh; }
    main { flex: 1; }
    .carousel-item img { max-height: 400px; object-fit: cover; }
    .card { transition: transform 0.2s; }
    .card:hover { transform: translateY(-5px); }
  </style>
</head>
<body>

  <!-- Header Navigasi -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">PT. Digital Nusantara</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->routeIs('tentang') ? 'active' : '' }}" href="{{ route('tentang') }}">Tentang Kami</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->routeIs('layanan') ? 'active' : '' }}" href="{{ route('layanan') }}">Layanan</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->routeIs('kontak') ? 'active' : '' }}" href="{{ route('kontak') }}">Kontak</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Konten Utama -->
  <main>
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <div class="container">
      <p class="mb-0">&copy; {{ date('Y') }} PT. Digital Nusantara. All Rights Reserved.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
