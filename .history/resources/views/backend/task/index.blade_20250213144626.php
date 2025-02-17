@extends('main')

@section('section')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Task</h4>

                    <!-- Button untuk Toggle Tampilan -->
                    <button id="toggleViewBtn" class="btn btn-secondary">Tampilan Kanban</button>

                    <a href="{{ route('task.create', ['idProyek' => $id_proyek]) }}" class="btn btn-primary">Tambah Task</a>
                </div>
                
                <div class="card-body">
                    <div class="row kanban-bx " id="kanban-view">
                        <div class="col" id="pending-column">
                            <div class="kanbanPreview-bx">
                                <div class="draggable-zone dropzoneContainer">
                                    <div class="sub-card align-items-center d-flex justify-content-between mb-4">
                                        <div>
                                            <h4 class="fs-20 mb-0 font-w600">Pending (<span class="totalCount">{{ $tasks->where('status', 'Pending')->count() }}</span>)</h4>
                                        </div>
                                        <div class="plus-bx">
                                            <a href="javascript:void(0)"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                    <ul id="pending-tasks" class="task-list">
                                        @foreach($tasks->where('status', 'Pending') as $task)
                                        <li class="task-card" data-task-id="{{ $task->id }}">
                                            <div class="card draggable-handle draggable">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between mb-2">
                                                        <span class="text-success">
                                                            <svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <circle cx="5" cy="5" r="5" fill="#09BD3C"></circle>
                                                            </svg>
                                                            {{ $task->nama_task }}
                                                        </span>
                                                    </div>
                                                    <p class="font-w600 fs-18"><a href="javascript:void(0);" class="text-black">{{ $task->description }}</a></p>
                                                    <div class="progress default-progress my-4">
                                                        <div class="progress-bar bg-success progress-animated" style="width: {{ $task->progress }}%; height:10px;" role="progressbar">
                                                            <span class="sr-only">{{ $task->progress }}% Complete</span>
                                                        </div>
                                                    </div>
                                                    <div class="row justify-content-between align-items-center kanban-user">
                                                        <ul class="users col-6">
                                                            <li><img src="images/pic33.jpg" alt=""></li>
                                                        </ul>
                                                        <div class="col-6 d-flex justify-content-end">
                                                            <span class="fs-14"><i class="far fa-clock me-2"></i>Due in {{ $task->due_in_days }} days</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>

                                    <ul id="ongoing-tasks" class="task-list">
                                        @foreach($tasks->where('status', 'Ongoing') as $task)
                                        <li class="task-card" data-task-id="{{ $task->id }}">
                                            <div class="card draggable-handle draggable">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between mb-2">
                                                        <span class="text-success">
                                                            <svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <circle cx="5" cy="5" r="5" fill="#09BD3C"></circle>
                                                            </svg>
                                                            {{ $task->nama_task }}
                                                        </span>
                                                    </div>
                                                    <p class="font-w600 fs-18"><a href="javascript:void(0);" class="text-black">{{ $task->description }}</a></p>
                                                    <div class="progress default-progress my-4">
                                                        <div class="progress-bar bg-success progress-animated" style="width: {{ $task->progress }}%; height:10px;" role="progressbar">
                                                            <span class="sr-only">{{ $task->progress }}% Complete</span>
                                                        </div>
                                                    </div>
                                                    <div class="row justify-content-between align-items-center kanban-user">
                                                        <ul class="users col-6">
                                                            <li><img src="images/pic33.jpg" alt=""></li>
                                                        </ul>
                                                        <div class="col-6 d-flex justify-content-end">
                                                            <span class="fs-14"><i class="far fa-clock me-2"></i>Due in {{ $task->due_in_days }} days</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Repeat for other columns (Ongoing, Completed, Revisied) -->
                    </div>
                    
                    
                    <div class="table-responsive" id="list-view">
                        <table class="table table-hover table-responsive-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Task</th>
                                    <th>Status</th>
                                    <th>Total Assignment</th>
                                    <th>Total File</th>
                                    <th>Total Message</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{ $task->nama_task }}</td>
                                    <td>
                                        <form action="{{ route('task.update', $task->id_task) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <select name="status" class="form-control" onchange="this.form.submit()">
                                                <option value="Pending" {{ $task->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                                <option value="Ongoing" {{ $task->status == 'Ongoing' ? 'selected' : '' }}>Ongoing</option>
                                                <option value="Completed" {{ $task->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                                                <option value="Revised" {{ $task->status == 'Revised' ? 'selected' : '' }}>Revised</option>
                                            </select>
                                        </form>
                                    </td>
                                    <td>{{ $task->assignment_tasks_count }}</td>
                                    <td>{{ $task->file_tasks_count }}</td>
                                    <td>{{ $task->message_tasks_count }}</td>
                                    <td>{{ $task->created_at->format('d-m-Y') }}</td>
                                    <td>
                                        <a href="{{ route('task.edit', $task->id_task) }}" class="btn btn-warning btn-xs">Edit</a>
                                        <form action="{{ route('task.destroy', $task->id_task) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-xs">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    

                </div>
            </div>
        </div>
    </div>
</div>


<script>

document.addEventListener("DOMContentLoaded", function() {
    var pendingColumn = document.getElementById('pending-column');
    var ongoingColumn = document.getElementById('ongoing-column');
    var completedColumn = document.getElementById('completed-column');
    var revisiedColumn = document.getElementById('revisied-column');

    // Inisialisasi sortable pada setiap kolom
    new Sortable(pendingColumn, {
        group: 'tasks',
        animation: 150,
        onEnd: function(evt) {
            // Setelah selesai drag, kirim update ke backend
            updateTaskStatus(evt.item, 'Pending');
        }
    });

    new Sortable(ongoingColumn, {
        group: 'tasks',
        animation: 150,
        onEnd: function(evt) {
            // Setelah selesai drag, kirim update ke backend
            updateTaskStatus(evt.item, 'Ongoing');
        }
    });

    new Sortable(completedColumn, {
        group: 'tasks',
        animation: 150,
        onEnd: function(evt) {
            // Setelah selesai drag, kirim update ke backend
            updateTaskStatus(evt.item, 'Completed');
        }
    });

    new Sortable(revisiedColumn, {
        group: 'tasks',
        animation: 150,
        onEnd: function(evt) {
            // Setelah selesai drag, kirim update ke backend
            updateTaskStatus(evt.item, 'Revisied');
        }
    });
});

// Fungsi untuk mengirim pembaruan status tugas ke backend
function updateTaskStatus(taskElement, newStatus) {
    var taskId = taskElement.getAttribute('data-task-id');
    var url = '/update-task-status'; // URL untuk update status tugas

    fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ task_id: taskId, status: newStatus })
    })
    .then(response => response.json())
    .then(data => {
        // Handle response from the server (optional)
        console.log(data);
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
    document.getElementById('toggle-view').addEventListener('click', function () {
        const kanbanView = document.getElementById('kanban-view');
        const listView = document.getElementById('list-view');

        if (kanbanView.classList.contains('d-none')) {
            kanbanView.classList.remove('d-none');
            listView.classList.add('d-none');
            this.textContent = 'Tampilkan List';
        } else {
            kanbanView.classList.add('d-none');
            listView.classList.remove('d-none');
            this.textContent = 'Tampilkan Kanban';
        }
    });
</script>
@endsection
