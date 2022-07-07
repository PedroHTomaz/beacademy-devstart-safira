@extends('layouts.template')
@section('title', 'catalogo two')
@section('content')
    <h1 class="mt-5 mb-4">catálogo</h1> 
        <div class="row">
            @foreach ($products as $product)
                <div class="col-sm-3">
                    <div class="card">
                        <img src="{{asset('storage/'.$product->photo) }}">
                        <div class="card-body">
                            <h6 class="card-title">{{$product->name}}</h6>
                            <h6 class="card-title">R$ {{$product->sale_price}}</h6>
                            <a href="{{ route('produtos.idGet', $product->id) }}" class="btn btn-secondary btn-sm">Adicionar ao carrinho</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
@endsection
