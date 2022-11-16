@extends('layouts.master')
@section('title')@lang('language.place_advertisement') @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}">
@endsection
@section('content')
@component('common-components.breadcrumb')
@slot('title') @lang('language.place_advertisement') @endslot
@slot('add_btn') <h4 class="card-title">
    <a style="margin-left: -28%;background:#314667;border:1px solid #314667;color:white;" href="{{ route('place_advertisement.create') }}"
        class="btn btn-primary waves-effect btn-label waves-light" ><i class="bx bx-plus label-icon"></i>@lang('language.Add_place') </a>

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
                                <th width="10%">#</th>
                                <th  width="15%">@lang('language.Place_Name')</th>
                                <th  width="15%">Image</th>
                                <th  width="15%">@lang('language.Type')</th>
                                <th  width="15%">@lang('language.External_Link')</th>
                                <th  width="15%">@lang('language.Status')</th>
                                <th  width="20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $placeAdvertisementPath = '/uploads/place_advertisement/'; @endphp
                            @if(count($place_advertisement)>0)
                            @php $i = 1; @endphp
                                @foreach($place_advertisement as $place_advertisement)
                                    <tr>
                                        <td>{{$i}}</td>
                                        
                                        
                                        <td >{{$place_advertisement->place_name}}</td>

                                        <td>@if ($place_advertisement->image != '')
                                            <img src="{{$placeAdvertisementPath}}{{$place_advertisement->image}}" alt="" style="width: 100px;height:100px;">@endif
                                        </td>

                                        <td >{{$place_advertisement->type}}</td>
                                        <td >{{$place_advertisement->external_link}}</td>

                                        <?php if($place_advertisement->status == 1){ ?>
                                        <td id="{{$place_advertisement->id}}" ><span class="btn btn-block btn-success btn-sm status" data-id = "{{$place_advertisement->id}}" data-status = "{{$place_advertisement->status}}" onclick="updatestatus({{$place_advertisement->id}},{{$place_advertisement->status}})">@lang('language.Active')</span></td><?php } else { ?>
                                    
                                        <td id="{{$place_advertisement->id}}" ><span class="btn btn-block btn-danger btn-sm status" data-id = "{{$place_advertisement->id}}" data-status = "{{$place_advertisement->status}}" onclick="updatestatus({{$place_advertisement->id}},{{$place_advertisement->status}})">@lang('language.Inactive')</span></td><?php } ?>

                                    <td>
                                        <a href="{{route('place_advertisement.edit', $place_advertisement->id)}}"  class="btn btn-outline-secondary btn-sm edit" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="{{route('place_advertisement.view', $place_advertisement->id)}}"  class="btn btn-outline-secondary btn-sm edit" title="View"><i class="fas fa-eye"></i></a>
                                        <a  href="javascript:void(0);"  class="btn btn-outline-secondary btn-sm delete" id="deleteplaceadvertisement" data-id="{{$place_advertisement->id}}" title="Delete"><i class="fas fa-trash-alt"></i></a>

                                   </td>                                       
                                    </tr>
                                    @php $i++; @endphp
                                @endforeach
                            @endif
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
            $('#UsersList1').DataTable({
                "language": {
                    "search": "@lang('language.search')",
                    "sLengthMenu": "@lang('language.show')",
                    "sInfo" : "@lang('language.show_text')",
                    "paginate": {
                        "previous": "@lang('language.previous')",
                        "next" : "@lang('language.next')",
    }
                    }
                });
        } );
</script>
<script>
function updatestatus(id,status)
{
    $.ajax({
        type: "POST",
        url: '{{route("users_status")}}',
        data: {'status': status, 'id': id, "_token": "{{ csrf_token() }}"},
        success: function(data){
            if(data.return =='Active')
            {
            status = 1;
            var html = '<span class="btn btn-block btn-success btn-sm status" data-id ="'+id+'" data-status = "'+status+'" onclick="updatestatus('+id+','+status+')">@lang('language.Active')</span>';
            Swal.fire(
                                '@lang("language.Status")',
                                '@lang("language.Status_Changed")',
                                'success'
                    )
            }
            else
            {
            status = 0;
            var html = '<span class="btn btn-block btn-danger btn-sm status" data-id = "'+id+'" data-status = "'+status+'" onclick="updatestatus('+id+','+status+')">@lang('language.Inactive')</span>';

                Swal.fire(
                                '@lang("language.Status")',
                                '@lang("language.Status_Changed")',
                                'success'
                            )
            }
            $("#"+id).empty();
            $("#"+id).append(html);
        }
    });
}
$(document).on('click','#deleteplaceadvertisement',function(){
    var id = $(this).attr('data-id');
    
        Swal.fire({
            title: "@lang('language.Confirm_alert')",
            text: "@lang('language.delete_record')",
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
                url: '{{route("deleteplaceadvertisement")}}',
                data: {'id': id, "_token": "{{ csrf_token() }}"},
                success: function(data){
                    if(data == "delete"){
                        Swal.fire({
                            title: "@lang('language.place_advertisement')",
                            icon:"@lang('language.success')",
                            text: "@lang('language.place_ad_Deleted')",
                            type: "success"
                        }).then(function() {
                                history.go(0)
                        });
                    }else{
                        Swal.fire({
                            icon:"@lang('language.error')",
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