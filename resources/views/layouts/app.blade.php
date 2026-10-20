<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Portal Musik Lokal')</title>

    {{-- Bootstrap dari folder public/Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">

    <style>
        body { background: #f6f1e7; color: #2b2118; }
        .navbar-brand { font-weight: 700; letter-spacing: .3px; }
        .bg-gamelan { background: #3b2a1a; }
        .hero {
            background: linear-gradient(135deg, #3b2a1a 0%, #7a4b1f 100%);
            color: #fff7e6;
        }
        .song-card img { aspect-ratio: 1 / 1; object-fit: cover; }
        .song-card { border: 0; box-shadow: 0 2px 8px rgba(59,42,26,.12); }
        .badge-genre { background: #c8872b; }
        .btn-gamelan { background: #c8872b; border-color: #c8872b; color: #fff; }
        .btn-gamelan:hover { background: #a86e1f; border-color: #a86e1f; color: #fff; }
        footer { color: #6b5a47; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-gamelan">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">&#9835; Portal Musik Lokal</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('songs.*') ? 'active' : '' }}" href="{{ route('songs.index') }}">Daftar Lagu</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main>
    @yield('content')
</main>

<footer class="container py-4 mt-5 border-top small">
    UTS Rekayasa Web &mdash; Universitas Pamulang &middot; NIM:251011701290 &middot; Nama:Nico Febryan Sijabat
</footer>

<script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
