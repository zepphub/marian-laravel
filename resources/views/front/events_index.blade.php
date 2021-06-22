@extends('layouts.main')

@section('head')
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
@endsection

@section('title')Talleres y Eventos - @endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>Talleres y Conferencias</h2>
        <nav class="" aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center bg-transparent text-marron-claro">
            <li class="breadcrumb-item text-marron-claro"><a class="text-marron-claro" href="{{ route('index') }}">Inicio</a></li>
            <li class="breadcrumb-item text-secondary active font-weight-bold" aria-current="page">Talleres y
              Conferencias</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>

  <div class="container my-5">
    <div class="row">
      <div class="col-md-7 pl-md-5">
        <h4 class="font-weight-bold titulo-home mb-4">
          Talleres y Conferencias
        </h4>
        <p class="my-4">
          Trabajar con marcas e instituciones de rubros, países y propósitos diferentes me ha llevado a conocer personas
          increíbles y lugares inolvidables. <br><br>

          Este es el principal motivo por el cual he decidido convertirme en creadora de experiencias especialmente
          pensadas para emprendedores, pequeños empresarios y profesionales de diversos sectores con visión de
          crecimiento constante. <br><br>

          Planifico detalladamente cada encuentro, pensando en la marca, empresa y/o institución que lo impulsa,
          evitando contenidos estándares y creando experiencias que se adapten a los objetivos del curso, taller y/o
          conferencia que deciden realizar.

        </p>
        <a href=""><button class="btn btn-primary mt-3">¡Quiero saber más! <svg class="ml-2"
              xmlns="http://www.w3.org/2000/svg" width="8.248" height="14.367" viewBox="0 0 8.248 14.367">
              <g id="next_1_" data-name="next (1)" transform="translate(-60.438 -1.439)">
                <g id="Grupo_475" data-name="Grupo 475" transform="translate(61 2)">
                  <path id="Trazado_343" data-name="Trazado 343"
                    d="M124.777,6.288,118.622.151a.516.516,0,0,0-.728.73l5.788,5.772-5.788,5.772a.516.516,0,0,0,.729.73l6.154-6.137a.516.516,0,0,0,0-.73Z"
                    transform="translate(-117.742 0)" fill="#fff" stroke="#fff" stroke-width="1" />
                </g>
              </g>
            </svg>
          </button></a>
      </div>
      <div class="col-md-5 mt-4 mt-md-0">
        <img class="w-100 img-fluid" src="{{ asset('img/talleres-y-eventos-img-1.png') }}" alt="">
      </div>
    </div>
  </div>

  <div class="d-flex align-items-center" id="tye-owl-carousel">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h4 class="text-white titulo-home">Temas sobre los cuales aporto contenido y valor</h4>
        </div>
      </div>
      <div class="row mt-5 position-relative">
        <button class="btn customPrevBtn p-0"><img src="{{ asset('img/prevBtn.svg') }}" alt=""></button>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <div
              class="item-carousel m-3 m-md-0 p-5 p-md-4 bg-white d-flex flex-column h-100 justify-content-center text-center">
              <img class="icon-owl-carousel mb-3" src="{{ asset('img/tye-owl-item-1.svg') }}" alt="">
              <h5>Marketing digital</h5>
            </div>
          </div>
          <div class="item">
            <div
              class="item-carousel m-3 m-md-0 p-5 p-md-4 bg-white d-flex flex-column h-100 justify-content-center text-center">
              <img class="icon-owl-carousel mb-3" src="{{ asset('img/tye-owl-item-2.svg') }}" alt="">
              <h5>Estrategias en el
                universo digital</h5>
            </div>
          </div>
          <div class="item">
            <div
              class="item-carousel m-3 m-md-0 p-5 p-md-4 bg-white d-flex flex-column h-100 justify-content-center text-center">
              <img class="icon-owl-carousel mb-3" src="{{ asset('img/tye-owl-item-3.svg') }}" alt="">
              <h5>Storytelling</h5>
            </div>
          </div>
          <div class="item">
            <div
              class="item-carousel m-3 m-md-0 p-5 p-md-4 bg-white d-flex flex-column h-100 justify-content-center text-center">
              <img class="icon-owl-carousel mb-3" src="{{ asset('img/tye-owl-item-4.svg') }}" alt="">
              <h5>Contenido con propósito</h5>
            </div>
          </div>
          <div class="item">
            <div
              class="item-carousel m-3 m-md-0 p-5 p-md-4 bg-white d-flex flex-column h-100 justify-content-center text-center">
              <img class="icon-owl-carousel mb-3" src="{{ asset('img/tye-owl-item-2.svg') }}" alt="">
              <h5>Uso estratégico de las Redes Sociales</h5>
            </div>
          </div>
          <div class="item">
            <div
              class="item-carousel m-3 m-md-0 p-5 p-md-4 bg-white d-flex flex-column h-100 justify-content-center text-center">
              <img class="icon-owl-carousel mb-3" src="{{ asset('img/tye-owl-item-5.svg') }}" alt="">
              <h5>Tu marca en Instagram</h5>
            </div>
          </div>
          <div class="item">
            <div
              class="item-carousel m-3 m-md-0 p-5 p-md-4 bg-white d-flex flex-column h-100 justify-content-center text-center">
              <img class="icon-owl-carousel mb-3" src="{{ asset('img/owl-carousel-item-6.svg') }}" alt="">
              <h5>Conceptualización y lanzamiento de campañas</h5>
            </div>
          </div>
          <div class="item">
            <div
              class="item-carousel m-3 m-md-0 p-5 p-md-4 bg-white d-flex flex-column h-100 justify-content-center text-center">
              <img class="icon-owl-carousel mb-3" src="{{ asset('img/tye-owl-item-6.svg') }}" alt="">
              <h5>Comunicación digital e integral</h5>
            </div>
          </div>
          <div class="item">
            <div
              class="item-carousel m-3 m-md-0 p-5 p-md-4 bg-white d-flex flex-column h-100 justify-content-center text-center">
              <img class="icon-owl-carousel mb-3" src="{{ asset('img/tye-owl-item-7.svg') }}" alt="">
              <h5>Esencia y valores de marca</h5>
            </div>
          </div>
          <div class="item">
            <div
              class="item-carousel m-3 m-md-0 p-5 p-md-4 bg-white d-flex flex-column h-100 justify-content-center text-center">
              <img class="icon-owl-carousel mb-3" src="{{ asset('img/tye-owl-item-8.svg') }}" alt="">
              <h5>Motivación para emprendedoras</h5>
            </div>
          </div>
          <div class="item">
            <div
              class="item-carousel m-3 m-md-0 p-5 p-md-4 bg-white d-flex flex-column h-100 justify-content-center text-center">
              <img class="icon-owl-carousel mb-3" src="{{ asset('img/tye-owl-item-9.svg') }}" alt="">
              <h5>Creación de proyectos y marcas que enamoren</h5>
            </div>
          </div>
        </div>
        <button class="btn customNextBtn p-0"><img src="{{ asset('img/nextBtn.svg') }}" alt=""></button>
      </div>
    </div>
  </div>

  <div class="petalos-right">
    <div class="container py-5">

      <div class="row">
        <div class="col-md-12 text-center">
          <h4 class="titulo-home">Próximos eventos</h4>
          <img src="{{ asset('img/separador-svg.svg') }}" alt="">
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div id="carouselTYE" class="carousel slide d-none d-md-block" data-ride="carousel">
            <ol class="carousel-indicators">
            @foreach ($events as $event)
              @if ($loop->odd)
              <li data-target="#carouselTYE" data-slide-to="{{ ($loop->iteration - 1) / 2 }}" @if ($loop->first) class="active" @endif ></li>
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
                          <img class="h-100 img-fluid" style="max-width: unset;" src="{{ asset('img/tye-card-eventos.jpg') }}" alt="...">
                        </div>
                        <div class="col-md-7">
                          <div class="card-body">
                            <div>
                              <h5 class="font-weight-normal"><svg xmlns="http://www.w3.org/2000/svg" width="12.567"
                                  height="11.601" viewBox="0 0 12.567 11.601">
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
                                {{ $event->dateFormated() }} | {{ $event->timeFormated() }} hs</h5>
                              <h5 class="font-weight-normal"><svg xmlns="http://www.w3.org/2000/svg" width="7.943"
                                  height="11.911" viewBox="0 0 7.943 11.911">
                                  <g id="Icon_feather-mic" data-name="Icon feather-mic" transform="translate(-7 -1)">
                                    <path id="Trazado_5" data-name="Trazado 5"
                                      d="M14.988,1.5A1.488,1.488,0,0,0,13.5,2.988V6.955a1.488,1.488,0,0,0,2.976,0V2.988A1.488,1.488,0,0,0,14.988,1.5Z"
                                      transform="translate(-4.016 0)" fill="none" stroke="#b46063" stroke-linecap="round"
                                      stroke-linejoin="round" stroke-width="1" />
                                    <path id="Trazado_6" data-name="Trazado 6"
                                      d="M14.443,15v.992a3.472,3.472,0,0,1-6.943,0V15" transform="translate(0 -9.036)"
                                      fill="none" stroke="#b46063" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="1" />
                                    <path id="Trazado_7" data-name="Trazado 7" d="M18,28.5v1.984"
                                      transform="translate(-7.028 -18.073)" fill="none" stroke="#b46063"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                    <path id="Trazado_8" data-name="Trazado 8" d="M12,34.5h3.968"
                                      transform="translate(-3.012 -22.089)" fill="none" stroke="#b46063"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                  </g>
                                </svg>
                                {{ $event->lecturer }}</h5>
                            </div>
                            <h5 class="card-title text-marron-claro titulo-home">{{ $event->title }}</h5>
                            <p class="card-text">{{ $event->description }}</p>
                            <div class="d-md-flex align-items-baseline justify-content-between">
                              @if ($event->inscription)
                              <a class="btn btn-primary" href="{{ route('evento', $event->slug) }}">Inscribite <svg class="ml-1"
                                  xmlns="http://www.w3.org/2000/svg" width="8.248" height="14.367"
                                  viewBox="0 0 8.248 14.367">
                                  <g id="next_1_" data-name="next (1)" transform="translate(-60.438 -1.439)">
                                    <g id="Grupo_475" data-name="Grupo 475" transform="translate(61 2)">
                                      <path id="Trazado_343" data-name="Trazado 343"
                                        d="M124.777,6.288,118.622.151a.516.516,0,0,0-.728.73l5.788,5.772-5.788,5.772a.516.516,0,0,0,.729.73l6.154-6.137a.516.516,0,0,0,0-.73Z"
                                        transform="translate(-117.742 0)" fill="#fff" stroke="#fff" stroke-width="1" />
                                    </g>
                                  </g>
                                </svg>
                              </a>    
                              @else
                              <a class="btn btn-outline-secondary rounded-circle" href="{{ route('evento', $event->slug) }}"><svg
                                xmlns="http://www.w3.org/2000/svg" width="15.056" height="14.674"
                                viewBox="0 0 15.056 14.674">
                                <path id="Icon_awesome-arrow-left" data-name="Icon awesome-arrow-left"
                                  d="M6.4,16.339l.746.746a.8.8,0,0,0,1.139,0l6.532-6.529a.8.8,0,0,0,0-1.139L8.283,2.884a.8.8,0,0,0-1.139,0L6.4,3.63a.807.807,0,0,0,.013,1.153L10.46,8.64H.8A.8.8,0,0,0,0,9.447v1.075a.8.8,0,0,0,.806.806H10.46L6.411,15.186A.8.8,0,0,0,6.4,16.339Z"
                                  transform="translate(0.004 -2.647)" fill="currentColor" />
                              </svg>
                              </a>
                              @endif
                              @if (isset($event->host))
                              <p class="text-rosa-oscuro m-0">Organiza: {{$event->host}} </p>
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
              <li data-target="#carouselTYE_mobile" data-slide-to="{{ $loop->index }}" @if ($loop->first) class="active" @endif ></li>
              @endforeach
            </ol>
            <div class="carousel-inner" role="listbox">
            @foreach ($events as $event)
              <div class="carousel-item py-5 @if ($loop->first) active @endif">
                <div class="card border-0 p-4">
                  <img src="{{ asset('img/tye-card-eventos.jpg') }}" class="card-img-top' alt="...">
                  <div class="card-body">
                    <h5 class="font-weight-normal">
                      <svg xmlns="http://www.w3.org/2000/svg" width="12.567"
                        height="11.601" viewBox="0 0 12.567 11.601">
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
                        <g id="Icon_feather-mic" data-name="Icon feather-mic" transform="translate(-7 -1)">
                          <path id="Trazado_5" data-name="Trazado 5"
                            d="M14.988,1.5A1.488,1.488,0,0,0,13.5,2.988V6.955a1.488,1.488,0,0,0,2.976,0V2.988A1.488,1.488,0,0,0,14.988,1.5Z"
                            transform="translate(-4.016 0)" fill="none" stroke="#b46063" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="1" />
                          <path id="Trazado_6" data-name="Trazado 6" d="M14.443,15v.992a3.472,3.472,0,0,1-6.943,0V15"
                            transform="translate(0 -9.036)" fill="none" stroke="#b46063" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="1" />
                          <path id="Trazado_7" data-name="Trazado 7" d="M18,28.5v1.984"
                            transform="translate(-7.028 -18.073)" fill="none" stroke="#b46063" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="1" />
                          <path id="Trazado_8" data-name="Trazado 8" d="M12,34.5h3.968"
                            transform="translate(-3.012 -22.089)" fill="none" stroke="#b46063" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="1" />
                        </g>
                      </svg>
                      {{ $event->lecturer }}
                    </h5>
                    <h5 class="card-title text-marron-claro titulo-home">{{ $event->title }}</h5>
                    <p class="card-text">{{ $event->description }}</p>

                    <div class="d-md-flex align-items-baseline justify-content-between">
                      @if ($event->inscription)
                      <a class="btn btn-primary" href="{{ route('evento', $event->slug) }}">Inscribite <svg class="ml-1"
                          xmlns="http://www.w3.org/2000/svg" width="8.248" height="14.367"
                          viewBox="0 0 8.248 14.367">
                          <g id="next_1_" data-name="next (1)" transform="translate(-60.438 -1.439)">
                            <g id="Grupo_475" data-name="Grupo 475" transform="translate(61 2)">
                              <path id="Trazado_343" data-name="Trazado 343"
                                d="M124.777,6.288,118.622.151a.516.516,0,0,0-.728.73l5.788,5.772-5.788,5.772a.516.516,0,0,0,.729.73l6.154-6.137a.516.516,0,0,0,0-.73Z"
                                transform="translate(-117.742 0)" fill="#fff" stroke="#fff" stroke-width="1" />
                            </g>
                          </g>
                        </svg>
                      </a>    
                      @else
                      <a class="btn btn-outline-secondary rounded-circle" href="{{ route('evento', $event->slug) }}"><svg
                        xmlns="http://www.w3.org/2000/svg" width="15.056" height="14.674"
                        viewBox="0 0 15.056 14.674">
                        <path id="Icon_awesome-arrow-left" data-name="Icon awesome-arrow-left"
                          d="M6.4,16.339l.746.746a.8.8,0,0,0,1.139,0l6.532-6.529a.8.8,0,0,0,0-1.139L8.283,2.884a.8.8,0,0,0-1.139,0L6.4,3.63a.807.807,0,0,0,.013,1.153L10.46,8.64H.8A.8.8,0,0,0,0,9.447v1.075a.8.8,0,0,0,.806.806H10.46L6.411,15.186A.8.8,0,0,0,6.4,16.339Z"
                          transform="translate(0.004 -2.647)" fill="currentColor" />
                      </svg>
                      </a>
                      @endif
                      @if (isset($event->host))
                      <p class="text-rosa-oscuro m-0">Organiza: {{$event->host}} </p>
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
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-4 d-flex align-items-center">
        <h4 class="font-weight-bold titulo-home">
          Marcas a las que he
          acompañado
        </h4>
      </div>
      <div class="col-md-8">
        <div id="brandsCarousel" class="carousel slide d-none d-md-block" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item py-5 active">
              <div class="row align-items-center">
                <div class="col-4 p-0 text-center"><img src="{{ asset('img/tye-marcas-1.png') }}" alt=""></div>
                <div class="col-4 p-0 text-center"><img src="{{ asset('img/tye-marcas-2.png') }}" alt=""></div>
                <div class="col-4 p-0 text-center"><img src="{{ asset('img/tye-marcas-3.png') }}" alt=""></div>
              </div>
            </div>
            <div class="carousel-item py-5">
              <div class="row align-items-center">
                <div class="col-4 p-0 text-center"><img src="{{ asset('img/tye-marcas-4.png') }}" alt=""></div>
                <div class="col-4 p-0 text-center"><img src="{{ asset('img/tye-marcas-5.png') }}" alt=""></div>
                <div class="col-4 p-0 text-center"><img src="{{ asset('img/tye-marcas-6.png') }}" alt=""></div>
              </div>
            </div>
            <div class="carousel-item py-5">
              <div class="row align-items-center">
                <div class="col-4 p-0 text-center"><img src="{{ asset('img/tye-marcas-7.png') }}" alt=""></div>
                <div class="col-4 p-0 text-center"><img src="{{ asset('img/tye-marcas-8.png') }}" alt=""></div>
                <div class="col-4 p-0 text-center"><img src="{{ asset('img/tye-marcas-9.png') }}" alt=""></div>
              </div>
            </div>
            <div class="carousel-item py-5">
              <div class="row align-items-center">
                <div class="col-4 p-0 text-center"><img src="{{ asset('img/tye-marcas-10.png') }}" alt=""></div>
                <div class="col-4 p-0 text-center"><img src="" alt=""></div>
                <div class="col-4 p-0 text-center"><img src="" alt=""></div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#brandsCarousel" role="button" data-slide="prev">
            <div><svg xmlns="http://www.w3.org/2000/svg" width="14.753" height="26.388" viewBox="0 0 14.753 26.388">
                <g id="next_1_" data-name="next (1)" transform="translate(0.5 0.59)">
                  <g id="Grupo_475" data-name="Grupo 475" transform="translate(0 0)">
                    <path id="Trazado_343" data-name="Trazado 343"
                      d="M118.03,11.955,129.732.286a.981.981,0,1,1,1.385,1.389l-11,10.975,11.005,10.975a.981.981,0,0,1-1.385,1.389l-11.7-11.669a.98.98,0,0,1,0-1.389Z"
                      transform="translate(-117.742 0)" fill="#e67161" stroke="#e67161" stroke-width="1" />
                  </g>
                </g>
              </svg>
            </div>
          </a>
          <a class="carousel-control-next" href="#brandsCarousel" role="button" data-slide="next">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="14.753" height="26.388" viewBox="0 0 14.753 26.388">
                <g id="next_1_" data-name="next (1)" transform="translate(-117.153 0.589)">
                  <g id="Grupo_475" data-name="Grupo 475" transform="translate(117.742 0)">
                    <path id="Trazado_343" data-name="Trazado 343"
                      d="M131.117,11.955,119.416.286a.981.981,0,1,0-1.385,1.389l11,10.975L118.03,23.624a.981.981,0,0,0,1.385,1.389l11.7-11.669a.98.98,0,0,0,0-1.389Z"
                      transform="translate(-117.742 0)" fill="#e67161" stroke="#e67161" stroke-width="1" />
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
                <div class="col-12 p-0 text-center"><img src="{{ asset('img/tye-marcas-1.png') }}" alt=""></div>               
              </div>
            </div>
            <div class="carousel-item py-5">
              <div class="row align-items-center">
                <div class="col-12 p-0 text-center"><img src="{{ asset('img/tye-marcas-2.png') }}" alt=""></div>
              </div>
            </div>
            <div class="carousel-item py-5">
              <div class="row align-items-center">
                <div class="col-12 p-0 text-center"><img src="{{ asset('img/tye-marcas-3.png') }}" alt=""></div>
              </div>
            </div>
            <div class="carousel-item py-5">
              <div class="row align-items-center">
                <div class="col-12 p-0 text-center"><img src="{{ asset('img/tye-marcas-4.png') }}" alt=""></div>
              </div>
            </div>
            <div class="carousel-item py-5">
              <div class="row align-items-center">
                <div class="col-12 p-0 text-center"><img src="{{ asset('img/tye-marcas-5.png') }}" alt=""></div>
              </div>
            </div>
            <div class="carousel-item py-5">
              <div class="row align-items-center">
                <div class="col-12 p-0 text-center"><img src="{{ asset('img/tye-marcas-6.png') }}" alt=""></div>
              </div>
            </div>
            <div class="carousel-item py-5">
              <div class="row align-items-center">
                <div class="col-12 p-0 text-center"><img src="{{ asset('img/tye-marcas-7.png') }}" alt=""></div>
              </div>
            </div>
            <div class="carousel-item py-5">
              <div class="row align-items-center">
                <div class="col-12 p-0 text-center"><img src="{{ asset('img/tye-marcas-8.png') }}" alt=""></div>
              </div>
            </div>
            <div class="carousel-item py-5">
              <div class="row align-items-center">
                <div class="col-12 p-0 text-center"><img src="{{ asset('img/tye-marcas-9.png') }}" alt=""></div>
              </div>
            </div>
            <div class="carousel-item py-5">
              <div class="row align-items-center">
                <div class="col-12 p-0 text-center"><img src="{{ asset('img/tye-marcas-10.png') }}" alt=""></div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#brandsCarousel" role="button" data-slide="prev">
            <div><svg xmlns="http://www.w3.org/2000/svg" width="14.753" height="26.388" viewBox="0 0 14.753 26.388">
                <g id="next_1_" data-name="next (1)" transform="translate(0.5 0.59)">
                  <g id="Grupo_475" data-name="Grupo 475" transform="translate(0 0)">
                    <path id="Trazado_343" data-name="Trazado 343"
                      d="M118.03,11.955,129.732.286a.981.981,0,1,1,1.385,1.389l-11,10.975,11.005,10.975a.981.981,0,0,1-1.385,1.389l-11.7-11.669a.98.98,0,0,1,0-1.389Z"
                      transform="translate(-117.742 0)" fill="#e67161" stroke="#e67161" stroke-width="1" />
                  </g>
                </g>
              </svg>
            </div>
          </a>
          <a class="carousel-control-next" href="#brandsCarousel" role="button" data-slide="next">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="14.753" height="26.388" viewBox="0 0 14.753 26.388">
                <g id="next_1_" data-name="next (1)" transform="translate(-117.153 0.589)">
                  <g id="Grupo_475" data-name="Grupo 475" transform="translate(117.742 0)">
                    <path id="Trazado_343" data-name="Trazado 343"
                      d="M131.117,11.955,119.416.286a.981.981,0,1,0-1.385,1.389l11,10.975L118.03,23.624a.981.981,0,0,0,1.385,1.389l11.7-11.669a.98.98,0,0,0,0-1.389Z"
                      transform="translate(-117.742 0)" fill="#e67161" stroke="#e67161" stroke-width="1" />
                  </g>
                </g>
              </svg>

            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="m-0 p-0"><img style="margin-bottom: -12px !important;" class="img-fluid w-100"
      src="{{ asset('img/separador-superior-seccion-svg.svg') }}" alt=""></div>
  <div class="bg-crema-suave contenedor-form-home py-5">
    <div class="container bg-white p-4 rounded-lg">
      <div class="row">
        <div class="col-md-5">
          <div class="bg-textura-form rounded-lg p-md-4 p-3">
          <p class="text-white mt-3">Si te gustaría que sea parte de tu evento</p>
            <h4 class="titulo-home text-medium text-white">¡Charlemos!</h4>
            <img src="{{ asset('img/separador-secondary-svg.svg') }}" alt="">
            
            <div>
              <ul class="list-group">
                <li class="list-group-item border-0 bg-transparent pl-md-0 py-1">
                  <div class="d-flex text-white align-items-center"><svg class="mr-2 text-secondary"
                      xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-envelope" viewBox="0 0 16 16">
                      <path
                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
                    </svg>contacto@marianpd.com</div>
                </li>
                <li class="list-group-item border-0 bg-transparent pl-md-0 py-1">
                  <div class="d-flex text-white align-items-center"><svg class="mr-2 text-secondary"
                      xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-whatsapp" viewBox="0 0 16 16">
                      <path
                        d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                    </svg>+549- 3537-536010</div>
                </li>
              </ul>
            </div>
            <div class="social-group mt-5">
              <div class="d-flex">
                <div class="list-group-item border-0 bg-transparent p-0">
                  <div class="btn-social-group d-flex align-items-center justify-content-center">
                    <a class="" href=""><svg id="Componente_2_9" data-name="Componente 2 – 9"
                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42">
                        <circle id="Elipse_1" data-name="Elipse 1" cx="21" cy="21" r="21" fill="#f8337a" opacity="0" />
                        <path id="Twitter"
                          d="M1230.4,1140.522l-.049-.033a4.649,4.649,0,0,0-3.576-1.372l-.049-.1.033-.017a4.119,4.119,0,0,0,2.2-.909c.065-.264-.016-.413-.294-.446a6.693,6.693,0,0,0-1.715.43c.653-.43.9-.727.751-.876a3.284,3.284,0,0,0-2.058,1.008c.261-.463.376-.727.31-.76a4.761,4.761,0,0,0-.914.777,14.852,14.852,0,0,0-1.339,1.735l-.016.033a15.606,15.606,0,0,0-1.845,4.347l-.131.116-.033.016a6.938,6.938,0,0,0-1.911-1.669,21.26,21.26,0,0,0-3.135-1.686,26.016,26.016,0,0,0-3.984-1.7,4.065,4.065,0,0,0,2.188,3.636v.016a5.188,5.188,0,0,0-1.5.231c.1,1.421,1.094,2.4,2.972,2.925l-.016.033a2.1,2.1,0,0,0-1.812.76,3.276,3.276,0,0,0,3.3,1.768,2.337,2.337,0,0,0-.719.529,1.128,1.128,0,0,0-.294,1.091,1.778,1.778,0,0,0,1.845.859l.049.066-.016.033a6.806,6.806,0,0,1-5.618,2.2l-.033.017a7.116,7.116,0,0,1-4.328-1.95,13.467,13.467,0,0,0,6.189,4.942,14.5,14.5,0,0,0,8.786.215h.049a13.987,13.987,0,0,0,7.234-5.123,10.231,10.231,0,0,0,1.715-3.867,3.526,3.526,0,0,0,3.217-1.305l-.016-.033a6.256,6.256,0,0,1-2.89-.166v-.165q2.351-.273,2.792-1.537a4.3,4.3,0,0,1-3.233.033,7.164,7.164,0,0,0-2.107-4.1"
                          transform="translate(-1201.66 -1126.2)" fill="#fff" />
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="list-group-item border-0 bg-transparent p-0">
                  <div class="btn-social-group d-flex align-items-center justify-content-center">
                    <a class="" href=""><svg id="Componente_3_9" data-name="Componente 3 – 9"
                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42">
                        <circle id="Elipse_2" data-name="Elipse 2" cx="21" cy="21" r="21" fill="#f8337a" opacity="0" />
                        <path id="Facebook"
                          d="M1254.242,1146.535h-2.584v9.32h-3.829v-9.32h-1.82v-3.294h1.82v-2.131a3.616,3.616,0,0,1,3.864-3.91l2.837.011v3.2h-2.059a.784.784,0,0,0-.812.9v1.936h2.917Z"
                          transform="translate(-1229.01 -1125.2)" fill="#fff" />
                      </svg></a>
                  </div>
                </div>
                <div class="list-group-item border-0 bg-transparent p-0">
                  <div class="btn-social-group d-flex align-items-center justify-content-center">
                    <a class="" href=""><svg id="Componente_4_15" data-name="Componente 4 – 15"
                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42">
                        <circle id="Elipse_3" data-name="Elipse 3" cx="21" cy="21" r="21" fill="#f8337a" opacity="0" />
                        <path id="instagram"
                          d="M14.871,18.656H3.562A3.588,3.588,0,0,1,0,15.051V3.605A3.588,3.588,0,0,1,3.562,0H14.87a3.589,3.589,0,0,1,3.564,3.605V15.051A3.588,3.588,0,0,1,14.871,18.656ZM1.794,7.414v7.637a1.778,1.778,0,0,0,1.766,1.786H14.87a1.778,1.778,0,0,0,1.766-1.786V7.414H13.883a5.039,5.039,0,1,1-9.337,0ZM9.217,6.044A3.25,3.25,0,0,0,6.586,7.413a3.3,3.3,0,0,0,.337,4.235,3.2,3.2,0,0,0,2.293.963,3.284,3.284,0,0,0,0-6.567ZM16.3,2.149h-.407l-2.719.009.011,3.163,3.114-.01V2.149Z"
                          transform="translate(12 12)" fill="#fff" />
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="list-group-item border-0 bg-transparent p-0">
                  <div class="btn-social-group d-flex align-items-center justify-content-center">
                    <a class="" href=""><svg id="Componente_4_16" data-name="Componente 4 – 16"
                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42">
                        <circle id="Elipse_3" data-name="Elipse 3" cx="21" cy="21" r="21" fill="#f8337a" opacity="0" />
                        <path id="Icon_awesome-linkedin-in" data-name="Icon awesome-linkedin-in"
                          d="M4.335,19.367H.32V6.437H4.335ZM2.325,4.673A2.336,2.336,0,1,1,4.651,2.326,2.345,2.345,0,0,1,2.325,4.673ZM19.363,19.367H15.356V13.073c0-1.5-.03-3.424-2.088-3.424-2.088,0-2.407,1.63-2.407,3.316v6.4H6.85V6.437H10.7V8.2h.056a4.219,4.219,0,0,1,3.8-2.088c4.064,0,4.811,2.676,4.811,6.152v7.1Z"
                          transform="translate(11.066 11.066)" fill="#fff" />
                      </svg></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="mt-4 mt-md-0">
            <form id="contactForm" class="needs-validation form-home" action="{{ route('consulta') }}" method="post">
              @csrf
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control rounded-pill" id="nombre" placeholder="Nombre" name="firstname" required>
                </div>
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control rounded-pill" id="apellido" placeholder="Apellido" name="lastname" required>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <input type="email" class="form-control rounded-pill" placeholder="Email" id="email" name="email" required>
                </div>
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control rounded-pill" placeholder="Teléfono" id="telefono" name="phone" required>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12 mb-3"> 
                  <textarea class="form-control" name="query" cols="30" rows="5" placeholder="Dejame tu consulta"></textarea>
                </div>
              </div>
              <div class="text-right">
                <button class="btn btn-primary" type="submit">Enviar 
                  <svg xmlns="http://www.w3.org/2000/svg" width="21.29"
                    height="21.29" viewBox="0 0 21.29 21.29">
                    <g id="avion-de-papel" transform="translate(0 0)">
                      <g id="Grupo_536" data-name="Grupo 536" transform="translate(2.246 0)">
                        <g id="Grupo_535" data-name="Grupo 535" transform="translate(0 0)">
                          <path id="Trazado_388" data-name="Trazado 388"
                            d="M72.834.054a.416.416,0,0,0-.418,0L64.8,4.564a.416.416,0,1,0,.423.716l5.467-3.233L60.5,12.613l-5.065-1.55,6.61-3.909a.416.416,0,0,0-.423-.716L54.2,10.827a.416.416,0,0,0,.09.756l6.049,1.851,2.669,4.857.009.013a.415.415,0,0,0,.646.084l3.069-3,5.772,1.766a.416.416,0,0,0,.537-.4V.416A.416.416,0,0,0,72.834.054Zm-9.8,13.635a.416.416,0,0,0-.074.237V16.47l-1.822-3.317L69.2,4.787Zm.758,3.413V14.489l2.037.623Zm8.421-.908-8.171-2.5L72.212,1.9Z"
                            transform="translate(-53.999 0)" fill="#fff" />
                        </g>
                      </g>
                      <g id="Grupo_538" data-name="Grupo 538" transform="translate(2.246 14.331)">
                        <g id="Grupo_537" data-name="Grupo 537">
                          <path id="Trazado_389" data-name="Trazado 389"
                            d="M58.591,344.77a.416.416,0,0,0-.588,0l-3.882,3.882a.416.416,0,0,0,.588.588l3.882-3.882A.416.416,0,0,0,58.591,344.77Z"
                            transform="translate(-53.999 -344.648)" fill="#fff" />
                        </g>
                      </g>
                      <g id="Grupo_540" data-name="Grupo 540" transform="translate(0 19.502)">
                        <g id="Grupo_539" data-name="Grupo 539" transform="translate(0)">
                          <path id="Trazado_390" data-name="Trazado 390"
                            d="M1.666,469.123a.416.416,0,0,0-.588,0l-.956.956a.416.416,0,1,0,.588.588l.956-.956A.416.416,0,0,0,1.666,469.123Z"
                            transform="translate(0 -469.001)" fill="#fff" />
                        </g>
                      </g>
                      <g id="Grupo_542" data-name="Grupo 542" transform="translate(5.222 20.434)">
                        <g id="Grupo_541" data-name="Grupo 541">
                          <path id="Trazado_391" data-name="Trazado 391"
                            d="M126.29,491.532a.415.415,0,1,0,.122.294A.419.419,0,0,0,126.29,491.532Z"
                            transform="translate(-125.58 -491.41)" fill="#fff" />
                        </g>
                      </g>
                      <g id="Grupo_544" data-name="Grupo 544" transform="translate(6.26 17.34)">
                        <g id="Grupo_543" data-name="Grupo 543">
                          <path id="Trazado_392" data-name="Trazado 392"
                            d="M153.3,417.128a.416.416,0,0,0-.588,0l-2.056,2.056a.416.416,0,1,0,.588.588l2.056-2.056A.416.416,0,0,0,153.3,417.128Z"
                            transform="translate(-150.534 -417.006)" fill="#fff" />
                        </g>
                      </g>
                      <g id="Grupo_546" data-name="Grupo 546" transform="translate(13.35 17.182)">
                        <g id="Grupo_545" data-name="Grupo 545">
                          <path id="Trazado_393" data-name="Trazado 393"
                            d="M323.825,413.333a.416.416,0,0,0-.588,0l-2.062,2.062a.416.416,0,1,0,.588.588l2.062-2.062A.416.416,0,0,0,323.825,413.333Z"
                            transform="translate(-321.053 -413.211)" fill="#fff" />
                        </g>
                      </g>
                      <g id="Grupo_548" data-name="Grupo 548" transform="translate(11.079 5.546)">
                        <g id="Grupo_547" data-name="Grupo 547">
                          <path id="Trazado_394" data-name="Trazado 394"
                            d="M267.14,133.5a.416.416,0,1,0,.122.294A.419.419,0,0,0,267.14,133.5Z"
                            transform="translate(-266.43 -133.38)" fill="#fff" />
                        </g>
                      </g>
                    </g>
                  </svg>
                </button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Envio Exitoso Form contacto Home -->
  <div class="modal fade" id="successForm" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="successFormLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header border-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <h4 class="text-verde">Envio exitoso</h4>
            <p id="successFormMsg"></p>
            <img class="pb-4 mt-3" src="{{ asset('/img/icono-modal-envio-exitoso.svg') }}" alt="">
          </div>
        </div>
      </div>
  </div>
  <!-- Modal Envio Fallido Form contacto Home -->
  <div class="modal fade" id="errorForm" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="errorFormLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header border-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <h4 class="text-verde">Error</h4>
            <p id="errorFormMsg"></p>
            <img class="pb-4 mt-3" src="{{ asset('/img/icono-modal-envio-fallido.svg') }}" alt="">
          </div>
        </div>
      </div>
  </div>
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
  $('.customNextBtn').click(function () {
    owl.trigger('next.owl.carousel');
  })
  // Go to the previous item
  $('.customPrevBtn').click(function () {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [300]);
  });

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict';
  window.addEventListener('load', function () {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function (form) {
      form.addEventListener('submit', function (event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

$('#contactForm').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "{{ route('consulta') }}",
        data: $(this).serialize(),
        success: function(msg) {
          $('#successFormMsg').text(msg.success);
          $('#successForm').modal();
          console.log(msg.success);
        },
        error: function(xhr, status, error){
          //muestra solo el primer error
          firstKey = Object.keys(xhr.responseJSON.errors)[0];
          $('#errorFormMsg').text(xhr.responseJSON.errors[firstKey][0]);
          $('#errorForm').modal();
        }
    });
});

</script>
@endsection
