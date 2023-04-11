@extends('layouts.main')

@section('head')
@endsection

@section('title')
    Contacto -
@endsection

@section('content')
    <article>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="epigrafe text-center mt-5">Contacto</h1>
                    </div>
                </div>
            </div>
        </header>

<!-- Formulario de Contacto -->
<aside id="contacto" class="bg-crema-suave p-md-5">
    <div class="container bg-white p-5 rounded shadow">
        <div class="row p-3">
            <div class="col mb-2 text-center">
                <h3 class="text-seconday text mb-3">Contacta conmigo, <br>me encantará leerte.</h3>
                <img src="{{ asset('/img/separador.svg') }}" class="separador-ondas mx-auto mb-3"
                    alt="">
                <p>Si estas por aquí es porque hay algo que quieres decirme o preguntarme.</p>
                <br>
                <div class="social-group d-flex">

                    <a href="mailto:contacto@marianpd.com" target="_blank" class="btn-social-group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                            class="bi bi-envelope" viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" fill="#ffffff" />
                        </svg>
                    </a>

                    <!--<a href="https://twitter.com/Marianaapd?s=08" target="_blank" class="btn-social-group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-twitter" viewBox="0 0 16 16">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"
                                fill="#ffffff" />
                        </svg>
                    </a>-->

                    <a href="https://www.instagram.com/mariann.pd/?hl=es-la" target="_blank"
                        class="btn-social-group">
                        <svg id="Componente_4_15" data-name="Componente 4 – 15" xmlns="http://www.w3.org/2000/svg"
                            width="42" height="42" viewBox="0 0 42 42">
                            <circle id="Elipse_3" data-name="Elipse 3" cx="21" cy="21"
                                r="21" fill="#f8337a" opacity="0" />
                            <path id="instagram"
                                d="M14.871,18.656H3.562A3.588,3.588,0,0,1,0,15.051V3.605A3.588,3.588,0,0,1,3.562,0H14.87a3.589,3.589,0,0,1,3.564,3.605V15.051A3.588,3.588,0,0,1,14.871,18.656ZM1.794,7.414v7.637a1.778,1.778,0,0,0,1.766,1.786H14.87a1.778,1.778,0,0,0,1.766-1.786V7.414H13.883a5.039,5.039,0,1,1-9.337,0ZM9.217,6.044A3.25,3.25,0,0,0,6.586,7.413a3.3,3.3,0,0,0,.337,4.235,3.2,3.2,0,0,0,2.293.963,3.284,3.284,0,0,0,0-6.567ZM16.3,2.149h-.407l-2.719.009.011,3.163,3.114-.01V2.149Z"
                                transform="translate(12 12)" fill="#ffffff" />
                        </svg>
                    </a>

                    <a class="btn-social-group" href="https://www.linkedin.com/in/mariana-pacheco-d-aquila-ba537375/"
                        target="_blank"><svg class="text-primary" id="Componente_4_16" data-name="Componente 4 – 16"
                            xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42">
                            <circle id="Elipse_3" data-name="Elipse 3" cx="21" cy="21"
                                r="21" fill="#f8337a" opacity="0" />
                            <path id="Icon_awesome-linkedin-in" data-name="Icon awesome-linkedin-in"
                                d="M4.335,19.367H.32V6.437H4.335ZM2.325,4.673A2.336,2.336,0,1,1,4.651,2.326,2.345,2.345,0,0,1,2.325,4.673ZM19.363,19.367H15.356V13.073c0-1.5-.03-3.424-2.088-3.424-2.088,0-2.407,1.63-2.407,3.316v6.4H6.85V6.437H10.7V8.2h.056a4.219,4.219,0,0,1,3.8-2.088c4.064,0,4.811,2.676,4.811,6.152v7.1Z"
                                transform="translate(11.066 11.066)" fill="#ffffff" />
                        </svg>
                    </a>

                </div>
            </div>
        </div>
    </div>
</aside>

    </article>
@endsection
