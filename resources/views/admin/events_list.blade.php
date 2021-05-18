@extends('admin.layouts.app')

@section('content')
            <div class="col-md-9 p-3 p-md-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <h2 class="ml-3 ml-md-0">Talleres y eventos</h2>
                            <a style="white-space: nowrap;" href=""><button class="btn btn-primary">Nuevo evento</button></a>
                        </div>
                    </div>
                </div>

                <div class="row mt-5 mt-md-4">
                    <div class="col-8 col-md-6">
                        <h6>Nombre</h6>
                    </div>
                    <div class="col-3 d-none d-md-block col-md-3">
                        <h6>Fecha de evento</h6>
                    </div>
                    <div class="col-4 col-md-3">
                        <h6>Acciones</h6>
                    </div>
                </div>

                <hr class="border-marron-claro border-2 my-3 mx-0">

                <!-- Entrada de Muestra -->
                <div class="row mt-4">
                    <div class="col-8 col-md-6">
                        <div class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/75" alt="">
                            <h5 class="text-bold text-marron-claro ml-3 mb-0">Cafecito: Especial planificación y productividad</h5>
                        </div>
                    </div>
                    <div class="col-3 d-none d-md-flex col-md-3 align-items-center">
                        <p>26/11/2020</p>
                    </div>  
                    <div class="col-4 col-md-3 d-flex align-items-center">
                        <div class="">
                            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="46.952" height="46.952"
                                    viewBox="0 0 46.952 46.952">
                                    <g id="Button" transform="translate(-879.253 -2498.988)">
                                        <path id="Background"
                                            d="M23,0h.952a23,23,0,0,1,23,23v.952a23,23,0,0,1-23,23H23a23,23,0,0,1-23-23V23A23,23,0,0,1,23,0Z"
                                            transform="translate(879.253 2498.988)" fill="#9ddcb0" />
                                        <path id="Icon_metro-pencil" data-name="Icon metro-pencil"
                                            d="M21.936,1.928a3.586,3.586,0,0,1,2.869,5.738L23.371,9.1,18.35,4.08l1.434-1.434a3.57,3.57,0,0,1,2.152-.717ZM4.005,18.425,2.571,24.88l6.455-1.434L22.295,10.176,17.274,5.156Zm14.6-8.347L8.568,20.119,7.332,18.882,17.373,8.841Z"
                                            transform="translate(888.682 2509.06)" fill="#fbfbfb" />
                                    </g>
                                </svg>
                            </a>
                            <a class="ml-2" href=""><svg xmlns="http://www.w3.org/2000/svg" width="44.028"
                                    height="46.889" viewBox="0 0 44.028 46.889">
                                    <g id="Button" transform="translate(-850.386 -2499.575)">
                                        <rect id="Background" width="44.028" height="46.889" rx="22"
                                            transform="translate(850.386 2499.575)" fill="#e67161" />
                                        <path id="Icon_open-trash" data-name="Icon open-trash"
                                            d="M8.583,0A2.869,2.869,0,0,0,5.722,2.861H2.861A2.869,2.869,0,0,0,0,5.722H20.028a2.869,2.869,0,0,0-2.861-2.861H14.305A2.869,2.869,0,0,0,11.444,0ZM2.861,8.583V22.345a.526.526,0,0,0,.544.544H16.652a.526.526,0,0,0,.544-.544V8.583H14.334V18.6a1.431,1.431,0,0,1-2.861,0V8.583H8.612V18.6a1.431,1.431,0,1,1-2.861,0V8.583H2.89Z"
                                            transform="translate(862.386 2511.575)" fill="#fff" />
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <hr class="border-marron-claro my-3 mx-0">

                <div class="row mt-4">
                    <div class="col-8 col-md-6">
                        <div class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/75" alt="">
                            <h5 class="text-bold text-marron-claro ml-3 mb-0">Cafecito: Especial planificación y productividad</h5>
                        </div>
                    </div>
                    <div class="col-3 d-none d-md-flex col-md-3 align-items-center">
                        <p>26/11/2020</p>
                    </div>  
                    <div class="col-4 col-md-3 d-flex align-items-center">
                        <div class="">
                            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="46.952" height="46.952"
                                    viewBox="0 0 46.952 46.952">
                                    <g id="Button" transform="translate(-879.253 -2498.988)">
                                        <path id="Background"
                                            d="M23,0h.952a23,23,0,0,1,23,23v.952a23,23,0,0,1-23,23H23a23,23,0,0,1-23-23V23A23,23,0,0,1,23,0Z"
                                            transform="translate(879.253 2498.988)" fill="#9ddcb0" />
                                        <path id="Icon_metro-pencil" data-name="Icon metro-pencil"
                                            d="M21.936,1.928a3.586,3.586,0,0,1,2.869,5.738L23.371,9.1,18.35,4.08l1.434-1.434a3.57,3.57,0,0,1,2.152-.717ZM4.005,18.425,2.571,24.88l6.455-1.434L22.295,10.176,17.274,5.156Zm14.6-8.347L8.568,20.119,7.332,18.882,17.373,8.841Z"
                                            transform="translate(888.682 2509.06)" fill="#fbfbfb" />
                                    </g>
                                </svg>
                            </a>
                            <a class="ml-2" href=""><svg xmlns="http://www.w3.org/2000/svg" width="44.028"
                                    height="46.889" viewBox="0 0 44.028 46.889">
                                    <g id="Button" transform="translate(-850.386 -2499.575)">
                                        <rect id="Background" width="44.028" height="46.889" rx="22"
                                            transform="translate(850.386 2499.575)" fill="#e67161" />
                                        <path id="Icon_open-trash" data-name="Icon open-trash"
                                            d="M8.583,0A2.869,2.869,0,0,0,5.722,2.861H2.861A2.869,2.869,0,0,0,0,5.722H20.028a2.869,2.869,0,0,0-2.861-2.861H14.305A2.869,2.869,0,0,0,11.444,0ZM2.861,8.583V22.345a.526.526,0,0,0,.544.544H16.652a.526.526,0,0,0,.544-.544V8.583H14.334V18.6a1.431,1.431,0,0,1-2.861,0V8.583H8.612V18.6a1.431,1.431,0,1,1-2.861,0V8.583H2.89Z"
                                            transform="translate(862.386 2511.575)" fill="#fff" />
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <hr class="border-marron-claro my-3 mx-0">

                <div class="row mt-4">
                    <div class="col-8 col-md-6">
                        <div class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/75" alt="">
                            <h5 class="text-bold text-marron-claro ml-3 mb-0">Cafecito: Especial planificación y productividad</h5>
                        </div>
                    </div>
                    <div class="col-3 d-none d-md-flex col-md-3 align-items-center">
                        <p>26/11/2020</p>
                    </div>  
                    <div class="col-4 col-md-3 d-flex align-items-center">
                        <div class="">
                            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="46.952" height="46.952"
                                    viewBox="0 0 46.952 46.952">
                                    <g id="Button" transform="translate(-879.253 -2498.988)">
                                        <path id="Background"
                                            d="M23,0h.952a23,23,0,0,1,23,23v.952a23,23,0,0,1-23,23H23a23,23,0,0,1-23-23V23A23,23,0,0,1,23,0Z"
                                            transform="translate(879.253 2498.988)" fill="#9ddcb0" />
                                        <path id="Icon_metro-pencil" data-name="Icon metro-pencil"
                                            d="M21.936,1.928a3.586,3.586,0,0,1,2.869,5.738L23.371,9.1,18.35,4.08l1.434-1.434a3.57,3.57,0,0,1,2.152-.717ZM4.005,18.425,2.571,24.88l6.455-1.434L22.295,10.176,17.274,5.156Zm14.6-8.347L8.568,20.119,7.332,18.882,17.373,8.841Z"
                                            transform="translate(888.682 2509.06)" fill="#fbfbfb" />
                                    </g>
                                </svg>
                            </a>
                            <a class="ml-2" href=""><svg xmlns="http://www.w3.org/2000/svg" width="44.028"
                                    height="46.889" viewBox="0 0 44.028 46.889">
                                    <g id="Button" transform="translate(-850.386 -2499.575)">
                                        <rect id="Background" width="44.028" height="46.889" rx="22"
                                            transform="translate(850.386 2499.575)" fill="#e67161" />
                                        <path id="Icon_open-trash" data-name="Icon open-trash"
                                            d="M8.583,0A2.869,2.869,0,0,0,5.722,2.861H2.861A2.869,2.869,0,0,0,0,5.722H20.028a2.869,2.869,0,0,0-2.861-2.861H14.305A2.869,2.869,0,0,0,11.444,0ZM2.861,8.583V22.345a.526.526,0,0,0,.544.544H16.652a.526.526,0,0,0,.544-.544V8.583H14.334V18.6a1.431,1.431,0,0,1-2.861,0V8.583H8.612V18.6a1.431,1.431,0,1,1-2.861,0V8.583H2.89Z"
                                            transform="translate(862.386 2511.575)" fill="#fff" />
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <hr class="border-marron-claro my-3 mx-0">

                <div class="row mt-4">
                    <div class="col-8 col-md-6">
                        <div class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/75" alt="">
                            <h5 class="text-bold text-marron-claro ml-3 mb-0">Cafecito: Especial planificación y productividad</h5>
                        </div>
                    </div>
                    <div class="col-3 d-none d-md-flex col-md-3 align-items-center">
                        <p>26/11/2020</p>
                    </div>  
                    <div class="col-4 col-md-3 d-flex align-items-center">
                        <div class="">
                            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="46.952" height="46.952"
                                    viewBox="0 0 46.952 46.952">
                                    <g id="Button" transform="translate(-879.253 -2498.988)">
                                        <path id="Background"
                                            d="M23,0h.952a23,23,0,0,1,23,23v.952a23,23,0,0,1-23,23H23a23,23,0,0,1-23-23V23A23,23,0,0,1,23,0Z"
                                            transform="translate(879.253 2498.988)" fill="#9ddcb0" />
                                        <path id="Icon_metro-pencil" data-name="Icon metro-pencil"
                                            d="M21.936,1.928a3.586,3.586,0,0,1,2.869,5.738L23.371,9.1,18.35,4.08l1.434-1.434a3.57,3.57,0,0,1,2.152-.717ZM4.005,18.425,2.571,24.88l6.455-1.434L22.295,10.176,17.274,5.156Zm14.6-8.347L8.568,20.119,7.332,18.882,17.373,8.841Z"
                                            transform="translate(888.682 2509.06)" fill="#fbfbfb" />
                                    </g>
                                </svg>
                            </a>
                            <a class="ml-2" href=""><svg xmlns="http://www.w3.org/2000/svg" width="44.028"
                                    height="46.889" viewBox="0 0 44.028 46.889">
                                    <g id="Button" transform="translate(-850.386 -2499.575)">
                                        <rect id="Background" width="44.028" height="46.889" rx="22"
                                            transform="translate(850.386 2499.575)" fill="#e67161" />
                                        <path id="Icon_open-trash" data-name="Icon open-trash"
                                            d="M8.583,0A2.869,2.869,0,0,0,5.722,2.861H2.861A2.869,2.869,0,0,0,0,5.722H20.028a2.869,2.869,0,0,0-2.861-2.861H14.305A2.869,2.869,0,0,0,11.444,0ZM2.861,8.583V22.345a.526.526,0,0,0,.544.544H16.652a.526.526,0,0,0,.544-.544V8.583H14.334V18.6a1.431,1.431,0,0,1-2.861,0V8.583H8.612V18.6a1.431,1.431,0,1,1-2.861,0V8.583H2.89Z"
                                            transform="translate(862.386 2511.575)" fill="#fff" />
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <hr class="border-marron-claro my-3 mx-0">

                <div class="row mt-4">
                    <div class="col-8 col-md-6">
                        <div class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/75" alt="">
                            <h5 class="text-bold text-marron-claro ml-3 mb-0">Cafecito: Especial planificación y productividad</h5>
                        </div>
                    </div>
                    <div class="col-3 d-none d-md-flex col-md-3 align-items-center">
                        <p>26/11/2020</p>
                    </div>  
                    <div class="col-4 col-md-3 d-flex align-items-center">
                        <div class="">
                            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="46.952" height="46.952"
                                    viewBox="0 0 46.952 46.952">
                                    <g id="Button" transform="translate(-879.253 -2498.988)">
                                        <path id="Background"
                                            d="M23,0h.952a23,23,0,0,1,23,23v.952a23,23,0,0,1-23,23H23a23,23,0,0,1-23-23V23A23,23,0,0,1,23,0Z"
                                            transform="translate(879.253 2498.988)" fill="#9ddcb0" />
                                        <path id="Icon_metro-pencil" data-name="Icon metro-pencil"
                                            d="M21.936,1.928a3.586,3.586,0,0,1,2.869,5.738L23.371,9.1,18.35,4.08l1.434-1.434a3.57,3.57,0,0,1,2.152-.717ZM4.005,18.425,2.571,24.88l6.455-1.434L22.295,10.176,17.274,5.156Zm14.6-8.347L8.568,20.119,7.332,18.882,17.373,8.841Z"
                                            transform="translate(888.682 2509.06)" fill="#fbfbfb" />
                                    </g>
                                </svg>
                            </a>
                            <a class="ml-2" href=""><svg xmlns="http://www.w3.org/2000/svg" width="44.028"
                                    height="46.889" viewBox="0 0 44.028 46.889">
                                    <g id="Button" transform="translate(-850.386 -2499.575)">
                                        <rect id="Background" width="44.028" height="46.889" rx="22"
                                            transform="translate(850.386 2499.575)" fill="#e67161" />
                                        <path id="Icon_open-trash" data-name="Icon open-trash"
                                            d="M8.583,0A2.869,2.869,0,0,0,5.722,2.861H2.861A2.869,2.869,0,0,0,0,5.722H20.028a2.869,2.869,0,0,0-2.861-2.861H14.305A2.869,2.869,0,0,0,11.444,0ZM2.861,8.583V22.345a.526.526,0,0,0,.544.544H16.652a.526.526,0,0,0,.544-.544V8.583H14.334V18.6a1.431,1.431,0,0,1-2.861,0V8.583H8.612V18.6a1.431,1.431,0,1,1-2.861,0V8.583H2.89Z"
                                            transform="translate(862.386 2511.575)" fill="#fff" />
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <hr class="border-marron-claro my-3 mx-0">

                <div class="row mt-5">
                    <div class="col-md-12">
                        <nav aria-label="...">
                            <ul class="pagination pagination-blog">
                                <li class="page-item">
                                    <a class="page-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-chevron-left"
                                            viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                        </svg></a>
                                </li>
                                <li class="page-item active" aria-current="page">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-chevron-right"
                                            viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                        </svg></a>
                                </li>
                            </ul>
                        </nav>
                        
                    </div>
                </div>                

     @endsection
