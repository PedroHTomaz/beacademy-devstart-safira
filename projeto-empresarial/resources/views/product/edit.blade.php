@extends('layouts.template')
@section('title', $title)
@section('content')

    <form style="margin: 30px" action="{{ route('produtos.update', $produto->id) }}" method='post' >
    @method('PUT')  
    @csrf
                      <h1>Editar Usuário  {{ $produto->name }} </h1>
    <div class="row mt-5">
                    <div class="col-sm-4">
                        <label for="name">Nome</label>
                        <input type="text" name="name"value='{{$produto->name}}' id="name" class="form-control"  maxlength="30" required>
                    </div>
                
                    <div class="col-sm-4">
                        <label for="value">Valor</label>
                        <input type="text" name="value"value='{{$produto->value}}' id="value" class="form-control" required>
                    </div>
                
                    <div class="col-sm-4">
                        <label for="quantity">Quantidade</label>
                        <input type="text" name="quantity"value='{{$produto->quantity}}' id="quantity" class="form-control" required>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-4">
                        <label for="cust-price">Preço de custo</label>
                        <input type="text" name="cust_price"value='{{$produto->cust_price}}' id="cust_price" class="form-control" required>
                    </div>
                
                    <div class="col-sm-4">
                        <label for="sale-price">Preço de venda</label>
                        <input type="text" name="sale_price"value='{{$produto->sale_price}}' id="sale_price" class="form-control" required>
                    </div>
                    <div class="col-sm-4">
                        <label for="photo">Foto</label>
                        <input type="text" name="photo" id="photo" value='{{$produto->photo}}' class="form-control" required>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-12">
                        <label for="description">Descrição</label>
                        <textarea name="description" id="description" class="form-control" rows="2" required>{{$produto->description}}</textarea>
                    </div>
                </div>
      <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>

@endsection