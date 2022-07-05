<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ProductController,
    AdminController,
    UserController
};

Route::get('/', function () {
    return view('index');
});

Route::get('/usuarios/cadastrar', [UserController::class, 'create'])->name('users.create');
Route::post('/usuarios/cadastrar', [UserController::class, 'registered'])->name('users.registered');

Route::get('/admin/login', [AdminController::class, 'index'])->name('admin.index');

Route::get('/produtos/novo',[ProductController::class,'add'])->name('produtos.add');
Route::post('/produtos/novo',[ProductController::class,'store'])->name('produtos.store');
Route::get('/produtos', [ProductController::class, 'index'])->name('produtos.index');
Route::get('/produtos/{id}/edit', [ProductController::class, 'edit'])->name('produtos.edit');
Route::put('/produtos/{id}', [ProductController::class, 'update'])->name('produtos.update');
Route::get('/produtos/{id}', [ProductController::class, 'idGet'])->name('produtos.idGet');
