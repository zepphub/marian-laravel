@extends('admin.layouts.app')

@section('content')
            <div class="col-md-9 p-3 p-md-5">
                <div class="row">
                    <div class="col-md-12">
                        <div
                            class="align-items-md-center d-flex flex-column flex-md-row justify-content-between my-4 my-md-0">
                            <h2 class="order-2 order-md-1">Consultorías personalizadas</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        @foreach ($counselings as $counseling)
                        <form id="editForm-{{ $counseling->id }}" action="{{ route('admin.counselings.update', $counseling) }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          @method('PUT')
                          <input type=hidden name="counseling-id" value="{{ $counseling->id }}">
                        </form>
                        <div class="shadow rounded p-4 mt-5 @if ($loop->first) mt-md-0 @endif">
                            <h4 class="m-0"><img class="mr-3" src="{{ asset($counseling->icon) }}" width=47 height=45.294 >{{ $counseling->service->name }}</h4>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="mr-0 mr-md-5">
                                        <div class="mt-4">
                                            <h4>Descripción</h4>
                                            <textarea class="form-control" name="description" form="editForm-{{ $counseling->id }}" cols="30" rows="4">{{ $counseling->description }} </textarea>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-md-7">
                                                <h4>{{ $counseling->marked_description }}</h4>
                                                <div id='descriptions-container-{{$counseling->id}}'>
                                                  <input type=hidden id="ndesc-{{$counseling->id}}" name="new-descriptions" form="editForm-{{ $counseling->id }}" value="0">
                                                @foreach ($counseling->descriptions as $description)
                                                <div class="d-flex align-items-center @if (!$loop->first) mt-3 @endif">
                                                  <input class="form-control form-control-lg " name="content-{{$description->id}}" type="text" form="editForm-{{ $counseling->id }}" value="{{ $description->content }}">
                                                  <form class="ml-2 d-inline-flex" action="{{ route('admin.counselingdescriptions.destroy', $description) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type=image alt="Borrar" src='data:image/svg+xml;utf8,%3Csvg xmlns="http://www.w3.org/2000/svg" width="44.028" height="46.889" viewBox="0 0 44.028 46.889"%3E%3Cg id="Button" transform="translate(-850.386 -2499.575)"%3E%3Crect id="Background" width="44.028" height="46.889" rx="22" transform="translate(850.386 2499.575)" fill="%23e67161" /%3E%3Cpath id="Icon_open-trash" data-name="Icon open-trash" d="M8.583,0A2.869,2.869,0,0,0,5.722,2.861H2.861A2.869,2.869,0,0,0,0,5.722H20.028a2.869,2.869,0,0,0-2.861-2.861H14.305A2.869,2.869,0,0,0,11.444,0ZM2.861,8.583V22.345a.526.526,0,0,0,.544.544H16.652a.526.526,0,0,0,.544-.544V8.583H14.334V18.6a1.431,1.431,0,0,1-2.861,0V8.583H8.612V18.6a1.431,1.431,0,1,1-2.861,0V8.583H2.89Z" transform="translate(862.386 2511.575)" fill="%23fff" /%3E%3C/g%3E%3C/svg%3E'>
                                                    </input>
                                                  </form>
                                                </div>
                                                @endforeach
                                                </div>

                                                <div class="d-flex justify-content-end mt-3"><a
                                                        style="text-decoration:underline; cursor:pointer"
                                                        class="text-coral font-weight-bold" onclick="newDesc('{{$counseling->id}}');">Agregar +</a></div>
                                            </div>
                                            <div class="col-md-5 mt-4 mt-md-0">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h4>Precio</h4><input
                                                            class="form-control form-control-lg "
                                                            type="text" name="price_ars" form="editForm-{{ $counseling->id }}" value="{{ $counseling->service->price_ars }}">
                                                        @error('price_ars')
                                                        @if ( $errors->first('counseling-id') == $counseling->id )
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                        @endif
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-6 mt-3 mt-md-0">
                                                        <h4>Precio U$D</h4><input
                                                            class="form-control form-control-lg "
                                                            type="text" name="price_usd" form="editForm-{{ $counseling->id }}" value="{{ $counseling->service->price_usd }}">
                                                        @error('price_usd')
                                                        @if ( $errors->first('counseling-id') == $counseling->id )
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                        @endif
                                                        @enderror
                                                    </div>
                                                </div>
                                                <h4 class="mt-5">Link de video (Youtube)</h4>
                                                <input class="form-control form-control-lg " form="editForm-{{ $counseling->id }}" name=video type="text"
                                                    value="{{ $counseling->video }}">
                                                @error('video')
                                                @if ( $errors->first('counseling-id') == $counseling->id )
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                @endif
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-4 mt-md-0 borde-servicios text-center">
                                    <div class="d-flex flex-column h-100">
                                        <img id="preview-image-{{$counseling->id}}" class="d-block mx-auto img-fluid" width=150px height=150px src="{{ asset($counseling->image)}}" alt="">
                                        <input type="file" name="image" form="editForm-{{ $counseling->id }}" class="image-upload" id="image-upload-{{$counseling->id}}" style="display: none;" />
                                        @error('image')
                                        @if ( $errors->first('counseling-id') == $counseling->id )
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @endif
                                        @enderror
                                        <div class="d-block d-md-flex justify-content-center mb-3 mb-md-0">
                                            <label for="image-upload-{{$counseling->id}}" class="btn btn-primary mt-4">Subir imagen</label>
                                        </div>
                                        <div
                                            class="d-block d-md-flex mt-auto justify-content-md-end justify-content-center">
                                            <button type="submit" form="editForm-{{ $counseling->id }}" class="btn btn-verde">Guardar<svg class="ml-2" xmlns="http://www.w3.org/2000/svg" width="13.383" height="13.383" viewBox="0 0 13.383 13.383"> <path id="Icon_awesome-save" data-name="Icon awesome-save" d="M12.963,5.176,10.457,2.67a1.434,1.434,0,0,0-1.014-.42H1.434A1.434,1.434,0,0,0,0,3.684V14.2a1.434,1.434,0,0,0,1.434,1.434H11.949A1.434,1.434,0,0,0,13.383,14.2V6.19a1.434,1.434,0,0,0-.42-1.014ZM6.692,13.721A1.912,1.912,0,1,1,8.6,11.81,1.912,1.912,0,0,1,6.692,13.721Zm2.868-9.1v3a.358.358,0,0,1-.358.358H2.27a.358.358,0,0,1-.358-.358V4.52a.358.358,0,0,1,.358-.358H9.1a.358.358,0,0,1,.253.105l.1.1A.358.358,0,0,1,9.56,4.624Z" transform="translate(0 -2.25)" fill="currentColor" /> </svg>

                                                </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
@endsection

@section('head')
@endsection
@section('scripts')
<script type="text/javascript">
var newDesc = function(c_id){
  let descContainer = document.getElementById("descriptions-container-"+c_id);
  let ndesc = document.getElementById("ndesc-"+c_id);
  ndesc.value = String(parseInt(ndesc.value) + 1);
  descContainer.insertAdjacentHTML("beforeEnd", ' <input class="form-control form-control-lg  mt-3" name="content-new-'+ndesc.value+'" type="text" form="editForm-'+c_id+'" value="">');

};

$(document).ready(function (e) {
   $('.image-upload').change(function(){
    let reader = new FileReader();
    let c_id = this.id.replace("image-upload-", "");
    reader.onload = (e) => {
      $('#preview-image-'+c_id).attr('src', e.target.result);
    }
    reader.readAsDataURL(this.files[0]);
     });
  });
</script>
@endsection
