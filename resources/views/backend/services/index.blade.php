@extends('main')

@section('section')
<div class="container">
    <h1>Our Services</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('services.create') }}" class="btn btn-primary mb-3">Add Service</a>

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
            @forelse($services as $service)
                <tr>
                    <td>{{ $service->title }}</td>
                    <td>{!! $service->description !!}</td>
                    <td>
                        @if($service->image)
                            <img src="{{ asset('storage/'.$service->image) }}" alt="" width="300px">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('services.edit', $service->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline-block">
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
                    <td colspan="4">No services found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
