@extends('layouts.master')
@section('title') @lang('language.Add_place') @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/summernote/summernote.min.css')}}">
@endsection
@section('content')
@component('common-components.breadcrumb')
@slot('title') @lang('language.Add_place')@endslot
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
                <form name="frm1" id="frm1" class="needs-validation" method="post" enctype="multipart/form-data" action="{{route('place_advertisement.store')}}" novalidate>
                 @csrf
                    <div class="form-group">
                        <label for="formrow-quest_name-input">@lang('language.Place_Title')</label>
						<input type="text" class="form-control" name="place_title" id="place_title" placeholder="@lang('language.Title_placeholder')" value="{{old('link')}}" required>
                        <div class="invalid-feedback">
                            @lang('language.Title_validation')
                        </div>
                    </div>
                    <div id="req_input" class="form-group">
                        <label for="formrow-quest_name-input">Image</label>
                        <input type="file"  class="form-control images" name="image" id="images_0" required >
                            <div class="invalid-feedback">
                                   @lang('language.Please select Image')
                            </div><br>
                        <img id="image_main0" name="image_main0" class="image_main0" height="100" width="100" style="display:none" >
                        <span id="image0_error" style="color:#f46a6a;margin-top: 0.25rem;font-size: 80%;"></span>
                    </div>
                    <div class="form-group">
                        <label for="formrow-quest_name-input" required>@lang('language.Type')</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" id="POI" value="POI">
                            <label class="form-check-label" for="POI">
                               @lang('language.POI')
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" id="External" value="External">
                            <label class="form-check-label" for="External">
                                @lang('language.External')
                            </label>
                        </div>
                        <div class="invalid-feedback">
                            @lang('language.select')
                        </div>
                    </div>
                    <div class="form-group" id="external" style="display:none;">
                        <label for="formrow-quest_name-input">@lang('language.Link')</label>
						<input type="text" class="form-control" name="link" id="link" placeholder="@lang('language.Enter Link')" value="{{old('link')}}">
                        <div class="invalid-feedback">
                            @lang('language.Please provide a Link.')
                        </div>
                    </div>
                    <div class="form-group" id="place_name_div" style="display:none;">
                        <label for="formrow-quest_name-input">@lang('language.Place_Name')</label>
                        <select class="js-example-basic-single form-control" name="place_name" id="place_name">
                        @foreach($place_name as $place_name)
                            <option value="{{$place_name->osm_id}}">{{$place_name->name}}</option>
                        @endforeach
                        </select>
                        <div class="invalid-feedback">
                            @lang('language.Please provide a place name.')'
                        </div>
                    </div>

                <div class="col-md-2" style="padding-top:1%;">
                    <div class="form-group ">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="status" class="custom-control-input" value="1" id="invalidCheck" checked>
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
                        <a href="../place_advertisement" class="btn btn-danger">@lang('language.Cancel')</a>
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
    img = new Image();
    img.onload = function() {
        $("#image0_error").text("");
        $("#image_main0").css("display", "block");
        $('#image_main0').attr('src', img.src).height(150);
    }
 };
 img.src = _URL.createObjectURL(file);
}
});
</script>

<script>
    $(document).ready(function () {
        $("#place_name").select2();
        $("#profile_image").change(function(){
            $('#image1').css('display','block');
        });
        $('input[type=radio][name=type]').change(function() {
            if (this.value == 'POI') {
                $('#place_name_div').show();
                $('#external').hide();
            }
            else if (this.value == 'External') {
                $('#place_name_div').hide();
                $('#external').show();
            }
        });
    });
</script>


<script type="text/javascript">
    function CheckDimension() {
        //Get reference of File.
        var fileUpload = document.getElementById("file");
     
        //Check whether the file is valid Image.
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(.jpg|.png|.gif)$");
        if (regex.test(fileUpload.value.toLowerCase())) {
     
            //Check whether HTML5 is supported.
            if (typeof (fileUpload.files) != "undefined") {
                //Initiate the FileReader object.
                var reader = new FileReader();
                //Read the contents of Image File.
                reader.readAsDataURL(fileUpload.files[0]);
                reader.onload = function (e) {
                    //Initiate the JavaScript Image object.
                    var image = new Image();
     
                    //Set the Base64 string return from FileReader as source.
                    image.src = e.target.result;
                           
                    //Validate the File Height and Width.
                    image.onload = function () {
                        var height = this.height;
                        var width = this.width;
                        if (height > 200 || width > 200) {
     
                           //show width and height to user
                            document.getElementById("width").innerHTML=width;
                            document.getElementById("height").innerHTML=height;
                            alert("Height and Width must not exceed 200px.");
                            return false;
                        }
                        alert("Uploaded image has valid Height and Width.");
                        return true;
                    };
     
                }
            } else {
                alert("This browser does not support HTML5.");
                return false;
            }
        } else {
            alert("Please select a valid Image file.");
            return false;
        }
    }
    </script>
@endsection
