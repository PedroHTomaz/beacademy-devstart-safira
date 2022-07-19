<?php

namespace App\Http\Controllers;

use App\Models\OrderProduct;
use App\Models\Orders;
use App\Models\Product;
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

    public function add(Request $request)
    {

        $id_product = $request->input('id');



        $product = Product::find($id_product);



        // if (empty($id_product->id)) {
        //     return redirect()->route('cart.index');
        // }

        $id_user = Auth::id();

        $id_order = Orders::searchId([
            'user_id' => $id_user,
            'status' => 'RE'
        ]);

        if (empty($id_order)) {
            $new_order = Orders::create([
                'user_id' => $id_user,
                'status' => 'RE'
            ]);

            $id_order = $new_order->id;
        }

        OrderProduct::create([
            'order_id' => $id_order,
            'product_id' => $id_product,
            'valor' => $product->sale_price,
            'status' => 'RE'
        ]);



        return redirect()->route('cart.index');
    }
}