@extends('layouts.main')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
@endsection

@section('title')
    {{ $post->title }} -
@endsection

@section('content')
    <article>
        <header id="portada-entrada">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-12 text-center d-flex flex-column align-items-center justify-content-center">
                        <div id="badge-category">
                            <h5 class="epigrafe">{{ $post->category->name }}</h5>
                        </div>
                        <h1 class="text-secondary mb-4">{{ $post->title }}</h1>
                        <p class="badge-date text-white">{{ $post->created_at->format('d M Y') }}</p>
                    </div>
                </div>
            </div>
        </header>

        <div class="container-fluid" id="contenido-entrada">
            <div class="row pt-5">

                <section class="col-md-8 offset-md-2 mb-5">
                    <div class="txt-body">{!! $post->body !!}</div>
                </section>

                <aside class="col-md-8 offset-md-2 mb-5">
                    <!--<form class="" action="">
                                        <input class="form-control " type="text" placeholder="Buscar">
                                    </form>-->
                    <!--<h4 class=" mt-3 mt-md-4">Categorías</h4>
                                    <ul class="list-unstyled list-categories">
                                        @foreach ($categories as $category)
    <li class="mt-0 mb-0 @if (!$loop->first) border-marron-claro border-top @endif ">
                                                <a href="{{ route('blog.category', $category->slug) }}">{{ $category->name }}</a>
                                            </li>
    @endforeach
                                    </ul>-->
                    <div class="lettercoffee">
                        <h4>¡Sumate a mi LetterCoffee!</h4>
                        <p>Para ser parte de mi comunidad y recibir contenido exclusivo</p>
                        <form id="newsletterForm" class="needs-validation " action="{{ route('newsletter-subscription') }}"
                            method="post">
                            @csrf
                            <x-honeypot />
                            <div class="form-group">
                                <label class="d-none" for="nombre">Nombre</label>
                                <input type="text" class="form-control" placeholder="Nombre" id="nombre"
                                    name="firstname" required>
                            </div>
                            <div class="form-group">
                                <label class="d-none" for="apellido">Apellido</label>
                                <input type="text" class="form-control" placeholder="Apellido" id="apellido"
                                    name="lastname" required>
                            </div>
                            <div class="form-group">
                                <label class="d-none" for="email">Correo electrónico</label>
                                <input type="email" class="form-control" placeholder="Correo electrónico" id="email"
                                    aria-describedby="emailHelp" name="email" required>
                            </div>
                            <div class="form-group">
                                <label class="d-none" for="whatsapp">Whatsapp</label>
                                <input type="text" class="form-control" placeholder="Whatsapp" id="whatsapp"
                                    name="whatsapp" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Suscribirme</button>
                        </form>
                    </div>
                    <!-- end LetterCoffee -->
                </aside>
            </div>
        </div>
    </article>
@endsection
