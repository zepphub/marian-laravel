@extends('admin.layouts.app')

@section('content')
      <div class="col-md-9 p-3 p-md-5">
        <div class="row">
          <div class="col-md-12">
            <div class="align-items-md-center d-flex flex-column flex-md-row justify-content-between my-4 my-md-0">
              <h2 class="order-2 order-md-1">Editar Recurso</h2>
              <a class="order-1 order-md-2" href="{{ route('admin.resources.index') }}"><button class="btn btn-outline-secondary"><svg
                    class="mr-2" style="margin-bottom:2px" xmlns="http://www.w3.org/2000/svg" width="7" height="10"
                    viewBox="0 0 7.771 11.157">
                    <path id="Icon_awesome-chevron-down" data-name="Icon awesome-chevron-down"
                      d="M5.145.18.18,5.145a.613.613,0,0,0,0,.867l.579.579a.613.613,0,0,0,.866,0L5.578,2.657,9.532,6.592a.613.613,0,0,0,.866,0l.579-.579a.613.613,0,0,0,0-.867L6.012.18A.613.613,0,0,0,5.145.18Z"
                      transform="translate(0 11.157) rotate(-90)" fill="currentColor" />
                  </svg>
                  Volver</button></a>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-md-8">
            <form>
              <h5 class="text-marron-claro font-weight-normal mb-2">Título del evento</h5>
              <input class="form-control form-control-lg rounded-pill" type="text"
                placeholder="Cafecito: Especial planificación y productividad">
              <h5 class="mt-5 text-marron-claro font-weight-normal mb-2">Descripción</h5>
              <textarea class="form-control" name="" id="" cols="30"
                rows="10">En esta guía te comparto el paso a paso para generar propuestas auténticas para tu audiencia</textarea>
              <div class="row mt-4 mt-md-5">
                <div class="col-md-12">
                  <h5 class="text-marron-claro text-medium mb-2">Texto botón</h5>
                  <input class="form-control form-control-lg rounded-pill" type="text"
                    placeholder="30 ideas de contenido para conectar con tu público ideal">
                </div>
              </div>
              <div class="row mt-4 mt-md-5">
                <div class="col-md-12">
                  <h5 class="text-marron-claro text-medium m-0">Archivo descargable</h5>
                  <div class="d-md-flex align-items-center">
                    <button class="btn btn-primary mr-md-4">Subir archivo</button>
                    <p class="m-0">30 ideas para conecetar.pdf</p>
                    <a class="btn rounded-circle" href=""><svg xmlns="http://www.w3.org/2000/svg" width="35.973"
                        height="38.255" viewBox="0 0 35.973 38.255">
                        <g id="Button" transform="translate(-854.413 -2503.892)">
                          <rect id="Background" width="35.973" height="38.255" rx="17.986"
                            transform="translate(854.413 2503.892)" fill="#e67161" />
                          <path id="Icon_open-trash" data-name="Icon open-trash"
                            d="M6.846,0A2.289,2.289,0,0,0,4.564,2.282H2.282A2.289,2.289,0,0,0,0,4.564H15.973a2.289,2.289,0,0,0-2.282-2.282H11.409A2.289,2.289,0,0,0,9.127,0ZM2.282,6.846V17.821a.42.42,0,0,0,.434.434H13.28a.42.42,0,0,0,.434-.434V6.846H11.432v7.986a1.141,1.141,0,0,1-2.282,0V6.846H6.868v7.986a1.141,1.141,0,0,1-2.282,0V6.846H2.3Z"
                            transform="translate(864.413 2513.892)" fill="#fff" />
                        </g>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>

            </form>
          </div>
          <div class="col-md-4">
            <div class="text-center mt-5 mt-md-0">
              <img class="d-block img-fluid mx-auto" src="https://via.placeholder.com/150" alt="">
              <button class="btn btn-primary mt-4">Subir imagen</button>
            </div>
          </div>
        </div>
        <hr class="border-marron-claro my-5 mx-0">
        <div class="row my-4">
          <div class="col-md-12">
            <div class="d-block d-md-flex justify-content-md-end justify-content-center">
              <a href=""><button class="btn btn-outline-primary btn-block">Publicar</button></a>
            </div>
          </div>
        </div>
      </div>
@endsection
