<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view('backend.about.index', compact('abouts'));
    }

    public function create()
    {
        return view('backend.about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('abouts', 'public');
        }

        About::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath
        ]);

        return redirect()->route('about.index')->with('success', 'About Us created successfully.');
    }

    public function edit(About $about)
    {
        return view('backend.about.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('abouts', 'public');
            $about->update(['image' => $imagePath]);
        }

        $about->update([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->route('about.index')->with('success', 'About Us updated successfully.');
    }

    public function destroy(About $about)
    {
        if ($about->image) {
            Storage::disk('public')->delete($about->image);
        }
        $about->delete();
        return redirect()->route('about.index')->with('success', 'About Us deleted successfully.');
    }
}

