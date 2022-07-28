@extends('layouts.template')
@section('title', $title)
@section('content')
    <h1 class='text-primary'>Detalhes de {{$products -> name}} </h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>            
                <th scope="col">Quantidade</th>
                <th scope="col">Preço de custo</th>
                <th scope="col">Preço de venda</th>
                <th scope="col">Foto</th>
                <th scope="col">descrição</th>
                <th  scope="col" colspan="2">Ações</th>
            </tr>
        </thead>
        <tbody>
           <tr>
                <th scope="row">{{ $products->id }}</th>
                <td id="identifier">{{ $products->name }}</td>
                <td>{{ $products->quantity }}</td>
                <td>{{ $products->cust_price }}</td>
                <td>{{ $products->sale_price }}</td>
                <td><img src="{{asset('storage/'.$products->photo)}}" width="50" height="50" class="border border-primary border-3 rounded-circle"></td>
                <td>{{ $products->description }}</td>
                <td><a href="{{ route('produtos.edit', $products->id) }}" class='btn btn-warning'>Editar</a> </td>
                <td> 
                    <form action="{{route('produtos.destroy', $products->id)}}" method="POST" id="form">
                        @method('delete')
                        @csrf
                        <button class='btn btn-danger'>Delete</button>
                    </form>
                </td>
          </tr>
        </tbody>
    </table>
@endsection