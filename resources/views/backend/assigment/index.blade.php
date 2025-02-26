@extends('main')

@section('section')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Daftar Tugas yang Diberikan</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                    <thead>
                        <tr>
                            <th scope="col">Task</th>
                            <th scope="col">Nama Pegawai</th>
                            <th scope="col">Progress</th>
                            <th scope="col">Deadline</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tasks as $task)
                            <tr>
                                <td>{{ $task->task->nama_task }}</td>
                                <td>{{ $task->pegawai->nama_pegawai }}</td>
                                <td>
                                    <div class="progress" style="background: rgba(76, 175, 80, .1)">
                                        <div class="progress-bar bg-success" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span></div>
                                    </div>
                                </td>
                                <td>May 27,2018</td>
                                <td>
                                    <a href="{{ route('assignment_tasks.edit', $task->id) }}" class="btn btn-xs btn-primary me-4" data-bs-toggle="tooltip" data-placement="top" title="Edit">
                                        <i class="fas fa-pencil-alt color-muted"></i>
                                    </a>
                                    <form action="{{ route('assignment_tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-xs btn-danger" data-bs-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="fas fa-trash color-danger"></i>
                                        </button>
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
@endsection
