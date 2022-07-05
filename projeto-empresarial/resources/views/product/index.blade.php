@extends('layouts.template')
@section('title', 'Listagem de Produtos')

      <header>
        <nav class="navbar navbar-expand-sm navbar-dark shadow-sm" style="background-color:#fff">
            <div class="container">
                <a class="navbar-brand text-primary" href="/"><i class="fa-solid fa-diamond"></i> SAFIRA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <nav class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="/">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{route('produtos.index')}}">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{route('produtos.add')}}">Novo produto</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </header>

@section('content')

            <h1 class='text-primary mt-4'>Listagem de Produtos </h1>
            <a href="{{ route('produtos.add') }}" class="btn btn-warning my-3">+ Adicionar Novo Produto</a>
            <table class="table table-striped">
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