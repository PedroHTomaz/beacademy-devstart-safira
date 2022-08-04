@extends('layouts.template')
@section('title','Usuário')

@section('content')

    <div class='mx-3'>
        <h1 class="text-primary mt-4">Listagem de Usuários</h1>
        <form action="{{ route('users.index') }}" method="get" class='d-flex'>
            @csrf
            <div class='form-group w-50 me-3' >
                <input type="search" id="form1" name='search' class="form-control rounded " placeholder='Pesquisar'/>
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-search"></i>
            </button> 
        </form>
        <table class="table table-striped ">
            <thead class="text-center">
                <tr>
                    <th scope="col">Foto</th> 
                    <th scope="col">ID</th> 
                    <th scope="col">Nome</th> 
                    <th scope="col">Email</th> 
                    <th scope="col">Telefone</th> 
                    <th scope="col">Administrador</th>
                    <th scope="col">Ações</th> 
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach($users as $user)
                <tr>
                    @if($user->photo)
                        <th><img src="{{asset('https://teste-laravel9.s3.sa-east-1.amazonaws.com/' . $user->photo)}}" width="50px" height="50px" class="border border-primary border-3 rounded-circle"></th>
                    @else    
                        <th><img src="{{ asset('storage/profile/avatar.jpg') }}" width="50px" height="50px"class="border border-primary border-3 rounded-circle"></th>
                    @endif
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->tel }}</td>
                    @if($user->is_admin == 1)
                        <th scope="col">Sim</th>
                    @else
                        <th scope="col">Não</th> 
                    @endif
                    <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-info text-white">Visualizar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="justify-content-center pagination">
        {{ $users->links('pagination::bootstrap-4') }}
    </div>
@endsection