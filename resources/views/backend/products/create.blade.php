@extends('main')

@section('section')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Product Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="color" class="form-label">Color</label>
                            <input type="text" class="form-control" id="color" name="color" placeholder="Contoh: Red, Blue, Green">
                            <small class="text-muted">Pisahkan warna dengan koma (",") jika lebih dari satu.</small>
                        </div>

                        <div class="mb-3">
                            <label for="product_size" class="form-label">Product Size</label>
                            <input type="text" class="form-control" id="product_size" name="product_size" placeholder="Contoh: 32 inch, 65 inch">
                            <small class="text-muted">Pisahkan ukuran dengan koma (",") jika lebih dari satu.</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="category[]" value="Furniture" id="furniture">
                                <label class="form-check-label" for="furniture">Furniture</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="category[]" value="Smart Gadgets" id="smart">
                                <label class="form-check-label" for="smart">Smart Gadgets</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="category[]" value="Electronics" id="electronics">
                                <label class="form-check-label" for="electronics">Electronics</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="system" class="form-label">System</label>
                            <input type="text" class="form-control" id="system" name="system" placeholder="Contoh: Windows, MacOS, Linux">
                            <small class="text-muted">Pisahkan sistem dengan koma (",") jika lebih dari satu.</small>
                        </div>

                        <div class="mb-3">
                            <label for="power_suply" class="form-label">Power Supply</label                                                         >1
                            <input type="text" class="form-control" id="power_supply" name="power_supply" placeholder="Contoh: 500W, 750W">
                            <small class="text-muted">Pisahkan power supply dengan koma (",") jika lebih dari satu.</small>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" name="status">
                                <option value="" selected disabled>Choose Status</option>
                                <option value="Stock">In Stock</option>
                                <option value="Sold">Sold Out</option>
                                <option value="Order">Pre Order</option>
                                <option value="Limited">Limited Stock</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="front_port" class="form-label">Front Port</label>
                            <input type="text" class="form-control" id="front_port" name="front_port" placeholder="Contoh: USB, HDMI, Audio Jack">
                            <small class="text-muted">Pisahkan port dengan koma (",") jika lebih dari satu.</small>
                        </div>
                        <div class="mb-3">
                            <label for="display_size" class="form-label">Display Size</label>
                            <input type="text" class="form-control" id="display_size" name="display_size" placeholder="Contoh: 32 inch, 65 inch">
                            <small class="text-muted">Pisahkan ukuran dengan koma (",") jika lebih dari satu.</small>
                        </div>
                        <div class="mb-3">
                            <label for="package_size" class="form-label">Package Size</label>
                            <input type="text" class="form-control" id="package_size" name="package_size" placeholder="Contoh: 30x40x10 cm">
                            <small class="text-muted">Pisahkan ukuran dengan koma (",") jika lebih dari satu.</small>
                        </div>
                        <div class="mb-3">
                            <label for="net_weight" class="form-label">Net Weight</label>
                            <input type="text" class="form-control" id="net_weight" name="net_weight" placeholder="Contoh: 500 gram, 1 kg">
                            <small class="text-muted">Pisahkan berat dengan koma (",") jika lebih dari satu.</small>
                        </div>
                        <div class="mb-3">
                            <label for="gross_weight" class="form-label">Gross Weight</label>
                            <input type="text" class="form-control" id="gross_weight" name="gross_weight" placeholder="Contoh: 1 kg, 2 kg">
                            <small class="text-muted">Pisahkan berat dengan koma (",") jika lebih dari satu.</small>
                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity" required>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label for="rating">Rating:</label>
                                <style>
                                    .rating {
                                      display: flex;
                                      flex-direction: row-reverse;
                                      justify-content: left;
                                    }
                                    .rating input[type="radio"] {
                                      display: none;
                                    }
                                    .rating label {
                                      font-size: 2rem;
                                      color: #ddd;
                                      cursor: pointer;
                                    }
                                    .rating input[type="radio"]:checked ~ label {
                                      color: #f5c518; /* Warna bintang saat dipilih */
                                    }
                                    .rating label:hover,
                                    .rating label:hover ~ label {
                                      color: #f5c518; /* Warna bintang saat hover */
                                    }
                                  </style>

<div class="rating">
    <input type="radio" id="star5" name="rating" value="5" />
    <label for="star5" class="star" data-value="5">★</label>

    <input type="radio" id="star4" name="rating" value="4" />
    <label for="star4" class="star" data-value="4">★</label>

    <input type="radio" id="star3" name="rating" value="3" />
    <label for="star3" class="star" data-value="3">★</label>

    <input type="radio" id="star2" name="rating" value="2" />
    <label for="star2" class="star" data-value="2">★</label>

    <input type="radio" id="star1" name="rating" value="1" />
    <label for="star1" class="star" data-value="1">★</label>
  </div>

  <!-- Input hidden untuk menyimpan nilai rating -->
  <input type="hidden" name="rating" id="rating" required>


                        <!-- JavaScript untuk menangani klik bintang -->
                        <script>
                            document.querySelectorAll('.star').forEach(star => {
                                star.addEventListener('click', function () {
                                    let ratingValue = this.getAttribute('data-value');
                                    document.getElementById('rating').value = ratingValue; // Set nilai rating pada input hidden

                                    // Update bintang yang terisi
                                    document.querySelectorAll('.star').forEach(star => {
                                        star.classList.remove('filled');
                                    });
                                    for (let i = 0; i < ratingValue; i++) {
                                        document.querySelectorAll('.star')[i].classList.add('filled');
                                    }
                                });
                            });
                        </script>


                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Enter Price" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="image">Image:</label>
                            <input class="form-control" id="image" name="image" type="file" required="" accept="image/*" onchange="previewImage(event)">
                             <!-- Preview Gambar -->
                             <div>
                                <img id="preview" src="#" alt="Preview Image" style="display: none; width: 200px; height: auto;" />
                            </div>
                            <script>
                                function previewImage(event) {
                                    const input = event.target;
                                    const preview = document.getElementById('preview');

                                    if (input.files && input.files[0]) {
                                        const reader = new FileReader();

                                        reader.onload = function(e) {
                                            preview.style.display = 'block';
                                            preview.src = e.target.result;
                                        }

                                        reader.readAsDataURL(input.files[0]);
                                    } else {
                                        // Jika tidak ada file dipilih, sembunyikan preview
                                        preview.style.display = 'none';
                                        preview.src = '#';
                                    }
                                }
                            </script>

                            <div class="invalid-feedback">Please upload an image.</div>
                          </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-plus"></i> Add Product
                            </button>
                            <a href="{{ route('products.index') }}" class="btn btn-secondary">
                                <i class="fa fa-arrow-left"></i> Back
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<!-- Container-fluid Ends-->
    </div>
@endsection
