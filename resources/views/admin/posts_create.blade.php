@extends('admin.layouts.app')

@section('content')
<div class="col-md-9 p-3 p-md-5">
    <div class="row">
        <div class="col-md-12">
            <div class="align-items-md-center d-flex flex-column flex-md-row justify-content-between my-4 my-md-0">
                <h2 class="order-2 order-md-1">Nuevo artículo</h2>
                <a class="order-1 order-md-2" href="{{ route('admin.posts.index') }}"><button class="btn btn-outline-secondary"><svg class="mr-2" style="margin-bottom:2px"
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
    <form action="{{ route('admin.posts.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="row mt-4">
          <div class="col-md-8">
              <h5 class="text-marron-claro font-weight-normal mb-2">Título del artículo</h5>
              <input class="form-control form-control-lg rounded-pill" type="text" name='title' value="{{ old('title') }}">
              @error('title')
              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
              @enderror
              @error('slug')
              @if ($errors->first('title') == Null)
              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
              @endif
              @enderror
              <h5 class="mt-5 text-marron-claro font-weight-normal mb-2">Cuerpo del artículo</h5>
              <textarea class="form-control" id="post-body" name="body" id="" cols="30" rows="10">{{ old('body') }}</textarea>
              @error('body')
              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
              @enderror
              <h5 class="mt-5 text-marron-claro font-weight-normal mb-2">Categoría</h5>
              <select class="form-control" name=category_id>
                @foreach (App\Models\Category::all() as $category)
                    <option value='{{ $category->id }}' >{{ $category->name }}</option>
                @endforeach
              </select>
          </div>
          <div class="col-md-4">
              <div class="text-center mt-5 mt-md-0">
                  <img id="preview-image" class="d-block img-fluid w-100" src="/img/150.png" alt="">
                  <input type="file" name="image" id="image-upload" value="{{ old('image') }}" style="display: none;" />
                  @error('image')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
                  <label for="image-upload" class="btn btn-primary mt-4">Subir imagen</label>
              </div>
          </div>
      </div>
      <hr class="border-marron-claro my-5 mx-0">
      <div class="row my-4">
          <div class="col-md-12">
              <div class="d-block d-md-flex justify-content-md-end justify-content-center">
                  <button type="submit" class="btn btn-outline-primary">Publicar</button>
              </div>
          </div>
      </div>
    </form>
</div>
@endsection

@section('scripts')
<script src="/js/tinymce/tinymce.min.js"></script>
<script>
tinymce.init({
  selector:'textarea#post-body',
  height: 300,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table paste code help wordcount'
  ],
  toolbar: 'undo redo | formatselect | ' +
  'bold italic forecolor backcolor | alignleft aligncenter ' +
  'alignright alignjustify | bullist numlist outdent indent | ' +
  'removeformat | help',
  skin: 'marian',
  content_css: 'marian',
  editor_css: 'marian',
  remove_linebreaks: true,
  convert_newlines_to_brs: false,
  inline_styles : false,
  entity_encoding: 'raw',
  entities: '160,nbsp,38,amp,60,lt,62,gt',
  paste_auto_cleanup_on_paste: true,
});
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
