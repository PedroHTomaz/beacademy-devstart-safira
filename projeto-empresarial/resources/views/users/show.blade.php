@extends('layouts.template')
@section('title','Usuário ' . $user->name)

@section('content')

    <h4 class="text-primary mt-4">Detalhes do usuário: <spam class="text-dark">{{ $user->name }}</spam></h4>
            <ul class="list-group">
                <li scope="col" class="list-group-item list-group-item-dark">Foto:   
                    @if($user->photo)
                       <img src="{{ asset('storage/'.$user->photo) }}" width="50px" height="50px" class="border border-primary border-3 rounded-circle">
                    @else    
                        <img src="{{ asset('storage/profile/avatar.jpg') }}" width="50px" height="50px"class="border border-primary border-3 rounded-circle">
                    @endif
                </li>

                <li scope="col" class="list-group-item list-group-item-secondary">ID: {{ $user->id }}</li>
                <li scope="col"class="list-group-item list-group-item-dark">Nome: {{ $user->name }}</li>
                <li scope="col"class="list-group-item list-group-item-secondary">Email: {{ $user->email }}</th>
                <li scope="col"class="list-group-item list-group-item-dark">Telefone: {{ $user->tel }}</li>
                <li scope="col"class="list-group-item list-group-item-secondary">Administrador: 
                    @if(Auth::User()->is_admin == 1)
                        Sim
                    @else
                        Não
                    @endif
                </li>
                <li scope="col" class="list-group-item list-group-item-dark">Data de Nascimento: {{ $user->birth_date }}</li>
                <li scope="col" class="list-group-item list-group-item-secondary">CPF: {{ $user->cpf }}</li>
                <li scope="col" class="list-group-item list-group-item-dark">Data de Cadastro: {{ date('d/m/Y', strtotime($user->created_at)) }}</li>
                <li scope="col" class='d-flex list-group-item list-group-item-secondary'><a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" id="form">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                </li>
            </ul>
                
            <ul class="list-group">
            
                <h4 class="text-primary mt-4">Endereço do usuário</h4>
        
                <li scope="col" class="list-group-item list-group-item-dark">CEP: {{ $user->cep }}</li>
                <li scope="col" class="list-group-item list-group-item-secondary">Logradouro: {{ $user->street }}</li>
                <li scope="col" class="list-group-item list-group-item-dark">Número: {{ $user->number }}</li>
                <li scope="col" class="list-group-item list-group-item-secondary">Bairro: {{ $user->neighborhood }}</li>
                <li scope="col" class="list-group-item list-group-item-dark">Cidade: {{ $user->city }}</li>
                <li scope="col" class="list-group-item list-group-item-secondary">Estado: {{ $user->state }}</li>
           
            </ul>
@endsection