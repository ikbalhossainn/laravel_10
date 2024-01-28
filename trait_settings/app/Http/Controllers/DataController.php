<?php

namespace App\Http\Controllers;

use App\Http\Traits\DataTrait; // need to add here
use App\Models\Blog; // need to add here
use App\Models\Product; // need to add here
use Illuminate\Http\Request;


class DataController extends Controller
{
    use DataTrait;

    public function listProducts(){
       $products = $this->getData(new Product());

       echo "<pre>";
       print_r($products);
    }
}
