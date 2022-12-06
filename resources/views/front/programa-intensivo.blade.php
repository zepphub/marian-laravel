@extends('layouts.main')

@section('head')
@endsection

@section('title')
    Mentoría Personalizada - Programa Selecto para profesionales y marcas digitales -
@endsection

@section('content')
    <article>

        <header class="container-fluid">
            <div class="row py-5">
                <div class="col-md-12 text-center">
                    <h1 class="epigrafe">Mentoría Personalizada</h1>
                    <h2>Eleva tu esencia</h2>
                    <nav class="" aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center bg-transparent">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('mentoria') }}">Mentorías</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mentoría Personalizada</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </header>

        <section class="container py-5">
            <div class="row my-5">
                <div class="col-md-5 d-flex justify-content-center order-sm-12">
                    <img class="img-fluid m-5 m-sm-0" style="max-width: 256px;" src="{{ asset('img/PS-badge.svg') }}" alt="">
                </div>
                <div class="col-md-7 align-items-center order-sm-1">
                  <h3 class="mb-4">Programa Selecto para profesionales y marcas digitales</h3>
                  <p>Durante un período de 10 semanas te acompaño y ayudo en el proceso de toma de decisión, en etapa de
                      construcción y proyección de marca, para que logres crear una estrategia de diferenciación en
                      entornos digitales a fin de que la audiencia te perciba como la mejor opción.</p>
                  <a href="https://forms.gle/bX4KrmZhpPcoyprV6" target="_blank" class="btn btn-primary">¡Quiero aplicar a
                      la mentoría!</a>
              </div>
            </div>
        </section>

        <section class="container pb-5">
            <div class="row my-5">
                <div class="col">
                    <h3>Ejes de trabajo</h4>
                        <img src="{{ asset('img/separador.svg') }}" class="separador-ondas" alt="">
                        <div class="row mt-4">
                            <div class="col-sm-4 mb-4">
                                <div class="card bg-nude p-4">
                                    <img src="{{ asset('img/programa-icon-list-1.svg') }}" alt="" class="w-25 mb-4">
                                    <p>Has logrado construir una audiencia digital en uno o diversos canales de
                                        comunicación.</p>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-4">
                                <div class="card bg-nude p-4">
                                    <img src="{{ asset('img/programa-icon-list-2.svg') }}" alt="" class="w-25 mb-4">
                                    <p>Has probado y validado diversas estrategias en entornos digitales.</p>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-4">
                                <div class="card bg-nude p-4">
                                    <img src="{{ asset('img/programa-icon-list-3.svg') }}" alt="" class="w-25 mb-4">
                                    <p>Has logrado un flujo de ventas constante, lo que por períodos se traduce a la “agenda
                                        llena”</p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>

        <section class="container pb-5">
            <div class="row my-5">
                <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                    <h3 class="text-center separador-vertical">¿Cuál es el momento ideal para aplicar al proceso?</h3>
                    <p class="text-center mb-4">Cuando tu negocio digital y/o flujo de venta online es un hecho y te
                        encontras en una etapa de crecimiento o expansión, lo que refleja que:</p>
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
            </div>
            <div class="row my-5">
              <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center">
                    <h4>Si te sentís identificada con las afirmaciones que comparto respecto al momento vital de tu negocio,
                        probablemente necesites:</h4>
                    <ul class="list-unstyled checklist text-justify">
                        <li><img src="{{ asset('img/check-icon.svg') }}" alt=""> Capitalizar la experiencia
                            rediseñando la estrategia de marca en entornos digitales con acciones validadas y alineadas a
                            tus valores diferenciales. </li>
                        <li><img src="{{ asset('img/check-icon.svg') }}" alt=""> Proyectar confianza y autoridad de
                            marca elevando la percepción de tus propuestas en mercados digitales.</li>
                        <li><img src="{{ asset('img/check-icon.svg') }}" alt=""> Consolidar un relato de marca
                            auténtico que le de un sentido real y experiencial a tu comunicación digital.</li>
                        <li>Sentar las bases para una estrategia de marketing consciente y 100% alineada a tus procesos
                            creativos y comunicativos a la hora de vender online.</li>
                    </ul>
                    <img src="{{ asset('img/separador.svg') }}" alt="" class="separador-ondas mx-auto">
                    <h4 class="my-4">Es mi momento,</h4>
                    <a href="https://forms.gle/bX4KrmZhpPcoyprV6" target="_blank" class="btn btn-primary"> ¡Quiero aplicar
                        al Programa Selecto!</a>
                </div>
            </div>
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
                                    grupal +
                                    Masterclass con invitadas expertas que se han consolidado en mercados digitales
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
                                    través
                                    del cual, podrás crear tu círculo de aliadas y crecer en comunidad.</h5>
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
                        <iframe class="embed-responsive-item" width="560" height="315"
                            src="https://www.youtube.com/embed/xLOF69whyDo" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <img src="{{ asset('img/separador.svg') }}" class="separador-ondas mx-auto my-4" alt="">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" width="560" height="315"
                            src="https://www.youtube.com/embed/xLOF69whyDo" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <img src="{{ asset('img/separador.svg') }}" class="separador-ondas mx-auto my-4" alt="">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" width="560" height="315"
                            src="https://www.youtube.com/embed/xLOF69whyDo" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <img src="{{ asset('img/separador.svg') }}" class="separador-ondas mx-auto my-4" alt="">

                </div>
            </div>
        </section>

        <!-- Banner Eleva Tu Marca -->
        <section id="banner-programa-reunion" class="banner-eleva-tu-marca d-flex align-items-center">
            <div class="container py-5">
                <div class="row text-center text-md-left">
                    <div class="col-md-12 text-center">
                        <h5 class="text-white  font-weight-normal mb-4">Si estás decidida a crear una estrategia de
                            comunicación
                            y de marketing que te ayude a dar a conocer la esencia y el enorme valor que tiene tu marca, ¡me
                            encantará
                            acompañarte!</h5>
                        <!-- <h5 class="text-white  my-4">Te invito a conocernos en una llamada de claridad de 20 minutos </h5> -->
                        <a href="https://forms.gle/bX4KrmZhpPcoyprV6" target="_blank"
                            class="btn btn-outline-white">¡Quiero agendar una reunión!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fin Banner Eleva Tu Marca -->

        <section class="container mt-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4 class="text-marron-claro">Otras maneras de encontrarnos</h4>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 mb-5">
                    <div class="card border-secondary text-center card-propuestas shadow">
                        <img src="{{ asset('/img/badge-mentoria_grupal.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title epigrafe">MENTORÍA Grupal</h5>
                            <h4>Eleva tu Marca</h4>
                            <p class="card-text"><b>Un programa grupal de 8 semanas con acompañamiento semanal y sesiones
                                    de mentoría en vivo.</b><br> Te ayudaré a tomar decisiones estratégicas para transformar
                                tu emprendimiento en un negocio digital sólido y alineado al estilo de vida que deseas.</p>
                            <a href="{{ route('mentoria-grupal') }}" class="btn btn-primary">Click aquí para conocer
                                detalles</a>
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
