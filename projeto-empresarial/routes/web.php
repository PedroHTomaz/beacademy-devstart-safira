<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

Route::get('/produtos/novo',[ProductController::class,'add'])->name('produtos.add');
Route::post('/produtos',[ProductController::class,'create'])->name('produtos.create');

Route::get('/admin/login', function () {
    return view ('admin-login');
});