@extends('layouts.app')

@section('title', $song->title . ' - Portal Musik Lokal')

@section('content')
<div class="container mt-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{ route('songs.index') }}">Daftar Lagu</a></li>
            <li class="breadcrumb-item active">{{ $song->title }}</li>
        </ol>
    </nav>

    <div class="card song-card">
        <div class="row g-0">
            <div class="col-md-5">
                <img src="{{ asset('assets/images/' . $song->image) }}" class="img-fluid rounded-start w-100" alt="Sampul {{ $song->title }}">
            </div>
            <div class="col-md-7">
                <div class="card-body p-4">
                    <h2 class="card-title">{{ $song->title }}</h2>
                    <p class="fs-5 text-muted">{{ $song->artist }}</p>
                    <table class="table table-borderless mb-4">
                        <tr><th style="width:160px">Album</th><td>{{ $song->album }}</td></tr>
                        <tr><th>Genre</th><td><span class="badge badge-genre">{{ $song->genre }}</span></td></tr>
                        <tr><th>Durasi</th><td>{{ $song->duration }} menit</td></tr>
                        <tr><th>Tahun Rilis</th><td>{{ $song->release_year }}</td></tr>
                    </table>
                    <a href="{{ route('songs.index') }}" class="btn btn-outline-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>

    @if ($related->isNotEmpty())
        <h5 class="mt-5 mb-3">Lagu {{ $song->genre }} lainnya</h5>
        <div class="row g-4">
            @foreach ($related as $item)
                @include('partials.song-card', ['song' => $item])
            @endforeach
        </div>
    @endif
</div>
@endsection
