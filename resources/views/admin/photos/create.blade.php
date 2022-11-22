@extends('layouts.master')
@section('title') @lang("language.add_photo") @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/summernote/summernote.min.css')}}">
@endsection
@section('content')
@component('common-components.breadcrumb')
@slot('title') @lang("language.add_photo")  @endslot
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


            <form name="frm1" id="frm1" class="needs-validation" method="post" enctype="multipart/form-data" action="{{route('photos.store')}}"   novalidate>
                 @csrf

                    <div class="form-group">
                        <label for="formrow-quest_name-input"> @lang('language.photo_title_english')</label>
						<input type="text" class="form-control" name="title" id="title" placeholder="@lang('language.placeholder_title_english')" value="{{old('title')}}" required>
                        <div class="invalid-feedback">
                            @lang('language.validation_title_english')
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="formrow-quest_name-input"> @lang('language.photo_title_french')</label>
						<input type="text" class="form-control" name="title_fr" id="title_fr" placeholder="@lang('language.placeholder_title_french')" value="{{old('title_fr')}}" required>
                        <div class="invalid-feedback">
                            @lang('language.validation_title_french')
                        </div>
                    </div>


                    <div class="form-group" id="place_name_div" >
                        <label for="formrow-quest_name-input">@lang('language.photo_address')</label>
                        <select class="js-example-basic-single form-control" name="address" id="address" required>
                            <option value="" disabled selected>@lang("language.placeholder_address")</option>
                        @foreach($place_name as $place_name)
                        @php $lat = json_decode($place_name->geojson_data)->coordinates[0];
                             $long = json_decode($place_name->geojson_data)->coordinates[1];
                        @endphp

                            <option value="{{$place_name->name}}" data-latitude="{{ $lat }}" data-longtitude="{{ $long }}">{{$place_name->name}}</option>
                        @endforeach
                        </select>
                        <div class="invalid-feedback">
                            @lang('language.validation_address')
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

                    <input type="hidden" name="latitude" id="latitude">
                    <input type="hidden" name="longtitude" id="longtitude">

                    <div class="col-md-2" style="padding-top:1%;">
                        <div class="form-group ">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="status" class="custom-control-input" id="invalidCheck" >
                                <label class="custom-control-label" for="invalidCheck" >@lang('language.Active')</label>
                                <div class="invalid-feedback">
                                    @lang('language.checkbox_msg')
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <button class="btn btn-success" type="submit" id="save">@lang('language.Save')</button>
                            <a href="../feature" class="btn btn-danger">@lang('language.Cancel')</a>
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

<script src="{{ URL::asset('assets/js/pages/form-validation.init.js')}}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/pages/form-advanced.init.js')}}"></script>
<script>
    var _URL = window.URL || window.webkitURL;
   $(document).on('change','#images_0',function(e){
    var file, img;

    let name = e.target.files[0].name;
   if ((file = this.files[0])) {
     var ext = name.split('.').pop().toLowerCase();

     if($.inArray(ext, ['png','jpg','jpeg','svg']) == -1) {
     $("#image0_error").text("@lang('language.image_format')')");
     $("#images_0").val("");
     $("#images_0").val(null);
       $("#image_main0").attr('src','');
         $("#image_main0").css('display','none');

     }else{

           var imgwidth = 0;
           var imgheight = 0;
           var maxwidth = 30;
           var maxheight = 30;
           img = new Image();
           img.onload = function() {

           imgwidth = this.width;
           imgheight = this.height;

           if(imgwidth > maxwidth && imgheight > maxheight){

           $("#image0_error").text("@lang('language.photo_image_format')");
           $("#image_main0").css("display", "none");
           $("#image_main0").attr('src','');
           $("#images_0").val("");
           }else{
           $("#image0_error").text("");
           $("#image_main0").css("display", "block");
           $('#image_main0').attr('src', img.src).height(30).width(30);
               }
           }
       };
           img.src = _URL.createObjectURL(file);
   }
   });
   $(document).ready(function(){
    $("#address").select2();

    $("#address").change(function(){
        var latitude = $(this).find(':selected').data('latitude');
        var longtitude = $(this).find(':selected').data('longtitude');
       $("#latitude").val(latitude);
       $("#longtitude").val(longtitude);
    });

   });
   </script>

@endsection
