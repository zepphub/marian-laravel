@extends('layouts.main')

@section('title')Consultorías Estratégicas - @endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Consultorías Estratégicas</h2>
            <nav class="" aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center bg-transparent text-marron-claro">
                    <li class="breadcrumb-item text-marron-claro"><a class="text-marron-claro" href="#">Inicio</a></li>
                    <li class="breadcrumb-item text-secondary active font-weight-bold" aria-current="page">Consultorías
                        Estratégicas</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-5"><img class="w-100 img-fluid" src="{{ asset('img/asesoria-img-portada.png') }}" alt="">
        </div>
        <div class="col-md-7 pl-md-5">
            <h5 class="font-weight-bold titulo-home mb-4 mt-4 mt-md-0">Te ayudo a potenciar tu estrategia digital resaltando la esencia y los valores de tu marca</h5>
            <p>
                <!-- Te ayudo a potenciar tu estrategia digital resaltando la esencia y los valores de tu marca. <br> -->
                <!-- Nos encontramos durante 2 horas y luego trabajamos juntas por 7 días. <br> -->
                Las sesiones están creadas especialmente para emprendedoras y profesionales que tienen presencia
                digital. El
                objetivo de las mismas es trabajar sobre temáticas específicas relacionadas a la comunicación de los
                proyectos
                para potenciarlos, resaltando la esencia y los valores de la marca. <br>
                No importa si llevás años o recién comenzás: aplicamos todo a tu proyecto de forma práctica y
                personalizada,
                basándonos en tu situación actual y en tus principales inquietudes. <br><br>

                En cada encuentro aplicamos una metodología que integra estrategias de Marketing, Comunicación y
                Branding en
                el universo digital. A través de ella te ayudo a crear una hoja de ruta para potenciar y/o construir una
                marca
                con propósito y corazón.
            </p>
            <h4 class="text-secondary my-4 text-medium">¡Quiero conocer detalles y reservar mi encuentro!</h4>
            <a href="#sesiones"><button class="btn btn-primary">Click Aquí</button></a>
        </div>
    </div>
</div>

<div class="container-fluid my-5">
    <div class="row">
        <div class="col-md-12 p-0">
            <a href="#modal" data-bs-toggle="modal" data-bs-target="#consultoria-video">
                <img src="{{ asset('img/video-placeholder2.png') }}" class="w-100" alt="">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player class="play-bt2" src="https://assets10.lottiefiles.com/packages/lf20_fcloo4ce.json"  background="transparent"  speed="1"  style="width: 80px; height: 80px;"  loop  autoplay data-bs-toggle="modal" data-bs-target="#consultoria-video"></lottie-player>
            </a>
            <!-- <div class="video-consultoria">
				<video id="ban_video" class="tv_video">
                     <source src="{{ asset('videos/consultoria.mp4') }}" type="video/mp4">
                     Tu navegador no puede reproducir este video.
                </video>
                
                
                <div class="pause-bt" style="display:none;"></div>
                
             </div> -->
        </div>
    </div>
</div>

<div class="d-flex align-items-center" id="sobreExperiencias">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center py-5 py-md-0">
                <h4 class="text-white titulo-home">Sobre las experiencias</h4>
                <img src="{{ asset('img/separador-titulo-blanco-svg.svg') }}" alt="">
                <p class="text-white my-5 mx-md-5">Trabajamos juntas en encuentros de aproximadamente 2 horas. Todas las
                    consultorías incluyen la grabación de la sesión, para que puedas repasarla cuando lo necesites. A
                    eso se le
                    suma mi mentoría vía mail durante la semana siguiente a nuestra reunión, en la que podrás
                    implementar lo
                    trabajado de forma práctica, con ejercicios y devoluciones de forma permanente. </p>
                <a href="#sesiones"><button class="btn btn-outline-white">Trabajemos juntas</button></a>
            </div>
        </div>
    </div>
</div>

<!-- Carousel Consultoria -->
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h4 class="font-weight-bold titulo-home text-center">¿Cómo saber si es para vos?</h4>
        </div>
    </div>
    <div class="row">
        <div id="carouselAsesoria" class="carousel slide d-none d-md-block" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselAsesoria" data-slide-to="0" class="active"></li>
                <li data-target="#carouselAsesoria" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item py-5 active">
                    <div class="row px-md-3">
                        <div class="col-sm-3">
                            <div class="card rounded-0 border-0 shadow py-4">
                                <div class="card-body text-center">
                                    <img src="{{ asset('img/asesoria-carousel-item-1.svg') }}" alt="">
                                    <p class="card-text text-secondary mt-4">Sos una emprendedora apasionada por sus
                                        ideas y proyectos
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card rounded-0 border-0 shadow py-4">
                                <div class="card-body text-center">
                                    <img src="{{ asset('img/asesoria-carousel-item-2.svg') }}" alt="">
                                    <p class="card-text text-secondary mt-4">Buscás construir una marca con propósito y
                                        querés hacerlo
                                        bien</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card rounded-0 border-0 shadow py-4">
                                <div class="card-body text-center">
                                    <img src="{{ asset('img/asesoria-carousel-item-3.svg') }}" alt="">
                                    <p class="card-text text-secondary mt-4">Querés innovar en el universo digital</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card rounded-0 border-0 shadow py-4">
                                <div class="card-body text-center">
                                    <img src="{{ asset('img/asesoria-carousel-item-4.svg') }}" alt="">
                                    <p class="card-text text-secondary mt-4">Aspirás a crear algo significativo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item py-5">
                    <div class="row px-md-3">
                        <div class="col-sm-3">
                            <div class="card rounded-0 border-0 shadow py-4">
                                <div class="card-body text-center">
                                    <img src="{{ asset('img/asesoria-carousel-item-5.svg') }}" alt="">
                                    <p class="card-text text-secondary mt-4">Te gustaría lograr una conexión real con
                                        tus clientes a
                                        través de propuestas auténticas y diferentes
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card rounded-0 border-0 shadow py-4">
                                <div class="card-body text-center">
                                    <img src="{{ asset('img/asesoria-carousel-item-6.svg') }}" alt="">
                                    <p class="card-text text-secondary mt-4">Querés transformar tu forma de trabajo y
                                        disfrutar del
                                        proceso</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card rounded-0 border-0 shadow py-4">
                                <div class="card-body text-center">
                                    <img src="{{ asset('img/asesoria-carousel-item-7.svg') }}" alt="">
                                    <p class="card-text text-secondary mt-4">Sabés que las ventas no son lo único
                                        importante. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card rounded-0 border-0 shadow py-4">
                                <div class="card-body text-center">
                                    <img src="{{ asset('img/asesoria-carousel-item-8.svg') }}" alt="">
                                    <p class="card-text text-secondary mt-4">No buscás pociones mágicas ni cientos de
                                        seguidores de un
                                        día para el otro.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <div class="row justify-content-center">
      <div id="carouselAsesoriaMob" class="carousel slide d-md-none" data-ride="carousel">

            <div class="carousel-inner" role="listbox">
                <div class="carousel-item py-2 active">
                    <div class=" px-md-3">
                        <div class="col-sm-3">
                            <div class="card rounded-0 border-0  py-4">
                                <div class="card-body text-center">
                                    <img src="{{ asset('img/asesoria-carousel-item-1.svg') }}" alt="">
                                    <p class="card-text text-secondary mt-4">Sos una emprendedora apasionada por sus
                                        ideas y proyectos
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item py-2">
                    <div class=" px-md-3">
                        <div class="col-sm-3">
                            <div class="card rounded-0 border-0  py-4">
                                <div class="card-body text-center">
                                    <img src="{{ asset('img/asesoria-carousel-item-2.svg') }}" alt="">
                                    <p class="card-text text-secondary mt-4">Buscás construir una marca con propósito y
                                        querés hacerlo
                                        bien</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item py-2">
                    <div class=" px-md-3">
                        <div class="col-sm-3">
                            <div class="card rounded-0 border-0  py-4">
                                <div class="card-body text-center">
                                    <img src="{{ asset('img/asesoria-carousel-item-3.svg') }}" alt="">
                                    <p class="card-text text-secondary mt-4">Querés innovar en el universo digital</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item py-2">
                    <div class=" px-md-3">
                        <div class="col-sm-3">
                            <div class="card rounded-0 border-0  py-4">
                                <div class="card-body text-center">
                                    <img src="{{ asset('img/asesoria-carousel-item-4.svg') }}" alt="">
                                    <p class="card-text text-secondary mt-4">Aspirás a crear algo significativo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item py-2">
                    <div class=" px-md-3">
                        <div class="col-sm-3">
                            <div class="card rounded-0 border-0  py-4">
                                <div class="card-body text-center">
                                    <img src="{{ asset('img/asesoria-carousel-item-5.svg') }}" alt="">
                                    <p class="card-text text-secondary mt-4">Te gustaría lograr una conexión real con
                                        tus clientes a
                                        través de propuestas auténticas y diferentes
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item py-2">
                    <div class=" px-md-3">
                        <div class="col-sm-3">
                            <div class="card rounded-0 border-0  py-4">
                                <div class="card-body text-center">
                                    <img src="{{ asset('img/asesoria-carousel-item-6.svg') }}" alt="">
                                    <p class="card-text text-secondary mt-4">Querés transformar tu forma de trabajo y
                                        disfrutar del
                                        proceso</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item py-2">
                    <div class=" px-md-3">
                        <div class="col-sm-3">
                            <div class="card rounded-0 border-0  py-4">
                                <div class="card-body text-center">
                                    <img src="{{ asset('img/asesoria-carousel-item-7.svg') }}" alt="">
                                    <p class="card-text text-secondary mt-4">Sabés que las ventas no son lo único
                                        importante. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item py-2">
                    <div class=" px-md-3">
                        <div class="col-sm-3">
                            <div class="card rounded-0 border-0  py-4">
                                <div class="card-body text-center">
                                    <img src="{{ asset('img/asesoria-carousel-item-8.svg') }}" alt="">
                                    <p class="card-text text-secondary mt-4">No buscás pociones mágicas ni cientos de
                                        seguidores de un
                                        día para el otro.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselAsesoriaMob" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselAsesoriaMob" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<!-- Carousel Asesoria -->

<div class="container my-1 my-md-5">
    <div class="row" id="sesiones">
        <div class="col-md-12">
            <div class="text-center">
                <h4 class="titulo-home">¿Cómo puedo acompañarte?</h4>
                <h3 class="line-h-low">Elegí tu sesión</h3>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <ul class="nav nav-pills mb-3" id="asesoriaTabs" role="tablist">
                @foreach ($counselings as $counseling)
                <li class="nav-item text-center" role="presentation">
                    <a class="@if ($loop->first)active @endif align-items-center d-flex flex-column nav-link h-100"
                        id="pills-{{ $loop->iteration }}-tab" data-toggle="pill" href="#pills-{{ $loop->iteration }}"
                        role="tab" aria-controls="pills-{{ $loop->iteration }}"
                        aria-selected="{{ $loop->first ? true : false }}"><img class="mb-2"
                            src="{{ asset($counseling->icon) }}" alt="">{{$counseling->service->name}}</a>
                </li>
                @endforeach
            </ul>
            <div class="tab-content" id="pills-tabContent">
                @foreach ($counselings as $counseling)
                <div class="tab-pane fade @if ($loop->first) show active @endif mt-5" id="pills-{{ $loop->iteration }}"
                    role="tabpanel" aria-labelledby="pills-{{ $loop->iteration }}-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="text-marron-claro text-medium">Precio</h6>
                            <h4 class="text-coral titulo-home">{{ $counseling->service->price() }}</h4>
                            <p class="my-4">{!! $counseling->description !!}</p>
                            <h6>{{ $counseling->marked_description }}</h6>
                            <ul class="list-unstyled">
                                @foreach ($counseling->descriptions as $description)
                                <li class="my-1"><svg xmlns="http://www.w3.org/2000/svg" width="20.574" height="20.574"
                                        viewBox="0 0 20.574 20.574">
                                        <g transform="translate(-3.375 -3.375)">
                                            <path
                                                d="M21.028,13.161l-.87-.9a.187.187,0,0,0-.138-.059h0a.18.18,0,0,0-.138.059l-6.034,6.078-2.2-2.2a.191.191,0,0,0-.277,0l-.88.88a.2.2,0,0,0,0,.282l2.77,2.77a.876.876,0,0,0,.579.282.918.918,0,0,0,.574-.272h0l6.612-6.647A.211.211,0,0,0,21.028,13.161Z"
                                                transform="translate(-2.094 -2.619)" fill="#e67161" />
                                            <path
                                                d="M13.662,4.76a8.9,8.9,0,1,1-6.3,2.606,8.843,8.843,0,0,1,6.3-2.606m0-1.385A10.287,10.287,0,1,0,23.949,13.662,10.286,10.286,0,0,0,13.662,3.375Z"
                                                fill="#e67161" />
                                        </g>
                                    </svg>
                                    {{ $description->content }}
                                </li>
                                @endforeach
                            </ul>
                            <h5 class="text-primary mt-4 mb-4">¡Quiero reservar mi encuentro!</h5>
                            <a class="btn btn-primary mb-4 mb-md-0"
                                href="{{ route('carrito.add', $counseling->service) }}">Click aquí</a>
                        </div>
                        <div class="col-md-6">
                            <div class="p-4 p-md-0 d-flex flex-column align-items-center justify-content-center h-100 rounded"
                                style="background:url({{asset($counseling->image)}});background-repeat:no-repeat;background-size:cover;background-position:center center;">
                                <h4 class="text-white text-medium titulo-home text-center">
                                    {{ $counseling->service->name }}</h4>
                                <a class="btn btn-sm p-2 btn-white text-primary rounded-pill mt-3" href="{{ route('carrito.add', $counseling->service) }}">¡Quiero
                                    reservar mi
                                    encuentro!</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<!-- Banner Eleva Tu Marca -->
<div id="banner-asesoria-eleva" class="banner-eleva-tu-marca d-flex align-items-center mt-5">
    <div class="container py-5 py-md-0">
        <div class="row text-center text-md-left">
            <div class="col-md-12 text-center">
                <h4 class="text-white titulo-home">¡Elevá tu marca tomando todas las sesiones!</h4>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="31.791" height="18.061" viewBox="0 0 31.791 18.061">
                        <g id="next_1_" data-name="next (1)" transform="matrix(-0.017, 1, -1, -0.017, 34.244, -59.815)">
                            <g id="Grupo_475" data-name="Grupo 475" transform="translate(61 2)">
                                <path id="Trazado_343" data-name="Trazado 343"
                                    d="M133.808,14.361,119.752.344a1.178,1.178,0,1,0-1.663,1.668l13.219,13.183-13.22,13.183a1.178,1.178,0,0,0,1.664,1.668l14.056-14.017a1.177,1.177,0,0,0,0-1.668Z"
                                    transform="translate(-117.742 0)" fill="#fff" stroke="#fff" stroke-width="1" />
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin Banner Eleva Tu Marca -->

<div class="bg-crema-suave py-5 ultimo-contenedor">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <!-- <div class="align-items-md-baseline d-md-flex justify-content-center">
                    <h4 class="titulo-home mr-md-3">Plan Personalizado:</h4>
                    <h2>Consultorías a medida</h2>
                </div> -->
                <p class="w-75 mx-auto px-md-4">Si considerás que todas las sesiones son para vos, podemos trabajar
                    juntas en el <strong>Programa Intensivo
                        de 8 Semanas.</strong> Allí analizamos los 5 pilares más importantes de tu marca para
                    potenciarla y
                    elevarla en el universo digital.</p>
                <a class="btn btn-outline-primary" href="{{ route('programa-intensivo') }}">¡Quiero conocer detalles!</a>
                <h4 class="text-secondary mt-5 text-medium">Consultorías a medida</h4>
                <img src="{{ asset('img/separador-svg.svg') }}" alt="">
                <p class="mt-5 text-marron-claro">No importa la etapa o el tamaño de tu proyecto: las consultorías a
                    medida
                    permiten que diagramemos juntas cada detalle. Con tus inquietudes y situación actual como base, te
                    voy a
                    guiar en el proceso de incorporar nuevas herramientas,, adaptándolas a las necesidades de tu
                    empresa.
                    <br><br>

                    Si no encontraste la opción ideal y te gustaría contarme un poquito más sobre el universo de tu
                    marca, me
                    encantaría leerte. </p>
            </div>
          </div>
          <div class="bg-white p-4 rounded-lg mt-md-5" id="contacto">
            <div class="row">
                <div class="col-md-6">
                    <div class="bg-marron-claro-2 rounded-lg p-md-4 p-3">
                        <h4 class="titulo-home text-medium text-white">Testimonios</h4>
                        <div class="mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="76" height="4" viewBox="0 0 76 4">
                                <defs>
                                    <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%"
                                        viewBox="0 0 192 8">
                                        <image width="192" height="8"
                                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAAAICAYAAAHYYMBIAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAmNJREFUeNpiYMABVnTXOSCxG3CwC5DYAtjMAQggfJoVGIgEQLUJuMwDCCBGILEfyAa59kBEaZMjkuR/EA0UY0QzjGhxmBgQNALFG2hhNkAAgRgG2EID2adEihdgi0ZsUUMls8GxwgTE54H4PhZ99UghCNO0HyregCWE+rGYAVL/nkiz/0PFHYg0ez5IDiCAGKEa9iNJOAKj6gCe9IhiMXp0Ywml+UhCikD1D4g0+wNQrSAetaBArEcSEgSq/0Ck2Q+AahXxqAUFWAExfsRi9gWgekM8amFZlgGWgkbBAAKAAGJEzvvIBR2B6gGEF+BLzejlCg3NBuWUCUSoDQBSBkA8AV9OIdNsUE5XINFsUC5cwEhikQLyxHoaFSnoxRUpRQpJxRWJRQqh4grk5gQyzT5AahGUj8ZPIEGvAAH5+Wj8AiqaXU9MbY8DEGqvJeBqQOJrXEKBA6kRMBGNv4AEvYSyZiIafwIVzW5Ey+WkRAChonABmtk4GzBY5A4ABGi/7GoYhIEAnOEACTgYDoaEOhgScDIHlVAcDAebAyTUwrjkWLrm7hJ6vafRxyZ8EO7vuwtT/t+fAn1KM2Ryo6jM9kQVQjAmQzZ892zEBgN9K9k/llWLjftEMGQ/cUbnye+M2MAcGgyG59oyJnDpy4PQyv3BVkwF+s6MA08tb5XYQcleBfYrXfsL2JFI0JR9U9TWasiORILu4xfYV0Xyc2y4i+cadp6/Ps02XkbC/1JNmUrh27NOcMnxoAvm7IFx4F1THkZsp2R3ArvXqBtuoovAXhS50hmyW1QSyv/7UgXCLZ5jw137AaYai9H7B+O8AAAAAElFTkSuQmCC" />
                                    </pattern>
                                </defs>
                                <rect id="_4" data-name="4" width="76" height="4" fill="url(#pattern)" />
                            </svg>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <img class="rounded-circle img-fluid w-100" src="{{ asset('img/testimonial3.png') }}" alt="">
                            </div>
                            <div class="col-md-9">
                                <h4 class="text-white mt-2">Jorgelina Vasconi</h4>
                                <h5 class="text-white font-weight-light">Fundadoras de Niñeras Tempo</h5>
                                <h5 class="text-white font-weight-light">Proceso intensivo de 8 semanas</h5>
                            </div>
                        </div>
                        <p class="text-white m-0 mt-md-3">Movilizante y transformador por completo. Me ayudó a confiar
                            en mí, en mis
                            capacidades, a reconocer mi aporte en mi tarea, a definir el valor económico, a reconocer lo
                            valioso y
                            potente de mi proyecto y a aplicar la mirada… Me impulsó a un cambio radical que hoy veo y
                            siento. </p>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="47" height="4" viewBox="0 0 47 4">
                                <line id="Línea_7" data-name="Línea 7" x2="47" transform="translate(0 2)" fill="none"
                                    stroke="#f2f5f7" stroke-width="4" />
                            </svg>
                        </div>
                        <p class="text-white">Lo que más me llamó la atención desde el primer encuentro fue la escucha
                            activa.
                            Ella te devuelve en palabras lo que estabas esperando escuchar, es la que te sacude y te
                            hace repensar.
                            Una mujer que potencia la esencia y es feliz con vos.</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <h4 class="text-secondary mb-3">Charlemos y recibí una propuesta personalizada</h4>
                    <div class="mt-4 mt-md-0">
                        <form id="contactForm" class="needs-validation form-home" action="{{ route('consulta') }}" method="post">
                            @csrf
                            <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control rounded-pill" id="nombre" placeholder="Nombre" name="firstname" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control rounded-pill" id="apellido" placeholder="Apellido" name="lastname" required>
                            </div>
                            </div>
                            <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <input type="email" class="form-control rounded-pill" placeholder="Email" id="email" name="email" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control rounded-pill" placeholder="Teléfono" id="telefono" name="phone" required>
                            </div>
                            </div>
                            <div class="form-row">
                            <div class="col-md-12 mb-3"> 
                                <textarea class="form-control" name="query" cols="30" rows="5" placeholder="Dejame tu consulta"></textarea>
                            </div>
                            </div>
                            <div class="text-right">
                            <button class="btn btn-primary" type="submit">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        
        
    </div>
</div>
  

    <!-- Modal Envio Exitoso Form contacto Home -->
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
  <!-- Modal Envio Fallido Form contacto Home -->
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

<!-- Modal video -->
<div class="modal fade" id="consultoria-video" tabindex="1" aria-labelledby="mentoriavideo" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-transparent shadow-none border-0">
            <div class="modal-header border-0 py-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body text-center">
            <video id="ban_video" class="tv_video" width="100%" controls>
                <source src="{{ asset('videos/consultoria.mp4') }}" type="video/mp4">
            </video>
            </div>
        </div>
    </div>
</div>
<script>
    $('#consultoria-video').on('hide.bs.modal', function(e) {    
    var $if = $(e.delegateTarget).find('video');
    var src = $if.attr("src");
    $if.attr("src", "{{ asset('videos/consultoria.mp4') }}");
    $if.attr("src", src);
    });
</script>
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

$('#contactForm').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "{{ route('consulta') }}",
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

$('a[href$="#modal"]').on( "click", function() {
      $('#consultoria-video').modal('show');
    });

// $(document).ready(function () {
//         var video1 = document.getElementById("ban_video");
//         video1.currentTime = 0;
//         $(".mute-bt").click(function () {
//             if ($(this).hasClass("stop")) {
//                 var ban_video = document.getElementById("ban_video");
//                 $("#ban_video").prop('muted', false);
//                 $(this).removeClass("stop");
//             } else {
//                 var ban_video = document.getElementById("ban_video");
//                 $("#ban_video").prop('muted', true);
//                 $(this).addClass("stop");
//             }
//         });

//         $(".play-bt").click(function () {
//             $(".play-bt").hide();
//             $(".pause-bt").show();
//             var ban_video = document.getElementById("ban_video");
//             if ($(".stop-bt").hasClass("active")) {
//                 ban_video.currentTime = 0;
//             }
//             ban_video.play();
//         });
//         $(".pause-bt").click(function () {
//             $(".play-bt").show();
//             $(".pause-bt").hide();
//             $(".pause-bt").addClass("active");
//             $(".stop-bt").removeClass("active");
//             var ban_video = document.getElementById("ban_video");
//             ban_video.pause();
//         });
//         $(".stop-bt").click(function () {
//             $(".play-bt").show();
//             $(".pause-bt").hide();
//             $(".pause-bt").removeClass("active");
//             $(".stop-bt").addClass("active");
//             var ban_video = document.getElementById("ban_video");
//             stop
//             ban_video.pause();
//         });
//     });
</script>
@endsection
