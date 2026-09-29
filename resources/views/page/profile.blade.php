@extend('layout.app')

@section('title', 'Profile')

@section('content')

   <div class="card-body px-4">

            <ul class="list-group list-group-flush">

                <div class="text-center">
                    <h4 class="mb-3">
                        Data Mahasiswa
                    </h4>
                </div>

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