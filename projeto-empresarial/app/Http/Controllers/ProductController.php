<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(Product $produto)
    {
      $this->model = $produto; 
    }
    public function add()
    {
        return view('product.add-product');
    }

    public function create(Request $request)
    {
        // dd($request->all());

        return view('product.add-product');


    }

    public function index()
  {
    $produtos= Product::all();
    
    //quando quiser passar alguma váriavel para a página, use o compact;
    return view('product.index', compact('produtos') );
  }

  public function idGet($id){

    
        if(! $produtos= Product::find($id)){
             return redirect()->route('produtos.index');
        }
     
        $title = 'Produto ' . $produtos->name;
     return view('product.show', compact('produtos', 'title') );
 }

    public function store(request $request)
    {
     /* $user = new User();
     $user->name = $request->name;
     $user->email = $request->email;
     $user->password = bcrypt($request->password);
     $user->save(); */
  
     $data = $request->all();
     $data['password'] = bcrypt($request->password);
     
     $this->model ->create($data);
  
     return redirect()->route('produtos.index');
    }
}
