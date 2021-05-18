<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/starter.css">
  <link rel="stylesheet" href="assets/css/estilos.css">
  <link rel="stylesheet" href="/node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
  <title>Mariann</title>
</head>

<body>

  <?php include 'header.php';?>

  <div id="plantilla-evento" class="contenedor-form-home py-5">
    <div class="container bg-white p-4 rounded-lg">
      <div class="row">
        <div class="col-md-7">
          <div class="">
            <h4 class="titulo-home">Cafecito: Especial planificación y
              productividad</h4>
            <p class="mt-3">Conversamos sobre tu público objetivo. Identificamos al cliente ideal de tu marca generando
              estrategias para que logres enamorar a tu audiencia, creando contenido auténtico para tus canales
              digitales, y propuestas acordes a sus principales intereses.</p>
            <div class="row">
              <div class="col-md-4 d-flex align-items-center">
                <img src="assets/img/evento-date-icon.svg" alt="">
                <h5 class="font-weight-normal m-0 text-dark-gray ml-2">24 Nov 2020</h5>
              </div>
              <div class="col-md-4 d-flex align-items-center my-3 my-md-0">
                <img src="assets/img/evento-time-icon.svg" alt="">
                <h5 class="font-weight-normal m-0 text-dark-gray ml-2">14:00 hs</h5>
              </div>
              <div class="col-md-4 d-flex align-items-center">
                <img src="assets/img/evento-person-icon.svg" alt="">
                <h5 class="font-weight-normal m-0 text-dark-gray ml-2">Mariana Pacheco</h5>
              </div>
            </div>

            <div class="accordion mt-4" id="accordionExample">
              <div class="card border-0 bg-crema-suave-2">
                <div class="card-header p-0" id="headingOne">
                  <h4 class="mb-0 text-secondary">
                    <button class="btn text-secondary shadow-none btn-block text-left" type="button"
                      data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                      aria-controls="collapseOne">
                      Acerca del evento <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-chevron-down float-right mt-1" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                          d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                      </svg>
                    </button>
                  </h4>
                </div>

                <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne"
                  data-parent="#accordionExample">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>

                    - sed do eiusmod tempor <br>
                    - incididunt ut labore et dolore <br>
                    - magna aliqua. <br> <br>

                    Ut enim ad minim veniam, quis nostrud exercitation ullamco
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="mt-4 mt-md-0 rounded-lg p-md-4 p-3 bg-textura-form text-md-center">
            <h5 class="text-white titulo-home mb-4">Reserva tu lugar</h5>
            <form class="needs-validation" novalidate>
              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <input type="text" class="form-control rounded-pill border-0 text-secondary" id="nombre" placeholder="Nombre" required>
                </div>
                <div class="col-md-12 mb-3">
                  <input type="text" class="form-control rounded-pill border-0 text-secondary" id="apellido" placeholder="Apellido" required>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <input type="email" class="form-control rounded-pill border-0 text-secondary" placeholder="Email" id="email" required>
                </div>
                <div class="col-md-12 mb-3">
                  <input type="text" class="form-control rounded-pill border-0 text-secondary" placeholder="Whatsapp" id="whatsapp" required>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12 mb-3">
                    <input type="text" class="form-control rounded-pill border-0 text-secondary" id="Localidad" placeholder="localidad" required>
                </div>
              </div>
              <div class="text-right">
                <button class="btn btn-white text-primary text-uppercase" type="submit">Inscribirme
                <svg xmlns="http://www.w3.org/2000/svg" width="6.722" height="11.548" viewBox="0 0 6.722 11.548">
  <g id="next_1_" data-name="next (1)" transform="translate(-60.445 -1.445)">
    <g id="Grupo_475" data-name="Grupo 475" transform="translate(61 2)">
      <path id="Trazado_343" data-name="Trazado 343" d="M123.29,4.959,118.436.119a.407.407,0,1,0-.574.576l4.564,4.552L117.862,9.8a.407.407,0,0,0,.575.576l4.853-4.84a.407.407,0,0,0,0-.576Z" transform="translate(-117.742 0)" fill="currentColor" stroke="currentColor" stroke-width="1"/>
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

  <?php include 'footer.php';?>

  <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
  <script type="module" src="assets/js/starter.js"></script>

</body>

</html>
