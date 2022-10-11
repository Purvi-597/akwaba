 @extends('layouts.master')
@section('title')  Add User @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/summernote/summernote.min.css')}}">
@endsection
@section('content')
@component('common-components.breadcrumb')
@slot('title') Add User @endslot
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


            <form name="frm1" id="frm1" class="needs-validation" method="post" enctype="multipart/form-data" action="{{route('users.store')}}" novalidate>
                 @csrf
					
                    <div class="form-group">
                        <label for="formrow-quest_name-input">Name</label>
						<input type="text" class="form-control" name="name" id="name" placeholder="Enter First Name" value="{{old('name')}}" required>
                        <div class="invalid-feedback">
                            Please provide a first name.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="formrow-quest_name-input">Email</label>
						<input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" value="{{old('email')}}"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                        <div class="invalid-feedback">
                            Please provide a email.
                        </div>
                 <div class="emailcheckerror" style="display: none; color:#f46a6a;margin-top: 0.25rem;font-size: 80%;">
                        Email Is Already Exists
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="formrow-quest_name-input">Phone No</label>
                        <input type="number" class="form-control" name="phoneno" id="phoneno" placeholder="Enter Phone Number" value="{{old('phoneno')}}" required>
                        <div class="invalid-feedback">
                            Please provide a phone no.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="formrow-quest_name-input">Password</label>
						<input type="password" class="form-control" name="password" id="password" placeholder="Enter password" value="{{old('password')}}"  required>
                        <div class="invalid-feedback">
                            Please provide a Valid password.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="formrow-quest_name-input">Confirm Password</label>
						<input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Enter Confirm Password" value="{{old('confirmpassword')}}" required data-parsley-equalto="#password">
                        <div class="invalid-feedback">
                            Please provide a confirm password.
                        </div>
                        <span id="passwordcheck" style="color:red;color:#f46a6a;margin-top: 0.25rem;font-size: 80%;"></span>
                    </div> 

                         <div id="req_input" class="form-group">
                        <label for="formrow-quest_name-input">profile Image</label>
                        <input type="file"  class="form-control images" name="images0" id="images_0" >
                            <div class="invalid-feedback">
                                   Please select Image
                            </div><br>
                        <img id="image_main0" name="image_main0" class="image_main0" height="100" width="200" style="display:none" >
                    <span id="image0_error" style="color:#f46a6a;margin-top: 0.25rem;font-size: 80%;"></span>
                </div>
                       
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <button class="btn btn-success" type="submit" id="save">Save</button>
                        <a href="../users" class="btn btn-danger">Cancel</a>
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

  if($.inArray(ext, ['png','jpg','jpeg','jfif','svg']) == -1) {
  $("#image0_error").text("Please upload images of following formats(*png,jpeg,jpg,jfif,svg).");
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
        

    $("#password").keypress(function(e) {

       if (e.which === 32 && !this.value.length) {
           e.preventDefault();
       }

   });    

    $("#confirmpassword").keypress(function(e) {

       if (e.which === 32 && !this.value.length) {
           e.preventDefault();
       }


    });
 $("#email").keyup(function() {
            var email = $('#email').val();
            $.ajax({
            type: "POST",
            url: '{{route("checkuseremail")}}',
            data: {'email': email,"_token": "{{ csrf_token() }}"},
            success: function(data){
                
               if(data == 1){
               
                $(".emailcheckerror").css("display", "block");
                $("#save").attr("disabled", true);

               }
               else{
                $("#save").attr("disabled", false);
                 $(".emailcheckerror").css("display", "none");
               }
                }
            })

        });
            $("#profile_image").change(function(){
       
         $('#image1').css('display','block');
        });
        });

            $(document).on('change','#password', function(){
        var conpasswd = $(this).val();
        var passwd = $("#confirmpassword").val();
        if(conpasswd.lenth == null){
                  $("#passwordcheck").text("");
        }
        if(passwd != conpasswd){
            $("#passwordcheck").text("Password and Confirm Password fields are not matching");
             $("#save").attr("disabled", true);
             $("#save").css("pointer-events","none");
        }else{
            $("#passwordcheck").text('');
             $("#save").removeAttr("disabled");
              $("#save").css("pointer-events","auto");
        }
    })



    $(document).on('change','#confirmpassword', function(){
        var conpasswd = $(this).val();
        var passwd = $("#password").val();
        if(conpasswd.lenth == null || conpasswd.lenth == ""){
                  $("#passwordcheck").text("");
        }
        if(passwd != conpasswd){
            $("#passwordcheck").text("Password and Confirm Password fields are not matching");
             $("#save").attr("disabled", true);
             $("#save").css("pointer-events","none");
        }else{
            $("#passwordcheck").text('');
             $("#save").removeAttr("disabled");
              $("#save").css("pointer-events","auto");
        }
    })

// function checkPasswordMatch() {
//     var password = $("#password").val();
//     var confirmPassword = $("#confirm_password").val();

//    if(password == "" && confirmPassword == ""){
//          $(".divCheckPasswordMatch").html("");
//      }else{
//     if (password != confirmPassword){
//         $(".divCheckPasswordMatch").html("Passwords do not match!");
//         $("#save").attr("disabled", true);
// }else{
//         $(".divCheckPasswordMatch").html("");
//          $("#save").attr("disabled", false);
//     }
//    }

// }

//         $(document).ready(function () {
//         (".divCheckPasswordMatch").html("");
//             $("#confirm_password").keyup(checkPasswordMatch);






//});
    </script>

@endsection
