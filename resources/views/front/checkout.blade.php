@extends('layouts.main')

@section('title')Checkout - @endsection

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="text-center">
                <h2>Finalizar Pedido</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb custom">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h4 class="title-divider text-marron-claro">Sólo un paso más</h4>
                <img src="{{ asset('img/separador.svg') }}" class="separador-ondas"  alt="">
                <p class="mt-2">Una vez registrados tus datos y realizado el pago, recibirás un email con el detalle de tu compra y serás redirigida a un calendario para programa nuestro primer encuentro</p>
                <form id="orderForm" class="needs-validation" action="{{ route('order') }}" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold text-rosa-oscuro" for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="firstname" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold text-rosa-oscuro" for="apellido">Apellido</label>
                            <input type="text" class="form-control" id="apellido" placeholder="Apellido" name="lastname" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold text-rosa-oscuro" for="email">Correo electrónico</label>
                            <input type="email" class="form-control" id="email" placeholder="Correo electrónico" name="email" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold text-rosa-oscuro" for="whatsapp">Whatsapp</label>
                            <input type="text" class="form-control" id="whatsapp" placeholder="Whatsapp" name="whatsapp" required>
                        </div>
                    </div>
                </form>
                @if ($errors->any())
                <div class="row mt-5 mt-md-4">
                  <div class="col-9 col-md-6">
                    <div class="alert alert-success" role="alert">
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                    </div>
                  </div>
                </div>
                @endif
            </div>
            <div class="col-md-4">
                <div class="shadow-lg rounded p-4 my-4 my-md-0">
                    <div class="row">
                        <div class="col-6 col-md-6">
                            <h4 class="font-weight-bold">Nombre</h4>
                        </div>
                        <div class="col-6 col-md-6 text-right">
                            <h4 class="font-weight-bold">Precio</h4>
                        </div>
                    </div>
                    @foreach ($cart_items as $key => $cart_item)
                    <div class="row @if ($loop->first) mt-3 @endif">
                        <div class="col-8 col-md-8">
                            <h5 class="font-weight-normal text-marron-claro">{{ $cart_item->fullname() }}</h5>
                        </div>
                        <div class="col-4 col-md-4 text-right">
                            <h5 class="text-marron-claro">{{ $cart_item->price() }}</h5>
                        </div>
                    </div>
                    <hr class="border-gris my-2 mx-0">
                    @endforeach
                    <div class="row">
                        <div class="col-6 col-md-6">
                            <h4 class="font-weight-bold">Total</h4>
                        </div>
                        <div class="col-6 col-md-6 text-right">
                            <h4 class="font-weight-bold text-marron-claro">{{ $total }}</h4>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                          @if ($is_argentina)
                          <p>MercadoPago (es argentina!)</p>
                          @else
                          <p>Paypal (no es argentina!)</p>
                          @endif
                        </div>
                    </div>
                    <button type="submit" form="orderForm" class="btn btn-primary btn-block mt-4">Finalizar pedido</button>
                </div>
            </div>
        </div>
    </div>
    <a target="_blank" class="d-md-none d-lg-none d-block text-center wp" href="https://api.whatsapp.com/send?phone=+5493537536010&text=Buenos%20días,%20quiero%20mas%20info%20sobre:">
        <svg fill="white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"></path>
        </svg>
    </a>
    <a target="_blank" class="d-md-block d-lg-block d-none text-center wp" href="https://web.whatsapp.com/send?phone=+5493537536010&text=Buenos%20días,%20quiero%20mas%20info%20sobre:">
        <svg fill="white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"></path>
        </svg>
    </a>
@endsection
