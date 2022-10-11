@extends('layouts.master-without-nav')

@section('title')
Reset Password
@endsection
@section('css')
<style>
body,
html {
    height: 100%;
}

body {
    position: relative;
}

.account-pages {
    transform: translate(-50%, -50%);
    position: absolute;
    a;
    top: 50%;
    left: 50%;
    width: 100%;
    margin: 0 !important;
}
</style>
<style>

.form-control{
    color: #314667 !important;
}

</style>
@endsection
@section('body')

<body  style="background-color:#f2f7f8;">
    @endsection

    @section('content')

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="login_logo">


            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-6">
                 
                    <div class="card overflow-hidden" >
                                

                   @if ($notification = Session::get('error'))
                        <div class="alert alert-danger alert-block" style="margin-bottom: 0rem;">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $notification }}</strong>
                        </div>
                    @endif
                    @if ($notification = Session::get('success'))
                        <div class="alert alert-success alert-block" style="margin-bottom: 0rem;">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $notification }}</strong>
                        </div>
                    @endif


                        <div class="card-body pt-4" style="background:#314667">


                           
                            <div class="p-1 text-center">
                                     <img src="{{url('/images/img/logo_p.png')}}" height="100px" width="140px">
                  <!--               <h3 style="margin-top:40px;">Reset password</h3> -->
                            </div>


                            <div class="p-2" style="margin-top:-10px;">
                                    <form  novalidate class="needs-validation" method="POST" action="{{route('send_mail')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email" style="color:white;">Email</label>
                                        <input name="email" type="email"  pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" class="form-control"  required id="username" placeholder="Enter Email Id">
                                          <div class="invalid-feedback" style="font-weight: bolder;color: #f46a6a;font-size: 80%;">
                                            Please provide an email address.
                                        </div>
                                        <div style="font-weight: bolder;color: #f46a6a;font-size: 80%;" id="email_error"></div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-12 text-right">
                                        <input type="submit" name="submit" class="btn btn-warning w-md waves-effect waves-light"
                                               id="sendBtn" value="Send" >
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>

                    <div class="mt-5 text-center">
                        <p style="color: black;">Remember It ? <a href="{{url('login')}}" class="font-weight-medium text-primary"><span style="color: black;"> Sign In
                                here</span></a> </p>

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
            $("#email").keypress(function(e) {

       if (e.which === 32 && !this.value.length) {
           e.preventDefault();
       }

   });    
$('#email').on('input', function() {

    var inputVal = $(this).val();
    if(inputVal.length > 1){
    var emailReg = /^[^@]+@[^@]+\.[a-zA-Z]{2,6}?$/;
    if(!emailReg.test(inputVal)) {

      $("#email_error").text('Please provide valid email address');
      $("#sendBtn").attr("disabled", true);
      $("#sendBtn").css("pointer-events","none");
    }else{
        $("#email_error").text('');
        $("#sendBtn").removeAttr("disabled");
              $("#sendBtn").css("pointer-events","auto");
    }
}else{
    $("#email_error").text('');
}
});

$('#email').on('change', function() {

    var inputVal = $(this).val();

});


       </script>    

    @endsection
