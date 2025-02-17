<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    public function index()
    {
        $perusahaans = Perusahaan::all();  // Mengambil semua data perusahaan
        return view('backend.perusahaan.index', compact('perusahaans'));  // Menampilkan data perusahaan
    }

    public function create()
    {
        return view('backend.perusahaan.create');  // Menampilkan form untuk membuat perusahaan baru
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_perusahaan' => 'required|max:255',
            'logo' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'url' => 'required|url',
            'status' => 'required|in:aktif,non-aktif',
        ]);

        $logoPath = $request->file('logo')->store('logos', 'public');  // Menyimpan file logo

        Perusahaan::create([
            'nama_perusahaan' => $request->nama_perusahaan,
            'logo' => $logoPath,
            'url' => $request->url,
            'status' => $request->status,
        ]);

        return redirect()->route('backend.perusahaan.index')->with('success', 'Perusahaan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $perusahaan = Perusahaan::findOrFail($id);
        return view('backend.perusahaan.edit', compact('perusahaan'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_perusahaan' => 'required|max:255',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'url' => 'required|url',
            'status' => 'required|in:aktif,non-aktif',
        ]);

        $perusahaan = Perusahaan::findOrFail($id);

        $logoPath = $perusahaan->logo;
        if ($request->hasFile('logo')) {
            // Menghapus logo lama
            if ($logoPath) {
                unlink(storage_path('app/public/' . $logoPath));
            }
            // Menyimpan logo baru
            $logoPath = $request->file('logo')->store('logos', 'public');
        }

        $perusahaan->update([
            'nama_perusahaan' => $request->nama_perusahaan,
            'logo' => $logoPath,
            'url' => $request->url,
            'status' => $request->status,
        ]);

        return redirect()->route('perusahaan.index')->with('success', 'Perusahaan berhasil diperbarui');
    }

    public function destroy($id)
    {
        $perusahaan = Perusahaan::findOrFail($id);
        // Menghapus logo jika ada
        if ($perusahaan->logo) {
            unlink(storage_path('app/public/' . $perusahaan->logo));
        }
        $perusahaan->delete();

        return redirect()->route('perusahaan.index')->with('success', 'Perusahaan berhasil dihapus');
    }
}
