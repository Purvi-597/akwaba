@extends('layouts.master')

@section('title')  About Us @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/summernote/summernote.min.css')}}">
<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
@endsection
@section('content')
@component('common-components.breadcrumb')
@slot('title') About Us @endslot
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

            <form class="needs-validation" method="post" enctype="multipart/form-data" action="{{route('about_us.update')}}" novalidate>
                 @csrf
                    @php $about=''; @endphp
                    @if(count($data)>0)
                    <input type="hidden" name="id" value="{{$data[0]->about_us_id}}">
                    @php
                   
                    $about = $data[0]->content;
                    @endphp
                    @endif

					<div class="form-group">
						
						<textarea name="content" id="myeditor" required="true">{{$about}}</textarea>
					</div>

                </div>
              
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