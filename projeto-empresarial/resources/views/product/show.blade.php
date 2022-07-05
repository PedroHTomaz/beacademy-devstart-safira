@extends('layouts.template')
@section('title', $title)

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
                <h1 class='text-primary my-4'>Listagem de {{$produtos -> name}} </h1>
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
            <th scope="col">descrição</th>
            <th  scope="col" colspan="2">Ações</th>
        </tr>
  </thead>

  <tbody>
           
           <tr>
              <th scope="row">{{ $produtos->id }}</th>
                  <td>{{ $produtos->name }}</td>
                  <td>{{ $produtos->value }}</td>
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