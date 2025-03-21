<?php

// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtworkController;

// Afficher la vue index.blade.php
Route::get('/artworks', [ArtworkController::class, 'index'])->name('artworks.index');

// routes/web.php
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');


// routes/web.php
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');

// routes/web.php
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

// routes/web.php
Route::get('/artworks/create', [ArtworkController::class, 'create'])->name('artworks.create');
Route::post('/artworks', [ArtworkController::class, 'store'])->name('artworks.store');

// routes/web.php
Route::get('/artworks/{artwork}/edit', [ArtworkController::class, 'edit'])->name('artworks.edit');
Route::put('/artworks/{artwork}', [ArtworkController::class, 'update'])->name('artworks.update');

// routes/web.php
Route::delete('/artworks/{artwork}', [ArtworkController::class, 'destroy'])->name('artworks.destroy');
