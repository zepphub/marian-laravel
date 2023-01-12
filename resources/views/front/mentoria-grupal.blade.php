@extends('layouts.main')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
@endsection

@section('title')
    Mentoría Grupal - Programa de formación online: "Eleva tu Marca" -
@endsection

@section('content')
    <article>

        <header class="container-fluid">
            <div class="row py-5">
                <div class="col-md-12 text-center">
                    <h1 class="epigrafe">Mentoría Grupal</h1>
                    <h2>Eleva tu Marca®</h2>
                    <nav class="" aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center bg-transparent">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('mentoria') }}">Mentorías</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mentoría Grupal</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </header>

        <section class="container py-5">
            <div class="row my-5">
                <div class="col-md-5 text-center d-flex align-items-center justify-content-center">
                    <img class="img-fluid m-5 m-sm-0" style="max-width: 256px;"
                        src="{{ asset('img/mg-badge.svg') }}" alt="">
                </div>
                <div class="col-md-7 vcenter-col">
                    <h2>Programa de formación <u>online</u></h2>
                    <img src="{{ asset('/img/separador.svg') }}" class="separador-ondas mb-4" alt="">
                    <p>Un programa grupal de 8 semanas con acompañamiento semanal y sesiones de mentoría en vivo, a través
                        de las cuales, te ayudo a tomar decisiones estratégicas para transformar tu emprendimiento en un
                        negocio digital sólido y auténtico, respetando tus procesos creativos y elevando una estrategia de
                        marca diferencial desde la calma y el disfrute.</p>
                    <a href="#" target="_blank" class="btn btn-primary mt-3">¡Quiero aplicar a
                        la mentoría!</a>
                </div>
            </div>
        </section>

        <section class="container py-5">
            <div class="row my-5">
                <div class="col-md-7 vcenter-col">
                    <h3>¿Qué significa tener un negocio online sólido?</h3>
                    <img src="{{ asset('/img/separador.svg') }}" class="separador-ondas mb-4" alt="">
                    <p>Gestionar un emprendimiento que no absorba todas tus horas productivas tratando de sumar likes y
                        comentarios en tus posteos, por lo contrario, <u>una marca auténtica y estratégica que te impulse a
                            hacer menos pero mejor, elevando tus resultados.</u></p>
                    <p>Es lo que necesito,</p>
                    <h6>¡Quiero registrarme en lista de espera para la próxima edición!</h6>
                    <a href="https://www.google.com/url?q=https://www.dopplerpages.com/marianapd.tur-C0AD3/LISTADEESPERAMentoragrupalED2023-69561&sa=D&source=docs&ust=1668521241051007&usg=AOvVaw0n3DPwPCcgO4B8dU389jA6"
                        target="_blank" class="btn btn-primary mt-3">Reservar mi lugar</a>
                </div>
                <div class="col-md-5">
                    <img class="w-100 img-fluid" src="{{ asset('img/mentoria-grupal-img-1.png') }}" alt="">
                </div>
            </div>
        </section>

        <section class="container pb-5">
            <div class="row my-5">
                <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                    <h3 class="text-center separador-vertical">Este programa es para vos si querés:</h3>

                    <ul class="list-unstyled checklist text-justify">
                        <li><img src="{{ asset('img/check-icon.svg') }}" alt=""> Definir el modelo de negocio que se
                            adapte al estilo de vida que querés vivir para potenciar la venta de tus servicios online desde
                            la calma y con estrategia.</li>
                        <li><img src="{{ asset('img/check-icon.svg') }}" alt=""> Fortalecer las bases estratégicas
                            de tu emprendimiento para que te asegures de comunicar tu factor diferencial y conectar con tu
                            cliente ideal.
                        </li>
                        <li><img src="{{ asset('img/check-icon.svg') }}" alt=""> Crear una estrategia de marca a tu
                            medida, que represente tus valores profesionales y que respete tus procesos creativos, evitando
                            caer en métodos preestablecidos.
                        </li>
                        <li><img src="{{ asset('img/check-icon.svg') }}" alt=""> Aplicar acciones de venta sin
                            perder la esencia y la personalización que te caracteriza al momento de comunicar tus servicios.
                        </li>
                        <li><img src="{{ asset('img/check-icon.svg') }}" alt=""> Contar con las herramientas
                            necesarias para crear una estrategia de marca consciente y sostenible, en términos de contenido
                            y posicionamiento.
                        </li>
                        <li><img src="{{ asset('img/check-icon.svg') }}" alt=""> Contar con una mirada objetiva y
                            profesional sobre la presencia de tu marca en entornos digitales, además de un acompañamiento
                            que te ayude y asegure el avance.
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="mentoria-single-banner" class="d-flex align-items-center">
            <h4 class="text-center text-white p-5">Que sea grupal significa que compartirás el proceso con emprendedoras y
                profesionales que están en tu misma situación, siendo parte de una experiencia altamente enriquecedora que
                se eleva en comunidad.</h4>
        </section>

        <section class="container-fluid py-5 bg-crema-suave-2">
            <div class="row my-5">
                <div class="col-md-12 text-center">
                    <h3>¿Qué incluye el programa?</h3>
                    <div class="row mt-4 mt-md-5">

                        <div class="col-md-3">
                            <div class="d-flex flex-column align-items-center text-center my-3 my-md-0">
                                <img src="{{ asset('img/mentoria-g-exp-1.svg') }}" alt="" class="mb-3 w-25">
                                <h5 class="text-marron-claro m-md-0 ml-md-3 mt-2 mt-md-0">Sesiones en vivo de mentoría
                                    grupal + Masterclass con invitadas expertas que se han consolidado en mercados digitales
                                </h5>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="d-flex flex-column align-items-center text-center my-3 my-md-0">
                                <img src="{{ asset('img/mentoria-g-exp-2.svg') }}" alt="" class="mb-3 w-25">
                                <h5 class="text-marron-claro m-md-0 ml-md-3 mt-2 mt-md-0">Módulos de contenido en videos de
                                    entre 5 y 15 minutos + plantillas con ejercicios y tutoriales
                                </h5>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="d-flex flex-column align-items-center text-center my-3 my-md-0">
                                <img src="{{ asset('img/mentoria-g-exp-3.svg') }}" alt="" class="mb-3 w-25">
                                <h5 class="text-marron-claro m-md-0 ml-md-3 mt-2 mt-md-0">Grupo exclusivo de Telegram, a
                                    través del cual, podrás crear tu círculo de aliadas y crecer en comunidad.</h5>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="d-flex flex-column align-items-center text-center my-3 my-md-0">
                                <img src="{{ asset('img/mentoria-g-exp-4.svg') }}" alt="" class="mb-3 w-25">
                                <h5 class="text-marron-claro m-md-0 ml-md-3 mt-2 mt-md-0">Material audiovisual disponible +
                                    acceso a ejemplos y casos reales + Seguimiento personalizado.</h5>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section class="container py-5">
            <div class="row my-5">
                <div class="col-md-8 offset-md-2 text-center">
                    <h3 class="mb-0">La experiencia contada por ellas</h3>
                    <img src="{{ asset('img/separador.svg') }}" class="separador-ondas mx-auto my-4" alt="">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/xLOF69whyDo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

        <section class="banner-eleva-tu-marca">
            <div class="container my-5 p-5">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h4 class="text-white  mb-3">¡Quiero ser parte de la próxima edición!
                        </h4>
                        <!-- <h5 class="text-white mt-3">Costo <span>{{ $mentorship->service->price() }}</span></h5> -->
                        <a href="https://www.dopplerpages.com/marianapd.tur-C0AD3/LISTADEESPERAMentoragrupalED2023-69561"
                            target="_blank" class="btn btn-blanco mt-3 mt-md-0">Registrarme en lista de espera</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="container mt-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4 class="text-marron-claro">Otras maneras de encontrarnos</h4>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 mb-5">
                    <div class="card border-secondary text-center card-propuestas shadow">
                        <img src="{{ asset('/img/ps-badge-dark.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title epigrafe">MENTORÍA Personalizada</h5>
                            <h4>Eleva tu Esencia®</h4>
                            <p class="card-text"><b>Programa Selecto para Profesionales y Marcas Digitales.</b><br> Un
                                proceso en el que te acompaño y ayudo, durante un período de 10 semanas, a crear una
                                estrategia de marca diferencial e integral en entornos digitales a fin de que tu audiencia
                                te perciba como la mejor opción.</p>
                            <a href="{{ route('programa-intensivo') }}" class="btn btn-primary">Click aquí para aplicar
                                al
                                proceso</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="card border-secondary text-center card-propuestas shadow">
                        <img src="{{ asset('/img/card-asesoria-home.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title epigrafe">Cursos</h5>
                            <h4>On Demand</h4>
                            <p class="card-text">Una propuesta de formación con contenidos audiovisuales grabados (videos,
                                ejemplos con casos reales, ejercicios y guías prácticas) para que puedas capacitarte a tu
                                ritmo y respetar tus procesos creativos sin presiones de días u horarios.</p>
                            <a href="https://servicios.marianpd.com/cursos" target="_blank" class="btn btn-primary">Click
                                aquí para ver los cursos disponible</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
@endsection
