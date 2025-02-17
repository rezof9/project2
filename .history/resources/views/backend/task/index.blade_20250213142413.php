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
                    <!-- Tampilan List -->
                    <div id="listView" class="table-responsive">
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

                    <!-- Tampilan Kanban -->
                    <div id="kanbanView" class="row" style="display: none;">
                        @foreach (['Pending', 'Ongoing', 'Revised', 'Completed'] as $status)
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-header">{{ $status }}</div>
                                    <div class="card-body">
                                        @foreach ($tasks as $task)
                                            @if ($task->status == $status)
                                                <div class="kanban-task">
                                                    <p>{{ $task->nama_task }}</p>
                                                    <p>Status: {{ $task->status }}</p>
                                                    <p>Assigned: {{ $task->assignment_tasks_count }}</p>
                                                    <p>File: {{ $task->file_tasks_count }}</p>
                                                    <p>Message: {{ $task->message_tasks_count }}</p>
                                                    <p><small>{{ $task->created_at->format('d-m-Y') }}</small></p>
                                                    <div class="btn-group">
                                                        <a href="{{ route('task.edit', $task->id_task) }}" class="btn btn-warning btn-sm">Edit</a>
                                                        <form action="{{ route('task.destroy', $task->id_task) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<script>
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
