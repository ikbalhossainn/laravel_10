<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all()->toArray();
        $x = array_reverse($products);
        dd($x);
        return array_reverse($products);      
    }
}
