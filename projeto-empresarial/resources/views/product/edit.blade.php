@extends('layouts.template')
@section('title', $title)
@section('content')

   <h1 class='text-primary'>Editar {{ $products->name }} </h1>
   
   <form action="{{ route('produtos.update', $products->id) }}" method='post' enctype="multipart/form-data">
        @method('PUT')  
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
                <input type="text" name="name"value='{{$products->name}}' id="name" class="form-control" >
            </div>
            <div class="col-sm-2">
                <label for="quantity">Quantidade</label>
                <input type="text" name="quantity"value='{{$products->quantity}}' id="quantity" class="form-control"  >
            </div>
            <div class="col-sm-2">
                <label for="cust-price">Preço de custo</label>
                <input type="text" name="cust_price"value='{{$products->cust_price}}' id="cust_price" class="form-control"  >
            </div>
            <div class="col-sm-2">
                <label for="sale-price">Preço de venda</label>
                <input type="text" name="sale_price"value='{{$products->sale_price}}' id="sale_price" class="form-control" >
            </div>
        </div>  
        <div class="row mt-3">
            <div class="col-sm-12">
                <label for="photo">Insira a foto</label>
                <input type="file" name="photo" id="photo" class="form-control" required>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-12">
                <label for="description">Descrição</label>
                <textarea name="description" id="description" class="form-control" rows="2" >{{$products->description}}</textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-4">Atualizar</button>
    </form>

@endsection