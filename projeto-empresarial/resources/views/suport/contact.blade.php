@extends('layouts.template-main')
@section('title', 'Fale Conosco!')
@section('content')

    <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container">
            <div class='d-flex'>
                <a class="navbar-brand text-primary fw-bold" href="#"><i class="fa-solid fa-diamond"></i> SAFIRA</a>
            </div>       
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <a href="/" class=" btn btn-primary ">Inicio</a>
                </ul>
            </div>
        </div>
    </nav>
    <main class='container '>
        <div class='row mt-5'>
            <div class='col-md-6 jumbotron mx-auto'>
                <form action="{{ route('suport.store') }}" method='POST' class='rounded shadow p-3 p-md-5 text-start form-group' style='background-color:#fff;'>
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
                    <label for="" class='form-label text-primary h3 mb-3'>Fale conosco</label>
                    <input type="text" id="name" name="name" placeholder='Nome completo' class='form-control mb-3' required>
                    <input type="email" id="email" name="email" placeholder='E-mail' class='form-control mb-3' required>
                    <input type="tel" id="tel" name="tel" placeholder='Telefone' class='form-control mb-3' required>
                    <textarea col='25' row='10'class='form-control mb-3' placeholder='Deixe sua mensagem' required name='message'></textarea>
                    <button type="submit" class='d-flex btn btn-primary'>Enviar</button>
                </form>
            </div>
        </div>
    </main>
@endsection