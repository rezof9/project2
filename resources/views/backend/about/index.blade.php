@extends('main')

@section('section')
<div class="container">
    <h1>About Us</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('about.create') }}" class="btn btn-primary mb-3">Add About</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($abouts as $about)
                <tr>
                    <td>{{ $about->title }}</td>
                    <td>{!! $about->description !!}</td>
                    <td>
                        @if($about->image)
                            <img src="{{ asset('storage/'.$about->image) }}" alt="" width="300px">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('about.edit', $about->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('about.destroy', $about->id) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button
                                type="submit"
                                class="btn btn-danger"
                                onclick="return confirm('Yakin ingin menghapus?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No About found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
