
@extends('layouts.app')

@section('title', 'Data Mahasiswa')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2>Data Mahasiswa</h2>
            <p class="text-muted">Daftar seluruh data mahasiswa</p>
        </div>

        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">
            + Tambah Mahasiswa
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover align-middle">

                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Semester / Kelas</th>
                            <th>Program Studi</th>
                            <th>Alamat</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($mahasiswas as $mahasiswa)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    <img        
                            @if ($mahasiswa->foto)
                                   <img
                                 src="{{ asset('storage/' . $mahasiswa->foto) }}"
                                 alt="Foto {{ $mahasiswa->nama }}"
                                 width="55"
                                 height="55"
                                 style="object-fit: cover; border-radius: 50%;">
                                 @else
                                 <span class="text-muted">Belum ada foto</span>
                                 @endif

                                </td>

                                <td>{{ $mahasiswa->nim }}</td>

                                <td>{{ $mahasiswa->nama }}</td>

                                <td>{{ $mahasiswa->kelas }}</td>

                                <td>{{ $mahasiswa->prodi }}</td>

                                <td>{{ $mahasiswa->alamat }}</td>

                                <td>{{ $mahasiswa->tempat_lahir }}</td>

                                <td>{{ $mahasiswa->tanggal_lahir }}</td>

                                <td>
                                    <div class="d-flex gap-1">

                                        <a
                                            href="{{ route('mahasiswa.edit', $mahasiswa->id) }}"
                                            class="btn btn-warning btn-sm">
                                            Edit
                                        </a>

                                        <form
                                            action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}"
                                            method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus data ini?')">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger btn-sm">
                                                Hapus
                                            </button>

                                        </form>

                                    </div>
                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="10" class="text-center">
                                    Belum ada data mahasiswa.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>

        </div>
    </div>

</div>

@endsection
