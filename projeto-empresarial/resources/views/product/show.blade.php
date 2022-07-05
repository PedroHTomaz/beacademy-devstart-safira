@extends('layouts.template')
@section('title', $title)
@section('content')
                <h1 class='text-primary my-4'>Listagem de {{$produtos -> name}} </h1>
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
              <th scope="row">{{ $produtos->id }}</th>
                  <td>{{ $produtos->name }}</td>
                  <td>{{ $produtos->quantity }}</td>
                  <td>{{ $produtos->cust_price }}</td>
                  <td>{{ $produtos->sale_price }}</td>
                  <td>{{ $produtos->photo }}</td>
                  <td>{{ $produtos->description }}</td>
              
              <td> <a href="{{ route('produtos.edit', $produtos->id) }}" class='btn btn-warning'>Editar</a> </td>
              <td> <a href="{{ route('produtos.index') }}" class='btn btn-danger'>Delete</a> </td>
          </tr>
          
  </tbody>

</table>
      
@endsection