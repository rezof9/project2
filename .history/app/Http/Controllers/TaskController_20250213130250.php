<?php
namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\AssignmentTask;
use App\Models\FileTask;
use App\Models\MessageTask;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $id_proyek = $request->get('id_proyek'); // Mendapatkan ID proyek dari request
    
        $tasks = Task::withCount(['assignmentTasks', 'fileTasks', 'messageTasks'])
                     ->where('id_proyek', $id_proyek) // Filter berdasarkan id_proyek
                     ->groupBy('status', 'id_task','id_proyek','keterangan','nama_task', 'tanggal_start', 'tanggal_deadline', 'created_at', 'updated_at') // Menambahkan kolom yang perlu digroup
                     ->get();
    
        return view('backend.task.index', compact('tasks'));
    }
    

    public function create($idProyek)
    {
        $idproyek = $idProyek;

        return view('backend.task.create',compact('idproyek'));
    }

    public function store(Request $request)
    {
        $task = Task::create([
            'id_proyek' => $request->id_proyek,
            'nama_task' => $request->nama_task,
            'status' => $request->status,
            'tanggal_start' => $request->tanggal_start,
            'tanggal_deadline' => $request->tanggal_deadline,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('task.index')->with('success', 'Task created successfully');
    }

    public function edit($id)
    {
        $task = Task::find($id);
        return view('backend.task.edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task->status = $request->status;
        $task->save();

        return redirect()->route('task.index')->with('success', 'Task status updated successfully');
    }

    public function destroy($id)
    {
        Task::destroy($id);
        return redirect()->route('task.index')->with('success', 'Task deleted successfully');
    }
}
