<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use App\Models\Perusahaan;
use App\Models\Task;
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

    // Menghitung total task dan status di setiap proyek
    foreach ($proyeks as $proyek) {
        $totalTasks = $proyek->tasks->count();
        $pending = $proyek->tasks()->where('status', 'Pending')->count();
        $ongoing = $proyek->tasks()->where('status', 'Ongoing')->count();
        $completed = $proyek->tasks()->where('status', 'Completed')->count();
        $revised = $proyek->tasks()->where('status', 'Revised')->count();

        // Menghitung persentase progress
        $totalProgress = $totalTasks > 0 ? (($completed + $revised) / $totalTasks) * 100 : 0;
        
        $proyek->total_tasks = $totalTasks;
        $proyek->progress = $totalProgress;
    }

    return view('backend.proyek.index', compact('proyeks', 'perusahaans'));
}

    // Menampilkan form untuk menambah proyek
    public function create()
    {
        $perusahaans = Perusahaan::all();
        return view('backend.proyek.create', compact('perusahaans'));
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
        return view('backend.proyek.edit', compact('proyek', 'perusahaans'));
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
