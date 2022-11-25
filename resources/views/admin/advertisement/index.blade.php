 @extends('layouts.master')
@section('title')@lang('language.Advertisement') @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}">
<link  href="https://cdn.datatables.net/rowreorder/1.3.1/css/rowReorder.dataTables.min.css">
<link href="https://cdn.datatables.net/select/1.5.0/css/select.dataTables.min.css">
<link rel="stylesheet" href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}">
@endsection
@section('content')
@component('common-components.breadcrumb')
@slot('title') @lang('language.Advertisement')@endslot
@slot('add_btn') <h4 class="card-title">
    <a style="margin-left: -28%;background:#314667;border:1px solid #314667;color:white;" href="{{ route('advertisement.create') }}"
        class="btn btn-primary waves-effect btn-label waves-light" ><i class="bx bx-plus label-icon"></i>@lang('language.Add_Advertisement')  </a>

    </h4> @endslot
@endcomponent
<style>
.form-control{
    color: #314667 !important;
}

#UsersList1 tbody td:first-child {
           cursor: move;
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
                                <th  width="15%"> @lang('language.Title')</th>
                                <th  width="15%">@lang('language.time')</th>
                                <th width ='15%'>Date</th>
                                <th  width="15%">Image</th>
                                <th  width="15%">Mobile Ads</th>
                                <th  width="10%">@lang('language.Link')</th>
                                <th  width="10%">@lang('language.Status')</th>
                                <th  width="20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $advertisementPath = '/uploads/advertisement/'; @endphp
                            @if(count($advertisement)>0)
                            @php $i = 1; @endphp
                                @foreach($advertisement as $advertisement)
                                    <tr>
                                        <td>{{$i}}</td>
                                        
                                        
                                        <td >{{$advertisement->title}}</td>
                                        <td >{{$advertisement->time}}</td>
                                        <td >{{$advertisement->date}}</td>
                                        <td>@if ($advertisement->image != '')
                                            <img src="{{$advertisementPath}}{{$advertisement->image}}" alt="" style="width: 100px;height:100px;">@endif
                                        </td>

                                        <td>@if ($advertisement->mobile_ads != '')
                                            <img src="{{$advertisementPath}}{{$advertisement->mobile_ads}}" alt="" style="width: 100px;height:100px;">@endif
                                        </td>

                                        <td >{{$advertisement->link}}</td>

                                        <?php if($advertisement->status == 1){ ?>
                                        <td id="{{$advertisement->id}}" ><span class="btn btn-block btn-success btn-sm status" data-id = "{{$advertisement->id}}" data-status = "{{$advertisement->status}}" onclick="updatestatus({{$advertisement->id}},{{$advertisement->status}})">@lang('language.Active')</span></td><?php } else { ?>
                                    
                                        <td id="{{$advertisement->id}}" ><span class="btn btn-block btn-danger btn-sm status" data-id = "{{$advertisement->id}}" data-status = "{{$advertisement->status}}" onclick="updatestatus({{$advertisement->id}},{{$advertisement->status}})">@lang('language.Inactive')</span></td><?php } ?>
                                        

                                    <td>
                                        <a href="{{route('advertisement.edit', $advertisement->id)}}"  class="btn btn-outline-secondary btn-sm edit" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="{{route('advertisement.view', $advertisement->id)}}"  class="btn btn-outline-secondary btn-sm edit" title="View"><i class="fas fa-eye"></i></a>
                                        <a  href="javascript:void(0);"  class="btn btn-outline-secondary btn-sm delete" id="deleteadvertisement" data-id="{{$advertisement->id}}" title="Delete"><i class="fas fa-trash-alt"></i></a>

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
<script src="https://cdn.datatables.net/rowreorder/1.3.1/js/dataTables.rowReorder.min.js"></script>

<script src="https://cdn.datatables.net/select/1.5.0/js/dataTables.select.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('#UsersList1').DataTable({
                rowReorder: true,
              
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
        });
</script>

        <script>
            function updatestatus(id,status)
            {
               
            $.ajax({
            type: "POST",
            url: '{{route("advertisement_status")}}',
            data: {'status': status, 'id': id, "_token": "{{ csrf_token() }}"},
            success: function(data){
              if(data.return =='Active')
              {
                status = 1;
                var html = '<span class="btn btn-block btn-success btn-sm status" data-id ="'+id+'" data-status = "'+status+'" onclick="updatestatus('+id+','+status+')">@lang("language.Active")</span>';


                Swal.fire(
                                '@lang("language.Status")',
                                '@lang("language.Status_Changed")',
                                'success'
                                )   

              }
              else
              {
                status = 0;
                var html = '<span class="btn btn-block btn-danger btn-sm status" data-id = "'+id+'" data-status = "'+status+'" onclick="updatestatus('+id+','+status+')">@lang("language.Inactive")</span>';

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


            $(document).on('click','#deleteadvertisement',function(){
                var id = $(this).attr('data-id');
               
                 Swal.fire({
                      title:  "@lang('language.Confirm_alert')",
                      text: "@lang('language.delete_advertisement')",
                      type: "warning",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#34BA8E',
                      cancelButtonColor: '#d33',
                      confirmButtonText: '@lang("language.Yes")',
                      cancelButtonText : '@lang("language.Cancel")'
                    }).then((result) => {
                      
                      if (result.value){
                        
                          $.ajax({
                             type: "POST",
                             url: '{{route("deleteadvertisement")}}',
                             data: {'id': id, "_token": "{{ csrf_token() }}"},
                             success: function(data){
                                 if(data == "delete"){
                               
                                 Swal.fire({
                                       title: "@lang('language.Advertisement')",
                                       icon:"success",
                                       text: "@lang('language.ad_deleted')",
                                       type: "success"
                                }).then(function() {
                                        history.go(0)
                                     });

                            }else{

                                   Swal.fire({
                                       title: "Advertisement",
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