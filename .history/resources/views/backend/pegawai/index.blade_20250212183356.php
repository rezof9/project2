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
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Pegawai Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="example_wrapper" class="dataTables_wrapper">
                            <div class="dataTables_length" id="example_length">
                                <label>Show 
                                    <select name="example_length" aria-controls="example" class="form-control" id="perusahaanSelect">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries
                                </label>
                            </div>
        
                            <div id="example_filter" class="dataTables_filter">
                                <label>Search: 
                                    <input type="search" class="form-control" placeholder="" aria-controls="example" id="searchInput">
                                </label>
                            </div>
        
                            <table id="example" class="display dataTable" style="min-width: 845px" role="grid" aria-describedby="example_info">
                                <thead>
                                    <tr role="row">
                                        <th>Name</th>
                                        <th>Nomor</th>
                                        <th>Email</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Jabatan</th>
                                        <th>Foto</th>
                                        <th>Perusahaan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pegawais as $pegawai)
                                        <tr>
                                            <td>{{ $pegawai->nama }}</td>
                                            <td>{{ $pegawai->nomor }}</td>
                                            <td>{{ $pegawai->email }}</td>
                                            <td>{{ $pegawai->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                                            <td>{{ $pegawai->jabatan }}</td>
                                            <td><img src="{{ $pegawai->foto ? asset('storage/' . $pegawai->foto) : 'No Foto' }}" width="50" alt="Foto"></td>
                                            <td>{{ $pegawai->perusahaan ? $pegawai->perusahaan->nama_perusahaan : 'Tidak Ada' }}</td>
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
        
                            <!-- Pagination -->
                            <div class="dataTables_info" id="example_info" role="status" aria-live="polite">{{ $pegawais->links() }}</div>
                        </div>
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
