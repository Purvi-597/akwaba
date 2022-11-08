@extends('layouts.master')
@section('title') Place Advertisement Detail @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/select2/select2.min.css')}}">
<link href="{{ URL::asset('assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet"
    type="text/css">
@endsection
@section('content')
@component('common-components.breadcrumb')
@slot('title') Place Advertisement Detail @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card mb-2">
            <div class="card-body">
                <input type="hidden" value="{{ $place_advertisement->id }}" name="id" id="id">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="formrow-quest_name-input"><b>@lang('language.Place Name'):</b></label>     
                        {{$place_advertisement->place_name}}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="formrow-quest_name-input"><b>@lang('language.Type'):</b></label>     
                        {{$place_advertisement->type}}
                    </div>
                </div>
                @if($place_advertisement->type == 'External')
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="formrow-quest_name-input"><b>@lang('language.External Link'):</b></label>     
                        {{$place_advertisement->external_link}}
                    </div>
                </div>
                @endif
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="formrow-quest_name-input"><b>@lang('language.Status'):</b></label>   
                        @if($place_advertisement->status == 1)
                        @php echo "Active"; @endphp
                        @else
                        @php echo "InActive"; @endphp
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="formrow-quest_name-input"><b>Image:</b></label> <br>
                        @if(!empty($place_advertisement->image))
                        <img src="/uploads/place_advertisement/{{$place_advertisement->image}}" id="prescriptionpreview" style="height: 100px; width: 100px;"></img>
                            @else
                            @php echo "No Image uploaded"; @endphp
                            @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <a href="/admin/place_advertisement" class="btn btn-danger">@lang('language.Cancel')</a>
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