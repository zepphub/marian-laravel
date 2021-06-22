@extends('layouts.main')

@section('head')@endsection

@section('title')Test - @endsection

@section('content')
  <div class="petalos-right petalos-left test-form">
    <div class="container my-5">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="numerito-form d-flex align-items-center justify-content-center mx-auto">
            <h4>1</h4>
          </div>
          <h5 class="font-weight-normal mt-4">En la actualidad</h5>
          <h4 class="font-weight-bold">¿Cuál es tu principal desafío emprendedor?</h4>
          <h5 class="text-medium text-marron-claro my-3">Seleccionar opción para comenzar</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-pills justify-content-center mb-3" id="pills-form-test" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link mx-md-3" id="pills-comenzar-tab" data-toggle="pill" href="#pills-comenzar"
                role="tab" aria-controls="pills-comenzar" aria-selected="false">
                <div class="text-center p-md-4 mx-md-3">
                  <img src="{{ asset('img/pill-comenzar.svg') }}" alt="">
                  <h5 class="mt-4 text-marron-claro font-weight-bold">COMENZAR</h5>
                </div>
              </a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link mx-md-3" id="pills-mejorar-tab" data-toggle="pill" href="#pills-mejorar" role="tab"
                aria-controls="pills-mejorar" aria-selected="false">
                <div class="text-center p-md-4 mx-md-3">
                  <img src="{{ asset('img/pill-mejorar.svg') }}" alt="">
                  <h5 class="mt-4 text-marron-claro font-weight-bold">MEJORAR</h5>
                </div>
              </a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link mx-md-3" id="pills-crecer-tab" data-toggle="pill" href="#pills-crecer" role="tab"
                aria-controls="pills-crecer" aria-selected="false">
                <div class="text-center p-md-4 mx-md-3">
                  <img src="{{ asset('img/pill-crecer.svg') }}" alt="">
                  <h5 class="mt-4 text-marron-claro font-weight-bold">CRECER</h5>
                </div>
              </a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">

            <!-- TAB COMENZAR -->
            <div class="tab-pane fade text-center mt-4" id="pills-comenzar" role="tabpanel"
              aria-labelledby="pills-home-tab">

              <h5 class="text-medium text-marron-claro my-3">Tengo la idea de proyecto pero, no estoy segura de cómo
                empezar a emprender.</h5>

              <!-- PASO 2 -->
              <div class="numerito-form d-flex align-items-center justify-content-center mx-auto my-5">
                <h4>2</h4>
              </div>
              <h4 class="font-weight-bold">¿Qué es lo que más te está costando para comenzar a emprender?</h4>
              <div class="row my-5">
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="comenzar_2_1" name="comenzar_2" class="custom-control-input">
                    <label class="custom-control-label" for="comenzar_2_1">&zwnj;</label>
                  </div>
                  <p class="mt-3">No sé por donde comenzar</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="comenzar_2_2" name="comenzar_2" class="custom-control-input">
                    <label class="custom-control-label" for="comenzar_2_2">&zwnj;</label>
                  </div>
                  <p class="mt-3">No tengo herramientas de marketing, estrategias o ventas y siento inseguridad</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="comenzar_2_3" name="comenzar_2" class="custom-control-input">
                    <label class="custom-control-label" for="comenzar_2_3">&zwnj;</label>
                  </div>
                  <p class="mt-3">No estoy segura de que mi idea de negocio sea viable</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="comenzar_2_4" name="comenzar_2" class="custom-control-input">
                    <label class="custom-control-label" for="comenzar_2_4">&zwnj;</label>
                  </div>
                  <p class="mt-3">Quiero crear una marca diferente, con esencia y corazón pero, no sé como trabajar en
                    ello</p>
                </div>
              </div>

              <!-- PASO 3 -->
              <div id="comenzar_3" class="d-none">
              <div class="numerito-form d-flex align-items-center justify-content-center mx-auto my-5">
                <h4>3</h4>
              </div>
              <h4 class="font-weight-bold">¿De qué se trata tu emprendimiento?</h4>
              <div class="row my-5">
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="comenzar_3_1" name="comenzar_3" class="custom-control-input">
                    <label class="custom-control-label" for="comenzar_P3_1">&zwnj;</label>
                  </div>
                  <p class="mt-3">Venta de productos
                    (ejemplo: accesorios, indumentaria, vajilla)</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="comenzar_3_2" name="comenzar_3" class="custom-control-input">
                    <label class="custom-control-label" for="comenzar_3_2">&zwnj;</label>
                  </div>
                  <p class="mt-3">Venta de servicios
                    (ejemplo: talleres, coach, asesoramiento, fotografía)</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="comenzar_3_3" name="comenzar_3" class="custom-control-input">
                    <label class="custom-control-label" for="comenzar_3_3">&zwnj;</label>
                  </div>
                  <p class="mt-3">Marca personal: emprendo desde mi profesión (arquitecta, abogada, licenciada)</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="comenzar_3_4" name="comenzar_3" class="custom-control-input">
                    <label class="custom-control-label" for="comenzar_3_4">&zwnj;</label>
                  </div>
                  <p class="mt-3">Vendo productos y servicios (ejemplo: diseñadora gráfica + agendas de diseño)
                  </p>
                </div>
              </div>
              </div>

              <!-- PASO 4 -->
              <div id="comenzar_4" class="d-none">
              <div class="numerito-form d-flex align-items-center justify-content-center mx-auto my-5 d-none">
                <h4>4</h4>
              </div>
              <h4 class="font-weight-bold">¿Cuánto tiempo de vida tiene tu marca?</h4>
              <div class="row my-5">
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="comenzar_4_1" name="comenzar_4" class="custom-control-input">
                    <label class="custom-control-label" for="comenzar_4_1">&zwnj;</label>
                  </div>
                  <p class="mt-3">Estoy en la etapa idea. Mi marca todavía no salió a la luz</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="comenzar_4_2" name="comenzar_4" class="custom-control-input">
                    <label class="custom-control-label" for="comenzar_4_2">&zwnj;</label>
                  </div>
                  <p class="mt-3">Entre 1 y 3 años</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="comenzar_4_3" name="comenzar_4" class="custom-control-input">
                    <label class="custom-control-label" for="comenzar_4_3">&zwnj;</label>
                  </div>
                  <p class="mt-3">Entre 3 y 5 años</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="comenzar_4_4" name="comenzar_4" class="custom-control-input">
                    <label class="custom-control-label" for="comenzar_4_4">&zwnj;</label>
                  </div>
                  <p class="mt-3">Más de 5 años
                  </p>
                </div>
              </div>
              </div>

              <!-- PASO 5 -->
              <div id="comenzar_5" class="d-none">
              <div class="numerito-form d-flex align-items-center justify-content-center mx-auto my-5 d-none">
                <h4>5</h4>
              </div>
              <h4 class="font-weight-bold">Si tuvieses que elegir ¿Qué tema es el que más te interesa en este momento?
              </h4>
              <div class="row my-5">
                <div class="d-flex flex-column flex-md-row justify-content-between w-100">
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="comenzar_5_1" name="comenzar_5" class="custom-control-input">
                      <label class="custom-control-label" for="comenzar_5_1">&zwnj;</label>
                    </div>
                    <p class="mt-3">Cómo crear un plan de marketing que me ayude a diferenciarme y potenciar resultados
                    </p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="comenzar_5_2" name="comenzar_5" class="custom-control-input">
                      <label class="custom-control-label" for="comenzar_5_2">&zwnj;</label>
                    </div>
                    <p class="mt-3">Cómo ordenar y planificar mis redes sociales dando a conocer la esencia de mi marca
                    </p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="comenzar_5_3" name="comenzar_5" class="custom-control-input">
                      <label class="custom-control-label" for="comenzar_5_3">&zwnj;</label>
                    </div>
                    <p class="mt-3">Motivación, productividad y planificación en el día a día</p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="comenzar_5_4" name="comenzar_5" class="custom-control-input">
                      <label class="custom-control-label" for="comenzar_5_4">&zwnj;</label>
                    </div>
                    <p class="mt-3">Me gustaría obtener herramientas simples y prácticas para darme a conocer y
                      profesionalizar mi marca</p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="comenzar_5_4" name="comenzar_5" class="custom-control-input">
                      <label class="custom-control-label" for="comenzar_5_4">&zwnj;</label>
                    </div>
                    <p class="mt-3">Ninguna de las anteriores</p>
                  </div>
                </div>
              </div>
              </div>

              <div id="comenzar_resultado" class="row shadow rounded-lg p-3 d-none">
                <div class="col-md-7 text-left">
                  <div class="p-md-4 p-0">
                    <img src="{{ asset('img/result-test-form-icon.svg') }}" alt="">
                    <h4 class="titulo-home font-weight-bold mt-4">Tu resultado</h4>
                    <img src="{{ asset('img/separador-titulo-svg-crema.svg') }}" alt="">
                    <h4 class="mt-4">Construyamos una marca con esencia y corazón.</h4>
                    <p class="mt-3 text-marron-claro">Teniendo en cuenta tus respuestas, quiero compartirte una guía con
                      el paso a paso para que logres crear una marca de forma
                      estratégica, sin perder la esencia.
                    </p>
                    <p class=" text-marron-claro">Para que el contenido llegue a tu correo y para recibir recursos
                      exclusivos para acompañarte en este proceso, ¡dejame tu mail y nos
                      vemos allí!</p>
                    <a href="">
                      <h4 class="text-primary text-medium">Descargar Video <svg xmlns="http://www.w3.org/2000/svg"
                          width="16.703" height="14.317" viewBox="0 0 16.703 14.317">
                          <path id="Icon_metro-arrow-right" data-name="Icon metro-arrow-right"
                            d="M14.887,19.752l5.966-5.966a1.193,1.193,0,0,0,0-1.687L14.887,6.134A1.193,1.193,0,0,0,13.2,7.821l3.929,3.929H5.692a1.193,1.193,0,1,0,0,2.386H17.129L13.2,18.065a1.193,1.193,0,0,0,1.687,1.687Z"
                            transform="translate(-4.499 -5.784)" fill="currentColor" />
                        </svg></h4>
                    </a>
                  </div>
                </div>
                <div
                  class="col-md-5 mt-4 mt-md-0 rounded bg-textura-form-test d-flex flex-column justify-content-center">
                  <div class="p-4 p-md-0 px-md-3">
                    <h4 class="font-weight-bold text-white mb-4">¡Dejame tu mail y, nos vemos allí!</h4>
                    <form class="needs-validation form-home form-test" action="{{ route('test-formulario-send') }}" method="post" novalidate>
                      @csrf
                      <input type="hidden" name="selection" value="comenzar">
                      <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <input type="text" class="form-control rounded-pill" id="nombre" placeholder="Tu nombre" name=name required>
                        </div>
                        <div class="col-md-12 mb-3">
                          <input type="email" class="form-control rounded-pill" id="email" placeholder="Tu mail" name=email required>
                        </div>
                      </div>

                      <div class="text-center mt-md-4">
                        <button class="btn btn-white text-primary" type="submit">Enviar
                        </button>
                      </div>
                    </form>

                  </div>
                </div>
              </div>

            </div>
            <!-- TAB COMENZAR -->


            <!-- TAB MEJORAR -->
            <div class="tab-pane fade text-center mt-4" id="pills-mejorar" role="tabpanel"
              aria-labelledby="pills-mejorar-tab">

              <h5 class="text-medium text-marron-claro my-3">Mi proyecto está en marcha y necesito profesionalizar lo
                que hago y/o mejorar alguna de las áreas para atraer más clientes.</h5>

              <!-- PASO 2 -->
              <div class="numerito-form d-flex align-items-center justify-content-center mx-auto my-5">
                <h4>2</h4>
              </div>
              <h4 class="font-weight-bold">¿Cuál es el área que más te está costando?
              </h4>
              <div class="row my-5">
                <div class="d-flex flex-column flex-md-row justify-content-between w-100">
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="mejorar_2_1" name="mejorar_2" class="custom-control-input">
                      <label class="custom-control-label" for="mejorar_2_1">&zwnj;</label>
                    </div>
                    <p class="mt-3">Identificar mi diferencial y comunicar mi propuesta de valor
                    </p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="mejorar_2_2" name="mejorar_2" class="custom-control-input">
                      <label class="custom-control-label" for="mejorar_2_2">&zwnj;</label>
                    </div>
                    <p class="mt-3">Reconocer a mi público objetivo para que mis propuestas lleguen a las personas
                      indicadas
                    </p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="mejorar_2_3" name="mejorar_2" class="custom-control-input">
                      <label class="custom-control-label" for="mejorar_2_3">&zwnj;</label>
                    </div>
                    <p class="mt-3">Planificar y organizar el contenido para mis canales digitales</p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="mejorar_2_4" name="mejorar_2" class="custom-control-input">
                      <label class="custom-control-label" for="mejorar_2_4">&zwnj;</label>
                    </div>
                    <p class="mt-3">Siento que el lanzamiento de mis nuevas propuestas no tienen impacto ni llegada</p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="mejorar_2_5" name="mejorar_2" class="custom-control-input">
                      <label class="custom-control-label" for="mejorar_2_5">&zwnj;</label>
                    </div>
                    <p class="mt-3">Todas los anteriores</p>
                  </div>
                </div>
              </div>

              <!-- PASO 3 -->
              <div id="mejorar_3" class="d-none">
              <div class="numerito-form d-flex align-items-center justify-content-center mx-auto my-5">
                <h4>3</h4>
              </div>
              <h4 class="font-weight-bold">¿De qué se trata tu emprendimiento?</h4>
              <div class="row my-5">
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="mejorar_3_1" name="mejorar_3" class="custom-control-input">
                    <label class="custom-control-label" for="mejorar_3_1">&zwnj;</label>
                  </div>
                  <p class="mt-3">Venta de productos
                    (ejemplo: accesorios, indumentaria, vajilla)</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="mejorar_3_2" name="mejorar_3" class="custom-control-input">
                    <label class="custom-control-label" for="mejorar_3_2">&zwnj;</label>
                  </div>
                  <p class="mt-3">Venta de servicios
                    (ejemplo: talleres, coach, asesoramiento, fotografía)</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="mejorar_3_3" name="mejorar_3" class="custom-control-input">
                    <label class="custom-control-label" for="mejorar_3_3">&zwnj;</label>
                  </div>
                  <p class="mt-3">Marca personal: emprendo desde mi profesión (arquitecta, abogada, licenciada)</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="mejorar_3_4" name="mejorar_3" class="custom-control-input">
                    <label class="custom-control-label" for="mejorar_3_4">&zwnj;</label>
                  </div>
                  <p class="mt-3">Vendo productos y servicios (ejemplo: diseñadora gráfica + agendas de diseño)
                  </p>
                </div>
              </div>
              </div>

              <!-- PASO 4 -->
              <div id="mejorar_4" class="d-none">
              <div class="numerito-form d-flex align-items-center justify-content-center mx-auto my-5">
                <h4>4</h4>
              </div>
              <h4 class="font-weight-bold">¿Cuánto tiempo de vida tiene tu marca?</h4>
              <div class="row my-5">
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="mejorar_4_1" name="mejorar_4" class="custom-control-input">
                    <label class="custom-control-label" for="mejorar_4_1">&zwnj;</label>
                  </div>
                  <p class="mt-3">Estoy en la etapa idea. Mi marca todavía no salió a la luz</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="mejorar_4_2" name="mejorar_4" class="custom-control-input">
                    <label class="custom-control-label" for="mejorar_4_2">&zwnj;</label>
                  </div>
                  <p class="mt-3">Entre 1 y 3 años</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="mejorar_4_3" name="mejorar_4" class="custom-control-input">
                    <label class="custom-control-label" for="mejorar_4_3">&zwnj;</label>
                  </div>
                  <p class="mt-3">Entre 3 y 5 años</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="mejorar_4_4" name="mejorar_4" class="custom-control-input">
                    <label class="custom-control-label" for="mejorar_4_4">&zwnj;</label>
                  </div>
                  <p class="mt-3">Más de 5 años
                  </p>
                </div>
              </div>
              </div>

              <!-- PASO 5 -->
              <div id="mejorar_5" class="d-none">
              <div class="numerito-form d-flex align-items-center justify-content-center mx-auto my-5">
                <h4>5</h4>
              </div>
              <h4 class="font-weight-bold">Si tuvieses que elegir ¿Qué tema es el que más te interesa en este momento?
              </h4>
              <div class="row my-5">
                <div class="d-flex flex-column flex-md-row justify-content-between w-100">
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="mejorar_5_1" name="mejorar_5" class="custom-control-input">
                      <label class="custom-control-label" for="mejorar_5_1">&zwnj;</label>
                    </div>
                    <p class="mt-3">Cómo crear un plan de marketing que me ayude a diferenciarme y potenciar resultados
                    </p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="mejorar_5_2" name="mejorar_5" class="custom-control-input">
                      <label class="custom-control-label" for="mejorar_5_2">&zwnj;</label>
                    </div>
                    <p class="mt-3">Cómo ordenar y planificar mis redes sociales dando a conocer la esencia de mi marca
                    </p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="mejorar_5_3" name="mejorar_5" class="custom-control-input">
                      <label class="custom-control-label" for="mejorar_5_3">&zwnj;</label>
                    </div>
                    <p class="mt-3">Motivación, productividad y planificación en el día a día</p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="mejorar_5_4" name="mejorar_5" class="custom-control-input">
                      <label class="custom-control-label" for="mejorar_5_4">&zwnj;</label>
                    </div>
                    <p class="mt-3">Me gustaría obtener herramientas simples y prácticas para darme a conocer y
                      profesionalizar mi marca</p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="mejorar_5_5" name="mejorar_5" class="custom-control-input">
                      <label class="custom-control-label" for="mejorar_5_5">&zwnj;</label>
                    </div>
                    <p class="mt-3">Ninguna de las anteriores</p>
                  </div>
                </div>
              </div>
              </div>

              <div id="mejorar_resultado" class="row shadow rounded-lg p-3 d-none">
                <div class="col-md-7 text-left">
                  <div class="p-md-4 p-0">
                    <img src="{{ asset('img/result-test-form-icon.svg') }}" alt="">
                    <h4 class="titulo-home font-weight-bold mt-4">Tu resultado</h4>
                    <img src="{{ asset('img/separador-titulo-svg-crema.svg') }}" alt="">
                    <h4 class="mt-4">¡Consolidá tu marca en el universo digital!</h4>
                    <p class="mt-3 text-marron-claro">Teniendo en cuenta tus respuestas, quiero compartirte una guía con
                      el paso a paso para que logres afianzar tu marca en el universo digital.
                    </p>
                    <p class=" text-marron-claro">Para que el contenido llegue a tu correo y para recibir recursos
                      exclusivos para acompañarte en este proceso, ¡dejame tu mail y nos vemos allí!</p>
                    <a href="">
                      <h4 class="text-primary text-medium">Descargar Video <svg xmlns="http://www.w3.org/2000/svg"
                          width="16.703" height="14.317" viewBox="0 0 16.703 14.317">
                          <path id="Icon_metro-arrow-right" data-name="Icon metro-arrow-right"
                            d="M14.887,19.752l5.966-5.966a1.193,1.193,0,0,0,0-1.687L14.887,6.134A1.193,1.193,0,0,0,13.2,7.821l3.929,3.929H5.692a1.193,1.193,0,1,0,0,2.386H17.129L13.2,18.065a1.193,1.193,0,0,0,1.687,1.687Z"
                            transform="translate(-4.499 -5.784)" fill="currentColor" />
                        </svg></h4>
                    </a>
                  </div>
                </div>
                <div
                  class="col-md-5 mt-4 mt-md-0 rounded bg-textura-form-test d-flex flex-column justify-content-center">
                  <div class="p-4 p-md-0 px-md-3">
                    <p class="text-white">Para que el contenido llegue a tu correo y además, comenzar a recibir recursos
                      exclusivos para acompañarte en este proceso</p>
                    <h4 class="font-weight-bold text-white mb-4">¡Dejame tu mail y, nos vemos allí!</h4>
                    <form class="needs-validation form-home form-test" action="{{ route('test-formulario-send') }}" method="post" novalidate>
                      @csrf
                      <input type="hidden" name="selection" value="mejorar">
                      <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <input type="text" class="form-control rounded-pill" id="nombre" placeholder="Tu nombre" name=name required>
                        </div>
                        <div class="col-md-12 mb-3">
                          <input type="email" class="form-control rounded-pill" id="email" placeholder="Tu mail" name=email required>
                        </div>
                      </div>

                      <div class="text-center mt-md-4">
                        <button class="btn btn-white text-primary" type="submit">Enviar
                        </button>
                      </div>
                    </form>

                  </div>
                </div>
              </div>

            </div>
            <!-- TAB MEJORAR -->


            <!-- TAB CRECER -->
            <div class="tab-pane fade text-center mt-4" id="pills-crecer" role="tabpanel"
              aria-labelledby="pills-crecer-tab">
              <h5 class="text-medium text-marron-claro my-3">Mi proyecto está en marcha y necesito profesionalizar lo
                que hago y/o mejorar alguna de las áreas para atraer más clientes.</h5>

              <!-- PASO 2 -->
              <div class="numerito-form d-flex align-items-center justify-content-center mx-auto my-5">
                <h4>2</h4>
              </div>
              <h4 class="font-weight-bold">¿Qué creés que te está faltando para crecer?
              </h4>
              <div class="row my-5">
                <div class="d-flex flex-column flex-md-row justify-content-between w-100">
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="crecer_2_1" name="crecer_2" class="custom-control-input">
                      <label class="custom-control-label" for="crecer_2_1">&zwnj;</label>
                    </div>
                    <p class="mt-3">Crear un plan de negocios con proyecciones y objetivos claros
                    </p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="crecer_2_2" name="crecer_2" class="custom-control-input">
                      <label class="custom-control-label" for="crecer_2_2">&zwnj;</label>
                    </div>
                    <p class="mt-3">Diversificar mis propuestas creando productos digitales
                    </p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="crecer_2_3" name="crecer_2" class="custom-control-input">
                      <label class="custom-control-label" for="crecer_2_3">&zwnj;</label>
                    </div>
                    <p class="mt-3">Automatizar y/o delegar procesos</p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="crecer_2_4" name="crecer_2" class="custom-control-input">
                      <label class="custom-control-label" for="crecer_2_4">&zwnj;</label>
                    </div>
                    <p class="mt-3">Innovar y avanzar con mi propia plataforma web para vender y/o comunicar mis propuestas y contenidos</p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="crecer_2_5" name="crecer_2" class="custom-control-input">
                      <label class="custom-control-label" for="crecer_2_5">&zwnj;</label>
                    </div>
                    <p class="mt-3">No estoy segura</p>
                  </div>
                </div>
              </div>

              <!-- PASO 3 -->
              <div id="crecer_3" class="d-none">
              <div class="numerito-form d-flex align-items-center justify-content-center mx-auto my-5">
                <h4>3</h4>
              </div>
              <h4 class="font-weight-bold">¿De qué se trata tu emprendimiento?</h4>
              <div class="row my-5">
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="crecer_3_1" name="crecer_3" class="custom-control-input">
                    <label class="custom-control-label" for="crecer_3_1">&zwnj;</label>
                  </div>
                  <p class="mt-3">Venta de productos
                    (ejemplo: accesorios, indumentaria, vajilla)</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="crecer_3_2" name="crecer_3" class="custom-control-input">
                    <label class="custom-control-label" for="crecer_3_2">&zwnj;</label>
                  </div>
                  <p class="mt-3">Venta de servicios
                    (ejemplo: talleres, coach, asesoramiento, fotografía)</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="crecer_3_3" name="crecer_3" class="custom-control-input">
                    <label class="custom-control-label" for="crecer_3_3">&zwnj;</label>
                  </div>
                  <p class="mt-3">Marca personal: emprendo desde mi profesión (arquitecta, abogada, licenciada)</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="crecer_3_4" name="crecer_3" class="custom-control-input">
                    <label class="custom-control-label" for="crecer_3_4">&zwnj;</label>
                  </div>
                  <p class="mt-3">Vendo productos y servicios (ejemplo: diseñadora gráfica + agendas de diseño)
                  </p>
                </div>
              </div>
              </div>

              <!-- PASO 4 -->
              <div id="crecer_4" class="d-none">
              <div class="numerito-form d-flex align-items-center justify-content-center mx-auto my-5">
                <h4>4</h4>
              </div>
              <h4 class="font-weight-bold">¿Cuánto tiempo de vida tiene tu marca?</h4>
              <div class="row my-5">
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="crecer_4_1" name="crecer_4" class="custom-control-input">
                    <label class="custom-control-label" for="crecer_4_1">&zwnj;</label>
                  </div>
                  <p class="mt-3">Estoy en la etapa idea. Mi marca todavía no salió a la luz</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="crecer_4_2" name="crecer_4" class="custom-control-input">
                    <label class="custom-control-label" for="crecer_4_2">&zwnj;</label>
                  </div>
                  <p class="mt-3">Entre 1 y 3 años</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="crecer_4_3" name="crecer_4" class="custom-control-input">
                    <label class="custom-control-label" for="crecer_4_3">&zwnj;</label>
                  </div>
                  <p class="mt-3">Entre 3 y 5 años</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="crecer_4_4" name="crecer_4" class="custom-control-input">
                    <label class="custom-control-label" for="crecer_4_4">&zwnj;</label>
                  </div>
                  <p class="mt-3">Más de 5 años
                  </p>
                </div>
              </div>
              </div>

              <!-- PASO 5 -->
              <div id="crecer_5" class="d-none">
              <div class="numerito-form d-flex align-items-center justify-content-center mx-auto my-5">
                <h4>5</h4>
              </div>
              <h4 class="font-weight-bold">Si tuvieses que elegir ¿Qué tema es el que más te interesa en este momento?
              </h4>
              <div class="row my-5">
                <div class="d-flex flex-column flex-md-row justify-content-between w-100">
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="crecer_5_1" name="crecer_5" class="custom-control-input">
                      <label class="custom-control-label" for="crecer_5_1">&zwnj;</label>
                    </div>
                    <p class="mt-3">Cómo crear un plan de marketing que me ayude a diferenciarme y potenciar resultados
                    </p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="crecer_5_2" name="crecer_5" class="custom-control-input">
                      <label class="custom-control-label" for="crecer_5_2">&zwnj;</label>
                    </div>
                    <p class="mt-3">Ordenar y planificar mis redes sociales dando a conocer la esencia de mi marca
                    </p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="crecer_5_3" name="crecer_5" class="custom-control-input">
                      <label class="custom-control-label" for="crecer_5_3">&zwnj;</label>
                    </div>
                    <p class="mt-3">Motivación, productividad y planificación en el día a día</p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="crecer_5_4" name="crecer_5" class="custom-control-input">
                      <label class="custom-control-label" for="crecer_5_4">&zwnj;</label>
                    </div>
                    <p class="mt-3">Me gustaría obtener herramientas simples y prácticas para darme a conocer y
                      profesionalizar mi marca</p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="crecer_5_4" name="crecer_5" class="custom-control-input">
                      <label class="custom-control-label" for="crecer_5_4">&zwnj;</label>
                    </div>
                    <p class="mt-3">Ninguna de las anteriores</p>
                  </div>
                </div>
              </div>
              </div>

              <div id="crecer_resultado" class="row shadow rounded-lg p-3 d-none">
                <div class="col-md-7 text-left">
                  <div class="p-md-4 p-0">
                    <img src="{{ asset('img/result-test-form-icon.svg') }}" alt="">
                    <h4 class="titulo-home font-weight-bold mt-4">Tu resultado</h4>
                    <img src="{{ asset('img/separador-titulo-svg-crema.svg') }}" alt="">
                    <h4 class="mt-4">¡Proyectá tu negocio con tus propios productos digitales!</h4>
                    <p class="mt-3 text-marron-claro">Teniendo en cuenta tus respuestas, quiero compartirte una guía que creé específicamente para ayudarte a crear tu plan de acción, con herramientas para identificar los distintos productos digitales que podés crear desde tu marca. 
                    </p>
                    <p class="text-secondary">Para obtener la guía y recibir contenido exclusivo para acompañarte en este proceso, ¡dejame tu mail y nos vemos allí!</p>
                    <a href="">
                      <h4 class="text-primary text-medium">Descargar Guía <svg xmlns="http://www.w3.org/2000/svg"
                          width="16.703" height="14.317" viewBox="0 0 16.703 14.317">
                          <path id="Icon_metro-arrow-right" data-name="Icon metro-arrow-right"
                            d="M14.887,19.752l5.966-5.966a1.193,1.193,0,0,0,0-1.687L14.887,6.134A1.193,1.193,0,0,0,13.2,7.821l3.929,3.929H5.692a1.193,1.193,0,1,0,0,2.386H17.129L13.2,18.065a1.193,1.193,0,0,0,1.687,1.687Z"
                            transform="translate(-4.499 -5.784)" fill="currentColor" />
                        </svg></h4>
                    </a>
                  </div>
                </div>
                <div
                  class="col-md-5 mt-4 mt-md-0 rounded bg-textura-form-test d-flex flex-column justify-content-center">
                  <div class="p-4 p-md-0 px-md-3">
                    <p class="text-white">Para que el contenido llegue a tu correo y además, comenzar a recibir recursos
                      exclusivos para acompañarte en este proceso</p>
                    <h4 class="font-weight-bold text-white mb-4">¡Dejame tu mail y, nos vemos allí!</h4>
                    <form class="needs-validation form-home form-test" action="{{ route('test-formulario-send') }}" method="post" novalidate>
                      @csrf
                      <input type="hidden" name="selection" value="crecer">
                      <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <input type="text" class="form-control rounded-pill" id="nombre" placeholder="Tu nombre" name=name required>
                        </div>
                        <div class="col-md-12 mb-3">
                          <input type="email" class="form-control rounded-pill" id="email" placeholder="Tu mail" name=email required>
                        </div>
                      </div>

                      <div class="text-center mt-md-4">
                        <button class="btn btn-white text-primary" type="submit">Enviar
                        </button>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>
            <!-- TAB CRECER -->

          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- Modal Envio Exitoso -->
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
  <!-- Modal Envio Fallido -->
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

$('.form-test').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "{{ route('test-formulario-send') }}",
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

$('input:radio').on('change', function (e) {
    [ sel, step ] = $(this).attr('name').split("_");
    step = parseInt(step);
    if (step < 5){
      $("#"+ sel + "_" + (step + 1)).removeClass("d-none");
    } else {
      $("#"+ sel + "_resultado").removeClass("d-none");
    };
});
</script>
@endsection
