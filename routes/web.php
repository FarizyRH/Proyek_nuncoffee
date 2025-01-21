<?php

use App\Models\Footer;
use App\Models\Galeri;
use App\Models\AboutUs;
use App\Models\Product;
use App\Models\Feedback;
use App\Models\Testimoni;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\TestimoniController;


Route::get('/', function () {
    $user = Auth::user();

    if ($user) {
        if ($user->role === 'admin') {

            return view('homeAdmin');
        } elseif ($user->role === 'user') {
            $footerData = Footer::all()->keyBy('id');
            $testimoni = Testimoni::all();
            $query = Product::query();
            $products = $query->paginate(10);
            $aboutus = AboutUs::first();
            $items = Galeri::all();
            $feedbacks = Feedback::with('user')->get();
            return view('home', compact('footerData','feedbacks','testimoni', 'products', 'aboutus', 'items'));
        } else {

            abort(403, 'Unauthorized action.');
        }
    }

    // Jika tidak login, tampilkan halaman default (tanpa login)
    $footerData = Footer::all()->keyBy('id');
    $testimoni = Testimoni::all();
    $query = Product::query();
    $products = $query->paginate(10);
    $aboutus = AboutUs::first();
    $items = Galeri::all();
    $feedbacks = Feedback::with('user')->get();
    return view('home', compact('footerData','feedbacks','testimoni','products', 'aboutus', 'items'));
})->name('mainmenu');
//rute dashboard
Route::get('/dashboard', function () {
    $footerData = Footer::all()->keyBy('id');
    $testimoni = Testimoni::all();
    $query = Product::query();
    $products = $query->paginate(10);
    $aboutus = AboutUs::first();
    $items = Galeri::all();
    $feedbacks = Feedback::with('user')->get();
    return view('home', compact('footerData','feedbacks','testimoni','products', 'aboutus', 'items'));
})->name('dashboard');

//rute galeri user
Route::get('/galeris', function () {
    $items = Galeri::all();
    return view('galeri', compact('items'));
})->name('galeris');


//rute profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('products', ProductController::class)->only(['index', 'show']);
Route::resource('aboutus', AboutusController::class)->only(['index', 'show','update']);

// Rute yang memerlukan autentikasi
Route::middleware(['auth'])->group(function () {
    Route::resource('products', ProductController::class)->except(['index', 'show']);
    Route::resource('aboutus', AboutusController::class)->except(['index', 'show']);
});
Route::resource('products1', ProductController::class)->middleware('auth');
//rute galeri admin
Route::resource('galeriControl', GaleriController::class)->middleware('auth');

Route::middleware(['auth', 'second'])->group(function () {
    Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index')->middleware('role: admin');
    Route::get('/feedback', [FeedbackController::class, 'edit'])->name('feedback.edit')->middleware('role: admin');
    Route::patch('/feedback', [FeedbackController::class, 'update'])->name('feedback.update')->middleware('role: admin');
    Route::delete('/feedback', [FeedbackController::class, 'destroy'])->name('feedback.destroy')->middleware('role: admin');

});

Route::middleware('auth')->group(function () {
    Route::resource('testimoni', TestimoniController::class);
});

Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni.index');


Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
Route::get('footer', [FooterController::class, 'indexAdmin'])->name('footer.index')->middleware('auth');;
Route::put('footer/{id}', [FooterController::class, 'updateFooter'])->name('footer.update')->middleware('auth');;
Route::get('footer/edit/{id}', [FooterController::class, 'edit'])->name('footer.edit')->middleware('auth');;

Route::resource('feedback', FeedbackController::class);
require __DIR__.'/auth.php';


