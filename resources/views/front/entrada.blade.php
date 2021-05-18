@extends('front.layouts.main')

@section('head')
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
@endsection

@section('title')Entrada? - @endsection

@section('content')
  <div class="d-flex align-items-center" id="portada-entrada">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center d-flex flex-column align-items-center">
          <div class="d-flex justify-content-center align-items-center mx-auto" id="badge-category">
            <h5 class="text-white font-weight-normal mb-3">Marketing</h5>
          </div>
          <h4 class="titulo-home text-white">Pack de planners para organizar el día a día de tu emprendimiento</h4>
          <div class="align-items-center d-flex justify-content-around mt-4">
            <h6 class="mr-3"><svg xmlns="http://www.w3.org/2000/svg" width="12.469" height="11.579" viewBox="0 0 12.469 11.579">
                <path id="Icon_metro-user" data-name="Icon metro-user"
                  d="M11.624,13.836V13.1a3.978,3.978,0,0,0,1.781-3.31c0-2.214,0-4.008-2.672-4.008S8.061,7.579,8.061,9.792A3.978,3.978,0,0,0,9.843,13.1v.735C6.821,14.083,4.5,15.568,4.5,17.363H16.968C16.968,15.568,14.645,14.083,11.624,13.836Z"
                  transform="translate(-4.499 -5.784)" fill="#b46063" />
              </svg>
              Marian</h6>
            <h6><svg id="Icon_ionic-ios-calendar" data-name="Icon ionic-ios-calendar" xmlns="http://www.w3.org/2000/svg"
                width="12.064" height="11.136" viewBox="0 0 12.064 11.136">
                <path id="Trazado_9" data-name="Trazado 9"
                  d="M14.279,6.75h-1.16v.7a.233.233,0,0,1-.232.232h-.464a.233.233,0,0,1-.232-.232v-.7H6.623v.7a.233.233,0,0,1-.232.232H5.927A.233.233,0,0,1,5.7,7.446v-.7H4.535a1.163,1.163,0,0,0-1.16,1.16V15.8a1.163,1.163,0,0,0,1.16,1.16h9.744a1.163,1.163,0,0,0,1.16-1.16V7.91A1.163,1.163,0,0,0,14.279,6.75Zm.232,8.7a.582.582,0,0,1-.58.58H4.883a.582.582,0,0,1-.58-.58V10.23A.233.233,0,0,1,4.535,10h9.744a.233.233,0,0,1,.232.232Z"
                  transform="translate(-3.375 -5.822)" fill="#b46063" />
                <path id="Trazado_10" data-name="Trazado 10"
                  d="M9.928,4.732A.233.233,0,0,0,9.7,4.5H9.232A.233.233,0,0,0,9,4.732v.7h.928Z"
                  transform="translate(-6.68 -4.5)" fill="#b46063" />
                <path id="Trazado_11" data-name="Trazado 11"
                  d="M25.678,4.732a.233.233,0,0,0-.232-.232h-.464a.233.233,0,0,0-.232.232v.7h.928Z"
                  transform="translate(-15.934 -4.5)" fill="#b46063" />
              </svg>
              26 Nov 2020</h6>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="ultimo-contenedor" id="contenido-entrada">
      <div class="container">
        <div class="row pt-5">
          <div class="col-md-9">
            <div class="row">
              <div class="co-md-12 p-4 py-md-4">
                <p><b>Grabs Attention:</b> Consumers are inundated with ads, so it’s vital that your ad catches the eye and
                  immediately grabs interest. You could do this with a headline or slogan (such as VW’s “Drivers Wanted”
                  campaign), color or layout (Target’s new colorful, simple ads are a testimony to this) or illustration
                  (such as the Red Bull characters or Zoloft’s depressed ball and his ladybug friend). Promises Credible
                  Benefit: To feel compelled by an ad, the consumer must stand to gain something; the product is often not
                  enough. What would the consumer gain by using your product or service? This could be tangible, like a free
                  gift; prestige, power or fame. But remember: you must be able to make good on that promise, so don’t offer
                  anything unreasonable.</p>
                <p>Keeps Interest: Grabbing the consumer’s attention isn’t enough; you have to keep that attention for at
                  least a few seconds. This is where your benefits come into play or a product description that sets your
                  offer apart from the others.</p>
                <h4>Generates Action: This is the ultimate point of advertising copy</h4>
                <p>It must make the reader react in some way. This doesn’t necessarily translate to buying the product
                  immediately or using the service. Your ad could be a positioning tool to enable the reader to think about
                  you in a certain light. Speak to your audience, or the audience you’d like to reach, and you’ll be
                  surprised how frequently they come to you in the future.</p>
                <p>How you write your advertising copy will be based on where you will place your ad. If it’s a billboard
                  ad, you’ll need a super catchy headline and simple design due to the speed at which people will pass.
                  Online ads are similar; consumers are so inundated with Internet advertising that your ad must be quick
                  and catchy.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-4 py-md-4">
            <div class="ml-md-4">
              <form class="form-border-1-px" action="">
                <input class="form-control rounded-pill" type="text" placeholder="Buscar">
              </form>
              <h4 class="titulo-home mt-3 mt-md-4">Categorías</h4>
              <ul class="list-unstyled list-categories">
                <li>Marketing</li>
                <li class="border-marron-claro border-top border-bottom">Capacitaciones</li>
                <li>Recursos</li>
              </ul>
              <div class="shadow rounded text-center p-3 mt-md-2">
                <h5>¡Sumate a mi newsletter!</h5>
                <p>Para ser parte de mi comunidad y recibir contenido exclusivo</p>
                <form class="form-border-1-px">
                  <div class="form-group">
                    <label class="d-none" for="nombre">Nombre</label>
                    <input type="text" class="form-control rounded-pill form-control-sm p-3" placeholder="Nombre"
                      id="nombre">
                  </div>
                  <div class="form-group">
                    <label class="d-none" for="apellido">Apellido</label>
                    <input type="text" class="form-control rounded-pill form-control-sm p-3" placeholder="Apellido"
                      id="apellido">
                  </div>
                  <div class="form-group">
                    <label class="d-none" for="email">Correo electrónico</label>
                    <input type="email" class="form-control rounded-pill form-control-sm p-3"
                      placeholder="Correo electrónico" id="email" aria-describedby="emailHelp">
                  </div>
                  <div class="form-group">
                    <label class="d-none" for="whatsapp">Whatsapp</label>
                    <input type="text" class="form-control rounded-pill form-control-sm p-3" placeholder="Whatsapp"
                      id="whatsapp">
                  </div>
                  <button type="submit" class="btn btn-primary btn-block btn-sm p-2">Suscribirme</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
@endsection
