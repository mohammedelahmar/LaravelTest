<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Tag;

class ProductController extends Controller
{
    // public function index2(){
    //     $products =Product::with('category')->get();
    //     return $products;
    // }
    public function index(){
        $products =Product::with(['tags','category'])->get();
        return view('product.index');
    }


}
