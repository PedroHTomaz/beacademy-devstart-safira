@extends('layouts.template-main')
@section('title', 'Fale Conosco!')
@section('content')

    <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container">
            <div class='d-flex'>
                <a class="navbar-brand text-primary fw-bold" href="/"><i class="fa-solid fa-diamond"></i> SAFIRA</a>
            </div>       
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            </div>
        </div>
    </nav>
    <main class='container'>
        <div class='row mt-2'>
            <div class='col-md-6 jumbotron mx-auto'>
                <form action="{{ route('suport.store') }}" method='POST' class='rounded shadow p-3 p-lg-5 form-group' style='background-color:#fff;'>
                    @csrf
                    @if($errors->any())
                    <div class="alert alert-info" role="alert">
                        @foreach($errors->all() as $error)
                             <li>{{ $error }}</li>
                        @endforeach 
                    </div>
                    @endif
                    @if(session()->has('success'))
                    <div class="alert alert-info" role="alert">
                             <li>{{ session()->get('success') }}</li>
                    </div>
                    @endif
                    <label for="" class='form-label text-primary h3 mb-3'>Fale conosco <i class="fa-solid fa-envelope"></i></label>
                    <input type="text" id="name" name="name" placeholder='Nome completo' maxlength='36' class='form-control mb-3' required>
                    <input type="email" id="email" name="email" maxlength='38' placeholder='E-mail' class='form-control mb-3' required>
                    <input type="tel" id="tel" name="tel" maxlength='14' placeholder='Telefone' class='form-control mb-3' required>
                    <textarea class='form-control mb-3' style='resize:none' rows="4" cols="50" placeholder='Deixe sua mensagem' required name='message'></textarea>
                    <div class='text-end'>
                        <button type="submit" class='btn btn-primary'>Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <div class='footer-contact'>
        <a href="{{ route('squad.profile') }}" class='text-white text-decoration-none' title='Clique aqui'>Conheça os desenvolvedores da squad safira 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-browser-chrome" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M16 8a8.001 8.001 0 0 1-7.022 7.94l1.902-7.098a2.995 2.995 0 0 0 .05-1.492A2.977 2.977 0 0 0 10.237 6h5.511A8 8 0 0 1 16 8ZM0 8a8 8 0 0 0 7.927 8l1.426-5.321a2.978 2.978 0 0 1-.723.255 2.979 2.979 0 0 1-1.743-.147 2.986 2.986 0 0 1-1.043-.7L.633 4.876A7.975 7.975 0 0 0 0 8Zm5.004-.167L1.108 3.936A8.003 8.003 0 0 1 15.418 5H8.066a2.979 2.979 0 0 0-1.252.243 2.987 2.987 0 0 0-1.81 2.59ZM8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
            </svg>
         </a> 
    </div>
@endsection