@extends('layouts.main')

@section('head')@endsection

@section('title')@endsection

@section('content')
  <div class="portada-servicios d-flex align-items-center justify-content-center">
    <div class="container py-5">
      <div class="row">
        <div class="col text-center">
          <!--<h3 class="line-h-low text-white">Construyamos juntas
            el universo de tu marca</h3>-->
          <h1 class="text-white epigrafe">Servicios</h4>
          <h3 class="text-white">Construyamos el universo de tu marca y elevemos su posicionamiento en entornos digitales a través de dinámicas específicas, centradas en el marketing consciente y en la comunicación experiencial.</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="">Mis Propuestas</h4>
        <img src="{{ asset('img/separador-svg.svg') }}" class="separador-ondas"  alt="">
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-6 mb-5">
          <div class="card border-secondary text-center card-propuestas shadow">
              <img src="{{ asset('/img/ps-badge-dark.svg') }}" class="card-img-top"
                  alt="...">
              <div class="card-body">
                  <h5 class="card-title epigrafe">MENTORÍA Personalizada</h5>
                  <h4>Eleva tu Esencia</h4>
                  <p class="card-text"><b>Programa Selecto para Profesionales y Marcas Digitales.</b><br> Un proceso en el que te acompaño y ayudo, durante un período de 10 semanas, a crear una estrategia de marca diferencial e integral en entornos digitales a fin de que tu audiencia te perciba como la mejor opción.</p>
                  <a href="{{ route('programa-intensivo') }}" class="btn btn-primary">Click aquí para aplicar al proceso</a>
              </div>
          </div>
      </div>
      <div class="col-md-6 mb-5">
          <div class="card border-secondary text-center card-propuestas shadow">
              <img src="{{ asset('/img/badge-mentoria_grupal.png') }}" class="card-img-top"
                  alt="...">
              <div class="card-body">
                  <h5 class="card-title epigrafe">MENTORÍA Grupal</h5>
                  <h4>Eleva tu Marca</h4>
                  <p class="card-text"><b>Un programa grupal de 8 semanas con acompañamiento semanal y sesiones de mentoría en vivo.</b><br> Te ayudaré a tomar decisiones estratégicas para transformar tu emprendimiento en un negocio digital sólido y alineado al estilo de vida que deseas.</p>
                  <a href="{{ route('mentoria-grupal') }}" class="btn btn-primary">Click aquí para conocer detalles</a>
              </div>
          </div>
      </div>
      <div class="col-md-6 mb-5">
        <div class="card border-secondary text-center card-propuestas shadow">
            <img src="{{ asset('/img/card-asesoria.svg') }}" class="card-img-top"
                alt="...">
            <div class="card-body">
                <h5 class="card-title epigrafe">Cursos</h5>
                <h4>On Demand</h4>
                <p class="card-text">Una propuesta de formación con contenidos audiovisuales grabados (videos, ejemplos con casos reales, ejercicios y guías prácticas) para que puedas capacitarte a tu ritmo y respetar tus procesos creativos sin presiones de días u horarios.</p>
                <a href="https://servicios.marianpd.com/cursos" target="_blank" class="btn btn-primary">Click aquí para ver los cursos disponible</a>
            </div>
        </div>
      </div>
      <div class="col-md-6 mb-5">
        <div class="card border-secondary text-center card-propuestas shadow">
            <img src="https://marianpd.com/img/card-talleres.svg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title epigrafe">Conferencias y Talleres</h5>
                <h4>A Medida</h4>
                <p class="card-text">Capacitaciones, workshops y ponencias sobre comunicación experiencial, marketing consciente y estrategia diferencial en entornos digitales.</p>
                <a href="{{ route('talleres-y-eventos') }}" class="btn btn-primary">Click Aquí</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
