<?php

require __DIR__ . '/auth.php';

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ProductController,
    AdminController,
    ApiCheckoutController,
    CartController,
    OrdersContoller,
    UserController,
    ContactController,
};

//Home
Route::get('/', function () {
    return view('welcome');
});


Route::get('/contato', [ContactController::class, 'index'])->name('suport.index');

Route::post('/contato/store', [ContactController::class, 'store'])->name('suport.store');


Route::get('/catalogo', [ProductController::class, 'list'])->name('catalogo.list');

Route::get('/squadsafira', function () {
    return view('squad.profile');
})->name('squad.profile');

Route::middleware('auth')->group(function () {
    Route::get('/carrinho', [CartController::class, 'index'])->name('cart.index');
    Route::post('/carrinho/adicionar', [CartController::class, 'add'])->name('cart.add');
    Route::delete('carinho/remover', [CartController::class, 'destroy'])->name('cart.destroy');
    Route::get('/carrinho/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
    Route::post('/carrinho/checkout', [ApiCheckoutController::class, 'checkout']);
    Route::get('/orders/myOrders', [OrdersContoller::class, 'myOrders'])->name('orders.myOrders');
    Route::get('/pedidos/concluded', [OrdersContoller::class, 'concluded'])->name('orders.concluded');

    Route::get('/checkout/boleto/{id}', [ApiCheckoutController::class, 'ticket'])->name('checkout.ticket');
});

Route::middleware(['auth', 'admin'])->group(function () {

    //Usuários
    Route::get('/usuarios', [UserController::class, 'index'])->name('users.index');
    Route::get('/usuarios/cadastrar', [UserController::class, 'create'])->name('users.create');
    Route::post('/usuarios/cadastrar', [UserController::class, 'registered'])->name('users.registered');
    Route::get('/usuarios/entrar', [UserController::class, 'showLogin'])->name('users.login');
    Route::get('/usuarios/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/usuarios/{id}', [UserController::class, 'update'])->name('users.update');
    Route::get('/usuarios/{id}', [UserController::class, 'show'])->name('users.show');
    Route::delete('/usuarios/{id}', [UserController::class, 'destroy'])->name('users.destroy');

    //Pedidos
    Route::get('/orders', [OrdersContoller::class, 'index'])->name('orders.index');
    Route::post('/pedidos/adicionar', [OrdersContoller::class, 'addProductOrder'])->name('orders.add');
    Route::delete('peditos/remover', [OrdersContoller::class, 'destroyProductOrder'])->name('orders.product.destroy');
    Route::get('/pedidos/{id}', [OrdersContoller::class, 'show'])->name('orders.show');
    Route::put('/pedidos/{id}', [OrdersContoller::class, 'update'])->name('orders.update');
    Route::get('/pedidos/{id}/edit', [OrdersContoller::class, 'edit'])->name('orders.edit');
    Route::delete('/pedidos/{id}', [OrdersContoller::class, 'destroy'])->name('orders.destroy');


    //Adm
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/dashboard/usuarios', [AdminController::class, 'dashboardUsers'])->name('admin.dashboardUsers');
    Route::get('/admin/dashboard/pedidos', [AdminController::class, 'dashboardOrders'])->name('admin.dashboardOrders');

    //Produtos
    Route::delete('/produtos/{id}', [ProductController::class, 'destroy'])->name('produtos.destroy');
    Route::get('/produtos/novo', [ProductController::class, 'add'])->name('produtos.add');
    Route::post('/produtos/novo', [ProductController::class, 'store'])->name('produtos.store');
    Route::get('/produtos', [ProductController::class, 'index'])->name('produtos.index');
    Route::get('/produtos/{id}/edit', [ProductController::class, 'edit'])->name('produtos.edit');
    Route::put('/produtos/{id}', [ProductController::class, 'update'])->name('produtos.update');
    Route::get('/produtos/{id}', [ProductController::class, 'idGet'])->name('produtos.idGet');

    Route::get('/sucesso', [ProductController::class, 'success'])->name('success');
});