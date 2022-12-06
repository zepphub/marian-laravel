@extends('layouts.main')

@section('head')@endsection

@section('title')Test - @endsection

@section('content')
<article>

  <header class="portada-test">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-6">
            <h3 class="text-secondary">¡Hola por aquí!</h3>
            <img src="{{ asset('img/separador-titulo-svg-crema.svg') }}" class="separador-ondas" alt="">
            <h4 class="text-primary mt-4 mb-3">¡Qué lindo encontrarte en este espacio!</h4>
            <p class="text-marron-claro">Para comenzar, te propongo que hagas un test sin costo para ayudarte a identificar en qué etapa estás y
              en qué pilar de tu emprendimiento debés enfocarte para mejorar la presencia digital de tu marca y
              potenciar tus resultados. </p>
            <a href="{{ route('test-formulario') }}" class="btn btn-primary mt-3">Quiero hacer el test</a>
        </div>
      </div>
    </div>
  </header>
  <!-- Portada Home -->

  <!-- Cinco pilares -->
  <section class="bg-nude seccion-cinco-pilares">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-12">
          <h6 class="text-center my-3 px-md-5">Mi experiencia con cientos de marcas de
            diversos rubros y países me
            llevó a <strong>identificar 5 pilares esenciales</strong> que
            considero deben integrar una estrategia digital para poder crecer, mejorar y potenciar resultados en el
            universo
            digital. </h6>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="d-md-flex mt-4 mb-5 contenedor-cinco-pilares">
            <div class="mr-md-4 mb-3 mb-md-0">
              <div
                class="rounded shadow text-center bg-white p-4 p-md-3 d-flex flex-column align-items-center justify-content-center">
                <img class="mt-md-2" src="{{ asset('img/test-box-1.svg') }}" alt="">
                <h5 class="font-weight-normal text-marron-claro mt-3">El propósito y los valores de tu marca</h5>
              </div>
            </div>
            <div class="mr-md-4 mb-3 mb-md-0">
              <div
                class="rounded shadow text-center bg-white p-4 p-md-3 d-flex flex-column align-items-center justify-content-center">
                <img class="mt-md-2" src="{{ asset('img/test-box-2.svg') }}" alt="">
                <h5 class="font-weight-normal text-marron-claro mt-3">El público objetivo y la audiencia que quieres
                  atraer</h5>
              </div>
            </div>
            <div class="mr-md-4 mb-3 mb-md-0">
              <div
                class="rounded shadow text-center bg-white p-4 p-md-3 d-flex flex-column align-items-center justify-content-center">
                <img class="mt-md-2" src="{{ asset('img/test-box-3.svg') }}" alt="">
                <h5 class="font-weight-normal text-marron-claro mt-3">El universo visual de tu marca, fruto de su
                  personalidad e identidad</h5>
              </div>
            </div>
            <div class="mr-md-4 mb-3 mb-md-0">
              <div
                class="rounded shadow text-center bg-white p-4 p-md-3 d-flex flex-column align-items-center justify-content-center">
                <img class="mt-md-2" src="{{ asset('img/test-box-4.svg') }}" alt="">
                <h5 class="font-weight-normal text-marron-claro mt-3">Tu plan de acción:
                  planificación y estrategia</h5>
              </div>
            </div>
            <div class="mb-3 mb-md-0">
              <div
                class="rounded shadow text-center bg-white p-4 p-md-3 d-flex flex-column align-items-center justify-content-center">
                <img class="mt-md-2" src="{{ asset('img/test-box-5.svg') }}" alt="">
                <h5 class="font-weight-normal text-marron-claro mt-3">El contenido de tus canales digitales</h5>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- Cinco pilares -->

  <!-- Banner Eleva Tu Marca -->
  <section class="banner-eleva-tu-marca d-flex align-items-center py-5">
    <div class="container">
      <div class="row text-center text-md-left">
        <div class="col-md-8">
          <h4 class="text-white">Haciendo el test, podrás identificar en qué pilar debes enfocarte para avanzar</h4>
          <p class="text-white mb-0">Al finalizar, te regalaré una guía práctica especialmente creada para la etapa en la que
            tu proyecto se encuentra.</p>
        </div>
        <div class="col-md-4 d-flex align-items-center justify-content-center justify-content-md-end"><a
            href="{{ route('test-formulario') }}" class="btn btn-white">¡Quiero hacer el
              test gratis!</a>
            </div>
      </div>
    </div>
  </section>
  <!-- Fin Banner Eleva Tu Marca -->
</article>  
@endsection
