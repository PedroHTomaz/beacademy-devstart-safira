@extends('layouts.template')
@section('title','Novo Usuário')

@section('content')
<div class="container">
    <div class="my-3">
        <span>Já possui uma conta?<span><a href="#" class="btn text-primary">Faça login aqui!</a>
    </div>
    <form action="" method="POST" class='rounded shadow p-3 p-md-5 text-start' style='background-color:#fff;'>
        @csrf
        <div>
            <label for="" class='form-label text-primary h3'>Dados básicos</label>
            <input type="text" id="name" name="name" placeholder='Nome completo' class='form-control mb-3'>
            <input type="email" id="email" name="email" placeholder='E-mail' class='form-control mb-3'>
            <input type="password" id="password" name="password" placeholder='Senha' class='form-control mb-3'>
            <input type="tel" id="tel" name="tel" placeholder='Telefone' class='form-control mb-3'>
            <input type="date" id="birth_date" name="birth_date" placeholder='Data de nascimento' class='form-control mb-3'>
            <input type="text" id="cpf" name="cpf" placeholder='CPF' class='form-control mb-3'>
        </div>
        <div>
            <label for="" class='form-label text-primary h3'>Endereço</label>
            <input type="text" id="street" name="street" placeholder='Rua' class='form-control mb-3'>
            <input type="text" id="number" name="number" placeholder='Número' class='form-control mb-3'>
            <input type="text" id="neighborhood" name="" placeholder='Bairro' class='form-control mb-3'>
            <input type="text" id="city" name="city" placeholder='Cidade' class='form-control mb-3'>
            <input type="text" id="state" name="state" placeholder='Estado' class='form-control mb-3'>
            <input type="text" id="cep" name="cep" placeholder='CEP' class='form-control mb-3'>
        </div>
        <button type='submit' class='btn btn-primary d-block w-100'>Cadastrar</button>
    </form>
</div>
@endsection