@extends('layouts.main')

@section('head')
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
@endsection

@section('title')Calendario - @endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>Calendario de Sesiones</h2>
        <nav class="" aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center bg-transparent text-marron-claro">
            <li class="breadcrumb-item text-marron-claro"><a class="text-marron-claro" href="{{ route('index') }}">Inicio</a></li>
            <li class="breadcrumb-item text-secondary active font-weight-bold" aria-current="page">Calendario de Sesiones</li>
          </ol>
          <!-- Calendly inline widget begin -->
          <div class="calendly-inline-widget" data-url="{{ $service->calendly }}" style="min-width:320px;height:660px;"></div>
          <!-- Calendly inline widget end -->
        </nav>
      </div>
    </div>
  </div>
@endsection
@section('scripts')
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
@endsection
