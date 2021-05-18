<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/starter.css') }}">
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
  @yield('head')
  <title>@yield('title')Mariann</title>
</head>

<body>
  @include('front.layouts.header')
  @yield('content')
  @include('front.layouts.footer')

  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script type="module" src="{{ asset('js/starter.js') }}"></script>
  @yield('scripts')
</body>
</html>

