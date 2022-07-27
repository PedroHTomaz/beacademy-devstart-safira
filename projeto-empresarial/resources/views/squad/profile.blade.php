@extends('layouts.template-main')
@section('title', 'Desenvolvedores da SquadSafira')
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
      <article class='tamanho-div'>
        
      <div
  id="carouselMultiItemExample"
  class="carousel slide carousel-dark text-center"
  data-mdb-ride="carousel"
>
  <!-- Controls -->
  <div class="d-flex justify-content-center mb-4">
    <button
      class="carousel-control-prev position-relative"
      type="button"
      data-mdb-target="#carouselMultiItemExample"
      data-mdb-slide="prev"
    >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button
      class="carousel-control-next position-relative"
      type="button"
      data-mdb-target="#carouselMultiItemExample"
      data-mdb-slide="next"
    >
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Inner -->
  <div class="carousel-inner py-4">
    <!-- Single item -->
    <div class="carousel-item active">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="card">
              <img height='300px'
                src="{{ asset('/storage/profile/felipe.jpg') }}"
                class="card-img-top"
                alt="Waterfall"
              />
              <div class="card-body">
                <h5 class="card-title">Developer back-end: Felipe Erick</h5>
                <p class="card-text">
                Graduando no curso de Análise e desenvolvimento de sistemas que possui a previsão de término em junho de 2024; trabalhei como técnico em manutenção e conserto de placas no ano de 2020 até 2021. Em 2021 comecei um curso de especialização em arduino na linguagem de C++ e criei muitos projetos. Decidi migrar para desenvolvimento web, onde atualmente estou como desenvolvedor back-end com as hardskills: HTML, CSS, JAVASCRIPT, SQL, PHP 8.1.6, BOOTSTRAP e o Framework LARAVEL 9.
                </p>
                <a href="https://www.linkedin.com/in/felipe-erick-amoedo-993925201/" class="btn btn-primary">linkedin</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <img height='300px'
                src="https://mdbcdn.b-cdn.net/img/new/standard/nature/182.webp"
                class="card-img-top"
                alt="Sunset Over the Sea"
              />
              <div class="card-body">
                <h5 class="card-title">Developer back-end: Eleazar</h5>
                <p class="card-text">
                Estudante de programação Front-End. Apaixonado por tecnologia, música e documentários.
                </p>
                <a href="https://www.linkedin.com/in/eleazarsf/" class="btn btn-primary">linkedin</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <img height='300px'
                src="https://mdbcdn.b-cdn.net/img/new/standard/nature/183.webp"
                class="card-img-top"
                alt="Sunset over the Sea"
              />
              <div class="card-body">
                <h5 class="card-title">Developer back-end: Pedro Tomaz</h5>
                <p class="card-text">
                Depois de uma longa busca por uma área com a qual me identificasse, encontrei a TI. Conheci a área através de algumas pessoas que me falaram sobre e então decidi pesquisar mais. Gostei muito e iniciei cursos e um tecnólogo na área.
Sigo estudando e desenvolvendo projetos para me aprimorar cada vez mais.
                </p>
                <a href="https://www.linkedin.com/in/pedro-henrique-tomaz-vieira-ti/" class="btn btn-primary">linkedin</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12">
            <div class="card">
              <img height='300px'
                src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp"
                class="card-img-top"
                alt="Fissure in Sandstone"
              />
              <div class="card-body">
                <h5 class="card-title">Developer back-end: Odenilson</h5>
                <p class="card-text">
                PHP | SQL | LARAVEL | CSS | HTML | BOOTSTRAP | JAVASCRIPT 

Sou uma pessoa que diariamente busco por me tornar sempre um ser humano melhor, seja através das minhas atitudes, ou através das minhas buscas por conteúdos que me façam um Bom profissional! :}
                </p>
                <a href="https://www.linkedin.com/in/odenilsonmarques" class="btn btn-primary">linkedin</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <img height='300px'
                src="https://mdbcdn.b-cdn.net/img/new/standard/nature/185.webp"
                class="card-img-top"
                alt="Storm Clouds"
              />
              <div class="card-body">
                <h5 class="card-title">Developer back-end: Gustavo</h5>
                <p class="card-text">
                  Tá sem biografia no linkedin :{
                </p>
                <a href="https://www.linkedin.com/in/gustavo-rodrigues-9386a9214/" class="btn btn-primary">linkedin</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <img height='300px'
                src="https://mdbcdn.b-cdn.net/img/new/standard/nature/186.webp"
                class="card-img-top"
                alt="Hot Air Balloons"
              />
              <div class="card-body">
                <h5 class="card-title">Developer back-end: Eduardo</h5>
                <p class="card-text">
                Oi! Meu nome é Eduardo Henrique, e sou graduado em Análise e Desenvolvimento de Sitemas pela UNIFACEMA. Também tenho um curso técnico em informática pelo IFMA que foi realizado integrado com o ensino médio, e portanto desde a minha adolescência estou ligado a tecnologia. 
                </p>
                <a href="https://www.linkedin.com/in/eduardo-henrique-dev/" class="btn btn-primary">linkedin</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.js"
></script>

@endsection