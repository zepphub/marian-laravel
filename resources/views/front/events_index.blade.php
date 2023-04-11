@extends('layouts.main')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
@endsection

@section('title')
    Talleres y Eventos -
@endsection

@section('content')
    <article>

        <header class="container-fluid">
            <div class="row py-5">
                <div class="col-md-12 text-center">
                    <h1 class="epigrafe">Talleres <br>y Conferencias</h1>
                    <nav class="" aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center bg-transparent">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Talleres y Conferencias</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </header>

        <section class="container my-5">
            <div class="row py-5 align-content-center">
                <div class="col-md-5">
                    <img class="w-100 img-fluid rounded" src="{{ asset('img/conferencias.jpg') }}" alt="">
                </div>
                <div class="col-md-7 pl-md-5 pt-5">
                    <h2>Talleres y Conferencias a medida</h2>
                    <img src="{{ asset('/img/separador.svg') }}" class="separador-ondas mb-4" alt="">
                    <p>Comencé mi carrera como consultora de marcas a mis 22 años, cuando me propuse fusionar mis áreas de
                        expertise en turismo y en marketing.
                        Para ese entonces había finalizado mi carrera de Licenciada en Turismo y contaba con varias
                        especializaciones en Marketing y Comunicación Digital.</p>

                    <p>Al día de hoy llevo más de 8 años mentoreando proyectos y formando emprendedores y líderes de
                        negocios
                        digitales, actividad que evolucionó junto a mi formación en Universidad EUDE (Escuela Europea de
                        Dirección y Empresa) siendo uno de los 10 mejores colegios de negocio de habla hispana, identificado
                        por
                        el ranking FSO 2021 de Hamilton.
                        Entre ellas se encuentra una Maestría en Dirección de Negocios (MBA) y una Maestría en Marketing
                        Digital
                        en curso.</p>

                    <p>La experiencia me llevó a especializarme en la construcción de marca y en el desarrollo de
                        estrategias
                        aplicadas a negocios en entornos digitales, diseñando propuestas para profesionales y marcas con
                        propósito. Ambas conforman, hoy en día, mis áreas de expertise.</p>

                    <a href="#contacto" class="btn btn-primary mt-3">¡Quiero saber más!</a>
                </div>

            </div>
        </section>

        <section class="py-5 bg-crema-suave" id="tye-owl-carousel">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-6 offset-md-3 text-center">
                        <h4>Temas sobre los cuales aporto contenido y valor</h4>
                        <img src="{{ asset('img/separador.svg') }}" class="separador-ondas mx-auto mb-3" alt="">
                        <p>Si te gustaría que sea parte de tu evento y/o que desarrolle una ponencia experiencial para tu
                            audiencia (en modalidad presencial u online), puedo hacerlo a través de los siguientes tópicos
                            de
                            especialización:</p>
                            <br>
                    </div>
                </div>
                <div class="row mt-5 position-relative">
                    <button class="btn customPrevBtn p-0"><img src="{{ asset('img/prevBtn.svg') }}" alt=""></button>
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div
                                class="item-carousel m-3 m-md-0 p-5 p-md-4 bg-white d-flex flex-column h-100 justify-content-center text-center">
                                <img class="icon-owl-carousel mb-3" src="{{ asset('img/owl-carousel-item-1.svg') }}"
                                    alt="">
                                <h5>Marketing experiencial</h5>
                            </div>
                        </div>
                        <div class="item">
                            <div
                                class="item-carousel m-3 m-md-0 p-5 p-md-4 bg-white d-flex flex-column h-100 justify-content-center text-center">
                                <img class="icon-owl-carousel mb-3" src="{{ asset('img/owl-carousel-item-2.svg') }}"
                                    alt="">
                                <h5>Marketing emocional</h5>
                            </div>
                        </div>
                        <div class="item">
                            <div
                                class="item-carousel m-3 m-md-0 p-5 p-md-4 bg-white d-flex flex-column h-100 justify-content-center text-center">
                                <img class="icon-owl-carousel mb-3" src="{{ asset('img/owl-carousel-item-3.svg') }}"
                                    alt="">
                                <h5>Comunicación digital y relato de marca</h5>
                            </div>
                        </div>
                        <div class="item">
                            <div
                                class="item-carousel m-3 m-md-0 p-5 p-md-4 bg-white d-flex flex-column h-100 justify-content-center text-center">
                                <img class="icon-owl-carousel mb-3" src="{{ asset('img/owl-carousel-item-4.svg') }}"
                                    alt="">
                                <h5>Construcción de marca en entornos digitales</h5>
                            </div>
                        </div>
                        <div class="item">
                            <div
                                class="item-carousel m-3 m-md-0 p-5 p-md-4 bg-white d-flex flex-column h-100 justify-content-center text-center">
                                <img class="icon-owl-carousel mb-3" src="{{ asset('img/owl-carousel-item-5.svg') }}"
                                    alt="">
                                <h5>Estrategia de diferenciación en mercados digitales</h5>
                            </div>
                        </div>
                        <div class="item">
                            <div
                                class="item-carousel m-3 m-md-0 p-5 p-md-4 bg-white d-flex flex-column h-100 justify-content-center text-center">
                                <img class="icon-owl-carousel mb-3" src="{{ asset('img/owl-carousel-item-6.svg') }}"
                                    alt="">
                                <h5>Negocios digitales y nuevos paradigmas de trabajo</h5>
                            </div>
                        </div>
                    </div>
                    <button class="btn customNextBtn p-0"><img src="{{ asset('img/nextBtn.svg') }}"
                            alt=""></button>
                </div>
            </div>
        </section>

        <!-- Counter -->
        <section class="counter container-fluid py-5 bg-nude">
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="counter">
                        <h2 class="count-title">+ <span class="timer count-number" data-to="3000" data-speed="1500"></span></h2>
                        <p class="count-text ">Emprendedores y Profesionales formados con los programas de Marian</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="counter">
                        <h2 class="count-title">+ <span class="timer count-number" data-to="200" data-speed="1500"></span></h2>
                        <p class="count-text ">Cursos y talleres brindados en modalidad presencial-online
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="counter">
                        <h2 class="count-title">+ <span class="timer count-number" data-to="500" data-speed="1500"></span></h2>
                        <p class="count-text ">Negocios digitales mentoreados en construcción y estrategia de marca</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Próximos Eventos 
        <section class="container my-5">

            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Próximos Eventos</h3>
                    <img src="{{ asset('img/separador.svg') }}" class="separador-ondas mx-auto" alt="">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div id="carouselTYE" class="carousel slide d-none d-md-block" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach ($events as $event)
                                @if ($loop->odd)
                                    <li data-target="#carouselTYE" data-slide-to="{{ ($loop->iteration - 1) / 2 }}"
                                        @if ($loop->first) class="active" @endif></li>
                                @endif
                            @endforeach
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            @foreach ($events as $event)
                                @if ($loop->odd)
                                    <div class="carousel-item py-5 @if ($loop->first) active @endif">
                                        <div class="row px-md-3">
                                @endif
                                <div class="col-sm-6">
                                    <div class="card rounded-0 border-0 shadow" style="max-width: 540px;">
                                        <div class="row no-gutters">
                                            <div class="col-md-5 overflow-hidden">
                                                <img class="h-100 img-fluid" style="max-width: unset;"
                                                    src="{{ asset($event->image) }}" alt="...">
                                            </div>
                                            <div class="col-md-7">
                                                <div class="card-body">
                                                    <div>
                                                        <h5 class="font-weight-normal"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="12.567"
                                                                height="11.601" viewBox="0 0 12.567 11.601">
                                                                <g id="Icon_ionic-ios-calendar"
                                                                    data-name="Icon ionic-ios-calendar"
                                                                    transform="translate(-3.375 -4.5)">
                                                                    <path id="Trazado_19" data-name="Trazado 19"
                                                                        d="M14.734,6.75H13.526v.725a.242.242,0,0,1-.242.242H12.8a.242.242,0,0,1-.242-.242V6.75h-5.8v.725a.242.242,0,0,1-.242.242H6.033a.242.242,0,0,1-.242-.242V6.75H4.583A1.212,1.212,0,0,0,3.375,7.958v8.217a1.212,1.212,0,0,0,1.208,1.208H14.734a1.212,1.212,0,0,0,1.208-1.208V7.958A1.212,1.212,0,0,0,14.734,6.75Zm.242,9.063a.606.606,0,0,1-.6.6H4.946a.606.606,0,0,1-.6-.6V10.375a.242.242,0,0,1,.242-.242H14.734a.242.242,0,0,1,.242.242Z"
                                                                        transform="translate(0 -1.283)" fill="#b46063" />
                                                                    <path id="Trazado_20" data-name="Trazado 20"
                                                                        d="M9.967,4.742A.242.242,0,0,0,9.725,4.5H9.242A.242.242,0,0,0,9,4.742v.725h.967Z"
                                                                        transform="translate(-3.208)" fill="#b46063" />
                                                                    <path id="Trazado_21" data-name="Trazado 21"
                                                                        d="M25.717,4.742a.242.242,0,0,0-.242-.242h-.483a.242.242,0,0,0-.242.242v.725h.967Z"
                                                                        transform="translate(-12.191)" fill="#b46063" />
                                                                </g>
                                                            </svg>
                                                            {{ $event->dateFormated() }} | {{ $event->timeFormated() }} hs
                                                        </h5>
                                                        <h5 class="font-weight-normal"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="7.943"
                                                                height="11.911" viewBox="0 0 7.943 11.911">
                                                                <g id="Icon_feather-mic" data-name="Icon feather-mic"
                                                                    transform="translate(-7 -1)">
                                                                    <path id="Trazado_5" data-name="Trazado 5"
                                                                        d="M14.988,1.5A1.488,1.488,0,0,0,13.5,2.988V6.955a1.488,1.488,0,0,0,2.976,0V2.988A1.488,1.488,0,0,0,14.988,1.5Z"
                                                                        transform="translate(-4.016 0)" fill="none"
                                                                        stroke="#b46063" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="1" />
                                                                    <path id="Trazado_6" data-name="Trazado 6"
                                                                        d="M14.443,15v.992a3.472,3.472,0,0,1-6.943,0V15"
                                                                        transform="translate(0 -9.036)" fill="none"
                                                                        stroke="#b46063" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="1" />
                                                                    <path id="Trazado_7" data-name="Trazado 7"
                                                                        d="M18,28.5v1.984"
                                                                        transform="translate(-7.028 -18.073)"
                                                                        fill="none" stroke="#b46063"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="1" />
                                                                    <path id="Trazado_8" data-name="Trazado 8"
                                                                        d="M12,34.5h3.968"
                                                                        transform="translate(-3.012 -22.089)"
                                                                        fill="none" stroke="#b46063"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="1" />
                                                                </g>
                                                            </svg>
                                                            {{ $event->lecturer }}</h5>
                                                    </div>
                                                    <h5 class="card-title text-marron-claro ">
                                                        {{ $event->title }}</h5>
                                                    <p class="card-text" style="white-space:pre-wrap;">
                                                        {{ $event->description }}</p>
                                                    <div class="d-md-flex align-items-center justify-content-between">
                                                        @if ($event->inscription)
                                                            <a class="btn btn-primary w-100"
                                                                href="{{ route('evento', $event->slug) }}">Inscribite <svg
                                                                    class="ml-1" xmlns="http://www.w3.org/2000/svg"
                                                                    width="8.248" height="14.367"
                                                                    viewBox="0 0 8.248 14.367">
                                                                    <g id="next_1_" data-name="next (1)"
                                                                        transform="translate(-60.438 -1.439)">
                                                                        <g id="Grupo_475" data-name="Grupo 475"
                                                                            transform="translate(61 2)">
                                                                            <path id="Trazado_343" data-name="Trazado 343"
                                                                                d="M124.777,6.288,118.622.151a.516.516,0,0,0-.728.73l5.788,5.772-5.788,5.772a.516.516,0,0,0,.729.73l6.154-6.137a.516.516,0,0,0,0-.73Z"
                                                                                transform="translate(-117.742 0)"
                                                                                fill="#fff" stroke="#fff"
                                                                                stroke-width="1" />
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        @else
                                                            <a class="btn btn-outline-secondary rounded-circle"
                                                                href="{{ route('evento', $event->slug) }}"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="15.056"
                                                                    height="14.674" viewBox="0 0 15.056 14.674">
                                                                    <path id="Icon_awesome-arrow-left"
                                                                        data-name="Icon awesome-arrow-left"
                                                                        d="M6.4,16.339l.746.746a.8.8,0,0,0,1.139,0l6.532-6.529a.8.8,0,0,0,0-1.139L8.283,2.884a.8.8,0,0,0-1.139,0L6.4,3.63a.807.807,0,0,0,.013,1.153L10.46,8.64H.8A.8.8,0,0,0,0,9.447v1.075a.8.8,0,0,0,.806.806H10.46L6.411,15.186A.8.8,0,0,0,6.4,16.339Z"
                                                                        transform="translate(0.004 -2.647)"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </a>
                                                        @endif
                                                        @if (isset($event->host))
                                                            <p class="text-rosa-oscuro m-0 ml-md-3">Organiza:
                                                                {{ $event->host }} </p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if ($loop->even || $loop->last)
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
            <div id="carouselTYE_mobile" class="carousel slide d-md-none" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach ($events as $event)
                        <li data-target="#carouselTYE_mobile" data-slide-to="{{ $loop->index }}"
                            @if ($loop->first) class="active" @endif></li>
                    @endforeach
                </ol>
                <div class="carousel-inner" role="listbox">
                    @foreach ($events as $event)
                        <div class="carousel-item py-5 @if ($loop->first) active @endif">
                            <div class="card border-0 p-3">
                                <img src="{{ asset($event->image) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="font-weight-normal">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12.567" height="11.601"
                                            viewBox="0 0 12.567 11.601">
                                            <g id="Icon_ionic-ios-calendar" data-name="Icon ionic-ios-calendar"
                                                transform="translate(-3.375 -4.5)">
                                                <path id="Trazado_19" data-name="Trazado 19"
                                                    d="M14.734,6.75H13.526v.725a.242.242,0,0,1-.242.242H12.8a.242.242,0,0,1-.242-.242V6.75h-5.8v.725a.242.242,0,0,1-.242.242H6.033a.242.242,0,0,1-.242-.242V6.75H4.583A1.212,1.212,0,0,0,3.375,7.958v8.217a1.212,1.212,0,0,0,1.208,1.208H14.734a1.212,1.212,0,0,0,1.208-1.208V7.958A1.212,1.212,0,0,0,14.734,6.75Zm.242,9.063a.606.606,0,0,1-.6.6H4.946a.606.606,0,0,1-.6-.6V10.375a.242.242,0,0,1,.242-.242H14.734a.242.242,0,0,1,.242.242Z"
                                                    transform="translate(0 -1.283)" fill="#b46063" />
                                                <path id="Trazado_20" data-name="Trazado 20"
                                                    d="M9.967,4.742A.242.242,0,0,0,9.725,4.5H9.242A.242.242,0,0,0,9,4.742v.725h.967Z"
                                                    transform="translate(-3.208)" fill="#b46063" />
                                                <path id="Trazado_21" data-name="Trazado 21"
                                                    d="M25.717,4.742a.242.242,0,0,0-.242-.242h-.483a.242.242,0,0,0-.242.242v.725h.967Z"
                                                    transform="translate(-12.191)" fill="#b46063" />
                                            </g>
                                        </svg>
                                        {{ $event->dateFormated() }} | {{ $event->timeFormated() }} hs
                                    </h5>
                                    <h5 class="font-weight-normal">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="7.943" height="11.911"
                                            viewBox="0 0 7.943 11.911">
                                            <g id="Icon_feather-mic" data-name="Icon feather-mic"
                                                transform="translate(-7 -1)">
                                                <path id="Trazado_5" data-name="Trazado 5"
                                                    d="M14.988,1.5A1.488,1.488,0,0,0,13.5,2.988V6.955a1.488,1.488,0,0,0,2.976,0V2.988A1.488,1.488,0,0,0,14.988,1.5Z"
                                                    transform="translate(-4.016 0)" fill="none" stroke="#b46063"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                                <path id="Trazado_6" data-name="Trazado 6"
                                                    d="M14.443,15v.992a3.472,3.472,0,0,1-6.943,0V15"
                                                    transform="translate(0 -9.036)" fill="none" stroke="#b46063"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                                <path id="Trazado_7" data-name="Trazado 7" d="M18,28.5v1.984"
                                                    transform="translate(-7.028 -18.073)" fill="none" stroke="#b46063"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                                <path id="Trazado_8" data-name="Trazado 8" d="M12,34.5h3.968"
                                                    transform="translate(-3.012 -22.089)" fill="none" stroke="#b46063"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                            </g>
                                        </svg>
                                        {{ $event->lecturer }}
                                    </h5>
                                    <h5 class="card-title text-marron-claro ">{{ $event->title }}</h5>
                                    <p class="card-text">{{ $event->description }}</p>

                                    <div class="d-md-flex align-items-center justify-content-between">
                                        @if ($event->inscription)
                                            <a class="btn btn-primary"
                                                href="{{ route('evento', $event->slug) }}">Inscribite <svg class="ml-1"
                                                    xmlns="http://www.w3.org/2000/svg" width="8.248" height="14.367"
                                                    viewBox="0 0 8.248 14.367">
                                                    <g id="next_1_" data-name="next (1)"
                                                        transform="translate(-60.438 -1.439)">
                                                        <g id="Grupo_475" data-name="Grupo 475"
                                                            transform="translate(61 2)">
                                                            <path id="Trazado_343" data-name="Trazado 343"
                                                                d="M124.777,6.288,118.622.151a.516.516,0,0,0-.728.73l5.788,5.772-5.788,5.772a.516.516,0,0,0,.729.73l6.154-6.137a.516.516,0,0,0,0-.73Z"
                                                                transform="translate(-117.742 0)" fill="#fff"
                                                                stroke="#fff" stroke-width="1" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </a>
                                        @else
                                            <a class="btn btn-outline-secondary rounded-circle"
                                                href="{{ route('evento', $event->slug) }}"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="15.056" height="14.674"
                                                    viewBox="0 0 15.056 14.674">
                                                    <path id="Icon_awesome-arrow-left" data-name="Icon awesome-arrow-left"
                                                        d="M6.4,16.339l.746.746a.8.8,0,0,0,1.139,0l6.532-6.529a.8.8,0,0,0,0-1.139L8.283,2.884a.8.8,0,0,0-1.139,0L6.4,3.63a.807.807,0,0,0,.013,1.153L10.46,8.64H.8A.8.8,0,0,0,0,9.447v1.075a.8.8,0,0,0,.806.806H10.46L6.411,15.186A.8.8,0,0,0,6.4,16.339Z"
                                                        transform="translate(0.004 -2.647)" fill="currentColor" />
                                                </svg>
                                            </a>
                                        @endif
                                        @if (isset($event->host))
                                            <p class="text-rosa-oscuro ml-md-3 m-0">Organiza: {{ $event->host }} </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            </div>

            </div>

            </div>
        </section>-->

        <!-- Carousel de Marcas -->
        <section class="container pt-5 my-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Instituciones a las que he acompañado</h3>
                    <img src="{{ asset('img/separador.svg') }}" class="separador-ondas mx-auto" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="brandsCarousel" class="carousel slide d-none d-md-block" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item py-5 active">
                                <div class="row align-items-center">
                                    <div class="col-4 p-0 text-center"><img src="{{ asset('img/tye-marcas-1.png') }}"
                                            alt=""></div>
                                    <div class="col-4 p-0 text-center"><img src="{{ asset('img/tye-marcas-2.png') }}"
                                            alt=""></div>
                                    <div class="col-4 p-0 text-center"><img src="{{ asset('img/tye-marcas-3.png') }}"
                                            alt=""></div>
                                </div>
                            </div>
                            <div class="carousel-item py-5">
                                <div class="row align-items-center">
                                    <div class="col-4 p-0 text-center"><img src="{{ asset('img/tye-marcas-4.png') }}"
                                            alt=""></div>
                                    <div class="col-4 p-0 text-center"><img src="{{ asset('img/tye-marcas-5.png') }}"
                                            alt=""></div>
                                    <div class="col-4 p-0 text-center"><img src="{{ asset('img/tye-marcas-6.png') }}"
                                            alt=""></div>
                                </div>
                            </div>
                            <div class="carousel-item py-5">
                                <div class="row align-items-center">
                                    <div class="col-4 p-0 text-center"><img src="{{ asset('img/cosquin.png') }}"
                                            alt=""></div>
                                    <div class="col-4 p-0 text-center"><img src="{{ asset('img/tye-marcas-8.png') }}"
                                            alt=""></div>
                                    <div class="col-4 p-0 text-center"><img src="{{ asset('img/tye-marcas-9.png') }}"
                                            alt=""></div>
                                </div>
                            </div>
                            <div class="carousel-item py-5">
                                <div class="row align-items-center">
                                    <div class="col-4 p-0 text-center"><img src="{{ asset('img/tye-marcas-10.png') }}"
                                            alt=""></div>
                                    <div class="col-4 p-0 text-center"><img src="{{ asset('img/ibanez.png') }}"
                                            alt=""></div>
                                    <div class="col-4 p-0 text-center"><img src="" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#brandsCarousel" role="button" data-slide="prev">
                            <div><svg xmlns="http://www.w3.org/2000/svg" width="14.753" height="26.388"
                                    viewBox="0 0 14.753 26.388">
                                    <g id="next_1_" data-name="next (1)" transform="translate(0.5 0.59)">
                                        <g id="Grupo_475" data-name="Grupo 475" transform="translate(0 0)">
                                            <path id="Trazado_343" data-name="Trazado 343"
                                                d="M118.03,11.955,129.732.286a.981.981,0,1,1,1.385,1.389l-11,10.975,11.005,10.975a.981.981,0,0,1-1.385,1.389l-11.7-11.669a.98.98,0,0,1,0-1.389Z"
                                                transform="translate(-117.742 0)" fill="#e67161" stroke="#e67161"
                                                stroke-width="1" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </a>
                        <a class="carousel-control-next" href="#brandsCarousel" role="button" data-slide="next">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.753" height="26.388"
                                    viewBox="0 0 14.753 26.388">
                                    <g id="next_1_" data-name="next (1)" transform="translate(-117.153 0.589)">
                                        <g id="Grupo_475" data-name="Grupo 475" transform="translate(117.742 0)">
                                            <path id="Trazado_343" data-name="Trazado 343"
                                                d="M131.117,11.955,119.416.286a.981.981,0,1,0-1.385,1.389l11,10.975L118.03,23.624a.981.981,0,0,0,1.385,1.389l11.7-11.669a.98.98,0,0,0,0-1.389Z"
                                                transform="translate(-117.742 0)" fill="#e67161" stroke="#e67161"
                                                stroke-width="1" />
                                        </g>
                                    </g>
                                </svg>

                            </div>
                        </a>
                    </div>

                    <div id="brandsCarouselMob" class="carousel slide d-md-none" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item py-5 active">
                                <div class="row align-items-center">
                                    <div class="col-12 p-0 text-center"><img src="{{ asset('img/tye-marcas-1.png') }}"
                                            alt=""></div>
                                </div>
                            </div>
                            <div class="carousel-item py-5">
                                <div class="row align-items-center">
                                    <div class="col-12 p-0 text-center"><img src="{{ asset('img/tye-marcas-2.png') }}"
                                            alt=""></div>
                                </div>
                            </div>
                            <div class="carousel-item py-5">
                                <div class="row align-items-center">
                                    <div class="col-12 p-0 text-center"><img src="{{ asset('img/tye-marcas-3.png') }}"
                                            alt=""></div>
                                </div>
                            </div>
                            <div class="carousel-item py-5">
                                <div class="row align-items-center">
                                    <div class="col-12 p-0 text-center"><img src="{{ asset('img/tye-marcas-4.png') }}"
                                            alt=""></div>
                                </div>
                            </div>
                            <div class="carousel-item py-5">
                                <div class="row align-items-center">
                                    <div class="col-12 p-0 text-center"><img src="{{ asset('img/tye-marcas-5.png') }}"
                                            alt=""></div>
                                </div>
                            </div>
                            <div class="carousel-item py-5">
                                <div class="row align-items-center">
                                    <div class="col-12 p-0 text-center"><img src="{{ asset('img/tye-marcas-6.png') }}"
                                            alt=""></div>
                                </div>
                            </div>
                            <div class="carousel-item py-5">
                                <div class="row align-items-center">
                                    <div class="col-12 p-0 text-center"><img src="{{ asset('img/cosquin.png') }}"
                                            alt=""></div>
                                </div>
                            </div>
                            <div class="carousel-item py-5">
                                <div class="row align-items-center">
                                    <div class="col-12 p-0 text-center"><img src="{{ asset('img/tye-marcas-8.png') }}"
                                            alt=""></div>
                                </div>
                            </div>
                            <div class="carousel-item py-5">
                                <div class="row align-items-center">
                                    <div class="col-12 p-0 text-center"><img src="{{ asset('img/tye-marcas-9.png') }}"
                                            alt=""></div>
                                </div>
                            </div>
                            <div class="carousel-item py-5">
                                <div class="row align-items-center">
                                    <div class="col-12 p-0 text-center"><img src="{{ asset('img/tye-marcas-10.png') }}"
                                            alt=""></div>
                                </div>
                            </div>
                            <div class="carousel-item py-5">
                                <div class="row align-items-center">
                                    <div class="col-12 p-0 text-center"><img src="{{ asset('img/ibanez.png') }}"
                                            alt=""></div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#brandsCarousel" role="button" data-slide="prev">
                            <div><svg xmlns="http://www.w3.org/2000/svg" width="14.753" height="26.388"
                                    viewBox="0 0 14.753 26.388">
                                    <g id="next_1_" data-name="next (1)" transform="translate(0.5 0.59)">
                                        <g id="Grupo_475" data-name="Grupo 475" transform="translate(0 0)">
                                            <path id="Trazado_343" data-name="Trazado 343"
                                                d="M118.03,11.955,129.732.286a.981.981,0,1,1,1.385,1.389l-11,10.975,11.005,10.975a.981.981,0,0,1-1.385,1.389l-11.7-11.669a.98.98,0,0,1,0-1.389Z"
                                                transform="translate(-117.742 0)" fill="#e67161" stroke="#e67161"
                                                stroke-width="1" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </a>
                        <a class="carousel-control-next" href="#brandsCarousel" role="button" data-slide="next">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.753" height="26.388"
                                    viewBox="0 0 14.753 26.388">
                                    <g id="next_1_" data-name="next (1)" transform="translate(-117.153 0.589)">
                                        <g id="Grupo_475" data-name="Grupo 475" transform="translate(117.742 0)">
                                            <path id="Trazado_343" data-name="Trazado 343"
                                                d="M131.117,11.955,119.416.286a.981.981,0,1,0-1.385,1.389l11,10.975L118.03,23.624a.981.981,0,0,0,1.385,1.389l11.7-11.669a.98.98,0,0,0,0-1.389Z"
                                                transform="translate(-117.742 0)" fill="#e67161" stroke="#e67161"
                                                stroke-width="1" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <div class="bg-crema-suave contenedor-form-home py-5" id="contacto">
            <!-- Formulario de Contacto -->
    <aside id="contacto" class="bg-crema-suave p-md-5">
        <div class="container bg-white p-5 rounded shadow">
            <div class="row p-3">
                <div class="col mb-2 text-center">
                    <h3 class="text-seconday text mb-3">Contacta conmigo, <br>me encantará leerte.</h3>
                    <img src="{{ asset('/img/separador.svg') }}" class="separador-ondas mx-auto mb-3"
                        alt="">
                    <p>Si estas por aquí es porque hay algo que quieres decirme o preguntarme.</p>
                    <br>
                    <div class="social-group d-flex">

                        <a href="mailto:contacto@marianpd.com" target="_blank" class="btn-social-group">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                class="bi bi-envelope" viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" fill="#ffffff" />
                            </svg>
                        </a>

                        <!--<a href="https://twitter.com/Marianaapd?s=08" target="_blank" class="btn-social-group">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-twitter" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"
                                    fill="#ffffff" />
                            </svg>
                        </a>-->

                        <a href="https://www.instagram.com/mariann.pd/?hl=es-la" target="_blank"
                            class="btn-social-group">
                            <svg id="Componente_4_15" data-name="Componente 4 – 15" xmlns="http://www.w3.org/2000/svg"
                                width="42" height="42" viewBox="0 0 42 42">
                                <circle id="Elipse_3" data-name="Elipse 3" cx="21" cy="21"
                                    r="21" fill="#f8337a" opacity="0" />
                                <path id="instagram"
                                    d="M14.871,18.656H3.562A3.588,3.588,0,0,1,0,15.051V3.605A3.588,3.588,0,0,1,3.562,0H14.87a3.589,3.589,0,0,1,3.564,3.605V15.051A3.588,3.588,0,0,1,14.871,18.656ZM1.794,7.414v7.637a1.778,1.778,0,0,0,1.766,1.786H14.87a1.778,1.778,0,0,0,1.766-1.786V7.414H13.883a5.039,5.039,0,1,1-9.337,0ZM9.217,6.044A3.25,3.25,0,0,0,6.586,7.413a3.3,3.3,0,0,0,.337,4.235,3.2,3.2,0,0,0,2.293.963,3.284,3.284,0,0,0,0-6.567ZM16.3,2.149h-.407l-2.719.009.011,3.163,3.114-.01V2.149Z"
                                    transform="translate(12 12)" fill="#ffffff" />
                            </svg>
                        </a>

                        <a class="btn-social-group" href="https://www.linkedin.com/in/mariana-pacheco-d-aquila-ba537375/"
                            target="_blank"><svg class="text-primary" id="Componente_4_16" data-name="Componente 4 – 16"
                                xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42">
                                <circle id="Elipse_3" data-name="Elipse 3" cx="21" cy="21"
                                    r="21" fill="#f8337a" opacity="0" />
                                <path id="Icon_awesome-linkedin-in" data-name="Icon awesome-linkedin-in"
                                    d="M4.335,19.367H.32V6.437H4.335ZM2.325,4.673A2.336,2.336,0,1,1,4.651,2.326,2.345,2.345,0,0,1,2.325,4.673ZM19.363,19.367H15.356V13.073c0-1.5-.03-3.424-2.088-3.424-2.088,0-2.407,1.63-2.407,3.316v6.4H6.85V6.437H10.7V8.2h.056a4.219,4.219,0,0,1,3.8-2.088c4.064,0,4.811,2.676,4.811,6.152v7.1Z"
                                    transform="translate(11.066 11.066)" fill="#ffffff" />
                            </svg>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </aside>
        </div>
    </article>
@endsection

@section('scripts')
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript">
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            loop: true,
            margin: 10,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        });
        // Go to the next item
        $('.customNextBtn').click(function() {
            owl.trigger('next.owl.carousel');
        })
        // Go to the previous item
        $('.customPrevBtn').click(function() {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owl.trigger('prev.owl.carousel', [300]);
        });

        /* Counter */
        (function($) {
            $.fn.countTo = function(options) {
                options = options || {};

                return $(this).each(function() {
                    // set options for current element
                    var settings = $.extend({}, $.fn.countTo.defaults, {
                        from: $(this).data('from'),
                        to: $(this).data('to'),
                        speed: $(this).data('speed'),
                        refreshInterval: $(this).data('refresh-interval'),
                        decimals: $(this).data('decimals')
                    }, options);

                    // how many times to update the value, and how much to increment the value on each update
                    var loops = Math.ceil(settings.speed / settings.refreshInterval),
                        increment = (settings.to - settings.from) / loops;

                    // references & variables that will change with each update
                    var self = this,
                        $self = $(this),
                        loopCount = 0,
                        value = settings.from,
                        data = $self.data('countTo') || {};

                    $self.data('countTo', data);

                    // if an existing interval can be found, clear it first
                    if (data.interval) {
                        clearInterval(data.interval);
                    }
                    data.interval = setInterval(updateTimer, settings.refreshInterval);

                    // initialize the element with the starting value
                    render(value);

                    function updateTimer() {
                        value += increment;
                        loopCount++;

                        render(value);

                        if (typeof(settings.onUpdate) == 'function') {
                            settings.onUpdate.call(self, value);
                        }

                        if (loopCount >= loops) {
                            // remove the interval
                            $self.removeData('countTo');
                            clearInterval(data.interval);
                            value = settings.to;

                            if (typeof(settings.onComplete) == 'function') {
                                settings.onComplete.call(self, value);
                            }
                        }
                    }

                    function render(value) {
                        var formattedValue = settings.formatter.call(self, value, settings);
                        $self.html(formattedValue);
                    }
                });
            };

            $.fn.countTo.defaults = {
                from: 0, // the number the element should start at
                to: 0, // the number the element should end at
                speed: 1000, // how long it should take to count between the target numbers
                refreshInterval: 100, // how often the element should be updated
                decimals: 0, // the number of decimal places to show
                formatter: formatter, // handler for formatting the value before rendering
                onUpdate: null, // callback method for every time the element is updated
                onComplete: null // callback method for when the element finishes updating
            };

            function formatter(value, settings) {
                return value.toFixed(settings.decimals);
            }
        }(jQuery));

        jQuery(function($) {
            // custom formatting example
            $('.count-number').data('countToOptions', {
                formatter: function(value, options) {
                    return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
                }
            });

            // start all the timers
            $('.timer').each(count);

            function count(options) {
                var $this = $(this);
                options = $.extend({}, options || {}, $this.data('countToOptions') || {});
                $this.countTo(options);
            }
        });
    </script>
@endsection
