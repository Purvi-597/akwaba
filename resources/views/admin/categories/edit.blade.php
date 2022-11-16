@extends('layouts.master')
@section('title')  @lang('language.Update_Categories') @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/select2/select2.min.css')}}">
<link href="{{ URL::asset('assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet"
    type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}">
@endsection
@section('content')
@component('common-components.breadcrumb')
@slot('title') @lang('language.Update_Categories') @endslot
@endcomponent
<style>
.form-control{
    color: #314667 !important;
}
.close_imge{
    position: absolute;
    margin-left: -3%;
    margin-top:1%;
    cursor: pointer;
}
.image_section{
    margin-bottom: 8px;
    display:inline-flex;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>
<div class="row">
    <div class="col-12">
        <form class="needs-validation" method="post" enctype="multipart/form-data" action="{{route('categories.update',$categories->id)}}" novalidate>
            @csrf
            <div class="card mb-2">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <form class="needs-validation" method="post" enctype="multipart/form-data" action="{{route('categories.update',$categories->id)}}" novalidate>
                    @csrf
                        <input type="hidden" value="{{ $categories->id }}" name="id" id="id">
                        <div class="form-group">
                            <label for="formrow-quest_name-input"> @lang('language.Name')</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="@lang('language.catName_placeholder')" value="{{$categories->name}}" required>
                            <div class="invalid-feedback">
                                @lang('language.Category_validation')
                             </div>
                        </div>

                        {{-- <div class="form-group">
                            <label for="formrow-quest_name-input"> @lang('language.frName')</label>
                            <input type="text" class="form-control" name="name_fr" id="name_fr" placeholder="@lang('language.catName_placeholder')" value="{{$categories->name_fr}}" required>
                            <div class="invalid-feedback">
                                @lang('language.Category_validation')
                             </div>
                        </div> --}}
                        <div class="form-group">
                            <label for="formrow-quest_name-input"> @lang('language.display_en')</label>
                                <input type="text" class="form-control" name="display_name" id="display_name" placeholder="Enter Category Display Name" value="{{$categories->display_name}}" required>
                            <div class="invalid-feedback">
                                @lang('language.cat_validation')
                            </div>
                        </div>
    
                        <div class="form-group">
                            <label for="formrow-quest_name-input"> @lang('language.display_fr')</label>
                                <input type="text" class="form-control" name="display_name_fr" id="display_name_fr" placeholder="@lang('language.display_placeholder')" value="{{$categories->display_name_fr}}" required>
                            <div class="invalid-feedback">
                                @lang('language.cat_validation')
                            </div>
                        </div>


                        
                    <div class="row">
                        <div id="req_input" class="form-group col-md-12">
                            <label for="formrow-quest_name-input"> Image <span style="color:red;">*</span></label>
                                <input type="file"  class="form-control images_0" name="image" id="images_0" ><br>
                                    <label id="lbl1" for="formrow-quest_name-input"><?php if(isset($categories->image)){ echo $categories->image; } ?></label><br>
                                        @if(!empty($categories->image))
                                            <img src='/uploads/categories/{{$categories->image}}' id="image_main0" name="image_main0" class="image_main0" height="38" width="29">
                                         @endif
                                        <img  id="image_main1" name="image_main1" class="image_main1" height="100" width="100" style="display:none;">
                                        <input type="hidden" name="old_image0" value="<?php if(isset($categories->image)){ echo $categories->image; } ?>">

                                        {{-- @if(!empty($categories->image))
                                             <br><br>
                                        &nbsp;&nbsp;<a href="javascript:void(0);" id="deleteimage" class="btn btn-danger" data-id="{{ $categories->id }}">Remove</a>
                                            @endif --}}
                                        <span id="image0_error"  style="color:red"></span>
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="custom-control custom-checkbox">
                            @php $checked=""; @endphp
                                @if($categories->status == 1)
                                    @php $checked="checked"; @endphp
                                @endif
                                <input type="checkbox" name="status" class="custom-control-input"  id="invalidCheck" {{$checked}}>
                                <label class="custom-control-label" for="invalidCheck" >@lang('language.Active')</label>
                                <div class="invalid-feedback">
                                    @lang('language.You must agree before Save.');
                                </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <button class="btn btn-success"  type="submit">@lang('language.Update')</button>
                                <a href="/admin/categories" class="btn btn-danger">@lang('language.Cancel')</a>
                            </div>
                        </div>
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
<script src="{{ URL::asset('assets/libs/select2/select2.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/pages/form-validation.init.js')}}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/pages/form-advanced.init.js')}}"></script>
<script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

<script>
        $(document).ready(function () {
var _URL = window.URL || window.webkitURL;
$(document).on('change','#images_0',function(e){
      $("#image_main0").css('display','none');
      $("#deleteimage").css('display','none');
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
    //   $("#lbl1").css('display','none');
    var imgwidth = 0;
        var imgheight = 0;
        var maxwidth = 29;
        var maxheight = 38;
        img = new Image();
        img.onload = function() {

        imgwidth = this.width;
        imgheight = this.height;

        if(imgwidth > maxwidth && imgheight > maxheight){

            $("#image0_error").text("@lang('language.image_size')");
        $("#image_main1").css("display", "none");
        $("#image_main1").attr('src','');
        $("#images_0").val("");
        }else{
  $("#image0_error").text("");
  $("#image_main1").css("display", "block");
  $('#image_main1').attr('src', img.src).height(38).width(29);
    }
 };

}
 img.src = _URL.createObjectURL(file);
}
});


             $("#profile_picture").change(function(){
         //submit the form here
         $("#presrciptionpreview").css('display','block');
          $("#deleteBtn").css("display", "block");

 });

    $("#deleteBtn").click(function(){
   $("#presrciptionpreview").css("display", "none");
   $("#deleteBtn").css("display", "none");
   $('#presrciptionpreview').attr('src', '');
   $('#profile_picture').css("display", "block");
 });

   });

$(document).on('click','#deleteimage',function(){
                var id = $(this).attr('data-id');

                 Swal.fire({
                      title: '@lang('language.Are You sure')',
                      text: "You want to delete this profile picture",
                      type: "warning",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#34BA8E',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Yes '
                    }).then((result) => {

                      if (result.value){

                          $.ajax({
                             type: "POST",
                             url: '{{route("userimagedelete")}}',
                             data: {'id': id, "_token": "{{ csrf_token() }}"},
                             success: function(data){
                                 if(data == "delete"){

                                 Swal.fire({
                                       title: "User",
                                       icon:"success",
                                       text: "Profile image updated successfully",
                                       type: "success"
                          }).then(function() {
                           history.go(0)
                             });

                            }else{

                                   Swal.fire({
                                       title: "User",
                                       icon:"error",
                                       text: "Something went wrong..",
                                       type: "error"
                          // }).then(function() {
                          //  history.go(0)
                             });

                            }


                        }

                    });

                      }else{


                      }
                  })
            })
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
                        if (height < 38 || width < 29) {

                           //show width and height to user
                            document.getElementById("width").innerHTML=width;
                            document.getElementById("height").innerHTML=height;
                            alert("Height and Width must not exceed 38 and 29 px");
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
