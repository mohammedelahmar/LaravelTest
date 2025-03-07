<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function index(){
    echo 'Category Page';
  }
  public function create(){
    echo 'Create Category Page';
  }
  public function show($id){
    return 'Show ID: '.$id;
    
  }
}
