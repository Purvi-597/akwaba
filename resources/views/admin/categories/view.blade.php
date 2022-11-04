@extends('layouts.master')

@section('title') Categories Detail @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/select2/select2.min.css')}}">
<link href="{{ URL::asset('assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet"
    type="text/css">
@endsection
@section('content')
@component('common-components.breadcrumb')
@slot('title') Categories Detail @endslot
@endcomponent



<div class="row">
    <div class="col-12">
		<div class="card mb-2">
            <div class="card-body">
				<input type="hidden" value="{{ $categories->id }}" name="id" id="id">
					<div class="row">
                        <?php
						?>
						<div class="form-group col-md-6">
							<label for="formrow-quest_name-input"><b>Name:</b></label>
							{{$categories->name}}
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label for="formrow-quest_name-input"><b>Status:</b></label>
							@if($categories->status == 1)
							@php echo "Active"; @endphp
							@else
							@php echo "InActive"; @endphp
							@endif
						</div>
					</div>
                    <div class="row">
                    	<div class="form-group col-md-6">
							<label for="formrow-quest_name-input"><b>Created Date:</b></label>   {{$categories->created_at}}
						</div>
					</div>
					
					<div class="row">
						<div class="form-group col-md-6">
							<label for="formrow-quest_name-input"><b>Profile Picture:</b></label> <br>
							 	@if(!empty($categories->image))
									<img src="/uploads/categories/{{$categories->image}}" id="prescriptionpreview" style="height: 38px; width: 29px;"/>
								@else
									@php echo "No Image uploaded"; @endphp
								@endif
						</div>
					</div>
				  	<div class="row">
                    	<div class="col-md-6">
                        	<div class="form-group ">
                            	<a href="/admin/categories" class="btn btn-danger">Cancel</a>
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
