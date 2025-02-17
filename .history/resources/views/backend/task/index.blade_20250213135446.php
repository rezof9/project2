@extends('main')

@section('section')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Kanban Task</h4>
                    <a href="{{ route('task.create', ['idProyek' => $id_proyek]) }}" class="btn btn-primary">Tambah Task</a>
                </div>
                <div class="card-body">
                    <div class="kanban-container">
                        <div class="kanban-column" id="pending">
                            <h5>Pending</h5>
                            <div class="task-list" ondrop="drop(event)" ondragover="allowDrop(event)">
                                @foreach ($tasks as $task)
                                    @if($task->status == 'Pending')
                                    <div id="task_{{ $task->id_task }}" class="kanban-card" draggable="true" ondragstart="drag(event)">
                                        <h6>{{ $task->nama_task }}</h6>
                                        <p>{{ $task->created_at->format('d-m-Y') }}</p>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="kanban-column" id="ongoing">
                            <h5>Ongoing</h5>
                            <div class="task-list" ondrop="drop(event)" ondragover="allowDrop(event)">
                                @foreach ($tasks as $task)
                                    @if($task->status == 'Ongoing')
                                    <div id="task_{{ $task->id_task }}" class="kanban-card" draggable="true" ondragstart="drag(event)">
                                        <h6>{{ $task->nama_task }}</h6>
                                        <p>{{ $task->created_at->format('d-m-Y') }}</p>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="kanban-column" id="completed">
                            <h5>Completed</h5>
                            <div class="task-list" ondrop="drop(event)" ondragover="allowDrop(event)">
                                @foreach ($tasks as $task)
                                    @if($task->status == 'Completed')
                                    <div id="task_{{ $task->id_task }}" class="kanban-card" draggable="true" ondragstart="drag(event)">
                                        <h6>{{ $task->nama_task }}</h6>
                                        <p>{{ $task->created_at->format('d-m-Y') }}</p>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="kanban-column" id="revised">
                            <h5>Revised</h5>
                            <div class="task-list" ondrop="drop(event)" ondragover="allowDrop(event)">
                                @foreach ($tasks as $task)
                                    @if($task->status == 'Revised')
                                    <div id="task_{{ $task->id_task }}" class="kanban-card" draggable="true" ondragstart="drag(event)">
                                        <h6>{{ $task->nama_task }}</h6>
                                        <p>{{ $task->created_at->format('d-m-Y') }}</p>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/kanban.js') }}"></script>
@endpush
