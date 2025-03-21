<?php

// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtworkController;

// Afficher la vue index.blade.php
Route::get('/artworks', [ArtworkController::class, 'index'])->name('artworks.index');
