@extends('front.layouts.main')

@section('head')@endsection

@section('title')Test - @endsection

@section('content')
  <!-- Portada Home -->
  <div class="bg-crema-suave">
    <div class="container py-5 contenedor-portada-home">
      <div class="row">
        <div class="col-md-6">
          <div
            class="align-items-center text-center text-md-left align-items-md-baseline d-flex flex-column h-100 justify-content-center pr-md-5">
            <h2>¡Hola por aquí!</h2>
            <img src="{{ asset('img/separador-titulo-svg-crema.svg') }}" alt="">
            <h4 class="font-weight-bold text-marron-claro my-4 my-md-3">¡Qué lindo encontrarte en este espacio!</h4>
            <p>Para comenzar, te propongo que hagas un test sin costo para ayudarte a identificar en qué etapa estás y
              en qué pilar de tu emprendimiento debés enfocarte para mejorar la presencia digital de tu marca y
              potenciar tus resultados. </p>
            <a href="{{ route('test-form') }}"><button class="btn btn-primary">Quiero hacer el test <svg class="ml-2"
                  xmlns="http://www.w3.org/2000/svg" width="7.938" height="13.795" viewBox="0 0 7.938 13.795">
                  <g id="next_1_" data-name="next (1)" transform="translate(0.56 0.56)">
                    <g id="Grupo_475" data-name="Grupo 475" transform="translate(0 0)">
                      <path id="Trazado_343" data-name="Trazado 343"
                        d="M124.475,6.018,118.585.144a.494.494,0,1,0-.7.7l5.54,5.524-5.54,5.524a.494.494,0,0,0,.7.7l5.89-5.874a.493.493,0,0,0,0-.7Z"
                        transform="translate(-117.742 0)" fill="#fff" stroke="#fff" stroke-width="1" />
                    </g>
                  </g>
                </svg>
              </button></a>
          </div>
        </div>
        <div class="col-md-6 d-none d-md-flex align-items-center">
          <img class="img-fluid" src="{{ asset('img/img-portada-test.png') }}" alt="">
        </div>
      </div>
    </div>
  </div>
  <div class="divisor-con-forma">
    <img style="margin-top: -14px !important;" class="img-fluid w-100 img-rotate-180"
      src="{{ asset('img/separador-seccion-svg2.svg') }}" alt="">
  </div>
  <!-- Portada Home -->

  <!-- Cinco pilares -->
  <div class="bg-nude seccion-cinco-pilares">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h6 class="font-weight-normal text-center my-3 titulo-home px-md-5">Mi experiencia con cientos de marcas de
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
                class="rounded-lg shadow text-center bg-white p-4 p-md-3 d-flex flex-column align-items-center justify-content-center">
                <img class="mt-md-2" src="{{ asset('img/test-box-1.svg') }}" alt="">
                <h5 class="font-weight-normal text-marron-claro mt-3">El propósito y los valores de tu marca</h5>
              </div>
            </div>
            <div class="mr-md-4 mb-3 mb-md-0">
              <div
                class="rounded-lg shadow text-center bg-white p-4 p-md-3 d-flex flex-column align-items-center justify-content-center">
                <img class="mt-md-2" src="{{ asset('img/test-box-2.svg') }}" alt="">
                <h5 class="font-weight-normal text-marron-claro mt-3">El público objetivo y la audiencia que quieres
                  atraer</h5>
              </div>
            </div>
            <div class="mr-md-4 mb-3 mb-md-0">
              <div
                class="rounded-lg shadow text-center bg-white p-4 p-md-3 d-flex flex-column align-items-center justify-content-center">
                <img class="mt-md-2" src="{{ asset('img/test-box-3.svg') }}" alt="">
                <h5 class="font-weight-normal text-marron-claro mt-3">El universo visual de tu marca, fruto de su
                  personalidad e identidad</h5>
              </div>
            </div>
            <div class="mr-md-4 mb-3 mb-md-0">
              <div
                class="rounded-lg shadow text-center bg-white p-4 p-md-3 d-flex flex-column align-items-center justify-content-center">
                <img class="mt-md-2" src="{{ asset('img/test-box-4.svg') }}" alt="">
                <h5 class="font-weight-normal text-marron-claro mt-3">Tu plan de acción:
                  planificación y estrategia</h5>
              </div>
            </div>
            <div class="mb-3 mb-md-0">
              <div
                class="rounded-lg shadow text-center bg-white p-4 p-md-3 d-flex flex-column align-items-center justify-content-center">
                <img class="mt-md-2" src="{{ asset('img/test-box-5.svg') }}" alt="">
                <h5 class="font-weight-normal text-marron-claro mt-3">El contenido de tus canales digitales</h5>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Cinco pilares -->

  <!-- Banner Eleva Tu Marca -->
  <div class="banner-eleva-tu-marca d-flex align-items-center">
    <div class="container py-5 py-md-0">
      <div class="row text-center text-md-left">
        <div class="col-md-9">
          <h4 class="text-white">Haciendo el test, podrás identificar en qué pilar debes enfocarte para avanzar</h4>
          <p class="text-white">Al finalizar, te regalaré una guía práctica especialmente creada para la etapa en la que
            tu proyecto se encuentra.</p>
        </div>
        <div class="col-md-3 d-flex align-items-center justify-content-center justify-content-md-end"><a
            href="{{ route('test-form') }}"><button class="btn btn-sm p-3 btn-white text-primary rounded-pill">¡Quiero hacer el
              test gratis!</button></a></div>
      </div>
    </div>
  </div>
  <!-- Fin Banner Eleva Tu Marca -->
@endsection
