@extends('layouts.master')
@section('title') @lang('language.Update_user') @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/select2/select2.min.css')}}">
<link href="{{ URL::asset('assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet"
    type="text/css">
<link rel="stylesheet" href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}">
@endsection
@section('content')
@component('common-components.breadcrumb')
@slot('title')@lang('language.Update_user') @endslot
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
        <form class="needs-validation" method="post" enctype="multipart/form-data" action="{{route('users.update',$users->id)}}" novalidate>
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
        <?php 
        // echo "<pre>";
        //     print_r($users);die;
        
        ?>
             <form class="needs-validation" method="post" enctype="multipart/form-data" action="{{route('users.update',$users->id)}}" novalidate>
                @csrf

                <input type="hidden" value="{{ $users->id }}" name="id" id="id">

                    <div class="form-group">
                        <label for="formrow-quest_name-input">@lang('language.First_Name')</label>
                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="@lang('language.fName_placeholder')" value="{{$users->first_name}}" required>
                        <div class="invalid-feedback">
                            @lang('language.Please provide a first name.')
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="formrow-quest_name-input">@lang('language.Last_Name')</label>
                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="@lang('language.lName_placehoder')" value="{{$users->last_name}}" required>
                        <div class="invalid-feedback">
                            @lang('language.Please provide a Last name.')'
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="formrow-quest_name-input">@lang('language.Email')</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="@lang('language.Email_placeholder')" value="{{$users->email}}" required>
                        <div class="invalid-feedback">
                            @lang('language.Please provide a email.')
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="formrow-quest_name-input">@lang('language.Phone_No')</label>
                        <input type="number" class="form-control" name="contact_no" id="contact_no" placeholder="@lang('language.Phone_placeholder')" value="{{$users->contact_no}}" required>
                        <div class="invalid-feedback">
                            @lang('language.Please provide a email.')
                        </div>
                    </div>


                    {{-- <div class="row">
                        <div id="req_input" class="form-group col-md-12">
                        <label for="formrow-quest_name-input">@lang('language.Profile_Image') <span style="color:red;">*</span></label>

                                <input type="file"  class="form-control images_0" name="profile_pic" id="profile_pic" ><br>
                                    <label id="lbl1" for="formrow-quest_name-input"><?php if(isset($users->profile_pic)){ echo $users->profile_pic; } ?></label><br>
                                        @if(!empty($users->profile_pic))
                                <img src='/uploads/users/{{$users->profile_pic}}' id="image_main0" name="image_main0" class="image_main0" height="100" width="100">
                                    @endif
                                    <img  id="image_main1" name="image_main1" class="image_main1" height="200" width="250" style="display:none;">
                                <input type="hidden" name="old_image0" value="<?php if(isset($users->profile_pic)){ echo $users->profile_pic; } ?>">

                                     @if(!empty($users->profile_pic))
                                    <br><br>
                                    &nbsp;&nbsp;<a href="javascript:void(0);" id="deleteimage" class="btn btn-danger" data-id="{{ $users->id }}">Remove</a>
                                    @endif
                            <span id="image0_error"  style="color:red"></span>
                        </div>
                    </div> --}}

                    <div class="form-group">
                        <label for="formrow-quest_name-input">@lang('language.Home_Address')</label>
<<<<<<< HEAD
                        <input type="text" class="form-control" name="home_address" id="home_address" placeholder="@lang('language.HAddress_placeholder')" value="{{$users->home_address}}" >
                        {{-- <div class="invalid-feedback">
=======
                        <input type="text" class="form-control" name="home_address" id="home_address" placeholder=" @lang('language.HAddress_placeholder')" value="{{$users->home_address}}" >
                        <div class="invalid-feedback">
>>>>>>> 39d9f2bb85a4b2f396fe243e601b55b6c5e31db2
                            @lang('language.Please provide a Home Address.')
                        </div> --}}
                    </div>

                    <div class="form-group">
                        <label for="formrow-quest_name-input">@lang('language.Work_Address')</label>
<<<<<<< HEAD
                        <input type="text" class="form-control" name="work_address" id="work_address" placeholder="@lang('language.WAddress_placeholder')"value="{{$users->work_address}}">
=======
                        <input type="text" class="form-control" name="work_address" id="work_address" placeholder=" @lang('language.WAddress_placeholder')" value="{{$users->work_address}}">
>>>>>>> 39d9f2bb85a4b2f396fe243e601b55b6c5e31db2
                        {{-- <div class="invalid-feedback">
                            Please provide a Work Address.
                        </div> --}}
                    </div>
                    

                    <div class="form-group">
                        <label for="formrow-quest_name-input">Car_detail</label>

                      
                    <div class="form-group">
                        <label for="formrow-quest_name-input">Make</label>
                    {{-- <?php
                        echo "<pre>";
                            print_r($cars);
                            print_r($car_make);
                    ?> --}}
                        <select class="form-control" name="id" id= "make_id">
                                <option >select Make</option>  
                                @foreach($car_make as $car_make)
                                    <option value="{{$car_make->id}}" {{$cars->id == $car_make->id ? 'selected': ''}}>{{$car_make->code}}</option>
                                
                                @endforeach   
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="formrow-quest_name-input">Model</label>
                        <select class="form-control" name="model_id" id= "model_id">
                                 
                               @foreach ($model as $model)
                               <option value="{{$model->id}}" {{$cars->id == $model->code ? 'selected': ''}}>{{$model->code}}</option> 
                               @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="formrow-quest_name-input">Fuel</label>
                        <select class="form-control" name="id" id= "id">
                            <option >select Fuel</option>  
                            @foreach($fuels as $key=> $fuels)
                                <option value="{{$key}}" {{$key == $users->car_fuel ? 'selected': ''}}>{{$fuels}}</option>
                            @endforeach   
                    </select>
                    </div>

                    <div class="form-group">
                        <label for="formrow-quest_name-input">Transmission</label>
                        <select class="form-control" name="id" id= "id">
                            <option >Select Transmission</option>  
                            @foreach($transmission as $key=> $transmission)
                                <option value="{{$key}}" {{$key == $users->car_transmission ? 'selected': ''}}>{{$transmission}}</option>
                            @endforeach   
                    </select>
                    </div>

                    <div class="form-group">
                        <label for="formrow-quest_name-input">Year</label>
                        <select class="form-control" name="id" id= "id">
                            <option >Select Year</option>  
                            @foreach($yearsRange as $yearsRange)
                                <option value="" {{$users->car_year ? 'selected': ''}}>{{$yearsRange}}</option>
                            @endforeach   
                    </select>
                    </div>
                </div>


<<<<<<< HEAD
=======


                         <div class="form-group"></div>
>>>>>>> 39d9f2bb85a4b2f396fe243e601b55b6c5e31db2
                        <div class="form-group ">
                            <div class="custom-control custom-checkbox">
                                  @php $checked=""; @endphp
                                @if($users->status == 1)
                                    @php $checked="checked"; @endphp
                                @endif
                                <input type="checkbox" name="status" class="custom-control-input"  id="invalidCheck" {{$checked}}>
                                <label class="custom-control-label" for="invalidCheck" >@lang('language.Active')</label>
                                {{-- <div class="invalid-feedback">
                                    @lang('language.You must agree before Save.')'
                                </div> --}}
                            </div>

                        </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <button class="btn btn-success"  type="submit">@lang('language.Update')</button>
                            <a href="/admin/users" class="btn btn-danger">@lang('language.Cancel')</a>
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
<<<<<<< HEAD
        var _URL = window.URL || window.webkitURL;
=======


                var _URL = window.URL || window.webkitURL;
>>>>>>> 39d9f2bb85a4b2f396fe243e601b55b6c5e31db2
$(document).on('change','#images_0',function(e){
      $("#image_main0").css('display','none');
      $("#deleteimage").css('display','none');
    $("#image_main1").css('display','block');
 var file, img;

 let name = e.target.files[0].name;
if ((file = this.files[0])) {
  var ext = name.split('.').pop().toLowerCase();

  if($.inArray(ext, ['png','jpg','jpeg','jfif','svg']) == -1) {
  $("#image0_error").text("@lang('language.image_format')");
  $("#images_0").val("");
  $("#images_0").val(null);
    $("#image_main1").attr('src','');
      $("#image_main1").css('display','none');
  }else{
      $("#lbl1").css('display','none');
 img = new Image();
 img.onload = function() {
  $("#image0_error").text("");
  $("#image_main1").css("display", "block");
  $('#image_main1').attr('src', img.src).height(150);
    }
 };
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
                      text: "@lang('language.You want to delete this profile picture')",
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

<<<<<<< HEAD

<script>
    $('#make_id').on('change', function () {
  
                var make_id = this.value;
              
                $("#model_id").html('');
                $.ajax({
                    url: '{{route("fetchmodelbymakeid")}}',
                    type: "POST",
                    data: {
                        "make_id": make_id,
                       "_token": "{{ csrf_token() }}"
                    },
                    dataType: 'json',
                    success: function (result) {
                      
                        console.log(result)
                        $('#model_id').html('<option value="">Select Model</option>');
                        $.each(result.car_model, function (key, value) {
                            $("#model_id").append('<option value="' + value
                                .id + '">' + value.title + '</option>');
                        });
                    }
                });
            });
</script>

@endsection
=======
@endsection
>>>>>>> 39d9f2bb85a4b2f396fe243e601b55b6c5e31db2
