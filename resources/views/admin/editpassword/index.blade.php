@extends('layouts.master')
@section('title') @lang('language.Change_Password') @endsection
@section('css')

@endsection
@section('content')
<div class="row">
	<div class="col-md-12">
                    <span class="anchor" id="formChangePassword"></span>
                    
                    @if ($notification = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                                <strong>{{ $notification }}</strong>
                        </div>
                    @endif
                    <!-- form card change password -->
                    
                        <h4 class="mb-0 font-size-28">@lang('language.Change_Password')</h4>
                      
                    <div class="card card-outline-secondary">
                        
                <div class="card-body">
                        <form class="form" role="form" autocomplete="off" action="{{route('editpassword.edit')}}" method="post"  class="needs-validation" novalidate>
                            	{{csrf_field()}}
                                <div class="form-group">
                                    <label for="inputPasswordOld">@lang('language.old_password')</label>
                                    <input type="password" class="form-control" id="inputPasswordOld" required="true" name="oldpassword" required>
                                    <span id="checkerror" class="checkerror" style="color:red;"></span>

                                    <div class="invalid-feedback">
                                        @lang('language.old_validation')
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordNew">@lang('language.new_password')</label>
                                    <input type="password" class="form-control" id="inputPasswordNew" required="" name="newpassword" oninput="validate()" required>
                                    <!-- <span class="form-text small text-muted">
                                            The password must be 8-20 characters, and must <em>not</em> contain spaces.
                                        </span> -->
                                        <div class="invalid-feedback">
                                            @lang('language.new_validation')
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordNewVerify">@lang('language.confirm_password')</label>
                                    <input type="password" class="form-control" id="inputPasswordNewVerify" required="" name="confirmpassword" oninput="validate()" required>
                                    <span class="form-text small text-muted">
                                            @lang('language.confirm_msg')
                                        </span>
                                        <div style="margin-top: 7px;" id="CheckPasswordMatch"></div>
                                        <div class="invalid-feedback">
                                            @lang('language.confirm_validation')
                                        </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg float-left" name="submit" id="submit_btn"> @lang('language.change')</button>
                                </div>
                            </form>
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
                              
				<script>
					function validate() {
					    var password = document.getElementById("inputPasswordNew").value;
					    var confirmpassword = document.getElementById("inputPasswordNewVerify").value;
					    if(password == confirmpassword)
					    {
					  	    document.getElementById("CheckPasswordMatch").style.color = "green";
					 	    document.getElementById("CheckPasswordMatch").innerHTML = "Passwords Matching";
					 	    document.getElementById("submit_btn").disabled = false;
					    }
					    else
					    {
					  	    document.getElementById("CheckPasswordMatch").style.color = "red";
					  	    document.getElementById("CheckPasswordMatch").innerHTML = "Passwords are not matching";
					  	 document.getElementById("submit_btn").disabled = true;
					  }
					}
			    </script>    


            <script type="text/javascript">
                  $("#inputPasswordOld").keyup(function() {
            var password = $('#inputPasswordOld').val();
            $.ajax({
            type: "POST",
            url: '{{route("checkoldpassword")}}',
            data: {'password': password,"_token": "{{ csrf_token() }}"},
            success: function(data){
               if(data == 1){
                $("#checkerror").html("Old password not matching").css("display", "block");
                 // $(".checkerror").css("display", "block");
                $("#submit_btn").attr("disabled", true);
               }
               else{
                $("#submit_btn").attr("disabled", false);
                $("#checkerror").css("display", "none");
               }
                }
            })
        });
            </script>

            
            @endsection
                 