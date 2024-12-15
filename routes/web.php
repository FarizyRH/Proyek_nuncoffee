<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FeedbackController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::resource('feedback', FeedbackController::class)->middleware('role:admin,super_admin');
});

Route::middleware(['auth', 'second'])->group(function () {
    Route::get('/feedback', [FeedbackController::class, 'edit'])->name('feedback.edit')->middleware('role: admin, super_admin');
    Route::patch('/feedback', [FeedbackController::class, 'update'])->name('feedback.update')->middleware('role: admin');
    Route::delete('/feedback', [FeedbackController::class, 'destroy'])->name('feedback.destroy')->middleware('role: admin');

});
Route::resource('feedback', FeedbackController::class);
require __DIR__.'/auth.php';
