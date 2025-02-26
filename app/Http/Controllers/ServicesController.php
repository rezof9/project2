<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    /**
     * Display a listing of the services.
     */
    public function index()
    {
        // Ambil semua data service
        $services = Service::all();

        // Tampilkan ke view
        return view('backend.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new service.
     */
    public function create()
    {
        // Tampilkan form create
        return view('backend.services.create');
    }

    /**
     * Store a newly created service in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Upload image jika ada
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('services', 'public');
        }

        // Simpan data
        Service::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('services.index')->with('success', 'Service created successfully.');
    }

    /**
     * Show the form for editing the specified service.
     */
    public function edit(Service $service)
    {
        // Tampilkan form edit
        return view('backend.services.edit', compact('service'));
    }

    /**
     * Update the specified service in storage.
     */
    public function update(Request $request, Service $service)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Update image jika ada
        if ($request->hasFile('image')) {
            // Hapus image lama jika ada
            if ($service->image) {
                Storage::disk('public')->delete($service->image);
            }
            $imagePath = $request->file('image')->store('services', 'public');
            $service->image = $imagePath;
        }

        // Update data lain
        $service->title = $request->title;
        $service->description = $request->description;
        $service->save();

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

    /**
     * Remove the specified service from storage.
     */
    public function destroy(Service $service)
    {
        // Hapus image jika ada
        if ($service->image) {
            Storage::disk('public')->delete($service->image);
        }

        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }
}
