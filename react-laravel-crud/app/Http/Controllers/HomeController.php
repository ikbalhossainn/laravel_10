<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;  // need to add here

class HomeController extends Controller
{
    public function index(){
       return Inertia::render('Home');
    }

    public function about(){
        return Inertia::render('About');
     }
}
