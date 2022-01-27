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
    
  <script type="text/javascript">
      function callbackThen(response){
          // read HTTP status
          console.log('Status =', response.status);
          
          // read Promise object
          response.json().then(function(data){
              console.log(data);
          });
      }
      function callbackCatch(error){
          console.error('Error:', error)
      }   
  </script>    

  {!! htmlScriptTagJsApi([
      'action' => 'homepage',
      'callback_then' => 'callbackThen',
      'callback_catch' => 'callbackCatch'
  ]) !!}
</head>

<body>
  @include('layouts.header')
  @yield('content')
  @include('layouts.footer')

  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script type="module" src="{{ asset('js/starter.js') }}"></script>
  @yield('scripts')
</body>
</html>

