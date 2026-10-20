<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    public function run(): void
    {
        $songs = [
            ['title' => 'Senja di Kota Tua',   'artist' => 'Raka Pradipta',   'album' => 'Langit Batavia',   'genre' => 'Pop',        'duration' => '03:45', 'image' => 'senja-di-kota-tua.png',   'release_year' => 2023],
            ['title' => 'Pulang ke Jogja',     'artist' => 'Laras Wening',    'album' => 'Gending Rindu',    'genre' => 'Keroncong',  'duration' => '04:12', 'image' => 'pulang-ke-jogja.png',     'release_year' => 2021],
            ['title' => 'Ombak Pantai Selatan','artist' => 'Banyu Biru',      'album' => 'Samudra',          'genre' => 'Folk',       'duration' => '03:58', 'image' => 'ombak-pantai-selatan.png','release_year' => 2024],
            ['title' => 'Gamelan Digital',     'artist' => 'Nusa Beat',       'album' => 'Kawih Elektronik', 'genre' => 'Elektronik', 'duration' => '05:03', 'image' => 'gamelan-digital.png',     'release_year' => 2025],
            ['title' => 'Lenggang Betawi',     'artist' => 'Si Doel Muda',    'album' => 'Kampung Tengah',   'genre' => 'Dangdut',    'duration' => '03:30', 'image' => 'lenggang-betawi.png',     'release_year' => 2022],
            ['title' => 'Hujan di Tanah Pasundan','artist' => 'Mega Sundari', 'album' => 'Parahyangan',      'genre' => 'Folk',       'duration' => '04:25', 'image' => 'hujan-di-pasundan.png',   'release_year' => 2020],
            ['title' => 'Rindu Kampung Halaman','artist' => 'Dimas & Kawan',  'album' => 'Mudik',            'genre' => 'Pop',        'duration' => '03:51', 'image' => 'rindu-kampung-halaman.png','release_year' => 2024],
            ['title' => 'Malam di Pelabuhan',  'artist' => 'Rama Sagara',     'album' => 'Dermaga Sunyi',    'genre' => 'Rock',       'duration' => '04:40', 'image' => 'malam-di-pelabuhan.png',  'release_year' => 2019],
        ];

        foreach ($songs as $song) {
            Song::create($song);
        }
    }
}
