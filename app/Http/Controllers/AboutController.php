<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller


{
    public function index()
    {
        $abouts = About::latest()->paginate(10);
        return view('backend.about.index', compact('abouts'));
    }

    public function create()
    {
        return view('backend.about.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('abouts', 'public');
        }

        About::create($data);

        return redirect()->route('backend.about.index')->with('success', 'about created successfully.');
    }
}

