```php
@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <h2>Data Mahasiswa</h2>

    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-3">
        + Tambah Mahasiswa
    </a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Program Studi</th>
                </tr>
            </thead>

            <tbody>
                @forelse($mahasiswas as $mahasiswa)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $mahasiswa->nim }}</td>
                        <td>{{ $mahasiswa->nama }}</td>
                        <td>{{ $mahasiswa->kelas }}</td>
                        <td>{{ $mahasiswa->prodi }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">
                            Belum ada data mahasiswa.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
@endsection
```