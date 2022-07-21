@extends('layouts.template')
@section('title', $title)
@section('content')

   <h1 class='text-primary'>Editar Pedido Nº {{ $order->id }} </h1>
   
   <form action="{{ route('orders.update', $order->id) }}" method='post' enctype="multipart/form-data">
        @method('PUT')  
        @csrf
        
        @if($errors->any())
            <div class='alert alert-danger' role="alert">
                @foreach($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>  
        @endif            
        <div class="row mt-5">
            <div class="col-sm-6">
                <label for="name">Usuário</label>
                <input type="text" name="name"value='{{$order->user->name}}' id="name" class="form-control" >
            </div>
            <div class="col-sm-2">
                <label for="cust-price">Valor</label>
                <input type="text" name="value"value='{{$order->value}}' id="value" class="form-control"  >
            </div>
            <div class="col-sm-2">
                <label for="sale-price">Status</label>
                <input type="text" name="status" value='{{$order->status}}' id="status" class="form-control" >
            </div>
        </div>  
        <button type="submit" class="btn btn-primary mt-4">Atualizar</button>
    </form>

@endsection