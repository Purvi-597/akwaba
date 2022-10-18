@extends('layouts.master')
@section('title')  Update User @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/select2/select2.min.css')}}">
<link href="{{ URL::asset('assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet"
    type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}">
@endsection
@section('content')
@component('common-components.breadcrumb')
@slot('title') Update User @endslot
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
             <form class="needs-validation" method="post" enctype="multipart/form-data" action="{{route('users.update',$users->id)}}" novalidate>
                @csrf
                
                <input type="hidden" value="{{ $users->id }}" name="id" id="id">
            
                    <div class="form-group">
                        <label for="formrow-quest_name-input">First Name</label>
                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter  Name" value="{{$users->first_name}}" required>
                        <div class="invalid-feedback">
                            Please provide a first name.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="formrow-quest_name-input">First Name</label>
                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter  Name" value="{{$users->last_name}}" required>
                        <div class="invalid-feedback">
                            Please provide a first name.
                        </div>
                    </div>

                    
                    
                    <div class="form-group">
                        <label for="formrow-quest_name-input">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" value="{{$users->email}}" required>
                        <div class="invalid-feedback">
                            Please provide a email.
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label for="formrow-quest_name-input">Phone No</label>
                        <input type="number" class="form-control" name="contact_no" id="contact_no" placeholder="Enter Phone Number" value="{{$users->contact_no}}" required>
                        <div class="invalid-feedback">
                            Please provide a phone no.
                        </div>
                    </div>
                    
                        
                    <div class="row">
                        <div id="req_input" class="form-group col-md-12">
                        <label for="formrow-quest_name-input">profile Image <span style="color:red;">*</span></label>
                            
                                <input type="file"  class="form-control images_0" name="profile_pic" id="profile_pic" ><br>
                                    <label id="lbl1" for="formrow-quest_name-input"><?php if(isset($users->profile_pic)){ echo $users->profile_pic; } ?></label><br>
                                        @if(!empty($users->profile_pic))
                                <img src='/uploads/users/{{$users->profile_pic}}' id="image_main0" name="image_main0" class="image_main0" height="200" width="250">
                                    @endif
                                    <img  id="image_main1" name="image_main1" class="image_main1" height="200" width="250" style="display:none;">
                                <input type="hidden" name="old_image0" value="<?php if(isset($users->profile_pic)){ echo $users->profile_pic; } ?>">
                                
                                    @if(!empty($users->profile_pic))
                                    <br><br>
                                    &nbsp;&nbsp;<a href="javascript:void(0);" id="deleteimage" class="btn btn-danger" data-id="{{ $users->id }}">Remove</a>
                                    @endif
                            <span id="image0_error"  style="color:red"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="formrow-quest_name-input">Home Address</label>
                        <input type="text" class="form-control" name="home_address" id="home_address" placeholder="Enter Email" value="{{$users->home_address}}" >
                        <div class="invalid-feedback">
                            Please provide a Home Address.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="formrow-quest_name-input">Work Address</label>
                        <input type="text" class="form-control" name="work_address" id="work_address" placeholder="Enter Email" value="{{$users->work_address}}">
                        {{-- <div class="invalid-feedback">
                            Please provide a Work Address.
                        </div> --}}
                    </div>

               
                         <div class="form-group"></div>
                        <div class="form-group ">
                            <div class="custom-control custom-checkbox">
                                  @php $checked=""; @endphp
                                @if($users->status == 1)
                                    @php $checked="checked"; @endphp
                                @endif
                                <input type="checkbox" name="status" class="custom-control-input"  id="invalidCheck" {{$checked}}>
                                <label class="custom-control-label" for="invalidCheck" >Active</label>
                                <div class="invalid-feedback">
                                    You must agree before Save.
                                </div>
                            </div>

                        </div>
                    
                        
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <button class="btn btn-success"  type="submit">Update</button>
                            <a href="/admin/users" class="btn btn-danger">Cancel</a>
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

  if($.inArray(ext, ['png','jpg','jpeg','jfif','svg']) == -1) {
  $("#image0_error").text("Please upload images of following formats(*png,jpeg,jpg,jfif,svg).");
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
                      title: 'Are You sure',
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

@endsection