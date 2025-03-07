<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::prefix('/category')
->controller(CategoryController::class)
->group(function(){
  Route::get('/', 'index');
  Route::get('/create', 'create');
  Route::get('/show/{id}', 'show');
});