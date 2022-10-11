 @extends('layouts.master')
@section('title')Encyclopedia Management @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}">
@endsection
@section('content')
@component('common-components.breadcrumb')
@slot('title') @endslot
@slot('add_btn') <h4 class="card-title">
    <a style="margin-left: -28%;background:#314667;border:1px solid #314667;color:white;" href="{{ route('encyclopedia.create') }}"
        class="btn btn-primary waves-effect btn-label waves-light" ><i class="bx bx-plus label-icon"></i>Add Encyclopedia </a>

    </h4> @endslot
@endcomponent
<style>
.form-control{
    color: #314667 !important;
}
</style>
<div class="row">
    <div class="col-12">
        <div class="card">
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
                    
                <div class="table-responsive">
                    <table id="UsersList1" class="table">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th width="60%">Story</th>
                                <th  width="10%">Status</th>
                                <th  width="20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@php $i = 1; @endphp
                           	@foreach($story as $row)
                            @php $story  =  $row->story;  @endphp
                            @php $sort_story = strlen($story) > 400 ? substr($story,0,400)."..." : $story @endphp
                           	<tr>
                           		<td>{{$i}}</td>
                           		<td>{!! $sort_story !!}</td>
                           		<?php if($row->status == '1'){ ?>
                                <td id="{{$row->id}}" ><span class="btn btn-block btn-success btn-sm status" data-id = "{{$row->id}}" data-status = "{{$row->status}}" onclick="updatestatus({{$row->id}},{{$row->status}})">Active</span></td><?php } else { ?>
                                    
                                <td id="{{$row->id}}" ><span class="btn btn-block btn-danger btn-sm status" data-id = "{{$row->id}}" data-status = "{{$row->status}}" onclick="updatestatus({{$row->id}},{{$row->status}})">Inactive</span></td><?php } ?>
                           		<td>
                                 <a href="{{route('encyclopedia.edit', $row->id)}}"  class="btn btn-outline-secondary btn-sm edit" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                <a href="{{route('encyclopedia.view', $row->id)}}"  class="btn btn-outline-secondary btn-sm edit" title="View"><i class="fas fa-eye"></i></a>
                                <a  href="javascript:void(0);"  class="btn btn-outline-secondary btn-sm delete" id="delete" data-id="{{$row->id}}" title="Delete"><i class="fas fa-trash-alt"></i></a>   
                                </td>
                           	</tr>
                           	@php $i++; @endphp
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection
@section('script')
<!-- Plugins js -->
<script src="{{ URL::asset('assets/libs/datatables/datatables.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/jszip/jszip.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/pdfmake/pdfmake.min.js')}}"></script>
<!-- Init js-->
<script src="{{ URL::asset('assets/js/pages/datatables.init.js')}}"></script>

<script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
            $('#UsersList1').DataTable();
        } );
</script>

        <script>
            function updatestatus(id,status)
            {
               
            $.ajax({
            type: "POST",
            url: '{{route("encyclopedia_status")}}',
            data: {'status': status, 'id': id, "_token": "{{ csrf_token() }}"},
            success: function(data){
              if(data.return =='Active')
              {
                status = 1;
                var html = '<span class="btn btn-block btn-success btn-sm status" data-id ="'+id+'" data-status = "'+status+'" onclick="updatestatus('+id+','+status+')">Active</span>';


                Swal.fire(
                                'Status',
                                'Status Changed Successfully',
                                'success'
                                )   

              }
              else
              {
                status = 0;
                var html = '<span class="btn btn-block btn-danger btn-sm status" data-id = "'+id+'" data-status = "'+status+'" onclick="updatestatus('+id+','+status+')">Inactive</span>';

                 Swal.fire(
                                'Status',
                                'Status Changed Successfully',
                                'success'
                                )   


              }
              $("#"+id).empty();
              $("#"+id).append(html);
            }
        });
            }


            $(document).on('click','#deleteuser',function(){
                var id = $(this).attr('data-id');
               
                 Swal.fire({
                      title: 'Are You sure',
                      text: "You want to delete this user",
                      type: "warning",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#34BA8E',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Yes '
                    }).then((result) => {
                      
                      if (result.value){
                        
                          $.ajax({
                             type: "POST",
                             url: '{{route("deleteuser")}}',
                             data: {'id': id, "_token": "{{ csrf_token() }}"},
                             success: function(data){
                                 if(data == "delete"){
                               
                                 Swal.fire({
                                       title: "User",
                                       icon:"success",
                                       text: "User Deleted Successfully",
                                       type: "success"
                                }).then(function() {
                                        history.go(0)
                                     });

                            }else{

                                   Swal.fire({
                                       title: "User",
                                       icon:"error",
                                        text: "Something went wrong",
                                       type: "error"
                                        // }).then(function() {
                                //  history.go(0)
                             });

                            }


                        }

                    });

                      }else{
                       

                      }
                  })
            })



</script>

@endsection