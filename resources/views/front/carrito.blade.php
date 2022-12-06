@extends('layouts.main')

@section('title')Carrito - @endsection

@section('content')

        <header class="container-fluid cart-header">
            <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h1 class="epigrafe text-white">Tu pedido</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb custom">
                            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tu pedido</li>
                        </ol>
                    </nav>
                </div>
            </div>
            </div>
        </header>

        <div class="container mt-5">
        @if (\Session::has('message'))
        <div class="row mt-5 mt-md-4">
          <div class="col-md-12">
            <div class="alert alert-success" role="alert">
              {!! \Session::get('message') !!}
            </div>
          </div>
        </div>
        @endif
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
                                <td><span class="descripcion-item">{{ $cart_item->fullname() }}</span></td>
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
                <div class="d-block d-md-flex justify-content-end">
                    <!-- <a href="{{ route('carrito') }}" class="btn btn-outline-primary  mb-3 mr-md-3 mb-md-0">Actualizar mi pedido</a> -->
                    <a href="{{ route('checkout') }}" class="btn btn-primary ">Continuar <svg class="mb-1 ml-1" xmlns="http://www.w3.org/2000/svg"
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
