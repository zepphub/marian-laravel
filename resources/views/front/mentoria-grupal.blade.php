@extends('layouts.main')

@section('head')
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
@endsection

@section('title')Mentoría Grupal - Programa de formación online: "Eleva tu Marca" - @endsection

@section('content')
<header>
  <div class="container">
    <div class="row my-5">
      <div class="col-md-12 text-center">
        <h1>Mentoría Grupal</h1>
        <nav class="" aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center bg-transparent text-marron-claro">
            <li class="breadcrumb-item text-marron-claro"><a class="text-marron-claro" href="{{ route('index') }}">Inicio</a></li>
            <li class="breadcrumb-item text-marron-claro"><a class="text-marron-claro" href="{{ route('mentoria') }}">Mentorías</a></li>
            <li class="breadcrumb-item text-secondary active" aria-current="page">Mentoría Grupal</li>
          </ol>
        </nav>
      </div>
    </div>
  </header>
  
  <div class="container">
    <div class="row">
      <div class="col">
        
        <h2>Programa de formación online <br>
        "Eleva tu marca"</h2>

        <p>Un programa grupal de 8 semanas con acompañamiento semanal y sesiones de mentoría en vivo, a través de las cuales, te ayudo a tomar decisiones estratégicas para transformar tu emprendimiento en un negocio digital sólido y auténtico, respetando tus procesos creativos y elevando una estrategia de marca diferencial desde la calma y el disfrute.
        </p>

      </div>
    </div>
    <div class="row my-5">
      <div class="col-md-5">
        <img class="w-100 img-fluid" src="{{ asset('img/mentoria-grupal-img-1.png') }}" alt="">
      </div>
      <div class="col-md-7 pl-md-5">
        <h4 class="font-weight-bold  mb-4 mt-5 mt-md-0">¿Qué significa tener un negocio online sólido?
        </h4>
        <p class="my-4">
          <span class="">Gestionar un emprendimiento que no absorba todas tus horas productivas tratando de sumar likes y comentarios en tus posteos, por lo contrario, <u>una marca auténtica y estratégica que te impulse a hacer menos pero mejor, elevando tus resultados.</u></span>
        </p>
        <p>Es lo que necesito,</p>
        <h4 class="">¡Quiero registrarme en lista de espera para la próxima edición!</h4>
        <a href="https://www.google.com/url?q=https://www.dopplerpages.com/marianapd.tur-C0AD3/LISTADEESPERAMentoragrupalED2023-69561&sa=D&source=docs&ust=1668521241051007&usg=AOvVaw0n3DPwPCcgO4B8dU389jA6" target="_blank" class="btn btn-primary mt-3">Reservar mi lugar <svg
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

  <div class="row my-5">
    <div class="offset-md-2 col-md-8">
      <div class="bg-nude p-4 rounded">
        <h4 class=" text-white">Este programa es para vos si querés:</h4>
        <ul class="list-unstyled mt-4">
          <li class="my-3 text-dark-gray"><img src="{{ asset('img/check-icon.svg') }}" alt=""> Definir el modelo de negocio que se adapte al estilo de vida que querés vivir para potenciar la venta de tus servicios online desde la calma y con estrategia.</li>
          <li class="my-3 text-dark-gray"><img src="{{ asset('img/check-icon.svg') }}" alt=""> Fortalecer las bases estratégicas de tu emprendimiento para que te asegures de comunicar tu factor diferencial y conectar con tu cliente ideal. 
          </li>
          <li class="my-3 text-dark-gray"><img src="{{ asset('img/check-icon.svg') }}" alt=""> Crear una estrategia de marca a tu medida, que represente tus valores profesionales y que respete tus procesos creativos, evitando caer en métodos preestablecidos. 
          </li>
          <li class="my-3 text-dark-gray"><img src="{{ asset('img/check-icon.svg') }}" alt=""> Aplicar acciones de venta sin perder la esencia y la personalización que te caracteriza al momento de comunicar tus servicios.
          </li>
          <li class="my-3 text-dark-gray"><img src="{{ asset('img/check-icon.svg') }}" alt=""> Contar con las herramientas necesarias para crear una estrategia de marca consciente y sostenible, en términos de contenido y posicionamiento.
          </li>
          <li class="my-3 text-dark-gray"><img src="{{ asset('img/check-icon.svg') }}" alt=""> Contar con una mirada objetiva y profesional sobre la presencia de tu marca en entornos digitales, además de un acompañamiento que te ayude y asegure el avance.
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="row my-5 d-flex" id="mentoria-single-banner">
    <div class="col-md-6 offset-md-3 align-items-center py-md-5">
        <h5 class=" text-center text-white">Que sea grupal significa que compartirás el proceso con emprendedoras y profesionales que están en tu misma situación, siendo parte de una experiencia altamente enriquecedora que se eleva en comunidad.</h5>
    </div>
  </div>  

  <div class="row">
    <div class="col-md-12 text-center">
      <h4 class="">¿Qué incluye el programa?</h4>
      <img src="{{ asset('img/separador-svg.svg') }}" class="separador-ondas"  alt="">
    </div>
  </div>

  <div class="row mt-4 mt-md-5">
    <div class="col-md-3">
      <div class="d-flex flex-column align-items-center text-center my-3 my-md-0">
        <img src="{{ asset('img/mentoria-g-exp-1.svg') }}" alt="" class="mb-3">
        <h5 class="text-marron-claro m-md-0 ml-md-3 mt-2 mt-md-0">Sesiones en vivo de mentoría grupal + Masterclass con invitadas expertas que se han consolidado en mercados digitales
        </h5>
      </div>
    </div>
    <div class="col-md-3">
      <div class="d-flex flex-column align-items-center text-center my-3 my-md-0">
        <img src="{{ asset('img/mentoria-g-exp-2.svg') }}" alt="" class="mb-3">
        <h5 class="text-marron-claro m-md-0 ml-md-3 mt-2 mt-md-0">Módulos de contenido en videos de entre 5 y 15 minutos + plantillas con ejercicios y tutoriales
        </h5>
      </div>
    </div>
    <div class="col-md-3">
      <div class="d-flex flex-column align-items-center text-center my-3 my-md-0">
        <img src="{{ asset('img/mentoria-g-exp-3.svg') }}" alt="" class="mb-3">
        <h5 class="text-marron-claro m-md-0 ml-md-3 mt-2 mt-md-0">Grupo exclusivo de Telegram, a través del cual, podrás crear tu círculo de aliadas y crecer en comunidad.</h5>
      </div>
    </div>
    <div class="col-md-3">
      <div class="d-flex flex-column align-items-center text-center my-3 my-md-0">
        <img src="{{ asset('img/mentoria-g-exp-4.svg') }}" alt="" class="mb-3">
        <h5 class="text-marron-claro m-md-0 ml-md-3 mt-2 mt-md-0">Material audiovisual disponible + acceso a ejemplos y casos reales + Seguimiento personalizado.</h5>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 text-center">
      <h4 class="">La experiencia contada por ellas</h4>
      <img src="{{ asset('img/separador-svg.svg') }}" class="separador-ondas"  alt="">
    </div>
  </div>

  <div class="row">
    <div class="col-12 text-center">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/xLOF69whyDo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      
      <iframe width="560" height="315" src="https://www.youtube.com/embed/xLOF69whyDo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      
      <iframe width="560" height="315" src="https://www.youtube.com/embed/xLOF69whyDo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>

  <div class="row">



</div><!-- container -->

  <div class="container banner-eleva-tu-marca my-5 p-5">
    <div class="row text-center">
      <div class="col-md-12">
        <h4 class="text-white  mb-3">¡Quiero ser parte de la próxima edición!
        </h4>
                <!-- <h5 class="text-white mt-3">Costo <span>{{ $mentorship->service->price() }}</span></h5> -->
        <a href="https://www.dopplerpages.com/marianapd.tur-C0AD3/LISTADEESPERAMentoragrupalED2023-69561" target="_blank"><button class="btn btn-blanco mt-3 mt-md-0">Registrarme en lista de espera</button></a>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12 text-center">
        <h4 class="text-marron-claro ">Otras maneras de encontrarnos</h4>
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
      <div class="col-md-4 offset-md-2">
          <div class="card border-secondary text-center card-propuestas shadow">
              <img src="{{ asset('/img/card-mentoria-home.svg') }}" class="card-img-top w-25 mx-auto my-4 mb-2"
                  alt="...">
              <div class="card-body">
                  <h5 class="card-title ">Mentoría personalizada</h5>
                  <h5>Programa Selecto para Profesionales y Marcas Digitales</h5>
                  <p class="card-text">Un proceso en el que te acompaño y ayudo, durante un período de 10 semanas, a crear una estrategia de marca diferencial e integral en entornos digitales a fin de que tu audiencia te perciba como la mejor opción.</p>
                  <a href="{{ route('programa-intensivo') }}" class="btn btn-primary">Más Detalles</a>
              </div>
          </div>
      </div>
      <div class="col-md-4">
          <div class="card border-secondary text-center card-propuestas shadow">
              <img src="https://marianpd.com/img/card-asesoria-home.svg" class="card-img-top w-25 mx-auto my-4 mb-2" alt="...">
              <div class="card-body">
                  <h5 class="card-title ">Cursos</h5>
                  <h5>On Demand</h5>
                  <p class="card-text">Una propuesta de formación con contenidos audiovisuales grabados (videos, ejemplos con casos reales, ejercicios y guías prácticas) para que puedas capacitarte a tu ritmo y respetar tus procesos creativos sin presiones de días u horarios.</p>
                  <a href="https://servicios.marianpd.com/cursos" class="btn btn-primary" target="_blank">Más Detalles</a>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection
