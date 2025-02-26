@extends('main')

@section('section')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Data Proyek</h4>
                    <a href="{{ route('proyek.create') }}" class="btn btn-primary">Tambah Proyek</a>
                </div>
                <div class="card-body">
                    <form method="GET" action="{{ route('proyek.index') }}">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <label class="form-label">Pilih Perusahaan</label>
                                <select name="perusahaan_id" class="form-control" onchange="this.form.submit()">
                                    <option value="all" {{ request('perusahaan_id') == 'all' ? 'selected' : '' }}>Semua</option>
                                    @foreach ($perusahaans as $perusahaan)
                                        <option value="{{ $perusahaan->id_perusahaan }}" {{ request('perusahaan_id') == $perusahaan->id_perusahaan ? 'selected' : '' }}>{{ $perusahaan->nama_perusahaan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </form>
                    
                    <div class="table-responsive mt-3">
                        <table class="table table-bordered table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>Nama Proyek</th>
                                    <th>Perusahaan</th>
                                    <th>Status</th>
                                    <th>Total Task</th>
                                    <th>Progress</th>
                                    <th>Aksi</th>
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
                                                <p>Pending: {{ $proyek->status_count['Pending'] ?? 0 }}</p>
                                                <p>Ongoing: {{ $proyek->status_count['Ongoing'] ?? 0 }}</p>
                                                <p>Revised: {{ $proyek->status_count['Revised'] ?? 0 }}</p>
                                                <p>Completed: {{ $proyek->status_count['Completed'] ?? 0 }}</p>
                                            @else
                                                <p>No Task</p>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="progress mt-3">
                                                <div class="progress-bar" role="progressbar" style="width: {{ $proyek->progress }}%" aria-valuenow="{{ $proyek->progress }}" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{ route('task.index', ['id_proyek' => $proyek->id_proyek]) }}" class="btn btn-success btn-sm">Atur Task</a>
                                            <a href="{{ route('proyek.edit', $proyek->id_proyek) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('proyek.destroy', $proyek->id_proyek) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus proyek ini?')">Hapus</button>
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