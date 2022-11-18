var plainMap = L.tileLayer('http://10.10.3.50:5000/hot/{z}/{x}/{y}.png', {
    maxZoom: 21,
    maxNativeZoom: 22
});

var burl = window.location.href; 
if(burl == base_url+'index.php'){
var str1 = 40.36629;	
var str2 = 49.83335;	
var url = window.location.href+"#map=13/"+str1+"/"+str2; 
$("#urllink").val(url);
var map = L.map('map', {
    center: [40.36629, 49.83335],
    zoom: 15,
	zoomControl: false,
    layers: [plainMap],
    // measureControl:true 
    // crs: crs
});
}else{
var arrs = burl.split("=");
var finalArray = arrs[1].split("/");
var NewLatitude = finalArray[1];	
var NewLongitude = finalArray[2];
console.log(NewLatitude);
console.log(NewLongitude);
var map = L.map('map', {
    center: [NewLatitude, NewLongitude],
    zoom: 15,
	zoomControl: false,
    layers: [plainMap],
});	
}

L.control.zoom({
     position:'bottomright'
}).addTo(map);
var baseMaps = {
    "Plain View": plainMap,
};

function createCustomIcon(feature, latlng) {
	let myIcon = L.icon({
		iconUrl: 'https://raw.githubusercontent.com/shacheeswadia/leaflet-map/main/beach-icon-colorful.svg',
		shadowUrl: 'https://raw.githubusercontent.com/shacheeswadia/leaflet-map/main/beach-icon-colorful.svg',
		iconSize: [25, 25], // width and height of the image in pixels
		shadowSize: [35, 20], // width, height of optional shadow image
		iconAnchor: [12, 12], // point of the icon which will correspond to marker's location
		shadowAnchor: [12, 6],  // anchor point of the shadow. should be offset
		popupAnchor: [0, 0] // point from which the popup should open relative to the iconAnchor
	})
	return L.marker(latlng, { icon: myIcon })
}
function createParkingIcon(feature, latlng) {
	let myIcons = L.icon({
		iconUrl: base_url+'assets/img/icons/parkings.png',
		shadowUrl: base_url+'assets/img/icons/parkings.png',
		iconSize: [25, 25], // width and height of the image in pixels
		shadowSize: [35, 20], // width, height of optional shadow image
		iconAnchor: [12, 12], // point of the icon which will correspond to marker's location
		shadowAnchor: [12, 6],  // anchor point of the shadow. should be offset
		popupAnchor: [0, 0] // point from which the popup should open relative to the iconAnchor
	})
	return L.marker(latlng, { icon: myIcons })
}
function createPhotoIcon(feature, latlng) {
    let myIconss = L.icon({
        iconUrl: base_url+'uploads/tourist/captions.jpg',
        shadowUrl: base_url+'uploads/tourist/captions.jpg',
        iconSize: [25, 25], // width and height of the image in pixels
        shadowSize: [35, 20], // width, height of optional shadow image
        iconAnchor: [12, 12], // point of the icon which will correspond to marker's location
        shadowAnchor: [12, 6],  // anchor point of the shadow. should be offset
        popupAnchor: [0, 0] // point from which the popup should open relative to the iconAnchor
    })
    return L.marker(latlng, { icon: myIconss })
}
function createResturantIcon(feature, latlng) {
    let myIconsss = L.icon({
        iconUrl: base_url+'Parking_icon2.png',
        shadowUrl: base_url+'Parking_icon2.png',
        iconSize: [25, 25], // width and height of the image in pixels
        shadowSize: [35, 20], // width, height of optional shadow image
        iconAnchor: [12, 12], // point of the icon which will correspond to marker's location
        shadowAnchor: [12, 6],  // anchor point of the shadow. should be offset
        popupAnchor: [0, 0] // point from which the popup should open relative to the iconAnchor
    })
    return L.marker(latlng, { icon: myIconsss })
}
 
	
let myLayerOptions = {
	pointToLayer: createCustomIcon
}
let myLayerOptionss = {
	pointToLayer: createParkingIcon
}
let myLayerOptionsss = {
	pointToLayer: createPhotoIcon
}
let myLayerOptionssss = {
		pointToLayer: createResturantIcon
	}

//console.log(touristLatLng);
 
var overlayMaps = {};
var metroMap = L.geoJSON(metroLatLng,)
var touristMap = L.geoJSON(tourismLatLng, myLayerOptions)
var photoMap = L.geoJSON(touristLatLong, myLayerOptionsss)
var parkingMap = L.geoJSON(parkingLatLng, myLayerOptionss)



/* let customIcon = {
	 iconUrl:'http://localhost/akwaba/assets/img/icons/ic_eat_out.png',
	 iconSize:[30,30]
	}
	let myIcon = L.icon(customIcon);
	let iconOptions = {
	 title:'company name',
	 draggable:false,
	 icon:myIcon
	}
	for(var i = 0; i < gasDataLatLng.length; i++) {
				var lon = gasDataLatLng[i].coordinates[0];
				var lat = gasDataLatLng[i].coordinates[1];
				var popupText =  atob(gasnameData[i]['name']);
				var markerLocation = new L.LatLng(lat, lon);
				var marker = new L.Marker(markerLocation, iconOptions);
				map.addLayer(marker);
				marker.bindPopup(popupText);
	} */

//console.log(restaurantnameData[0]['name']);

$(document).on('click','.leaflet-control-container .leaflet-control-layers-overlays label', function(){ 
$('.leaflet-control-container .leaflet-control-layers-overlays label').removeClass('active');
$(this).addClass('active');
});

$(document).on('click','#iconBtn,.page_no', function(){ 

var id = $(this).attr('data-index');
var flag = $(this).attr('data-id');
var add = $(this).attr('data-add');
var type = $(this).attr('data-type');
var current_page = $(this).find('a').text();
$(this).addClass('active');
$(this).siblings('.active').removeClass('active');
//$(this).find('.active').removeClass('active')

if(flag == "Yes" && id == 'allCategory'){
	$(".morecategoryDiv").removeClass('extralarge');
	$(".indexDiv").css('display','none');
	$(".morecategoryDiv").css('display','block');
	$.getScript(bootstrap);
	$.getScript(popper);
	$.getScript(simplebar);
	$.getScript(custom);
}else if(flag == "Yes" && id == 'favorite'){
   var sessionid = $("#sessionid").val();
   if (typeof sessionid === "undefined") {
	   $("#exampleModal1").modal('show');
   }
}else if(flag == "Yes" && add == 'true'){
	if(type == 'External'){
		var external_link = $(this).attr('data-link');
		window.open(external_link);
	}else{
		$.ajax({
			type: "POST",
			url: 'category_detail_ajax.php',
			data: {'from':'addvertisement','id': id, 'cat_type':'Add'},
			success: function(response){
				$(".leaflet-marker-icon").css('display','none');
				$(".indexDiv").css('display','none');
				$(".addsidebar").html(response);
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
					//$(".addsidebar").addClass('extralarge');
					$(".addsidebar").css('display','block');
			}
		 })
	}
 }else{
	$.ajax({
		type: "POST",
		url: 'category_data_ajax.php',
		data: {'id': id, 'page_no': current_page},
		success: function(catData){
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
			console.log(catData);
			var cathtml = '<div class="closeiconleftpanel" id="catCloseBtn"><a href="javascript:void(0);"><img src="assets/img/icons/left-cross.png"></a> </div> <div class="closeiconleftpanel closeleftpanel2 closeleftpanel"> <img src="assets/img/icons/left-arrow.png"> </div> <div class="scrollbar list-page"> <div class="img-top "> <div class="input-group search-bar"> <div class="input-group-prepend"> <span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span> </div> <input type="text" class="form-control" placeholder="Eat Out"> <div class="cross-btn"> <button type="button" class="cross-btn2" aria-label="Clear local search field"> <img src="./assets/img/icons/cross-search.png" alt=""> </button> </div> </div> <div class="row mt-3"> <div class="col-md-6"> <button class="No_Filters"> <a href="#"> <span class="Filter-btn"> <img src="./assets/img/icons/filter-btn.png" alt=""> </span> <span class="No_Filters_btn">Filters</span> </a> </button> </div> <div class="col-md-6"> <div class="float-right"> <div class="No_places"> <a href="#" class="No_places-list">Places: <span class="No_places-number">'+catData[0]['tolcnt']+'</span> </a> </div> </div> </div> </div> </div> <div class="info-card categories-icons-sections"> <div class="row m-0"> <div class="filterpart" data-simplebar> <div class="col-md-12 border-bottom"> <div class="cafesbar"> <a class="btn p-0 toggle-btn"> <i class="fa fa-angle-down" aria-hidden="true"></i> </a> <ul> <li class="side-list">Cafe</li> <li class="side-list">Bars</li> <li class="side-list">Restaurants</li> <li class="morebtn side-list"><img src="./assets/img/icons/more.png" alt=""></li> </ul> </div> </div> <div class="col-md-12 border-bottom"> <div class="cafesbar"> <ul> <li class="side-list">Wi-Fi</li> <li class="side-list">Amenities</li> <li class="side-list">Brunch</li> <li class="side-list">payment</li> <li class="side-list">Photo available</li> </ul> <div class="input"> <input type="text" class="cafesbar-input" value="" placeholder="Metro station"> </div> </div> </div> <div class="col-md-12 border-bottom"> <div class="cafesbar"> <h6 class="list-heading">Opening hours</h6> <ul> <li class="side-list active">Open right now</li> <li class="side-list">Open 24 hours</li> <li class="side-list">At the specific time</li> </ul> <div class="input-group"> <div class="input"> <input type="text" class="cafesbar-input w-101" value="" placeholder="06:00 pm"> </div> <div class="input ml-2"> <input type="text" class="cafesbar-input w-64" value="" placeholder="Wed"> </div> </div> </div> </div> <div class="col-md-12 border-bottom"> <div class="cafesbar"> <h6 class="list-heading">Cuisine</h6> <ul> <li class="side-list">Afgan</li> <li class="side-list">African</li> <li class="morebtn side-list"><img src="./assets/img/icons/more.png" alt=""></li> </ul> </div> </div> <div class="col-md-12 border-bottom"> <div class="cafesbar"> <h6 class="list-heading">Average bill from 8 to 550 AED</h6> <div class="slidermaindiv"> <div id="slider-range"></div> <div class="row slider-labels"> <div class="col-xs-6 caption"><span id="slider-range-value1"></span> </div> <div class="col-xs-6 text-right caption"><span id="slider-range-value2"></span> </div> </div> <div class="row"> <div class="col-sm-12"> <form> <input type="hidden" name="min-value" value=""> <input type="hidden" name="max-value" value=""> </form> </div> </div> </div> </div> </div> </div> <div class="restaurantslistpart "> <div class="restaurantslistmaindiv" data-simplebar>';

			if(catData.length > 0){
				for(var i = 0; i < catData.length; i++) {
					var lon = catData[i].coordinates[0];
					var lat = catData[i].coordinates[1];
					var popupText =  atob(catData[i]['name']);
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
				cathtml += '</div> <div class="paginationmaindiv"> <nav aria-label="..."> <ul class="pagination"><li class="page-item disabled"> <span class="page-link"><img src="assets/img/icons/left-arrow.png"></span> </li>';
				var tolPage = Math.ceil(catData[0]['tolcnt']/10);
				for(var p=1;p<=tolPage;p++){
					var activeClass= '';
					if(p==current_page){activeClass = 'active';}
					cathtml +='<li class="page-item page_no '+activeClass+'" data-index="'+id+'"> <a class="page-link" href="javascript:void(0)">'+p+'</a> </li>'; 
				}
				cathtml +='<li class="page-item"> <a class="page-link" href="#"><img src="assets/img/icons/right-arrow.png"></a> </li></ul> </nav> </div> </div> </div> </div> </div> <!-- Hotel sub sidebar --> <div class="extrapart catSubsidebar" style="display: none;"></div> </div>';
			}
			else{
				cathtml += '<div class="singledivlist"><div class="leftpart"><p>No Data Found</p></div></div></div></div></div></div></div></div>';
			}
			$('.catDataDiv').html(cathtml);
		}
	 })
}

});	

String.prototype.ucwords = function() {
    return this.toLowerCase().replace(/\b[a-z]/g, function(letter) {
        return letter.toUpperCase();
    });
}

$(document).on('click','#catCloseBtn', function(){
	var id = $("#catid").val();
	$(".indexDiv").css('display','block');
	$(".featuredDiv").css('display','none');
	$(".morecategoryDiv").css('display','none');
	$(".catDataDiv").css('display','none');
	$('.getEatoutDetail').attr('id');
	$('.icon-'+id).attr('data-id', 'Yes');
	$(".leaflet-marker-icon").css('display','none');
	//window.location.reload();
});

$(document).on('click','#catBtn', function(){
	var id = $(this).attr('data-index');
	var flag = $(this).attr('data-id');
	$.ajax({
		type: "POST",
		url: 'subcategory_ajax.php',
		data: {'subcategory':'subcategoryForm','id': id},
		success: function(response){
			 $(".subcatSubsidebar").html(response);
			$(".morecategoryDiv").addClass('extralarge');
			$(".morecategoryDiv").css('display','flex'); 
			$(".subcatSubsidebar").css('display','block'); 
			$("#catid").val(id);
			 $.getScript(bootstrap);
			$.getScript(popper);
			$.getScript(simplebar);
			$.getScript(custom);
		}
	 })
});
$(document).on('click', "#subcatBtn", function(){
	var id = $(this).attr('data-index');
	var name = $(this).attr('data-id');
	var flag = $(this).attr('data-flag');
	 $.ajax({
		type: "POST",
		url: 'subcategory_detail_ajax.php',
		data: {'subcategorydetail':'subcategorydetailForm','id': id,'name': name, 'flag': flag},
		success: function(response){
			console.log(response);
			 var arr = response.split("|");
			var LatLng = JSON.parse(arr[1]); 
			var Name = JSON.parse(arr[2]); 
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
			for(var i = 0; i < LatLng.length; i++) {
						var lon = LatLng[i].coordinates[0];
						var lat = LatLng[i].coordinates[1];
						var popupText =  atob(Name[i]['name']);
						var markerLocation = new L.LatLng(lat, lon);
						var marker = new L.Marker(markerLocation, iconOptions);
						map.addLayer(marker);
						marker.bindPopup(popupText);
			} 
			$(this).attr('data-id', 'No');
			$(".morecategoryDiv ").css('display','none');
			$(".eatoutdynamicDiv").removeClass('extralarge');
			$(".eatoutdynamicDiv").html(arr[0]);
			$(".eatoutdynamicDiv").css('display','flex');			
			/* $(".subcatSubsidebar").html(response);
			$(".morecategoryDiv").addClass('extralarge');
			$(".morecategoryDiv").css('display','flex'); 
			$(".subcatSubsidebar").css('display','flex'); 
			$.getScript(bootstrap);
			$.getScript(popper);
			$.getScript(simplebar);
			$.getScript(custom); */
		}
	 }) 
});
$(document).on('click','.getEatoutDyanmicDetail', function(){
	var id = $(this).attr('id');
		 $.ajax({
				type: "POST",
				url: 'eatout_dynamic_ajax.php',
				data: {'eatoutdynamic':'eatoutdynamicForm','id': id},
				success: function(response){
					$(".leaflet-marker-icon").css('display','none');
					$(".eatoutdynamicSubsidebar").html(response);
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
					$(".eatoutdynamicDiv").addClass('extralarge');
					$(".eatoutdynamicSubsidebar").css('display','block');
				}
			 }) 
});
$(document).on('click','#EatoutdynamicCloseBtn', function(){
	var id = $("#catid").val();
	$(".indexDiv").css('display','block');
	$(".eatoutdynamicDiv").css('display','none');
	$('.icon-'+id).attr('data-id', 'Yes');
	$(".leaflet-marker-icon").css('display','none');
	//window.location.reload();
});
var baseMaps = {}; 

var overlayMaps = {
   '<img src="assets/img/icons/train.png" /> </br> ': metroMap,	
   '<img src="assets/img/icons/ic_direction.png" /> </br> ': touristMap,
   '<img src="assets/img/icons/image.png">' : photoMap,
   '<img src="assets/img/icons/parking.png" />': parkingMap
};
var overlayFlag = {
	'<img src="assets/img/icons/train.png"></a>' : metroMap,
	'<img src="assets/img/icons/ic_direction.png"></a>' : touristMap,
	'<img src="assets/img/icons/image.png">' : photoMap,
	'<img src="assets/img/icons/parking.png">' : parkingMap
};

L.control.layers(null, overlayFlag, {collapsed: false}).addTo(map);
L.control.layers(baseMaps, overlayMaps).addTo(map);

//var layerControl = L.control.layers(baseMaps, overlayMaps).addTo(map);
L.control.ruler({
    position: 'bottomright',         // Leaflet control position option
    circleMarker: {               // Leaflet circle marker options for points used in this plugin
        color: 'blue',
        radius: 2
    },
    lineStyle: {                  // Leaflet polyline options for lines used in this plugin
        color: 'blue',
        dashArray: '1,6'
    },
    lengthUnit: {                 // You can use custom length units. Default unit is kilometers.
        display: 'km',              // This is the display value will be shown on the screen. Example: 'meters'
        decimal: 2,                 // Distance result will be fixed to this value. 
        factor: null,               // This value will be used to convert from kilometers. Example: 1000 (from kilometers to meters)  
        label: 'Distance:'
    }
}).addTo(map);
L.Control.measureControl({ position: 'bottomright', activeColor: '#ABE67E', completedColor: '#C8F2BE' }).addTo(map);

var multiPolyLineOptions = {
    color: "red",
    weight: 4,
    opacity: 0.9,
    smoothFactor: 2
};

/*function createCustomIcon(feature, latlng) {
    let myIcon = L.icon({
        iconUrl: 'office-building.png',
        shadowUrl: 'office-building.png',
        iconSize: [25, 25], // width and height of the image in pixels
        shadowSize: [35, 20], // width, height of optional shadow image
        iconAnchor: [12, 12], // point of the icon which will correspond to marker's location
        shadowAnchor: [12, 6],  // anchor point of the shadow. should be offset
        popupAnchor: [0, 0] // point from which the popup should open relative to the iconAnchor
    })
    return L.marker(latlng, { icon: myIcon })
}
let myLayerOptions = {
    pointToLayer: createCustomIcon
}


var metroMap = L.geoJSON(metroLatLng,)
layerControl.addOverlay(metroMap, "Metro Map");

var touristMap = L.geoJSON(tourismLatLng, myLayerOptions)
layerControl.addOverlay(touristMap, "Tourist Places");

var parkingMap = L.geoJSON(parkingLatLng,)
layerControl.addOverlay(parkingMap, "Parking Lots");

var restaurantMap = L.geoJSON(restaurantLatLng,)
layerControl.addOverlay(restaurantMap, "Restaurants");

var groceryMap = L.geoJSON(groceryLatLng,)
layerControl.addOverlay(groceryMap, "Grocery");

var mallMap = L.geoJSON(mallLatLng,)
layerControl.addOverlay(mallMap, "Malls");

var hotelMap = L.geoJSON(hotelLatLng,)
layerControl.addOverlay(hotelMap, "Hotels");*/
var directionsLayer, fromMarker, toMarker;
function snake(fromdata, todata, profile) {
    var from = fromdata.split(",");
    var to = todata.split(",");
    var route = [[from[1], from[0]], [to[1], to[0]]];
    for (var i = 0, latlngs = [], len = route.length; i < len; i++) {
        latlngs.push(new L.LatLng(route[i][0], route[i][1]));
    }
    // var ghRouting = new GraphHopper.Routing({
    //     key: "a72dc920-8b01-487e-a9a6-9ffb30305ff4",
    //     profile: "foot",
    //     elevation: false
    //   });
      let ghRouting = new GraphHopper.Routing(
        { key: "a72dc920-8b01-487e-a9a6-9ffb30305ff4"},
        { profile: profile, elevation: false });
      console.log(from[1], from[0], "=======", to[1], to[0])

      ghRouting.doRequest({points:[[from[1], from[0]], [to[1], to[0]]]})
      .then(function(json) {
        // Add your own result handling here
        console.log(json.paths[0]);
        if(directionsLayer) {
            map.removeLayer(directionsLayer);
            map.removeLayer(fromMarker);
            map.removeLayer(toMarker);
        }
        let km = json.paths[0].distance / 1000;
        $("#distance_span").html(km.toFixed(1) + " km");
        console.log(json.paths[0].points.coordinates.length, "===============", json.paths[0].points.coordinates[json.paths[0].points.coordinates.length - 1])
        console.log("=======?========", json.paths[0].points.coordinates[0])
        $("#duration_span").html(convertMsToHM(json.paths[0].time));
        directionsLayer = L.polyline(json.paths[0].points.coordinates);
        map.fitBounds(L.latLngBounds(json.paths[0].points.coordinates));
        // L.geoJSON(L.latLngBounds(json.paths[0].points)).addTo(map);
        fromMarker = new L.marker(json.paths[0].points.coordinates[0]);
        toMarker = new L.marker(L.marker(json.paths[0].points.coordinates[json.paths[0].points.coordinates.length - 1]));
        map.addLayer(fromMarker);
        map.addLayer(toMarker);
    
        map.addLayer(directionsLayer);
        directionsLayer.snakeIn();
      })
      .catch(function(err) {
        console.error(err.message);
      });
}
function putmarkerfrom(latitude) {
    var from = latitude.split(",");
    var lat = from[1];
    var lng = from[0];
    // L.marker([lat, lng]).addTo(map);
}
function putmarkerto(longitude) {
    var to = longitude.split(",");
    var lat = to[1];
    var lng = to[0];
    // L.marker([lat, lng]).addTo(map);

}
function getDistanceFromLatLonInKm(lat1, lon1, lat2, lon2) {
    var R = 6371; // Radius of the earth in km
    var dLat = deg2rad(lat2 - lat1);  // deg2rad below
    var dLon = deg2rad(lon2 - lon1);
    var a =
        Math.sin(dLat / 2) * Math.sin(dLat / 2) +
        Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) *
        Math.sin(dLon / 2) * Math.sin(dLon / 2);
    var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
    var d = R * c; // Distance in km
    return d;
}

function deg2rad(deg) {
    return deg * (Math.PI / 180)
}

function padTo2Digits(num) {
    return num.toString().padStart(2, '0');
  }
  
function convertMsToHM(milliseconds) {
    let seconds = Math.floor(milliseconds / 1000);
    let minutes = Math.floor(seconds / 60);
    let hours = Math.floor(minutes / 60);
  
    seconds = seconds % 60;
    minutes = seconds >= 30 ? minutes + 1 : minutes;
  
    minutes = minutes % 60;
  
    // 👇️ If you don't want to roll hours over, e.g. 24 to 00
    // 👇️ comment (or remove) the line below
    // commenting next line gets you `24:00:00` instead of `00:00:00`
    // or `36:15:31` instead of `12:15:31`, etc.
    // hours = hours % 24;
  
    return `${padTo2Digits(hours)}:${padTo2Digits(minutes)}`;
}
function Copy() {
  var Url = document.getElementById("urllink");
  Url.innerHTML = window.location.href;
  console.log(Url.innerHTML)
  Url.select();
  document.execCommand("copy");
  $("#exampleModal2").modal('hide');
  $("#urllink").val('');
}  