@extends('layouts.template')
@section('title','novo produto')
@section('content')

    <h1 class="text-primary">Cadastro de Produto</h1>
    <form action="{{route('produtos.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @if($errors->any())
            <div class='alert alert-danger' role="alert">
                    @foreach($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
            </div>   
        @endif

        <div class="row mt-5">
            <div class="col-sm-6">
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" class="form-control" >
            </div>
        
            <div class="col-sm-2">
                <label for="quantity">Quantidade</label>
                <input type="text" id="quantity"  name='quantity' class="form-control"  >
            </div>
            <div class="col-sm-2">
                <label for="cust_price">Preço de custo</label>
                <input type="text" name="cust_price" id="cust_price" class="form-control" >
            </div>
        
            <div class="col-sm-2">
                <label for="sale_price">Preço de venda</label>
                <input type="text" name="sale_price" id="sale_price" class="form-control" >
            </div>
        </div>
        <div class="row mt-3">
            
            <div class="col-sm-12">
                <label for="photo">Foto</label>
                <input type="file" name="photo" id="photo" class="form-control" required>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12">
                <label for="description">Descrição</label>
                <textarea name="description" id="description"  class="form-control" rows="2" ></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12  mt-3">
                <button type="submit" class="btn btn-primary">CADASTRAR</button>
            </div>
        </div>
    </form>

@endsection