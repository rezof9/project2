@extends('main')

@section('section')
<div class="container-fluid">
    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Form</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Tambah Perusahaan</a></li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Perusahaan</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('perusahaan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_perusahaan" class="form-label">Nama Perusahaan</label>
                            <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" required>
                        </div>
                        <div class="mb-3">
                            <label for="logo" class="form-label">Logo</label>
                            <input type="file" class="form-control" id="logo" name="logo" onchange="previewLogo(event)">
                        </div>

                        @if(isset($perusahaan->logo) && $perusahaan->logo)
                            <div class="mb-3">
                                <label class="form-label">Logo Saat Ini</label>
                                <div>
                                    <img src="{{ asset('storage/' . $perusahaan->logo) }}" alt="Logo Perusahaan" style="max-width: 150px;">
                                </div>
                            </div>
                        @endif

                        <!-- Preview logo baru -->
                        <img id="logoPreview" src="#" alt="Preview Gambar"
                             style="max-width: 200px; display: none; border: 1px solid #ddd; padding: 5px; margin-top: 10px;">

                        <div class="invalid-feedback">Please upload a logo.</div>

                        <script>
                            function previewLogo(event) {
                                var reader = new FileReader();
                                reader.onload = function() {
                                    var output = document.getElementById('logoPreview');
                                    output.src = reader.result;
                                    output.style.display = "block";
                                }
                                reader.readAsDataURL(event.target.files[0]);
                            }
                        </script>


                        <div class="mb-3">
                            <label for="url" class="form-label">URL</label>
                            <input type="text" class="form-control" id="url" name="url" required>
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
                                <option value="aktif">Aktif</option>
                                <option value="non-aktif">Non-Aktif</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        @if(session('success'))
                        alert("{{ session('success') }}");
                        window.location.href = "{{ route('dashboard') }}";  // Redirect ke halaman dashboard setelah 3 detik
                        @endif

                        <a href="{{ route('perusahaan.index') }}" class="btn btn-light">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
