@extends('layouts.template')
@section('title','Usuário ' . $user->name)

@section('content')

    <h2 class="text-primary mt-4">Detalhes do usuário: <spam class="text-dark">{{ $user->name }}</spam></h2>

    <table class="table table-striped mt-4">
        <thead class="text-center">
            <tr>
                <th scope="col">Foto</th>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Administrador</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">CPF</th>
                <th scope="col">Data de Cadastro</th>
                <th scope="col" colspan="2">AÇÕES</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr>
            @if($user->photo)
                <th><img src="{{ asset('storage/'.$user->photo) }}" width="50px" height="50px" class="border border-primary border-3 rounded-circle"></th>
            @else    
                <th><img src="{{ asset('storage/profile/avatar.jpg') }}" width="50px" height="50px"class="border border-primary border-3 rounded-circle"></th>
            @endif
                <th scope="row">{{ $user->id }}</th>
                <td id="identifier">{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->tel }}</td>
                @if(Auth::User()->is_admin == 1)
                    <th scope="col">Sim</th>
                @else
                    <th scope="col">Não</th> 
                @endif
                <td>{{ $user->birth_date }}</td>
                <td>{{ $user->cpf }}</td>
                <td>{{ date('d/m/Y', strtotime($user->created_at)) }}</td>
                <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning ">Editar</a></td>
                <td>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST" id="form">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
                </td>
            </tr>
        </tbody>
    </table>
    <h3 class="text-primary mt-4">Endereço do usuário</h3>
        <table class="table table-striped mt-4">
        <thead class="text-center">
            <tr>
                <th scope="col">CEP</th>
                <th scope="col">Logradouro</th>
                <th scope="col">Número</th>
                <th scope="col">Bairro</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr>
                <td>{{ $user->cep }}</td>
                <td>{{ $user->street }}</td>
                <td>{{ $user->number }}</td>
                <td>{{ $user->neighborhood }}</td>
                <td>{{ $user->city }}</td>
                <td>{{ $user->state }}</td> 
            </tr>
        </tbody>
        </table>
@endsection