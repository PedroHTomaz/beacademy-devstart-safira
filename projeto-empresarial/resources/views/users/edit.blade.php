@extends('layouts.template-main')
@section('title','Editar Usuário')


@section('content')
    <h1 class='text-primary'>Editar Usuário</h1>
    <form action="{{ route('users.update', $user->id ) }}" method="POST" enctype="multipart/form-data" class='rounded shadow p-3 p-md-5 text-start' style='background-color:#fff;'>
        @method('PUT')
        @csrf
        <div>
            <label for="" class='form-label text-primary h3'>Dados básicos</label>
            <input type="text" id="name" name="name" placeholder='Nome Completo' class='form-control mb-3' value="{{ $user->name }}">

            <input type="email" id="email" name="email" placeholder='email' class='form-control mb-3' value="{{ $user->email }}">

            <input type="password" id="password" name="password" placeholder='Senha' class='form-control mb-3'>

            <input type="tel" id="tel" name="tel" placeholder='Telefone' class='form-control mb-3' value="{{ $user->tel }}">

            <input type="date" id="birth_date" name="birth_date" placeholder='Data de Nascimento' class='form-control mb-3' value="{{ $user->birth_date }}">
            <label for="photo" class="form-label">Selecione uma Foto para o seu perfil.</label>
            <input type="file" class="form-control form control-md" id="photo" name="photo">

            <!-- <div class="form-check mt-2">
            <input class="form-check-input" type="radio" name="is_admin" value='1'id="flexRadioDefault1"/>
            <label class="form-check-label" for="flexRadioDefault1"> is_admin? </label>
            </div> -->
        </div>
        <div class='mt-3'>
            <label for="" class='form-label text-primary h3'>Endereço</label>
            <input type="text" id="cep" name="cep" placeholder='CEP' class='form-control mb-3' value="{{ $user->cep }}">

            <input type="text" id="street" name="street" placeholder='Rua' class='form-control mb-3' value="{{ $user->street }}">

            <input type="text" id="number" name="number" placeholder='Número' class='form-control mb-3' value="{{ $user->number }}">

            <input type="text" id="neighborhood" name="neighborhood" placeholder='Bairro' class='form-control mb-3' value="{{ $user->neighborhood }}">

            <input type="text" id="city" name="city" placeholder='Cidade' class='form-control mb-3' value="{{ $user->city }}">

            <input type="text" id="state" name="state" placeholder='Estado' class='form-control mb-3' value="{{ $user->state }}">
        </div>
        <button type='submit' class='btn btn-primary d-block w-100'>Atualizar</button>
    </form>
</div>
@endsection