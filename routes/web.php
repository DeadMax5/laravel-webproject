<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\storyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\TrustController;
use App\Models\Trust;

Route::controller(ThemeController::class)->name('theme.')->group(function () {
    Route::get('/', 'index')->name('index')->middleware("auth");
    Route::get('/category', 'category')->name('category');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/single-blog', 'singleBlog')->name('singleBlog');
});







// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource("stories", storyController::class);
Route::post('/stories/pdf', [storyController::class, 'generatePdf'])->name('stories.pdf');
Route::get('/', [storyController::class, 'index'])->name('theme.index');



require __DIR__ . '/auth.php';
