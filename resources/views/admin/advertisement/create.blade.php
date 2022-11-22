 @extends('layouts.master')
@section('title')  @lang('language.Add_Advertisement') @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/summernote/summernote.min.css')}}">
@endsection
@section('content')
@component('common-components.breadcrumb')
@slot('title')  @lang('language.Add_Advertisement') @endslot
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


                <form name="frm1" id="frm1" class="needs-validation" method="post" enctype="multipart/form-data"  action="{{route('advertisement.store')}}"  novalidate>
                 @csrf
					
                    <div class="form-group">
                        <label for="formrow-quest_name-input">@lang('language.Title')</label>
						<input type="text" class="form-control" name="title" id="title" placeholder="@lang('language.Title_placeholder')" value="{{old('title')}}" required>
                        <div class="invalid-feedback">
                            @lang('language.Title_validation');
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="formrow-quest_name-input">@lang('language.French_Title')</label>
						<input type="text" class="form-control" name="title_fr" id="title_fr" placeholder="@lang('language.frTitle_placeholder')" value="{{old('title_fr')}}" required>
                        <div class="invalid-feedback">
                            @lang('language.frDescription_validation');
                        </div>
                    </div>
                

                    <div id="req_input" class="form-group">
                        <label for="formrow-quest_name-input">Image</label>
                        <input type="file"  class="form-control images" name="image" id="images_0" required >
                            <div class="invalid-feedback">
                                @lang('language.Image'); 
                            </div><br>
                        <img id="image_main0" name="image_main0" class="image_main0" height="100" width="100" style="display:none" >
                        <span id="image0_error" style="color:#f46a6a;margin-top: 0.25rem;font-size: 80%;"></span>
                    </div>

                    <div class="form-group">
                        <label for="formrow-quest_name-input">@lang('language.Link')</label>
						<input type="text" class="form-control" name="link" id="link" placeholder=" @lang('language.Link_placeholder')" value="{{old('link')}}" required>
                            <div class="invalid-feedback">
                                @lang('language.Link_validation')
                            </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2" style="padding-top:1%;">
                            <div class="custom-control custom-checkbox">
                                @php $checked=""; @endphp
                                <input type="checkbox" name="status[]" class="custom-control-input"  id="invalidCheck" >
                                <label class="custom-control-label" for="invalidCheck">@lang('language.Active')</label>
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
                                   <a href="../advertisement" class="btn btn-danger">@lang('language.Cancel')</a>
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
<script src="{{ URL::asset('assets/libs/summernote/summernote.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/pages/form-editor.init.js')}}"></script>

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
   
           if(imgwidth < maxwidth && imgheight < maxheight){
   
           $("#image0_error").text("Please upload images of following dimension width/height(400*280).");
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
