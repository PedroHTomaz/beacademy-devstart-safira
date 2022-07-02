<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ProductController,
    AdminController,
    UserController
};

//Home
Route::get('/', function () {
    return view('index');
});

//Usuários
Route::get('/usuarios/cadastrar', [UserController::class, 'create'])->name('users.create');
Route::post('/usuarios/cadastrar', [UserController::class, 'registered'])->name('users.registered');

//Adm
Route::get('/admin/login', [AdminController::class, 'index'])->name('admin.index');

//Produtos
Route::get('/produtos/novo',[ProductController::class,'add'])->name('produtos.add');
Route::post('/produtos/novo',[ProductController::class,'store'])->name('produtos.store');
Route::get('/produtos', [ProductController::class, 'index'])->name('produtos.index');
Route::get('/produtos/{id}', [ProductController::class, 'idGet'])->name('produtos.idGet');