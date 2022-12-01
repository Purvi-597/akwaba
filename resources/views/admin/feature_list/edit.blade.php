@extends('layouts.master')
@section('title')  Update feature @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/select2/select2.min.css')}}">
<link href="{{ URL::asset('assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet"
    type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}">
@endsection
@section('content')
@component('common-components.breadcrumb')
@slot('title') Update feature @endslot
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
        <form class="needs-validation" method="post" enctype="multipart/form-data" action="{{route('feature_list.update',$feature_list->id)}}" novalidate>
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
             <form class="needs-validation" method="post" enctype="multipart/form-data" action="{{route('feature_list.update',$feature_list->id)}}" novalidate>
                @csrf
                
                <input type="hidden" value="{{ $feature_list->id }}" name="id" id="id">
            
                <div class="form-group">
                    <label>Choose a Feature Places:</label>
                    <select id="featured_places_id" name="featured_places_id" class="form-control">
                      <option value="">Select Feature Places</option>
                      @foreach($feature as $feature)
                      <option value="{{$feature->id}}" {{ $feature->id == $feature_list->featured_places_id ? 'selected':'' }}>{{$feature->title}}</option>
                    @endforeach

                    </select>
                  </div>


                  <div class="form-group">
                    <label for="formrow-quest_name-input">@lang('language.Place_Name')</label>
                    <select class="js-example-basic-single form-control" name="place_name" id="place_name">
                    @foreach($places as $row)
                        <option value="{{$row->osm_id}}" @if($feature_list->osm_id == $row->osm_id) selected @endif>{{$row->name}}</option>
                    @endforeach
                    </select>
                    <div class="invalid-feedback">
                        @lang('language.Please provide a place name.')'
                    </div>
                </div>  
                  
                <div class="form-group">
                        <label for="formrow-quest_name-input">@lang('language.Title')</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Enter  title" value="{{$feature_list->title}}" required>
                        <div class="invalid-feedback">
                            @lang('language.Title_validation')
                        </div>
                </div>

                <div class="form-group">
                    <label for="formrow-quest_name-input">@lang('language.French_Title')</label>
                    <input type="text" class="form-control" name="title_fr" id="title_fr" placeholder="@lang('language.frTitle_placeholder')" value="{{$feature_list->title_fr}}" required>
                    <div class="invalid-feedback">
                        @lang('language.frTitle_validation')
                    </div>
            </div>


                <div class="form-group">
                    <label for="formrow-quest_name-input"> @lang('language.Description')</label>
                    <textarea class="form-control" name="description" id="description" placeholder="Enter  Description"  required>{{$feature_list->description}}</textarea>
                    <div class="invalid-feedback">
                        @lang('language.Description_validation')
                    </div>
                </div>    

                <div class="form-group">
                    <label for="formrow-quest_name-input">@lang('language.FrDescription')</label>
                    <textarea class="form-control" name="description_fr" id="description_fr" placeholder="Enter  French Description" required>{{$feature_list->description_fr}}</textarea>
                    <div class="invalid-feedback">
                        @lang('language.FrDescription_validation')
                    </div>
                </div>

                <div class="form-group">
                    <label for="formrow-quest_name-input">@lang('language.Rating')</label>
                    <input type="text" class="form-control" name="ratings" id="ratings" placeholder="Enter  ratings" value="{{$feature_list->ratings}}" required>
                    <div class="invalid-feedback">
                        Please provide a Ratings.
                    </div>
                </div>
                        
                <div class="row">
                     <div id="req_input" class="form-group col-md-12">
                       <label for="formrow-quest_name-input"> Image <span style="color:red;">*</span></label>
                          
                             <input type="file"  class="form-control images_0" name="image" id="images_0" ><br>
                                <label id="lbl1" for="formrow-quest_name-input"><?php if(isset($feature_list->image)){ echo $feature_list->image; } ?></label><br>
                                       @if(!empty($feature_list->image))
                               <img src='/uploads/feature_list/{{$feature_list->image}}' id="image_main0" name="image_main0" class="image_main0" height="100" width="100">
                                @endif
                                <img  id="image_main1" name="image_main1" class="image_main1" height="100" width="100" style="display:none;">
                            <input type="hidden" name="old_image0" value="<?php if(isset($feature_list->image)){ echo $feature_list->image; } ?>">
                               
                                {{-- @if(!empty($feature_list->image))
                                 <br><br>
                                &nbsp;&nbsp;<a href="javascript:void(0);" id="deleteimage" class="btn btn-danger" data-id="{{ $feature_list->id }}">Remove</a>
                                @endif --}}
                          <span id="image0_error"  style="color:red"></span>
                    </div>
                </div>
               
                         <div class="form-group"></div>
                        <div class="form-group ">
                            <div class="custom-control custom-checkbox">
                                  @php $checked=""; @endphp
                                @if($feature_list->status == 1)
                                    @php $checked="checked"; @endphp
                                @endif
                                <input type="checkbox" name="status" class="custom-control-input"  id="invalidCheck" {{$checked}}>
                                <label class="custom-control-label" for="invalidCheck" >@lang('language.Active')</label>
                                <div class="invalid-feedback">
                                    You must agree before Save.
                                </div>
                            </div>

                        </div>
                    
                        
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <button class="btn btn-success"  type="submit">@lang('language.Update')</button>
                            <a href="/admin/feature_list" class="btn btn-danger">@lang('language.Cancel')</a>
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
<script src="{{ URL::asset('assets/libs/tinymce/tinymce.min.js')}}"></script>
<script type="text/javascript">
    tinymce.init({
 selector: 'textarea#description,#description_fr',
 plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
 imagetools_cors_hosts: ['picsum.photos'],
 menubar: 'file edit view insert format tools table help',
 toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
 toolbar_sticky: true,
 autosave_ask_before_unload: true,
 autosave_interval: "30s",
 autosave_prefix: "{path}{query}-{id}-",
 autosave_restore_when_empty: false,
 autosave_retention: "2m",
 image_advtab: true,
 content_css: '//www.tiny.cloud/css/codepen.min.css',
 link_list: [
   { title: 'My page 1', value: 'http://www.tinymce.com' },
   { title: 'My page 2', value: 'http://www.moxiecode.com' }
 ],
 image_list: [
   { title: 'My page 1', value: 'http://www.tinymce.com' },
   { title: 'My page 2', value: 'http://www.moxiecode.com' }
 ],
 image_class_list: [
   { title: 'None', value: '' },
   { title: 'Some class', value: 'class-name' }
 ],
 importcss_append: true,
 file_picker_callback: function (callback, value, meta) {
   /* Provide file and text for the link dialog */
   if (meta.filetype === 'file') {
     callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
   }
   /* Provide image and alt text for the image dialog */
   if (meta.filetype === 'image') {
     callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
   }
   /* Provide alternative source and posted for the media dialog */
   if (meta.filetype === 'media') {
     callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
   }
 },
 templates: [
       { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
   { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
   { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
 ],
 template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
 template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
 height: 520,
 image_caption: true,
 quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
 noneditable_noneditable_class: "mceNonEditable",
 toolbar_mode: 'sliding',
 contextmenu: "link image imagetools table",
});

</script> 




<script>
        $(document).ready(function () {
            
           
                var _URL = window.URL || window.webkitURL;
$(document).on('change','#images_0',function(e){
      $("#image_main0").css('display','none');
      $("#deleteimage").css('display','none');
    $("#image_main1").css('display','block');
 var file, img;

 let name = e.target.files[0].name;
if ((file = this.files[0])) {
  var ext = name.split('.').pop().toLowerCase();

  if($.inArray(ext, ['png','jpg','jpeg']) == -1) {
  $("#image0_error").text("@lang('language.image_format')");
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


             $("#profile_picture").change(function(){
         //submit the form here
         $("#presrciptionpreview").css('display','block');
          $("#deleteBtn").css("display", "block");
         
 });
            
    $("#deleteBtn").click(function(){
   $("#presrciptionpreview").css("display", "none");
   $("#deleteBtn").css("display", "none");
   $('#presrciptionpreview').attr('src', '');
   $('#profile_picture').css("display", "block");
 });

   });

$(document).on('click','#deleteimage',function(){
                var id = $(this).attr('data-id');
               
                 Swal.fire({
                      title: '@lang('language.Are You sure')',
                      text: "You want to delete this profile picture",
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
                             url: '{{route("userimagedelete")}}',
                             data: {'id': id, "_token": "{{ csrf_token() }}"},
                             success: function(data){
                                 if(data == "delete"){
                               
                                 Swal.fire({
                                       title: "User",
                                       icon:"success",
                                       text: "Profile image updated successfully",
                                       type: "success"
                          }).then(function() {
                           history.go(0)
                             });

                            }else{

                                   Swal.fire({
                                       title: "User",
                                       icon:"error",
                                       text: "Something went wrong..",
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

<script type="text/javascript">
    function CheckDimension() {
        //Get reference of File.
        var fileUpload = document.getElementById("file");
     
        //Check whether the file is valid Image.
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(.jpg|.png|.gif)$");
        if (regex.test(fileUpload.value.toLowerCase())) {
     
            //Check whether HTML5 is supported.
            if (typeof (fileUpload.files) != "undefined") {
                //Initiate the FileReader object.
                var reader = new FileReader();
                //Read the contents of Image File.
                reader.readAsDataURL(fileUpload.files[0]);
                reader.onload = function (e) {
                    //Initiate the JavaScript Image object.
                    var image = new Image();
     
                    //Set the Base64 string return from FileReader as source.
                    image.src = e.target.result;
                           
                    //Validate the File Height and Width.
                    image.onload = function () {
                        var height = this.height;
                        var width = this.width;
                        if (height < 38 || width < 29) {
     
                           //show width and height to user
                            document.getElementById("width").innerHTML=width;
                            document.getElementById("height").innerHTML=height;
                            alert("Height and Width must not exceed 38 and 29 px");
                            return false;
                        }
                        alert("Uploaded image has valid Height and Width.");
                        return true;
                    };
     
                }
            } else {
                alert("This browser does not support HTML5.");
                return false;
            }
        } else {
            alert("Please select a valid Image file.");
            return false;
        }
    }
    </script>

@endsection