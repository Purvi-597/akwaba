@extends('layouts.master-without-nav')

@section('title')
Reset pw
@endsection
<style>

.form-control{
	color: #314667 !important;
}

</style>
@section('body')

<body style="background-color: #DF9FD8;">
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
                        <div class="card-body pt-0">
                            <div class="p-2">
                                <form class="form-horizontal mt-4" method="POST" action="{{route('users.store')}}" >
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <div class="form-group">
                                        <label for="userpassword">Password</label>
                                        <input type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required id="userpassword" placeholder="Enter password">
											<span id="Prror_Msg" style="color: red;"></span>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="userpassword">Confirm Password</label>
                                        <input id="password-confirm" type="password" name="password_confirmation"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required placeholder="Enter password">
										<span id="CPrror_Msg" style="color: red;"></span>	
										<span id="Error_Msg" style="color: red;"></span>	
											
                                    </div>
                                     <span id="success_Msg" style="color: green;"></span>
                                     <span id="Errors_Msg" style="color: red;"></span>
                                    <div class="form-group row mb-0">
                                        <div class="col-12 text-right">
                                            <button class="btn btn-primary w-md waves-effect waves-light"
                                               id="resetBtn" type="button">Reset Password</button>
                                        </div>
                                    </div>
                                 <input type="hidden" id="currenturl" name="currenturl" value="{{base64_decode(last(request()->segments()))}}"/>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
	
@section('script')

<script>
$(document).ready(function(){
$(document).on("click", "#resetBtn", function(){	
var userpassword = $("#userpassword").val();
var confirmpassword = $("#password-confirm").val();
var id = $("#currenturl").val();
if(userpassword == ""){
		document.getElementById('Prror_Msg').innerHTML = "Password is required.";
        return false; 
	
}else if(confirmpassword == ""){
		document.getElementById('CPrror_Msg').innerHTML = "Confirm password is required.";
        return false;
	
}else{

		$.ajax({
			url:'{{ route("updatepassword") }}',
			type:'post',
			data:{"id":id, "userpassword":userpassword, "_token": "{{ csrf_token() }}"},
			success:function(data)
			{
				console.log(data);
				if(data == "true"){
					$( "#success_Msg" ).fadeIn( 3000 ).delay( 3000 );
					document.getElementById('success_Msg').innerHTML = "Password reset successfully.";
					$( "#success_Msg" ).slideUp( 3000 ).delay( 3000 );
					 setTimeout(function(){ 
						window.location.href = "http://10.10.2.111:8080/login";
					 }, 3000);
				}else{
					$( "#Errors_Msg" ).fadeIn( 3000 ).delay( 3000 );
					document.getElementById('Errors_Msg').innerHTML = "something went wrong!.";
					$( "#Errors_Msg" ).slideUp( 3000 ).delay( 3000 );
					return false;
					
				}
				
				
				
			}
		  });	
}
	});
	
$(document).on("change", "#password-confirm", function(){
var userpassword = $("#userpassword").val();
var confirmpassword = $("#password-confirm").val();
if(userpassword != confirmpassword){
	    $( "#Error_Msg" ).fadeIn( 1500 ).delay( 1500 );
        document.getElementById('Error_Msg').innerHTML = "Password and confirm password does not match.";
        $( "#Error_Msg" ).slideUp( 1500 ).delay( 1500 );
		$("#password-confirm").val('');
        return false; 
}

});
});
</script>	
    @endsection