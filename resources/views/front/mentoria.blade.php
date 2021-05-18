@extends('front.layouts.main')

@section('head')@endsection

@section('title')Mentoría - @endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>Mentoría</h2>
        <nav class="" aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center bg-transparent text-marron-claro">
            <li class="breadcrumb-item text-marron-claro"><a class="text-marron-claro" href="#">Inicio</a></li>
            <li class="breadcrumb-item text-secondary active font-weight-bold" aria-current="page">Mentoría</li>
          </ol>
        </nav>
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
          <a href=""><button class="btn btn-outline-white d-block mt-4">Ver mis programas </button></a>
        </div>
      </div>
    </div>
  </div>

  <div class="align-items-center d-flex ultimo-contenedor" id="mentoria-propuestas">
    <div class="container py-5 py-md-0">
      <div class="row align-items-center">
        <div class="col-md-4">
          <h4 class="text-secondary titulo-home mb-3">Mis propuestas de mentoría para vos</h4>
          <p class="text-marron-claro">Construyamos juntas el universo de tu marca, de la mano con diversas estrategias
            de Marketing Digital, Comunicación y Branding que te ayuden a posicionarte a través de una propuesta
            auténtica y diferente.</p>
        </div>
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-6">
              <div class="card border-secondary text-center card-propuestas shadow">
                <img src="{{ asset('img/card-mentoria-home.svg') }}" class="card-img-top w-25 mx-auto my-4 mb-2" alt="...">
                <div class="card-body">
                  <h5 class="card-title titulo-home">Mentoría</h5>
                  <p class="card-text">Trabajamos en el universo de tu marca, fortaleciendo los pilares más importantes
                    y
                    consolidando tu presencia digital, de forma grupal o personalizada.</p>
                  <p class="text-primary font-weight-bold">¡Quiero saber más!</p>
                  <a href="#" class="btn btn-primary">Click Aquí</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 my-4 my-md-0">
              <div class="card border-secondary text-center card-propuestas shadow">
                <img src="{{ asset('img/card-asesoria-home.svg') }}" class="card-img-top w-25 mx-auto my-4 mb-2" alt="...">
                <div class="card-body">
                  <h5 class="card-title titulo-home">Asesoría Personalizada</h5>
                  <p class="card-text">Te ayudo a potenciar tu estrategia
                    digital resaltando la esencia y los
                    valores de tu marca.</p>
                  <p class="text-primary font-weight-bold">¡Quiero saber más!</p>
                  <a href="#" class="btn btn-primary">Click Aquí</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
