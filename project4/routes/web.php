<?php

use App\Http\Controllers\AdminController;  // need to add
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.home');
});
Route::get('about', function () {
    return view('frontend.about');
});
Route::get('faq', function () {
    return view('frontend.faq');
});
Route::get('blog', function () {
    return view('frontend.blog');
});
Route::get('contact', function () {
    return view('frontend.contact');
});

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('admin/login',[AdminController::class, 'login']);
Route::post('admin/login',[AdminController::class, 'store'])->name('adminLogin');
Route::get('admin/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard');


require __DIR__.'/auth.php';
