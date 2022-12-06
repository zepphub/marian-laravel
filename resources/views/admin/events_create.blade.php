@extends('admin.layouts.app')

@section('content')
            <div class="col-md-9 p-3 p-md-5">
                <div class="row">
                    <div class="col-md-12">
                        <div
                            class="align-items-md-center d-flex flex-column flex-md-row justify-content-between my-4 my-md-0">
                            <h2 class="order-2 order-md-1">Nuevo evento</h2>
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
                <form action="{{ route('admin.events.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                <div class="row mt-4">
                    <div class="col-md-8">
                        <h5 class="text-marron-claro font-weight-normal mb-2">Título del evento</h5>
                        <input class="form-control form-control-lg " name="title" type="text" required>
                        <h5 class="mt-5 text-marron-claro font-weight-normal mb-2">Descripción</h5>
                        <textarea class="form-control" name="description" cols="30" rows="10" required></textarea>
                        <div class="row mt-4 mt-md-5">
                            <div class="col-md-4">
                                <h5 class="text-marron-claro  mb-2">Fecha</h5>
                                <input class="form-control form-control-lg " type="date" name="date" required>
                            </div>
                            <div class="col-md-2 mt-3 mt-md-0">
                                <h5 class="text-marron-claro  mb-2">Hora</h5>
                                <input class="form-control form-control-lg " type="time" name="time" required>
                            </div>
                            <div class="col-md-6 mt-3 mt-md-0">
                                <h5 class="text-marron-claro  mb-2">Disertante</h5>
                                <input class="form-control form-control-lg " type="text" name="lecturer" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center mt-5 mt-md-0">
                            <img id="preview-image" class="d-block img-fluid w-100" src="/img/150.png" alt="">
                            <input type="file" name="image" id="image-upload" value="{{ old('image') }}" style="display: none;" required/>
                            @error('image')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                            <label for="image-upload" class="btn btn-primary mt-4">Subir imagen</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 mt-md-5">
                    <div class="col-md-5">
                        <h5 class="text-marron-claro  mb-2">Organiza</h5>
                        <input class="form-control form-control-lg " name="host" type="text" required>
                    </div>
                    <div class="col-md-2 mt-3 mt-md-0">
                        <div class="d-block d-md-flex align-items-center h-100 mt-0 mt-md-3">
                            <h5 class="text-marron-claro  m-0 mb-3 mb-md-0">Inscripción</h5>
                            <div class="custom-control custom-switch.custom-switch-md custom-switch ml-0 ml-md-3">
                                <input type="checkbox" name="inscription" class="custom-control-input" id="inscription">
                                <label class="custom-control-label" for="inscription"></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 mt-3 mt-md-0">
                        <h5 class="text-marron-claro  mb-2">URL Evento</h5>
                        <input class="form-control form-control-lg " name="url" type="text" required>
                    </div>
                    <div class="col-md-12">
                        <h5 class="mt-5 text-marron-claro font-weight-normal mb-2">Acerca de este evento</h5>
                        <textarea class="form-control" name="about" cols="30" rows="10" required></textarea>
                    </div>
                </div>
                <hr class="border-marron-claro my-5 mx-0">
                <div class="row my-4">
                    <div class="col-md-12">
                        <div class="d-block d-md-flex justify-content-md-end justify-content-center">
                            <button type=submit class="btn btn-outline-primary">Publicar</button>
                        </div>
                    </div>
                </div>
                </form>
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
