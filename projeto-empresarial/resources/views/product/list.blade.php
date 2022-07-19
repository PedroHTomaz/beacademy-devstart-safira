@extends('layouts.template-main')
@section('title', 'Catálogo')

<div class='py-3 shadow-sm'>
<div class='d-flex justify-content-between container align-items-center'>
    <div>
        <a href="/" class='h5 fw-bold text-decoration-none'><i class="fa-solid fa-diamond"></i> SAFIRA</a>
    </div>
    @if(Auth::user())
    <a href="{{ route('cart.index')}}" type="button" class="btn btn-primary position-relative">
    <i class="fa-solid fa-cart-shopping"></i> Meu Carrinho
    <span id='add' class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning">
    0
    </span>
    </a>
    @endif
</div>
</div>

@section('content')
   <div class='container'>
   <h1 class="mt-5 mb-4 text-primary">Catálogo</h1> 
        <div class="row">
            @foreach ($products as $product)
                <div class="col-sm-3">
                    <div class="card">
                        <img src="{{asset('storage/'.$product->photo) }}">
                        <div class="card-body">
                            <h6 class="card-title">{{$product->name}}</h6>
                            <h6 class="card-title">R$ {{$product->sale_price}}</h6>

                            <form action="{{route('cart.add')}}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$product->id}}">
                            <button onclick='addToCart()' type="submit" class="btn btn-primary btn-sm">Adicionar ao carrinho</button>
                            </form>
                            
                           
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
   </div>
@endsection
