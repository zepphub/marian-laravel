<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="../assets/css/starter.css" />
  <title>Mariann</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row contenedor-dash">
      <div class="col-md-3 bg-nude">

        <?php include 'sidebar.php';?>

      </div>
      <div class="col-md-9 p-3 p-md-5">
        <div class="row">
          <div class="col-md-12 text-center text-md-left">
            <div class="d-md-flex flex-row align-items-center justify-content-between">
              <h2 class="ml-3 ml-md-0">Newsletter</h2>
              <a style="white-space: nowrap;" href="servicios_newEvent.php"><button class="btn btn-primary mt-3 mt-md-0">Descargar
                  lista</button></a>
            </div>
          </div>
        </div>
        <div class="row mt-4 mt-md-0">
          <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-newsletter">
                  <thead>
                    <tr>
                      <th class="text-marron-claro sin-borde" scope="col">Nombre</th>
                      <th class="text-marron-claro sin-borde" scope="col">Apellido</th>
                      <th class="text-marron-claro sin-borde" scope="col">Email</th>
                      <th class="text-marron-claro sin-borde" scope="col">Whatsapp</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>María</td>
                      <td>Lopez</td>
                      <td>mail@gmail.com</td>
                      <td>3516012877</td>
                    </tr>
                    <tr>
                      <td scope="row">María</td>
                      <td>Lopez</td>
                      <td>mail@gmail.com</td>
                      <td>3516012877</td>
                    </tr>
                    <tr>
                      <td scope="row">María</td>
                      <td>Lopez</td>
                      <td>mail@gmail.com</td>
                      <td>3516012877</td>
                    </tr>
                    <tr>
                      <td scope="row">María</td>
                      <td>Lopez</td>
                      <td>mail@gmail.com</td>
                      <td>3516012877</td>
                    </tr>
                    <tr>
                      <td scope="row">María</td>
                      <td>Lopez</td>
                      <td>mail@gmail.com</td>
                      <td>3516012877</td>
                    </tr>
                    <tr>
                      <td scope="row">María</td>
                      <td>Lopez</td>
                      <td>mail@gmail.com</td>
                      <td>3516012877</td>
                    </tr>
                    <tr>
                      <td scope="row">María</td>
                      <td>Lopez</td>
                      <td>mail@gmail.com</td>
                      <td>3516012877</td>
                    </tr>
                    <tr>
                      <td scope="row">María</td>
                      <td>Lopez</td>
                      <td>mail@gmail.com</td>
                      <td>3516012877</td>
                    </tr>
                  </tbody>
                </table>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-md-12">
            <nav aria-label="...">
              <ul class="pagination pagination-blog">
                <li class="page-item">
                  <a class="page-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                      fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                    </svg></a>
                </li>
                <li class="page-item active" aria-current="page">
                  <a href="#" class="page-link">1</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item">
                  <a class="page-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                      fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg></a>
                </li>
              </ul>
            </nav>

          </div>
        </div>
      </div>



    </div>
  </div>
  </div>

  <script src="../node_modules/jquery/dist/jquery.slim.min.js"></script>
  <script type="module" src="../assets/js/starter.js"></script>
</body>

</html>
