<?php

namespace App\Http\Controllers;

use App\Models\{
    Orders,
    Product,
    User,
};

use Illuminate\Http\Request;

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

        return view('orders.show', compact('order'));
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

    public function myOrders ()
    {
        return view ('orders.myOrders');
    }
}