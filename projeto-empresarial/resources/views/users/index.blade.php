@extends('layouts.template')
@section('title','Usuários')

@section('content')

    <h1 class="text-primary mt-4">Listagem de Usuários</h1>

    <table class="table table-striped table-light table-hover table-bordered border-dark mt-4">
        <thead class="text-center table-primary border-dark">
            <tr>
               <th scope="col">ID</th> 
               <th scope="col">Nome</th> 
               <th scope="col">Email</th> 
               <th scope="col">Telefone</th> 
               <th scope="col">Data de Nascimento</th> 
               <th scope="col">CPF</th> 
               <th scope="col">Data de Cadastro</th> 
               <th scope="col">Ações</th> 
            </tr>
        </thead>
        <tbody class="text-center">
        @foreach($users as $user)
            <tr>
            <td scope="row">{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->tel }}</td>
            <td>{{ $user->birth_date }}</td>
            <td>{{ $user->cpf }}</td>
            <td>{{ date('d/m/Y', strtotime($user->created_at)) }}</td>
            <td><a href="" class="btn btn-info text-white">Visualizar</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection