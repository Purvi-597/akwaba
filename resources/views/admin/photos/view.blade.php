@extends('layouts.master')
@section('title') @lang("language.photo_details") @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/select2/select2.min.css')}}">
<link href="{{ URL::asset('assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet"
    type="text/css">
@endsection
@section('content')
@component('common-components.breadcrumb')
@slot('title') @lang("language.photo_details") @endslot
@endcomponent


<div class="row">
    <div class="col-12">
        <div class="card mb-2">
            <div class="card-body">
                <input type="hidden" value="{{ $row->id }}" name="id" id="id">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="formrow-quest_name-input"><b>@lang("language.photo_title_view"):</b></label>
                        {{$row->title}}
                    </div>

                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="formrow-quest_name-input"><b>@lang("language.photo_address"):</b></label>
                        {{$row->address}}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="formrow-quest_name-input"><b>@lang("language.Status"):</b></label>
                        @if($row->status == 1)
                        <?php echo "Active"; ?>
                        @else
                        <?php echo "InActive"; ?>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="formrow-quest_name-input"><b>Image:</b></label> <br>
                        @if(!empty($row->image))
                        <img src="/uploads/photos/{{$row->image}}" id="prescriptionpreview" style="height: 100px; width: 100px;"></img>
                            @else
                            @php echo "No Image uploaded"; @endphp
                            @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <a href="/admin/photos" class="btn btn-danger">@lang('language.Cancel')</a>
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
