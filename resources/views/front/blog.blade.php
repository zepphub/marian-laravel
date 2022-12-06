@extends('layouts.main')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
@endsection

@section('title')
    Blog -
@endsection

@section('content')
    <header class="blog-header mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="epigrafe">Blog</h1>
                    <h2 class="text-white">¡Activá tu magia!</h2>
                    <p>Recursos de Marketing digital, Comunicación y Branding para que lleves tu marca al
                        próximo nivel</p>
                    <!--<nav class="" aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center bg-transparent text-marron-claro">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                  </ol>
                </nav>-->
                </div>
            </div>
        </div>
    </header>


    <section class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-md-6">
                            <div class="card shadow my-5">
                                <div class="position-relative">
                                    <a
                                        href="{{ route('blog.post', ['category' => $post->category->slug, 'post' => $post->slug]) }}"><img
                                            src="{{ asset($post->image) }}" class="card-img-top rounded-0" width=365px
                                            height=229px alt="..."></a>
                                </div>
                                <div class="card-body">
                                    <p class="badge-date">{{ $post->created_at->format('d M Y') }}</p>
                                    <a
                                        href="{{ route('blog.post', ['category' => $post->category->slug, 'post' => $post->slug]) }}">
                                        <h5 class="card-title">{{ $post->title }}</h5>
                                    </a>
                                    <p class="card-text">{!! mb_strimwidth(strip_tags($post->body), 0, 120, '...', 'utf-8') !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-3 py-md-4">
                <div class="ml-md-4">
                    <form class="form-border-1-px" action="">
                        <input class="form-control " type="text" placeholder="Buscar">
                    </form>
                    <h4 class=" mt-3 mt-md-4">Categorías</h4>
                    <ul class="list-unstyled list-categories">
                        @foreach ($categories as $category)
                            <li
                                class="mt-0 mb-0 @if (!$loop->first) border-marron-claro border-top @endif
@if ($category->is($current_category)) font-weight-bold @endif ">
                                <a href="{{ route('blog.category', $category->slug) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="shadow rounded text-center p-3 p-md-4 mt-md-5">
                        <h4>¡Sumate a mi LetterCoffee!</h4>
                        <p>Para ser parte de mi comunidad y recibir contenido exclusivo</p>
                        <form id="newsletterForm" class="needs-validation form-border-1-px"
                            action="{{ route('newsletter-subscription') }}" method="post">
                            @csrf
                            <x-honeypot />
                            <div class="form-group">
                                <label class="d-none" for="nombre">Nombre</label>
                                <input type="text" class="form-control  form-control-sm p-3" placeholder="Nombre"
                                    id="nombre" name="firstname" required>
                            </div>
                            <div class="form-group">
                                <label class="d-none" for="apellido">Apellido</label>
                                <input type="text" class="form-control  form-control-sm p-3" placeholder="Apellido"
                                    id="apellido" name="lastname" required>
                            </div>
                            <div class="form-group">
                                <label class="d-none" for="email">Correo electrónico</label>
                                <input type="email" class="form-control  form-control-sm p-3"
                                    placeholder="Correo electrónico" id="email" aria-describedby="emailHelp"
                                    name="email" required>
                            </div>
                            <div class="form-group">
                                <label class="d-none" for="whatsapp">Whatsapp</label>
                                <input type="text" class="form-control  form-control-sm p-3" placeholder="Whatsapp"
                                    id="whatsapp" name="whatsapp" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block btn-sm p-2">Suscribirme</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{ $posts->links() }}
    </section>
@endsection
