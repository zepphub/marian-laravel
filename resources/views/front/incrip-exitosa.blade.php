@extends('front.layouts.main')

@section('title')Inscripción Exitosa - @endsection

@section('content')
  <!-- Portada Home -->
  <div class="bg-crema-suave">
    <div class="container py-5 contenedor-portada-home">
      <div class="row">
        <div class="col-md-7">
          <div
            class="align-items-center text-center text-md-left align-items-md-baseline d-flex flex-column h-100 justify-content-center pr-md-5">
            <h2>¡Inscripción Exitosa!</h2>
            <h4 class="text-medium text-marron my-4 my-md-3">Ya tenes confirmado tu lugar en el evento</h4>
            <button class="btn btn-primary mt-4 mt-md-2">Mis propuestas para vos</button>
          </div>
        </div>
        <div class="col-md-5 d-none d-md-block">
          <img class="img-fluid" src="assets/img/Background.png" alt="">
        </div>
      </div>
    </div>
  </div>
  <div class="divisor-con-forma">
    <img style="margin-top: -12px !important;" class="img-fluid w-100 img-rotate-180"
      src="assets/img/separador-seccion-svg2.svg" alt="">
  </div>
  <!-- Portada Home -->
@endsection
