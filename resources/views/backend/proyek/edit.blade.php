@extends('main')

@section('section')
<div class="container-fluid">
    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Proyek</a></li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Proyek</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('proyek.update', $proyek->id_proyek) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="id_perusahaan">Perusahaan</label>
                            <select name="id_perusahaan" class="form-control" required>
                                <option value="">Pilih Perusahaan</option>
                                @foreach ($perusahaans as $perusahaan)
                                    <option value="{{ $perusahaan->id_perusahaan }}" {{ $proyek->id_perusahaan == $perusahaan->id_perusahaan ? 'selected' : '' }}>
                                        {{ $perusahaan->nama_perusahaan }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama_proyek">Nama Proyek</label>
                            <input type="text" class="form-control" name="nama_proyek" id="nama_proyek" value="{{ $proyek->nama_proyek }}" required>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" class="form-control" required>
                                <option value="aktif" {{ $proyek->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
                                <option value="non-aktif" {{ $proyek->status == 'non-aktif' ? 'selected' : '' }}>Non-aktif</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('proyek.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
