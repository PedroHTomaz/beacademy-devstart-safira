<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ProductController,
    AdminController,
    OrdersContoller,
    UserController
};

//Home
Route::get('/', function () {
    return view('index');
});

//Catalogo
Route::get('/catalogo', [ProductController::class, 'list'])->name('catalogo.list');

//Usuários
Route::get('/usuarios/cadastrar', [UserController::class, 'create'])->name('users.create');
Route::post('/usuarios/cadastrar', [UserController::class, 'registered'])->name('users.registered');
Route::get('/usuarios', [UserController::class, 'index'])->name('users.index');
Route::get('/usuarios/entrar', [UserController::class, 'showLogin'])->name('users.login');
Route::get('/usuarios/{id}', [UserController::class, 'show'])->name('users.show');
Route::delete('/usuarios/{id}', [UserController::class, 'destroy'])->name('users.destroy');

//Pedidos
Route::get('/orders', [OrdersContoller::class, 'index'])->name('orders.index');
Route::get('/orders/{id}', [OrdersContoller::class, 'show'])->name('orders.show');
Route::put('/orders/{id}', [OrdersContoller::class, 'update'])->name('orders.update');
Route::get('/orders/{id}/edit', [OrdersContoller::class, 'edit'])->name('orders.edit');

//Adm
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/dashboard/usuarios', [AdminController::class, 'dashboardUsers'])->name('admin.dashboardUsers');
Route::get('/admin/dashboard/orders', [AdminController::class, 'dashboardOrders'])->name('admin.dashboardOrders');


//Produtos
Route::delete('/produtos/{id}', [ProductController::class, 'destroy'])->name('produtos.destroy');
Route::get('/produtos/novo', [ProductController::class, 'add'])->name('produtos.add');
Route::post('/produtos/novo', [ProductController::class, 'store'])->name('produtos.store');
Route::get('/produtos', [ProductController::class, 'index'])->name('produtos.index');
Route::get('/produtos/{id}/edit', [ProductController::class, 'edit'])->name('produtos.edit');
Route::put('/produtos/{id}', [ProductController::class, 'update'])->name('produtos.update');
Route::get('/produtos/{id}', [ProductController::class, 'idGet'])->name('produtos.idGet');