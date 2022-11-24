@extends('layouts.master')
@section('title')@lang('language.feedback') @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}">
@endsection
@section('content')
@component('common-components.breadcrumb')
@slot('title')@lang('language.feedback') @endslot
@slot('add_btn') <h4 class="card-title">
    {{-- <a style="margin-left: -28%;background:#314667;border:1px solid #314667;color:white;" href="{{ route('place_advertisement.create') }}"
        class="btn btn-primary waves-effect btn-label waves-light" ><i class="bx bx-plus label-icon"></i>@lang('language.Add_place') </a> --}}

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
                                <th  width="15%">@lang('language.name')</th>
                                <th  width="15%">@lang('language.email')</th>
                                <th  width="15%">@lang('language.contact_no')</th>
                                <th  width="15%">@lang('language.message')</th>
                                <th  width="15%">@lang('language.Status')</th> 
                                <th width ="15%">Reply</th>       
                            </tr>
                        </thead>
                        <tbody>
                            
                            @if(count($feedback)>0)
                            @php $i = 1; @endphp
                                @foreach($feedback as $feedback)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td >{{$feedback->name}}</td>
                                        <td >{{$feedback->email}}</td>
                                        <td >{{$feedback->contact_no}}</td>
                                        <td >{{$feedback->message}}</td>
                                        
                                        
                                        <?php if($feedback->status == 1){ ?>
                                            <td id="{{$feedback->id}}" ><span class="btn btn-block btn-success btn-sm status" data-id = "{{$feedback->id}}" data-status = "{{$feedback->status}}" onclick="updatestatus({{$feedback->id}},{{$feedback->status}})">@lang('language.Active')</span></td><?php } else { ?>
    
                                            <td id="{{$feedback->id}}" ><span class="btn btn-block btn-danger btn-sm status" data-id = "{{$feedback->id}}" data-status = "{{$feedback->status}}" onclick="updatestatus({{$feedback->id}},{{$feedback->status}})">@lang('language.Inactive')</span></td><?php } ?>

                                            <td id="{{$feedback->id}}" ><span class="btn btn-block btn-success btn-sm status btnreply" data-id = "{{$feedback->id}}" >Reply</span></td> 


                                            <!-- Button trigger modal -->
                                            {{-- data-toggle="modal" data-target="#exampleModal"  --}}
                                                {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                    Launch demo modal
                                                </button> --}}
                                                
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Reply</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <input type="hidden" id="reply_id" name="reply_id">
                                                        <div class="modal-body">
                                                            <textarea class="form-control" name="message" id="message"></textarea>
                                                        </div>

                                                
                                                        
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" id="reply" class="btn btn-primary">Send</button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
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

<script>
    $(".btnreply").click(function(){
        var id = $(this).attr('data-id');
        $("#reply_id").val(id)
        $("#exampleModal").modal('show');
    
    $(document).click(function(){
        $("#reply").click(function() {
            var reply_id = $('#reply_id ').val();
            var message = $("#message").val();

            $.ajax({
            type: "POST",
            url: '{{route("feedbackemail")}}',
            data: {'reply_id': reply_id,'message':message,"_token": "{{ csrf_token() }}"},
            success: function(data){
                
               if(data == 1){
               
                $(".emailcheckerror").css("display", "block");
                $("#save").attr("disabled", true);

               }
               else{
                $("#save").attr("disabled", false);
                 $(".emailcheckerror").css("display", "none");
               }
            }
            });     
        });
    });
    });
    

    
</script>
@endsection