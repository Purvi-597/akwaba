@extends('layouts.master')

@section('title')  Settings @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/summernote/summernote.min.css')}}">
<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>

<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/select2/select2.min.css')}}">
{{--<link href="{{ URL::asset('assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet"
   type="text/css">--}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.css" />

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
@slot('title') Demo @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
               
                <div class="field_wrapper">
                    <div class="row">
                        <div class="col-md-2">
                        <select id="days" name="days[]" class="form-control days select2">
                            <option value="" selected disabled>Select Days</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuseday">Tuseday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            <option value="Saturday">Saturday</option>
                            <option value="Sunday">Sunday</option>
                        </select>
                        </div>
                        <div class="col-md-3" id="bg">
                       
                             <div class="input-group">
                             <input type="text" class="time1 start" id="start" />
                             <div class="input-group-append">
                             <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                            </div>
                            </div>
                    
                        </div>
                         <div class="col-md-3" id="bg">
                            
                             <div class="input-group">
                              <input type="text" class="time2 end" id="end" />
                              <div class="input-group-append">
                              <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                              </div>
                             </div>                        
                        </div>
                      
                        <div class="col-md-3">                      
                        <a href="javascript:void(0);" class="btn btn-md btn-success add_button" title="Add field" data-id="0">Add</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
<script src="{{ URL::asset('assets/libs/select2/select2.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/datepicker/datepicker.min.js')}}"></script>

<script src="{{ URL::asset('assets/js/pages/form-advanced.init.js')}}"></script>


<script src="https://jonthornton.github.io/Datepair.js/dist/datepair.js"></script>
  <script src="https://jonthornton.github.io/Datepair.js/dist/jquery.datepair.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
              
     
        var maxField = 7; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
       
        var x = 0; //Initial field counter is 1
        var j = 1;
        //Once add button is clicked
        $(addButton).click(function(){
            var val = $(".days").val();
            var startx = x - 1;
            var startmain = $("#start").val();
            var endmain = $("#end").val();
            var start = $("#start_"+startx).val()
            var end = $("#end_"+startx).val();   


             if ( typeof endmain !== "undefined" && endmain) {
              var endsplit  = $("#end").val().split(' ');
              if(endsplit[0]){   
                  var hour = endsplit[0].split(':');
       
                  if(hour[1] == 30){
                     var min = parseInt(hour[1])+parseInt(30);
                      if(min == 60){
                        min = "00";
                      }
                    var hour = parseInt(hour[0])+parseInt(1);
                     
                 var ampm = endsplit[1];

                 var endmain1 = hour+":"+min+" "+ampm;
              
                   
                   }else{                   
                      var min = parseInt(hour[1])+parseInt(30);                     
                      var ampm = endsplit[1];
                      var endmain1 =  hour[0] +":"+min+" "+ampm;
                  }
                  }
            
          } 
              if ( typeof end !== "undefined" && end) {
              var endsplit  = $("#end_"+startx).val().split(' ');
              if(endsplit[0]){   
                  var hour = endsplit[0].split(':');
       
                  if(hour[1] == 30){
                     var min = parseInt(hour[1])+parseInt(30);
                      if(min == 60){
                        min = "00";
                      }
                    var hour = parseInt(hour[0])+parseInt(1);
                 var ampm = endsplit[1];
                 var endfirst = hour+":"+min+" "+ampm;
          
                   }else{
                   
                      var min = parseInt(hour[1])+parseInt(30);                     
                      var ampm = endsplit[1];
                      var endfirst =  hour[0] +":"+min+" "+ampm;
                        
                  }
                  }
            
          } 

          var ends = [];
           ends.push([start,end]);

           var fieldHTML = '<div class="row" id="row_'+x+'">'+
            '<div class="col-md-2">'+
               ' <select id="days" name="days[]" class="form-control days select2">'+
                          '  <option value="" selected disabled>Select Days</option>'+
                            '<option value="Monday">Monday</option>'+
                         ' <option value="Tuseday">Tuseday</option>'+
                            '<option value="Wednesday">Wednesday</option>'+
                            '<option value="Thursday">Thursday</option>'+
                            '<option value="Friday">Friday</option>'+
                            '<option value="Saturday">Saturday</option>'+
                            '<option value="Sunday">Sunday</option>'+
                        '</select></div>'+
                        '<div class="col-md-3" id="bg">'+                       
                            '<div class="input-group">'+ 
                            '<input type="text" class="time1 start_1" id="start_'+x+'"/>'+
                             '<div class="input-group-append">'+
                             '<span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>'+
                            '</div></div> </div>'+ 
                             '<div class="col-md-3" id="bg"><div class="input-group"><input type="text" class="time2 end_1"    id="end_'+x+'" />'+
                              '<div class="input-group-append"><span class="input-group-text">'+
                              '<i class="mdi mdi-clock-outline"></i></span>'+
                             '</div></div></div>'+
                            '<div class="col-md-3">'+
                        '<a href="javascript:void(0);" class="btn btn-md btn-danger remove_button" title="Remove field">Remove</a>'+
                        '</div></div>';        
            
          
            //Check maximum number of input fields
            if(x < maxField){ 
                //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
               $('.days option[value='+val+']').attr("selected", "selected");
                             $(".time1").timepicker({
        'showDuration': true,
        'timeFormat': 'h:i A',
         'disableTimeRanges': [
          [startmain,endmain],
            [start,end]
           
            // [start1,end1]

          ]
         // 'disableTimeRanges': ,end
    });

        $(".time2").timepicker({
        'showDuration': true,
        'timeFormat': 'h:i A',
         'disableTimeRanges': [
         [startmain,endmain1],
             [start,endfirst]
             

          ]
         // 'disableTimeRanges': ,end
    });
            x++;      
            }
      console.log(ends);
        });
        
        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parent('div').parent("div").remove(); //Remove field html
            x--; //Decrement field counter
        });


});
    </script>
    <script type="text/javascript">
         $('.time1').timepicker({
        'showDuration': true,
        'timeFormat': 'h:i A'
        
    });
           $('.time2').timepicker({
        'showDuration': true,
        'timeFormat': 'h:i A'
        
    });

        </script>
@endsection