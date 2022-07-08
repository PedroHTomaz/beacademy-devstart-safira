<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Product;
use App\Models\Registered;
use App\Models\User;
use Illuminate\Http\Request;

class OrdersContoller extends Controller

{

    protected $user;
    protected $product;
    protected $order;

    public function __construct(Registered $user, Product $product, Orders $order)
    {
        $this->user = $user;
        $this->product = $product;
        $this->order = $order;
    }

    public function index()
    {
        $orders = $this->order->all();

        return view('orders.index', compact('orders'));
    }
}