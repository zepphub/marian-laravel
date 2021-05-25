<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('css/starter.css') }}" />
    <title>@yield('title')Mariann</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row contenedor-dash">
        <div class="col-md-3 bg-nude">

            @include('admin.layouts.sidebar')

        </div>
        @yield('content')
      </div>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="module" src="{{ asset('js/starter.js') }}"></script>
    @yield('scripts')
  </body>
</html>

