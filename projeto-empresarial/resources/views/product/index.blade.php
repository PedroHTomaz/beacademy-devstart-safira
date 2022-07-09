@extends('layouts.template')
@section('title', 'Listagem de Produtos')
@section('content')

      <h1 class='text-primary'>Listagem de Produtos </h1>

      <div>
            <a href="{{ route('produtos.add') }}" class="btn btn-warning my-3">+ Adicionar Novo Produto</a>
            <form action="{{ route('produtos.index') }}" method="get" class='d-flex'>
            @csrf
            <div class='form-group w-50 me-3' >
                <input type="search" id="form1" name='search' class="form-control rounded "/>
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-search"></i>
            </button> 
      </div>
      <table class="table table-striped">
            <thead>
                  <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Quantidade</th>
                  <th scope="col">Preço de custo</th>
                  <th scope="col">Preço de venda</th>
                  <th scope="col">Foto</th>
                  <th scope="col">Descrição</th>
                  <th scope="col">Ações</th>
                  </tr>
            </thead>

            <tbody>
             @foreach ($products as $product)
            <tr>
                  <th scope="row">{{ $product->id }}</th>
                  <td>{{ $product->name }}</td>
                  <td>{{ $product->quantity }}</td>
                  <td>{{ $product->cust_price }}</td>
                  <td>{{ $product->sale_price }}</td>
                  <td><img src="{{asset('storage/'.$product->photo)}}" width="50" height="50" class="rounde-circle"></td>
                  <td>{{ $product->description }}</td>
                  <td> <a href="{{ route('produtos.idGet', $product->id) }}" class='btn btn-info text-white'>Visualizar</a> </td>
            </tr>
            @endforeach
            </tbody>
      </table>

      <div class="justify-content-center pagination">
         {{ $products->links('pagination::bootstrap-4') }}
      </div>
@endsection      