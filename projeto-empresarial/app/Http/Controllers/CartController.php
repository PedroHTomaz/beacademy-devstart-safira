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

        $qtdProduct = OrderProduct::getQtdProduct();

        return view('product.carrinho', compact('orders', 'qtdProduct'));
    }

    public function add(Request $request)
    {

        $id_product = $request->id;

        $product = Product::find($id_product);

        $id_user = Auth::id();

        $id_order = Orders::searchId([
            'user_id' => $id_user,
            'status' => 'RE'
        ]);

        if (empty($id_order)) 
        {
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

    public function destroy(Request $request)
    {

        $id_order = $request->order_id;
        $id_product = $request->product_id;
        $remove_only_items = $request->items;
        $id_user = Auth::id();

        $id_order = Orders::searchId([
            'id' => $id_order,
            'user_id' => $id_user,
            'status' => 'RE'
        ]);

        if (empty($id_order)) 
        {
            return redirect()->route('cart.index');
        }

        $where_product = [
            'order_id' => $id_order,
            'product_id' => $id_product
        ];

        $product = OrderProduct::where($where_product)
            ->orderBy('id', 'desc')
            ->first();

        if (empty($product->id)) 
        {
            return redirect()->route('cart.index');
        }

        if ($remove_only_items) 
        {
            $where_product['id'] = $product->id;
        }

        OrderProduct::where($where_product)->delete();

        $check_order = OrderProduct::where([
            'order_id' => $product->order_id
        ])->exists();

        if (!$check_order) 
        {
            Orders::where([
                'id' => $product->order_id
            ])->delete();
        }

        return redirect()->route('cart.index');
    }

    public function checkout ()
    {
        return view ('product.checkout');
    }
}