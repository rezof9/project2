@extends('main')

@section('section')
<div class="container-fluid">
    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Pegawai</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Data Pegawai</a></li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Pegawai</h4>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th><strong>Nama</strong></th>
                                    <th><strong>Email</strong></th>
                                    <th><strong>Perusahaan</strong></th>
                                    <th><strong>Foto</strong></th>
                                    <th><strong>Action</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pegawais as $pegawai)
                                    <tr>
                                        <td>{{ $pegawai->nama }}</td>
                                        <td>{{ $pegawai->email }}</td>
                                        <td>{{ $pegawai->perusahaan->nama_perusahaan }}</td>
                                        <td>
                                            @if($pegawai->foto)
                                                <img src="{{ asset('storage/' . $pegawai->foto) }}" width="50" alt="Foto">
                                            @else
                                                No Photo
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('pegawai.edit', $pegawai->id_pegawai) }}" class="btn btn-primary btn-xs">Edit</a>
                                            <form action="{{ route('pegawai.destroy', $pegawai->id_pegawai) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-xs">Delete</button>
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
