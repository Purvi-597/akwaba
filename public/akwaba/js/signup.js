var bootstrap = 'assets/js/core/jquery.3.2.1.min.js';
var popper = 'assets/js/core/bootstrap.min.js';
var simplebar = 'assets/plugin/simplebar/simplebar.min.js';
var custom = 'assets/js/custom.js';
$(document).on('click', '.signupBtn', function(){
	if($("#flag").val() == "yes"){
		var firstname = $("#first_name").val();
		var lastname = $("#last_name").val();
		var email = $("#email").val();
		var psd = $("#password").val();
		var contactno = $("#contact_no").val();
		if(firstname == ""){
			$("#firstname_error_msg").text("First Name is required");
		}
		if(lastname == ""){
			$("#lastname_error_msg").text("Last Name is required");
		}
		if(email == ""){
			$("#email_error_msg").text('Please enter valid email.');
		}else{
			var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			var email = $("#email").val();
			if(!regex.test(email)) {
				$("#email_error_msg").text('Please enter valid email.');
			}else{
				$("#email_error_msg").text('');
			}
		}
		if(psd == ""){
			$("#password_error_msg").text("Password is required");
		}
		if(contactno == ""){
			$("#contact_error_msg").text("Contact no is required");
		}
		if($('#first_name').val().length != 0 && $('#last_name').val().length != 0 && $('#email').val().length != 0 && $('#password').val().length != 0 && $('#contact_no').val().length != 0 && regex.test(email)){


            $(".loader1").show();
            $(".body_demo").css('pointer-events','none');
            $(".body_demo").css('opacity','0.5');
			 $.ajax({
                    type: "POST",
                    url: 'signup_ajax.php',
					data: {'signup':'signupForm','firstname': firstname,'lastname': lastname,'email': email,'psd': psd,'contactno': contactno},
                    success: function(response){
<<<<<<< HEAD
						//alert(response);



						if(response == 'true'){
                            setTimeout(function () {
                            $(".loader1").hide();
                            $(".body_demo").css('pointer-events','auto');
                            $(".body_demo").css('opacity','1');
						  $('#exampleModal').modal('hide');
                        }, 2500);
					      window.location.href = "index.php";
						}


=======
						 var arr = response.split("|");
						if(arr[0] == 'true'){
							$("#lastinsertid").val(arr[1]);
							$("#first_name").val('');
							$("#last_name").val('');
							$("#email").val('');
							$("#password").val('');
							$("#confirmpassword").val('');
							$("#contact_no").val('');
						  $('#exampleModal').modal('hide');
						  $('#otpModal').modal('show');
						}else{
							$("#singup_error_msg").text(arr[1]);
							setTimeout(function () {
							   $('#singup_error_msg').text(''); 
							} , 2000);
							
						}  
>>>>>>> Darshan
					}
			 })
		}
	}
});
$(document).on('click', '.otpBtn', function(){
	var otp = $("#otp").val();
	var emailverification = $("#emailverification").val();
	var id = $("#lastinsertid").val();
	if(otp == ""){
		$("#otp_error_msg").text("Mobile verification code is required");
	}
	if(emailverification == ""){
		$("#emailverification_error_msg").text("Email verification code is required");
	}
	
	if(otp != "" && emailverification != ""){
		$.ajax({
				type: "POST",
				url: 'otp_ajax.php',
				data: {'verification':'verificationForm','id': id,'otpcode': otp, 'emailverification': emailverification},
				success: function(response){
					if(response == 'true'){
						$("#otp").val('');
				  	    //$('#otpModal').modal('hide');
				      location.reload();
					}else{
						$("#error_msg").text('Verification code is wrong');
						 setTimeout(function () {
							   $('#error_msg').text(''); 
						} , 2000);
					}						
				}
		 })
		
		
	}
	
	
});
$(document).on('change', '#otp', function(){
	$("#otp_error_msg").text("");
});
$(document).on('change','#first_name', function(){
	$("#firstname_error_msg").text('');
});
$(document).on('change','#last_name', function(){
	$("#lastname_error_msg").text('');
});
$(document).on('change','#email', function(){
	var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var email = $("#email").val();
	if(!regex.test(email)) {
		$("#email_error_msg").text('Please enter valid email.');
	}else{
		$("#email_error_msg").text('');
	}
});
$(document).on('change','#password', function(){
	$("#password_error_msg").text('');
});
$(document).on('change','#contact_no', function(){
	$("#contact_error_msg").text('');
});
$(document).on('click','#login', function(){
	$('#exampleModal').modal('hide');
	$('#exampleModal1').modal('show');
});
$(document).on('click','#signup', function(){
	$('#exampleModal1').modal('hide');
	$('#exampleModal').modal('show');
});

/* Login */
$(document).on('click', '.loginBtn', function(){
	if($("#flag").val() == "yes"){
		var email = $("#useremail").val();
		var psd = $("#userpassword").val();
		if(email == ""){
			$("#useremail_error_msg").text("Email is required");
		}
		if(psd == ""){
			$("#userpassword_error_msg").text("Password is required");
		}
		if($('#useremail').val().length != 0 && $('#userpassword').val().length != 0){
            $(".loader1").show();

            $(".body_demo").css('pointer-events','none');
            $(".body_demo").css('opacity','0.5');


			 $.ajax({
                    type: "POST",
                    url: 'login_ajax.php',
					data: {'login':'loginForm','email': email,'psd': psd},
                    success: function(response){
						if(response == 'true'){
                            // setTimeout(function () {
                            // }, 2500);
                            $(".loader1").hide();
                            $(".body_demo").css('pointer-events','auto');
                            $(".body_demo").css('opacity','1');
						  $('#exampleModal1').modal('hide');
					      window.location.href = "index.php";
<<<<<<< HEAD


=======
						}else{
							$('#login_error_msg').text('Login credentials are wrong! Please enter correct credentials.');
							setTimeout(function () {
							   $('#login_error_msg').text(''); 
							} , 3000);
>>>>>>> Darshan
						}
					}
			 })



		}
	}
});
$(document).on('click','.featuredBtn', function(){
<<<<<<< HEAD

	$(".indexDiv").css('display','none');
	$(".morecategoryDiv").css('display','none');
	$(".featuredDiv").removeClass('extralarge');
	$(".featuredDiv").css('display','flex');

=======
	$(".indexDiv").css('display','none');
	$(".morecategoryDiv").css('display','none');
	$(".featuredDiv").removeClass('extralarge');
	$(".featuredDiv").css('display','block');
	
>>>>>>> Darshan
});
$(document).on('click','#closeBtn', function(){
	$(".indexDiv").css('display','block');
	$(".featuredDiv").css('display','none');
	$(".morecategoryDiv").css('display','none');
	$(".eatoutDiv").css('display','none');
	//window.location.reload();
});
$(document).on('click','#featureCloseBtn', function(){
	$(".indexDiv").css('display','block');
	$(".featuredDiv").css('display','none');
	$(".morecategoryDiv").css('display','none');
	$(".eatoutDiv").css('display','none');
	//window.location.reload();
});
$(document).on('click','#EatoutCloseBtn', function(){
	var id = $("#catid").val();
	$(".indexDiv").css('display','block');
	$(".featuredDiv").css('display','none');
	$(".morecategoryDiv").css('display','none');
	$(".eatoutDiv").css('display','none');
	$('.getEatoutDetail').attr('id');
	$('.icon-'+id).attr('data-id', 'Yes');
	$(".leaflet-marker-icon").remove();
	var lat = '';
	$('.lat').empty();
	var long = '';
	$('.long').empty();
	//window.location.reload();
});


$(document).on('click','#MallsCloseBtn', function(){
	var id = $("#catid").val();
	$(".indexDiv").css('display','block');
	$(".featuredDiv").css('display','none');
	$(".morecategoryDiv").css('display','none');
	$('.icon-'+id).attr('data-id', 'Yes');
	$(".MallsDiv").css('display','none');
	$(".leaflet-marker-icon").remove();
	var lat = '';
	$('.lat').empty();
	var long = '';
	$('.long').empty();
	//window.location.reload();
});
$(document).on('click','#GroceriesCloseBtn', function(){
	var id = $("#catid").val();
	$(".indexDiv").css('display','block');
	$(".featuredDiv").css('display','none');
	$(".morecategoryDiv").css('display','none');
	$(".GroceriesDiv").css('display','none');
	$('.icon-'+id).attr('data-id', 'Yes');
	$(".leaflet-marker-icon").remove();
	var lat = '';
	$('.lat').empty();
	var long = '';
	$('.long').empty();
});
$(document).on('click','#HotelsCloseBtn', function(){
	var id = $("#catid").val();
	$(".indexDiv").css('display','block');
	$(".featuredDiv").css('display','none');
	$(".morecategoryDiv").css('display','none');
	$(".HotelsDiv").css('display','none');
	$('.icon-'+id).attr('data-id', 'Yes');
	$(".leaflet-marker-icon").remove();
	var lat = '';
	$('.lat').empty();
	var long = '';
	$('.long').empty();
	//window.location.reload();
});
$(document).on('click','#GasCloseBtn', function(){
	var id = $("#catid").val();
	$(".indexDiv").css('display','block');
	$(".featuredDiv").css('display','none');
	$(".morecategoryDiv").css('display','none');
	$(".GasDiv").css('display','none');
	$('.icon-'+id).attr('data-id', 'Yes');
	$(".leaflet-marker-icon").remove();
	var lat = '';
	$('.lat').empty();
	var long = '';
	$('.long').empty();
	//window.location.reload();
});
$(document).on('click','#iconBtn', function(){
	var id = $(this).attr('data-index');
	if(id == 7){
		$(".indexDiv").css('display','none');
		$(".morecategoryDiv").css('display','block');
	}
});
/* Feedback */
$(document).on('click', '.feedbackBtn', function(){
	if($("#feedback_flag").val() == "yes"){
		var name = $("#username").val();
		var email = $("#useremails").val();
		var contact = $("#usercontact").val();
		var message = $('textarea#usermessage').val();
		if(name == ""){
			$("#username_error_msg").text("Name is required");
		}
		if(email == ""){
			$("#useremails_error_msg").text('Please enter valid email.');
		}else{
			var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			var email = $("#useremails").val();
			if(!regex.test(email)) {
				$("#useremails_error_msg").text('Please enter valid email.');
			}else{
				$("#useremails_error_msg").text('');
			}
		}
		if(contact == ""){
			$("#usercontact_error_msg").text("Contact number is required");
		}
		if(message == ""){
			$("#usermessage_error_msg").text("Message is required");
		}
		if($('#username').val().length != 0 && $('#useremails').val().length != 0 && $('#usercontact').val().length != 0 && $('textarea#usermessage').val().length != 0 && regex.test(email)){
			  $("#feedback_flag").val("No");
			  $.ajax({
                    type: "POST",
                    url: 'feedback_ajax.php',
					data: {'feedback':'feedbackForm','name': name,'email': email,'contact': contact, 'message': message},
                    success: function(response){
						if(response == 'true'){
						   $("#success_message").text("Your feedback send successfully.");
						   setTimeout(function () {
							   $('#success_message').text('');
							   $('#FeedbackModel').modal('hide');
							   $("#feedback_flag").val("yes");
							   $("#username").val('');
							   $("#useremails").val('');
							   $("#usercontact").val('');
							   $('textarea#usermessage').val('');
							} , 2000);
						}else{
							 $("#error_message").text("Something went wrong!");
							 setTimeout(function () {
							   $("#feedback_flag").val('No');
							   $('#error_message').text('');
							} , 2000);

						}
					}
			 })
		}
	}
});
$(document).on('change','#username', function(){
	$("#username_error_msg").text('');
});
$(document).on('change','#useremails', function(){
	var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var email = $("#useremails").val();
	if(!regex.test(email)) {
		$("#useremails_error_msg").text('Please enter valid email.');
	}else{
		$("#useremails_error_msg").text('');
	}
});
$(document).on('change','#usercontact', function(){
	$("#usercontact_error_msg").text('');
});
$(document).on('change','#usermessage', function(){
	$("#usermessage_error_msg").text('');
});
$(document).on('click','.getcatDetail', function(){
	var id = $(this).attr('id');
	var cat_type = $(this).attr('data-cat-type');
	
			$.ajax({
				type: "POST",
				url: 'category_detail_ajax.php',
				data: {'eatout':'eatoutForm','id': id, 'cat_type':cat_type},
				success: function(response){
					
					console.log(response);
					$(".leaflet-marker-icon").css('display','none');
					$(".catSubsidebar").html(response);
					var lat = $('.lat').text();
					var long = $('.long').text();
					var markersLayer = new L.LayerGroup();
					let customIcon = {
						iconUrl:base_url+'assets/img/icons/ic_eat_out_20X20_Green.png',
						iconSize:[30,30]
					   }
					   let myIcon = L.icon(customIcon);
					   let iconOptions = {
						title:'company name',
						draggable:false,
						icon:myIcon
					   }
						var markerLocation = new L.LatLng(long, lat);
						var marker = new L.Marker(markerLocation, iconOptions);
						map.addLayer(marker);
						var title = $('.leaflet-marker-icon').attr('title');
						$(title).css('display','block');
						$(".catDataDiv").addClass('extralarge');
						$(".catSubsidebar").css('display','block');
				}
			 })
});
$(document).on('click','.getEatoutDetail', function(){
	var id = $(this).attr('id');
			$.ajax({
				type: "POST",
				url: 'eatout_ajax.php',
				data: {'eatout':'eatoutForm','id': id},
				success: function(response){
					console.log(response);
					$(".leaflet-marker-icon").remove();
					$(".eatoutSubsidebar").html(response);
					var lat = $('.lat').text();
					var long = $('.long').text();
					var markersLayer = new L.LayerGroup();
					let customIcon = {
						iconUrl:'http://localhost/akwaba/assets/img/icons/ic_eat_out_20X20_Green.png',
						iconSize:[30,30]
					   }
					   let myIcon = L.icon(customIcon);
					   let iconOptions = {
						title:'company name',
						draggable:false,
						icon:myIcon
					   }
						var markerLocation = new L.LatLng(long, lat);
						var marker = new L.Marker(markerLocation, iconOptions);
						map.addLayer(marker);
						var title = $('.leaflet-marker-icon').attr('title');
						$(title).css('display','block');
						$(".eatoutDiv").addClass('extralarge');
						$(".eatoutSubsidebar").css('display','block');
						/* console.log(response);
						$(".eatoutSubsidebar").html(response);
						$(".eatoutDiv").addClass('extralarge');
						$(".eatoutSubsidebar").css('display','block'); */
				}
			 })
});
$(document).on('click','.getGroceryDetail', function(){
	var id = $(this).attr('id');
			$.ajax({
				type: "POST",
				url: 'grocery_ajax.php',
				data: {'grocery':'groceryForm','id': id},
				success: function(response){
					$(".leaflet-marker-icon").remove();
					$(".grocerySubsidebar").html(response);
					var lat = $('.lat').text();
					var long = $('.long').text();
					var markersLayer = new L.LayerGroup();
					let customIcon = {
					iconUrl:'http://localhost/akwaba/assets/img/icons/ic_eat_out_20X20_Green.png',
					iconSize:[30,30]
				   }
				   let myIcon = L.icon(customIcon);
				   let iconOptions = {
					title:'company name',
					draggable:false,
					icon:myIcon
				   }
					var markerLocation = new L.LatLng(long, lat);
					var marker = new L.Marker(markerLocation, iconOptions);
					map.addLayer(marker);
					var title = $('.leaflet-marker-icon').attr('title');
					$(title).css('display','block');
					$(".GroceriesDiv").addClass('extralarge');
					$(".grocerySubsidebar").css('display','block');
					/* $(".grocerySubsidebar").html(response);
					$(".GroceriesDiv").addClass('extralarge');
					$(".grocerySubsidebar").css('display','block'); */
				}
			 })
});
$(document).on('click','.getMallsDetail', function(){
	var id = $(this).attr('id');
			$.ajax({
				type: "POST",
				url: 'mall_ajax.php',
				data: {'mall':'mallForm','id': id},
				success: function(response){
					$(".leaflet-marker-icon").remove();
					 $(".mallSubsidebar").html(response);
					var lat = $('.lat').text();
					var long = $('.long').text();
					var markersLayer = new L.LayerGroup();
					let customIcon = {
					iconUrl:'http://localhost/akwaba/assets/img/icons/ic_eat_out_20X20_Green.png',
					iconSize:[30,30]
				   }
				   let myIcon = L.icon(customIcon);
				   let iconOptions = {
					title:'company name',
					draggable:false,
					icon:myIcon
				   }
					var markerLocation = new L.LatLng(long, lat);
					var marker = new L.Marker(markerLocation, iconOptions);
					map.addLayer(marker);
					var title = $('.leaflet-marker-icon').attr('title');
					$(title).css('display','block');
					$(".MallsDiv").addClass('extralarge');
					$(".mallSubsidebar").css('display','block');
				}
			 })
});
$(document).on('click','.getHotelsDetail', function(){
	var id = $(this).attr('id');
			$.ajax({
				type: "POST",
				url: 'hotel_ajax.php',
				data: {'hotel':'hotelForm','id': id},
				success: function(response){
					$(".leaflet-marker-icon").remove();
					$(".hotelSubsidebar").html(response);
					var lat = $('.lat').text();
					var long = $('.long').text();
					var markersLayer = new L.LayerGroup();
					let customIcon = {
					iconUrl:'http://localhost/akwaba/assets/img/icons/ic_eat_out_20X20_Green.png',
					iconSize:[30,30]
				   }
				   let myIcon = L.icon(customIcon);
				   let iconOptions = {
					title:'company name',
					draggable:false,
					icon:myIcon
				   }
					var markerLocation = new L.LatLng(long, lat);
					var marker = new L.Marker(markerLocation, iconOptions);
					map.addLayer(marker);
					var title = $('.leaflet-marker-icon').attr('title');
					$(title).css('display','block');
				    $(".HotelsDiv").addClass('extralarge');
					$(".hotelSubsidebar").css('display','block');
				}
			 })
});
$(document).on('click','.getGasDetail', function(){
	var id = $(this).attr('id');
			$.ajax({
				type: "POST",
				url: 'gas_ajax.php',
				data: {'gas':'gasForm','id': id},
				success: function(response){
					$(".leaflet-marker-icon").remove();
					$(".gasSubsidebar").html(response);
					var lat = $('.lat').text();
					var long = $('.long').text();
					var markersLayer = new L.LayerGroup();
					let customIcon = {
					iconUrl:'http://localhost/akwaba/assets/img/icons/ic_eat_out_20X20_Green.png',
					iconSize:[30,30]
				   }
				   let myIcon = L.icon(customIcon);
				   let iconOptions = {
					title:'company name',
					draggable:false,
					icon:myIcon
				   }
					var markerLocation = new L.LatLng(long, lat);
					var marker = new L.Marker(markerLocation, iconOptions);
					map.addLayer(marker);
					var title = $('.leaflet-marker-icon').attr('title');
					$(title).css('display','block');
					$(".GasDiv").addClass('extralarge');
					$(".gasSubsidebar").css('display','block');
				}
			 })
});
$(document).on('click','.getFuturedlist', function(){
	var id = $(this).attr('id');
	
			 $.ajax({
				type: "POST",
				url: 'futured_list_ajax.php',
				data: {'futured':'futuredForm','id': id},
				success: function(response){
<<<<<<< HEAD

				    $(".featureSubsidebar").html(response);
=======
>>>>>>> Darshan
					$(".featuredDiv").addClass('extralarge');
					$(".featuredDiv").css('display','flex');
				    $(".featureSubsidebar").html(response);
					$(".featureSubsidebar").css('display','block');
					$.getScript(simplebar);
<<<<<<< HEAD
					$.getScript(custom);

=======
				var myElement = document.getElementById('simplebars1');
				new SimpleBar(myElement, { autoHide: true });
				}
			 }) 
});
$(document).on('click','.interstingplace', function(){
	$(".indexDiv").css('display','none');
	$(".featuredDiv").removeClass('extralarge');
	$(".featuredDiv").css('display','block');
});
$(document).on('click', '.editprofileBtn', function(){
  var filename = document.getElementById("file").files[0].name;
  var form_data = new FormData();
  var ext = filename.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
  {
    $("#image_error_msg").text("Profile picture is allowed png,jpg,jpeg,gif.");  
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("file").files[0]);
  var f = document.getElementById("file").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 2000000)
  {
	 $("#image_error_msg").text("Image File Size is very big."); 
  }
  else
  {
	var name = $("#name").val();
	var surname = $("#surname").val();
	var email = $("#emailid").val();
	var userid = $("#userid").val();
	if(name == ""){
		$("#name_error_msg").text("Name is required");
	}
	if(surname == ""){
		$("#surname_error_msg").text("Surname is required");
	}
	
	if(email == ""){
		$("#emailaddress_error_msg").text('Please enter valid email.');	
	}else{
		
		var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var email = $("#emailid").val();
		if(!regex.test(email)) {
			$("#emailaddress_error_msg").text('Please enter valid email.');
		}else{
			$("#emailaddress_error_msg").text('');
		}
	}
	if(name != "" && surname != "" &&  email != "" && regex.test(email)){
		
		form_data.append("file", document.getElementById('file').files[0]);
		form_data.append("name", name);
		form_data.append("surname", surname);
		form_data.append("email", email);
		form_data.append("userid", userid);
		form_data.append("profile", 'profileForm');
		 $.ajax({
				url:"edit_profile_ajax.php",
				method:"POST",
				data: form_data,
				contentType: false,
				cache: false,
				processData: false,
				beforeSend:function(){
				 $('#uploaded_image').html("<label class='text-success'>Image Uploading...</label>");
				},  
				success: function(response){
					
					var arr =  response.split("|");
					if(arr[0] == 'true'){
						$(".username").html('<img src="./uploads/users/'+arr[1]+'" alt="Girl in a jacket" >');
						$("#editProfile").modal('hide');
					}else{
						$('#uploaded_image').text(arr[1]);
					}
					
>>>>>>> Darshan
				}
		 }) 
	}
	
  }

});
$(document).on('click','.removeImage', function(){
	$("#profileid").css('display','none');
	$(".removeImage").css('display','block');
	$("#fileDiv").html('<input type="file" name="file" id="file" /></br>');
});
$(document).on('click','.savebtn', function(){
	var userid = $("#sessionid").val();
	var osmid = $(this).attr('id');
	var type = $(this).attr('data-index');
	var message = '<div class="alert success"><span class="closebtn">&times;</span><strong>Success!</strong> Indicates a successful or positive action.</div>';
	if (typeof userid === "undefined") {
		$(".catSubsidebar").css('display', 'none');
		$(".indexDiv").css('display', 'block');
		$(".catDataDiv").css('display', 'none');
		$("#exampleModal1").modal('show');
	}else{
		$(".tooltip1").css('display','block');
		$.ajax({
				url:"favorite_ajax.php",
				method:"POST",
				data: {'favorite':'favoriteForm','userid': userid, 'osmid': osmid, 'type': type},
				success: function(response){
					setTimeout(function () {
							  $(".tooltip1").css('display','none');
							} , 3000);
					//$("#popup").html(message);
					//alert('favorite is successfully.');
					
				}
		 })
		
	}
});

$(document).on('click','.p-relative', function(){
	var userid = $("#sessionid").val();
	$.ajax({
				url:"favorite_list_ajax.php",
				method:"POST",
				data: {'favoritelist':'favoritelistForm','userid': userid},
				success: function(response){
					$(".leaflet-marker-icon").css('display','none');
					var lat = $('.lat').text();
					var long = $('.long').text();
					var arr = response.split("|");
					var Data = JSON.parse(arr[0]);
					//console.log(Data[0]['latitude']);
					let customIcon = {
						 iconUrl:base_url+'assets/img/icons/ic_eat_out.png',
						 iconSize:[30,30]
						}
						let myIcon = L.icon(customIcon);
						let iconOptions = {
						 title:'company name',
						 draggable:false,
						 icon:myIcon
						}
					 for(var i = 0; i < Data.length; i++) {
						var lon = Data[i]['latitude'];
						var lat = Data[i]['longitude'];
						var popupText = Data[i]['name'];
						var markerLocation = new L.LatLng(lat, lon);
						var marker = new L.Marker(markerLocation, iconOptions);
						map.addLayer(marker);
						marker.bindPopup(popupText);
					} 
					var title = $('.leaflet-marker-icon').attr('title');
						$(title).css('display','block');					
					 $(".favoriteSidebar").html(arr[1]);
					$(".favoriteDiv").addClass('extralarge');
					$(".favoriteDiv").css('display','flex');
					$(".favoriteSidebar").css('display','block');
					
					//$("#popup").html(message);
					//alert('favorite is successfully.');
					
				}
		 })
});
$(document).on('click','#favoritecloseBtn', function(){
	$(".favoriteDiv").css('display','flex');
	$(".favoriteSidebar").css('display','none');
	$(".favoriteDiv").removeClass('extralarge');
	$("#favoritecloseBtn").addClass('mainfavBtn');
	$(".leaflet-marker-icon").remove();
	var lat = '';
	$('.lat').empty();
	var long = '';
	$('.long').empty();
	//window.location.reload();
});
$(document).on('click','.mainfavBtn', function(){
	$(".favoriteDiv").css('display','none');
	$(".indexDiv").css('display','block');
	$(".leaflet-marker-icon").remove();
	var lat = '';
	$('.lat').empty();
	var long = '';
	$('.long').empty();
	//window.location.reload();
});
 $(document).on('click','.addreviewBtn', function(){
	var osmid = $(this).attr('data-index');
	var name = $(this).attr('id');
	$("#profilename").text(name);
	$("#osmids").val(osmid);
	$("#exampleModalCenter").modal('show');
	
	
});


/*$(document).on('click','.postratingBtn', function(){
	var userid = $("#sessionid").val();
	var osmid = $("#osmids").val();
	var message = $("#message").val();
	var rating = $('input[name="rating"]:checked').val();
	
	if(typeof userid == 'undefined'){
		$("#exampleModalCenter").modal('hide');
		$("#exampleModal1").modal('show');
	}else{
		$.ajax({
			url:"review_ajax.php",
			method:"POST",
			data: {'addreview':'addreviewForm','userid': userid,'osmid': osmid, 'message': message, 'rating': rating},
			success: function(response){
				alert(response);
				 $("#exampleModalCenter").modal('hide');
				$("#thisbranch").append(response); 
			}
		});
	}

});*/

$(document).on('click','.postratingBtn', function(){
	var userid = $("#sessionid").val();
	var osmid = $("#osmids").val();
	var message = $("#message").val();
	var rating = $('input[name="rating"]:checked').val();


	var form = $('#frm_review')[0];
	var data1 = new FormData(form);
	if(typeof userid == 'undefined'){
		$("#exampleModalCenter").modal('hide');
		$("#exampleModal1").modal('show');
	}else{
	
		// {'formdata':data1,'addreview':'addreviewForm','userid': userid,'osmid': osmid, 'message': message, 'rating': rating},
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
				console.log(response);
				$("#exampleModalCenter").modal('hide');
				$(".allreviews_in").append(response);
			}
		});
	}
});
$(document).on('click','.tabBtn', function(){
	var tab = $(this).attr('data-index');
	if(tab == 'favorites'){
		$(".indexDiv").css('display','none');
		$(".favoriteDiv").css('display','block');
		$("#favoriteid").addClass('active');
		$("#reviews").removeClass('active');
		$("#photos").removeClass('active');
		$("#corrections").removeClass('active');
	}
	if(tab == 'reviews'){
		$(".indexDiv").css('display','none');
		$(".favoriteDiv").css('display','block');
		$("#favoriteid").removeClass('active');
		$("#reviews").addClass('active');
		$("#photos").removeClass('active');
		$("#corrections").removeClass('active');
	}
	if(tab == 'photos'){
		$(".indexDiv").css('display','none');
		$(".favoriteDiv").css('display','block');
		$("#favoriteid").removeClass('active');
		$("#reviews").removeClass('active');
		$("#photos").addClass('active');
		$("#corrections").removeClass('active');
	}
	if(tab == 'corrections'){
		$(".indexDiv").css('display','none');
		$(".favoriteDiv").css('display','block');
		$("#favoriteid").removeClass('active');
		$("#reviews").removeClass('active');
		$("#photos").removeClass('active');
		$("#corrections").addClass('active');
	}
});
function selectCountry(val,ids) {
	$("#search-box").val(val);
	$("#suggesstion-box").hide();
	var id = ids;
	var flag = val;
	$.ajax({
		type: "POST",
		url: 'category_data_ajax.php',
		data: {'id': id},
		success: function(catData){
			console.log(catData);
			$(".leaflet-marker-icon").remove();
			var lat = $('.lat').text();
			var long = $('.long').text();
			$(this).attr('data-id', 'No');
			$(".indexDiv").css('display','none');
			$(".catDataDiv").css('display','flex');
			$(".catDataDiv").removeClass('extralarge');
			let customIcon = {
			 iconUrl:base_url+'assets/img/icons/ic_eat_out.png',
			 iconSize:[30,30]
			}
			let myIcon = L.icon(customIcon);
			let iconOptions = {
			 title:'company name',
			 draggable:false,
			 icon:myIcon
			}
			var catData = JSON.parse(catData);
			var cathtml = '<div class="closeiconleftpanel" id="catCloseBtn"><a href="javascript:void(0);"><img src="assets/img/icons/left-cross.png"></a> </div> <div class="closeiconleftpanel closeleftpanel2 closeleftpanel"> <img src="assets/img/icons/left-arrow.png"> </div> <div class="scrollbar list-page"> <div class="img-top "> <div class="input-group search-bar"> <div class="input-group-prepend"> <span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span> </div> <input type="text" class="form-control" placeholder="Eat Out"> <div class="cross-btn"> <button type="button" class="cross-btn2" aria-label="Clear local search field"> <img src="./assets/img/icons/cross-search.png" alt=""> </button> </div> </div> <div class="row mt-3"> <div class="col-md-6"> <button class="No_Filters"> <a href="#"> <span class="Filter-btn"> <img src="./assets/img/icons/filter-btn.png" alt=""> </span> <span class="No_Filters_btn">Filters</span> </a> </button> </div> <div class="col-md-6"> <div class="float-right"> <div class="No_places"> <a href="#" class="No_places-list">Places: <span class="No_places-number">'+catData.length+'</span> </a> </div> </div> </div> </div> </div> <div class="info-card categories-icons-sections"> <div class="row m-0"> <div class="filterpart" data-simplebar> <div class="col-md-12 border-bottom"> <div class="cafesbar"> <a class="btn p-0 toggle-btn"> <i class="fa fa-angle-down" aria-hidden="true"></i> </a> <ul> <li class="side-list">Cafe</li> <li class="side-list">Bars</li> <li class="side-list">Restaurants</li> <li class="morebtn side-list"><img src="./assets/img/icons/more.png" alt=""></li> </ul> </div> </div> <div class="col-md-12 border-bottom"> <div class="cafesbar"> <ul> <li class="side-list">Wi-Fi</li> <li class="side-list">Amenities</li> <li class="side-list">Brunch</li> <li class="side-list">payment</li> <li class="side-list">Photo available</li> </ul> <div class="input"> <input type="text" class="cafesbar-input" value="" placeholder="Metro station"> </div> </div> </div> <div class="col-md-12 border-bottom"> <div class="cafesbar"> <h6 class="list-heading">Opening hours</h6> <ul> <li class="side-list active">Open right now</li> <li class="side-list">Open 24 hours</li> <li class="side-list">At the specific time</li> </ul> <div class="input-group"> <div class="input"> <input type="text" class="cafesbar-input w-101" value="" placeholder="06:00 pm"> </div> <div class="input ml-2"> <input type="text" class="cafesbar-input w-64" value="" placeholder="Wed"> </div> </div> </div> </div> <div class="col-md-12 border-bottom"> <div class="cafesbar"> <h6 class="list-heading">Cuisine</h6> <ul> <li class="side-list">Afgan</li> <li class="side-list">African</li> <li class="morebtn side-list"><img src="./assets/img/icons/more.png" alt=""></li> </ul> </div> </div> <div class="col-md-12 border-bottom"> <div class="cafesbar"> <h6 class="list-heading">Average bill from 8 to 550 AED</h6> <div class="slidermaindiv"> <div id="slider-range"></div> <div class="row slider-labels"> <div class="col-xs-6 caption"><span id="slider-range-value1"></span> </div> <div class="col-xs-6 text-right caption"><span id="slider-range-value2"></span> </div> </div> <div class="row"> <div class="col-sm-12"> <form> <input type="hidden" name="min-value" value=""> <input type="hidden" name="max-value" value=""> </form> </div> </div> </div> </div> </div> </div> <div class="restaurantslistpart "> <div class="restaurantslistmaindiv" data-simplebar>';
			if(catData.length > 0){
				for(var i = 0; i < catData.length; i++) {
					var lon = catData[i].coordinates[0];
					var lat = catData[i].coordinates[1];
					var popupText =  catData[i]['name'];
					var markerLocation = new L.LatLng(lat, lon);
					var marker = new L.Marker(markerLocation, iconOptions);
					map.addLayer(marker);
					marker.bindPopup(popupText);
					$(".leaflet-marker-icon").css('display','block');
	
					if(catData[i]['cuisine'] != '' && catData[i]['cuisine'] != null){
						var cuisine = catData[i]['cuisine'].replace(";", ",");
					}else{
						var cuisine = '';
					}
					if(catData[i]['image'] != '' && catData[i]['image'] != null){
						var image = '<img src="'+catData[i]['image']+'">';
					}else{
						var image = '<img src="assets/img/left-brand-image.png">';
					}
					if(catData[i]['opening_hours'] != '' && catData[i]['opening_hours'] != null){
						var arr = catData[i]['opening_hours'].split(" ");
						if(arr[0] != '' && arr[1] != '' && arr[0] != null && arr[1] != null){
							var day = arr[0].split("-");
							var week = day[0]+" To " +day[1];
							console.log(arr[0]);
							var time = arr[1].split("-");
						}else{
							var day = "";
							var time = arr[0].split("-");
						}
						catData[i]['opening_hours'] = catData[i]['opening_hours'];
					}else{
						var days = "";
						var week = "";
						var time = "";
						catData[i]['opening_hours'] ='';
					}
					if(catData[i]['name'] != '' && catData[i]['name'] != null){
						var name = catData[i]['name'].replace('"', "");
					}else{
						var name = '';
					}
					var address='';
					if(catData[i]['street'] != '' && catData[i]['street']!= null){
						var address = catData[i]['street'];
					}else if(catData[i]['city'] != '' && catData[i]['city']!= null){
						var address =+ ", "+catData[i]['city'];
					}else if(catData[i]['district'] != '' && catData[i]['district']!= null){
						var address =+ ", "+catData[i]['district'];
					}else if(catData[i]['country'] != '' && catData[i]['country']!= null){
						var address =+ ", "+catData[i]['country'];
					}
					if(address != ''){
						var address = '<div class="location"> <img src="assets/img/icons/location.png"> <p>'+address+'</p> </div>';
					}
					else{
						var address = '';
					}
					catData[i]['cat_type'] = catData[i]['cat_type'].replace('_', " ");
					catData[i]['cat_type'] = catData[i]['cat_type'].ucwords();
					var bill = 'Average bill $ '+Math.floor((Math.random() * 100) + 1)+' '+cuisine;
					cathtml += '<div class="singledivlist"> <div class="leftpart"> <a href="javascript:void(0);" class="getcatDetail" id="'+catData[i]['osm_id']+'" data-cat-type="'+catData[i]['cat_type']+'"><p class="title">'+popupText+'</p></a> <p class="subtitle">'+catData[i]['cat_type']+'</p><p class="details">'+ bill +'</p> <div class="orderonlinebtn"> <a href="#">Order Online</a> </div> '+address+' <div class="location"><p> '+catData[i]['opening_hours']+' </p></div> </div> <div class="rightpart"> <div class="restaurantsimg">'+image+'</div> <div class="starboxmaindiv"> <div class="starbox"> <img src="assets/img/icons/cross-search.png"> <img src="assets/img/icons/cross-search.png"> <img src="assets/img/icons/cross-search.png"> <img src="assets/img/icons/cross-search.png"> </div> <div class="ratting"> <p>4.0</p> </div> </div> <p class="totalreviews">'+Math.floor((Math.random() * 1000) + 100)+' Reviews</p> </div> </div>';
				}
				cathtml += '</div> <div class="paginationmaindiv"> <nav aria-label="..."> <ul class="pagination"> <li class="page-item disabled"> <span class="page-link"><img src="assets/img/icons/left-arrow.png"></span> </li> <li class="page-item active"> <a class="page-link" href="#">1</a> </li> <li class="page-item"> <span class="page-link"> 2 <span class="sr-only">(current)</span> </span> </li> <li class="page-item"><a class="page-link" href="#">3</a></li> <li class="page-item"> <a class="page-link" href="#"><img src="assets/img/icons/right-arrow.png"></a> </li> </ul> </nav> </div> </div> </div> </div> </div> <!-- Hotel sub sidebar --> <div class="extrapart catSubsidebar" style="display: none;"></div> </div>';
			}
			else{
				cathtml += '<div class="singledivlist"><div class="leftpart"><p>No Data Found</p></div></div></div></div></div></div></div></div>';
			}
			$('.catDataDiv').html(cathtml);
		}
	 })
}
$(document).on('click','.sendbtn', function(){
	$("#exampleModal2").modal('show');
});
$(document).on('click','.tourismCloseBtn', function(){
	$(".tourismDiv").css('display','none');
	$(".indexDiv").css('display','block');
	$(".leaflet-marker-icon").css('display','none');
});
$(document).on('click', '.uploadBtn', function(){
	var osmid = $(this).attr("data-index");
	var title = $(this).attr("id");
	
	if(typeof userid == 'undefined'){
		$("#exampleModalCenter").modal('hide');
		$("#exampleModal1").modal('show');
	}else{
		$("#uploadimgreviews").val('');
		$("#photosModalCenter").modal('show');
		$("#osm_ids").val(osmid);
		$("#title").val(title);
	}
});
$(document).on('click','.savephotosBtn', function(){
	var userid = $("#sessionid").val();
	var osmid = $("#osm_ids").val();
	if($("#title").val() != ""){
		var title = $("#title").val();
	}else{
		var title = "";
	}
	
	
	var form = $('#frm_photos')[0];
	var photos = $("#uploadimgreviews")[0].files;
	if(photos.length == 0){
		$("#photos_review_error").text("Photos are required");
	}
	var data1 = new FormData(form);
	$("#photos_review_error").text("");
	 $.ajax({
			url:"upload_photos_ajax.php",
			method:"POST",
			enctype: 'multipart/form-data',
			data: data1,
            dataType: 'text',
			processData: false,
			contentType: false,
			cache: false,
			success: function(response){
				var data = response;
				var arr = data.split("|");
				if(arr[1] == "true"){
				$(".bindPhotos").html(arr[0]);
				$("#photosModalCenter").modal('hide');
				$(".pip_review").remove();
				}else{
					
					alert(arr[1]);
				}
				
				
			}
		}); 
});

$(document).on('click','.getfutureplaceDetail', function(){ 
    var osmid = $(this).attr('data-index');
    var title = $(this).attr('id');
	 $.ajax({
			url:"tourism_detail_ajax.php",
			method:"POST",
			data: {'tourismdetail':'tourismdetailForm','id': osmid, 'type': title},
			success: function(response){
				$(".tourismDiv").html(response);
				$(".tourismDiv").css('display','block');
				$(".featuredDiv").css('display','none');
				$(".featureSubsidebar").css('display','none');
			}
		}); 
		
});