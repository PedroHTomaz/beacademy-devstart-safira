@extends('layouts.template-main')
@section('title', 'Nossos Devs')
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

    <main class="container">

      <div class="..."> {{-- <<< se o layout não quebrar, fique à vontade pra excluir essa div, Pedro --}} 

        <div class="my-5">
            <h1 class="text-primary h1">SafiraDevs <i class="fa-solid fa-laptop-code"></i></h1>
            <hr>
        </div>
        
        <div class="d-flex flex-wrap gap-5 justify-content-center mx-auto mb-5" style="max-width:1024px">

                <div class="card px-3 border-0">
                    <div class="pic mx-auto m-3 border border-5 border-primary rounded-circle">
                        <img data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Estudante autodidata de desenvolvimento web,
                                                                                                porém se apaixonando pelo universo back-end!"
                             class="h-100 border border-5 border-light card-img-top rounded-circle"
                             src="https://media.gettyimages.com/photos/uma-thurman-in-les-miserables-directed-by-bille-august-prague-1997-picture-id1302436898?s=2048x2048">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="text-primary">Eleazar Freitas</h5>
                        <span>PHP | Laravel</span>
                        <div class="mt-2">
                            <a href="https://github.com/EleazarFreitas"><i class="text-dark me-2 fa-brands fa-github"></i></a>
                            <a href="https://www.linkedin.com/in/eleazarsf/"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card px-3 border-0">
                    <div class="pic mx-auto m-3 border border-5 border-primary rounded-circle">
                        <img data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua"
                             class="h-100 border border-5 border-light card-img-top rounded-circle"
                             src="https://media.gettyimages.com/photos/uma-thurman-in-les-miserables-directed-by-bille-august-prague-1997-picture-id1302436898?s=2048x2048">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="text-primary">Pedro Tomaz</h5>
                        <span>PHP | Laravel</span>
                        <div class="mt-2">
                            <a href=""><i class="text-dark me-2 fa-brands fa-github"></i></a>
                            <a href=""><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card px-3 border-0">
                    <div class="pic mx-auto m-3 border border-5 border-primary rounded-circle">
                        <img data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua"
                             class="h-100 border border-5 border-light card-img-top rounded-circle"
                             src="https://media.gettyimages.com/photos/uma-thurman-in-les-miserables-directed-by-bille-august-prague-1997-picture-id1302436898?s=2048x2048">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="text-primary">Eduardo Sobrenome</h5>
                        <span>PHP | Laravel | MySQL</span>
                        <div class="mt-2">
                            <a href=""><i class="text-dark me-2 fa-brands fa-github"></i></a>
                            <a href=""><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card px-3 border-0">
                    <div class="pic mx-auto m-3 border border-5 border-primary rounded-circle">
                        <img data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua"
                             class="h-100 border border-5 border-light card-img-top rounded-circle"
                             src="https://media.gettyimages.com/photos/uma-thurman-in-les-miserables-directed-by-bille-august-prague-1997-picture-id1302436898?s=2048x2048">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="text-primary">Felipe Sobrenome</h5>
                        <span>PHP | Laravel</span>
                        <div class="mt-2">
                            <a href=""><i class="text-dark me-2 fa-brands fa-github"></i></a>
                            <a href=""><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card px-3 border-0">
                    <div class="pic mx-auto m-3 border border-5 border-primary rounded-circle">
                        <img data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua"
                             class="h-100 border border-5 border-light card-img-top rounded-circle"
                             src="https://media.gettyimages.com/photos/uma-thurman-in-les-miserables-directed-by-bille-august-prague-1997-picture-id1302436898?s=2048x2048">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="text-primary">Gustavo Sobrenome</h5>
                        <span>PHP | Laravel</span>
                        <div class="mt-2">
                            <a href=""><i class="text-dark me-2 fa-brands fa-github"></i></a>
                            <a href=""><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card px-3 border-0">
                    <div class="pic mx-auto m-3 border border-5 border-primary rounded-circle">
                        <img data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua"
                             class="h-100 border border-5 border-light card-img-top rounded-circle"
                             src="https://media.gettyimages.com/photos/uma-thurman-in-les-miserables-directed-by-bille-august-prague-1997-picture-id1302436898?s=2048x2048">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="text-primary">Odenilson Sobrenome</h5>
                        <span>PHP | Laravel</span>
                        <div class="mt-2">
                            <a href=""><i class="text-dark me-2 fa-brands fa-github"></i></a>
                            <a href=""><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
        </div>   
      </div>

    </main>

@endsection