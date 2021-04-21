@extends('layouts.app')

@section('content')
            <div class="col-md-9 p-3 p-md-5">
                <div class="row">
                    <div class="col-md-12">
                        <div
                            class="align-items-md-center d-flex flex-column flex-md-row justify-content-between my-4 my-md-0">
                            <h2 class="order-2 order-md-1">Mentoría</h2>
                        </div>
                    </div>
                </div>

                <!-- TABS -->
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs" id="tabMentoria" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active border-0 text-marron-claro font-weight-bold" id="asesoria-tab" href="servicios_mentoriaTab1.php"
                                >Asesoría Personalizada</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-marron-claro font-weight-bold border-0" id="mentoria-tab" href="servicios_mentoriaTab2.php"
                                >Mentoría grupal</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="asesoria" role="tabpanel"
                                aria-labelledby="asesoria-tab">
                                <div class="row mt-5">
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center">
                                            <h4 class="m-0 mr-3 text-rosa-claro">Precio</h4><input
                                                class="form-control form-control-lg rounded-pill" type="text"
                                                placeholder="$400">
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-3 mt-md-0">
                                        <div class="d-flex align-items-center">
                                            <h4 style="white-space: nowrap;" class="m-0 mr-3 text-rosa-claro">Precio U$D
                                            </h4><input class="form-control form-control-lg rounded-pill" type="text"
                                                placeholder="$20">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-12">
                                        <h4 class="text-rosa-claro">Sobre la experiencia</h4>
                                        <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>

                                <div class="row my-4">
                                    <div class="col-md-12">
                                        <div class="d-block d-md-flex justify-content-md-end justify-content-center">
                                            <a href=""><button class="btn btn-verde btn-block">Guardar<svg class="ml-2"
                                                        xmlns="http://www.w3.org/2000/svg" width="13.383"
                                                        height="13.383" viewBox="0 0 13.383 13.383">
                                                        <path id="Icon_awesome-save" data-name="Icon awesome-save"
                                                            d="M12.963,5.176,10.457,2.67a1.434,1.434,0,0,0-1.014-.42H1.434A1.434,1.434,0,0,0,0,3.684V14.2a1.434,1.434,0,0,0,1.434,1.434H11.949A1.434,1.434,0,0,0,13.383,14.2V6.19a1.434,1.434,0,0,0-.42-1.014ZM6.692,13.721A1.912,1.912,0,1,1,8.6,11.81,1.912,1.912,0,0,1,6.692,13.721Zm2.868-9.1v3a.358.358,0,0,1-.358.358H2.27a.358.358,0,0,1-.358-.358V4.52a.358.358,0,0,1,.358-.358H9.1a.358.358,0,0,1,.253.105l.1.1A.358.358,0,0,1,9.56,4.624Z"
                                                            transform="translate(0 -2.25)" fill="currentColor" />
                                                    </svg>
                                                </button></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            

                        </div>
                    </div>
                </div>

                @endsection