<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/produtos/novo', function () {
//     return view('add-product');
// });

Route::get('/produtos/novo',[ProductController::class,'add'])->name('produtos.add');


Route::get('/admin/login', function () {
    return view ('admin-login');
});