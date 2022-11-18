@extends('layouts.master')

@section('title') @lang('language.detail') @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/select2/select2.min.css')}}">
<link href="{{ URL::asset('assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet"
    type="text/css">
@endsection
@section('content')
@component('common-components.breadcrumb')
@slot('title')  @lang('language.detail') @endslot
@endcomponent



<div class="row">
    <div class="col-12">
      
        <div class="card mb-2">
            <div class="card-body">
        
                <input type="hidden" value="{{ $faq->id }}" name="id" id="id">
					<div class="row">
						
						<div class="form-group col-md-6">
							<label for="formrow-quest_name-input"><b>@lang('language.Title'):</b></label>     
							{{$faq->question}}
						</div>

						<div class="form-group col-md-6">
							<label for="formrow-quest_name-input"><b>@lang('language.French_Title'):</b></label>     
							{{$faq->question_fr}}
						</div>

						<div class="form-group col-md-6">
							<label for="formrow-quest_name-input"><b>@lang('language.Description'):</b></label>     
							{{$faq->answer}}
						</div>

						<div class="form-group col-md-6">
							<label for="formrow-quest_name-input"><b>@lang('language.FrDescription'):</b></label>     
							{{$faq->answer_fr}}
						</div>
						
                    </div>
					<div class="row">
						<div class="form-group col-md-6">
							<label for="formrow-quest_name-input"><b>@lang('language.Status'):</b></label>   
							@if($faq->status == 1)
							"@lang('language.Active')"	
							@else
								"@lang('language.Inactive')" 
							@endif
						</div>
					
                    </div>
                    {{-- <div class="row">
                    	<div class="form-group col-md-6">
							<label for="formrow-quest_name-input"><b>Created Date:</b></label>   {{$featuretext->created_at}}
						</div>
                    </div> --}}
				
				  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <a href="/admin/faq" class="btn btn-danger">@lang('language.Cancel')</a>
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