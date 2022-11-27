<!DOCTYPE html>
<html lang="en">
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
                <meta charset="utf-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1" />
                <!-- Bootstrap CSS -->
                <link
                    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
                    rel="stylesheet"
                    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                    crossorigin="anonymous"
                />
            </h2>
        </x-slot>
        <x-slot name="content">
            <x-dropdown-link :href="route('create')">
                {{__('CREATE') }}
            </x-dropdown-link>
            <x-dropdown-link :href="route('read')">
                {{__('READ') }}
            </x-dropdown-link>
        </x-slot>
        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <!-- Bootstrap CSS -->
            <link
                href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
                rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous"
            />
    
            <title>CRUD Laravel!</title>
        </head>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h1 class="text-center mt-3 mb-4">Data Mahasiswa</h1>
        <div class="container">
            @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                @endif
            <a href="/create" type="button" class="btn btn-success">Tambah +</a>
            <div class="row">
                <table class="table mt-2 table-secondary table-striped">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Kota</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Dibuat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                        <tr class="text-center">
                            <th scope="row">{{ $row->nim }}</th>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->umur }}</td>
                            <td>{{ $row->alamat }}</td>
                            <td>{{ $row->kota }}</td>
                            <td>{{ $row->kelas }}</td>
                            <td>{{ $row->jurusan }}</td>
                            <td>{{ $row->created_at->format('d-m-Y') }}</td>
                            <td>
                                <a href="/edit/{{ $row->nim }}" class="btn btn-primary">Edit</a>
                                <a href="/delete/{{ $row->nim }}" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin menghapus data ini?')">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        ></script>
    </body>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
    <x-slot name="content">
        <x-dropdown-link :href="route('create')">
            {{__('CREATE') }}
        </x-dropdown-link>
        <x-dropdown-link :href="route('read')">
            {{__('READ') }}
        </x-dropdown-link>
    </x-slot>
</html>
