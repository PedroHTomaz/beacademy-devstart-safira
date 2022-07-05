@extends('layouts.template')
@section('title', 'catalogo')
@section('content')
    <h1 class="mt-5 mb-4">catalogo</h1>     
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators" style="background-color:none;margin-bottom:-2rem;">
            <button type="button" data-bs-target="#carouselExampleIndicators" style="background-color:#0d6efd" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" style="background-color:#0d6efd" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="{{('assets/img/pedra01.png')}}" class="text-center">
                            <div class="card-body">
                                <h6 class="card-title">Pedra cone safira</h6>
                                <h6 class="card-title">R$ 2.000</h6>
                                <a href="" class="btn btn-secondary btn-sm">Adicionar ao carrinho</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="{{('assets/img/pedra02.png')}}">
                            <div class="card-body">
                                <h6 class="card-title">Pedra safira</h6>
                                <h6 class="card-title">R$ 3.000</h6>
                                <a href="" class="btn btn-secondary btn-sm">Adicionar ao carrinho</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="{{('assets/img/pedra11.jpg')}}">
                            <div class="card-body">
                                <h6 class="card-title">Pedra piramide safira</h6>
                                <h6 class="card-title">R$ 18.000</h6>
                                <a href="" class="btn btn-secondary btn-sm">Adicionar ao carrinho</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="{{('assets/img/pedra10.jpg')}}">
                            <div class="card-body">
                                <h6 class="card-title">Pedras safira robustas</h6>
                                <h6 class="card-title">R$ 1.000</h6>
                                <a href="" class="btn btn-secondary btn-sm">Adicionar ao carrinho</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="10000">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="{{('assets/img/joia1.jpg')}}" class="text-center">
                            <div class="card-body">
                                <h6 class="card-title">Conjunto de joias safira</h6>
                                <h6 class="card-title">R$ 1.500</h6>
                                <a href="" class="btn btn-secondary btn-sm">Adicionar ao carrinho</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="{{('assets/img/joia2.jpg')}}">
                            <div class="card-body">
                                <h6 class="card-title">Anés safira</h6>
                                <h6 class="card-title">R$ 2.200</h6>
                                <a href="" class="btn btn-secondary btn-sm">Adicionar ao carrinho</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="{{('assets/img/joia7.jpg')}}">
                            <div class="card-body">
                                <h6 class="card-title">Cristais safira</h6>
                                <h6 class="card-title">R$ 4.000</h6>
                                <a href="" class="btn btn-secondary btn-sm">Adicionar ao carrinho</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="{{('assets/img/joia4.png')}}">
                            <div class="card-body">
                                <h6 class="card-title">Brinco de safira</h6>
                                <h6 class="card-title">R$ 2.100</h6>
                                <a href="" class="btn btn-secondary btn-sm">Adicionar ao carrinho</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection