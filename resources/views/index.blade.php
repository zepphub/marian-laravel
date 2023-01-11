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
                <div class="col-md-5 text-center text-md-left vcenter-col">
                    <img class="img-fluid mb-4" src="{{ asset('/img/about-me.jpg') }}" alt="">
                </div>
                <div class="col-md-7 px-5">
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
                            <a href="{{ route('mentoria-grupal') }}" class="btn btn-primary">Click aquí para conocer
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
                            <a href="https://servicios.marianpd.com/cursos" target="_blank" class="btn btn-primary">Ver
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
        <div class="container bg-white px-3 py-4 rounded shadow">
            <div class="row p-3">
                <div class="col-md-6 mb-3 pr-md-5">
                    <div>
                        <h3 class="text-primary">Contacta conmigo, <br>me encantará leerte.</h3>
                        <img src="{{ asset('/img/separador-primary.svg') }}" class="separador-ondas mb-3"
                            alt="">
                        <p>Si estas por aquí es porque hay algo que quieres decirme o preguntarme.</p>
                        <div>
                            <ul class="list-group">
                                <li class="list-group-item border-0 bg-transparent p-0 pl-md-0 py-md-1">
                                    <div class="d-flex align-items-center">
                                        <svg class="mr-2 text-primary" xmlns="http://www.w3.org/2000/svg" width="18"
                                            height="18" fill="currentColor" class="bi bi-envelope"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
                                        </svg> <a href="mailto:contacto@marianpd.com">contacto@marianpd.com</a>
                                    </div>
                                </li>
                                <!-- <li class="list-group-item border-0 bg-transparent p-0 pl-md-0 py-md-1 my-2 my-md-0">
                                            <div class="d-flex text-white align-items-center"><svg class="mr-2 text-secondary"
                                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                                    class="bi bi-whatsapp" viewBox="0 0 16 16">
                                                    <path
                                                        d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                                </svg>+549- 3537-536010</div>
                                        </li> -->
                            </ul>
                        </div>
                        <!--<div class="social-group mt-5">
                                <div class="d-flex">
                                    <div class="list-group-item border-0 bg-transparent p-0">
                                        <div class="btn-social-group d-flex align-items-center justify-content-center">
                                            <a class="" href="https://twitter.com/Marianaapd?s=08" target="_blank"><svg
                                                    id="Componente_2_9" data-name="Componente 2 – 9"
                                                    xmlns="http://www.w3.org/2000/svg" width="42" height="42"
                                                    viewBox="0 0 42 42">
                                                    <circle id="Elipse_1" data-name="Elipse 1" cx="21"
                                                        cy="21" r="21" fill="#f8337a" opacity="0" />
                                                    <path id="Twitter"
                                                        d="M1230.4,1140.522l-.049-.033a4.649,4.649,0,0,0-3.576-1.372l-.049-.1.033-.017a4.119,4.119,0,0,0,2.2-.909c.065-.264-.016-.413-.294-.446a6.693,6.693,0,0,0-1.715.43c.653-.43.9-.727.751-.876a3.284,3.284,0,0,0-2.058,1.008c.261-.463.376-.727.31-.76a4.761,4.761,0,0,0-.914.777,14.852,14.852,0,0,0-1.339,1.735l-.016.033a15.606,15.606,0,0,0-1.845,4.347l-.131.116-.033.016a6.938,6.938,0,0,0-1.911-1.669,21.26,21.26,0,0,0-3.135-1.686,26.016,26.016,0,0,0-3.984-1.7,4.065,4.065,0,0,0,2.188,3.636v.016a5.188,5.188,0,0,0-1.5.231c.1,1.421,1.094,2.4,2.972,2.925l-.016.033a2.1,2.1,0,0,0-1.812.76,3.276,3.276,0,0,0,3.3,1.768,2.337,2.337,0,0,0-.719.529,1.128,1.128,0,0,0-.294,1.091,1.778,1.778,0,0,0,1.845.859l.049.066-.016.033a6.806,6.806,0,0,1-5.618,2.2l-.033.017a7.116,7.116,0,0,1-4.328-1.95,13.467,13.467,0,0,0,6.189,4.942,14.5,14.5,0,0,0,8.786.215h.049a13.987,13.987,0,0,0,7.234-5.123,10.231,10.231,0,0,0,1.715-3.867,3.526,3.526,0,0,0,3.217-1.305l-.016-.033a6.256,6.256,0,0,1-2.89-.166v-.165q2.351-.273,2.792-1.537a4.3,4.3,0,0,1-3.233.033,7.164,7.164,0,0,0-2.107-4.1"
                                                        transform="translate(-1201.66 -1126.2)" fill="#fff" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="list-group-item border-0 bg-transparent p-0">
                                        <div class="btn-social-group d-flex align-items-center justify-content-center">
                                            <a class="" href="https://www.instagram.com/mariann.pd/?hl=es-la"
                                                target="_blank"><svg id="Componente_4_15" data-name="Componente 4 – 15"
                                                    xmlns="http://www.w3.org/2000/svg" width="42" height="42"
                                                    viewBox="0 0 42 42">
                                                    <circle id="Elipse_3" data-name="Elipse 3" cx="21"
                                                        cy="21" r="21" fill="#f8337a" opacity="0" />
                                                    <path id="instagram"
                                                        d="M14.871,18.656H3.562A3.588,3.588,0,0,1,0,15.051V3.605A3.588,3.588,0,0,1,3.562,0H14.87a3.589,3.589,0,0,1,3.564,3.605V15.051A3.588,3.588,0,0,1,14.871,18.656ZM1.794,7.414v7.637a1.778,1.778,0,0,0,1.766,1.786H14.87a1.778,1.778,0,0,0,1.766-1.786V7.414H13.883a5.039,5.039,0,1,1-9.337,0ZM9.217,6.044A3.25,3.25,0,0,0,6.586,7.413a3.3,3.3,0,0,0,.337,4.235,3.2,3.2,0,0,0,2.293.963,3.284,3.284,0,0,0,0-6.567ZM16.3,2.149h-.407l-2.719.009.011,3.163,3.114-.01V2.149Z"
                                                        transform="translate(12 12)" fill="#fff" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="list-group-item border-0 bg-transparent p-0">
                                        <div class="btn-social-group d-flex align-items-center justify-content-center">
                                            <a class=""
                                                href="https://www.linkedin.com/in/mariana-pacheco-d-aquila-ba537375/"
                                                target="_blank"><svg id="Componente_4_16" data-name="Componente 4 – 16"
                                                    xmlns="http://www.w3.org/2000/svg" width="42" height="42"
                                                    viewBox="0 0 42 42">
                                                    <circle id="Elipse_3" data-name="Elipse 3" cx="21"
                                                        cy="21" r="21" fill="#f8337a" opacity="0" />
                                                    <path id="Icon_awesome-linkedin-in" data-name="Icon awesome-linkedin-in"
                                                        d="M4.335,19.367H.32V6.437H4.335ZM2.325,4.673A2.336,2.336,0,1,1,4.651,2.326,2.345,2.345,0,0,1,2.325,4.673ZM19.363,19.367H15.356V13.073c0-1.5-.03-3.424-2.088-3.424-2.088,0-2.407,1.63-2.407,3.316v6.4H6.85V6.437H10.7V8.2h.056a4.219,4.219,0,0,1,3.8-2.088c4.064,0,4.811,2.676,4.811,6.152v7.1Z"
                                                        transform="translate(11.066 11.066)" fill="#fff" />
                                                </svg></a>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mt-4 mt-md-0">
                        <form id="contactForm" class="needs-validation form-home" action="{{ route('consulta') }}"
                            method="post">
                            @csrf
                            <x-honeypot />
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control " id="nombre" placeholder="Nombre"
                                        name="firstname" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control " id="apellido" placeholder="Apellido"
                                        name="lastname" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <input type="email" class="form-control " placeholder="Email" id="email"
                                        name="email" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control " placeholder="Teléfono" id="telefono"
                                        name="phone" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <textarea class="form-control" name="query" cols="30" rows="5" placeholder="Dejame tu consulta"
                                        required></textarea>
                                </div>
                            </div>
                            <button class="btn btn-primary w-100" type="submit">Enviar
                                <svg xmlns="http://www.w3.org/2000/svg" width="21.29" height="21.29"
                                    viewBox="0 0 21.29 21.29">
                                    <g id="avion-de-papel" transform="translate(0 0)">
                                        <g id="Grupo_536" data-name="Grupo 536" transform="translate(2.246 0)">
                                            <g id="Grupo_535" data-name="Grupo 535" transform="translate(0 0)">
                                                <path id="Trazado_388" data-name="Trazado 388"
                                                    d="M72.834.054a.416.416,0,0,0-.418,0L64.8,4.564a.416.416,0,1,0,.423.716l5.467-3.233L60.5,12.613l-5.065-1.55,6.61-3.909a.416.416,0,0,0-.423-.716L54.2,10.827a.416.416,0,0,0,.09.756l6.049,1.851,2.669,4.857.009.013a.415.415,0,0,0,.646.084l3.069-3,5.772,1.766a.416.416,0,0,0,.537-.4V.416A.416.416,0,0,0,72.834.054Zm-9.8,13.635a.416.416,0,0,0-.074.237V16.47l-1.822-3.317L69.2,4.787Zm.758,3.413V14.489l2.037.623Zm8.421-.908-8.171-2.5L72.212,1.9Z"
                                                    transform="translate(-53.999 0)" fill="#fff" />
                                            </g>
                                        </g>
                                        <g id="Grupo_538" data-name="Grupo 538" transform="translate(2.246 14.331)">
                                            <g id="Grupo_537" data-name="Grupo 537">
                                                <path id="Trazado_389" data-name="Trazado 389"
                                                    d="M58.591,344.77a.416.416,0,0,0-.588,0l-3.882,3.882a.416.416,0,0,0,.588.588l3.882-3.882A.416.416,0,0,0,58.591,344.77Z"
                                                    transform="translate(-53.999 -344.648)" fill="#fff" />
                                            </g>
                                        </g>
                                        <g id="Grupo_540" data-name="Grupo 540" transform="translate(0 19.502)">
                                            <g id="Grupo_539" data-name="Grupo 539" transform="translate(0)">
                                                <path id="Trazado_390" data-name="Trazado 390"
                                                    d="M1.666,469.123a.416.416,0,0,0-.588,0l-.956.956a.416.416,0,1,0,.588.588l.956-.956A.416.416,0,0,0,1.666,469.123Z"
                                                    transform="translate(0 -469.001)" fill="#fff" />
                                            </g>
                                        </g>
                                        <g id="Grupo_542" data-name="Grupo 542" transform="translate(5.222 20.434)">
                                            <g id="Grupo_541" data-name="Grupo 541">
                                                <path id="Trazado_391" data-name="Trazado 391"
                                                    d="M126.29,491.532a.415.415,0,1,0,.122.294A.419.419,0,0,0,126.29,491.532Z"
                                                    transform="translate(-125.58 -491.41)" fill="#fff" />
                                            </g>
                                        </g>
                                        <g id="Grupo_544" data-name="Grupo 544" transform="translate(6.26 17.34)">
                                            <g id="Grupo_543" data-name="Grupo 543">
                                                <path id="Trazado_392" data-name="Trazado 392"
                                                    d="M153.3,417.128a.416.416,0,0,0-.588,0l-2.056,2.056a.416.416,0,1,0,.588.588l2.056-2.056A.416.416,0,0,0,153.3,417.128Z"
                                                    transform="translate(-150.534 -417.006)" fill="#fff" />
                                            </g>
                                        </g>
                                        <g id="Grupo_546" data-name="Grupo 546" transform="translate(13.35 17.182)">
                                            <g id="Grupo_545" data-name="Grupo 545">
                                                <path id="Trazado_393" data-name="Trazado 393"
                                                    d="M323.825,413.333a.416.416,0,0,0-.588,0l-2.062,2.062a.416.416,0,1,0,.588.588l2.062-2.062A.416.416,0,0,0,323.825,413.333Z"
                                                    transform="translate(-321.053 -413.211)" fill="#fff" />
                                            </g>
                                        </g>
                                        <g id="Grupo_548" data-name="Grupo 548" transform="translate(11.079 5.546)">
                                            <g id="Grupo_547" data-name="Grupo 547">
                                                <path id="Trazado_394" data-name="Trazado 394"
                                                    d="M267.14,133.5a.416.416,0,1,0,.122.294A.419.419,0,0,0,267.14,133.5Z"
                                                    transform="translate(-266.43 -133.38)" fill="#fff" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </button>
                        </form>
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
