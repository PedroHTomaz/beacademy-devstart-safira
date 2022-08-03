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

        <div class="my-5">
            <h1 class="text-primary h1">SafiraDevs <i class="fa-solid fa-laptop-code"></i></h1>
            <hr>
        </div>
        
        <div class="d-flex flex-wrap gap-5 justify-content-center mx-auto mb-5" style="max-width:1024px">

            <div class="devCard card px-3 border-0">
                <div class="pic mx-auto m-3 border border-5 border-primary rounded-circle">
                    <img data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Estudante autodidata de desenvolvimento web, porém se apaixonando pelo universo back-end!" class="h-100 border border-5 border-light card-img-top rounded-circle" src="https://media-exp1.licdn.com/dms/image/C4E03AQHRDwfpbcS_5A/profile-displayphoto-shrink_200_200/0/1646874316861?e=1664409600&v=beta&t=FbbVyjvSCcUzpqu-OCyPQJYa3a4Isqm-GKx3aVo6RoY">
                </div>
                <div class="card-body text-center">
                    <h5 class="text-primary">Eleazar Freitas</h5>
                    <span>PHP | Laravel | Bootstrap</span>
                    <div class="mt-2">
                        <a href="https://github.com/EleazarFreitas"><i class="text-dark me-2 fa-brands fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/eleazarsf/"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="devCard card px-3 border-0">
                <div class="pic mx-auto m-3 border border-5 border-primary rounded-circle">
                    <img data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Estudante de ADS, estagiário de TI e Dev Back end PHP junior." class="h-100 border border-5 border-light card-img-top rounded-circle" src="https://media-exp1.licdn.com/dms/image/C4E03AQFC1QgZ-1WjIA/profile-displayphoto-shrink_200_200/0/1643899673913?e=1664409600&v=beta&t=-wIzIjGjhewamjHxx2fadoRE4CZPiIrgY-pSjFbUy1w">
                </div>
                <div class="card-body text-center">
                    <h5 class="text-primary">Pedro Tomaz</h5>
                    <span>PHP | Laravel</span>
                    <div class="mt-2">
                        <a href="https://github.com/PedroHTomaz"><i class="text-dark me-2 fa-brands fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/pedro-henrique-tomaz-vieira-ti/"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="devCard card px-3 border-0">
                <div class="pic mx-auto m-3 border border-5 border-primary rounded-circle">
                    <img data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua" class="h-100 border border-5 border-light card-img-top rounded-circle" src="https://media-exp1.licdn.com/dms/image/C4E03AQGTUPCJnjqXrQ/profile-displayphoto-shrink_200_200/0/1630168471539?e=1664409600&v=beta&t=Vxl0hAKxuUMEu-lzZPu2jiisQIEnoTfAMSffmS6NcSw">
                </div>
                <div class="card-body text-center">
                    <h5 class="text-primary">Eduardo Henrique</h5>
                    <span>PHP | Laravel | MySQL</span>
                    <div class="mt-2">
                        <a href="https://github.com/eduardohor"><i class="text-dark me-2 fa-brands fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/eduardo-henrique-dev/"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="devCard card px-3 border-0">
                <div class="pic mx-auto m-3 border border-5 border-primary rounded-circle">
                    <img data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Developer back-end apaixonado por programação e solucionar problemas" class="h-100 border border-5 border-light card-img-top rounded-circle" src="https://media-exp1.licdn.com/dms/image/C4E03AQH7lVKClSynTQ/profile-displayphoto-shrink_200_200/0/1650301808731?e=1664409600&v=beta&t=F3v7LiJXXKF9_dwUICgfrzYs7_0FCI__9cnZBgTAV0s">
                </div>
                <div class="card-body text-center">
                    <h5 class="text-primary">Felipe Erick</h5>
                    <span>PHP | Laravel</span>
                    <div class="mt-2">
                        <a href="https://github.com/Felipeerick"><i class="text-dark me-2 fa-brands fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/felipe-erick-amoedo-993925201/"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="devCard card px-3 border-0">
                <div class="pic mx-auto m-3 border border-5 border-primary rounded-circle">
                    <img data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua" class="h-100 border border-5 border-light card-img-top rounded-circle" src="https://media-exp1.licdn.com/dms/image/C4D03AQGbPRKY_BYhUA/profile-displayphoto-shrink_200_200/0/1644438376406?e=1664409600&v=beta&t=LKA1ged45ed6d60LOoAMymwWLZmAgKSf0vpt0O2DAUg">
                </div>
                <div class="card-body text-center">
                    <h5 class="text-primary">Gustavo Rodriguez</h5>
                    <span>PHP | Laravel</span>
                    <div class="mt-2">
                        <a href="https://github.com/sguiLo"><i class="text-dark me-2 fa-brands fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/gustavo-rodrigues-9386a9214/"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="devCard card px-3 border-0">
                <div class="pic mx-auto m-3 border border-5 border-primary rounded-circle">
                    <img data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua" class="h-100 border border-5 border-light card-img-top rounded-circle" src="https://media-exp1.licdn.com/dms/image/C4D03AQFmHFR_PRmPdg/profile-displayphoto-shrink_200_200/0/1567619932909?e=1664409600&v=beta&t=RPMQjnWFS3qBqxNdd0HPdkDJa45SjWJhkZHigM9TL3k">
                </div>
                <div class="card-body text-center">
                    <h5 class="text-primary">Odenilson Marques</h5>
                    <span>PHP | Laravel</span>
                    <div class="mt-2">
                        <a href="#"><i class="text-dark me-2 fa-brands fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/odenilsonmarques/"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>   

    </main>

@endsection