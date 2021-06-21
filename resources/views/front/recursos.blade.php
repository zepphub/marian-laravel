@extends('layouts.main')

@section('head')
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
@endsection

@section('title')Recursos Gratuitos - @endsection

@section('content')
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header border-0">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
          <h4 class="modal-title titulo-home" id="staticBackdropLabel">Ya casi tenés tus recursos</h4>
          <p>Para obtenerlo solo deja tus datos y la descarga se iniciará de manera automática</p>
          <form id="hidden-download" action="{{ route('recursos-descarga') }}" method="post" class="d-none">
           @csrf
           <input type=hidden name=resource id="hidden-resource" value=1>
          </form>
          <form class="form-border-1-px form-download" action="{{ route('recursos-descarga') }}" method="post">
            @csrf
            <input type=hidden name=resource id=resource value=1>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label class="d-none" for="nombre">Nombre</label>
                <input type="text" class="form-control rounded-pill" id="nombre" placeholder="Nombre" name="firstname" required>
              </div>
              <div class="col-md-4 mb-3">
                <label class="d-none" for="apellido">Apellido</label>
                <input type="text" class="form-control rounded-pill" id="apellido" placeholder="Apellido" name="lastname" required>
              </div>
              <div class="col-md-4 mb-3">
                <label class="d-none" for="email">Correo Electrónico</label>
                <input type="text" class="form-control rounded-pill" id="email" placeholder="Correo electrónico" name="email" required>
              </div>
            </div>
            <div class="form-group mt-4">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="checkbox" id="acepta" name="newsletter" class="custom-control-input" value="true" onchange="document.getElementById('modalSubmit').disabled = !this.checked;">
                <label class="custom-control-label" for="acepta">Acepto la suscripción al newsletter</label>
              </div>
            </div>
            <button class="btn btn-primary my-4" disabled=true id="modalSubmit" type="submit" onclick="newUnregisteredDownload()">Descargar mi recurso gratuito</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>Recursos Descargables Para Vos</h2>
        <nav class="" aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center bg-transparent text-marron-claro">
            <li class="breadcrumb-item text-marron-claro"><a class="text-marron-claro" href="{{ route ('index') }}">Inicio</a></li>
            <li class="breadcrumb-item text-secondary active font-weight-bold" aria-current="page">Recursos Descargables
              Para Vos</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>

  <div class="petalos-right">
    <div class="container">
      <div class="row">
        <div class="col-md-4 my-3">
          <div
            class="bg-crema-suave-2 p-4 contenedor-recurso d-flex flex-column align-items-baseline justify-content-around">
            <h4 class="titulo-recurso-descargable">Test sin cargo</h4>
            <p class="text-recurso-descargable my-3 my-md-0">Hacé el test sin costo para ayudarte a identificar en qué
              etapa estás y en qué pilar de tu emprendimiento
              debés enfocarte para mejorar la presencia digital de tu marca y potenciar tus resultados.</p>
            <a class="btn btn-sm btn-outline-secondary rounded-pill btn-recursos-descargables" href="{{ route('test') }}">Quiero hacer el test
              <svg xmlns="http://www.w3.org/2000/svg" width="13.414" height="13.074" viewBox="0 0 13.414 13.074">
                <path id="Icon_awesome-arrow-left" data-name="Icon awesome-arrow-left"
                  d="M5.7,14.846l.665.665a.716.716,0,0,0,1.015,0L13.2,9.693a.716.716,0,0,0,0-1.015l-5.82-5.82a.716.716,0,0,0-1.015,0L5.7,3.523A.719.719,0,0,0,5.712,4.55L9.32,7.987H.715A.717.717,0,0,0,0,8.705v.958a.717.717,0,0,0,.719.719h8.6L5.712,13.819A.714.714,0,0,0,5.7,14.846Z"
                  transform="translate(0.004 -2.647)" fill="currentColor" />
              </svg>
            </a>
          </div>
        </div>
        @foreach ($resources as $resource)
        <div class="col-md-4 my-3">
          <div class="bg-crema-suave-2 p-4 contenedor-recurso d-flex flex-column align-items-baseline justify-content-around">
            <h4 class="titulo-recurso-descargable">{{$resource->title}}</h4>
            <div>{{$resource->description}}</div>
            <button class="btn btn-sm btn-outline-secondary rounded-pill btn-recursos-descargables" onclick="newDownload('{{$resource->id}}')">{{$resource->button}}<svg xmlns="http://www.w3.org/2000/svg" width="13.414"
                height="13.074" viewBox="0 0 13.414 13.074">
                <path id="Icon_awesome-arrow-left" data-name="Icon awesome-arrow-left"
                  d="M5.7,14.846l.665.665a.716.716,0,0,0,1.015,0L13.2,9.693a.716.716,0,0,0,0-1.015l-5.82-5.82a.716.716,0,0,0-1.015,0L5.7,3.523A.719.719,0,0,0,5.712,4.55L9.32,7.987H.715A.717.717,0,0,0,0,8.705v.958a.717.717,0,0,0,.719.719h8.6L5.712,13.819A.714.714,0,0,0,5.7,14.846Z"
                  transform="translate(0.004 -2.647)" fill="currentColor" />
              </svg>
            </button>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>

  <!-- Seccion Newsletter -->
  <div class="container bg-rosa-oscuro rounded p-5 my-5">
    <div class="row">
      <div class="col-md-12">
        <p class="text-white">Todos los meses creo recursos, propuestas y artículos para ayudarte a elevar tu marca con
          herramientas de comunicación, marketing y branding. </p>
        <div><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="76" height="4"
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
      <div class="col-md-12 mt-3">
        <h4 class="titulo-home text-white">¡Suscribete a mi newsletter!</h4>
      </div>
    </div>
    <div class="row mt-3">
      <form id="newsletterForm" class="needs-validation w-100" action="{{ route('newsletter-subscription') }}" method="post">
        @csrf
        <div class="form-row">
          <div class="form-group col-md-3">
            <div class="px-3">
              <input class="form-control rounded-pill border-0" type="text" placeholder="Nombre" name="firstname">
            </div>
          </div>
          <div class="form-group col-md-3">
            <div class="px-3">
              <input class="form-control rounded-pill border-0" type="text" placeholder="Nombre" name="firstname">
            </div>
          </div>
          <div class="form-group col-md-3">
            <div class="px-3">
              <input class="form-control rounded-pill border-0" type="text" placeholder="Nombre" name="firstname">
            </div>
          </div>
          <div class="form-group col-md-3">
            <div class="px-3">
              <input class="form-control rounded-pill border-0" type="text" placeholder="Nombre" name="firstname">
            </div>
          </div>
        </div>
        <div class="mt-3 d-block d-md-flex w-100 justify-content-end px-3">
        <button type="submit" class="btn btn-blanco">Suscribirme <svg class="mb-1 ml-1"
              xmlns="http://www.w3.org/2000/svg" width="9.476" height="16.638" viewBox="0 0 9.476 16.638">
              <g id="next_1_" data-name="next (1)" transform="translate(-60.433 -1.433)">
                <g id="Grupo_475" data-name="Grupo 475" transform="translate(61 2)">
                  <path id="Trazado_343" data-name="Trazado 343"
                    d="M125.974,7.358l-7.2-7.182a.6.6,0,1,0-.852.855l6.773,6.755L117.92,14.54a.6.6,0,0,0,.853.855l7.2-7.182a.6.6,0,0,0,0-.855Z"
                    transform="translate(-117.742 0)" fill="currentColor" stroke="currentColor" stroke-width="1" />
                </g>
              </g>
            </svg>
          </button>
      </div>
      </form>


    </div>
  </div>
  <!-- Modal Envio Exitoso Form -->
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
  <!-- Modal Envio Fallido Form -->
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
<script type="text/javascript">
var registered = {!! json_encode($registered) !!};
var resource_id = 1;
var newDownload = function(r_id){
  let resourceidhi = document.getElementById("resource");
  let hresourceidhi = document.getElementById("hidden-resource");
  resourceidhi.value = r_id;
  hresourceidhi.value = r_id;
  if (registered) {
    $.ajax({
            type: "POST",
            url: "{{ route('recursos-descarga') }}",
            data: $('#hidden-download').serialize(),
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
  }
  else {
    resource_id = r_id;
    $("#staticBackdrop").modal("show");
  }
};

var newUnregisteredDownload = function(r_id){
  registered = true;
  $("#staticBackdrop").modal("hide");
};

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

$('#newsletterForm').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "{{ route('newsletter-subscription') }}",
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

$('.form-download').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "{{ route('recursos-descarga') }}",
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
