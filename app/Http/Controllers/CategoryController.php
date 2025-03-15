<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function index(){
    $categories=Category::with(['products' => function($query){
      $query->where('id',2);
    }])->get();
    return view('category.index',['categories'=>$categories  ]);
    // $categories=Category::whereHas('products',function($query){
    //   $query->where('id',2)->orderBy('id','desc');
    // })
    // ->get();
    // return $categories;
  }
  public function create(){
    echo 'Create Category Page';
  }
  public function show($id){
    return 'Show ID: '.$id;
    
  }
}
