@extends('admin.layouts.app')

@section('content')

            <div class="col-md-9 p-3 p-md-5">
                <div class="row">
                    <div class="col-md-12">
                        <div
                            class="align-items-md-center d-flex flex-column flex-md-row justify-content-between my-4 my-md-0">
                            <h2 class="order-2 order-md-1">Nuevo evento</h2>
                            <a class="order-1 order-md-2" href="servicios_tye.php"><button
                                    class="btn btn-outline-secondary"><svg class="mr-2" style="margin-bottom:2px"
                                        xmlns="http://www.w3.org/2000/svg" width="7" height="10"
                                        viewBox="0 0 7.771 11.157">
                                        <path id="Icon_awesome-chevron-down" data-name="Icon awesome-chevron-down"
                                            d="M5.145.18.18,5.145a.613.613,0,0,0,0,.867l.579.579a.613.613,0,0,0,.866,0L5.578,2.657,9.532,6.592a.613.613,0,0,0,.866,0l.579-.579a.613.613,0,0,0,0-.867L6.012.18A.613.613,0,0,0,5.145.18Z"
                                            transform="translate(0 11.157) rotate(-90)" fill="currentColor" />
                                    </svg>
                                    Volver</button></a>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-8">
                        <h5 class="text-marron-claro font-weight-normal mb-2">Título del evento</h5>
                        <input class="form-control form-control-lg rounded-pill" type="text"
                            placeholder="Cafecito: Especial planificación y productividad">
                        <h5 class="mt-5 text-marron-claro font-weight-normal mb-2">Descripción</h5>
                        <textarea class="form-control" name="" id="" cols="30"
                            rows="10">Conversamos sobre tu público objetivo. Identificamos al cliente ideal de tu marca generando estrategias para que logres enamorar a tu audiencia, creando contenido auténtico para tus canales digitales, y propuestas acordes a sus principales intereses.</textarea>
                        <div class="row mt-4 mt-md-5">
                            <div class="col-md-4">
                                <h5 class="text-marron-claro text-medium mb-2">Fecha</h5>
                                <input class="form-control form-control-lg rounded-pill" type="date">
                            </div>
                            <div class="col-md-2 mt-3 mt-md-0">
                                <h5 class="text-marron-claro text-medium mb-2">Hora</h5>
                                <input class="form-control form-control-lg rounded-pill" type="time">
                            </div>
                            <div class="col-md-6 mt-3 mt-md-0">
                                <h5 class="text-marron-claro text-medium mb-2">Disertante</h5>
                                <input class="form-control form-control-lg rounded-pill" type="text"
                                    placeholder="Mariana Pacheco">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center mt-5 mt-md-0">
                            <img class="d-block img-fluid mx-auto" src="https://via.placeholder.com/150" alt="">
                            <button class="btn btn-primary mt-4">Subir imagen</button>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 mt-md-5">
                    <div class="col-md-5">
                        <h5 class="text-marron-claro text-medium mb-2">Organiza</h5>
                        <input class="form-control form-control-lg rounded-pill" type="text"
                            placeholder="Mariana Pacheco">
                    </div>
                    <div class="col-md-2 mt-3 mt-md-0">
                        <div class="d-block d-md-flex align-items-center h-100 mt-0 mt-md-3">
                            <h5 class="text-marron-claro text-medium m-0 mb-3 mb-md-0">Inscripción</h5>
                            <div class="custom-control custom-switch.custom-switch-md custom-switch ml-0 ml-md-3">
                                <input type="checkbox" class="custom-control-input" id="inscripcion">
                                <label class="custom-control-label" for="inscripcion"></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 mt-3 mt-md-0">
                        <h5 class="text-marron-claro text-medium mb-2">URL Evento</h5>
                        <input class="form-control form-control-lg rounded-pill" type="text"
                            placeholder="Mariana Pacheco">
                    </div>
                    <div class="col-md-12">
                        <h5 class="mt-5 text-marron-claro font-weight-normal mb-2">Acerca de este evento</h5>
                        <textarea class="form-control" name="" id="" cols="30" rows="10">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        </textarea>
                    </div>
                </div>
                <hr class="border-marron-claro my-5 mx-0">
                <div class="row my-4">
                    <div class="col-md-12">
                        <div class="d-block d-md-flex justify-content-md-end justify-content-center">
                            <a href=""><button class="btn btn-outline-primary btn-block">Publicar</button></a>
                        </div>
                    </div>
                </div>
       @endsection
