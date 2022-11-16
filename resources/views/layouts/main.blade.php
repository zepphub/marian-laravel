<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/starter.css') }}">
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
  @yield('head')
  <title>@yield('title')Mariann</title>
  <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">

  <!-- Facebook Pixel Code -->
  <script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '3207452602639019');
  fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=3207452602639019&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Facebook Pixel Code -->

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-167872006-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-167872006-1');
  </script>
  <meta name="facebook-domain-verification" content="hfblvfyg2gzx25yanjkhqounqjs957" />
  
  <!-- IMPORTANT!!! remember CSRF token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">    

</head>

<body>
  <header class="shadow">
    @include('layouts.header')
  </header>
  <main>
    @yield('content')
  </main>
  <footer>
    @include('layouts.footer')
  </footer>

  <!-- Modal Envio Exitoso Form -->
  <div class="modal fade" id="successForm" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="successFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
          <h4 class="text-verde">Envio exitoso</h4>
          <p id="successFormMsg"></p>
          <img class="pb-4 mt-3" src="{{ asset('/img/icono-modal-envio-exitoso.svg') }}" alt="">
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Envio Fallido Form -->
  <div class="modal fade" id="errorForm" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="errorFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
          <h4 class="text-verde">Error</h4>
          <p id="errorFormMsg"></p>
          <img class="pb-4 mt-3" src="{{ asset('/img/icono-modal-envio-fallido.svg') }}" alt="cruz" style="height: 200px;width: 200px;">
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script type="module" src="{{ asset('js/starter.js') }}"></script>
  <script>
  // Disabling form submissions if there are invalid fields
  (function () {
      'use strict';
      window.addEventListener('load', function () {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function (form) {
              form.addEventListener('submit', function (event) {
                  if (form.checkValidity() === false) {
                      event.preventDefault();
                      event.stopPropagation();
                  }
                  form.classList.add('was-validated');
          }, false);
      });
  }, false);
  })();

  $('#newsletterForm').on('submit', function(e) {
      e.preventDefault();
      $.ajax({
          type: "POST",
          url: "{{ route('newsletter-subscription') }}",
          data: $(this).serialize(),
          success: function(msg) {
          $('#successFormMsg').text(msg.success);
          $('#successForm').modal();
          console.log(msg.success);
          },
          error: function(xhr, status, error){
          //muestra solo el primer error
          firstKey = Object.keys(xhr.responseJSON.errors)[0];
          $('#errorFormMsg').text(xhr.responseJSON.errors[firstKey][0]);
          $('#errorForm').modal();
          }
      });
  });

  $('#contactForm').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "{{ route('consulta') }}",
        data: $(this).serialize(),
        success: function(msg) {
          $('#successFormMsg').text(msg.success);
          $('#successForm').modal();
          console.log(msg.success);
        },
        error: function(xhr, status, error){
          //muestra solo el primer error
          firstKey = Object.keys(xhr.responseJSON.errors)[0];
          $('#errorFormMsg').text(xhr.responseJSON.errors[firstKey][0]);
          $('#errorForm').modal();
        }
    });
  });
  </script>
  @yield('scripts')
</body>
</html>

