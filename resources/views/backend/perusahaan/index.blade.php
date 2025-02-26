@extends('main')

@section('section')
<div class="container-fluid">
    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Table</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Perusahaan</a></li>
        </ol>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Perusahaan</h4>
                    <a href="{{ route('perusahaan.create') }}" class="btn btn-primary">Tambah Perusahaan</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th><strong>Nama Perusahaan</strong></th>
                                    <th><strong>Logo</strong></th>
                                    <th><strong>URL</strong></th>
                                    <th><strong>Jenis</strong></th>
                                    <th><strong>Status</strong></th>
                                    <th><strong>Aksi</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($perusahaans as $perusahaan)
                                <tr>
                                    <td>{{ $perusahaan->nama_perusahaan }}</td>
                                    <td><img src="{{ asset('storage/' . $perusahaan->logo) }}" width="100" alt="Logo"></td>
                                    <td><a href="{{ $perusahaan->url }}" target="_blank">{{ $perusahaan->url }}</a></td>
                                    <td>{{ $perusahaan->jenis }}</td>
                                    <td>{{ $perusahaan->status }}</td>
                                    <td>
                                        <a href="{{ route('perusahaan.edit', $perusahaan->id_perusahaan) }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                        <form action="{{ route('perusahaan.destroy', $perusahaan->id_perusahaan) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
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
