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
                <p class="mt-2">Una vez registrados tus datos y realizado el pago, recibirás un email con el detalle de
                    tu compra y serás redirigida a un calendario para programa nuestro primer encuentro</p>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold text-rosa-oscuro" for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold text-rosa-oscuro" for="apellido">Apellido</label>
                            <input type="text" class="form-control" id="apellido" placeholder="Apellido">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold text-rosa-oscuro" for="email">Correo electrónico</label>
                            <input type="email" class="form-control" id="email" placeholder="Correo electrónico">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold text-rosa-oscuro" for="whatsapp">Whatsapp</label>
                            <input type="text" class="form-control" id="whatsapp" placeholder="Whatsapp">
                        </div>
                    </div>
                </form>
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
                    <div class="row mt-3">
                        <div class="col-6 col-md-6">
                            <h5 class="font-weight-normal text-marron-claro">Asesoría Personalizada</h5>
                        </div>
                        <div class="col-6 col-md-6 text-right">
                            <h5 class="text-marron-claro">$700 / USD 5</h5>
                        </div>
                    </div>
                    <hr class="border-gris my-2 mx-0">
                    <div class="row">
                        <div class="col-6 col-md-6">
                            <h5 class="font-weight-normal text-marron-claro">Mentoría Grupal "Activá tu magia"</h5>
                        </div>
                        <div class="col-6 col-md-6 text-right">
                            <h5 class="text-marron-claro">$400 / USD 5 </h5>
                        </div>
                    </div>
                    <hr class="border-gris my-2 mx-0">
                    <div class="row">
                        <div class="col-6 col-md-6">
                            <h4 class="font-weight-bold">Total</h4>
                        </div>
                        <div class="col-6 col-md-6 text-right">
                            <h4 class="font-weight-bold text-marron-claro">$1.100</h4>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <h4 class="font-weight-bold">Método de Pago</h4>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="MP" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="MP">MercadoPago</label>
                            </div>
                            <div class="custom-control custom-radio mt-2">
                                <input type="radio" id="PayPal" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="PayPal">Paypal</label>
                            </div>
                        </div>
                    </div>
                    <a href=""><button class="btn btn-primary btn-block mt-4">Finalizar pedido</button></a>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php';?>     

    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script type="module" src="{{ asset('js/starter.js') }}"></script>
</body>

</html>
