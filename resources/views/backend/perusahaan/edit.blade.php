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
                    <form action="{{ route('perusahaan.update', $perusahaan->id_perusahaan) }}" method="POST" enctype="multipart/form-data">
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
                            <input type="text" class="form-control" id="url" name="url" value="{{ $perusahaan->url }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="jenis" class="form-label">Jenis</label>
                            <select class="form-select" id="jenis" name="jenis" required>
                                <option value="Media Advertising">Media Advertising</option>
                                <option value="Consultant">Consultant</option>
                                <option value="Outsourcing">Outsourcing</option>
                                <option value="Developer">Developer</option>
                                <option value="Construction">Construction</option>
                                <option value="Event Organizer">Event Organizer</option>
                                <option value="Health">Health</option>
                                <option value="Education">Education</option>
                                <option value="Energy">Energy</option>
                                <option value="Social">Social</option>
                                <option value="Art,Craft & Creative">Art, Craft & Creative</option>
                                <option value="Farm">Farm</option>
                                <option value="Software & Games">Software & Games</option>
                                <option value="Retail">Retail</option>
                                <option value="Travel">Travel</option>
                                <option value="Sport">Sport</option>
                            </select>
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
