 @extends('layouts.master')
@section('title')   @lang('language.Add_feature_list')@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/summernote/summernote.min.css')}}">
@endsection
@section('content')
@component('common-components.breadcrumb')
@slot('title') @lang('language.Add_feature_list') @endslot
@endcomponent
<style>
.form-control{
	color: #314667 !important;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
.disable{
   cursor: not-allowed;
   pointer-events: none;
}
</style>

<div class="row">
    <div class="col-12">
        <div class="card mb-2">
           <div class="card-body">
                  @if (Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                                <strong>{{ Session::get('error') }}</strong>
                        </div>
                    @endif
                    @if (Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                                <strong>{{ Session::get('success') }}</strong>
                        </div>
                    @endif


            <form name="frm1" id="frm1" class="needs-validation" method="post" enctype="multipart/form-data" action="{{route('feature_list.store')}}"  novalidate>
                 @csrf
                 <div class="form-group">
                    <label>@lang('language.choose_feature')</label>
                    <select id="featured_places_id" name="featured_places_id" class="form-control" required>
                      <option value="">Select Feature Places</option>
                      @foreach($feature_list as $feature)
                        <option value="{{ $feature->id }}">{{ $feature->title }}</option>
                      @endforeach
                    </select>
                  </div>

                    <div class="form-group">
                        <label for="formrow-quest_name-input"> @lang('language.Title')</label>
						<input type="text" class="form-control" name="title" id="title" placeholder="@lang('language.Title_placeholder')" value="{{old('title')}}" required>
                        <div class="invalid-feedback">
                           @lang('language.Title_validation')
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="formrow-quest_name-input">@lang('language.French_Title')</label>
						<input type="text" class="form-control" name="title_fr" id="title_fr" placeholder="@lang('language.frTitle_placeholder')" value="{{old('title_fr')}}" required>
                        <div class="invalid-feedback">
                            @lang('language.frTitle_validation')'
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="formrow-quest_name-input"> @lang('language.Description')</label>
						<textarea class="form-control" name="description" id="description" placeholder="@lang('language.Description_placeholder')" value="{{old('description')}}" required></textarea>
                        <div class="invalid-feedback">
                           @lang('language.Description_validation')
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="formrow-quest_name-input">@lang('language.FrDescription')</label>
						<textarea class="form-control" name="description_fr" id="description_fr" placeholder="@lang('language.frDescription_placeholder')" value="{{old('description_fr')}}" required></textarea>
                        <div class="invalid-feedback">
                            @lang('language.frDescription_validation')
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="formrow-quest_name-input">@lang('language.Rating')</label>
						<input type="number" class="form-control" name="ratings" id="ratings" placeholder="Enter ratings" value="{{old('ratings')}}" required>
                        <div class="invalid-feedback">
                            @lang('language.rating_validation')
                        </div>
                    </div>
    
                    <div id="req_input" class="form-group">
                        <label for="formrow-quest_name-input"> Image</label>
                        <input type="file"  class="form-control images" name="image" id="images_0" required >
                            <div class="invalid-feedback">
                                   @lang('language.Image')
                            </div><br>
                        <img id="image_main0" name="image_main0" class="image_main0" height="100" width="100" style="display:none" >
                        <span id="image0_error" style="color:#f46a6a;margin-top: 0.25rem;font-size: 80%;"></span>
                    </div>

                    <div class="col-md-2" style="padding-top:1%;">
                        <div class="form-group ">
                            <div class="custom-control custom-checkbox">
                                @php $checked=""; @endphp
                                <input type="checkbox" name="status" class="custom-control-input" id="invalidCheck" >
                                <label class="custom-control-label" for="invalidCheck" >@lang('language.Active')</label>
                                <div class="invalid-feedback">
                                    @lang('language.You must agree before Save.')
                                </div>
                            </div>

                        </div>
                    </div>
                        
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <button class="btn btn-success" type="submit" id="save">@lang('language.Save')</button>
                            <a href="../feature_list" class="btn btn-danger">@lang('language.Cancel')</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection
@section('script')
<script src="{{ URL::asset('assets/libs/parsleyjs/parsleyjs.min.js')}}"></script> 
<script src="{{ URL::asset('assets/js/pages/form-validation.init.js')}}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/pages/form-advanced.init.js')}}"></script>
<script src="{{ URL::asset('assets/libs/tinymce/tinymce.min.js')}}"></script>

<script type="text/javascript">
    tinymce.init({
 selector: 'textarea#description,#description_fr',
 plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
 imagetools_cors_hosts: ['picsum.photos'],
 menubar: 'file edit view insert format tools table help',
 toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
 toolbar_sticky: true,
 autosave_ask_before_unload: true,
 autosave_interval: "30s",
 autosave_prefix: "{path}{query}-{id}-",
 autosave_restore_when_empty: false,
 autosave_retention: "2m",
 image_advtab: true,
 content_css: '//www.tiny.cloud/css/codepen.min.css',
 link_list: [
   { title: 'My page 1', value: 'http://www.tinymce.com' },
   { title: 'My page 2', value: 'http://www.moxiecode.com' }
 ],
 image_list: [
   { title: 'My page 1', value: 'http://www.tinymce.com' },
   { title: 'My page 2', value: 'http://www.moxiecode.com' }
 ],
 image_class_list: [
   { title: 'None', value: '' },
   { title: 'Some class', value: 'class-name' }
 ],
 importcss_append: true,
 file_picker_callback: function (callback, value, meta) {
   /* Provide file and text for the link dialog */
   if (meta.filetype === 'file') {
     callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
   }
   /* Provide image and alt text for the image dialog */
   if (meta.filetype === 'image') {
     callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
   }
   /* Provide alternative source and posted for the media dialog */
   if (meta.filetype === 'media') {
     callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
   }
 },
 templates: [
       { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
   { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
   { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
 ],
 template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
 template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
 height: 520,
 image_caption: true,
 quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
 noneditable_noneditable_class: "mceNonEditable",
 toolbar_mode: 'sliding',
 contextmenu: "link image imagetools table",
});

</script> 


<script>
    var _URL = window.URL || window.webkitURL;
   $(document).on('change','#images_0',function(e){
    var file, img;
   
    let name = e.target.files[0].name;
   if ((file = this.files[0])) {
     var ext = name.split('.').pop().toLowerCase();
   
     if($.inArray(ext, ['png','jpg','jpeg']) == -1) {
     $("#image0_error").text("@lang('language.image_format')");
     $("#images_0").val("");
     $("#images_0").val(null);
       $("#image_main0").attr('src','');
         $("#image_main0").css('display','none');
   
     }else{
   
           var imgwidth = 0;
           var imgheight = 0;
           var maxwidth = 400;
           var maxheight = 280;
           img = new Image();
           img.onload = function() {
   
           imgwidth = this.width;
           imgheight = this.height;
   
           if(imgwidth > maxwidth && imgheight > maxheight){
   
           $("#image0_error").text("@lang('language.Please upload images of following dimension width/height(400*280).')");
           $("#image_main0").css("display", "none");
           $("#image_main0").attr('src','');
           $("#images_0").val("");
           }else{
           $("#image0_error").text("");
           $("#image_main0").css("display", "block");
           $('#image_main0').attr('src', img.src).height(280).width(400);
               }
           }
       };
           img.src = _URL.createObjectURL(file);
   }
   });
   </script>
@endsection
