@extends('main')

@section('section')
<form action="{{ isset($about) ? route('about.update', $about->id) : route('about.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if(isset($about))
        @method('PUT')
    @endif

    <label>Title</label>
    <input type="text" name="title" value="{{ $about->title ?? '' }}" class="form-control">

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

    <label>Image</label>
    <input type="file" name="image" class="form-control">

    <button type="submit" class="btn btn-success">{{ isset($about) ? 'Update' : 'Create' }}</button>
</form>
@endsection
