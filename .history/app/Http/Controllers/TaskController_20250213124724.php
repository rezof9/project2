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
        // Mengambil semua task dengan relasi Assignment, File, dan Message
        $tasks = Task::withCount(['assignmentTasks', 'fileTasks', 'messageTasks'])
                     ->groupBy('tasks.status')
                     ->get();

        return view('backend.task.index', compact('tasks'));
    }

    public function create()
    {
        return view('backend.task.create');
    }

    public function store(Request $request)
    {
        $task = Task::create([
            'id_proyek' => $request->id_proyek,
            'nama_task' => $request->nama_task,
            'status' => $request->status,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
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
