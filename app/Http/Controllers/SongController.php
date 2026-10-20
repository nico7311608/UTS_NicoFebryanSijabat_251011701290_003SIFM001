<?php

namespace App\Http\Controllers;

use App\Models\Song;

class SongController extends Controller
{
    public function home()
    {
        $featured = Song::orderByDesc('release_year')->take(4)->get();

        return view('home', compact('featured'));
    }

    public function index()
    {
        $songs = Song::orderBy('title')->get();

        return view('songs.index', compact('songs'));
    }

    public function show(Song $song)
    {
        $related = Song::where('genre', $song->genre)
            ->where('id', '!=', $song->id)
            ->take(3)
            ->get();

        return view('songs.show', compact('song', 'related'));
    }
}
