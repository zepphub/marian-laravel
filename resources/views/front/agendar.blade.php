@extends('layouts.main')

@section('title')Carrito - @endsection

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="text-center">
                <h2>Tu pedido</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb custom">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tu pedido</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <table class="table table-borderless tabla-carrito">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">
                                    <h5 class="text-marron-claro font-weight-bold m-0">Nombre</h5>
                                </th>
                                <th scope="col">
                                    <h5 class="text-marron-claro font-weight-bold m-0">Precio</h5>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="border border-marron-claro">
                            @foreach ($cart_items as $key => $cart_item)
                            <tr class="border border-marron-claro">
                                <th class="pl-md-4" scope="row"><a href="{{ route('carrito.delete', $key) }}"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="13.426" height="13.423" viewBox="0 0 13.426 13.423">
                                            <path id="Icon_ionic-ios-close" data-name="Icon ionic-ios-close"
                                                d="M19.589,18l4.8-4.8A1.124,1.124,0,0,0,22.8,11.616l-4.8,4.8-4.8-4.8A1.124,1.124,0,1,0,11.616,13.2l4.8,4.8-4.8,4.8A1.124,1.124,0,0,0,13.2,24.384l4.8-4.8,4.8,4.8A1.124,1.124,0,1,0,24.384,22.8Z"
                                                transform="translate(-11.285 -11.289)" fill="#b46063" />
                                        </svg>
                                    </a></th>
                                <td><span class="descripcion-item">{{ $cart_item->name }}</span></td>
                                <td><span class="costo-item"> {{ $cart_item->price() }}</span></td>
                            </tr>
                            @endforeach
                            <tr>
                                <th scope="row"></th>
                                <td>
                                    <h5 class="text-marron-claro font-weight-bold m-0">Costo Total</h5>
                                </td>
                                <td>
                                    <h5 class="text-marron-claro font-weight-bold m-0">{{ $total }}</h5>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row my-4 my-md-5">
            <div class="col-md-12">
            <pre>{!! print_r($captured_order) !!}</pre>
            </div>
        </div>
        <div class="row my-4 my-md-5">
            <div class="col-md-12">
                <div class="d-block d-md-flex justify-content-end">
                    <a href="{{ route('carrito') }}" class="btn btn-outline-primary rounded-pill mb-3 mr-md-3 mb-md-0">Actualizar mi pedido</a>
                    <a href="{{ route('checkout') }}" class="btn btn-primary rounded-pill">Continuar <svg class="mb-1 ml-1" xmlns="http://www.w3.org/2000/svg"
                            width="9.55" height="16.775" viewBox="0 0 9.55 16.775">
                            <g id="next_1_" data-name="next (1)" transform="translate(0.567 0.567)">
                                <g>
                                    <path d="M126.046,7.423,118.781.178a.609.609,0,1,0-.86.862l6.833,6.814-6.833,6.814a.609.609,0,0,0,.86.862l7.265-7.245a.609.609,0,0,0,0-.862Z" transform="translate(-117.742 0)" fill="#fff" stroke="#fff" stroke-width="1" />
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
