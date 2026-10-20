@extends('layouts.app')

@section('title', 'Daftar Lagu - Portal Musik Lokal')

@section('content')
<div class="container mt-5">
    <h2 class="mb-1">Daftar Lagu</h2>
    <p class="text-muted mb-4">{{ $songs->count() }} lagu dari musisi lokal.</p>

    <div class="row g-4">
        @forelse ($songs as $song)
            @include('partials.song-card', ['song' => $song])
        @empty
            <p>Belum ada lagu. Jalankan <code>php artisan db:seed</code> untuk mengisi data.</p>
        @endforelse
    </div>
</div>
@endsection
