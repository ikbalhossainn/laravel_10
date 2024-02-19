<?php

namespace App\Http\Controllers;

use App\Models\Post; // need to add here
use Illuminate\Http\Request;
use Inertia\Inertia;  // need to add here

class FrontendController extends Controller
{
    public function index(){
    
        // return Inertia::render('Home');

        // after showing the home page, now we are going to bring data via react(props)
        $posts = Post::all();
        $customers = ['Masum', 'Ikabal'];
        return Inertia::render('Home', compact('posts', 'customers'));
    }

    public function about(){
        return Inertia::render('About');
    }
}
