@extends('layouts.master')

@section('title')  Contact Us @endsection
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
@slot('title') Contact Us @endslot
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

            <form class="needs-validation" method="post" enctype="multipart/form-data" action="{{route('contact_us.update')}}" novalidate>
                 @csrf
                    @php $about=''; @endphp
                    @if(count($data)>0)
                    <input type="hidden" name="id" value="{{$data[0]->id}}">
                    @php
                   
                    $email = $data[0]->email;
                    $address = $data[0]->address;
                    $contact = $data[0]->mobile;

                    @endphp
                   

					 <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" value="{{$email}}" required >
                        <div class="invalid-feedback">
                            Please provide a email.
                        </div>
                    </div>


                      <div class="form-group">
                        <label>Contact</label>
                         <input type="number" class="form-control" name="contact" id="contact" placeholder="Enter contact number" value="{{$contact}}" required>
                        <div class="invalid-feedback">
                            Please provide contact number.
                        </div>
                    </div>

                     <div class="form-group">
                        <label>Address</label>
                        <textarea name="address" class="form-control" required placeholder="Enter address">{{$address}}</textarea>
                        <div class="invalid-feedback">
                            Please provide address.
                        </div>

                       

                    </div>
                 @endif

                 @if(count($data) == 0)
                 <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" value="" required>
                        <div class="invalid-feedback">
                            Please provide a email.
                        </div>
                    </div>


                      <div class="form-group">
                        <label>Contact</label>
                         <input type="number" class="form-control" name="contact" id="contact" placeholder="Enter contact number" required>
                        <div class="invalid-feedback">
                            Please provide contact number.
                        </div>
                    </div>

                     <div class="form-group">
                        <label>Address</label>
                        <textarea name="address" class="form-control" required placeholder="Enter address"></textarea>
                        <div class="invalid-feedback">
                            Please provide address.
                        </div>
                    </div>
                    @endif

                    <div class="col-md-6">
                        <div class="form-group ">
                            <button class="btn btn-success" type="submit">Save</button>
                       <!--  <a href="" class="btn btn-danger">Cancel</a> -->
                        </div>
                    </div>
                
                </form>

            </div>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->

<script>
window.onload = function() {
CKEDITOR.replace('myeditor');
};
</script>
@endsection
@section('script')
<script src="{{ URL::asset('assets/libs/parsleyjs/parsleyjs.min.js')}}"></script> 
<script src="{{ URL::asset('assets/js/pages/form-validation.init.js')}}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/pages/form-advanced.init.js')}}"></script>
<script src="{{ URL::asset('assets/libs/tinymce/tinymce.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/summernote/summernote.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/pages/form-editor.init.js')}}"></script>
@endsection