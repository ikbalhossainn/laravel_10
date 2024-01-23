<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;  // need to add
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $newArrival = Product::get();
        return view('frontend.home', compact('newArrival')); // frontend e show koranor jonno home.blade.php te loop calaite hobe. jeno backend(database) theke dynamically data ase
    }
}
