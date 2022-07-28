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
            <div class='col-md-6 jumbotron mx-auto mt-5'>
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
    <footer class='footer-contact'>
        <a href="{{ route('squad.profile') }}" class='text-white text-decoration-none' title='Clique aqui'>
            Conheça nossos SafiraDevs <i class="ms-1 fa-solid fa-code"></i>
         </a> 
        </footer>
@endsection