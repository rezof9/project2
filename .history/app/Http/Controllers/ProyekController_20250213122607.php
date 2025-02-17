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
            $tasks = $proyek->task; // Mendapatkan task terkait
            $status_count = [
                'Pending' => 0,
                'Ongoing' => 0,
                'Revised' => 0,
                'Completed' => 0,
            ];
    
            if ($tasks) {
                // Hitung jumlah task dengan status tertentu
                foreach ($tasks as $task) {
                    if ($task->status == 'Pending') {
                        $status_count['Pending']++;
                    } elseif ($task->status == 'Ongoing') {
                        $status_count['Ongoing']++;
                    } elseif ($task->status == 'Revised') {
                        $status_count['Revised']++;
                    } elseif ($task->status == 'Completed') {
                        $status_count['Completed']++;
                    }
                }
            }
    
            // Menambahkan ke proyek
            $proyek->status_count = $status_count;
    
            // Hitung progress bar
            $total_tasks = array_sum($status_count); // Jumlah semua task
            $completed_tasks = $status_count['Completed'] + $status_count['Revised']; // Task yang selesai
            $proyek->progress = ($total_tasks > 0) ? ($completed_tasks / $total_tasks) * 100 : 0; // Progress bar
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
