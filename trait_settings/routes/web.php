<?php

use App\Http\Controllers\DataController; // need to add
use App\Http\Controllers\ItemController; // need to add
use App\Http\Controllers\RoleController; // need to add
use App\Http\Controllers\UserController; // need to add
use Illuminate\Support\Facades\Auth; // need to add
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
    return view('welcome');
});

// Route to get all products
Route::get("list-products", [DataController::class, "listProducts"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resources([
    'roles' => RoleController::class,
    'users' => UserController::class,
    'products' => ItemController::class,
]);