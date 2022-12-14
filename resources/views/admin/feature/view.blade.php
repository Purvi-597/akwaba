@extends('layouts.master')

@section('title') feature Detail @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/select2/select2.min.css')}}">
<link href="{{ URL::asset('assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet"
    type="text/css">
@endsection
@section('content')
@component('common-components.breadcrumb')
@slot('title') feature Detail @endslot
@endcomponent



<div class="row">
    <div class="col-12">
      
        <div class="card mb-2">
            <div class="card-body">
        
                <input type="hidden" value="{{ $feature->id }}" name="id" id="id">
					<div class="row">
						
						<div class="form-group col-md-12">
							<label for="formrow-quest_name-input"><b> @lang('language.Title')</b></label>     
							{{$feature->title}}
						</div>

						<div class="form-group col-md-12">
							<label for="formrow-quest_name-input"><b>@lang('language.Description')</b></label>     
							{{$feature->description}}
						</div>
						
                    </div>
					<div class="row">
						<div class="form-group col-md-6">
							<label for="formrow-quest_name-input"><b>@lang('language.Status'):</b></label>   
							@if($feature->status == 1)
							"@lang('language.Active')"	
							@else
								"@lang('language.Inactive')" 
							@endif
						</div>
					
                    </div>
                    {{-- <div class="row">
                    	<div class="form-group col-md-6">
							<label for="formrow-quest_name-input"><b>Created Date:</b></label>   {{$feature->created_at}}
						</div>
                    </div> --}}
					<div class="row">
						<div class="form-group col-md-6">
							 <label for="formrow-quest_name-input"><b>@lang('language.Profile_Image'):</b></label> <br>
							 	@if(!empty($feature->image))
							 <img src="/uploads/feature/{{$feature->image}}" id="prescriptionpreview" style="height: 100px; width: 200px;">
									@else
									@php echo "No Image uploaded"; @endphp
									@endif

						</div>
					</div>
				  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <a href="/admin/feature" class="btn btn-danger">@lang('language.Cancel')</a>
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