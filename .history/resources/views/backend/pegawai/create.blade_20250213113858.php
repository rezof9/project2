@extends('main')

@section('section')
<div class="container-fluid">
    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Pegawai</a></li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form Tambah Pegawai</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ route('pegawai.store') }}" method="POST" enctype="multipart/form-data" class="form-valide-with-icon needs-validation" novalidate>
                            @csrf

                            <!-- Nama -->
                            <div class="mb-3">
                                <label class="text-label form-label" for="nama">Nama</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" name="nama" id="nama" required>
                                    <div class="invalid-feedback">Please Enter a name.</div>
                                </div>
                            </div>

                            <!-- Nomor -->
                            <div class="mb-3">
                                <label class="text-label form-label" for="nomor">Nomor</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                    <input type="text" class="form-control" name="nomor" id="nomor" required>
                                    <div class="invalid-feedback">Please Enter a number.</div>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label class="text-label form-label" for="email">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                    <div class="invalid-feedback">Please Enter an email address.</div>
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label class="text-label form-label" for="password">Password *</label>
                                <div class="input-group transparent-append">
                                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                    <input type="password" class="form-control" name="password" id="password" required>
                                    <span class="input-group-text show-pass">
                                        <i class="fa fa-eye-slash"></i>
                                        <i class="fa fa-eye"></i>
                                    </span>
                                    <div class="invalid-feedback">Please Enter a password.</div>
                                </div>
                            </div>

                            <!-- Jenis Kelamin -->
                            <div class="mb-3">
                                <label class="text-label form-label" for="jenis_kelamin">Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>

                            <!-- Jabatan -->
                            <div class="mb-3">
                                <label class="text-label form-label" for="jabatan">Jabatan</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                    <input type="text" class="form-control" name="jabatan" id="jabatan" required>
                                    <div class="invalid-feedback">Please Enter a position.</div>
                                </div>
                            </div>

                            <!-- Foto -->
                            <div class="mb-3">
                                <label class="text-label form-label" for="foto">Foto</label>
                                <input type="file" class="form-control" name="foto" id="foto" accept="image/*">
                            </div>

                            <!-- Perusahaan -->
                            <div class="mb-3">
                                <label class="text-label form-label" for="id_perusahaan">Perusahaan</label>
                                <select class="form-control" name="id_perusahaan" id="id_perusahaan">
                                    <option value="">Pilih Perusahaan</option>
                                    @foreach($perusahaans as $perusahaan)
                                        <option value="{{ $perusahaan->id_perusahaan }}">{{ $perusahaan->nama_perusahaan }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Submit and Cancel Buttons -->
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('pegawai.index') }}" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
