<?php

use App\Http\Controllers\TeamController; // need to add here
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

Route::resource('team', TeamController::class)->except(['create','update','show']);

Route::get('/', function () {
    return view('welcome');
});
