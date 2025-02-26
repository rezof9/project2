@extends('main')

@section('section')
<div class="container">
    <h1>Add New Service</h1>    

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
        </div>
        <div class="col-sm-12">
            <div class="mb-3">
                <label for="description">Deskripsi</label>
                <textarea name="description" id="description" class="form-control">{{ old('description', $service->description ?? '') }}</textarea>
                <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
                <script>
                    ClassicEditor
                        .create(document.querySelector('#description'))
                        .catch(error => {
                            console.error(error);
                        });
                </script>
                <style>
                    .ck-editor__editable {
                        min-height: 300px;
                        font-size: 16px;
                    }
                </style>
                <div class="invalid-feedback">Please fill in the description.</div>
        </div>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image" onchange="previewImage(event)">
        </div>

                        @if(isset($service->image) && $service->image)
                            <div class="mb-3">
                                <label class="form-label">Image Saat Ini</label>
                                <div>
                                    <img src="{{ asset('storage/' . $service->image) }}" alt="Image" style="max-width: 150px;">
                                </div>
                            </div>
                        @endif

                                                <!-- Preview image baru -->
                                                <img id="imagePreview" src="#" alt="Preview Gambar"
                                                style="max-width: 200px; display: none; border: 1px solid #ddd; padding: 5px; margin-top: 10px;">
                   
                                           <div class="invalid-feedback">Please upload a image.</div>
                   
                                           <script>
                                               function previewImage(event) {
                                                   var reader = new FileReader();
                                                   reader.onload = function() {
                                                       var output = document.getElementById('imagePreview');
                                                       output.src = reader.result;
                                                       output.style.display = "block";
                                                   }
                                                   reader.readAsDataURL(event.target.files[0]);
                                               }
                                           </script>

        <button type="submit" class="btn btn-primary">Create Service</button>
    </form>
</div>
@endsection
