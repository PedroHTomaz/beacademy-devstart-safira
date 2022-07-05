@extends('layouts.template')
@section('title','novo produto')

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
    
    <div class="container">
        <h1 class="text-center mt-4 text-primary">CADASTRO DE PRODUTO</h1>
        <form action="{{route('produtos.store')}}" method="POST">
            @csrf
            <div class="row mt-5">
                <div class="col-sm-4">
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name" class="form-control"  maxlength="30" required>
                </div>
            
                <div class="col-sm-4">
                    <label for="value">Valor</label>
                    <input type="text" name="value" id="value" class="form-control" required>
                </div>
            
                <div class="col-sm-4">
                    <label for="quantity">Quantidade</label>
                    <input type="text" name="quantity" id="quantity" class="form-control" required>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-4">
                    <label for="cust-price">Preço de custo</label>
                    <input type="text" name="cust_price" id="cust_price" class="form-control" required>
                </div>
            
                <div class="col-sm-4">
                    <label for="sale-price">Preço de venda</label>
                    <input type="text" name="sale_price" id="sale_price" class="form-control" required>
                </div>
                <div class="col-sm-4">
                    <label for="photo">Foto</label>
                    <input type="text" name="photo" id="photo" class="form-control" required>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-sm-12">
                    <label for="description">Descrição</label>
                    <textarea name="description" id="description"  class="form-control" rows="2" required></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12  mt-4">
                    <button type="submit" class="btn btn-primary">CADASTRAR</button>
                    <button class='btn btn-outline-danger'><a href="#" class='text-danger'>CANCELAR </a></button>
                </div>
            </div>
        </form>
    </div>
@endsection