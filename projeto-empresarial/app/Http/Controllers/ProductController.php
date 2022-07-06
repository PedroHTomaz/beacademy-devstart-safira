<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProductFormRequest;

class ProductController extends Controller
 {

  public function __construct(Product $product)
  {
    $this->model = $product;
  }

  public function add()
  {
    return view('product.add-product');
  }

  public function create(Request $request)
  {
    return view('product.add-product');
  }

  public function index()
  {
    $products = Product::all();

    return view('product.index', compact('products'));
  }

  public function idGet($id)
  {
    if (!$products = Product::find($id))
     {
      return redirect()->route('produtos.index');

     }

    $title = 'Produto ' . $products->name;

    return view('product.show', compact('products', 'title'));
  }

  public function store(CreateProductFormRequest $request)
  {
  
    $data = $request->all();

    $data['password'] = bcrypt($request->password);

    $this->model->create($data);

    return redirect()->route('produtos.index');
  }

  public function edit($id)
  {
    if(!$products = Product::find($id)) 
    {
      return redirect()->route('users.index');
    }

    $title = 'Editar produto ' . $products->name;
    return view('product.edit', compact('products', 'title'));
  }

  public function update(CreateProductFormRequest $Request, $id)
  {
    if (!$produto = Product::find($id)) 
    {
      return redirect()->route('produtos.index');
    };

    if ($Request->password) 
    {
      $data['password'] = bcrypt($Request->password);
    };

    
    $data = $Request->all();

    $produto->update($data);

    return redirect()->route('produtos.index');
  }

  public function destroy($id)
  {
    if (!$products = $this->model->find($id))
      return redirect()->route('produtos.index');

      $products->delete();

    return redirect()->route('produtos.index');
  }

  public function list()
  {
    return view('product.list');
  }
}