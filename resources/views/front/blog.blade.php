@extends('layouts.main')

@section('head')
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
@endsection

@section('title')Blog - @endsection

@section('content')
<header>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>Blog</h2>
        <nav class="" aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center bg-transparent text-marron-claro">
            <li class="breadcrumb-item text-marron-claro"><a class="text-marron-claro" href="{{ route('index') }}">Inicio</a></li>
            <li class="breadcrumb-item text-secondary active font-weight-bold" aria-current="page">Blog</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</header>  

  <!-- Banner Eleva Tu Marca -->
  <div class="banner-eleva-tu-marca d-flex align-items-center">
    <div class="container py-5 py-md-0">
      <div class="row text-center text-md-left py-5">
        <div class="col-md-12">
          <h4 class="text-white titulo-home">¡Activá tu magia!</h4>
          <p class="text-white">Recursos de Marketing digital, Comunicación y Branding para que lleves tu marca al
            próximo nivel</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Fin Banner Eleva Tu Marca -->

  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          @foreach ($posts as $post)
          <div class="col-md-6">
            <div class="card border-0 my-4">
              <div class="position-relative">
                <a href="{{ route('blog.post', [ 'category' => $post->category->slug,
                                                 'post' => $post->slug ]) }}"><img src="{{ asset($post->image) }}" class="card-img-top rounded-0" width=365px height=229px alt="..."></a>
                <div class="badge-date position-absolute">
                  <p class="m-0 text-white"><svg id="Icon_ionic-ios-calendar" data-name="Icon ionic-ios-calendar"
                      xmlns="http://www.w3.org/2000/svg" width="12.064" height="11.136" viewBox="0 0 12.064 11.136">
                      <path id="Trazado_9" data-name="Trazado 9"
                        d="M14.279,6.75h-1.16v.7a.233.233,0,0,1-.232.232h-.464a.233.233,0,0,1-.232-.232v-.7H6.623v.7a.233.233,0,0,1-.232.232H5.927A.233.233,0,0,1,5.7,7.446v-.7H4.535a1.163,1.163,0,0,0-1.16,1.16V15.8a1.163,1.163,0,0,0,1.16,1.16h9.744a1.163,1.163,0,0,0,1.16-1.16V7.91A1.163,1.163,0,0,0,14.279,6.75Zm.232,8.7a.582.582,0,0,1-.58.58H4.883a.582.582,0,0,1-.58-.58V10.23A.233.233,0,0,1,4.535,10h9.744a.233.233,0,0,1,.232.232Z"
                        transform="translate(-3.375 -5.822)" fill="#fff" />
                      <path id="Trazado_10" data-name="Trazado 10"
                        d="M9.928,4.732A.233.233,0,0,0,9.7,4.5H9.232A.233.233,0,0,0,9,4.732v.7h.928Z"
                        transform="translate(-6.68 -4.5)" fill="#fff" />
                      <path id="Trazado_11" data-name="Trazado 11"
                        d="M25.678,4.732a.233.233,0,0,0-.232-.232h-.464a.233.233,0,0,0-.232.232v.7h.928Z"
                        transform="translate(-15.934 -4.5)" fill="#fff" />
                    </svg>
                    {{ $post->created_at->format('d M Y') }}</p>
                </div>
              </div>
              <div class="card-body">
                <a href="{{ route('blog.post', [ 'category' => $post->category->slug,
                                                 'post' => $post->slug ]) }}"><h5 class="card-title">{{ $post->title }}</h5></a>
                <p class="card-text">{!! mb_strimwidth(strip_tags($post->body),0,120,"...","utf-8") !!}</p>
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
          <h4 class="titulo-home mt-3 mt-md-4">Categorías</h4>
          <ul class="list-unstyled list-categories">
            @foreach ($categories as $category)
            <li class="mt-0 mb-0 @if (!$loop->first)
border-marron-claro border-top
@endif
@if ($category->is($current_category))
font-weight-bold
@endif "><a href="{{ route('blog.category', $category->slug) }}">{{ $category->name }}</a></li>
            @endforeach
          </ul>
          <div class="shadow rounded text-center p-3 p-md-4 mt-md-5">
            <h4>¡Sumate a mi LetterCoffee!</h4>
            <p>Para ser parte de mi comunidad y recibir contenido exclusivo</p>
            <form id="newsletterForm" class="needs-validation form-border-1-px" action="{{ route('newsletter-subscription') }}" method="post">
              @csrf
              <x-honeypot />
              <div class="form-group">
                <label class="d-none" for="nombre">Nombre</label>
                <input type="text" class="form-control  form-control-sm p-3" placeholder="Nombre" id="nombre" name="firstname" required>
              </div>
              <div class="form-group">
                <label class="d-none" for="apellido">Apellido</label>
                <input type="text" class="form-control  form-control-sm p-3" placeholder="Apellido" id="apellido" name="lastname" required>
              </div>
              <div class="form-group">
                <label class="d-none" for="email">Correo electrónico</label>
                <input type="email" class="form-control  form-control-sm p-3"
                  placeholder="Correo electrónico" id="email" aria-describedby="emailHelp" name="email" required>
              </div>
              <div class="form-group">
                <label class="d-none" for="whatsapp">Whatsapp</label>
                <input type="text" class="form-control  form-control-sm p-3" placeholder="Whatsapp" id="whatsapp" name="whatsapp" required>
              </div>
              <button type="submit" class="btn btn-primary btn-block btn-sm p-2">Suscribirme</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    {{ $posts->links() }}
  </div>
@endsection
