@extends('layouts.main')

@section('head')
@endsection

@section('title')
    Mentoría -
@endsection

@section('content')
    <article>

        <header id="mentoria-portada" class="bg-overlay">
          <div class="container">
            <div class="row py-5">
                <div class="col-md-6 offset-md-3 text-center">
                    <h1 class="epigrafe">Mentorías</h1>
                    <h3 class="text-white mb-5">Viajamos juntas al corazón de tu marca y aplicamos herramientas adaptadas
                        de forma práctica a tu proyecto. </h3>
                    <!--<nav class="" aria-label="breadcrumb">
                          <ol class="breadcrumb justify-content-center bg-transparent">
                              <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                              <li class="breadcrumb-item active">Mentorías</li>
                          </ol>
                      </nav>-->
                    <a href="#mentoria-propuestas" class="btn btn-white">Ver mis programas</a>
                </div>
            </div>
            </div>
        </header>

        <section id="mentoria-propuestas" class="container py-5">
            <div class="row py-5">
                <div class="col-md-8 offset-md-2 text-center">
                    <h2 class="separador-horizontal">Mis propuestas de mentoría para vos</h2>
                    <p class="text-marron-claro">Creemos una estrategia de marca diferencial, que te ayude a elevar el
                        posicionamiento en entornos digitales, a través de dinámicas específicas centradas en el marketing
                        consciente y en la Comunicación Experiencial®.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-5">
                    <div class="card border-secondary text-center card-propuestas shadow">
                        <img src="{{ asset('/img/ps-badge.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title epigrafe">MENTORÍA Personalizada</h5>
                            <h4>Eleva tu Esencia®</h4>
                            <p class="card-text"><b>Programa Selecto para Profesionales y Marcas Digitales.</b><br> Un
                                proceso en el que te acompaño y ayudo, durante un período de 10 semanas, a crear una
                                estrategia de marca diferencial e integral en entornos digitales a fin de que tu audiencia
                                te perciba como la mejor opción.</p>
                            <a href="{{ route('programa-intensivo') }}" class="btn btn-primary">Click aquí para aplicar al
                                proceso</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="card border-secondary text-center card-propuestas shadow">
                        <img src="{{ asset('/img/mg-badge.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title epigrafe">MENTORÍA Grupal</h5>
                            <h4>Eleva tu Marca®</h4>
                            <p class="card-text"><b>Un programa grupal de 8 semanas con acompañamiento semanal y sesiones de
                                    mentoría en vivo.</b><br> Te ayudaré a tomar decisiones estratégicas para transformar tu
                                emprendimiento en un negocio digital sólido y alineado al estilo de vida que deseas.</p>
                            <a href="{{ route('mentoria-grupal') }}" class="btn btn-primary">Click aquí para conocer
                                detalles</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
@endsection
