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
            $proyeks = Proyek::with('task') // Eager load task
                              ->where('id_perusahaan', $request->perusahaan_id)
                              ->get();
        } else {
            $proyeks = Proyek::with('task') // Eager load task
                              ->get();
        }
    
        // Proses menghitung task dan progress
        foreach ($proyeks as $proyek) {
            $task = $proyek->task; // Mendapatkan task terkait
            $status = $task ? $task->status : 'No Task'; // Memeriksa jika task ada
            
            // Hitung progress
            $totalTasks = $task ? 1 : 0; // Hanya satu task, jadi total tasks = 1 atau 0
            $completed = ($status == 'Completed') ? 1 : 0;
            $revised = ($status == 'Revised') ? 1 : 0;
            
            // Persentase progress
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
