<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('artworks.index'); // Cela charge la vue resources/views/artworks/index.blade.php
    }

    /**
     * Show the form for creating a new resource.
     */
    // app/Http/Controllers/ArtworkController.php
public function create()
{
    $categories = Category::all();
    return view('artworks.create', compact('categories'));
}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'artist' => 'required|string|max:255',
        'year' => 'required|integer',
        'acquisition_date' => 'required|date',
        'estimated_price' => 'required|numeric',
        'description' => 'required|string',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'category_id' => 'required|exists:categories,id',
    ]);

    $artwork = new Artwork($request->except('photo'));

    if ($request->hasFile('photo')) {
        $image = $request->file('photo');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename);
        Image::make($image)->resize(800, 600)->save($location);
        $artwork->photo = $filename;
    }

    $artwork->save();

    return redirect()->route('artworks.index')->with('success', 'Œuvre ajoutée avec succès.');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
