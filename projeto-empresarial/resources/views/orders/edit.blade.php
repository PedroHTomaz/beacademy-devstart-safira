@extends('layouts.template')
@section('title', $title)
@section('content')

   <h1 class='text-primary'>Editar Status do Pedido Nº {{ $order->id }} </h1>
       <a href="{{route('orders.show', $order->id)}}" class="btn btn-primary text-white">
        Voltar 
       </a>
   
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
        <div class="row mt-2">
            <div class="col-sm-2">
                <label for="sale-price">Status</label>
                <input type="text" name="status" value='{{$order->status}}' id="status" class="form-control" >
            </div>
        </div>  
        <button type="submit" class="btn btn-primary mt-4">Atualizar</button>
    </form>

@endsection