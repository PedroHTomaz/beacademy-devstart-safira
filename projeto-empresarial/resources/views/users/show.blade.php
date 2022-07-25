@extends('layouts.template')
@section('title','Usuário ' . $user->name)

@section('content')

    <h4 class="text-primary mt-4">Detalhes do usuário: <spam class="text-dark">{{ $user->name }}</spam></h4>
            <ul>
                <li scope="col">Foto:   
                    @if($user->photo)
                       <img src="{{ asset('storage/'.$user->photo) }}" width="50px" height="50px" class="border border-primary border-3 rounded-circle">
                    @else    
                        <img src="{{ asset('storage/profile/avatar.jpg') }}" width="50px" height="50px"class="border border-primary border-3 rounded-circle">
                    @endif
                </li>

                <li scope="col">ID: {{ $user->id }}</li>
                <li scope="col">Nome: {{ $user->name }}</li>
                <li scope="col">Email: {{ $user->email }}</th>
                <li scope="col">Telefone: {{ $user->tel }}</li>
                <li scope="col">Administrador: 
                    @if(Auth::User()->is_admin == 1)
                        Sim
                    @else
                        Não
                    @endif
                </li>
                <li scope="col">Data de Nascimento: {{ $user->birth_date }}</li>
                <li scope="col">CPF: {{ $user->cpf }}</li>
                <li scope="col">Data de Cadastro: {{ date('d/m/Y', strtotime($user->created_at)) }}</li>
                <li scope="col" class='d-flex'><a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning ">Editar</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" id="form" class='ml-3'>
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                </li>
            </ul>
                
            <ul>
            
                <h4 class="text-primary mt-4">Endereço do usuário</h4>
        
                <li scope="col">CEP: {{ $user->cep }}</li>
                <li scope="col">Logradouro: {{ $user->street }}</li>
                <li scope="col">Número: {{ $user->number }}</li>
                <li scope="col">Bairro: {{ $user->neighborhood }}</li>
                <li scope="col">Cidade: {{ $user->city }}</li>
                <li scope="col">Estado: {{ $user->state }}</li>
           
            </ul>
@endsection