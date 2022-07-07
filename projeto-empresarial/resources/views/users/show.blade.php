@extends('layouts.template')
@section('title','Usuário ' . $user->name)

@section('content')

    <h2 class="text-primary mt-4">Detalhes do usuário: <spam class="text-dark">{{ $user->name }}</spam></h2>

    <table class="table table-striped mt-4">
        <thead class="text-center">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">CPF</th>
                <th scope="col">Data de Cadastro</th>
                <th scope="col" colspan="2">AÇÕES</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->tel }}</td>
                <td>{{ $user->birth_date }}</td>
                <td>{{ $user->cpf }}</td>
                <td>{{ date('d/m/Y', strtotime($user->created_at)) }}</td>
                <td><a href="" class="btn btn-warning ">Editar</a></td>
                <td>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
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