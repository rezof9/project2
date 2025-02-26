@extends('main')

@section('section')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="list-product-header d-flex justify-content-between">
                        <h4>Product List</h4>
                        <a class="btn btn-primary" href="{{ route('products.create') }}">
                            <i class="fa fa-plus"></i> Add Product
                        </a>
                    </div>
                    <div class="mt-4">
                      <div class="d-flex justify-content-between align-items-center">
                        <input type="text" id="search" class="form-control w-50" placeholder="Search products..." onkeyup="searchProducts()">
                      </div>
                    <div class="list-product">
                        <table class="table table-bordered" id="product-list">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Image</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $index => $product)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td style="padding: 0; width: 40%;">
                                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-thumbnail">
                                        </td>
                                        <td style="padding-left: 20px; width: 60%;">
                                            <ul class="list-group">
                                                <li class="list-group-item"><strong>Name:</strong> {{ $product->name }}</li>
                                                <table class="table table-bordered">
                                                  <tr>
                                                      <td><strong>Color</strong></td>
                                                      @foreach(explode(',', $product->color) as $index => $color)
                                                          <td @if(($index + 1) % 2 == 0) style="background-color: rgb(222, 222, 222);" @endif>
                                                              {{ trim($color) }}
                                                          </td>
                                                      @endforeach
                                                  </tr>
                                                  <tr>
                                                      <td><strong>Product Size</strong></td>
                                                      @foreach(explode(',', $product->product_size) as $index => $size)
                                                          <td @if(($index + 1) % 2 == 0) style="background-color: rgb(222, 222, 222);" @endif>
                                                              {{ trim($size) }}
                                                          </td>
                                                      @endforeach
                                                  </tr>
                                                <tr>
                                                    <td><strong>Category</strong></td>
                                                    @foreach(json_decode($product->category, true) as $index => $category)
                                                        <td @if(($index + 1) % 2 == 0) style="background-color: rgb(222, 222, 222);" @endif>
                                                            {{ trim($category) }}
                                                        </td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    <td><strong>System</strong></td>
                                                    @foreach(explode(',', $product->system) as $index => $system)
                                                        <td @if(($index + 1) % 2 == 0) style="background-color: rgb(222, 222, 222);" @endif>
                                                            {{ trim($system) }}
                                                        </td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    <td><strong>Power Supply</strong></td>
                                                    @foreach(explode(',', $product->power_suply) as $index => $power)
                                                        <td @if(($index + 1) % 2 == 0) style="background-color: rgb(222, 222, 222);" @endif>
                                                            {{ trim($power) }}
                                                        </td>
                                                    @endforeach
                                                </tr>
                                                <li class="list-group-item"><strong>Status:</strong> {{ $product->status }}</li>

                                                  <tr>
                                                      <td><strong>Front Port</strong></td>
                                                      @foreach(explode(',', $product->front_port) as $index => $port)
                                                          <td @if(($index + 1) % 2 == 0) style="background-color: rgb(222, 222, 222);" @endif>
                                                              {{ trim($port) }}
                                                          </td>
                                                      @endforeach
                                                  </tr>
                                                  <tr>
                                                      <td><strong>Display Size</strong></td>
                                                      @foreach(explode(',', $product->display_size) as $index => $size)
                                                          <td @if(($index + 1) % 2 == 0) style="background-color: rgb(222, 222, 222);" @endif>
                                                              {{ trim($size) }}
                                                          </td>
                                                      @endforeach
                                                  </tr>
                                                <tr>
                                                    <td><strong>Package Size</strong></td>
                                                    @foreach(explode(',', $product->package_size) as $index => $size)
                                                        <td @if(($index + 1) % 2 == 0) style="background-color: rgb(222, 222, 222);" @endif>
                                                            {{ trim($size) }}
                                                        </td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    <td><strong>Net Weight</strong></td>
                                                    @foreach(explode(',', $product->net_weight) as $index => $net)
                                                        <td @if(($index + 1) % 2 == 0) style="background-color: rgb(222, 222, 222);" @endif>
                                                            {{ number_format(intval(trim($net)), 0, ',', '.') }} gram
                                                        </td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    <td><strong>Gross Weight</strong></td>
                                                    @foreach(explode(',', $product->gross_weight) as $index => $gross)
                                                        <td @if(($index + 1) % 2 == 0) style="background-color: rgb(222, 222, 222);" @endif>
                                                            {{ number_format(intval(trim($gross)), 0, ',', '.') }} gram
                                                        </td>
                                                    @endforeach
                                                </tr>
                                            </table>
                                                <li class="list-group-item"><strong>Quantity:</strong> {{ $product->quantity }}</li>
                                                <li class="list-group-item"><strong>Price:</strong> Rp. {{ number_format($product->price, 0, ',', '.') }}</li>
                                                <li class="list-group-item"><strong>Rating:</strong> @for ($i = 1; $i <= 5; $i++) <span class="rating {{ $product->rating >= $i ? 'text-warning' : '' }}"><i class="fa fa-star"></i></span> @endfor</li>
                                            </ul>
                                            {{-- <div class="mt-3">
                                                <a href="{{ route('product.update', $product->id) }}" class="btn btn-sm btn-info">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a> --}}
                                                <form id="delete-form-{{ $product->id }}" action="{{ route('products.destroy', $product->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus produk ini?')">
                                                        <i class="fa fa-trash"></i> Delete
                                                    </button>
                                                </form>

                                            </div>
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
    </div>
@endsection
