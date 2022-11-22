@extends('layouts.master')
@section('title') @lang('language.Subcategory_List') @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}">
@endsection
@section('content')
@component('common-components.breadcrumb')
@slot('title') @lang('language.Subcategory_List') @endslot
@slot('add_btn') <h4 class="card-title">
    <a style="margin-left: -28%;background:#314667;border:1px solid #314667;color:white;" href="{{ route('subcategories.create') }}"
        class="btn btn-primary waves-effect btn-label waves-light" ><i class="bx bx-plus label-icon"></i>@lang('language.Add_Subcat')</a>

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
                                <th width="10%" >#</th>
                                {{-- <th width="20%">@lang('language.Name')</th>  --}}
                                <th width="20%">@lang('language.cat_name')</th>
                                <th width="20%">@lang('language.display_name')</th>
                                <th width="15%">Image</th>
                                <th width="15%">@lang('language.Status')</th>
                                <th >Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $profilepicturePath = '/uploads/subcategories/'; @endphp
                            @if(count($subcategories)>0)
                            @php $i = 1; @endphp
                                @foreach($subcategories as $subcategory)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$subcategory->category_name}}</td>

                                      <td >{{$subcategory->display_name}}
                                        <td>@if ($subcategory->image != '')
                                            <img src="{{$profilepicturePath}}{{$subcategory->image}}" alt="" style="width:auto ;height:auto;">@endif
                                        </td>
                                        <?php if($subcategory->status == 1){ ?>
                                        <td id="{{$subcategory->id}}" ><span class="btn btn-block btn-success btn-sm status" data-id = "{{$subcategory->id}}" data-status = "{{$subcategory->status}}" onclick="updatestatus({{$subcategory->id}},{{$subcategory->status}})">@lang('language.Active')</span></td><?php } else { ?>

                                        <td id="{{$subcategory->id}}" ><span class="btn btn-block btn-danger btn-sm status" data-id = "{{$subcategory->id}}" data-status = "{{$subcategory->status}}" onclick="updatestatus({{$subcategory->id}},{{$subcategory->status}})">@lang('language.Inactive')</span></td><?php } ?>

                                    <td>
                                        <a href="{{route('subcategories.edit', $subcategory->id)}}"  class="btn btn-outline-secondary btn-sm edit" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="{{route('subcategories.view', $subcategory->id)}}"  class="btn btn-outline-secondary btn-sm edit" title="View"><i class="fas fa-eye"></i></a>
                                        <a  href="javascript:void(0);"  class="btn btn-outline-secondary btn-sm delete" id="deletesubcategories" data-id="{{$subcategory->id}}" title="Delete"><i class="fas fa-trash-alt"></i></a>
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
            url: '{{route("subcategories_status")}}',
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


            $(document).on('click','#deletesubcategories',function(){
                var id = $(this).attr('data-id');

                 Swal.fire({
                      title: "@lang('language.Confirm_alert')",
                      text: "@lang('language.delete_subcat')",
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
                             url: '{{route("deletesubcategories")}}',
                             data: {'id': id, "_token": "{{ csrf_token() }}"},
                             success: function(data){
                                 if(data == "delete"){

                                 Swal.fire({
                                       title: "@lang('language.Sub_Categories')",
                                       icon:"@lang('language.success')",
                                       text: "@lang('language.Subcategory_deleted')",
                                       type: "success"
                                }).then(function() {
                                        history.go(0)
                                     });

                            }else{

                                   Swal.fire({
                                       title: "Subcategory",
                                       icon:"@lang('language.error')",
                                        text: "@lang('language.error_msg')",
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
