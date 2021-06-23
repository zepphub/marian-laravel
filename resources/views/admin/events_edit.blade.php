@extends('admin.layouts.app')

@section('content')
<div class="col-md-9 p-3 p-md-5">
    <div class="row">
        <div class="col-md-12">
            <div
                class="align-items-md-center d-flex flex-column flex-md-row justify-content-between my-4 my-md-0">
                <h2 class="order-2 order-md-1">Editar evento</h2>
                <a class="order-1 order-md-2" href="{{ route('admin.events.index') }}"><button
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
    <form action="{{ route('admin.events.update', $event) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="row mt-4">
        <div class="col-md-8">
            <h5 class="text-marron-claro font-weight-normal mb-2">Título del evento</h5>
            <input class="form-control form-control-lg rounded-pill" name="title" type="text" value="{{ old('title') ?? $event->title }}">
            @error('title')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            @error('slug')
            @if ($errors->first('title') == Null)
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @endif
            @enderror
            <h5 class="mt-5 text-marron-claro font-weight-normal mb-2">Descripción</h5>
            <textarea class="form-control" name="description" cols="30" rows="10">{{ old('description') ?? $event->description }}</textarea>
            <div class="row mt-4 mt-md-5">
                <div class="col-md-4">
                    <h5 class="text-marron-claro text-medium mb-2">Fecha</h5>
                    <input class="form-control form-control-lg rounded-pill" type="date" name="date" value="{{ old('date') ?? $event->date }}">
                </div>
                <div class="col-md-2 mt-3 mt-md-0">
                    <h5 class="text-marron-claro text-medium mb-2">Hora</h5>
                    <input class="form-control form-control-lg rounded-pill" type="time" name="time" value="{{ old('time') ?? $event->time }}">
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <h5 class="text-marron-claro text-medium mb-2">Disertante</h5>
                    <input class="form-control form-control-lg rounded-pill" name="lecturer" type="text" value="{{ old('lecturer') ?? $event->lecturer }}">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="text-center mt-5 mt-md-0">
                <img id="preview-image" class="d-block img-fluid w-100" src="{{ asset($event->image) }}" alt="">
                <input type="file" name="image" id="image-upload" value="{{ old('image') ?? $event->image }}" style="display: none;" />
                @error('image')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                <label for="image-upload" class="btn btn-primary mt-4">Subir imagen</label>
            </div>
        </div>
    </div>
    <div class="row mt-4 mt-md-5">
        <div class="col-md-5">
            <h5 class="text-marron-claro text-medium mb-2">Organiza</h5>
            <input class="form-control form-control-lg rounded-pill" name="host" type="text" value="{{ old('host') ?? $event->host }}">
        </div>
        <div class="col-md-2 mt-3 mt-md-0">
            <div class="d-block d-md-flex align-items-center h-100 mt-0 mt-md-3">
                <h5 class="text-marron-claro text-medium m-0 mb-3 mb-md-0">Inscripción</h5>
                <div class="custom-control custom-switch.custom-switch-md custom-switch ml-0 ml-md-3">
                    <input type="checkbox" name="inscription" class="custom-control-input" id="inscription" @if ($event->inscription) checked @endif >
                    <label class="custom-control-label" for="inscription"></label>
                </div>
            </div>
        </div>
        <div class="col-md-5 mt-3 mt-md-0">
            <h5 class="text-marron-claro text-medium mb-2">URL Evento</h5>
            <input class="form-control form-control-lg rounded-pill" name="url" type="text" value="{{ old('url') ?? $event->url }}">
        </div>
        <div class="col-md-12">
            <h5 class="mt-5 text-marron-claro font-weight-normal mb-2">Acerca de este evento</h5>
            <textarea class="form-control" name="about" cols="30" rows="10">{{ old('about') ?? $event->about }}</textarea>
        </div>
    </div>
    <hr class="border-marron-claro my-5 mx-0">
    <div class="row my-4">
        <div class="col-md-12">
            <div class="d-flex flex-column flex-md-row justify-content-md-end justify-content-center">
                <button type=submit class="btn btn-outline-primary mb-4 mb-md-0 mr-md-4">Descargar registros<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-download ml-3" viewBox="0 0 16 16">
                        <path d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"></path>
                        <path d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"></path>
                    </svg>
                </button>
                <button type=submit class="btn btn-verde">Guardar<svg class="ml-2"
                            xmlns="http://www.w3.org/2000/svg" width="13.383" height="13.383"
                            viewBox="0 0 13.383 13.383">
                            <path id="Icon_awesome-save" data-name="Icon awesome-save"
                                d="M12.963,5.176,10.457,2.67a1.434,1.434,0,0,0-1.014-.42H1.434A1.434,1.434,0,0,0,0,3.684V14.2a1.434,1.434,0,0,0,1.434,1.434H11.949A1.434,1.434,0,0,0,13.383,14.2V6.19a1.434,1.434,0,0,0-.42-1.014ZM6.692,13.721A1.912,1.912,0,1,1,8.6,11.81,1.912,1.912,0,0,1,6.692,13.721Zm2.868-9.1v3a.358.358,0,0,1-.358.358H2.27a.358.358,0,0,1-.358-.358V4.52a.358.358,0,0,1,.358-.358H9.1a.358.358,0,0,1,.253.105l.1.1A.358.358,0,0,1,9.56,4.624Z"
                                transform="translate(0 -2.25)" fill="currentColor" />
                        </svg>
                </button>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
<script type="text/javascript">
$(document).ready(function (e) {
$('#image-upload').change(function(){
    let reader = new FileReader();
    reader.onload = (e) => {
      $('#preview-image').attr('src', e.target.result);
    }
    reader.readAsDataURL(this.files[0]);
   });
});
</script>
@endsection
