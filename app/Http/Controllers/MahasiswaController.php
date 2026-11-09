<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // Menampilkan semua data mahasiswa
    public function index()
    {
        $mahasiswas = Mahasiswa::all();

        return view('mahasiswa.index', compact('mahasiswas'));
    }

    // Menampilkan halaman tambah mahasiswa
    public function create()
    {
        return view('mahasiswa.create');
    }

    // Menyimpan data mahasiswa ke database
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|string|max:15|unique:mahasiswas,nim',
            'nama' => 'required|string|max:255',
            'semester' => 'required|string|max:10',
            'prodi' => 'required|string|max:255',
        ]);

        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'semester' => $request->kelas,
            'prodi' => $request->prodi,
        ]);

        return redirect()
            ->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil ditambahkan!');
    }

    // Menampilkan detail mahasiswa
    public function show(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        return view('mahasiswa.show', compact('mahasiswa'));
    }

    // Menampilkan halaman edit
    public function edit(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    // Memperbarui data mahasiswa
    public function update(Request $request, string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        $request->validate([
            'nim' => 'required|string|max:15|unique:mahasiswas,nim,' . $mahasiswa->id,
            'nama' => 'required|string|max:255',
            'semester' => 'required|string|max:10',
            'prodi' => 'required|string|max:255',
        ]);

        $mahasiswa->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'semester' => $request->kelas,
            'prodi' => $request->prodi,
        ]);

        return redirect()
            ->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil diperbarui!');
    }

    // Menghapus data mahasiswa
    public function destroy(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        $mahasiswa->delete();

        return redirect()
            ->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil dihapus!');
    }
}
