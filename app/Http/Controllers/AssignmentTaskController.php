<?php

namespace App\Http\Controllers;

use App\Models\AssignmentTask;
use App\Models\Task;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class AssignmentTaskController extends Controller
{
    public function index()
    {
        $tasks = AssignmentTask::with('task', 'pegawai')->get();
        return view('assignment_task.index', compact('tasks'));
    }

    public function create(Request $request)
    {
        // Ambil data yang dibawa dari halaman sebelumnya
        $id_task = $request->input('id_task');
        $task = Task::find($id_task); // Mengambil nama task berdasarkan ID yang dibawa
        
        $pegawais = Pegawai::all(); // Ambil data pegawai untuk dropdown
        return view('assignment_task.create', compact('pegawais', 'task', 'id_task'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_task' => 'required|exists:tasks,id',
            'id_pegawai' => 'required|exists:pegawais,id',
            'type' => 'nullable|string|max:255',
        ]);

        AssignmentTask::create($validated);

        return redirect()->route('assignment_tasks.index')->with('success', 'Task assigned successfully');
    }

    public function edit($id)
    {
        $assignmentTask = AssignmentTask::findOrFail($id);
        $pegawais = Pegawai::all(); // Ambil data pegawai untuk dropdown
        return view('assignment_task.edit', compact('assignmentTask', 'pegawais'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id_task' => 'required|exists:tasks,id',
            'id_pegawai' => 'required|exists:pegawais,id',
            'type' => 'nullable|string|max:255',
        ]);

        $assignmentTask = AssignmentTask::findOrFail($id);
        $assignmentTask->update($validated);

        return redirect()->route('assignment_tasks.index')->with('success', 'Task updated successfully');
    }

    public function destroy($id)
    {
        AssignmentTask::findOrFail($id)->delete();
        return back()->with('success', 'Task deleted successfully');
    }
}
