@extends('layouts.master')
@section('title') @lang('language.edit_photo') @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/summernote/summernote.min.css')}}">
@endsection
@section('content')
@component('common-components.breadcrumb')
@slot('title') @lang('language.edit_photo')  @endslot
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


            <form name="frm1" id="frm1" class="needs-validation" method="post" enctype="multipart/form-data" action="{{route('photos.update',$row->id)}}"   novalidate>
                 @csrf

                    <div class="form-group">
                        <label for="formrow-quest_name-input">@lang('language.photo_title_english') <span style="color:red;">*</span></label>
						<input type="text" class="form-control" name="title" id="title" placeholder="@lang('language.placeholder_title_english')" value="{{$row->title}}" required>
                        <div class="invalid-feedback">
                            @lang('language.validation_title_english')
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="formrow-quest_name-input">@lang('language.photo_title_french') <span style="color:red;">*</span></label>
						<input type="text" class="form-control" name="title_fr" id="title_fr" placeholder="@lang('language.placeholder_title_french')" value="{{$row->title_fr}}" required>
                        <div class="invalid-feedback">
                            @lang('language.validation_title_french')
                        </div>
                    </div>

                    <div class="form-group" id="place_name_div" >
                        <label for="formrow-quest_name-input">@lang('language.photo_address') <span style="color:red;">*</span></label>
                        <select class="js-example-basic-single form-control" name="address" id="address">
                            <option value="" disabled>@lang("language.placeholder_address")</option>
                        @foreach($place_name as $place_name)
                        @php $lat = json_decode($place_name->geojson_data)->coordinates[0];
                             $long = json_decode($place_name->geojson_data)->coordinates[1];
                        @endphp

                            <option value="{{$place_name->name}}"  <?php if($place_name->name == $row->address){
                                echo "selected";
                            }else{
                                echo "";
                            } ?> data-latitude="{{ $lat }}" data-longtitude="{{ $long }}"

                                >{{$place_name->name}}</option>
                        @endforeach
                        </select>
                        <div class="invalid-feedback">
                            @lang('language.validation_address')
                        </div>
                    </div>


                    <div class="row">
                        <div id="req_input" class="form-group col-md-12">
                          <label for="formrow-quest_name-input"> Image <span style="color:red;">*</span></label>
                                <input type="file"  class="form-control images_0" name="image" id="images_0" ><br>
                                   <label id="lbl1" for="formrow-quest_name-input"><?php if(isset($row->image)){ echo $row->image; } ?></label><br>
                                          @if(!empty($row->image))
                                  <img src='/uploads/photos/{{$row->image}}' id="image_main0" name="image_main0" class="image_main0" height="30" width="30">
                                   @endif
                                   <img  id="image_main1" name="image_main1" class="image_main1" height="30" width="30" style="display:none;">
                               <input type="hidden" name="old_image0" value="<?php if(isset($row->image)){ echo $row->image; } ?>">
                             <span id="image0_error"  style="color:red"></span>
                       </div>
                   </div>

                    <input type="hidden" name="latitude" id="latitude">
                    <input type="hidden" name="longtitude" id="longtitude">

                    <input type="hidden" name="old_latitude" id="old_latitude" value="{{ $row->latitude }}">
                    <input type="hidden" name="old_longtitude" id="old_longtitude" value="{{ $row->longtitude }}">

                    <div class="form-group ">
                        <div class="custom-control custom-checkbox">
                                @php $checked=""; @endphp
                            @if($row->status == 1)
                                @php $checked="checked"; @endphp
                            @endif
                            <input type="checkbox" name="status" class="custom-control-input"  id="invalidCheck" {{$checked}}>
                            <label class="custom-control-label" for="invalidCheck" >@lang('language.Active')</label>
                            <div class="invalid-feedback">
                                @lang('language.You must agree before Save.')
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <button class="btn btn-success" type="submit" id="save">@lang('language.Save')</button>
                            <a href="../" class="btn btn-danger">@lang('language.Cancel')</a>
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
        $("#image_main0").css('display','none');
        $("#image_main1").css('display','block');
        var file, img;

        let name = e.target.files[0].name;
        if ((file = this.files[0])) {
        var ext = name.split('.').pop().toLowerCase();

        if($.inArray(ext, ['png','jpg','jpeg']) == -1) {
            $("#image0_error").text("@lang('language.image_format')");
            $("#images_0").val("");
            $("#images_0").val(null);
            $("#image_main1").attr('src','');
            $("#image_main1").css('display','none');
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
            $("#image_main1").css("display", "none");
            $("#images_0").val("");
           }else{
            $("#lbl1").css('display','none');
          
            $("#image0_error").text("");
            $("#image_main1").css("display", "block");
            $('#image_main1').attr('src', img.src).height(30).width(30);
               
            };
        }
            img.src = _URL.createObjectURL(file);
        }
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
