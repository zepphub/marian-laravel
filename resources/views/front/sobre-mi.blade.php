@extends('layouts.main')

@section('head')@endsection

@section('title')Sobre mi - @endsection

@section('content')
  <div class="portada-sobre-mi py-5 py-md-0">
    <div class="container d-flex flex-column align-items-baseline justify-content-center h-100">
      <div class="row">
        <div class="col-md-6 text-center text-md-left">
          <h2 class="text-white">Soy Marian,</h2>
          <h4 class="text-white font-weight-normal my-5 my-md-4">Me especializo en la construcción de marca y en el desarrollo de estrategias aplicadas a negocios en entornos digitales.</h4>
          <a href="#mi-historia" class="btn btn-outline-white">Conocé mi Historia</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container my-5 py-md-5" id="mi-historia">
    <div class="row">
      <div class="col-md-5">
        <img class="img-fluid" src="{{ asset('img/about-us.jpg') }}" alt="">
      </div>
      <div class="col-md-7">
        <div class="d-flex align-items-center flex-column mt-4 mt-md-0">
          <p>Soy emprendedora, amante de los viajes, la cultura, los destinos, apasionada por el marketing, las historias y todo lo que se genera con ellas. Hace algún tiempito me propuse unir todas las actividades y propuestas que estaba llevando adelante desde mi profesión para comenzar esta historia…</p>
            <p>Tengo 30 años y emprendo desde los 19. Comencé en el área de marketing de una empresa familiar, un hotel ubicado en las sierras de Córdoba, Argentina. La vida me llevó a administrarlo tiempo después y así se sucedieron 3 años… Una partecita de mi corazón sigue allí. También fundé y administré un bar al que llamamos la Casona, por estar en una casa antigua en la que sucedieron cientos de historias hermosas. El proyecto gastronómico duró pocos meses pero al día de hoy continúo aplicando lo aprendido durante esa experiencia.</p>
            <p>Una vez recibida, emprendí una consultora especializada en marketing y turismo. A través de ella trabajé con marcas de la industria de los viajes, aplicando herramientas comerciales y estrategias de marketing y potenciando experiencias colmadas de paisajes y buenas energías.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="bg-crema-suave-2">
    <div class="container py-5">
      <div class="row d-flex">
        <div class="col-md-5 order-2 order-md-1">
          <div class="mt-4 mt-md-0 d-flex flex-column h-100 justify-content-center text-center text-md-left">
            <p>Acompañé todas estas aventuras estudiando mucho, y aún sigo haciéndolo. Soy Licenciada en Turismo, Diplomada y Especialista en Marketing y Dirección Comercial, Magister en Administración de Empresas (MBA) y en camino se encuentra una Maestría en Marketing Digital.</p>
              <p>Hoy me encuentro aquí, escribiendo el contenido de mi sitio web, un espacio que consolida y une todas las experiencias que te comparto... Hoy decido comunicar, proyectar y ayudar a todas las marcas que tengan la intención de contar su historia y dejar huellas. Lo hago a través de mi Marca Personal, como consultora de marcas auténticas.
              </p>
            <a href="{{ route('servicios') }}" class="btn btn-outline-secondary">Trabajemos juntas</a>
          </div>
        </div>
        <div class="col-md-7 order-1 order-md-2">
          <img class="img-fluid" src="{{ asset('img/about-us.jpg') }}" alt="">
        </div>
      </div>
    </div>
  </div>


  <!-- Seccion Cards Trabajemos Juntas -->
  <div class="cards-trabajemos-juntas">
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-12">
          <div class="text-center">
            <h4 class="">Trabajemos Juntas</h4>
            <img src="{{ asset('img/separador.svg') }}" class="separador-ondas"  alt="">
            <p class="my-4">Construyamos juntas el universo de tu marca de la mano a diversas estrategias de Marketing
              Digital, Comunicación y Branding que te ayuden a posicionarte a través de una propuesta
              auténtica y diferente</p>

            <h5 class="text-marron-claro  ">Mis propuestas</h5>
            <div><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="105"
                height="4" viewBox="0 0 105 4">
                <defs>
                  <pattern id="pattern" preserveAspectRatio="xMidYMid slice" width="100%" height="100%"
                    viewBox="0 0 192 8">
                    <image width="192" height="8"
                      xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAAAICAYAAAHYYMBIAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAmNJREFUeNpiYMABVnTXOSCxG3CwC5DYAtjMAQggfJoVGIgEQLUJuMwDCCBGILEfyAa59kBEaZMjkuR/EA0UY0QzjGhxmBgQNALFG2hhNkAAgRgG2EID2adEihdgi0ZsUUMls8GxwgTE54H4PhZ99UghCNO0HyregCWE+rGYAVL/nkiz/0PFHYg0ez5IDiCAGKEa9iNJOAKj6gCe9IhiMXp0Ywml+UhCikD1D4g0+wNQrSAetaBArEcSEgSq/0Ck2Q+AahXxqAUFWAExfsRi9gWgekM8amFZlgGWgkbBAAKAAGJEzvvIBR2B6gGEF+BLzejlCg3NBuWUCUSoDQBSBkA8AV9OIdNsUE5XINFsUC5cwEhikQLyxHoaFSnoxRUpRQpJxRWJRQqh4grk5gQyzT5AahGUj8ZPIEGvAAH5+Wj8AiqaXU9MbY8DEGqvJeBqQOJrXEKBA6kRMBGNv4AEvYSyZiIafwIVzW5Ey+WkRAChonABmtk4GzBY5A4ABGi/7GoYhIEAnOEACTgYDoaEOhgScDIHlVAcDAebAyTUwrjkWLrm7hJ6vafRxyZ8EO7vuwtT/t+fAn1KM2Ryo6jM9kQVQjAmQzZ892zEBgN9K9k/llWLjftEMGQ/cUbnye+M2MAcGgyG59oyJnDpy4PQyv3BVkwF+s6MA08tb5XYQcleBfYrXfsL2JFI0JR9U9TWasiORILu4xfYV0Xyc2y4i+cadp6/Ps02XkbC/1JNmUrh27NOcMnxoAvm7IFx4F1THkZsp2R3ArvXqBtuoovAXhS50hmyW1QSyv/7UgXCLZ5jw137AaYai9H7B+O8AAAAAElFTkSuQmCC" />
                  </pattern>
                </defs>
                <path id="_4" data-name="4" d="M0,0H105V4H0Z" fill="url(#pattern)" />
              </svg>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-6">
          <div class="card border-secondary text-center card-propuestas shadow">
            <img src="{{ asset('img/card-mentoria-home.svg') }}" class="card-img-top w-25 mx-auto my-4 mb-2" alt="...">
            <div class="card-body">
              <h5 class="card-title ">Mentorías</h5>
              <h6>personalizadas y grupales</h6>
              <p class="card-text">Construimos el universo de tu marca y elevamos su posicionamiento en entornos digitales a través de dinámicas específicas, centradas en la proyección estratégica, el marketing consciente y la comunicación experiencial.
              </p>
              <a href="{{ route('mentoria') }}" class="btn btn-primary">Más Detalles</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card border-secondary text-center card-propuestas shadow">
            <img src="{{ asset('img/card-talleres-home.svg') }}" class="card-img-top w-25 mx-auto my-4 mb-2" alt="...">
            <div class="card-body">
              <h5 class="card-title ">Cursos</h5>
              <h6>On Demand</h6>
              <p class="card-text">Una propuesta de formación con contenidos audiovisuales grabados (videos, ejemplos con casos reales, ejercicios y guías prácticas) para que puedas capacitarte a tu ritmo y respetar tus procesos creativos sin presiones de días u horarios.
              </p>
              <a href="https://servicios.marianpd.com/cursos" target="_blank" class="btn btn-primary">Más Detalles</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
