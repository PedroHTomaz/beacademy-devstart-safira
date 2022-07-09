@extends('layouts.template-main')
@section('title','Novo Usuário')


@section('content')

<nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container">
            <div class='d-flex'>
                <a class="navbar-brand text-primary fw-bold" href="/"><i class="fa-solid fa-diamond"></i> SAFIRA</a>
            </div>       
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

<div class="container" style='max-width:768px;'>
    <div class="my-4">
        <span>Já possui uma conta?<span>
        <a href="{{ route('users.login') }}" class="btn text-primary">Faça login!</a>
    </div>
    <form action="{{ route('users.registered') }}" method="POST" enctype="multipart/form-data" class='rounded shadow p-3 p-md-5 text-start' style='background-color:#fff;'>
        @csrf
        <div>
            <label for="" class='form-label text-primary h3'>Dados básicos</label>
            <input type="text" id="name" name="name" placeholder='Nome completo' class='form-control mb-3' required>
            <input type="email" id="email" name="email" placeholder='E-mail' class='form-control mb-3' required>
            <input type="password" id="password" name="password" placeholder='Senha' class='form-control mb-3' required>
            <input type="tel" id="tel" name="tel" placeholder='Telefone' class='form-control mb-3' required>
            <input type="date" id="birth_date" name="birth_date" placeholder='Data de nascimento' class='form-control mb-3' required>
            <input type="text" id="cpf" name="cpf" placeholder='CPF' class='form-control mb-3' required>
            <label for="photo" class="form-label">Selecione uma foto para o seu perfil.</label>
            <input type="file" id="photo" name="photo" class="form-control form control-md">
        </div>
        <div>
            <label for="" class='form-label text-primary h3'>Endereço</label>
            <input type="text" id="cep" name="cep" placeholder='CEP' class='form-control mb-3' required>
            <input type="text" id="street" name="street" placeholder='Rua' class='form-control mb-3' required>
            <input type="text" id="number" name="number" placeholder='Número' class='form-control mb-3' required>
            <input type="text" id="neighborhood" name="neighborhood" placeholder='Bairro' class='form-control mb-3' required>
            <input type="text" id="city" name="city" placeholder='Cidade' class='form-control mb-3' required>
            <input type="text" id="state" name="state" placeholder='Estado' class='form-control mb-3' required>
        </div>
        <button type='submit' class='btn btn-primary d-block w-100'>Cadastrar</button>
    </form>
</div>
@endsection