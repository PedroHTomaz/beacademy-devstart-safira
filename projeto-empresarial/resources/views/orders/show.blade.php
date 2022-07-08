@extends('layouts.template')
@section('title','Usuário ' . $order->user->name)

@section('content')

    <h2 class="text-primary mt-4">Detalhes do usuário: <spam class="text-dark">{{ $order->user->name }}</spam></h2>

    <table class="table table-striped mt-4">
        <thead class="text-center">
            <tr>
                <th scope="col">ID</th> 
               <th scope="col">Usuário</th> 
               <th scope="col">Produto</th> 
               <th scope="col">Valor</th> 
               <th scope="col">Status</th> 
               <th scope="col">Data do Pedido</th> 
                <th scope="col" colspan="2">AÇÕES</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr>
                <th scope="row">{{ $order->id }}</th>
                <td>{{ $order->user->name }}</td>
                <td>{{ $order->product->name }}</td>
                <td>{{ $order->product->sale_price }}</td>
                <td>{{ $order->status }}</td>
                <td>{{ date('d/m/Y', strtotime($order->created_at)) }}</td>
                <td><a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning ">Editar</a></td>
                <td>
                <form action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
                </td>
            </tr>
        </tbody>
    </table>
@endsection