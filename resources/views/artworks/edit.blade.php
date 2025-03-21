// app/Http/Controllers/ArtworkController.php
public function edit(Artwork $artwork)
{
    $categories = Category::all();
    return view('artworks.edit', compact('artwork', 'categories'));
}

public function update(Request $request, Artwork $artwork)
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

    $artwork->update($request->except('photo'));

    if ($request->hasFile('photo')) {
        $image = $request->file('photo');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename);
        Image::make($image)->resize(800, 600)->save($location);
        $artwork->photo = $filename;
    }

    $artwork->save();

    return redirect()->route('artworks.index')->with('success', 'Œuvre mise à jour avec succès.');
}
<!-- resources/views/artworks/edit.blade.php -->
<form action="{{ route('artworks.update', $artwork) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <!-- Les champs du formulaire (similaires à create.blade.php) -->
    <button type="submit">Mettre à jour</button>
</form>
