@extends('admin.layouts.app')

@section('content')
<div class="col-md-9 p-3 p-md-5">
    <div class="row">
        <div class="col-md-12">
            <h2>Bienvenida a tu panel de gestión</h2>
            <h4 class="text-medium">Descargar listas de:</h4>
            <div class="mt-5">
                <div class="btn btn-coral p-1 text-white dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="adminDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Resultados test
                    </a>
                    <div class="dropdown-menu bg-coral text-white border-0 adminDropdown" aria-labelledby="adminDropdown">
                        <a href="{{ route( 'admin.csv.test_results' ) }}" class="dropdown-item dropdown-option text-white" download>Comenzar <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-download ml-3" viewBox="0 0 16 16">
                        <path d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
                        <path d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
                    </svg></a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route( 'admin.csv.test_results' ) }}" class="dropdown-item dropdown-option text-white" download>Mejorar <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-download ml-3" viewBox="0 0 16 16">
                        <path d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
                        <path d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
                    </svg></a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route( 'admin.csv.test_results' ) }}" class="dropdown-item dropdown-option text-white" download>Crecer <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-download ml-3" viewBox="0 0 16 16">
                        <path d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
                        <path d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
                    </svg></a>
                    </div>
                </div>  
                <a  href="{{ route( 'admin.csv.form_queries' ) }}" class="btn btn-marron ml-0 ml-md-4" download>Formulario de contacto
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-download ml-3" viewBox="0 0 16 16">
                        <path d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
                        <path d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
                    </svg>
                </a>
                <a  href="{{ route( 'admin.csv.resources' ) }}" class="btn btn-rosa-oscuro ml-0 ml-md-4" download>Recursos gratuitos
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-download ml-3" viewBox="0 0 16 16">
                        <path d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
                        <path d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
                    </svg>
                </a>
                <a href="{{ route( 'admin.csv.newsletter' ) }}" class="btn btn-rosa-claro ml-0 ml-md-4" download>Suscriptores
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-download ml-3" viewBox="0 0 16 16">
                        <path d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
                        <path d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="row my-5">
        <div class="col-md-4">
            <div class="rounded-lg shadow-lg text-center p-4 my-3 my-md-0 mr-0 mr-md-3">
                <img src="{{ asset('img/card-blog.svg') }} " alt="">
                <h4 class="titulo-cards-dashboard my-4">Blog</h4>
                <a href="{{ route( 'admin.posts.index' ) }}" class="btn btn-primary">Gestionar</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="rounded-lg shadow-lg text-center p-4 my-3 my-md-0 mr-0 mr-md-3">
                <img src="{{ asset('img/card-asesoria.svg') }}" alt="">
                <h4 class="titulo-cards-dashboard my-4">Asesoría
                    personalizada</h4>
                <a href="{{ route( 'admin.mentorships.index' ) }}" class="btn btn-primary">Gestionar</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="rounded-lg shadow-lg text-center p-4 my-3 my-md-0">
                <img src="{{ asset('img/card-asesoria.svg') }}" alt="">
                <h4 class="titulo-cards-dashboard my-4">Mentoría</h4>
                <a href="{{ route( 'admin.mentorships.index' ) }}#mentoria-tab-2-content" class="btn btn-primary">Gestionar</a>
            </div>
        </div>
        <div class="col-md-4 mt-0 mt-md-5">
            <div class="rounded-lg shadow-lg text-center p-4 my-3 my-md-0 mr-0 mr-md-3">
                <img src="{{ asset('img/card-asesoria.svg') }}" alt="">
                <h4 class="titulo-cards-dashboard my-4">Talleres y
                    eventos</h4>
                <a href="{{ route( 'admin.events.index' ) }}" class="btn btn-primary">Gestionar</a>
            </div>
        </div>
        <div class="col-md-4 mt-0 mt-md-5">
            <div class="rounded-lg shadow-lg text-center p-4 my-3 my-md-0 mr-0 mr-md-3">
                <img src="{{ asset('img/card-recursos.svg') }}" alt="">
                <h4 class="titulo-cards-dashboard my-4">Recursos
                    gratuitos</h4>
                <a href="{{ route( 'admin.resources.index' ) }}" class="btn btn-primary">Gestionar</a>
            </div>
        </div>
        <div class="col-md-4 mt-0 mt-md-5">
            <div class="rounded-lg shadow-lg text-center p-4 my-3 my-md-0">
                <img src="{{ asset('img/card-newsletter.svg') }}" alt="">
                <h4 class="titulo-cards-dashboard my-4">Newsletter</h4>
                <a href="{{ route( 'admin.newsletter' ) }}" class="btn btn-primary">Gestionar</a>
            </div>
        </div>
    </div>
</div>
@endsection
