@extends('layouts.master-without-nav')

@section('title')
Reset Password
@endsection
<style>

.form-control{
    color: #314667 !important;
}

</style>
@section('body')

<body style="background:#314667;">
    @endsection

    @section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                         @if ($notification = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $notification }}</strong>
                        </div>
                    @endif
                    @if ($notification = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $notification }}</strong>
                        </div>
                    @endif
                        <div class="card-body pt-0"  style="color: white;">

                            <div class="p-1 text-center">
                                 <img src="{{ URL::asset('assets/images/img/worklink_logo_main_done.png')}}" height="60px;" alt="" style="margin-top:20px;" > 

                                <h3 style="margin-top:40px;color: white;">Reset password</h3>
                            </div>
                            <div class="p-2" style="margin-top:-18px;">
                                <form class="needs-validation" method="POST" action="{{route('forgotpasswordupdate_api')}}" id="passwordform" novalidate>
                                    @csrf

                                    <input type="hidden" name="email" value="{{$user->email}}">
                                    <div class="form-group">
                                        <label for="password" style="color:black;">Password</label>
                                        <input type="password" minlength="6"  oninput="validate()" name="password" id="password" class="form-control" required  onchange="validatePassword();">
                                           <div class="invalid-feedback" style="font-weight: bolder;color: #f46a6a;font-size: 12px;">
                                                Please provide a new password and password length should be greater than 6 character.
                                           </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="confirmpassword" style="color:black;">Confirm Password</label>
                                       <input type="password"  oninput="validate()" name="confirmpassword" id="confirmpassword" class="form-control" required onchange="validatePassword();">
                                        <div class="invalid-feedback" style="font-weight: bolder;color: #f46a6a;font-size: 12px;">
                                              Please provide a confirm password 
                                           </div>
                                       <div  style="font-weight: bolder;color: #f46a6a;font-size: 12px;" id="CheckPasswordMatch"></div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-12 text-right">
                                            <input type="submit" id="submit" name="submit" class="btn btn-warning w-md waves-effect waves-light" value="Reset Password"  >
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
   @endsection
@section('script')
<script src="{{ URL::asset('assets/libs/parsleyjs/parsleyjs.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/pages/form-validation.init.js')}}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/pages/form-advanced.init.js')}}"></script>
<script src="{{ URL::asset('assets/libs/tinymce/tinymce.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/summernote/summernote.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/pages/form-editor.init.js')}}"></script>


<script type="text/javascript">

    

    // function validate() {
                //    var password = document.getElementById("password").value;
                //    var confirmpassword = document.getElementById("confirmpassword").value;
    //                   if(password.length != ""){
                //    if(password == confirmpassword)
                //    {    
    //                     if(confirmpassword != "" && password != ""){
                //       document.getElementById("CheckPasswordMatch").style.color = "green";
                //       document.getElementById("CheckPasswordMatch").innerHTML = "Passwords Matching";
                //        document.getElementById("submit").disabled = false;
    //                     }
                //    }
                //    else
                //    {    
    //                     if(confirmpassword != "" && password != ""){
                //       document.getElementById("CheckPasswordMatch").style.color = "#f46a6a";
                //       document.getElementById("CheckPasswordMatch").innerHTML = "Passwords are not matching";
                //       document.getElementById("submit").disabled = true;
    //                     }
                //    }
    //                 }
                //  }


        $(document).on('change','#confirmpassword', function(){
        var conpasswd = $(this).val();
        var passwd = $("#password").val();
        if(conpasswd.lenth == null){
                  $("#CheckPasswordMatch").text("");
        }
        if(passwd != conpasswd){
            $("#CheckPasswordMatch").text("Password and Confirm Password fields are not matching");   
            $("#confirm_password").val('');
             $("#submit").attr("disabled", true);
             $("#submit").css("pointer-events","none");
        }else{
            $("#CheckPasswordMatch").text('');
             $("#submit").removeAttr("disabled");
              $("#submit").css("pointer-events","auto");
        }
    })


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
</script>
@endsection
