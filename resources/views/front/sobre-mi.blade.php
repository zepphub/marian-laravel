@extends('layouts.main')

@section('head')
@endsection

@section('title')
    Sobre mi -
@endsection

@section('content')
    <article>
        <header class="portada-sobre-mi py-5">
            <div class="container py-5 d-flex flex-column align-items-baseline justify-content-center">
                <div class="row pb-3">
                    <div class="col-md-12">
                        <h1 class="epigrafe text-marron text-center">Sobre Mi</h1>
                    </div>
                    <div class="col-md-6">
                        <h2 class="text-white reinata" style="font-size: 8rem; margin-bottom:-1rem;">Soy Marian,</h2>
                        <h4 class="text-white mb-4">Me especializo en la construcción de marca y en el desarrollo de
                            estrategias aplicadas a negocios en entornos digitales.</h4>
                        <a href="#next" class="btn btn-white">Conocé mi Historia</a>
                    </div>
                </div>
            </div>
        </header>

        <section class="py-5" id="next">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-6 order-sm-12">
                        <img class="img-fluid rounded-circle mb-5" src="{{ asset('img/about-me-3.jpg') }}" alt="">
                    </div>
                    <div class="col-md-6 vcenter-col pr-md-5 order-sm-1">
                            <p>Soy emprendedora, amante de los viajes, la cultura, los destinos, apasionada por el
                                marketing, las historias y todo lo que se genera con ellas. Hace algún tiempito me propuse
                                unir todas las actividades y propuestas que estaba llevando adelante desde mi profesión para
                                comenzar esta historia…</p>
                            <p>Tengo 30 años y emprendo desde los 19. Comencé en el área de marketing de una empresa
                                familiar, un hotel ubicado en las sierras de Córdoba, Argentina. La vida me llevó a
                                administrarlo tiempo después y así se sucedieron 3 años… Una partecita de mi corazón sigue
                                allí. También fundé y administré un bar al que llamamos la Casona, por estar en una casa
                                antigua en la que sucedieron cientos de historias hermosas. El proyecto gastronómico duró
                                pocos meses pero al día de hoy continúo aplicando lo aprendido durante esa experiencia.</p>
                            <p>Una vez recibida, emprendí una consultora especializada en marketing y turismo. A través de
                                ella trabajé con marcas de la industria de los viajes, aplicando herramientas comerciales y
                                estrategias de marketing y potenciando experiencias colmadas de paisajes y buenas energías.
                            </p>
                            <a href="{{ route('servicios') }}" class="btn btn-outline-secondary mt-3">Trabajemos juntas</a>
                    </div>

                </div>
            </div>
        </section>

        <section class="bg-crema-suave-2 portada2-sobre-mi py-5">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-6 vcenter-col ">
                                <p class="text-secondary">Acompañé todas estas aventuras estudiando mucho, y aún sigo haciéndolo. Soy Licenciada en
                                    Turismo, Diplomada y Especialista en Marketing y Dirección Comercial, Magister en
                                    Administración de Empresas (MBA) y en camino se encuentra una Maestría en Marketing
                                    Digital.</p>
                                <p class="text-secondary">Hoy me encuentro aquí, escribiendo el contenido de mi sitio web, un espacio que consolida
                                    y une todas las experiencias que te comparto... Hoy decido comunicar, proyectar y ayudar
                                    a todas las marcas que tengan la intención de contar su historia y dejar huellas. Lo
                                    hago a través de mi Marca Personal, como consultora de marcas auténticas.
                                </p>
                                <a href="{{ route('servicios') }}" class="btn btn-white mt-3">Trabajemos juntas</a>
                        </div>
                    </div>
                </div>
        </section>

        <!-- Seccion Cards Trabajemos Juntas -->
        <section>
            <div class="container py-5">
                <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h2 class="">Trabajemos Juntas</h2>
                            <img src="{{ asset('/img/separador.svg') }}" class="separador-ondas mx-auto" alt="">
                            <p class="my-5 w-75 mx-auto">Construyamos el universo de tu marca y elevemos su posicionamiento
                                en
                                entornos digitales a través de dinámicas específicas, centradas en el marketing consciente y
                                en
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
                                <p class="card-text">Te acompaño en el proceso de crear una estrategia de marca diferencial
                                    a
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
                                <p class="card-text">Una propuesta de formación con contenidos audiovisuales grabados
                                    (videos,
                                    ejemplos con casos reales, ejercicios y guías prácticas) para que puedas capacitarte a
                                    tu
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

    </article>
@endsection
