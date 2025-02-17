<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use App\Models\Perusahaan;
use Illuminate\Http\Request;

class ProyekController extends Controller
{
    // Menampilkan daftar proyek dengan filter perusahaan
    public function index(Request $request)
    {
        // Ambil semua perusahaan untuk dropdown
        $perusahaans = Perusahaan::all();

        // Menyaring proyek berdasarkan perusahaan jika ada parameter 'perusahaan_id'
        if ($request->has('perusahaan_id') && $request->perusahaan_id != 'all') {
            $proyeks = Proyek::where('id_perusahaan', $request->perusahaan_id)->get();
        } else {
            // Menampilkan semua proyek jika tidak ada filter
            $proyeks = Proyek::all();
        }

        return view('proyek.index', compact('proyeks', 'perusahaans'));
    }

    // Menampilkan form untuk menambah proyek
    public function create()
    {
        $perusahaans = Perusahaan::all();
        return view('proyek.create', compact('perusahaans'));
    }

    // Menyimpan proyek baru
    public function store(Request $request)
    {
        $request->validate([
            'id_perusahaan' => 'required|exists:perusahaans,id_perusahaan',
            'nama_proyek' => 'required|string|max:255',
            'status' => 'required|in:aktif,non-aktif',
        ]);

        Proyek::create($request->all());
        return redirect()->route('proyek.index')->with('success', 'Proyek berhasil ditambahkan');
    }

    // Menampilkan form untuk mengedit proyek
    public function edit($id)
    {
        $proyek = Proyek::findOrFail($id);
        $perusahaans = Perusahaan::all();
        return view('proyek.edit', compact('proyek', 'perusahaans'));
    }

    // Mengupdate proyek
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_perusahaan' => 'required|exists:perusahaans,id_perusahaan',
            'nama_proyek' => 'required|string|max:255',
            'status' => 'required|in:aktif,non-aktif',
        ]);

        $proyek = Proyek::findOrFail($id);
        $proyek->update($request->all());
        return redirect()->route('proyek.index')->with('success', 'Proyek berhasil diperbarui');
    }

    // Menghapus proyek
    public function destroy($id)
    {
        $proyek = Proyek::findOrFail($id);
        $proyek->delete();
        return redirect()->route('proyek.index')->with('success', 'Proyek berhasil dihapus');
    }
}
