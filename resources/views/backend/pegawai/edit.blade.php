@extends('main')

@section('section')
<div class="container-fluid">
    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Pegawai</a></li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form Edit Pegawai</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('pegawai.update', $pegawai->id_pegawai) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama', $pegawai->nama) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="nomor">Nomor</label>
                            <input type="text" class="form-control" name="nomor" id="nomor" value="{{ old('nomor', $pegawai->nomor) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="{{ old('email', $pegawai->email) }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="text-label form-label" for="password">Password *</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" name="password" id="password" required>
                                <span class="input-group-text show-pass" id="togglePassword" style="cursor: pointer;">
                                    <i class="fa fa-eye-slash"></i>
                                </span>
                                <div class="invalid-feedback">Please Enter a password.</div>
                            </div>
                        </div>

                        <script>
                        document.getElementById("togglePassword").addEventListener("click", function () {
                            let passwordInput = document.getElementById("password");
                            let icon = this.querySelector("i");

                            if (passwordInput.type === "password") {
                                passwordInput.type = "text";
                                icon.classList.remove("fa-eye-slash");
                                icon.classList.add("fa-eye");
                            } else {
                                passwordInput.type = "password";
                                icon.classList.remove("fa-eye");
                                icon.classList.add("fa-eye-slash");
                            }
                        });
                        </script>


                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                <option value="L" {{ $pegawai->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="P" {{ $pegawai->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" class="form-control" name="jabatan" id="jabatan" value="{{ old('jabatan', $pegawai->jabatan) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control" name="foto" id="foto" accept="image/*">
                            @if($pegawai->foto)
                                <img src="{{ asset('storage/' . $pegawai->foto) }}" width="50" alt="Foto Lama">
                            @else
                                No Photo
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="id_perusahaan">Perusahaan</label>
                            <select class="form-control" name="id_perusahaan" id="id_perusahaan">
                                <option value="">Pilih Perusahaan</option>
                                @foreach($perusahaans as $perusahaan)
                                    <option value="{{ $perusahaan->id_perusahaan }}" {{ $perusahaan->id_perusahaan == $pegawai->id_perusahaan ? 'selected' : '' }}>
                                        {{ $perusahaan->nama_perusahaan }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('pegawai.index') }}" class="btn btn-secondary">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
