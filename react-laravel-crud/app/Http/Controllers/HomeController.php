<?php

namespace App\Http\Controllers;

use App\Models\Post; // need to add here for loop
use Illuminate\Http\Request;
use Inertia\Inertia;  // need to add here

class HomeController extends Controller
{
    public function index(){
        $posts = Post::all();
    //    return Inertia::render('Home', ['posts'=>$posts]);
       return Inertia::render('Home', compact('posts'));
    }

    public function about(){
        return Inertia::render('About');
     }
}
