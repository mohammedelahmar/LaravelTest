<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function index(){
    $categories=Category::all();
    // where('name','like','%1%')
    // ->select('id','name')
    // ->get();
    echo $categories;
  }
  public function create(){
    echo 'Create Category Page';
  }
  public function show($id){
    return 'Show ID: '.$id;
    
  }
}
