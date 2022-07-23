@extends('layouts.template')
@section('title','Usuário ' . $order->user->name)

@section('content')

    <h2 class="text-primary mt-4">Pedido nº: <spam class="text-dark">{{ $order->id }}</spam></h2>

    <table class="table table-striped mt-4">
        <thead class="text-center">
            <tr>
                <th scope="col">ID</th> 
               <th scope="col">Usuário</th> 
               <th scope="col">Valor</th> 
               <th scope="col">Status</th> 
               <th scope="col">Data do Pedido</th> 
                <th scope="col" colspan="2">AÇÕES</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr>
                <th scope="row">{{ $order->id }}</th>
                <td id="identifier">{{ $order->user->name }}</td>
                <td>{{ $order->value }}</td>
                <td>{{ $order->status }}</td>
                <td>{{ date('d/m/Y', strtotime($order->created_at)) }}</td>
                <td><a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning ">Editar</a></td>
                <td>
                <form action="{{route('orders.destroy', $order->id)}}" method="POST" id="form">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
                </td>
            </tr>
        </tbody>
    </table>

    <h2 class="text-primary mt-4">Produtos</spam></h2>

    <table class="table table-striped mt-4">
        <thead class="text-center">
            <tr>
                <th scope="col">ID</th> 
               <th scope="col">Produto</th> 
               <th scope="col">Valor</th>
               <th scope="col">Quantidade</th>
            </tr>
        </thead>
        <tbody class="text-center">

            @foreach($order->order_products as $order_product)
            <tr>
                    <th scope="row">{{$order_product->product->id }}</th>
                    <td>{{ $order_product->product->name}}</td>
                    <td>{{ $order_product->product->sale_price}}</td>
                    <td>{{$order_product->qtd}}</td>
                </td>
            </tr>    
            @endforeach
        </tbody>
    </table>
@endsection