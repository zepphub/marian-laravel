@extends('layouts.main')

@section('head')@endsection

@section('title')Mentoría Personalizada - Programa Selecto para profesionales y marcas digitales - @endsection

@section('content')
<header>
  <div class="container">
    <div class="row my-5">
      <div class="col-md-12 text-center">
        <h1>Mentoría Personalizada</h1>
        <nav class="" aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center bg-transparent text-marron-claro">
            <li class="breadcrumb-item text-marron-claro"><a class="text-marron-claro" href="{{ route('index') }}">Inicio</a></li>
            <li class="breadcrumb-item text-marron-claro"><a class="text-marron-claro" href="{{ route('mentoria') }}">Mentorías</a></li>
            <li class="breadcrumb-item text-secondary active" aria-current="page">Mentoría Personalizada</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</header>

<div class="container">
    <div class="row">
      <div class="col-md-7">
        <h4 class="font-weight-bold  mb-4">Programa Selecto para profesionales y marcas digitales</h4>
        <p>Durante un período de 10 semanas te acompaño y ayudo en el proceso de toma de decisión, en etapa de construcción y proyección de marca, para que logres crear una estrategia de diferenciación en entornos digitales a fin de que la audiencia te perciba como la mejor opción.</p>
        <a href="https://forms.gle/bX4KrmZhpPcoyprV6" target="_blank" class="btn btn-primary">¡Quiero aplicar a la mentoría!</a>
      </div>
      <div class="col-md-5">
        logo sello programa
        <img class="w-100 img-fluid" src="{{ asset('img/programa-img-1.png') }}" alt="">
      </div>
    </div>


    <div class="row my-5">
      <div class="col-md-7">
        <div class="bg-nude p-4 rounded">
          <h4 class=" text-white">¿Cuál es el momento ideal para aplicar al proceso?</h4>
          <p>Cuando tu negocio digital y/o flujo de venta online es un hecho y te encontras en una etapa de crecimiento o expansión, lo que refleja que:</p>
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

      <div class="col-md-5 mt-4 mt-md-0 bg-nude rounded">
        <div class="py-4 px-3 pm-d-4">
          <h4 class="text-white ">Ejes de trabajo</h4>
          <img src="{{ asset('img/separador-secondary-svg.svg') }}" class="separador-ondas" alt="">
          <ul class="list-unstyled mt-4">
            <li class="my-3"><img src="{{ asset('img/programa-icon-list-1.svg') }}" alt=""> Has logrado construir una audiencia digital en uno o diversos canales de comunicación.

            </li>
            <li class="my-3"><img src="{{ asset('img/programa-icon-list-2.svg') }}" alt=""> Has probado y validado diversas estrategias en entornos digitales.
            </li>
            <li class="my-3"><img src="{{ asset('img/programa-icon-list-3.svg') }}" alt=""> Has logrado un flujo de ventas constante, lo que por períodos se traduce a la “agenda llena”
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="row my-5">
      <div class="col-md-12 text-center">
        <h4>Si te sentís identificada con las afirmaciones que comparto respecto al momento vital de tu negocio, probablemente necesites:</h4>
        <ul class="mt-4">
          <li>Capitalizar la experiencia rediseñando la estrategia de marca en entornos digitales con acciones validadas y alineadas a tus valores diferenciales. </li>
          <li>Proyectar confianza y autoridad de marca elevando la percepción de tus propuestas en mercados digitales.</li>
          <li>Consolidar un relato de marca auténtico que le de un sentido real y experiencial a tu comunicación digital.</li>
          <li>Sentar las bases para una estrategia de marketing consciente y 100% alineada a tus procesos creativos y comunicativos a la hora de vender online.</li>
        </ul>
        <h4>Es mi momento,</h4>
        <a href="https://forms.gle/bX4KrmZhpPcoyprV6" target="_blank" class="btn btn-primary"> ¡Quiero aplicar al Programa Selecto!</a>
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

</div><!-- end container -->

  <!-- Banner Eleva Tu Marca -->
  <div id="banner-programa-reunion" class="banner-eleva-tu-marca d-flex align-items-center mt-5">
    <div class="container py-5">
      <div class="row text-center text-md-left">
        <div class="col-md-12 text-center">
          <h5 class="text-white  font-weight-normal mb-4">Si estás decidida a crear una estrategia de comunicación
            y de marketing que te ayude a dar a conocer la esencia y el enorme valor que tiene tu marca, ¡me encantará
            acompañarte!</h5>
          <!-- <h5 class="text-white  my-4">Te invito a conocernos en una llamada de claridad de 20 minutos </h5> -->
          <a href="https://forms.gle/bX4KrmZhpPcoyprV6" target="_blank" class="btn btn-outline-white">¡Quiero agendar una reunión!</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Fin Banner Eleva Tu Marca -->

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
      <div class="col-md-4 offset-md-2">
          <div class="card border-secondary text-center card-propuestas shadow">
              <img src="{{ asset('/img/card-mentoria-home.svg') }}" class="card-img-top w-25 mx-auto my-4 mb-2"
                  alt="...">
              <div class="card-body">
                  <h5 class="card-title ">Mentoría Grupal</h5>
                  <h5>Eleva tu Marca</h5>
                  <p class="card-text">Un programa grupal de 8 semanas con acompañamiento semanal y sesiones de mentoría en vivo, a través de las cuales, te ayudaré a tomar decisiones estratégicas para transformar tu emprendimiento en un negocio digital sólido y alineado al estilo de vida que deseas.</p>
                  <a href="{{ route('mentoria-grupal') }}" class="btn btn-primary">Más Detalles</a>
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
