<?php

namespace App\Http\Controllers;

use App\Models\Category; // need to add here
use App\Models\Product; // need to add here
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function Search(Request $request){
        $categories = Category::all();

        if($request->filled('search')){
            $products = Product::search($request->search)->get();
        } else{
            $products = Product::all();
        }
        $products = Product::all(); 
        return view('search', compact('products', 'categories'));
    }
}

// public fuction Search(Request $request){
//     $categories = Category::all();
//     $products = Product::all(); // you can write another way without call variable and compact

//     return view('search', compact('products', 'categories'));
// }