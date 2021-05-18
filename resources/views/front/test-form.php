<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/starter.css">
  <link rel="stylesheet" href="assets/css/estilos.css">
  <title>Mariann</title>
</head>

<body>

  <?php include 'header.php';?>

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
              <a class="nav-link mx-md-3 active" id="pills-comenzar-tab" data-toggle="pill" href="#pills-comenzar"
                role="tab" aria-controls="pills-comenzar" aria-selected="true">
                <div class="text-center p-md-4 mx-md-3">
                  <img src="assets/img/pill-comenzar.svg" alt="">
                  <h5 class="mt-4 text-marron-claro font-weight-bold">COMENZAR</h5>
                </div>
              </a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link mx-md-3" id="pills-mejorar-tab" data-toggle="pill" href="#pills-mejorar" role="tab"
                aria-controls="pills-mejorar" aria-selected="false">
                <div class="text-center p-md-4 mx-md-3">
                  <img src="assets/img/pill-mejorar.svg" alt="">
                  <h5 class="mt-4 text-marron-claro font-weight-bold">MEJORAR</h5>
                </div>
              </a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link mx-md-3" id="pills-crecer-tab" data-toggle="pill" href="#pills-crecer" role="tab"
                aria-controls="pills-crecer" aria-selected="false">
                <div class="text-center p-md-4 mx-md-3">
                  <img src="assets/img/pill-mejorar.svg" alt="">
                  <h5 class="mt-4 text-marron-claro font-weight-bold">MEJORAR</h5>
                </div>
              </a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">

            <!-- TAB COMENZAR -->
            <div class="tab-pane fade show active text-center mt-4" id="pills-comenzar" role="tabpanel"
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
                    <input type="radio" id="comenzar_1" name="comenzar_step_2" class="custom-control-input">
                    <label class="custom-control-label" for="comenzar_1">&zwnj;</label>
                  </div>
                  <p class="mt-3">No se por donde comenzar</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="comenzar_2" name="comenzar_step_2" class="custom-control-input">
                    <label class="custom-control-label" for="comenzar_2">&zwnj;</label>
                  </div>
                  <p class="mt-3">No tengo herramientas de marketing, estrategias o ventas y siento inseguridad</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="comenzar_3" name="comenzar_step_2" class="custom-control-input">
                    <label class="custom-control-label" for="comenzar_3">&zwnj;</label>
                  </div>
                  <p class="mt-3">No estoy segura de que mi idea de negocio sea viable</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="comenzar_4" name="comenzar_step_2" class="custom-control-input">
                    <label class="custom-control-label" for="comenzar_4">&zwnj;</label>
                  </div>
                  <p class="mt-3">Quiero crear una marca diferente, con esencia y corazón pero, no se como trabajar en
                    ello</p>
                </div>
              </div>

              <!-- PASO 3 -->
              <div class="numerito-form d-flex align-items-center justify-content-center mx-auto my-5">
                <h4>3</h4>
              </div>
              <h4 class="font-weight-bold">¿De qué se trata tu emprendimiento?</h4>
              <div class="row my-5">
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="comenzar_P3_1" name="comenzar_step_3" class="custom-control-input">
                    <label class="custom-control-label" for="comenzar_P3_1">&zwnj;</label>
                  </div>
                  <p class="mt-3">Venta de productos
                    (ejemplo: accesorios, indumentaria, vajilla)</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="comenzar_P3_2" name="comenzar_step_3" class="custom-control-input">
                    <label class="custom-control-label" for="comenzar_P3_2">&zwnj;</label>
                  </div>
                  <p class="mt-3">Venta de servicios
                    (ejemplo: talleres, coach, asesoramiento, fotografía)</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="comenzar_P3_3" name="comenzar_step_3" class="custom-control-input">
                    <label class="custom-control-label" for="comenzar_P3_3">&zwnj;</label>
                  </div>
                  <p class="mt-3">Marca personal: emprendo desde mi profesión (arquitecta, abogada, licenciada)</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="comenzar_P3_4" name="comenzar_step_3" class="custom-control-input">
                    <label class="custom-control-label" for="comenzar_P3_4">&zwnj;</label>
                  </div>
                  <p class="mt-3">Vendo productos y servicios (ejemplo: diseñadora gráfica + agendas de diseño)
                  </p>
                </div>
              </div>

              <!-- PASO 4 -->
              <div class="numerito-form d-flex align-items-center justify-content-center mx-auto my-5">
                <h4>4</h4>
              </div>
              <h4 class="font-weight-bold">¿Cuánto tiempo de vida tiene tu marca?</h4>
              <div class="row my-5">
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="comenzar_P4_1" name="comenzar_step_4" class="custom-control-input">
                    <label class="custom-control-label" for="comenzar_P4_1">&zwnj;</label>
                  </div>
                  <p class="mt-3">Estoy en la etapa idea. Mi marca todavía no salió a la luz</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="comenzar_P4_2" name="comenzar_step_4" class="custom-control-input">
                    <label class="custom-control-label" for="comenzar_P4_2">&zwnj;</label>
                  </div>
                  <p class="mt-3">Entre 1 y 3 años</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="comenzar_P4_3" name="comenzar_step_4" class="custom-control-input">
                    <label class="custom-control-label" for="comenzar_P4_3">&zwnj;</label>
                  </div>
                  <p class="mt-3">Entre 3 y 5 años</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="comenzar_P4_4" name="comenzar_step_4" class="custom-control-input">
                    <label class="custom-control-label" for="comenzar_P4_4">&zwnj;</label>
                  </div>
                  <p class="mt-3">Más de 5 años
                  </p>
                </div>
              </div>

              <!-- PASO 5 -->
              <div class="numerito-form d-flex align-items-center justify-content-center mx-auto my-5">
                <h4>5</h4>
              </div>
              <h4 class="font-weight-bold">Si tuvieses que elegir ¿Qué tema es el que más te interesa en este momento?
              </h4>
              <div class="row my-5">
                <div class="d-flex flex-column flex-md-row justify-content-between w-100">
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="comenzar_P5_1" name="comenzar_step_5" class="custom-control-input">
                      <label class="custom-control-label" for="comenzar_P5_1">&zwnj;</label>
                    </div>
                    <p class="mt-3">Cómo crear un plan de marketing que me ayude a diferenciarme y potenciar resultados
                    </p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="comenzar_P5_2" name="comenzar_step_5" class="custom-control-input">
                      <label class="custom-control-label" for="comenzar_P5_2">&zwnj;</label>
                    </div>
                    <p class="mt-3">Cómo ordenar y planificar mis redes sociales dando a conocer la esencia de mi marca
                    </p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="comenzar_P5_3" name="comenzar_step_5" class="custom-control-input">
                      <label class="custom-control-label" for="comenzar_P5_3">&zwnj;</label>
                    </div>
                    <p class="mt-3">Motivación, productividad y planificación en el día a día</p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="comenzar_P5_4" name="comenzar_step_5" class="custom-control-input">
                      <label class="custom-control-label" for="comenzar_P5_4">&zwnj;</label>
                    </div>
                    <p class="mt-3">Me gustaría obtener herramientas simples y prácticas para darme a conocer y
                      profesionalizar mi marca</p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="comenzar_P5_4" name="comenzar_step_5" class="custom-control-input">
                      <label class="custom-control-label" for="comenzar_P5_4">&zwnj;</label>
                    </div>
                    <p class="mt-3">Ninguna de las anteriores</p>
                  </div>
                </div>
              </div>

              <div class="row shadow rounded-lg p-3">
                <div class="col-md-7 text-left">
                  <div class="p-md-4 p-0">
                    <img src="assets/img/result-test-form-icon.svg" alt="">
                    <h4 class="titulo-home font-weight-bold mt-4">Tu resultado</h4>
                    <img src="assets/img/separador-titulo-svg-crema.svg" alt="">
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
                    <form id="result-test" class="needs-validation form-home" novalidate>
                      <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <input type="text" class="form-control rounded-pill" id="nombre" placeholder="Tu nombre"
                            required>
                        </div>
                        <div class="col-md-12 mb-3">
                          <input type="email" class="form-control rounded-pill" id="email" placeholder="Tu mail"
                            required>
                        </div>
                      </div>
                    </form>

                    <div class="text-center mt-md-4">
                      <button class="btn btn-white text-primary" type="submit">Enviar
                      </button>
                    </div>

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
                      <input type="radio" id="crecer_1" name="crecer_step_5" class="custom-control-input">
                      <label class="custom-control-label" for="crecer_1">&zwnj;</label>
                    </div>
                    <p class="mt-3">Identificar mi diferencial y comunicar mi propuesta de valor
                    </p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="crecer_2" name="crecer_step_5" class="custom-control-input">
                      <label class="custom-control-label" for="crecer_2">&zwnj;</label>
                    </div>
                    <p class="mt-3">Reconocer a mi público objetivo para que mis propuestas lleguen a las personas
                      indicadas
                    </p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="crecer_3" name="crecer_step_5" class="custom-control-input">
                      <label class="custom-control-label" for="crecer_3">&zwnj;</label>
                    </div>
                    <p class="mt-3">Planificar y organizar el contenido para mis canales digitales</p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="crecer_4" name="crecer_step_5" class="custom-control-input">
                      <label class="custom-control-label" for="crecer_4">&zwnj;</label>
                    </div>
                    <p class="mt-3">Siento que el lanzamiento de mis nuevas propuestas no tienen impacto ni llegada</p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="crecer_4" name="crecer_step_5" class="custom-control-input">
                      <label class="custom-control-label" for="crecer_4">&zwnj;</label>
                    </div>
                    <p class="mt-3">Todas los anteriores</p>
                  </div>
                </div>
              </div>

              <!-- PASO 3 -->
              <div class="numerito-form d-flex align-items-center justify-content-center mx-auto my-5">
                <h4>3</h4>
              </div>
              <h4 class="font-weight-bold">¿De qué se trata tu emprendimiento?</h4>
              <div class="row my-5">
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="crecer_P3_1" name="crecer_step_3" class="custom-control-input">
                    <label class="custom-control-label" for="crecer_P3_1">&zwnj;</label>
                  </div>
                  <p class="mt-3">Venta de productos
                    (ejemplo: accesorios, indumentaria, vajilla)</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="crecer_P3_2" name="crecer_step_3" class="custom-control-input">
                    <label class="custom-control-label" for="crecer_P3_2">&zwnj;</label>
                  </div>
                  <p class="mt-3">Venta de servicios
                    (ejemplo: talleres, coach, asesoramiento, fotografía)</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="crecer_P3_3" name="crecer_step_3" class="custom-control-input">
                    <label class="custom-control-label" for="crecer_P3_3">&zwnj;</label>
                  </div>
                  <p class="mt-3">Marca personal: emprendo desde mi profesión (arquitecta, abogada, licenciada)</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="crecer_P3_4" name="crecer_step_3" class="custom-control-input">
                    <label class="custom-control-label" for="crecer_P3_4">&zwnj;</label>
                  </div>
                  <p class="mt-3">Vendo productos y servicios (ejemplo: diseñadora gráfica + agendas de diseño)
                  </p>
                </div>
              </div>

              <!-- PASO 4 -->
              <div class="numerito-form d-flex align-items-center justify-content-center mx-auto my-5">
                <h4>4</h4>
              </div>
              <h4 class="font-weight-bold">¿Cuánto tiempo de vida tiene tu marca?</h4>
              <div class="row my-5">
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="crecer_P4_1" name="crecer_step_4" class="custom-control-input">
                    <label class="custom-control-label" for="crecer_P4_1">&zwnj;</label>
                  </div>
                  <p class="mt-3">Estoy en la etapa idea. Mi marca todavía no salió a la luz</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="crecer_P4_2" name="crecer_step_4" class="custom-control-input">
                    <label class="custom-control-label" for="crecer_P4_2">&zwnj;</label>
                  </div>
                  <p class="mt-3">Entre 1 y 3 años</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="crecer_P4_3" name="crecer_step_4" class="custom-control-input">
                    <label class="custom-control-label" for="crecer_P4_3">&zwnj;</label>
                  </div>
                  <p class="mt-3">Entre 3 y 5 años</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="crecer_P4_4" name="crecer_step_4" class="custom-control-input">
                    <label class="custom-control-label" for="crecer_P4_4">&zwnj;</label>
                  </div>
                  <p class="mt-3">Más de 5 años
                  </p>
                </div>
              </div>

              <!-- PASO 5 -->
              <div class="numerito-form d-flex align-items-center justify-content-center mx-auto my-5">
                <h4>5</h4>
              </div>
              <h4 class="font-weight-bold">Si tuvieses que elegir ¿Qué tema es el que más te interesa en este momento?
              </h4>
              <div class="row my-5">
                <div class="d-flex flex-column flex-md-row justify-content-between w-100">
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="crecer_P5_1" name="crecer_step_5" class="custom-control-input">
                      <label class="custom-control-label" for="crecer_P5_1">&zwnj;</label>
                    </div>
                    <p class="mt-3">Cómo crear un plan de marketing que me ayude a diferenciarme y potenciar resultados
                    </p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="crecer_P5_2" name="crecer_step_5" class="custom-control-input">
                      <label class="custom-control-label" for="crecer_P5_2">&zwnj;</label>
                    </div>
                    <p class="mt-3">Cómo ordenar y planificar mis redes sociales dando a conocer la esencia de mi marca
                    </p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="crecer_P5_3" name="crecer_step_5" class="custom-control-input">
                      <label class="custom-control-label" for="crecer_P5_3">&zwnj;</label>
                    </div>
                    <p class="mt-3">Motivación, productividad y planificación en el día a día</p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="crecer_P5_4" name="crecer_step_5" class="custom-control-input">
                      <label class="custom-control-label" for="crecer_P5_4">&zwnj;</label>
                    </div>
                    <p class="mt-3">Me gustaría obtener herramientas simples y prácticas para darme a conocer y
                      profesionalizar mi marca</p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="crecer_P5_4" name="crecer_step_5" class="custom-control-input">
                      <label class="custom-control-label" for="crecer_P5_4">&zwnj;</label>
                    </div>
                    <p class="mt-3">Ninguna de las anteriores</p>
                  </div>
                </div>
              </div>

              <div class="row shadow rounded-lg p-3">
                <div class="col-md-7 text-left">
                  <div class="p-md-4 p-0">
                    <img src="assets/img/result-test-form-icon.svg" alt="">
                    <h4 class="titulo-home font-weight-bold mt-4">Tu resultado</h4>
                    <img src="assets/img/separador-titulo-svg-crema.svg" alt="">
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
                    <form id="result-test" class="needs-validation form-home" novalidate>
                      <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <input type="text" class="form-control rounded-pill" id="nombre" placeholder="Tu nombre"
                            required>
                        </div>
                        <div class="col-md-12 mb-3">
                          <input type="email" class="form-control rounded-pill" id="email" placeholder="Tu mail"
                            required>
                        </div>
                      </div>
                    </form>

                    <div class="text-center mt-md-4">
                      <button class="btn btn-white text-primary" type="submit">Enviar
                      </button>
                    </div>

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
                      <input type="radio" id="mejorar_1" name="mejorar_step_5" class="custom-control-input">
                      <label class="custom-control-label" for="mejorar_1">&zwnj;</label>
                    </div>
                    <p class="mt-3">Crear un plan de negocios con proyecciones y objetivos claros
                    </p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="mejorar_2" name="mejorar_step_5" class="custom-control-input">
                      <label class="custom-control-label" for="mejorar_2">&zwnj;</label>
                    </div>
                    <p class="mt-3">Diversificar mis propuestas creando productos digitales
                    </p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="mejorar_3" name="mejorar_step_5" class="custom-control-input">
                      <label class="custom-control-label" for="mejorar_3">&zwnj;</label>
                    </div>
                    <p class="mt-3">Automatizar y/o delegar procesos</p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="mejorar_4" name="mejorar_step_5" class="custom-control-input">
                      <label class="custom-control-label" for="mejorar_4">&zwnj;</label>
                    </div>
                    <p class="mt-3">Innovar y avanzar con mi propia plataforma web para vender y/o comunicar mis propuestas y contenidos</p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="mejorar_4" name="mejorar_step_5" class="custom-control-input">
                      <label class="custom-control-label" for="mejorar_4">&zwnj;</label>
                    </div>
                    <p class="mt-3">No estoy segura</p>
                  </div>
                </div>
              </div>

              <!-- PASO 3 -->
              <div class="numerito-form d-flex align-items-center justify-content-center mx-auto my-5">
                <h4>3</h4>
              </div>
              <h4 class="font-weight-bold">¿De qué se trata tu emprendimiento?</h4>
              <div class="row my-5">
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="mejorar_P3_1" name="mejorar_step_3" class="custom-control-input">
                    <label class="custom-control-label" for="mejorar_P3_1">&zwnj;</label>
                  </div>
                  <p class="mt-3">Venta de productos
                    (ejemplo: accesorios, indumentaria, vajilla)</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="mejorar_P3_2" name="mejorar_step_3" class="custom-control-input">
                    <label class="custom-control-label" for="mejorar_P3_2">&zwnj;</label>
                  </div>
                  <p class="mt-3">Venta de servicios
                    (ejemplo: talleres, coach, asesoramiento, fotografía)</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="mejorar_P3_3" name="mejorar_step_3" class="custom-control-input">
                    <label class="custom-control-label" for="mejorar_P3_3">&zwnj;</label>
                  </div>
                  <p class="mt-3">Marca personal: emprendo desde mi profesión (arquitecta, abogada, licenciada)</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="mejorar_P3_4" name="mejorar_step_3" class="custom-control-input">
                    <label class="custom-control-label" for="mejorar_P3_4">&zwnj;</label>
                  </div>
                  <p class="mt-3">Vendo productos y servicios (ejemplo: diseñadora gráfica + agendas de diseño)
                  </p>
                </div>
              </div>

              <!-- PASO 4 -->
              <div class="numerito-form d-flex align-items-center justify-content-center mx-auto my-5">
                <h4>4</h4>
              </div>
              <h4 class="font-weight-bold">¿Cuánto tiempo de vida tiene tu marca?</h4>
              <div class="row my-5">
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="mejorar_P4_1" name="mejorar_step_4" class="custom-control-input">
                    <label class="custom-control-label" for="mejorar_P4_1">&zwnj;</label>
                  </div>
                  <p class="mt-3">Estoy en la etapa idea. Mi marca todavía no salió a la luz</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="mejorar_P4_2" name="mejorar_step_4" class="custom-control-input">
                    <label class="custom-control-label" for="mejorar_P4_2">&zwnj;</label>
                  </div>
                  <p class="mt-3">Entre 1 y 3 años</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="mejorar_P4_3" name="mejorar_step_4" class="custom-control-input">
                    <label class="custom-control-label" for="mejorar_P4_3">&zwnj;</label>
                  </div>
                  <p class="mt-3">Entre 3 y 5 años</p>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom-control custom-radio custom-control-inline ml-4">
                    <input type="radio" id="mejorar_P4_4" name="mejorar_step_4" class="custom-control-input">
                    <label class="custom-control-label" for="mejorar_P4_4">&zwnj;</label>
                  </div>
                  <p class="mt-3">Más de 5 años
                  </p>
                </div>
              </div>

              <!-- PASO 5 -->
              <div class="numerito-form d-flex align-items-center justify-content-center mx-auto my-5">
                <h4>5</h4>
              </div>
              <h4 class="font-weight-bold">Si tuvieses que elegir ¿Qué tema es el que más te interesa en este momento?
              </h4>
              <div class="row my-5">
                <div class="d-flex flex-column flex-md-row justify-content-between w-100">
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="mejorar_P5_1" name="mejorar_step_5" class="custom-control-input">
                      <label class="custom-control-label" for="mejorar_P5_1">&zwnj;</label>
                    </div>
                    <p class="mt-3">Cómo crear un plan de marketing que me ayude a diferenciarme y potenciar resultados
                    </p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="mejorar_P5_2" name="mejorar_step_5" class="custom-control-input">
                      <label class="custom-control-label" for="mejorar_P5_2">&zwnj;</label>
                    </div>
                    <p class="mt-3">Ordenar y planificar mis redes sociales dando a conocer la esencia de mi marca
                    </p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="mejorar_P5_3" name="mejorar_step_5" class="custom-control-input">
                      <label class="custom-control-label" for="mejorar_P5_3">&zwnj;</label>
                    </div>
                    <p class="mt-3">Motivación, productividad y planificación en el día a día</p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="mejorar_P5_4" name="mejorar_step_5" class="custom-control-input">
                      <label class="custom-control-label" for="mejorar_P5_4">&zwnj;</label>
                    </div>
                    <p class="mt-3">Me gustaría obtener herramientas simples y prácticas para darme a conocer y
                      profesionalizar mi marca</p>
                  </div>
                  <div class="opcion-step-5">
                    <div class="custom-control custom-radio custom-control-inline ml-4">
                      <input type="radio" id="mejorar_P5_4" name="mejorar_step_5" class="custom-control-input">
                      <label class="custom-control-label" for="mejorar_P5_4">&zwnj;</label>
                    </div>
                    <p class="mt-3">Ninguna de las anteriores</p>
                  </div>
                </div>
              </div>

              <div class="row shadow rounded-lg p-3">
                <div class="col-md-7 text-left">
                  <div class="p-md-4 p-0">
                    <img src="assets/img/result-test-form-icon.svg" alt="">
                    <h4 class="titulo-home font-weight-bold mt-4">Tu resultado</h4>
                    <img src="assets/img/separador-titulo-svg-crema.svg" alt="">
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
                    <form id="result-test" class="needs-validation form-home" novalidate>
                      <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <input type="text" class="form-control rounded-pill" id="nombre" placeholder="Tu nombre"
                            required>
                        </div>
                        <div class="col-md-12 mb-3">
                          <input type="email" class="form-control rounded-pill" id="email" placeholder="Tu mail"
                            required>
                        </div>
                      </div>
                    </form>

                    <div class="text-center mt-md-4">
                      <button class="btn btn-white text-primary" type="submit">Enviar
                      </button>
                    </div>

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
            <!-- TAB CRECER -->

          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'footer.php';?>

  <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
  <script type="module" src="assets/js/starter.js"></script>
</body>

</html>
