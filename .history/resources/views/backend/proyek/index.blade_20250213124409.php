@extends('main')

@section('section')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Proyek</h4>
                    <a href="{{ route('proyek.create') }}" class="btn btn-primary">Tambah Perusahaan</a>
                </div>
                <div class="card-body">
                    <form method="GET" action="{{ route('proyek.index') }}">
                        <div class="row align-items-center">
                            <div class="col-auto my-1">
                                <label class="me-sm-2">Pilih Perusahaan</label>
                                <select name="perusahaan_id" class="me-sm-2 default-select form-control wide" onchange="this.form.submit()">
                                    <option value="all" {{ request('perusahaan_id') == 'all' ? 'selected' : '' }}>Semua</option>
                                    @foreach ($perusahaans as $perusahaan)
                                        <option value="{{ $perusahaan->id_perusahaan }}" {{ request('perusahaan_id') == $perusahaan->id_perusahaan ? 'selected' : '' }}>{{ $perusahaan->nama_perusahaan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </form>

                    <div class="table-responsive mt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th><strong>Nama Proyek</strong></th>
                                    <th><strong>Perusahaan</strong></th>
                                    <th><strong>Status</strong></th>
                                    <th><strong>Total Task</strong></th>
                                    <th><strong>Progress</strong></th>
                                    <th><strong>Aksi</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($proyeks as $proyek)
                                    <tr>
                                        <td>{{ $proyek->nama_proyek }}</td>
                                        <td>{{ $proyek->perusahaan->nama_perusahaan }}</td>
                                        <td>{{ ucfirst($proyek->status) }}</td>
                                        <td>
                                            @if ($proyek->task)
                                                <p>Pending: {{ $proyek->status_count['Pending'] }}</p>
                                                <p>Ongoing: {{ $proyek->status_count['Ongoing'] }}</p>
                                                <p>Revised: {{ $proyek->status_count['Revised'] }}</p>
                                                <p>Completed: {{ $proyek->status_count['Completed'] }}</p>
                                            @else
                                                <p>No Task</p>
                                            @endif
                                        </td>
                                        <td>
                                            <!-- Progress bar -->
                                            <div class="progress mt-3">
                                                <div class="progress-bar" role="progressbar" style="width: {{ $proyek->progress }}%" aria-valuenow="{{ $proyek->progress }}" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{ route('task.index', ['id_proyek' => $id_proyek]) }}">Atur & Buat Task</a>

                            
                                            <a href="{{ route('proyek.edit', $proyek->id_proyek) }}" class="btn btn-primary btn-xs">Edit</a>
                                            <form action="{{ route('proyek.destroy', $proyek->id_proyek) }}" method="POST" style="display:inline;">
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
@endsection
