@extends('layouts.main')

@section('head')
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
@endsection

@section('title')Mentoría Grupal - @endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>Mentoría Grupal “Activá tu magia”</h2>
        <nav class="" aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center bg-transparent text-marron-claro">
            <li class="breadcrumb-item text-marron-claro"><a class="text-marron-claro" href="{{ route('index') }}">Inicio</a></li>
            <li class="breadcrumb-item text-marron-claro"><a class="text-marron-claro" href="{{ route('mentoria') }}">Mentoría</a></li>
            <li class="breadcrumb-item text-secondary active font-weight-bold" aria-current="page">Mentoría Grupal
              "Activá tu magia" </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>

  <div class="container my-5">
    <div class="row">
      <div class="col-md-5">
        <img class="w-100 img-fluid" src="{{ asset('img/mentoria-grupal-img-1.png') }}" alt="">
      </div>
      <div class="col-md-7 pl-md-5">
        <h4 class="font-weight-bold titulo-home mb-4 mt-5 mt-md-0">Si sos una Emprendedora apasionada por su proyecto, con ánimos de
          crecer en comunidad, ¡esta propuesta es para vos! </h4>
        <p class="my-4">
          <span class="text-medium">¿Qué es una mentoría grupal? </span> <br><br>

          Es un asesoramiento intensivo con el principal objetivo de transformar tu proyecto en el mundo online,
          trabajando sobre diversos conceptos que te ayudarán a comunicar tu propuesta de valor y a potenciar tu
          estrategia digital.
          Al ser grupal, participarás junto a emprendedoras que están en tu misma situación, para crecer aún más
          compartiendo esta experiencia en comunidad.
        </p>
        <h4 class="text-medium">¡Quiero conocer más detalles!</h4>
        <a href="{{ route( 'carrito.add', $mentorship->service) }}" class="btn btn-primary mt-3">Quiero reservar mi lugar <svg
              class="ml-2" xmlns="http://www.w3.org/2000/svg" width="8.248" height="14.367" viewBox="0 0 8.248 14.367">
              <g id="next_1_" data-name="next (1)" transform="translate(-60.438 -1.439)">
                <g id="Grupo_475" data-name="Grupo 475" transform="translate(61 2)">
                  <path id="Trazado_343" data-name="Trazado 343"
                    d="M124.777,6.288,118.622.151a.516.516,0,0,0-.728.73l5.788,5.772-5.788,5.772a.516.516,0,0,0,.729.73l6.154-6.137a.516.516,0,0,0,0-.73Z"
                    transform="translate(-117.742 0)" fill="#fff" stroke="#fff" stroke-width="1" />
                </g>
              </g>
            </svg>
          </a>
      </div>
    </div>
  </div>

  <div class="d-flex align-items-center" id="mentoria-g-owl-carousel">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h4 class="text-white titulo-home">¿Qué lograrás al finalizar el proceso de Mentoría?</h4>
        </div>
      </div>
      <div class="row mt-5 position-relative">
        <button class="btn customPrevBtn p-0"><img src="{{ asset('img/prevBtn.svg') }}" alt=""></button>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <div
              class="item-carousel m-3 m-md-0 p-5 p-md-4 bg-white d-flex flex-column h-100 justify-content-center text-center">
              <img class="icon-owl-carousel mb-3" src="{{ asset('img/owl-carousel-item-1.svg') }}" alt="">
              <h5>Elevar tu propuesta de valor</h5>
            </div>
          </div>
          <div class="item">
            <div
              class="item-carousel m-3 m-md-0 p-5 p-md-4 bg-white d-flex flex-column h-100 justify-content-center text-center">
              <img class="icon-owl-carousel mb-3" src="{{ asset('img/owl-carousel-item-2.svg') }}" alt="">
              <h5>Comunicar tu diferencial</h5>
            </div>
          </div>
          <div class="item">
            <div
              class="item-carousel m-3 m-md-0 p-5 p-md-4 bg-white d-flex flex-column h-100 justify-content-center text-center">
              <img class="icon-owl-carousel mb-3" src="{{ asset('img/owl-carousel-item-3.svg') }}" alt="">
              <h5>Reconocer a tu cliente ideal y conectar con tu audiencia</h5>
            </div>
          </div>
          <div class="item">
            <div
              class="item-carousel m-3 m-md-0 p-5 p-md-4 bg-white d-flex flex-column h-100 justify-content-center text-center">
              <img class="icon-owl-carousel mb-3" src="{{ asset('img/owl-carousel-item-4.svg') }}" alt="">
              <h5>Mejorar la estética de tus canales digitales</h5>
            </div>
          </div>
          <div class="item">
            <div
              class="item-carousel m-3 m-md-0 p-5 p-md-4 bg-white d-flex flex-column h-100 justify-content-center text-center">
              <img class="icon-owl-carousel mb-3" src="{{ asset('img/owl-carousel-item-5.svg') }}" alt="">
              <h5>Planificar y ordenar tus ideas</h5>
            </div>
          </div>
          <div class="item">
            <div
              class="item-carousel m-3 m-md-0 p-5 p-md-4 bg-white d-flex flex-column h-100 justify-content-center text-center">
              <img class="icon-owl-carousel mb-3" src="{{ asset('img/owl-carousel-item-6.svg') }}" alt="">
              <h5>Crear tu calendario contenido para redes sociales</h5>
            </div>
          </div>
          <div class="item">
            <div
              class="item-carousel m-3 m-md-0 p-5 p-md-4 bg-white d-flex flex-column h-100 justify-content-center text-center">
              <img class="icon-owl-carousel mb-3" src="{{ asset('img/owl-carousel-item-7.svg') }}" alt="">
              <h5>Conocer a emprendedoras muy lo más, con quienes crearás las mejores alianzas</h5>
            </div>
          </div>
        </div>
        <button class="btn customNextBtn p-0"><img src="{{ asset('img/nextBtn.svg') }}" alt=""></button>
      </div>
    </div>
  </div>

  <div class="container py-5">

    <div class="row">
      <div class="col-md-12 text-center">
        <h4 class="titulo-home">La experiencia</h4>
        <img src="{{ asset('img/separador-svg.svg') }}" alt="">
      </div>
    </div>

    <div class="row mt-4 mt-md-5">
      <div class="col-md-3">
        <div class="d-md-flex align-items-center text-center text-md-left my-3 my-md-0">
          <img src="{{ asset('img/mentoria-g-exp-1.svg') }}" alt="">
          <h5 class="text-marron-claro m-md-0 ml-md-3 mt-2 mt-md-0">8 semanas de asesoramiento y seguimiento</h5>
        </div>
      </div>
      <div class="col-md-3">
        <div class="d-md-flex align-items-center text-center text-md-left my-3 my-md-0">
          <img src="{{ asset('img/mentoria-g-exp-2.svg') }}" alt="">
          <h5 class="text-marron-claro m-md-0 ml-md-3 mt-2 mt-md-0">Cápsulas de contenido <br> pre-grabados con acceso
            ilimitado</h5>
        </div>
      </div>
      <div class="col-md-3">
        <div class="d-md-flex align-items-center text-center text-md-left my-3 my-md-0">
          <img src="{{ asset('img/mentoria-g-exp-3.svg') }}" alt="">
          <h5 class="text-marron-claro m-md-0 ml-md-3 mt-2 mt-md-0">Sesiones grupales online y en vivo</h5>
        </div>
      </div>
      <div class="col-md-3">
        <div class="d-md-flex align-items-center text-center text-md-left my-3 my-md-0">
          <img src="{{ asset('img/mentoria-g-exp-4.svg') }}" alt="">
          <h5 class="text-marron-claro m-md-0 ml-md-3 mt-2 mt-md-0">Invitadas/os especiales</h5>
        </div>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-md-5">
        <div class="bg-nude p-4 rounded">
          <h4 class="titulo-home text-white">¿Cuáles son los ejes que desarrollaremos en cada encuentro?</h4>
          <ul class="list-unstyled mt-4">
            <li class="my-3 text-dark-gray"><img src="{{ asset('img/check-icon.svg') }}" alt=""> Emprendedoras apasionadas: tu
              proyecto
            </li>
            <li class="my-3 text-dark-gray"><img src="{{ asset('img/check-icon.svg') }}" alt=""> Propuesta de valor: tu
              diferencial</li>
            <li class="my-3 text-dark-gray"><img src="{{ asset('img/check-icon.svg') }}" alt=""> Cliente ideal: tu público
              objetivo</li>
            <li class="my-3 text-dark-gray"><img src="{{ asset('img/check-icon.svg') }}" alt=""> Imagen de marca: personalidad e
              identidad
            </li>
            <li class="my-3 text-dark-gray"><img src="{{ asset('img/check-icon.svg') }}" alt=""> Planificación y objetivos: plan
              de acción</li>
            <li class="my-3 text-dark-gray"><img src="{{ asset('img/check-icon.svg') }}" alt=""> Invitada/o especial</li>
            <li class="my-3 text-dark-gray"><img src="{{ asset('img/check-icon.svg') }}" alt=""> Calendario contenido para redes
              sociales</li>
            <li class="my-3 text-dark-gray"><img src="{{ asset('img/check-icon.svg') }}" alt=""> Sesión de Q&A: debate grupal
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-7 mt-4 mt-md-0 pl-md-4">
        <h4 class="titulo-home">Ser parte de la Mentoría Grupal te dará acceso a:</h4>
        @foreach ($mentorship->descriptions as $description)
        <div class="row align-items-center my-4">
          <div class="col-md-2 pr-md-0 text-center text-md-left"><img class="mb-3 mb-md-0" src="{{ asset($description->icon->url) }}" alt=""></div>
          <div class="col-md-10 p-md-0 text-center text-md-left">
            <p class="m-0">{{$description->content}}</p>
          </div>
        </div>
        @endforeach
        <div class="row justify-content-center justify-content-md-start">
          <div class="d-flex align-items-center align-items-center d-flex flex-column flex-md-row justify-content-center">
            <h5 class="subrayado-subtitulo pb-1 m-0">Costo del programa grupal</h5>
            <h4 class="font-weight-bold titulo-home ml-md-3 mt-3 mt-md-0">{{ $mentorship->service->price() }}</h4>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container banner-eleva-tu-marca d-flex align-items-center my-5 p-5">
    <div class="row text-center text-md-left">
      <div class="col-md-8">
        <h5 class="text-white font-weight-normal">Si algo de todo esto resuena en vos, ¡me encantaría que seas parte!
          Abro este programa solo 2 veces al año y los cupos son limitados.</h5>
        <h4 class="text-white titulo-home">¡Aplicá para la próxima edición!</h4>
      </div>
      <div class="col-md-4 d-flex flex-column flex-md-column align-items-center justify-content-center justify-content-md-end">
        <a href="{{ route('carrito.add', $mentorship->service) }}"><button class="btn btn-blanco mt-3 mt-md-0">¡quiero reservar mi lugar!</button></a>
        <h5 class="text-white mt-3">Costo <span>{{ $mentorship->service->price() }}</span></h5>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12 text-center">
        <h4 class="text-marron-claro text-medium">Otras maneras de encontrarnos</h4>
        <div class="mb-2">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="76" height="4"
            viewBox="0 0 76 4">
            <defs>
              <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 192 8">
                <image width="192" height="8"
                  xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAAAICAYAAAHYYMBIAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAmNJREFUeNpiYMABVnTXOSCxG3CwC5DYAtjMAQggfJoVGIgEQLUJuMwDCCBGILEfyAa59kBEaZMjkuR/EA0UY0QzjGhxmBgQNALFG2hhNkAAgRgG2EID2adEihdgi0ZsUUMls8GxwgTE54H4PhZ99UghCNO0HyregCWE+rGYAVL/nkiz/0PFHYg0ez5IDiCAGKEa9iNJOAKj6gCe9IhiMXp0Ywml+UhCikD1D4g0+wNQrSAetaBArEcSEgSq/0Ck2Q+AahXxqAUFWAExfsRi9gWgekM8amFZlgGWgkbBAAKAAGJEzvvIBR2B6gGEF+BLzejlCg3NBuWUCUSoDQBSBkA8AV9OIdNsUE5XINFsUC5cwEhikQLyxHoaFSnoxRUpRQpJxRWJRQqh4grk5gQyzT5AahGUj8ZPIEGvAAH5+Wj8AiqaXU9MbY8DEGqvJeBqQOJrXEKBA6kRMBGNv4AEvYSyZiIafwIVzW5Ey+WkRAChonABmtk4GzBY5A4ABGi/7GoYhIEAnOEACTgYDoaEOhgScDIHlVAcDAebAyTUwrjkWLrm7hJ6vafRxyZ8EO7vuwtT/t+fAn1KM2Ryo6jM9kQVQjAmQzZ892zEBgN9K9k/llWLjftEMGQ/cUbnye+M2MAcGgyG59oyJnDpy4PQyv3BVkwF+s6MA08tb5XYQcleBfYrXfsL2JFI0JR9U9TWasiORILu4xfYV0Xyc2y4i+cadp6/Ps02XkbC/1JNmUrh27NOcMnxoAvm7IFx4F1THkZsp2R3ArvXqBtuoovAXhS50hmyW1QSyv/7UgXCLZ5jw137AaYai9H7B+O8AAAAAElFTkSuQmCC" />
              </pattern>
            </defs>
            <rect id="_4" data-name="4" width="76" height="4" fill="url(#pattern)" />
          </svg>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-1"></div>
      <div class="col-md-5">
        <div class="card border-secondary text-center card-propuestas shadow">
          <img src="{{ asset('img/card-mentoria-home.svg') }}" class="card-img-top w-25 mx-auto my-4 mb-2" alt="...">
          <div class="card-body">
            <h5 class="card-title titulo-home">Consultoría Estretégica</h5>
            <p class="card-text">Te ayudo a potenciar tu estrategia 
digital resaltando la esencia y los 
valores de tu marca.</p>
            <p class="text-primary font-weight-bold">¡Quiero saber más!</p>
            <a href="{{ route('programa-intensivo') }}" class="btn btn-primary">Click Aquí</a>
          </div>
        </div>
      </div>
      <div class="col-md-5 my-4 my-md-0">
        <div class="card border-secondary text-center card-propuestas shadow">
          <img src="{{ asset('img/card-asesoria-home.svg') }}" class="card-img-top w-25 mx-auto my-4 mb-2" alt="...">
          <div class="card-body">
            <h5 class="card-title titulo-home">Talleres y Conferencias</h5>
            <p class="card-text">Experiencias especialmente creadas 
para mujeres emprendedoras y 
profesionales con visión de 
crecimiento.</p>
            <p class="text-primary font-weight-bold">¡Quiero saber más!</p>
            <a href="{{ route('talleres-y-eventos') }}" class="btn btn-primary">Click Aquí</a>
          </div>
        </div>
      </div>
      <div class="col-md-1"></div>
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
          items: 1
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
    })
  </script>
@endsection
