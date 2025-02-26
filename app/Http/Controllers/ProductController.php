<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Mengambil semua produk
        return view('backend.products.index', compact('products'));
    }

public function create()
{
    return view('backend.products.create');
}

public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'color' => 'nullable|string',
        'category' => 'required|array', // Ubah jadi array
        'category.*' => 'string', // Pastikan setiap kategori adalah string
        'system' => 'nullable|string',
        'power_supply' => 'nullable|string',
        'status' => 'required|string',
        'front_port' => 'nullable|string',
        'display_size' => 'nullable|string',
        'product_size' => 'nullable|string',
        'package_size' => 'nullable|string',
        'net_weight' => 'nullable',
        'gross_weight' => 'nullable',
        'quantity' => 'required|integer',
        'rating' => 'nullable|integer|min:0|max:5',
        'price' => 'nullable|numeric',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Validate request
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator);
    }

    $validatedData = $validator->validated();

    // Kalau ada gambar yang di-upload
    if ($request->hasFile('image')) {
        if (!file_exists(storage_path('app/public/uploads'))) {
            mkdir(storage_path('app/public/uploads'), 0755, true);
        }
        $imagePath = $request->file('image')->store('uploads', 'public');
        $validatedData['image'] = $imagePath;
    }

    // Simpan produk ke database
    Product::create([
        'name' => $validatedData['name'],
        'color' => $validatedData['color'],
        'category' => json_encode($validatedData['category']), // Simpan sebagai JSON
        'system' => $validatedData['system'],
        'power_supply' => $validatedData['power_supply'],
        'status' => $validatedData['status'],
        'front_port' => $validatedData['front_port'],
        'display_size' => $validatedData['display_size'],
        'product_size' => $validatedData['product_size'],
        'package_size' => $validatedData['package_size'],
        'net_weight' => $validatedData['net_weight'],
        'gross_weight' => $validatedData['gross_weight'],
        'quantity' => $validatedData['quantity'],
        'rating' => $validatedData['rating'],
        'price' => $validatedData['price'],
        'image' => $validatedData['image'] ?? null,
    ]);

    return redirect()->route('products.index')->with('success', 'Product created successfully.');
}

public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $request->validate([
        'name' => 'required',
        'price' => 'required|numeric',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($request->hasFile('image')) {
        if ($product->image && Storage::exists($product->image)) {
            Storage::delete($product->image);
        }
        $imagePath = $request->file('image')->store('products');
        $product->image = $imagePath;
    }

    $product->name = $request->name;
    $product->price = $request->price;
    $product->save();

    return redirect()->route('products.index')->with('success', 'Product updated successfully!');
}


public function destroy($id)
{
    $product = Product::find($id);

    if (!$product) {
        return redirect()->route('products.index')->with('error', 'Product not found!');
    }

    // Hapus gambar jika ada
    if ($product->image && Storage::exists($product->image)) {
        Storage::delete($product->image);
    }

    $product->delete();

    return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
}

}


