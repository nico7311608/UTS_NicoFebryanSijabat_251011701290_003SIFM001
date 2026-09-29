@extends('layout.app')
@section('title', 'Home')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2>Selamat Datang</h2>
            <p>Website profile mahasiswa Universitas Pamulang</p>
            <a href="{{ url('/mahasiswa') }}" class="btn btn-success">
                Lihat Profile
            </a>
        </div>
    </div>
</div>

@endsection