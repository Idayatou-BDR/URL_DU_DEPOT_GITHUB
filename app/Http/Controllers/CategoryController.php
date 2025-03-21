<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    // app/Http/Controllers/CategoryController.php
public function create()
{
    return view('categories.create');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
    ]);

    Category::create($request->all());

    return redirect()->route('categories.index')->with('success', 'Catégorie ajoutée avec succès.');
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
    // app/Http/Controllers/CategoryController.php
public function edit(Category $category)
{
    return view('categories.edit', compact('category'));
}

public function update(Request $request, Category $category)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
    ]);

    $category->update($request->all());

    return redirect()->route('categories.index')->with('success', 'Catégorie mise à jour avec succès.');
}
    /**
     * Remove the specified resource from storage.
     */
    // app/Http/Controllers/CategoryController.php
public function destroy(Category $category)
{
    $category->delete();
    return redirect()->route('categories.index')->with('success', 'Catégorie supprimée avec succès.');
}
}
