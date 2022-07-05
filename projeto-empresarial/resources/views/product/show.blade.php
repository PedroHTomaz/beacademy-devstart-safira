@extends('layouts.template')
@section('title', $title)
@section('content')
                <h1 class='text-primary my-4'>Listagem de {{$products -> name}} </h1>
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
                  <td>{{ $products->name }}</td>
                  <td>{{ $products->quantity }}</td>
                  <td>{{ $products->cust_price }}</td>
                  <td>{{ $products->sale_price }}</td>
                  <td>{{ $products->photo }}</td>
                  <td>{{ $products->description }}</td>
              
              <td> <a href="{{ route('produtos.edit', $products->id) }}" class='btn btn-warning'>Editar</a> </td>
              <td> 
                <form action="{{route('produtos.destroy', $products->id)}}" method="POST">
                    @method('delete')
                    @csrf
                    <button class='btn btn-danger'>Delete</button> 
                </form>
                </td>
          </tr>
          
  </tbody>

</table>
      
@endsection