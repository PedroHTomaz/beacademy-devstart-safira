<?php

namespace App\Http\Controllers;

use App\Models\{
    OrderProduct,
    Orders,
    Product,
    User,
};

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersContoller extends Controller

{
    protected $user;
    protected $product;
    protected $order;

    public function __construct(User $user, Product $product, Orders $order)
    {
        $this->user = $user;
        $this->product = $product;
        $this->order = $order;
    }

    public function index(Request $request)
    {
        $orders = $this->order->getOrders(
            $request->search ?? ''
        );

        return view('orders.index', compact('orders'));
    }

    public function show($id)
    {
        if (!$order = Orders::find($id))
            return redirect()->route('orders.index');

        $products = Product::all();

        return view('orders.show', compact('order', 'products'));
    }

    public function edit($id)
    {
        if (!$order = Orders::find($id)) {
            return redirect()->route('orders.index');
        }

        $title = 'Editar produto Nº ' . $order->id;
        return view('orders.edit', compact('order', 'title'));
    }

    public function update(Request $request, $id)
    {
        if (!$order = Orders::find($id)) {
            return redirect()->route('orders.index');
        }

        $data = $request->all();
        $order->update($data);

        return redirect()->route('orders.index');
    }

    public function destroy($id)
    {
        if (!$order = $this->order->find($id))
            return redirect()->route('orders.index');

        $order->delete();

        return redirect()->route('orders.index');
    }

    public function myOrders()
    {
        return view('orders.myOrders');
    }

    public function addProductOrder(Request $request)
    {
        $id_product = $request->id_product;

        $product = Product::find($id_product);

        $valueProduct = $product->sale_price;

        $id_order = $request->id_order;

        $order = Orders::find($id_order);
        $new_value = $order->value + $valueProduct;
        $valueOrder = [
            'value' => $new_value
        ];

        $order->update($valueOrder);

        OrderProduct::create([
            'order_id' => $id_order,
            'product_id' => $id_product,
            'valor' => $product->sale_price
        ]);

        return redirect()->route('orders.show', $id_order);
    }

    public function destroyProductOrder(Request $request)
    {
        $id_order = $request->order_id;
        $id_product = $request->product_id;
        $remove_only_items = $request->items;
        $value_product = $request->product_value;
        $value_order_product = $request->order_product_value;

        $where_product = [
            'order_id' => $id_order,
            'product_id' => $id_product
        ];

        $product = OrderProduct::where($where_product)
            ->orderBy('id', 'desc')
            ->first();


        if ($remove_only_items) {
            $where_product['id'] = $product->id;
        }

        OrderProduct::where($where_product)->delete();

        if ($remove_only_items) {
            $order = Orders::find($id_order);
            $new_value = $order->value - $value_product;
            $valueOrder = [
                'value' => $new_value
            ];

            $order->update($valueOrder);
        } else {
            $order = Orders::find($id_order);
            $new_value = $order->value - $value_order_product;
            $valueOrder = [
                'value' => $new_value
            ];

            $order->update($valueOrder);
        }

        $check_order = OrderProduct::where([
            'order_id' => $product->order_id
        ])->exists();

        if (!$check_order) {
            Orders::where([
                'id' => $product->order_id
            ])->delete();

            return redirect()->route('orders.index');
        }

        return redirect()->route('orders.show', $id_order);
    }
}