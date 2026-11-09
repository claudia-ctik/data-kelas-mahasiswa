
@extends('layouts.app')

@section('title', 'Edit Mahasiswa')

@section('content')

<div class="card">
    <div class="card-body">

        <h2 class="mb-4">Edit Data Mahasiswa</h2>

        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control"
                    value="{{ old('nim', $mahasiswa->nim) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Mahasiswa</label>
                <input type="text" name="nama" class="form-control"
                    value="{{ old('nama', $mahasiswa->nama) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Semester / Kelas</label>
                <input type="text" name="kelas" class="form-control"
                    value="{{ old('kelas', $mahasiswa->kelas) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Program Studi</label>
                <input type="text" name="prodi" class="form-control"
                    value="{{ old('prodi', $mahasiswa->prodi) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control" required>{{ old('alamat', $mahasiswa->alamat) }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control"
                    value="{{ old('tempat_lahir', $mahasiswa->tempat_lahir) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control"
                    value="{{ old('tanggal_lahir', $mahasiswa->tanggal_lahir) }}" required>
            </div>

            <button type="submit" class="btn btn-primary">
                Update Data
            </button>

            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>
</div>

@endsection
