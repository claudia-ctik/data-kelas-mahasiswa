<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MahasiswaController extends Controller
{
    // Menampilkan dan mencari data mahasiswa
    public function index(Request $request)
    {
        $cari = $request->input('cari');

        $mahasiswas = Mahasiswa::query()
            ->when($cari, function ($query, $cari) {
                $query->where('nim', 'like', "%{$cari}%")
                    ->orWhere('nama', 'like', "%{$cari}%")
                    ->orWhere('prodi', 'like', "%{$cari}%")
                    ->orWhere('kelas', 'like', "%{$cari}%");
            })
            ->get();

        return view('mahasiswa.index', compact('mahasiswas', 'cari'));
    }

    // Halaman tambah mahasiswa
    public function create()
    {
        return view('mahasiswa.create');
    }

    // Menyimpan data mahasiswa dan foto
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nim' => 'required|string|max:15|unique:mahasiswas,nim',
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'kelas' => 'required|string|max:10',
            'prodi' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')
                ->store('mahasiswa', 'public');
        }

        Mahasiswa::create($validated);

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil ditambahkan!');
    }

    // Halaman edit mahasiswa
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    // Memperbarui data mahasiswa dan foto
    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        $validated = $request->validate([
            'nim' => 'required|string|max:15|unique:mahasiswas,nim,' . $id,
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string|max:10',
            'prodi' => 'required|string|max:255',
            'alamat' => 'required|string',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            if ($mahasiswa->foto) {
                Storage::disk('public')->delete($mahasiswa->foto);
            }

            $validated['foto'] = $request->file('foto')
                ->store('mahasiswa', 'public');
        }

        $mahasiswa->update($validated);

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil diperbarui!');
    }

    // Menghapus data mahasiswa
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        if ($mahasiswa->foto) {
            Storage::disk('public')->delete($mahasiswa->foto);
        }

        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil dihapus!');
    }
}
