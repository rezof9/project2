@extends('main')

@section('section')
<div class="container-fluid">
   

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Pegawai</h4>
                    <div class="d-flex justify-content-between">
                        <div class="d-flex" style="margin-right: 10px">
                            <!-- Select Perusahaan -->
                            <select id="perusahaanSelect" class="form-control" style="width: 200px;">
                                <option value="">Semua Perusahaan</option>
                                @foreach($perusahaans as $perusahaan)
                                    <option value="{{ $perusahaan->id_perusahaan }}">{{ $perusahaan->nama_perusahaan }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Search by Nama -->
                        <div class="d-flex" style="margin-right: 10px" >
                            <input type="text" id="searchInput" class="form-control" placeholder="Search by Nama" style="width: 300px;" />
                        </div>

                        <a href="{{ route('pegawai.create') }}" class="btn btn-success">Tambah Pegawai</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Nomor</th>
                                    <th>Email</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jabatan</th>
                                    <th>Foto</th>
                                    <th>Perusahaan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="pegawaiTable">
                                @foreach($pegawais as $pegawai)
                                <tr>
                                    <td>{{ $pegawai->id_pegawai }}</td>
                                    <td>{{ $pegawai->nama }}</td>
                                    <td>{{ $pegawai->nomor }}</td>
                                    <td>{{ $pegawai->email }}</td>
                                    <td>{{ $pegawai->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                                    <td>{{ $pegawai->jabatan }}</td>
                                    <td>
                                        @if($pegawai->foto)
                                            <img src="{{ asset('storage/' . $pegawai->foto) }}" width="50" alt="Foto">
                                        @else
                                            No Foto
                                        @endif
                                    </td>
                                    <td>{{ $pegawai->perusahaan->nama_perusahaan ?? 'Tidak Ada' }}</td>
                                    <td>
                                        <a href="{{ route('pegawai.edit', $pegawai->id_pegawai) }}" class="btn btn-primary btn-xs">Edit</a>
                                        <form action="{{ route('pegawai.destroy', $pegawai->id_pegawai) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-xs">Hapus</button>
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

<script>
    // Fungsi untuk filter berdasarkan perusahaan
    document.getElementById('perusahaanSelect').addEventListener('change', function() {
        var perusahaanId = this.value;
        var searchQuery = document.getElementById('searchInput').value;

        // Ajax request untuk mendapatkan pegawai berdasarkan perusahaan dan nama
        fetch(`/pegawai/filter/${perusahaanId}?search=${searchQuery}`)
            .then(response => response.json())
            .then(data => {
                var tableBody = document.getElementById('pegawaiTable');
                tableBody.innerHTML = '';
                
                data.forEach(pegawai => {
                    var row = `
                        <tr>
                            <td>${pegawai.id_pegawai}</td>
                            <td>${pegawai.nama}</td>
                            <td>${pegawai.nomor}</td>
                            <td>${pegawai.email}</td>
                            <td>${pegawai.jenis_kelamin === 'L' ? 'Laki-laki' : 'Perempuan'}</td>
                            <td>${pegawai.jabatan}</td>
                            <td><img src="${pegawai.foto ? '/storage/' + pegawai.foto : 'No Foto'}" width="50" alt="Foto"></td>
                            <td>${pegawai.perusahaan.nama_perusahaan}</td>
                            <td>
                                <a href="/pegawai/${pegawai.id_pegawai}/edit" class="btn btn-primary btn-xs">Edit</a>
                                <form action="/pegawai/${pegawai.id_pegawai}" method="POST" style="display:inline;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger btn-xs">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    `;
                    tableBody.innerHTML += row;
                });
            });
    });

    // Fungsi untuk pencarian nama pegawai
    document.getElementById('searchInput').addEventListener('keyup', function() {
        var searchQuery = this.value;
        var perusahaanId = document.getElementById('perusahaanSelect').value;

        // Ajax request untuk mendapatkan pegawai berdasarkan nama dan perusahaan
        fetch(`/pegawai/filter/${perusahaanId}?search=${searchQuery}`)
            .then(response => response.json())
            .then(data => {
                var tableBody = document.getElementById('pegawaiTable');
                tableBody.innerHTML = '';
                
                data.forEach(pegawai => {
                    var row = `
                        <tr>
                            <td>${pegawai.id_pegawai}</td>
                            <td>${pegawai.nama}</td>
                            <td>${pegawai.nomor}</td>
                            <td>${pegawai.email}</td>
                            <td>${pegawai.jenis_kelamin === 'L' ? 'Laki-laki' : 'Perempuan'}</td>
                            <td>${pegawai.jabatan}</td>
                            <td><img src="${pegawai.foto ? '/storage/' + pegawai.foto : 'No Foto'}" width="50" alt="Foto"></td>
                            <td>${pegawai.perusahaan.nama_perusahaan}</td>
                            <td>
                                <a href="/pegawai/${pegawai.id_pegawai}/edit" class="btn btn-primary btn-xs">Edit</a>
                                <form action="/pegawai/${pegawai.id_pegawai}" method="POST" style="display:inline;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger btn-xs">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    `;
                    tableBody.innerHTML += row;
                });
            });
    });
</script>

@endsection
