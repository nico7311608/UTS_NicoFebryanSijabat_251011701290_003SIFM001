@extends('layout.app')

@section('title', 'Profile Mahasiswa')

@section('content')

<div class="container flex-grow-1 d-flex align-items-center justify-content-center">

    <div class="card shadow-sm border-0" style="width: 500px;">

        <div class="card-header bg-white text-center py-4">

            <h2 class="card-title mb-0">
                Profile Mahasiswa
            </h2>

            <img src="{{ asset('Foto/foto gua.jpeg') }}"
                alt="Profile Image"
                class="img-fluid rounded-circle mt-3"
                style="width: 150px; height: 150px; object-fit: cover;">

        </div>

        <div class="card-body px-4">

            <div class="text-center">
                <h4 class="mb-3">
                    Data Mahasiswa
                </h4>
            </div>

            <ul class="list-group list-group-flush">

                <li class="list-group-item text-center">
                    <strong>Nama:</strong>
                    {{ $mahasiswa['nama'] }}
                </li>

                <li class="list-group-item text-center">
                    <strong>NIM:</strong>
                    {{ $mahasiswa['nim'] }}
                </li>

                <li class="list-group-item text-center">
                    <strong>Program Studi:</strong>
                    {{ $mahasiswa['prodi'] }}
                </li>

                <li class="list-group-item text-center">
                    <strong>Kampus:</strong>
                    {{ $mahasiswa['kampus'] }}
                </li>

            </ul>

        </div>

    </div>

</div>

@endsection