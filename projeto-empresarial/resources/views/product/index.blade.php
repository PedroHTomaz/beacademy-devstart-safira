@extends('layouts.template')
@section('title', 'Listagem de Produtos')
@section('content')

                  <h1>Listagem de Produtos </h1>
                  <a href="{{ route('produtos.add') }}" class="btn btn-warning mb-2">Adicionar Novo Produtos</a>
            <table class="table table-striped table-dark">
      <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Valor</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Preço de custo</th>
            <th scope="col">Preço de venda</th>
            <th scope="col">Foto</th>
            <th scope="col">Descrição</th>
            <th scope="col">Ações</th>
            </tr>
      </thead>

      <tbody>
                  @foreach ($produtos as $produto)
            <tr>
                  <th scope="row">{{ $produto->id }}</th>
                  <td>{{ $produto->name }}</td>
                  <td>{{ $produto->value }}</td>
                  <td>{{ $produto->quantity }}</td>
                  <td>{{ $produto->cust_price }}</td>
                  <td>{{ $produto->sale_price }}</td>
                  <td>{{ $produto->photo }}</td>
                  <td>{{ $produto->description }}</td>
                  <td> <a href="{{ route('produtos.idGet', $produto->id) }}" class='btn btn-info text-white'>Visualizar</a> </td>
            </tr>
            @endforeach
      </tbody>

      </table>
@endsection      