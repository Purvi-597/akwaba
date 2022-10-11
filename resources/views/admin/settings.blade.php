@extends('layouts.master')

@section('title')  Settings @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/summernote/summernote.min.css')}}">
<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
<style type="text/css">
    input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>
@endsection
@section('content')
@component('common-components.breadcrumb')
@slot('title') Settings @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card mb-2">
            <div class="card-body">
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

            <form class="needs-validation" method="post" enctype="multipart/form-data" action="{{route('settings.update')}}" novalidate id="userform">
                 @csrf

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group ">
                            <label>First Name</label>
                        <input type="text" name="firstname" value="{{$data->firstname}}" class="form-control" required>
                        </div>
                        <div class="invalid-feedback">
                                Please enter first name.
                            </div>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-md-12">
                        <div class="form-group ">
                            <label>Last Name</label>
                        <input type="text" name="lastname" value="{{$data->lastname}}" class="form-control">
                        </div>
                        <div class="invalid-feedback">
                                Please enter last name.
                            </div>
                    </div>
                </div>

                  <div class="row">
                    <div class="col-md-12">
                        <div class="form-group ">
                            <label>Email</label>
                        <input type="email" name="email" value="{{$data->email}}" class="form-control" readonly autocomplete="off">
                        </div>
                        <div class="invalid-feedback">
                                Please enter your email.
                            </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group ">
                            <label>Password</label>
                    <input type="password" name="password" class="form-control" id="password" onChange="checkPasswordMatch();">
                        </div>
                        <div class="invalid-feedback">
                                Please enter your password.
                            </div>
                             
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group ">
                            <label>Confirm Password</label>
                        <input type="password" name="confirm_password" id="confirm_password" class="form-control">
                        </div>
                        <div class="invalid-feedback">
                                Please enter confirm password.
                            </div>
                             <div class="divCheckPasswordMatch" style=" color:#f46a6a;">
                              </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group ">
                            <label>Contact No.</label>
                        <input type="number" name="contact"  class="form-control" value="{{$data->phone_no}}">
                        </div>
                        <div class="invalid-feedback">
                                Please enter your contact number.
                            </div>
                    </div>
                </div>             

                   <div class="row">
                    <div class="col-md-12">
                        <div class="form-group ">
                        <label>Country</label>
                        <select class="form-control form-select" name="country" required="true"  id="country-dd">
                            <option value="" selected="true">Select Country</option>
                            @foreach($country as $get)
                            @php $selected = '';
                                if($get->country_id == $data->country )
                                {
                                    $selected = 'selected';
                                }
                                @endphp
                             <option value="{{$get->country_id}}" {{$selected}}>{{$get->name}}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="invalid-feedback">
                                Please choose country.
                            </div>
                    </div>
                   </div>

                    <div class="row">
                    <div class="col-md-12">
                        <div class="form-group ">
                        <label>State</label>
                        <select class="form-control form-select" name="state" required="true" id="state-dd">
                        <option value="{{$data->state}}" selected>{{$data->state_name}}</option>
                        </select>
                        </div>
                        <div class="invalid-feedback">
                                Please choose state.
                            </div>
                    </div>
                   </div>

                    <div class="row">
                    <div class="col-md-12">
                        <div class="form-group ">
                        <label>City</label>
                        <select class="form-control form-select" name="city" required="true" id="city-dd">
                           <option value="{{$data->city}}" selected>{{$data->city_name}}</option>
                        </select>
                        </div>
                        <div class="invalid-feedback">
                                Please choose city.
                        </div>
                    </div>
                   </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group ">
                            <label>Zipcode</label>
                        <input type="number" name="zipcode"  class="form-control" value="{{$data->zipcode}}">
                        </div>
                        <div class="invalid-feedback">
                                Please enter your zipcode.
                        </div>
                    </div>
                </div>

                   <div class="row">
                    <div class="col-md-12">
                        <div class="form-group ">
                        <label>Address</label>
                        <textarea name="address" class="form-control">{{$data->address}}</textarea>
                        </div>
                        <div class="invalid-feedback">
                                Please enter your address.
                            </div>
                    </div>
                </div>
                @if($data->profile_image)
                    <label><img src="/uploads/users/{{$data->profile_image}}" width="150px" height="130px"></label>
                    <input type="hidden" value="{{$data->profile_image}}" name="profile_hidden">
                @endif
                  <div class="row">
                    <div class="col-md-12">
                        <div class="form-group ">
                            <label>Profile Picture</label>
                        <input type="file" name="profile_pic"  class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <button class="btn btn-success" type="submit" id="save">Save</button>
                            <a href="/" class="btn btn-danger">Cancel</a>
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>

<script>
        $(document).ready(function () {
            $('#country-dd').on('change', function () {
                var idCountry = this.value;
                $("#state-dd").html('');
                $.ajax({
                    url: '{{route("fetchState")}}',
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        console.log(result.state);
                        $('#state-dd').html('<option value="">Select State</option>');
                        $.each(result.state, function (key, value) {
                            $("#state-dd").append('<option value="' + value
                                .state_id + '">' + value.state_name + '</option>');
                        });
                        $('#city-dd').html('<option value="">Select City</option>');
                    }
                });
            });
            $('#state-dd').on('change', function () {
                var idState = this.value;
                $("#city-dd").html('');
                $.ajax({
                    url:'{{route("fetchCity")}}',
                    type: "POST",
                    data: {
                        state_id: idState,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (res) {
                        $('#city-dd').html('<option value="">Select City</option>');
                        $.each(res.city, function (key, value) {
                            $("#city-dd").append('<option value="' + value
                                .city_id + '">' + value.city_name + '</option>');
                        });
                    }
                });
            });
        });

function checkPasswordMatch() {
    var password = $("#password").val();
    var confirmPassword = $("#confirm_password").val();

   if(password == "" && confirmPassword == ""){
         $(".divCheckPasswordMatch").html("");
     }else{
    if (password != confirmPassword){
        $(".divCheckPasswordMatch").html("Passwords do not match!");
        $("#save").attr("disabled", true);
}else{
        $(".divCheckPasswordMatch").html("");
         $("#save").attr("disabled", false);
    }
   }

}

$(document).ready(function () {
     $(".divCheckPasswordMatch").html("");
   $("#confirm_password").keyup(checkPasswordMatch);
});

    </script>
@endsection