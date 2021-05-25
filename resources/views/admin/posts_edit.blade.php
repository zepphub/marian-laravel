@extends('admin.layouts.app')

@section('content')
<div class="col-md-9 p-3 p-md-5">
    <div class="row">
        <div class="col-md-12">
            <div
                class="align-items-md-center d-flex flex-column flex-md-row justify-content-between my-4 my-md-0">
                <h2 class="order-2 order-md-1">Editar artículo</h2>
                <a class="order-1 order-md-2" href="{{route('admin.posts.index')}}"><button class="btn btn-outline-secondary"><svg
                            class="mr-2" style="margin-bottom:2px" xmlns="http://www.w3.org/2000/svg"
                            width="7" height="10" viewBox="0 0 7.771 11.157">
                            <path id="Icon_awesome-chevron-down" data-name="Icon awesome-chevron-down"
                                d="M5.145.18.18,5.145a.613.613,0,0,0,0,.867l.579.579a.613.613,0,0,0,.866,0L5.578,2.657,9.532,6.592a.613.613,0,0,0,.866,0l.579-.579a.613.613,0,0,0,0-.867L6.012.18A.613.613,0,0,0,5.145.18Z"
                                transform="translate(0 11.157) rotate(-90)" fill="currentColor" />
                        </svg>
                        Volver</button></a>
            </div>
        </div>
    </div>
    <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PATCH')
      <div class="row mt-4">
          <div class="col-md-8">
              <h5 class="text-marron-claro font-weight-normal mb-2">Título del artículo</h5>
              <input class="form-control form-control-lg rounded-pill" type="text" name="title" value="{{ old('title') ?? $post->title }}">
              @error('title')
              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
              @enderror
              <h5 class="mt-5 text-marron-claro font-weight-normal mb-2">Cuerpo del artículo</h5>
              <textarea class="form-control" id="post-body" name="body" cols="30" rows="10">{{ old('body') ?? $post->body }}</textarea>
              @error('body')
              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
              @enderror
              <h5 class="mt-5 text-marron-claro font-weight-normal mb-2">Categoría</h5>
              <select class="form-control" name=category_id>
                @foreach (App\Models\Category::all() as $category)
                  @if ($category->id == $post->category_id)
                    <option value='{{ $category->id }}' selected>{{ $category->name }}</option>
                  @else
                    <option value='{{ $category->id }}'>{{ $category->name }}</option>
                  @endif
                @endforeach
              </select>
          </div>
          <div class="col-md-4">
              <div class="text-center mt-5 mt-md-0">
                  <img id="preview-image" class="d-block img-fluid w-100" src="{{ asset($post->image)}}" alt="">
                  <input type="file" name="image" id="image-upload" style="display: none;" />
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
                  <button type="submit" class="btn btn-verde">Guardar<svg class="ml-2"
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
