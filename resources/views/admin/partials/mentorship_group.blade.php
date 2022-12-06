<form id="editForm-{{ $mentorship->id }}" action="{{ route('admin.mentorships.update', $mentorship) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
</form>
<div class="tab-pane fade @if ($active_tab) show active @endif" id=
"mentoria-tab-{{ $mentorship->id }}-content" role="tabpanel"
aria-labelledby="mentoria-tab-{{ $mentorship->id }}">
  <div class="row mt-5">
    <div class="col-md-3">
      <div class="d-flex align-items-center">
        <h4 class="m-0 mr-3 text-rosa-claro">
        Precio</h4><input form="editForm-{{ $mentorship->id }}" name="price_ars"  class="form-control form-control-lg " type="text"
        value="{{ $mentorship->service->price_ars }}">
      </div>
    </div>
    <div class="col-md-3 mt-3 mt-md-0">
      <div class="d-flex align-items-center">
        <h4 style="white-space: nowrap;" class=
        "m-0 mr-3 text-rosa-claro">Precio U$D</h4><input form="editForm-{{ $mentorship->id }}" name="price_usd" class=
        "form-control form-control-lg " type="text"
        value="{{ $mentorship->service->price_usd }}">
      </div>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-md-12">
      <h4 class="text-rosa-claro ">Ser parte de la Mentoría Grupal te dará acceso a</h4>
    </div>
  </div>
  <!-- Item Editable -->
  @foreach ($mentorship->descriptions as $description)
  <div class="row @if (!$loop->first) mt-4 mt-md-5 @endif">
    <div class="col-10 col-md-11">
      <div class="d-flex align-items-center h-100">
        <textarea class=
        "form-control form-control-md " form="editForm-{{ $mentorship->id }}"  name="content-{{ $description->id }}"
        cols="10" rows=
        "1">{{ $description->content }}</textarea>
      </div>
    </div>
    <div class="col-2 col-md-1">
      <div class="position-relative py-2">
        <input form="editForm-{{ $mentorship->id }}" type=hidden id="description-{{$description->id}}-icon-id" name="description-{{$description->id}}-icon-id" value="{{ $description->icon->id }}">
        <a href="#"><img id="icon-{{$description->id}}" class="d-block img-fluid w-100" src=
        "{{ asset($description->icon->url) }}" alt=""></a>
        <div style="bottom:0; right:0;" class=
        "position-absolute">
          <a  data-toggle="modal" data-target="#select-icon-{{$description->id}}-modal" href="#"><svg xmlns="http://www.w3.org/2000/svg"
          width="26" height="26" viewbox="0 0 23 23">
          <g transform="translate(-945 -191.956)">
            <path d="M2,0H21a2,2,0,0,1,2,2V21a2,2,0,0,1-2,2H2a2,2,0,0,1-2-2V2A2,2,0,0,1,2,0Z" transform="translate(945 191.956)" fill="#9ddcb0"></path>
            <path d="M11.966,1.928a1.74,1.74,0,0,1,1.392,2.784l-.7.7L10.226,2.972l.7-.7a1.732,1.732,0,0,1,1.044-.348Zm-8.7,8-.7,3.132,3.132-.7L12.14,5.93,9.7,3.494Zm7.086-4.05L5.48,10.754l-.6-.6L9.753,5.282Z" transform="translate(948.429 196.028)" fill="#fbfbfb"></path>
          </g></svg></a>

          <!-- Modal -->
          <div class="modal fade" id="select-icon-{{$description->id}}-modal" tabindex="-1" role="dialog" aria-labelledby="selectIconModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" >Selecciona un ícono</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <select class="image-picker" id="select-icon-{{$description->id}}" data-_extension-text-contrast="">
                    @foreach (\App\Models\Icon::all() as $icon)
                      <option data-img-src="{{ asset($icon->url) }}" data-img-alt="Icon {{$icon->id}}" value="{{ $icon->id }}" @if ($description->icon->id == $icon-> id) selected @endif>Icon {{$icon->id}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-primary"  onclick="selectIcon('{{$description->id}}');" data-dismiss="modal">Seleccionar</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  @endforeach
  <div class="row my-4">
    <div class="col-md-12">
      <div class=
      "d-block d-md-flex justify-content-md-end justify-content-center">
        <button type=submit form="editForm-{{ $mentorship->id }}" class=
        "btn btn-verde">Guardar<svg class="ml-2"
        xmlns="http://www.w3.org/2000/svg" width="13.383"
        height="13.383" viewbox="0 0 13.383 13.383">
        <path id="Icon_awesome-save" data-name=
        "Icon awesome-save" d=
        "M12.963,5.176,10.457,2.67a1.434,1.434,0,0,0-1.014-.42H1.434A1.434,1.434,0,0,0,0,3.684V14.2a1.434,1.434,0,0,0,1.434,1.434H11.949A1.434,1.434,0,0,0,13.383,14.2V6.19a1.434,1.434,0,0,0-.42-1.014ZM6.692,13.721A1.912,1.912,0,1,1,8.6,11.81,1.912,1.912,0,0,1,6.692,13.721Zm2.868-9.1v3a.358.358,0,0,1-.358.358H2.27a.358.358,0,0,1-.358-.358V4.52a.358.358,0,0,1,.358-.358H9.1a.358.358,0,0,1,.253.105l.1.1A.358.358,0,0,1,9.56,4.624Z"
        transform="translate(0 -2.25)" fill="currentColor">
        </path></svg></button>
      </div>
    </div>
  </div>
</div>
