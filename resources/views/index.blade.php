@extends('layouts.main')

@section('head')
@endsection

@section('title')
@endsection

@section('content')
    <!-- Portada Home -->
    <header class="bg-crema-suave py-5" id="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-7 pb-5">
                    <div
                        class="align-items-center text-center text-md-left align-items-md-baseline d-flex flex-column h-100 justify-content-center pr-md-5">
                        <h1 class="reinata mb-5">Soy Marian!</h1>
                        <img class="img-fluid rounded d-md-none w-75 mb-4" src="{{ asset('/img/hero-marian.jpg') }}"
                            alt="">
                        <h4 class=" text-marron mb-4">Consultora de Marcas.<br> Experta en Marketing Experiencial y
                            Estrategia en entornos digitales.</h4>
                        <a href="{{ route('servicios') }}" class="btn btn-primary">Mis propuestas para vos</a>
                    </div>
                </div>
                <div class="col-md-5 d-none d-md-block">
                    <img class="img-fluid rounded" src="{{ asset('/img/hero-marian.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </header>
    <!-- end Portada Home -->

    <!-- Seccion Phone Video -->
    <section class="phone-video py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5 order-2 order-md-1">
                    <div class="contenedor-celu my-5 mx-auto">
                        <video id="ban_video" class="video-celu shadow" poster="{{ asset('/videos/snapshot.jpg') }}"
                            preload="metadata">
                            <source src="{{ asset('/videos/video-celu-home.mp4') }}" type="video/mp4">
                            Tu navegador no puede reproducir este video.
                        </video>
                        <img class="img-fluid celu-frame" src="{{ asset('/img/celu-2.png') }}" alt="">
                        <div class="play-bt"></div>
                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                        <lottie-player class="play-bt" src="https://assets10.lottiefiles.com/packages/lf20_fcloo4ce.json"
                            background="transparent" speed="1" style="width: 80px; height: 80px;" loop autoplay>
                        </lottie-player>
                        <div class="pause-bt" style="display:none;"></div>
                    </div>
                </div>
                <div class="col-md-7 order-1 order-md-2">
                    <div
                        class="d-flex flex-column align-items-center align-items-md-baseline text-center text-md-left justify-content-center h-100">
                        <h3 class="mt-4 mt-md-0 text-marron-claro">¡Hola por aquí!</h3>
                        <img src="{{ asset('/img/separador.svg') }}" class="separador-ondas" alt="">
                        <h5 class="mt-4 my-3">¡Qué lindo encontrarte en este espacio!
                        </h5>
                        <p class="mb-5 text-marron">Para comenzar, te propongo que hagas un test sin costo para ayudarte a
                            identificar en qué etapa estás y, en cuál pilar de tu emprendimiento debes enfocarte para
                            mejorar la
                            presencia digital de tu marca y potenciar tus resultados</p>
                        <h5 class="mb-3 text-primary">¡Quiero hacer el test!</h5>
                        <a href="{{ route('test') }}"><button class="btn btn-primary mb-5 mb-md-0">Iniciar ahora <svg
                                    xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor"
                                    class="bi bi-chevron-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                </svg></button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seccion Banner Imagen BG -->
    <section class="banner-home-1 py-5 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h4 class="epigrafe text-center mt-5">Acompaño profesionales y negocios digitales a crear una estrategia
                        de marca
                        diferencial que les permita lograr una conexión real y genuina con su audiencia online.</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- end Seccion Banner Imagen BG -->

    <!-- Seccion Sobre Mi -->
    <section class="bg-crema-suave py-5" id="home-about-me">
        <div class="container my-5">
            <div class="row">
                <div class="col-md-5 text-center text-md-left">
                    <img class="img-fluid mb-4" src="{{ asset('/img/hero-marian2.jpg') }}" alt="">
                </div>
                <div class="col-md-7 px-5 vcenter-col">
                    <h2 class="mt-4 mt-md-0">Sobre Mí</h2>
                    <img src="{{ asset('/img/separador.svg') }}" class="separador-ondas" alt="">
                    <p class="mb-3 mt-4 text-marron">Si pudieras hacer realidad la idea que hace tiempo tenes…
                        Si pudieses construir una marca creando estrategias desde la esencia... Uniendo tu expertis, tu
                        formación, las experiencias e ilusiones que te movilizan.
                    </p>
                    <h5 class="mb-3 text-secondary">¿Lo imaginas?<br>Ok, allí aparezco yo.</h5>
                    <p class="text-marron">Juntas podemos crear el universo de tu marca de una manera exquisita y
                        detallista, con el propósito de elevar una propuesta de prestigio en entornos digitales, que genere
                        conversaciones genuinas y ventas sinceras.</p>

                    <p class="text-marron">A través de mis programas de formación y consultoría digital, fusionamos
                        Comunicación Experiencial® con dinámicas específicas y centradas en el marketing consciente.</p>

                    <p class="text-marron">Si este proceso resuena con vos, <br><b>¡Bienvenida!, estás en el lugar
                            correcto.</b></p>
                    <a href="{{ route('sobre-mi') }}" class="btn btn-outline-secondary mt-4">Más por aquí</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin Seccion Sobre Mi -->

    <!-- Seccion Cards Trabajemos Juntas -->
    <section>
        <div class="container py-5">
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="text-center">
                        <h2 class="">Trabajemos Juntas</h2>
                        <img src="{{ asset('/img/separador.svg') }}" class="separador-ondas mx-auto" alt="">
                        <p class="my-5 w-75 mx-auto">Construyamos el universo de tu marca y elevemos su posicionamiento en
                            entornos digitales a través de dinámicas específicas, centradas en el marketing consciente y en
                            la
                            Comunicación Experiencial®.</p>
                        <h5 class="separador-vertical">Mis propuestas</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-5">
                    <div class="card border-secondary text-center card-propuestas shadow">
                        <img src="{{ asset('/img/card-mentoria-home.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title epigrafe">MENTORÍA</h5>
                            <p class="card-text">Te acompaño en el proceso de crear una estrategia de marca diferencial a
                                través del marketing y la comunicación consciente.</p>
                            <a href="{{ route('mentoria') }}" class="btn btn-primary">Click aquí para conocer
                                detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card border-secondary text-center card-propuestas shadow">
                        <img src="{{ asset('/img/card-asesoria-home.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title epigrafe">Cursos</h5>
                            <p class="card-text">Una propuesta de formación con contenidos audiovisuales grabados (videos,
                                ejemplos con casos reales, ejercicios y guías prácticas) para que puedas capacitarte a tu
                                ritmo y respetar tus procesos creativos sin presiones de días u horarios.</p>
                            <a href="https://servicios.marianpd.com/cursos-on-demand/" target="_blank"
                                class="btn btn-primary">Ver
                                los
                                cursos disponible</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card border-secondary text-center card-propuestas shadow">
                        <img src="{{ asset('/img/card-talleres-home.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title epigrafe">Conferencias y Talleres</h5>
                            <p class="card-text">Capacitaciones, workshops y ponencias sobre Comunicación Experiencial®,
                                marketing consciente y estrategia diferencial en entornos digitales.</p>
                            <a href="{{ route('talleres-y-eventos') }}" class="btn btn-primary">Click Aquí</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin Seccion Cards Trabajemos Juntas -->

    <!-- Banner Eleva Tu Marca
                    <div class="banner-eleva-tu-marca d-flex align-items-center my-5">
                        <div class="container py-5 py-md-0">
                            <div class="row text-center text-md-left">
                                <div class="col-md-9">
                                    <h4 class="text-white  my-md-3">Elevá tu marca con mis recursos descargables</h4>
                                    <p class="text-white my-md-3">Obtené mis guías, planners y cursos sin costo para activar tu magia en el
                                        universo
                                        digital</p>
                                </div>
                                <div class="col-md-3 d-flex align-items-center justify-content-center justify-content-md-end"><a
                                        href="{{ route('recursos') }}"><button class="btn btn-blanco">Ver
                                            Recurso</button></a></div>
                            </div>
                        </div>
                    </div>-->
    <!-- Fin Banner Eleva Tu Marca -->

    <!-- Seccion Blog
                    <div class="container bloque-blog my-5">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="igualar-altura-blog">
                                    <h4 class="">Blog</h4>
                                    <img src="{{ asset('/img/separador.svg') }}" class="separador-ondas"  alt="">
                                </div>

                                <div class="mt-4 mt-md-0">
                                    @if (!is_null($latest_posts->first()))
    <a href="{{ route('blog.post', ['category' => $latest_posts->first()->category->slug, 'post' => $latest_posts->first()->slug]) }}">
                                        <img class="img-fluid" src="{{ asset($latest_posts->first()->image) }}" alt=""></a>
                                    <p class="text-coral m-0 mt-4">{{ $latest_posts->first()->category->name }}</p>
                                    <a
                                        href="{{ route('blog.post', ['category' => $latest_posts->first()->category->slug, 'post' => $latest_posts->first()->slug]) }}">
                                        <h4 class=" text-marron my-2">{{ $latest_posts->first()->title }}</h4>
                                    </a>
                                    <p class="entry-date"><span>{{ $latest_posts->first()->author }}</span>.
                                        <span>{{ $latest_posts->first()->created_at->format('d M Y') }}</span></p>
    @endif
                                </div>
                            </div>
                            <div class="col-md-6 mt-4 mt-md-0">
                                <div class="text-left text-md-right igualar-altura-blog">
                                    <h5><a class="text-coral" href="{{ route('blog') }}">¡Ver todos los artículos! <svg
                                                xmlns="http://www.w3.org/2000/svg" width="15.26" height="9.537" viewBox="0 0 15.26 9.537">
                                                <path id="Icon_open-arrow-right" data-name="Icon open-arrow-right"
                                                    d="M9.537,0V3.815H0V5.722H9.537V9.537L15.26,4.711Z" fill="#e67161" />
                                            </svg></a>
                                    </h5>
                                </div>
                                @foreach ($latest_posts as $post)
    @if ($loop->first)
    @continue
    @endif
                                <div class="row entry-post">
                                    <div class="col-md-12">
                                        <div class="ml-md-3">
                                            <h5 class="  text-marron my-2">{{ $post->title }}</h5>
                                            <p class="entry-date m-0"><span>{{ $post->author }}</span>.
                                                <span>{{ $post->created_at->format('d M Y') }}</span></p>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
    @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Fin Seccion Blog -->

    <!-- Seccion Newsletter -->
    <section id="newsletter-alma" class="bg-rosa-claro p-3 p-md-5 ">
        <div class="container my-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="text-white">Un Newsletter con Alma</h3>
                    <p class="text-white">Registrate aquí para recibir contenido exclusivo a través de mis
                        mails.</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-8 offset-md-2 text-center">
                    <form id="newsletterForm" class="needs-validation w-100"
                        action="{{ route('newsletter-subscription') }}" method="post">
                        @csrf
                        <x-honeypot />
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input class="form-control  border-0" type="text" placeholder="Nombre"
                                    name="firstname" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control  border-0" type="text" placeholder="Apellido"
                                    name="lastname" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input class="form-control  border-0" type="email" placeholder="Correo electrónico"
                                    name="email" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control  border-0" type="text" placeholder="Whatsapp"
                                    name="whatsapp" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-blanco w-100 mt-3 mx-auto">Suscribirme</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Seccion Newsletter -->

    <!-- Formulario de Contacto -->
    <aside id="contacto" class="bg-crema-suave p-md-5">
        <div class="container bg-white p-5 rounded shadow">
            <div class="row p-3">
                <div class="col mb-2 text-center">
                    <h3 class="text-seconday text mb-3">Contacta conmigo, <br>me encantará leerte.</h3>
                    <img src="{{ asset('/img/separador.svg') }}" class="separador-ondas mx-auto mb-3"
                        alt="">
                    <p>Si estas por aquí es porque hay algo que quieres decirme o preguntarme.</p>
                    <br>
                    <div class="social-group d-flex">

                        <a href="mailto:contacto@marianpd.com" target="_blank" class="btn-social-group">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                class="bi bi-envelope" viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" fill="#ffffff" />
                            </svg>
                        </a>

                        <!--<a href="https://twitter.com/Marianaapd?s=08" target="_blank" class="btn-social-group">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-twitter" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"
                                    fill="#ffffff" />
                            </svg>
                        </a>-->

                        <a href="https://www.instagram.com/mariann.pd/?hl=es-la" target="_blank"
                            class="btn-social-group">
                            <svg id="Componente_4_15" data-name="Componente 4 – 15" xmlns="http://www.w3.org/2000/svg"
                                width="42" height="42" viewBox="0 0 42 42">
                                <circle id="Elipse_3" data-name="Elipse 3" cx="21" cy="21"
                                    r="21" fill="#f8337a" opacity="0" />
                                <path id="instagram"
                                    d="M14.871,18.656H3.562A3.588,3.588,0,0,1,0,15.051V3.605A3.588,3.588,0,0,1,3.562,0H14.87a3.589,3.589,0,0,1,3.564,3.605V15.051A3.588,3.588,0,0,1,14.871,18.656ZM1.794,7.414v7.637a1.778,1.778,0,0,0,1.766,1.786H14.87a1.778,1.778,0,0,0,1.766-1.786V7.414H13.883a5.039,5.039,0,1,1-9.337,0ZM9.217,6.044A3.25,3.25,0,0,0,6.586,7.413a3.3,3.3,0,0,0,.337,4.235,3.2,3.2,0,0,0,2.293.963,3.284,3.284,0,0,0,0-6.567ZM16.3,2.149h-.407l-2.719.009.011,3.163,3.114-.01V2.149Z"
                                    transform="translate(12 12)" fill="#ffffff" />
                            </svg>
                        </a>

                        <a class="btn-social-group" href="https://www.linkedin.com/in/mariana-pacheco-d-aquila-ba537375/"
                            target="_blank"><svg class="text-primary" id="Componente_4_16" data-name="Componente 4 – 16"
                                xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42">
                                <circle id="Elipse_3" data-name="Elipse 3" cx="21" cy="21"
                                    r="21" fill="#f8337a" opacity="0" />
                                <path id="Icon_awesome-linkedin-in" data-name="Icon awesome-linkedin-in"
                                    d="M4.335,19.367H.32V6.437H4.335ZM2.325,4.673A2.336,2.336,0,1,1,4.651,2.326,2.345,2.345,0,0,1,2.325,4.673ZM19.363,19.367H15.356V13.073c0-1.5-.03-3.424-2.088-3.424-2.088,0-2.407,1.63-2.407,3.316v6.4H6.85V6.437H10.7V8.2h.056a4.219,4.219,0,0,1,3.8-2.088c4.064,0,4.811,2.676,4.811,6.152v7.1Z"
                                    transform="translate(11.066 11.066)" fill="#ffffff" />
                            </svg>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </aside>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            var video1 = document.getElementById("ban_video");
            video1.currentTime = 0;
            $(".mute-bt").click(function() {
                if ($(this).hasClass("stop")) {
                    var ban_video = document.getElementById("ban_video");
                    $("#ban_video").prop('muted', false);
                    $(this).removeClass("stop");
                } else {
                    var ban_video = document.getElementById("ban_video");
                    $("#ban_video").prop('muted', true);
                    $(this).addClass("stop");
                }
            });

            $(".play-bt").click(function() {
                $(".play-bt").hide();
                $(".pause-bt").show();
                var ban_video = document.getElementById("ban_video");
                if ($(".stop-bt").hasClass("active")) {
                    ban_video.currentTime = 0;
                }
                ban_video.play();
            });
            $(".pause-bt").click(function() {
                $(".play-bt").show();
                $(".pause-bt").hide();
                $(".pause-bt").addClass("active");
                $(".stop-bt").removeClass("active");
                var ban_video = document.getElementById("ban_video");
                ban_video.pause();
            });
            $(".stop-bt").click(function() {
                $(".play-bt").show();
                $(".pause-bt").hide();
                $(".pause-bt").removeClass("active");
                $(".stop-bt").addClass("active");
                var ban_video = document.getElementById("ban_video");
                stop
                ban_video.pause();
            });
        });
    </script>
@endsection
