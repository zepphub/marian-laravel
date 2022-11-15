@extends('layouts.main')

@section('head')@endsection

@section('title')Mentoría - @endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>Mentoría</h2>
        <!--<nav class="" aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center bg-transparent text-marron-claro">
            <li class="breadcrumb-item text-marron-claro"><a class="text-marron-claro" href="#">Inicio</a></li>
            <li class="breadcrumb-item text-secondary active font-weight-bold" aria-current="page">Mentoría</li>
          </ol>
        </nav>-->
      </div>
    </div>
  </div>

  <div id="mentoria-portada" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h4 class="text-white titulo-home">Viajamos juntas al corazón de tu marca y aplicamos herramientas adaptadas
            de forma práctica a tu proyecto. </h4>
          <img src="{{ asset('img/separador-titulo-blanco-svg.svg') }}" alt="">
          <a href="#mentoria-propuestas"><button class="btn btn-outline-white d-block mt-4">Ver mis programas </button></a>
        </div>
      </div>
    </div>
  </div>

  <div id="mentoria-propuestas">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-12">
          <h4 class="text-secondary titulo-home mb-3">Mis propuestas de mentoría para vos</h4>
          <p class="text-marron-claro">Creemos una estrategia de marca diferencial, que te ayude a elevar el posicionamiento en entornos digitales, a través de dinámicas específicas centradas en el marketing consciente y en la comunicación experiencial.</p>
        </div>
      </div>
      <div class="row">
            <div class="col-md-6">
              <div class="card border-secondary text-center card-propuestas shadow">
                <img src="{{ asset('img/card-mentoria-home.svg') }}" class="card-img-top w-25 mx-auto my-4 mb-2" alt="...">
                <div class="card-body">
                  <h5 class="card-title titulo-home">Mentoría Grupal</h5>
                  <h5 class="card-title titulo-home">Eleva tu Marca Online</h5>
                  <p class="card-text">Un programa grupal de 8 semanas con acompañamiento semanal y sesiones de mentoría en vivo, a través de las cuales, te ayudaré a tomar decisiones estratégicas para transformar tu emprendimiento en un negocio digital sólido y alineado al estilo de vida que deseas.</p>
                  <a href="{{ route('mentoria-grupal') }}" class="btn btn-primary">¡Quiero saber más!
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card border-secondary text-center card-propuestas shadow">
                <img src="{{ asset('img/card-asesoria-home.svg') }}" class="card-img-top w-25 mx-auto my-4 mb-2" alt="...">
                <div class="card-body">
                  <h5 class="card-title titulo-home">Mentoría Personalizada</h5>
                  <h5 class="card-title titulo-home">Programa Selecto para Profesionales y Marcas Digitales</h5>
                  <p class="card-text">Un proceso en el que te acompaño y ayudo, durante un período de 10 semanas, a crear una estrategia de marca diferencial e integral en entornos digitales a fin de que tu audiencia te perciba como la mejor opción.</p>
                  <a href="{{ route('programa-intensivo') }}" class="btn btn-primary">¡Quiero saber más!</a>
                </div>
              </div>
            </div>
      </div>
    </div>
  </div>
@endsection
