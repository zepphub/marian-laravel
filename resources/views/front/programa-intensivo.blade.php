@extends('layouts.main')

@section('head')@endsection

@section('title')Programa Intensivo - @endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>Consultorías Estratégicas</h2>
        <nav class="" aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center bg-transparent text-marron-claro">
            <li class="breadcrumb-item text-marron-claro"><a class="text-marron-claro" href="{{ route('index') }}">Inicio</a></li>
            <li class="breadcrumb-item text-marron-claro"><a class="text-marron-claro" href="{{ route('mentoria') }}">Mentoría</a></li>
            <li class="breadcrumb-item text-secondary active font-weight-bold" aria-current="page">Programa intensivo de
              8 semanas</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>

  <div class="container my-5">
    <div class="row">
      <div class="col-md-7">
        <h4 class="font-weight-bold titulo-home mb-4">Un programa creado especialmente para pequeñas empresarias,
          emprendedoras y profesionales independientes. </h4>
        <p class="my-4">
          Durante 8 semanas trabajamos juntas con un asesoramiento personalizado e intensivo en el que analizamos la
          presencia de tu marca en el mundo online y desarrollamos diversas estrategias de marketing digital y ventas
          para que logres los objetivos deseados.
        </p>
        <a href="#programa-section-para-vos"><button class="btn btn-primary">¡quiero conocer detalles y aplicar al programa!</button></a>
      </div>
      <div class="col-md-5">
        <img class="w-100 img-fluid" src="{{ asset('img/programa-img-1.png') }}" alt="">
      </div>
    </div>
  </div>

  <div id="programa-section-para-vos">
    <div class="container pt-3 pb-5">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2>¿Este programa es para vos?</h2>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6">
              <div class="card rounded-0 shadow border-0">
                <img class="rounded-0" src="{{ asset('img/programa-section-card-1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Lidero una marca y/o emprendimiento y tengo intenciones de renovarlo en el
                    universo digital de manera estratégica.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
              <div class="card rounded-0 shadow border-0">
                <img class="rounded-0" src="{{ asset('img/programa-section-card-2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Tengo una idea de proyecto y quiero hacerla realidad con un emprendimiento que
                    conecte y atraiga.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mt-4 mt-md-0">
          <div class="card rounded-0 shadow border-0">
            <div class="card-body">
              <h4 class="card-text text-marron-claro">Si alguna de estas frases resuena en vos, ¡estás en el lugar
                correcto!</h4>
              <ul class="my-3 pl-md-4">
                <li>Lidero una marca y/o emprendimiento y tengo intenciones de renovarlo en el universo digital de
                  manera estratégica.</li>
                <li>Tengo una idea de proyecto y quiero hacerla realidad con un emprendimiento que conecte y atraiga.
                </li>
                <li>Necesito una estrategia digital de la mano con un plan de acción que me guíe paso a paso para
                  potenciar mi emprendimiento.</li>
                <li>Emprendo desde mi profesión y quiero crear mi Marca Personal para consolidar mi posicionamiento.
                </li>
                <li>Necesito una mirada objetiva y profesional sobre mi estrategia y modelo de negocios en el ecosistema
                  digital.</li>
              </ul>
              <h5 class="text-secondary">¡Quiero agendar una llamada de claridad para saber más!</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container py-5">
    <div class="row">
      <div class="col-md-7">
        <h4 class="titulo-home mb-3">Sobre la experiencia</h4>
        {!! $mentorship->descriptions[0]->content !!}
        <h5 class="font-weight-normal titulo-home mt-3">Costo: <span class="font-weight-bold">{{ $mentorship->service->price() }}</span></h5>
        <a class="btn btn-primary mt-4" href="{{ route('carrito.add', $mentorship->service) }}">Aplicar al programa</a>
      </div>
      <div class="col-md-5 mt-4 mt-md-0 bg-nude rounded">
        <div class="py-4 pm-d-4">
          <h4 class="text-white titulo-home">Ejes de trabajo</h4>
          <img src="{{ asset('img/separador-secondary-svg.svg') }}" alt="">
          <ul class="list-unstyled mt-4">
            <li class="my-3"><img src="{{ asset('img/programa-icon-list-1.svg') }}" alt=""> Los valores y la esencia de tu marca
            </li>
            <li class="my-3"><img src="{{ asset('img/programa-icon-list-2.svg') }}" alt=""> Tu audiencia</li>
            <li class="my-3"><img src="{{ asset('img/programa-icon-list-3.svg') }}" alt=""> Contenido con propósito</li>
            <li class="my-3"><img src="{{ asset('img/programa-icon-list-4.svg') }}" alt=""> Personalidad e identidad de marca
            </li>
            <li class="my-3"><img src="{{ asset('img/programa-icon-list-5.svg') }}" alt=""> Planificación y estrategia</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Banner Eleva Tu Marca -->
  <div id="banner-programa-reunion" class="banner-eleva-tu-marca d-flex align-items-center mt-5">
    <div class="container py-5">
      <div class="row text-center text-md-left">
        <div class="col-md-12 text-center">
          <h5 class="text-white titulo-home font-weight-normal">Si estás decidida a crear una estrategia de comunicación
            y de marketing que te ayude a dar a conocer la esencia y el enorme valor que tiene tu marca, ¡me encantará
            acompañarte!</h5>
          <h5 class="text-white titulo-home my-4">Te invito a conocernos en una llamada de claridad de 20 minutos </h5>
          <a href=""><button class="btn btn-outline-white">¡Quiero agendar una reunión!</button></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Fin Banner Eleva Tu Marca -->

    <!-- Banner Consultoria Estrategica -->
    <div id="banner-programa-consultoria-estrategica" class="banner-eleva-tu-marca d-flex align-items-center mt-5">
    <div class="container py-5">
      <div class="row text-center text-md-left">
        <div class="col-md-12 text-center">
          <h5 class="text-white titulo-home">Consultoría Estratégica</h5>
          <h5 class="text-white titulo-home my-4 font-weight-normal w-50 mx-auto">Si te gustaría trabajar solo en algunos de los pilares de tu proyecto, las sesiones de consultoría personalizada son ideales para vos</h5>
          <a href="{{ route('consultorias') }}"><button class="btn btn-outline-white">¡Quiero ver detalles!</button></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Fin Banner Consultoria Estrategica -->

  <div class="m-0 p-0"><img style="margin-bottom: -12px !important;" class="img-fluid w-100"
      src="{{ asset('img/separador-superior-seccion-svg.svg') }}" alt=""></div>
  <div class="bg-crema-suave contenedor-form-home py-5">
    <div class="container bg-white p-4 rounded-lg">
      <div class="row">
        <div class="col-md-5">
          <div class="bg-textura-form rounded-lg p-md-4 p-3">
            <h4 class="titulo-home text-medium text-white">Contacta conmigo, me encantará leerte</h4>
            <img src="{{ asset('img/separador-secondary-svg.svg') }}" alt="">
            <p class="text-white mt-3">Si estas por aquí es porque hay algo que quieres decirme o preguntarme.</p>
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
                    <a class="" href="https://twitter.com/Marianaapd?s=08" target="_blank"><svg id="Componente_2_9" data-name="Componente 2 – 9"
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
                    <a class="" href="https://www.facebook.com/Mariana-Pacheco-D-109043760426352" target="_blank"><svg id="Componente_3_9" data-name="Componente 3 – 9"
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
                    <a class="" href="https://www.instagram.com/mariann.pd/?hl=es-la" target="_blank"><svg id="Componente_4_15" data-name="Componente 4 – 15"
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
                    <a class="" href="https://www.linkedin.com/in/mariana-pacheco-d-aquila-ba537375/" target="_blank"><svg id="Componente_4_16" data-name="Componente 4 – 16"
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
            <form class="needs-validation form-home" novalidate>
              <div class="form-row">
                <div class="col-md-6 mb-3">                  
                  <input type="text" class="form-control rounded-pill" id="nombre" placeholder="Nombre" required>
                </div>
                <div class="col-md-6 mb-3">                  
                  <input type="text" class="form-control rounded-pill" id="apellido" placeholder="Apellido" required>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-6 mb-3">                  
                  <input type="email" class="form-control rounded-pill" placeholder="Email" id="email" required>
                </div>
                <div class="col-md-6 mb-3">                  
                  <input type="text" class="form-control rounded-pill" placeholder="Teléfono" id="telefono" required>
                </div>                
              </div>
              <div class="form-row">
                <div class="col-md-12 mb-3"> 
                  <textarea class="form-control" name="" id="" cols="30" rows="5" placeholder="Dejame tu consulta"></textarea>
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

            <script>
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

            </script>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
