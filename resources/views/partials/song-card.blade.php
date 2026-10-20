<div class="col-6 col-md-4 col-lg-3">
    <div class="card song-card h-100">
        <img src="{{ asset('assets/images/' . $song->image) }}" class="card-img-top" alt="Sampul {{ $song->title }}">
        <div class="card-body d-flex flex-column">
            <h6 class="card-title mb-1">{{ $song->title }}</h6>
            <p class="card-text text-muted small mb-2">{{ $song->artist }}</p>
            <div class="mb-3">
                <span class="badge badge-genre">{{ $song->genre }}</span>
                <span class="small text-muted ms-1">{{ $song->duration }}</span>
            </div>
            <a href="{{ route('songs.show', $song) }}" class="btn btn-gamelan btn-sm mt-auto">Lihat Detail</a>
        </div>
    </div>
</div>
