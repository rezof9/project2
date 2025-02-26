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
                                <label for="foto" class="form-label">Foto</label>
                                <input type="file" class="form-control" id="foto" name="foto" onchange="previewFoto(event)">
                            </div>
                    
                                            @if(isset($pegawai->foto) && $pegawai->foto)
                                                <div class="mb-3">
                                                    <label class="form-label">Foto Saat Ini</label>
                                                    <div>
                                                        <img src="{{ asset('storage/' . $pegawai->foto) }}" alt="Foto" style="max-width: 150px;">
                                                    </div>
                                                </div>
                                            @endif
                    
                                                                    <!-- Preview foto baru -->
                                                                    <img id="fotoPreview" src="#" alt="Preview Foto"
                                                                    style="max-width: 200px; display: none; border: 1px solid #ddd; padding: 5px; margin-top: 10px;">
                                       
                                                               <div class="invalid-feedback">Please upload a foto.</div>
                                       
                                                               <script>
                                                                   function previewFoto(event) {
                                                                       var reader = new FileReader();
                                                                       reader.onload = function() {
                                                                           var output = document.getElementById('fotoPreview');
                                                                           output.src = reader.result;
                                                                           output.style.display = "block";
                                                                       }
                                                                       reader.readAsDataURL(event.target.files[0]);
                                                                   }
                                                               </script>




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
