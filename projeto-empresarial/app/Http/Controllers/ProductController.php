<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function add()
    {
        return view('product.add-product');
    }

    public function create(Request $request)
    {
        // dd($request->all());

        $data = $request->all();
        Product::create($data);

        return view('product.add-product');


    }
}
