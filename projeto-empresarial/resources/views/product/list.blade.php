@extends('layouts.template')
@section('title', 'catalogo two')
@section('content')
    <h1 class="mt-5 mb-4">catalogo</h1> 
        <div class="row">
            @foreach ($produtos as $produto)
                <div class="col-sm-3">
                    <div class="card">
                        <img src="{{asset('storage/'.$produto->photo) }}">
                        <div class="card-body">
                            <h6 class="card-title">{{$produto->name}}</h6>
                            <h6 class="card-title">R$ {{$produto->value}}</h6>
                            <a href="{{ route('produtos.idGet', $produto->id) }}" class="btn btn-secondary btn-sm">Adicionar ao carrinho</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
@endsection
