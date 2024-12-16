<?php

use App\Http\Controllers\ProfileController;
use App\Models\Galeri;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $items = Galeri::all();
    return view('home', compact('items'));
});

Route::get('/dashboard', function () {
    $items = Galeri::all();
    return view('home', compact('items'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
use App\Http\Controllers\GaleriController;

Route::resource('galeri', GaleriController::class);


Route::get('/testhome',function(){
    $items = Galeri::all();
    return view('home', compact('items'));
});

require __DIR__.'/auth.php';
