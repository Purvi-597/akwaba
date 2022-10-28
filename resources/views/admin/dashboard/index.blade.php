@extends('layouts.master')
@section('title') Dashboard @endsection
@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}">
<div class="row">
    <div class="col-12">
       
     
			<h5 style="color: #000E42;"> @lang('dash.System Statistics')</h5>
			
			
						<div class="row">
						
							<div class="col-lg-4">
                                <div class="card border border-secondary">
                                    <div class="card-header bg-transparent border-primary">
                                        <a href="{{url('admin/users')}}"><h5 class="my-0 text-grey" style="font-size: x-large; color: grey;"> @lang('dash.Total Users')</h5></a>
										  <a href="{{url('admin/users')}}"><p class="card-text" style="font-size: x-large; color: lightgrey;">
										  	{{isset($users)?$users:"0"}}
										  </p></a>
                                    </div>
                                    
                                </div>
                            </div>
                        
					    </div>
						
</div>
</div>


<!-- end row -->
<!-- end row -->
@endsection
@section('script')
<script src="{{ URL::asset('assets/js/pages/charts.js')}}"></script>
<script src="{{ URL::asset('assets/libs/datatables/datatables.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/jszip/jszip.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/pdfmake/pdfmake.min.js')}}"></script>
<!-- Init js-->
<script src="{{ URL::asset('assets/js/pages/datatables.init.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
            $('#UsersList1').DataTable();
        } );
</script>
@endsection
