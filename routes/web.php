<?php

use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SongController::class, 'home'])->name('home');
Route::get('/lagu', [SongController::class, 'index'])->name('songs.index');
Route::get('/lagu/{song}', [SongController::class, 'show'])->name('songs.show');
