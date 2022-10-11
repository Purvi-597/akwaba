@extends('layouts.master')

@section('title') User Detail @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/select2/select2.min.css')}}">
<link href="{{ URL::asset('assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet"
    type="text/css">
@endsection
@section('content')
@component('common-components.breadcrumb')
@slot('title') User Detail @endslot
@endcomponent



<div class="row">
    <div class="col-12">
      
        <div class="card mb-2">
            <div class="card-body">
        
                <input type="hidden" value="{{ $users->id }}" name="id" id="id">
					<div class="row">
						
						<div class="form-group col-md-6">
							<label for="formrow-quest_name-input"><b>Name:</b></label>     
							{{$users->name}}
						</div>

						<div class="form-group col-md-6">
							<label for="formrow-quest_name-input"><b>Email:</b></label>     
							{{$users->email}}
						</div>
						
                    </div>

                    <div class="row">
                    	<div class="form-group col-md-6">
							<label for="formrow-quest_name-input"><b>Phone No:</b></label>   {{$users->phone_no}}
						</div>

						<div class="form-group col-md-6">
							<label for="formrow-quest_name-input"><b>Status:</b></label>   
							@if($users->status == 1)
							@php echo "Active"; @endphp
							@else
							@php echo "InActive"; @endphp
							@endif
						</div>
					
                    </div>
                    	
                    	<div class="row">
                    		<div class="form-group col-md-6">
							<label for="formrow-quest_name-input"><b>User Type:</b></label>   {{$users->user_type}}
						</div>
                    	<div class="form-group col-md-6">
							<label for="formrow-quest_name-input"><b>Created Date:</b></label>   {{$users->created_at}}
						</div>

	
                    </div>
                    	


                    	


					<div class="row">
						<div class="form-group col-md-6">
							 <label for="formrow-quest_name-input"><b>Profile Picture:</b></label> <br>
							 	@if(!empty($users->profile_image))
							 <img src="/uploads/users/{{$users->profile_image}}" id="prescriptionpreview" style="height: 100px; width: 200px;"></img>
									@else
									@php echo "No Image uploaded"; @endphp
									@endif

						</div>
					</div>
				  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <a href="/admin/users" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </div>

              
               
				</div>	
				
                </div>
               
              

            </div>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->

@endsection
@section('script')
<script src="{{ URL::asset('assets/libs/select2/select2.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/pages/form-validation.init.js')}}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/pages/form-advanced.init.js')}}"></script>
@endsection