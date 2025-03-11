<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::prefix('/category')
->controller(CategoryController::class)
->group(function(){
  Route::get('/', 'index');
  Route::get('/create', 'create');
  Route::get('/show/{id}', 'show')->whereNumber('id');
});
Route::prefix('/product')
->controller(ProductController::class)
->group(function(){
  Route::get('/', 'index');
  Route::get('/create', 'create');
  Route::get('/show/{id}', 'show')->whereNumber('id');
});