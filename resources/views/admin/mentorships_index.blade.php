@extends('admin.layouts.app')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/image-picker.css') }}" />
@endsection

@section('content')
            <div class="col-md-9 p-3 p-md-5">
                <div class="row">
                    <div class="col-md-12">
                        <div
                            class="align-items-md-center d-flex flex-column flex-md-row justify-content-between my-4 my-md-0">
                            <h2 class="order-2 order-md-1">Mentoría</h2>
                        </div>
                    </div>
                </div>

                @php
                  if (!isset($current_mentorship)) {
                    $current_mentorship = $mentorships[0]->id;
                  }
                @endphp
                <!-- TABS -->
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs" id="tabMentoria" role="tablist">
                            @foreach ($mentorships as $mentorship)
                            <li class="nav-item" role="presentation">
                                <a class="nav-link @if ($mentorship->id == $current_mentorship) active @endif border-0 text-marron-claro font-weight-bold" data-toggle="tab" id="mentoria-tab-{{ $mentorship->id }}" href="#mentoria-tab-{{ $mentorship->id }}-content"
                                >{{ $mentorship->service->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                      <div class="tab-content" id="myTabContent">
                        @foreach ($mentorships as $mentorship)
                          @if ($mentorship->descriptions->count() == 1)
                            @include('admin.partials.mentorship_single', ['mentorship' => $mentorship, 'active_tab' => ($mentorship->id == $current_mentorship)])
                          @else
                            @include('admin.partials.mentorship_group', ['mentorship' => $mentorship, 'active_tab' => ($mentorship->id == $current_mentorship)])
                          @endif
                        @endforeach
                      </div>
                    </div>
                </div>
@endsection

@section('scripts')
<script src="{{ asset('js/image-picker.min.js') }}"></script>
<script src="/js/tinymce/tinymce.min.js"></script>
<script>
$(document).ready(function(){

  if(window.location.hash != "") {
      $('a[href="' + window.location.hash + '"]').click()
  }

});

// Change hash for page-reload
$('.nav-tabs a').on('shown.bs.tab', function (e) {
    if(history.pushState) {
        history.pushState(null, null, e.target.hash); 
    } else {
        window.location.hash = e.target.hash; //Polyfill for old browsers
    }
})

$(".image-picker").imagepicker({
    hide_select : true,
    show_label  : false
});

var selectIcon = function(d_id){
  let select = document.getElementById("select-icon-"+d_id);
  let selected_icon = select.options[select.selectedIndex]
  var image_icon = document.getElementById("icon-"+d_id);
  var input_icon = document.getElementById("description-"+d_id+"-icon-id");

  image_icon.src = selected_icon.getAttribute('data-img-src');
  input_icon.value = selected_icon.getAttribute('value');
};

tinymce.init({
  selector:'textarea.content-single',
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
</script>
@endsection
