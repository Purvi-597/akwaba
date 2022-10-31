@extends('layouts.master')
@section('title')  Update Place Advertisement @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/select2/select2.min.css')}}">
<link href="{{ URL::asset('assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet"
    type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}">
@endsection
@section('content')
@component('common-components.breadcrumb')
@slot('title') Update Place Advertisement @endslot
@endcomponent
<style>
.form-control{
    color: #314667 !important;
}
.close_imge{
    position: absolute;
    margin-left: -3%;
    margin-top:1%;
    cursor: pointer;
}
.image_section{
    margin-bottom: 8px;
    display:inline-flex;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>
<div class="row">
    <div class="col-12">
        <form class="needs-validation" method="post" enctype="multipart/form-data" action="{{route('place_advertisement.update',$placeAdvertisement->id)}}" novalidate>
            @csrf
        <div class="card mb-2">
            <div class="card-body">
                @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
             <form class="needs-validation" method="post" enctype="multipart/form-data" action="{{route('place_advertisement.update',$placeAdvertisement->id)}}" novalidate>
                @csrf
                <input type="hidden" value="{{ $placeAdvertisement->id }}" name="id" id="id">
                <div class="form-group">
                <label for="formrow-quest_name-input">Place Title</label>
					<input type="text" class="form-control" name="place_title" id="place_title" placeholder="Enter Place Title" value="{{$placeAdvertisement->place_name}}" required>
                    <div class="invalid-feedback">
                            Please provide a Place Title.
                        </div>
                </div>
                <div class="row">
                     <div id="req_input" class="form-group col-md-12">
                       <label for="formrow-quest_name-input"> Image <span style="color:red;">*</span></label>
                             <input type="file"  class="form-control images_0" name="image" id="images_0" ><br>
                                <label id="lbl1" for="formrow-quest_name-input"><?php if(isset($placeAdvertisement->image)){ echo $placeAdvertisement->image; } ?></label><br>
                                       @if(!empty($placeAdvertisement->image))
                               <img src='/uploads/place_advertisement/{{$placeAdvertisement->image}}' id="image_main0" name="image_main0" class="image_main0" height="100" width="100">
                                @endif
                                <img  id="image_main1" name="image_main1" class="image_main1" height="100" width="100" style="display:none;">
                            <input type="hidden" name="old_image0" value="<?php if(isset($placeAdvertisement->image)){ echo $placeAdvertisement->image; } ?>">
                          <span id="image0_error"  style="color:red"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="formrow-quest_name-input">Type</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="POI" value="POI" @if($placeAdvertisement->type == 'POI') checked @endif>
                        <label class="form-check-label" for="POI">
                            POI
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="External" value="External" @if($placeAdvertisement->type == 'External') checked @endif>
                        <label class="form-check-label" for="External">
                            External
                        </label>
                    </div>
                    <div class="invalid-feedback">
                        Please provide a first name.
                    </div>
                </div>
                <div class="form-group" id="external" @if($placeAdvertisement->type == 'POI') style="display:none;" @endif>
                    <label for="formrow-quest_name-input">Link</label>
                    <input type="text" class="form-control" name="link" id="link" placeholder="Enter Link" value="{{$placeAdvertisement->external_link}}">
                    <div class="invalid-feedback">
                        Please provide a Link.
                    </div>
                </div>
                <div class="form-group" id="place_name_div" @if($placeAdvertisement->type == 'External') style="display:none;" @endif>
                    <label for="formrow-quest_name-input">Place Name</label>
                    <select class="js-example-basic-single form-control" name="place_name" id="place_name">
                    @foreach($place_name as $place_name)
                        <option value="{{$place_name->osm_id}}" @if($placeAdvertisement->osm_id == $place_name->osm_id) selected @endif>{{$place_name->name}}</option>
                    @endforeach
                    </select>
                    <div class="invalid-feedback">
                        Please provide a place name.
                    </div>
                </div>
                <div class="form-group ">
                    <div class="custom-control custom-checkbox">
                            @php $checked=""; @endphp
                        @if($placeAdvertisement->status == 1)
                            @php $checked="checked"; @endphp
                        @endif
                        <input type="checkbox" name="status" class="custom-control-input"  id="invalidCheck" {{$checked}}>
                        <label class="custom-control-label" for="invalidCheck" >Active</label>
                        <div class="invalid-feedback">
                            You must agree before Save.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <button class="btn btn-success"  type="submit">Update</button>
                            <a href="/admin/place_advertisement" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
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
<script src="{{ URL::asset('assets/libs/parsleyjs/parsleyjs.min.js')}}"></script> 
<script src="{{ URL::asset('assets/libs/select2/select2.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/pages/form-validation.init.js')}}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/pages/form-advanced.init.js')}}"></script>
<script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

<script>
$(document).ready(function () {
    var _URL = window.URL || window.webkitURL;
    $(document).on('change','#images_0',function(e){
        $("#image_main0").css('display','none');
        $("#image_main1").css('display','block');
        var file, img;

        let name = e.target.files[0].name;
        if ((file = this.files[0])) {
        var ext = name.split('.').pop().toLowerCase();

        if($.inArray(ext, ['png','jpg','jpeg','jfif','svg']) == -1) {
            $("#image0_error").text("Please upload images of following formats(*png,jpeg,jpg,jfif,svg).");
            $("#images_0").val("");
            $("#images_0").val(null);
            $("#image_main1").attr('src','');
            $("#image_main1").css('display','none');
        }else{
            $("#lbl1").css('display','none');
            img = new Image();
            img.onload = function() {
            $("#image0_error").text("");
            $("#image_main1").css("display", "block");
            $('#image_main1').attr('src', img.src).height(150);
                }
            };
            img.src = _URL.createObjectURL(file);
        }
    });
    $("#place_name").select2();
    $('input[type=radio][name=type]').change(function() {
        if (this.value == 'POI') {
            $('#place_name_div').show();
            $('#external').hide();
        }
        else if (this.value == 'External') {
            $('#place_name_div').hide();
            $('#external').show();
        }
    });
});
</script>

@endsection