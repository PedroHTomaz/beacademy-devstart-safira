@extends('layouts.template-main')
@section('title','Meus Pedidos')

@section('content')

    <div class='py-3 shadow-sm'>
        <div class='d-flex justify-content-between container'>
            <div class="mt-2">
                <a href="/" class='h5 fw-bold text-decoration-none'><i class="fa-solid fa-diamond"></i> SAFIRA</a>
            </div>
            <ul class="navbar-nav ms-auto align-items-center flex-row">
                <li class='nav-item'>
                    <a href="{{ route('catalogo.list') }}" class="nav-link text-dark me-3">Catálogo</a>
                </li>
                <li class='nav-item'>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary" ><i class="fa-solid fa-right-from-bracket"></i> Sair</button>                         
                    </form> 
                </li>
            </ul>
        </div>
    </div>

    <div class='container py-5'>
        <div class='mb-4'>
            <h1 class='h1 text-primary'>Meus Pedidos <i class="fa-solid fa-clipboard-check"></i></h1>
        </div>
        @forelse($orders as $order)
        <ul class='shadow rounded p-3 mb-5'>
            <div class='d-flex justify-content-between'>
                <div>
                    <span class='fw-bold'>Pedido realizado:</span>
                    <br>
                    <span>{{date('d/m/Y', strtotime($order->created_at))}}</span>
                </div>
                <div>
                    <span>Pedido n.º :{{$order->id}}</span>
                    <br>
                    <span class='fw-bold'>Status: {{$order->status}}</span>
                </div>
            </div>
            <hr>
            @foreach($order->order_products as $order_product)
            <li class='d-flex py-3 align-items-center'>
                <img class="me-3" style='max-height:150px;' src="{{asset('https://teste-laravel9.s3.sa-east-1.amazonaws.com/'. $order_product->product->photo)}}">
                <div class='d-flex w-100'>
                    <div>
                        <h5 class='h5 text-primary fw-bold'>
                        {{{$order_product->product->name}}}
                        </h5>
                        <br>
                        <i class="fa-solid fa-heart text-primary h5"></i>
                    </div>
                    <div class='ms-auto'>
                        <span><b>Quantidade:</b> {{$order_product->qtd}} x</span>
                        <br>
                        <span><b>Valor unitário:</b>R$ {{number_format($order_product->product->sale_price, 2, ',', '.')}}</span>
                        <br>
                        <span><b>Total produto:</b> R$ {{number_format($order_product->valores, 2, ',', '.')}}</span>
                        <br>
                        <a href="{{ route('catalogo.list') }}" class='btn btn-primary mt-4'>Comprar novamente</a>
                    </div>
                    
                </div>
            </li>
            @endforeach
            <div class="d-flex justify-content-end">
                <span class='fw-bold d-block mt-3 fs-5'>Valor Total do Pedido: R$ {{number_format($order->value, 2, ',', '.')}}</span>
            </div>           
        </ul>
        @empty
        <div class="text-center mt-5 alert alert-info">
                <span class='fw-bold d-block mt-1 fs-5'>Você não tem pedidos :{</span>
                    <a href="/" class='btn btn-info mt-2'>Voltar</a>
            </div>  
        @endforelse 
    </div>
@endsection
