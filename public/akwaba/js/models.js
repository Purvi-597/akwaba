$(document).ready(function (){

    $("#interesting_places").click(function(){
    $(".indexDiv").css('display','none');
    $(".morecategoryDiv").css('display','none');
    $(".featuredDiv").removeClass('extralarge');
    $(".featuredDiv").css('display','flex');
   });
   $(document).on('click','#interesting_close',function(){
       $(".indexDiv").css('display','block');
       $(".featuredDiv").css('display','none');
       $(".morecategoryDiv").css('display','none');
       $(".eatoutDiv").css('display','none');
   });
   $(document).on("click",'#add_phone_number',function(){

       var length = $(".leftinputdiv").length;

       var i = length + 1;
       if(length < 2){
       var html ='<div class="leftinput leftinputdiv leftinputdiv_'+i+'"><div class="phone_number_div" id="phone_number_div">';
           html += '<div class="fields phone1"><div class="input-field"><input type="text" id="phone_number_'+i+'"name="phone_number[]" class="field-input" placeholder="Phone number">';
           html += '</div></div>';
           html += '<div class="fields phone2">';
           html += '<div class="input-field phone_number_comment_div" id="phone_number_comment_div">';
           html += '<input type="text" name="phone_number_comment[]" id="phone_number_comment_'+i+'"class="field-input" placeholder="Comment on phone number">';
           html += '</div> </div></div> </div>';
           html += '<div class="icon-cross remove_leftinputdiv_'+i+'">';
           html += '<a href="javascript:void(0);" class="cancel_phonenumber" data-id="'+i+'" ><i class="fa fa-times" aria-hidden="true"></i></a>';
           html += '</div>';
       $(".phonedives").append(html)
       }
   });
   $(document).on("click",'.cancel_phonenumber',function(){
       var id = $(this).attr('data-id');
       if(id > 1){
       $(".leftinputdiv_"+id).remove();
       $(".remove_leftinputdiv_"+id).remove();
       }
   });
   $(document).on("click",'#add_website',function(){
       var length = $(".websitedivs").length;

     var i = length + 1;
     if(length < 2){
       var html =  '<div class="leftinput websitedivs website_'+i+'">';
           html +=  '<div class="fields">';
           html +=  '<div class="input-field">';
           html +=  ' <input type="text" name="website[]" class="field-input" placeholder="Website or page in social networks">';
           html +=  '</div>';
           html +=  '</div>';
           html +=  '</div>';
           html +=  '<div class="icon-cross remove_website_'+i+'">';
           html +=  '<a href="javascript:void(0);" class="cancel_website" data-id="'+i+'" id="cancel_website_'+i+'">';
           html +=  '  <i class="fa fa-times" aria-hidden="true"></i>';
           html +=  '</a>';
           html +=  '</div>';
           $(".websites").append(html);
     }
   });
   $(document).on("click",'.cancel_website',function(){
       var id = $(this).attr('data-id');
       $(".website_"+id).remove();
       $(".remove_website_"+id).remove();
   });


if (window.File && window.FileList && window.FileReader) {
$("#uploadimg").change(function(e) {


if($(".pip").length > 1){
 $(".pip").remove("");
}

if ($("#uploadimg")[0].files.length > 5) {
    $("#uploadimg").val(null);
$("#image_other_error").html("You can only upload 3 images");
}
else{
for (var i = 0; i < this.files.length; i++){
       let name = e.target.files[i].name;
           $("#image_other_error").html("");
           var files = e.target.files,
               filesLength = files.length;

       var ext = name.split('.').pop().toLowerCase();
       if($.inArray(ext, ['png','jpg','jpeg','jfif']) == -1) {
           $(".o-img").remove();
       $("#image_other_error").html("Please upload images of following formats(*png,jpeg,jpg,jfif).");
           var html = '<input type="file" class="o-img oim" name="image[]" id="image" multiple  accept=".gif,.jpg,.jpeg,.png" onchange="get_other_image(this);"/>';
           $(".other-img").append(html);

       }else{
           $("#image_other_error").html("");
               var f = files[i];
               var fileReader = new FileReader();
               fileReader.onload = (function(ev) {
                   var html =   $("<span class=\"pip\">" +
                   "<img class=\"imageThumb\" height=\"100px\" width=\"100px\" src=\"" + ev.target.result + "\" title=\"" + name + "\"/>" +
                   "<a href=\"javascript:void(0)\" id=\"deleteBtn\" style=\"display: block;\" data-id=\"${Files.length}\" onclick=\"removefiles('"+ name +"')\">"+
                   "<span class=\"close_imge\"><i class=\"fa fa-window-close\" aria-hidden=\"true\"></i></span>"+
                                       "</a>" +
                   "</span>");
                   $(".img_section").append(html);

                   $(document).on('click','#deleteBtn',function(){

                   $(this).parent(".pip").remove();
                   });


               });
           fileReader.readAsDataURL(f);
           }
       }

       }
           });
       } else {

       }
       $(document).on("change","#company_name",function(){
           if($(this).val() == ""){
               $("#company_name_error").text("Please provide a company");
           }else{
               $("#company_name_error").text("");
           }
       });
       $(document).on("change","#area_of_activity",function(){
           if($(this).val() == ""){
               $("#area_of_activity_error").text("Please provide a company");
           }else{
               $("#area_of_activity_error").text("");
           }
       });
       $(document).on("change","#company_address",function(){
           if($(this).val() == ""){
               $("#company_address_error").text("Please provide a company");
           }else{
               $("#company_address_error").text("");
           }
       });
       $(document).on("change","#add_company_email",function(){
           if($(this).val() == ""){
               $("#error_add_company_email").text("Please provide a email address");
           }else{
               $("#error_add_company_email").text("");
           }
       });

       $(document).on("click","#save_company",function(){
           var company_name  = $("#company_name").val();
           var area_of_activity = $("#area_of_activity").val();
           var company_address = $("#company_address").val();

           if(company_name == "" || company_name == undefined){
               $("#company_name_error").text("Please provide a company");

           }
           if(area_of_activity == "" || area_of_activity == undefined){
               $("#area_of_activity_error").text("Please provide a area of activity");


           }
           if(company_address == "" || company_address == undefined){
               $("#company_address_error").text("Please provide a address");

           }
           if(company_address == "" || area_of_activity == "" || company_name == ""){
               return false;
           }
           var form = $('#frm1')[0];
           var data = new FormData(form);
           $.ajax({
           url:"add_company.php",
           type: "POST",
           enctype: 'multipart/form-data',
           data:data,
           contentType: false,
           cache: false,
           processData:false,
           dataType: 'text',
           success: function(data){
               if($.trim(data) == 'success'){
                   $("#addcompanyModalCenter").modal('hide');
                   $('#frm1').trigger("reset");
                   $(".pip").remove();
                   Swal.fire({
                              title: "New company",
                              icon:"success",
                              text: "we will make changes after verify your details",
                              type: "success"
                       });


               }else{

                   Swal.fire({
                              title: "New company",
                              icon:"success",
                              text: "New company not added.please try again.",
                              type: "error"
                       });


               }


            }
          });
       });
           $(document).on("click","#save_company_without_login",function(){
               var company_name  = $("#company_name").val();
           var area_of_activity = $("#area_of_activity").val();
           var company_address = $("#company_address").val();

           if(company_name == "" || company_name == undefined){
               $("#company_name_error").text("Please provide a company");

           }
           if(area_of_activity == "" || area_of_activity == undefined){
               $("#area_of_activity_error").text("Please provide a area of activity");


           }
           if(company_address == "" || company_address == undefined){
               $("#company_address_error").text("Please provide a address");

           }
           if(company_address == "" || area_of_activity == "" || company_name == ""){
               return false;
           }
           $("#addcompanyModalCenter").modal('hide')
           $("#addcompanyModal2Center").modal('show');
           });
           $("#final_save").click(function(){
               var add_company_email = $("#add_company_email").val();
               if(add_company_email == "" || add_company_email == undefined){
               $("#error_add_company_email").text("Please provide a email address");

                   return false;
           }
           var check = validateEmail(add_company_email);
           if(check == false){
               $("#error_add_company_email").text("Please provide a valid email address");
               return false;
           }else{
               $("#error_add_company_email").text("");
           }
           var form = $('#frm1')[0];
           var data1 = new FormData(form);
           $.each($("#uploadimg")[0].files, function(i, file) {
           data1.append('file', file);
           });
           data1.append('email',add_company_email);

           $.ajax({
           url:"add_company.php",
           type: "POST",
           enctype: 'multipart/form-data',
           data:data1,
           contentType: false,
           cache: false,
           processData:false,
            dataType: 'text',
            success: function(data){
               console.log(data)


                   if($.trim(data) == 'success'){
                   $("#addcompanyModal2Center").modal('hide');
                   $('#frm1').trigger("reset");
                   $(".pip").remove();
                   Swal.fire({
                              title: "New company",
                              icon:"success",
                              text: "we will make changes after verify your details",
                              type: "success"
                       });


               }else{

                   Swal.fire({
                              title: "New company",
                              icon:"success",
                              text: "New company not added.please try again.",
                              type: "error"
                       });


               }


            }
           });
           });
           $("#signInbutton2").click(function(){
               $("#addcompanyModal2Center").modal('hide');
               $("#addcompanyModalCenter").modal('hide');
               $("#exampleModal1").modal('show');
           });
           $(".addcompanyModalCenter_close").click(function(){

               if (confirm('Close the window? Your changes will not be saved')) {
                   $("#addcompanyModalCenter").modal('hide');
                   $("#company_name_error").text('');
                   $("#company_address_error").text('');
                   $("#area_of_activity_error").text('');
                   $('#frm1').trigger("reset");
               } else {

                }
           });
           $(".addcompanyModal2Center_close").click(function(){

              if (confirm('Close the window? Your changes will not be saved')) {
                  $("#addcompanyModal2Center").modal('hide');

                  $('#frm1').trigger("reset");
                  $("#addcompanyModal2Center").remove();
                  $("#add_company_email").val();
                $("#company_name_error").text('');
                $("#company_address_error").text('');
                $("#area_of_activity_error").text('');

              } else {

               }
          });

          $("#company_address").keyup(function(){
           var search = $(this).val();
           if(search != ""){
             $("#searchResult").css('display','block')
           var xmlhttp = new XMLHttpRequest();
             var url = "https://nominatim.openstreetmap.org/search?country=uae&format=json&q=" + search;
             xmlhttp.onreadystatechange = function()
             {
             if (this.readyState == 4 && this.status == 200)
             {
                 var myArr = JSON.parse(this.responseText);
                 myFunction(myArr);
             }
             };
             xmlhttp.open("GET", url, true);
             xmlhttp.send();
           }
          });
           function myFunction(arr)
           {
           var out = "";
           var i;

           if(arr.length > 0)
           {
           for(i = 0; i < arr.length; i++)
           {
            //Jainil

               // arr[i].lat arr[i].lon <img src="assets/img/icons/signin.png">
           out +='<div class="img_top_username autodiv">';
           out +='<div class="signinbtn1 address" data-latitude="'+arr[i].lat+'" data-longtitude="'+arr[i].lon+'">';
           out +='<p>'+arr[i].display_name+'</p></div>';
           // out += "<li class='address' data-latitude='"+arr[i].lat+"' data-longtitude='"+arr[i].lon+"'>"+ arr[i].display_name + "</li>";
           }
           document.getElementById('searchResult').innerHTML = out;
           }
           // else
           // {
           // document.getElementById('searchResult').innerHTML = "Sorry, no results...";
           // }

           }
           // $(".address").on("click", function(){
               $(document).on('click','.address',function(){
               var latitude = $(this).attr('data-latitude');
               var longtitude = $(this).attr('data-longtitude');
               console.log(latitude,longtitude)
               $("#company_address").val($(this).text());
               $("#company_latitude").val(latitude);
               $("#company_longtitude").val(longtitude);
               $(".autodiv").remove();
               $("#searchResult").hide();
           });
                var _URL = window.URL || window.webkitURL;
               $(document).on('change','#images_0',function(e){
                var file, img;

                let name = e.target.files[0].name;
               if ((file = this.files[0])) {
                 var ext = name.split('.').pop().toLowerCase();

                 if($.inArray(ext, ['png','jpg','jpeg']) == -1) {
                   $("#image0_error").text("@lang('language.image_format')");
                   $("#images_0").val("");
                   $("#images_0").val(null);
                   $("#image_main0").attr('src','');
                   $("#image_main0").css('display','none');
                 }else{
                   img = new Image();
                   img.onload = function() {
                       $("#image0_error").text("");
                       $("#image_main0").css("display", "block");
                       $('#image_main0').attr('src', img.src).height(30).width(30);
                   }
                };
                img.src = _URL.createObjectURL(file);
               }
               });
               $('input[type=radio][name=place_type]').change(function() {
                   if (this.value == 'POI') {
                       $('#place_name_div').css('display', 'block');
                       $('#link_div').css('display', 'none');
                   }
                   else if (this.value == 'External') {
                       $('#place_name_div').css('display', 'none');
                       $('#link_div').css('display', 'block');
                   }
               });
               //Multiple iMages for Advertising multiple_photos image_multiple_error img_section1
               if (window.File && window.FileList && window.FileReader) {
               $("#multiple_photos").change(function(e) {

               if($(".pip").length > 1){
               $(".pip").remove("");
               }

               if ($("#multiple_photos")[0].files.length > 5) {
                   $("#multiple_photos").val(null);
                   $("#image_multiple_error").html("You can only upload 3 images");
               }
           else{
           for (var i = 0; i < this.files.length; i++){
            let name = e.target.files[i].name;
           $("#image_multiple_error").html("");
           var files = e.target.files,
               filesLength = files.length;

           var ext = name.split('.').pop().toLowerCase();
           if($.inArray(ext, ['png','jpg','jpeg','jfif']) == -1) {

           $("#image_multiple_error").html("Please upload images of following formats(*png,jpeg,jpg,jfif).");
           }else{
           $("#image_multiple_error").html("");
               var f = files[i];
               var fileReader = new FileReader();
               fileReader.onload = (function(ev) {
                   var html =   $("<span class=\"pip_multiple\">" +
                   "<img class=\"imageThumb\" height=\"100px\" width=\"100px\" src=\"" + ev.target.result + "\" title=\"" + name + "\"/>" +
                   "<a href=\"javascript:void(0)\" id=\"deleteBtn1\" style=\"display: block;\" data-id=\"${Files.length}\" onclick=\"removefiles('"+ name +"')\">"+
                   "<span class=\"close_imge\"><i class=\"fa fa-window-close\" aria-hidden=\"true\"></i></span>"+
                                       "</a>" +
                   "</span>");
                   $(".img_section1").append(html);

                   $(document).on('click','#deleteBtn1',function(){

                   $(this).parent(".pip_multiple").remove();
                   });


                       });
                   fileReader.readAsDataURL(f);
                   }
               }

               }
                   });
               } else {

               }
               $('.place_type').change(function(){
               selected_value = $("input[name='contacts']:checked").val();
               if(selected_value != ''){
                   $("#place_type_error").text("");
               }else{
                   $("#place_type_error").text("Please provide a place type");
               }
               });


               $(document).on('change','#place_title',function(){
                   if($(this).val() == ""){
                       $("#place_title_error").text("Please provide a area of activity");
                   }else{
                       $("#place_title_error").text("");
                   }
               });


               $(document).on('change','#place_link',function(){
                   if($(this).val() == ""){
                       $("#place_link_error").text("Please provide a link");
                   }else{
                       $("#place_link_error").text("");
                   }
               });
               $(document).on('change','#place_name',function(){
                   if($(this).val() == ""){
                       $("#place_name_error").text("Please provide a link");
                   }else{
                       $("#place_name_error").text("");
                   }
               });
               $(document).on('change','#image_main0',function(){
                   if($(this).val() == ""){
                       $("#image0_error").text("Please provide a image");
                   }else{
                       $("#image0_error").text("");
                   }
               });
               $(document).on("click","#save_advertising",function(){
               var place_title = $("#place_title").val();
               var place_image =  $("#images_0").val();
               var place_type_check =  $('.place_type').is(':checked');
               var place_type =  $('input[name="place_type"]:checked').val();
               var place_link = $("#place_link").val();
               var place_name = $("#place_name").val();


                   if(place_title == ""){
                       $("#place_title_error").text("Please provide a place title");
                   }
                   if(place_image == ""){
                       $("#image0_error").text("Please provide a image");
                   }

                   if(place_type_check == false){
                       $("#place_type_error").text("Please provide a place type");
                   }

                   if(place_title == "" || place_type_check == false || place_image == ""){
                       return false;
                   }

                   if(place_type == "POI"){

                       if(place_name == ""){
                           $("#place_name_error").text("Please provide a place name");
                           return false;
                       }else{
                         $("#place_name_error").text("");
                       }
                   }

                   if(place_type == "External"){
                       if(place_link == ""){
                           $("#place_link_error").text("Please provide a link");
                           return false;
                       }else{
                         $("#place_link_error").text("");
                       }
                   }
                       var form = $('#frm3')[0];
                       var data1 = new FormData(form);
                       $.each($("#multiple_photos")[0].files, function(i, file) {
                       data1.append('file', file);
                       });

                       $.ajax({
                       url:"add_advertisement.php",
                       type: "POST",
                       enctype: 'multipart/form-data',
                       data:data1,
                       contentType: false,
                       cache: false,
                       processData:false,
                       dataType: 'text',
                       success: function(data){
                           if($.trim(data) == 'success'){
                               $("#addAdvertisingModel").modal('hide');
                               $(".pip_multiple").remove();
                               $('#frm3').trigger("reset");
                               $("#image_main0").css('display', 'none');
                               Swal.fire({
                              title: "Advertisement",
                              icon:"success",
                              text: "Admin can verify your advertisement and approve",
                              type: "success"
                               });
                           }else if($.trim(data) == "failed"){
                               $("#addAdvertisingModel").modal('hide');
                               Swal.fire({
                              title: "Advertisement",
                              icon:"error",
                              text: "Advertisement not added successfully.please try again",
                              type: "error"
                           });
                           }else{
                               $("#addAdvertisingModel").modal('hide');
                               Swal.fire({
                              title: "Advertisement",
                              icon:"error",
                              text: "Advertisement not added successfully.please try again",
                              type: "error"
                           });
                           }
                       }


           });
       });


       $(".AdvertisigModalCenter_close").click(function(){
        $("#addAdvertisingModel").modal('hide');
           $('#frm3').trigger("reset");

       });
   });
           function validateEmail(email) {
                   var re = /\S+@\S+\.\S+/;
                   return re.test(email);
            }
            $(document).on('click','.postratingBtn', function(){

                var userid = $("#sessionid").val();
                var osmid = $("#osmids").val();
                var message = $("#message").val();
                var rating = $('input[name="rating"]:checked').val();

                if(message == ""){
                    $("#m1_error").text("message field is required");
                    return false;
                }else{
                    $("#m1_error").text("");
                }
                if(rating == "" || rating == undefined){
                    $("#r1_error").text("rating field is required");
                    return false;
                }else{
                    $("#r1_error").text("");
                }
                var form = $('#frm_review')[0];
                var data1 = new FormData(form);
                // $.each($(".review_photos")[0].files, function(i, file) {
                // data1.append('file', file);
                // });
                if(typeof userid == 'undefined'){
                    $("#exampleModalCenter").modal('hide');
                    $("#exampleModal1").modal('show');
                }else{
                    $.ajax({
                        url:"review_ajax.php",
                        method:"POST",
                        enctype: 'multipart/form-data',
                        data: data1,
                        dataType: 'text',
                        processData: false,
                        contentType: false,
                        cache: false,
                        success: function(response){
                           
                            $("#frm_review")[0].reset();
                            $(".pip_review").remove();
                            $("#exampleModalCenter").modal('hide');
                            $(".allreviews_in").prepend(response);
                            scroll($('.allreviews_in'));
                        }
                    });
                }
            });

            var scroll = function(div) {
                var totalHeight = 0;
                div.find('.post').each(function(){
                   totalHeight += $(this).outerHeight();
                });
                div.scrollTop(totalHeight);
              }

