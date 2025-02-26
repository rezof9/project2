<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PegawaiController extends Controller
{
    // Menampilkan data pegawai
    public function index()
    {
        $pegawais = Pegawai::with('perusahaan')->get(); // Mengambil semua pegawai beserta data perusahaan
        $perusahaans = Perusahaan::all(); // Mengambil semua perusahaan untuk dropdown
        return view('backend.pegawai.index', compact('pegawais', 'perusahaans'));
    }

    // Menampilkan form tambah pegawai
    public function create()
    {
        $perusahaans = Perusahaan::all(); // Mengambil semua perusahaan untuk dropdown
        return view('backend.pegawai.create', compact('perusahaans'));
    }

    // Menyimpan data pegawai
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nomor' => 'required|string|max:20',
            'email' => 'required|email|unique:pegawais,email',
            'password' => 'required|string|min:6',
            'jenis_kelamin' => 'required|in:L,P',
            'jabatan' => 'required|string|max:100',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'id_perusahaan' => 'required|exists:perusahaans,id_perusahaan',
        ]);

        // Menyimpan foto jika ada
        $foto = null;
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('images/pegawai', 'public'); // Menyimpan foto
        }

        // Menyimpan pegawai
        Pegawai::create([
            'nama' => $request->nama,
            'nomor' => $request->nomor,
            'email' => $request->email,
            'password' => bcrypt($request->password),  // Menyimpan password terenkripsi
            'jenis_kelamin' => $request->jenis_kelamin,
            'jabatan' => $request->jabatan,
            'foto' => $foto,
            'id_perusahaan' => $request->id_perusahaan,
        ]);

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil ditambahkan');
    }

    // Menampilkan form edit pegawai
    public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $perusahaans = Perusahaan::all(); // Mengambil semua perusahaan untuk dropdown
        return view('backend.pegawai.edit', compact('pegawai', 'perusahaans'));
    }

    // Mengupdate data pegawai
    public function update(Request $request, $id)
    {
        $validator = Validator::make( $request->all(), [
            'nama' => 'required|string|max:255',
            'nomor' => 'required|string|max:20',
            'email' => 'required|email|unique:pegawais,email,' . $id,
            'password' => 'nullable|string|min:6',
            'jenis_kelamin' => 'required|in:L,P',
            'jabatan' => 'required|string|max:100',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'id_perusahaan' => 'required|exists:perusahaans,id_perusahaan',
        ]);

        $pegawai = Pegawai::findOrFail($id);

        // Menyimpan foto baru jika ada
        $foto = $pegawai->foto;
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($foto && Storage::exists('public/' . $foto)) {
                Storage::delete('public/' . $foto);
            }
            // Simpan foto baru
            $foto = $request->file('foto')->store('images/pegawai', 'public');
        }

        // Update data pegawai
        $pegawai->update([
            'nama' => $request->nama,
            'nomor' => $request->nomor,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $pegawai->password,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jabatan' => $request->jabatan,
            'foto' => $foto,
            'id_perusahaan' => $request->id_perusahaan,
        ]);

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil diperbarui');
    }

    // Menghapus pegawai
    public function destroy($id)
    {
        $pegawai = Pegawai::findOrFail($id);

        // Hapus foto jika ada
        if ($pegawai->foto && Storage::exists('public/' . $pegawai->foto)) {
            Storage::delete('public/' . $pegawai->foto);
        }

        $pegawai->delete();
        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil dihapus');
    }

    public function filter(Request $request, $id)
{
    $search = $request->input('search', '');

    if ($id == '') {
        // Jika tidak ada perusahaan yang dipilih, tampilkan semua pegawai
        $pegawais = Pegawai::with('perusahaan')
            ->where('nama', 'like', '%' . $search . '%')
            ->get();
    } else {
        // Menampilkan pegawai berdasarkan perusahaan dan nama
        $pegawais = Pegawai::with('perusahaan')
            ->where('id_perusahaan', $id)
            ->where('nama', 'like', '%' . $search . '%')
            ->get();
    }

    return response()->json($pegawais);
}
}
