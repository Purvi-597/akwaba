@extends('layouts.master')
@section('title') Change Password @endsection
@section('css')

@endsection
@section('content')
@component('common-components.breadcrumb')
@slot('title') Change Password @endslot
@endcomponent

<div class="row">
	<div class="col-md-6 offset-md-3">
                    <span class="anchor" id="formChangePassword"></span>
                    <hr class="mb-5">
                      @if ($notification = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                                <strong>{{ $notification }}</strong>
                        </div>
                    @endif
                    <!-- form card change password -->
                    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">Change Password</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" action="{{route('editpassword.edit')}}" method="post">
                            	{{csrf_field()}}
                                <div class="form-group">
                                    <label for="inputPasswordOld">Old Password</label>
                                    <input type="password" class="form-control" id="inputPasswordOld" required="true" name="oldpassword">
                                    <span id="checkerror" class="checkerror" style="color:red;"></span>
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordNew">New Password</label>
                                    <input type="password" class="form-control" id="inputPasswordNew" required="" name="newpassword" oninput="validate()">
                                    <!-- <span class="form-text small text-muted">
                                            The password must be 8-20 characters, and must <em>not</em> contain spaces.
                                        </span> -->
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordNewVerify">Confirm New Password</label>
                                    <input type="password" class="form-control" id="inputPasswordNewVerify" required="" name="confirmpassword" oninput="validate()">
                                    <span class="form-text small text-muted">
                                            To confirm, type the new password again.
                                        </span>
                                        <div style="margin-top: 7px;" id="CheckPasswordMatch"></div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg float-right" name="submit" id="submit_btn">Change</button>
                                </div>
                            </form>
                        </div>
                    </div>
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
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

                </div>
            </div>
            @endsection