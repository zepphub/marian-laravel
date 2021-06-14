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
                <img src="{{ asset('img/separador-svg.svg') }}" alt="">
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
                <div class="shadow-lg rounded-lg p-4 my-4 my-md-0">
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
                        <div class="col-6 col-md-6">
                            <h5 class="font-weight-normal text-marron-claro">{{ $cart_item->name }}</h5>
                        </div>
                        <div class="col-6 col-md-6 text-right">
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
@endsection
