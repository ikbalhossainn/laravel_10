<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Frontend
Route::get('/', function(){
    return Inertia::render('Home');
});

Route::get('about', function(){
    return Inertia::render('About');
})->name('about');

Route::get('contact', function(){
    return Inertia::render('Contact');
})->name('contact');


// Rooms
Route::get('room', function(){
    return Inertia::render('Room');
})->name('room');

Route::get('room-details', function(){
    return Inertia::render('RoomDetails');
})->name('room-details');


// Blog
Route::get('blog-1', function(){
    return Inertia::render('Blog1');
})->name('blog-1');

Route::get('blog-2', function(){
    return Inertia::render('Blog2');
})->name('blog-2');

Route::get('blog-details', function(){
    return Inertia::render('BlogDetails');
})->name('blog-details');


// Services
Route::get('services-1', function(){
    return Inertia::render('Services1');
})->name('services-1');

Route::get('services-2', function(){
    return Inertia::render('Services2');
})->name('services-2');

Route::get('service-details', function(){
    return Inertia::render('ServiceDetails');
})->name('service-details');


// Pages
Route::get('book', function(){
    return Inertia::render('Booking');
})->name('book');

Route::get('team', function(){
    return Inertia::render('Team');
})->name('team');

Route::get('faq', function(){
    return Inertia::render('FAQ');
})->name('faq');

Route::get('restaurant', function(){
    return Inertia::render('Restaurant');
})->name('restaurant');

Route::get('reservation', function(){
    return Inertia::render('Reservation');
})->name('reservation');

Route::get('gallery', function(){
    return Inertia::render('Gallery');
})->name('gallery');

Route::get('testimonials', function(){
    return Inertia::render('Testimonials');
})->name('testimonials');

Route::get('checkout', function(){
    return Inertia::render('CheckOut');
})->name('checkout');

Route::get('sign-in', function(){
    return Inertia::render('SignIn');
})->name('sign-in');

Route::get('sign-up', function(){
    return Inertia::render('SignUp');
})->name('sign-up');

Route::get('terms-condition', function(){
    return Inertia::render('Terms&Condition');
})->name('terms-condition');

Route::get('privacy-policy', function(){
    return Inertia::render('PrivacyPolicy');
})->name('privacy-policy');

Route::get('404', function(){
    return Inertia::render('404Page');
})->name('404');

Route::get('coming-soon', function(){
    return Inertia::render('ComingSoon');
})->name('coming-soon');



require __DIR__.'/auth.php';
