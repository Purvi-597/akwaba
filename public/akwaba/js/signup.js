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


					}
			 })
		}
	}
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


						}
					}
			 })



		}
	}
});
$(document).on('click','.featuredBtn', function(){

	$(".indexDiv").css('display','none');
	$(".morecategoryDiv").css('display','none');
	$(".featuredDiv").removeClass('extralarge');
	$(".featuredDiv").css('display','flex');

});
$(document).on('click','#closeBtn', function(){
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
	$(".leaflet-marker-icon").css('display','none');
	//window.location.reload();
});


$(document).on('click','#MallsCloseBtn', function(){
	var id = $("#catid").val();
	$(".indexDiv").css('display','block');
	$(".featuredDiv").css('display','none');
	$(".morecategoryDiv").css('display','none');
	$('.icon-'+id).attr('data-id', 'Yes');
	$(".MallsDiv").css('display','none');
	$(".leaflet-marker-icon").css('display','none');
	//window.location.reload();
});
$(document).on('click','#GroceriesCloseBtn', function(){
	var id = $("#catid").val();
	$(".indexDiv").css('display','block');
	$(".featuredDiv").css('display','none');
	$(".morecategoryDiv").css('display','none');
	$(".GroceriesDiv").css('display','none');
	$('.icon-'+id).attr('data-id', 'Yes');
	$(".leaflet-marker-icon").css('display','none');
});
$(document).on('click','#HotelsCloseBtn', function(){
	var id = $("#catid").val();
	$(".indexDiv").css('display','block');
	$(".featuredDiv").css('display','none');
	$(".morecategoryDiv").css('display','none');
	$(".HotelsDiv").css('display','none');
	$('.icon-'+id).attr('data-id', 'Yes');
	$(".leaflet-marker-icon").css('display','none');
	//window.location.reload();
});
$(document).on('click','#GasCloseBtn', function(){
	var id = $("#catid").val();
	$(".indexDiv").css('display','block');
	$(".featuredDiv").css('display','none');
	$(".morecategoryDiv").css('display','none');
	$(".GasDiv").css('display','none');
	$('.icon-'+id).attr('data-id', 'Yes');
	$(".leaflet-marker-icon").css('display','none');
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
						   $("#success_message").text("Your message send successfully.");
						   setTimeout(function () {
							   $('#success_message').text('');
							   $('#exampleModal3').modal('hide');
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
					$(".leaflet-marker-icon").css('display','none');
					$(".eatoutSubsidebar").html(response);
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
					$(".leaflet-marker-icon").css('display','none');
					$(".grocerySubsidebar").html(response);
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
					$(".leaflet-marker-icon").css('display','none');
					 $(".mallSubsidebar").html(response);
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
					$(".leaflet-marker-icon").css('display','none');
					$(".hotelSubsidebar").html(response);
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
					$(".leaflet-marker-icon").css('display','none');
					$(".gasSubsidebar").html(response);
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

				    $(".featureSubsidebar").html(response);
					$(".featuredDiv").addClass('extralarge');
					$(".featureSubsidebar").css('display','block');
					$.getScript(bootstrap);
					$.getScript(popper);
					$.getScript(simplebar);
					$.getScript(custom);

				}
			 })
});

