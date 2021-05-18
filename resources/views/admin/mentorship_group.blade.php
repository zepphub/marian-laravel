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
                                <a class="nav-link text-marron-claro font-weight-bold border-0" id="asesoria-tab" href="servicios_mentoriaTab1.php">Asesoría
                                    Personalizada</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active border-0 text-marron-claro font-weight-bold" id="mentoria-tab" href="servicios_mentoriaTab2.php">Mentoría
                                    grupal</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="mentoria" role="tabpanel"
                                aria-labelledby="mentoria-tab">
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
                                        <h4 class="text-rosa-claro text-medium">Ser parte de la Mentoría Grupal te dará
                                            acceso a</h4>
                                    </div>
                                </div>
                                
                                <!-- Item Editable -->
                                <div class="row">
                                    <div class="col-10 col-md-11">
                                        <div class="d-flex align-items-center h-100">
                                            <textarea class="form-control form-control-md rounded-pill" name="" id=""
                                                cols="10"
                                                rows="1">Un grupo de Whatsapp donde compartiremos dudas, inquietudes y experiencias relacionadas al proceso de mentoría</textarea>
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-1">
                                        <div class="position-relative">
                                            <a href="#"><img class="d-block img-fluid w-100"
                                                    src="https://via.placeholder.com/75" alt=""></a>
                                            <div style="bottom:0; right:0;" class="position-absolute"><a href="#"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                                        viewBox="0 0 23 23">
                                                        <g id="Grupo_488" data-name="Grupo 488"
                                                            transform="translate(-945 -191.956)">
                                                            <path id="Trazado_365" data-name="Trazado 365"
                                                                d="M2,0H21a2,2,0,0,1,2,2V21a2,2,0,0,1-2,2H2a2,2,0,0,1-2-2V2A2,2,0,0,1,2,0Z"
                                                                transform="translate(945 191.956)" fill="#9ddcb0" />
                                                            <path id="Icon_metro-pencil" data-name="Icon metro-pencil"
                                                                d="M11.966,1.928a1.74,1.74,0,0,1,1.392,2.784l-.7.7L10.226,2.972l.7-.7a1.732,1.732,0,0,1,1.044-.348Zm-8.7,8-.7,3.132,3.132-.7L12.14,5.93,9.7,3.494Zm7.086-4.05L5.48,10.754l-.6-.6L9.753,5.282Z"
                                                                transform="translate(948.429 196.028)" fill="#fbfbfb" />
                                                        </g>
                                                    </svg></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item Editable -->
                                <div class="row mt-4 mt-md-5">
                                    <div class="col-10 col-md-11">
                                        <div class="d-flex align-items-center h-100">
                                            <textarea class="form-control form-control-md rounded-pill" name="" id=""
                                                cols="10"
                                                rows="1">Un grupo de Whatsapp donde compartiremos dudas, inquietudes y experiencias relacionadas al proceso de mentoría</textarea>
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-1">
                                        <div class="position-relative">
                                            <a href="#"><img class="d-block img-fluid w-100"
                                                    src="https://via.placeholder.com/75" alt=""></a>
                                            <div style="bottom:0; right:0;" class="position-absolute"><a href="#"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                                        viewBox="0 0 23 23">
                                                        <g id="Grupo_488" data-name="Grupo 488"
                                                            transform="translate(-945 -191.956)">
                                                            <path id="Trazado_365" data-name="Trazado 365"
                                                                d="M2,0H21a2,2,0,0,1,2,2V21a2,2,0,0,1-2,2H2a2,2,0,0,1-2-2V2A2,2,0,0,1,2,0Z"
                                                                transform="translate(945 191.956)" fill="#9ddcb0" />
                                                            <path id="Icon_metro-pencil" data-name="Icon metro-pencil"
                                                                d="M11.966,1.928a1.74,1.74,0,0,1,1.392,2.784l-.7.7L10.226,2.972l.7-.7a1.732,1.732,0,0,1,1.044-.348Zm-8.7,8-.7,3.132,3.132-.7L12.14,5.93,9.7,3.494Zm7.086-4.05L5.48,10.754l-.6-.6L9.753,5.282Z"
                                                                transform="translate(948.429 196.028)" fill="#fbfbfb" />
                                                        </g>
                                                    </svg></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item Editable -->
                                <div class="row mt-4 mt-md-5">
                                    <div class="col-10 col-md-11">
                                        <div class="d-flex align-items-center h-100">
                                            <textarea class="form-control form-control-md rounded-pill" name="" id=""
                                                cols="10"
                                                rows="1">Un grupo de Whatsapp donde compartiremos dudas, inquietudes y experiencias relacionadas al proceso de mentoría</textarea>
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-1">
                                        <div class="position-relative">
                                            <a href="#"><img class="d-block img-fluid w-100"
                                                    src="https://via.placeholder.com/75" alt=""></a>
                                            <div style="bottom:0; right:0;" class="position-absolute"><a href="#"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                                        viewBox="0 0 23 23">
                                                        <g id="Grupo_488" data-name="Grupo 488"
                                                            transform="translate(-945 -191.956)">
                                                            <path id="Trazado_365" data-name="Trazado 365"
                                                                d="M2,0H21a2,2,0,0,1,2,2V21a2,2,0,0,1-2,2H2a2,2,0,0,1-2-2V2A2,2,0,0,1,2,0Z"
                                                                transform="translate(945 191.956)" fill="#9ddcb0" />
                                                            <path id="Icon_metro-pencil" data-name="Icon metro-pencil"
                                                                d="M11.966,1.928a1.74,1.74,0,0,1,1.392,2.784l-.7.7L10.226,2.972l.7-.7a1.732,1.732,0,0,1,1.044-.348Zm-8.7,8-.7,3.132,3.132-.7L12.14,5.93,9.7,3.494Zm7.086-4.05L5.48,10.754l-.6-.6L9.753,5.282Z"
                                                                transform="translate(948.429 196.028)" fill="#fbfbfb" />
                                                        </g>
                                                    </svg></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item Editable -->
                                <div class="row mt-4 mt-md-5">
                                    <div class="col-10 col-md-11">
                                        <div class="d-flex align-items-center h-100">
                                            <textarea class="form-control form-control-md rounded-pill" name="" id=""
                                                cols="10"
                                                rows="1">Un grupo de Whatsapp donde compartiremos dudas, inquietudes y experiencias relacionadas al proceso de mentoría</textarea>
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-1">
                                        <div class="position-relative">
                                            <a href="#"><img class="d-block img-fluid w-100"
                                                    src="https://via.placeholder.com/75" alt=""></a>
                                            <div style="bottom:0; right:0;" class="position-absolute"><a href="#"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                                        viewBox="0 0 23 23">
                                                        <g id="Grupo_488" data-name="Grupo 488"
                                                            transform="translate(-945 -191.956)">
                                                            <path id="Trazado_365" data-name="Trazado 365"
                                                                d="M2,0H21a2,2,0,0,1,2,2V21a2,2,0,0,1-2,2H2a2,2,0,0,1-2-2V2A2,2,0,0,1,2,0Z"
                                                                transform="translate(945 191.956)" fill="#9ddcb0" />
                                                            <path id="Icon_metro-pencil" data-name="Icon metro-pencil"
                                                                d="M11.966,1.928a1.74,1.74,0,0,1,1.392,2.784l-.7.7L10.226,2.972l.7-.7a1.732,1.732,0,0,1,1.044-.348Zm-8.7,8-.7,3.132,3.132-.7L12.14,5.93,9.7,3.494Zm7.086-4.05L5.48,10.754l-.6-.6L9.753,5.282Z"
                                                                transform="translate(948.429 196.028)" fill="#fbfbfb" />
                                                        </g>
                                                    </svg></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item Editable -->
                                <div class="row mt-4 mt-md-5">
                                    <div class="col-10 col-md-11">
                                        <div class="d-flex align-items-center h-100">
                                            <textarea class="form-control form-control-md rounded-pill" name="" id=""
                                                cols="10"
                                                rows="1">Un grupo de Whatsapp donde compartiremos dudas, inquietudes y experiencias relacionadas al proceso de mentoría</textarea>
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-1">
                                        <div class="position-relative">
                                            <a href="#"><img class="d-block img-fluid w-100"
                                                    src="https://via.placeholder.com/75" alt=""></a>
                                            <div style="bottom:0; right:0;" class="position-absolute"><a href="#"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                                        viewBox="0 0 23 23">
                                                        <g id="Grupo_488" data-name="Grupo 488"
                                                            transform="translate(-945 -191.956)">
                                                            <path id="Trazado_365" data-name="Trazado 365"
                                                                d="M2,0H21a2,2,0,0,1,2,2V21a2,2,0,0,1-2,2H2a2,2,0,0,1-2-2V2A2,2,0,0,1,2,0Z"
                                                                transform="translate(945 191.956)" fill="#9ddcb0" />
                                                            <path id="Icon_metro-pencil" data-name="Icon metro-pencil"
                                                                d="M11.966,1.928a1.74,1.74,0,0,1,1.392,2.784l-.7.7L10.226,2.972l.7-.7a1.732,1.732,0,0,1,1.044-.348Zm-8.7,8-.7,3.132,3.132-.7L12.14,5.93,9.7,3.494Zm7.086-4.05L5.48,10.754l-.6-.6L9.753,5.282Z"
                                                                transform="translate(948.429 196.028)" fill="#fbfbfb" />
                                                        </g>
                                                    </svg></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row my-5">
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