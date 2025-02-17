@extends('main')

@section('section')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Form Tambah Task</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form method="POST" action="{{ route('task.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="text-label form-label" for="nama_task">Nama Task</label>
                        <div class="input-group">
                            <span class="input-group-text"> <i class="fa fa-tasks"></i> </span>
                            <input type="text" class="form-control" id="nama_task" name="nama_task" placeholder="Masukkan Nama Task" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="text-label form-label" for="nama_task">Keterangan</label>
                        <div class="card-body custom-ekeditor">
                            <!-- Form input CKEditor -->
                            <textarea id="editor1" name="keterangan"></textarea>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="text-label form-label" for="status">Status *</label>
                        <div class="input-group">
                            <span class="input-group-text"> <i class="fa fa-check-circle"></i> </span>
                            <select class="form-control" id="status" name="status" required>
                                <option value="Pending">Pending</option>
                                <option value="Ongoing">Ongoing</option>
                                <option value="Completed">Completed</option>
                                <option value="Revised">Revised</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="text-label form-label" for="tanggal_mulai">Tanggal Mulai</label>
                        <div class="input-group">
                            <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
                            <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="text-label form-label" for="tanggal_selesai">Tanggal Selesai</label>
                        <div class="input-group">
                            <span class="input-group-text"> <i class="fa fa-calendar-check"></i> </span>
                            <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-light">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
