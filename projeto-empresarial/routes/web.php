<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos/novo', function () {
    return view('add-product');
});

Route::get('/admin/login', function () {
    return view ('admin-login');
});