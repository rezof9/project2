@extends('main')

@section('section')
<div class="container-fluid">
    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Form</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Perusahaan</a></li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Perusahaan</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('perusahaan.update', $perusahaan->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama_perusahaan" class="form-label">Nama Perusahaan</label>
                            <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" value="{{ $perusahaan->nama_perusahaan }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="logo" class="form-label">Logo</label>
                            <input type="file" class="form-control" id="logo" name="logo">
                            <img src="{{ asset('storage/' . $perusahaan->logo) }}" width="100" alt="Logo">
                        </div>
                        <div class="mb-3">
                            <label for="url" class="form-label">URL</label>
                            <input type="url" class="form-control" id="url" name="url" value="{{ $perusahaan->url }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" name="status" required>
                                <option value="aktif" {{ $perusahaan->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
                                <option value="non-aktif" {{ $perusahaan->status == 'non-aktif' ? 'selected' : '' }}>Non-Aktif</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('perusahaan.index') }}" class="btn btn-light">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
