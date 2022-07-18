<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $orders = Orders::where([
            'status' => 'RE',
            'user_id' => Auth::id()
        ])->get();

        return view('product.carrinho', compact('orders'));
    }
}