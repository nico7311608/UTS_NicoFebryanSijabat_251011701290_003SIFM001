<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'nama' => 'Nico Febryan Sijabat',
            'nim' => '251011701290',
            'prodi' => 'Sistem Informasi',
            'kampus' => 'Universitas Pamulang',
            'email' => 'febriannico123@gmail.com',
            'status' => 'Aktif'
        ];

        return view('mahasiswa', compact('mahasiswa'));
    }
}