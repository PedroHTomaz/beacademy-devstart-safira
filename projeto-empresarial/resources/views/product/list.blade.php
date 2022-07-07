@extends('layouts.template-main')
@section('title', 'catalogo two')

<div class='py-3 shadow-sm'>
<div class='d-flex justify-content-between container'>
    <div>
        <a href="/" class='h5 fw-bold text-decoration-none'><i class="fa-solid fa-diamond"></i> SAFIRA</a>
    </div>
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
                            <h6 class="card-title">{{$produto->name}}</h6>
                            <h6 class="card-title">R$ {{$produto->sale_price}}</h6>
                            <a href="{{ route('produtos.idGet', $produto->id) }}" class="btn btn-primary btn-sm">Adicionar ao carrinho</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
   </div>
@endsection
