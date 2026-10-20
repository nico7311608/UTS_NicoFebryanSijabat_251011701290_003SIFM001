@extends('layouts.app')

@section('title', 'Beranda - Portal Musik Lokal')

@section('content')
<section class="hero py-5">
    <div class="container py-4 text-center">
        <h1 class="display-4 fw-bold">Portal Musik Lokal</h1>
        <p class="lead mb-4">Kumpulan lagu dan musisi dari berbagai penjuru Nusantara.</p>
        <a href="{{ route('songs.index') }}" class="btn btn-gamelan btn-lg">Jelajahi Lagu</a>
    </div>
</section>

<div class="container mt-5">
    <h4 class="mb-3">Rilisan Terbaru</h4>
    <div class="row g-4">
        @foreach ($featured as $song)
            @include('partials.song-card', ['song' => $song])
        @endforeach
    </div>
</div>
@endsection
