@extends('layouts.template-main')
@section('title', 'Catálogo')

<div class='shadow-sm'>
<div class='d-flex justify-content-between container align-items-center p-0 '>
    <div>
        <a href="/" class='h5 fw-bold text-decoration-none'><i class="fa-solid fa-diamond"></i> SAFIRA</a>
    </div>
    @if(Auth::user())
    <ul class="navbar-nav ms-auto align-items-center flex-row">
        <li class='nav-item me-1'>
            <a href="{{ route('orders.myOrders') }}" class="nav-link text-dark me-3">Meus pedidos</a>
        </li>
        <li class='nav-item me-1'>
            <a href="{{ route('cart.index')}}" type="button" class="btn btn-primary">
                <i class="fa-solid fa-cart-shopping"></i> Meu Carrinho
                <span id='add' class="translate-middle badge rounded-pill bg-warning">
                    {{$qtdProduct}}
                </span>
            </a>
        </li>
        <li class='nav-item'>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-primary ms-2 mt-3" ><i class="fa-solid fa-right-from-bracket"></i> Sair</button>                         
            </form> 
        </li>
    </ul>
    @endif
</div>
</div>

@section('content')
    <div class='container'>
        <h1 class="mt-5 mb-4 text-primary">Catálogo <i class="fa-solid fa-store"></i></h1>
        <div class="mb-4">
            <hr class='text-primary'>
        </div>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-sm-3">
                    <div class="card mb-4">
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
    <div class="justify-content-center pagination">
        {{ $products->links('pagination::bootstrap-4') }}
    </div>
@endsection
