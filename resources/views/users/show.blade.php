@extends('layouts.template')
@section('title','Usuário ' . $user->name)

@section('content')

    <h4 class="text-primary mt-4">Detalhes do usuário: <spam class="text-dark">{{ $user->name }}</spam></h4>
    <ul class="list-group">
        <li scope="col" class="list-group-item list-group-item-light">   
            @if($user->photo)
                <img src="{{asset('https://teste-laravel9.s3.sa-east-1.amazonaws.com/' . $user->photo)}}" height="50px" class="border border-primary border-3 rounded-circle">
            @else    
                <img src="{{ asset('storage/profile/avatar.jpg') }}" width="50px" height="50px"class="border border-primary border-3 rounded-circle">
            @endif
        </li>

        <li scope="col" class="list-group-item list-group-item-light">ID: {{ $user->id }}</li>
        <li scope="col"class="list-group-item list-group-item-light">Nome: {{ $user->name }}</li>
        <li scope="col"class="list-group-item list-group-item-light">Email: {{ $user->email }}</th>
        <li scope="col"class="list-group-item list-group-item-light">Telefone: {{ $user->tel }}</li>
        <li scope="col"class="list-group-item list-group-item-light">Administrador: 
            @if(Auth::User()->is_admin == 1)
                Sim
            @else
                Não
            @endif
        </li>
        <li scope="col" class="list-group-item list-group-item-light">Data de Nascimento: {{ $user->birth_date }}</li>
        <li scope="col" class="list-group-item list-group-item-light">CPF: {{ $user->cpf }}</li>
        <li scope="col" class="list-group-item list-group-item-light">Data de Cadastro: {{ date('d/m/Y', strtotime($user->created_at)) }}</li>
        <li scope="col" class="list-group-item list-group-item-light">CEP: {{ $user->cep }}</li>
        <li scope="col" class="list-group-item list-group-item-light">Logradouro: {{ $user->street }}</li>
        <li scope="col" class="list-group-item list-group-item-light">Número: {{ $user->number }}</li>
        <li scope="col" class="list-group-item list-group-item-light">Bairro: {{ $user->neighborhood }}</li>
        <li scope="col" class="list-group-item list-group-item-light">Cidade: {{ $user->city }}</li>
        <li scope="col" class="list-group-item list-group-item-light">Estado: {{ $user->state }}</li> 
        <li scope="col" class='d-flex list-group-item list-group-item-light'><a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('users.destroy', $user->id) }}" method="POST" id="form">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger ms-3">Deletar</button>
            </form>
        </li>
    </ul>
@endsection