@extends('main')

@section('section')
    <h1>Edit Produk</h1>

    @if($errors->any())
        <div style="color:red;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Nama:</label>
            <input type="text" name="name" value="{{ old('name', $product->name) }}">
        </div>
        <div>
            <label>Deskripsi:</label>
            <textarea name="description">{{ old('description', $product->description) }}</textarea>
        </div>
        <div>
            <label>Harga:</label>
            <input type="text" name="price" value="{{ old('price', $product->price) }}">
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
