@extends('layouts.template')
@section('title','Usuário ' . $user->name)

@section('content')

    <h1 class="text-primary mt-4">Usuário - <spam class="text-dark">{{ $user->name }}</spam></h1>

    <table class="table table-striped border-dark table-light table-hover table-bordered mt-4">
        <thead class="text-center table-primary border-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">CPF</th>
                <th scope="col">Data de Cadastro</th>
                <th scope="col">AÇÕES</th>
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
                <td class="d-flex"><a href="" class="btn btn-warning ">Editar</a>
                    <form action="" method="" class="ms-2">
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                </td>
            </tr>
        </tbody>

    </table>

@endsection