<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $order = Orders::where([
            'status' => 'RE',
            'user_id' => Auth::id()
        ])->get();

        dd([
            $order,
            $order[0]->order_products,
            $order[0]->order_products[0]->product

        ]);
    }
}