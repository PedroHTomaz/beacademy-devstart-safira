<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    ProductController,
    AdminController
};

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/produtos/novo', function () {
//     return view('add-product');
// });

//Produtos
Route::get('/produtos/novo',[ProductController::class,'add'])->name('produtos.add');
Route::post('/produtos/novo',[ProductController::class,'store'])->name('produtos.store');
Route::get('/produtos', [ProductController::class, 'index'])->name('produtos.index');
Route::get('/produtos/{id}/edit', [ProductController::class, 'edit'])->name('produtos.edit');
Route::put('/produtos/{id}', [ProductController::class, 'update'])->name('produtos.update');
Route::get('/produtos/{id}', [ProductController::class, 'idGet'])->name('produtos.idGet');

//Adm
Route::get('/admin/login', [AdminController::class, 'index'])->name('admin.index');