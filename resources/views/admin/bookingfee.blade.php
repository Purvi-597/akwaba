@extends('layouts.master')

@section('title') Booking Fee @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/summernote/summernote.min.css')}}">
<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
@endsection
@section('content')
@component('common-components.breadcrumb')
@slot('title')  Booking Fee @endslot
@endcomponent
<style type="text/css">
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>

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
            <form class="needs-validation" method="post" enctype="multipart/form-data" action="{{route('bookingfee.update')}}" novalidate>
                 @csrf
			        <input type="hidden" name="id" value="{{$data->id}}">
                   <div class=" form-group col-md-12">
                    <label for="formrow-quest_name-input">Booking Fee</label>
                      <div class="input-group">
                            <div class="input-group-text">$</div>
                             <input type="text" name="name" class="form-control" id="name" value="{{$data->booking_rate}}" placeholder="Enter Booking rate" required> 
                            <div class="invalid-feedback">
                                     Please provide Booking Rate
                            </div>
                          </div>
                        </div>

                          <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <button class="btn btn-success" type="submit">Save</button>
                        <a href="{{ url('/') }}" class="btn btn-danger">Cancel</a>
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
<script src="{{ URL::asset('assets/js/pages/form-validation.init.js')}}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/pages/form-advanced.init.js')}}"></script>
<script src="{{ URL::asset('assets/libs/tinymce/tinymce.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/summernote/summernote.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/pages/form-editor.init.js')}}"></script>
<script type="text/javascript">
     $('#name').keypress(function(e) {
        
      var arr = [];
      var kk = e.which;
   
      for (i = 48; i < 58; i++)
          arr.push(i);
   
      if (!(arr.indexOf(kk)>=0))
          e.preventDefault();
  });
</script>
@endsection