@extends('main')

@section('section')
<div class="container">
    <h1>Edit Service</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Title</label>
            <input
                type="text"
                name="title"
                class="form-control"
                value="{{ old('title', $service->title) }}"
            >
        </div>
        <div class="col-sm-12">
            <div class="mb-3">
                <label for="description">Deskripsi</label>
                <textarea name="description" id="description" class="form-control">{{ old('description', $services->description ?? '') }}</textarea>
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
            <label>Image (optional)</label>
            <input type="file" name="image" class="form-control">
            @if($service->image)
                <p>Current image:</p>
                <img src="{{ asset('storage/'.$service->image) }}" alt="" width="120">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update Service</button>
    </form>
</div>
@endsection
