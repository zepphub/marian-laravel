@extends('admin.layouts.app')

@section('title')Categorías - @endsection

@section('content')
<div class="col-md-9 p-3 p-md-5">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex flex-row align-items-center justify-content-between">
                <h2>Categorías</h2>
            </div>
        </div>
    </div>
    @if (\Session::has('message'))
    <div class="row mt-5 mt-md-4">
      <div class="col-9 col-md-6">
        <div class="alert alert-success" role="alert">
          {!! \Session::get('message') !!}
        </div>
      </div>
    </div>

    @endif
    <form action="{{ route('admin.categories.store') }}" method="post">
      @csrf
      <div class="row mt-5 mt-md-4">
          <div class="col-9 col-md-6">
              <div>
                  <h5 class="text-marron-claro font-weight-normal mb-3">Nueva Categoría</h5>
                  <input class="form-control form-control-lg rounded-pill" type="text"
                      placeholder="Nombre de categoría" name="name">
              </div>
          </div>
          <div class="col-3 col-md-2">
              <div class="d-flex align-items-end h-100">
                  <button type="submit" class="btn btn-primary"><span
                              class="d-none d-md-block">Crear</span><span class="d-block d-md-none"><svg
                                  xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                  fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                  <path
                                      d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                              </svg></span></button>
              </div>
          </div>
      </div>
    </form>

    <div class="row mt-5">
        <div class="col-8 col-md-9">
            <h6>Nombre</h6>
        </div>
        <div class="col-4 col-md-3">
            <h6>Acciones</h6>
        </div>
    </div>

    <hr class="border-marron-claro border-2 my-3 mx-0">

    @foreach($categories as $category)
    <div class="row">
        <form id="editForm-{{ $category->id }}" action="{{ route('admin.categories.update', $category) }}" method="POST">
          @csrf
          @method('PUT')
        </form>
        <form id="deleteForm-{{ $category->id }}" action="{{ route('admin.categories.destroy', $category) }}" method="POST">
          @csrf
          @method('DELETE')
        </form>
        <div class="col-8 col-md-9">
            <div class="d-flex align-items-center h-100">
                <input class="form-control font-weight-bold rounded-pill" type="text" form="editForm-{{ $category->id }}" name="name" value="{{ $category->name }}"></input>
            </div>
        </div>
        <div class="col-4 col-md-3 d-flex align-items-center">
            <input class="d-inline-flex" form="editForm-{{ $category->id }}" type=image alt="Editar" src='data:image/svg+xml;utf8,%3Csvg xmlns="http://www.w3.org/2000/svg" width="46.952" height="46.952" viewBox="0 0 46.952 46.952"%3E%3Cg id="Button" transform="translate(-879.253 -2498.988)"%3E%3Cpath id="Background" d="M23,0h.952a23,23,0,0,1,23,23v.952a23,23,0,0,1-23,23H23a23,23,0,0,1-23-23V23A23,23,0,0,1,23,0Z" transform="translate(879.253 2498.988)" fill="%239ddcb0" /%3E%3Cpath id="Icon_metro-pencil" data-name="Icon metro-pencil" d="M21.936,1.928a3.586,3.586,0,0,1,2.869,5.738L23.371,9.1,18.35,4.08l1.434-1.434a3.57,3.57,0,0,1,2.152-.717ZM4.005,18.425,2.571,24.88l6.455-1.434L22.295,10.176,17.274,5.156Zm14.6-8.347L8.568,20.119,7.332,18.882,17.373,8.841Z" transform="translate(888.682 2509.06)" fill="%23fbfbfb" /%3E%3C/g%3E%3C/svg%3E'></input>
            <input class="ml-2 d-inline-flex" form="deleteForm-{{ $category->id }}" type=image alt="Borrar" src='data:image/svg+xml;utf8,%3Csvg xmlns="http://www.w3.org/2000/svg" width="44.028" height="46.889" viewBox="0 0 44.028 46.889"%3E%3Cg id="Button" transform="translate(-850.386 -2499.575)"%3E%3Crect id="Background" width="44.028" height="46.889" rx="22" transform="translate(850.386 2499.575)" fill="%23e67161" /%3E%3Cpath id="Icon_open-trash" data-name="Icon open-trash" d="M8.583,0A2.869,2.869,0,0,0,5.722,2.861H2.861A2.869,2.869,0,0,0,0,5.722H20.028a2.869,2.869,0,0,0-2.861-2.861H14.305A2.869,2.869,0,0,0,11.444,0ZM2.861,8.583V22.345a.526.526,0,0,0,.544.544H16.652a.526.526,0,0,0,.544-.544V8.583H14.334V18.6a1.431,1.431,0,0,1-2.861,0V8.583H8.612V18.6a1.431,1.431,0,1,1-2.861,0V8.583H2.89Z" transform="translate(862.386 2511.575)" fill="%23fff" /%3E%3C/g%3E%3C/svg%3E'>
            </input>
          </form>
        </div>
    </div>
    <hr class="border-marron-claro my-3 mx-0">
    @endforeach

</div>
@endsection
