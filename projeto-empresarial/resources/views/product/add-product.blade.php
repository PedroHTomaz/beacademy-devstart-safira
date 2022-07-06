@extends('layouts.template')
@section('title','novo produto')


@section('content')
    <div class="container">
        <h1 class="text-center mt-4 text-primary">CADASTRO DE PRODUTO</h1>
        <form action="{{route('produtos.store')}}" method="POST" enctype="multipart/form-data">
            @csrf<!--csrf toquem de segurnça padrao do laravel para envio de requisao-->
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
                    <input type="file" name="photo" id="photo" class="form-control" required>
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