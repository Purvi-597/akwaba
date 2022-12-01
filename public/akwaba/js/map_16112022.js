var plainMap = L.tileLayer('http://10.10.3.50:5000/hot/{z}/{x}/{y}.png', {
    maxZoom: 21,
    maxNativeZoom: 22
});

var burl = window.location.href; 
if(burl == 'http://localhost/akwaba/index.php'){
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
		iconUrl: 'http://localhost/openstreetMapDemo/parkings.png',
		shadowUrl: 'http://localhost/openstreetMapDemo/parkings.png',
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
        iconUrl: 'http://localhost/akwaba/uploads/tourist/captions.jpg',
        shadowUrl: 'http://localhost/akwaba/uploads/tourist/captions.jpg',
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
        iconUrl: 'http://localhost/akwaba/Parking_icon2.png',
        shadowUrl: 'http://localhost/akwaba/Parking_icon2.png',
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

$(document).on('click','#iconBtn', function(){ 

var id = $(this).attr('data-index');
var flag = $(this).attr('data-id');
if(flag == "Yes" && id == '1'){
	$(this).attr('data-id', 'No');
	$(".indexDiv").css('display','none');
	$(".eatoutDiv").css('display','flex');
	$(".eatoutDiv").removeClass('extralarge');
	let customIcon = {
	 iconUrl:'http://localhost/akwaba/assets/img/icons/ic_eat_out.png',
	 iconSize:[30,30]
	}
	let myIcon = L.icon(customIcon);
	let iconOptions = {
	 title:'company name',
	 draggable:false,
	 icon:myIcon
	}
	for(var i = 0; i < restaurantLatLng.length; i++) {
				var lon = restaurantLatLng[i].coordinates[0];
				var lat = restaurantLatLng[i].coordinates[1];
				var popupText =  atob(restaurantnameData[i]['name']);
				var markerLocation = new L.LatLng(lat, lon);
				var marker = new L.Marker(markerLocation, iconOptions);
				map.addLayer(marker);
				marker.bindPopup(popupText);
				$(".leaflet-marker-icon").css('display','block');
	}
}else if(flag == "Yes" && id == '2'){
	$(this).attr('data-id', 'No');
	$(".indexDiv").css('display','none');
	$(".GroceriesDiv").css('display','flex');
	$(".GroceriesDiv").removeClass('extralarge');
	let customIcon = {
	 iconUrl:'http://localhost/akwaba/assets/img/icons/ic_eat_out_2.png',
	 iconSize:[30,30]
	}
	let myIcon = L.icon(customIcon);
	let iconOptions = {
	 title:'company name',
	 draggable:false,
	 icon:myIcon
	}
	for(var i = 0; i < groceryLatLng.length; i++) {
				var lon = groceryLatLng[i].coordinates[0];
				var lat = groceryLatLng[i].coordinates[1];
				var popupText =  atob(grocerynameData[i]['name']);
				var markerLocation = new L.LatLng(lat, lon);
				var marker = new L.Marker(markerLocation, iconOptions);
				map.addLayer(marker);
				marker.bindPopup(popupText);
				$(".leaflet-marker-icon").css('display','block');
	}
}else if(flag == "Yes" && id == '3'){
	$(this).attr('data-id', 'No');
	$(".indexDiv").css('display','none');
	$(".MallsDiv").css('display','flex');
	$(".MallsDiv").removeClass('extralarge');
	let customIcon = {
	 iconUrl:'http://localhost/akwaba/assets/img/icons/ic_eat_out.png',
	 iconSize:[30,30]
	}
	let myIcon = L.icon(customIcon);
	let iconOptions = {
	 title:'company name',
	 draggable:false,
	 icon:myIcon
	}
	for(var i = 0; i < mallLatLng.length; i++) {
				var lon = mallLatLng[i].coordinates[0];
				var lat = mallLatLng[i].coordinates[1];
				var popupText =  atob(mallnameData[i]['name']);
				var markerLocation = new L.LatLng(lat, lon);
				var marker = new L.Marker(markerLocation, iconOptions);
				map.addLayer(marker);
				marker.bindPopup(popupText);
				$(".leaflet-marker-icon").css('display','block');
	}
}else if(flag == "Yes" && id == '5'){
	$(this).attr('data-id', 'No');
	$(".indexDiv").css('display','none');
	$(".HotelsDiv").css('display','flex');
	$(".HotelsDiv").removeClass('extralarge');
	let customIcon = {
	 iconUrl:'http://localhost/akwaba/assets/img/icons/ic_eat_out_2.png',
	 iconSize:[30,30]
	}
	let myIcon = L.icon(customIcon);
	let iconOptions = {
	 title:'company name',
	 draggable:false,
	 icon:myIcon
	}
	for(var i = 0; i < hotelLatLng.length; i++) {
				var lon = hotelLatLng[i].coordinates[0];
				var lat = hotelLatLng[i].coordinates[1];
				var popupText =  atob(hotelnameData[i]['name']);
				var markerLocation = new L.LatLng(lat, lon);
				var marker = new L.Marker(markerLocation, iconOptions);
				map.addLayer(marker);
				marker.bindPopup(popupText);
				$(".leaflet-marker-icon").css('display','block');
	}
}else if(flag == "Yes" && id == '6'){
	$(this).attr('data-id', 'No');
	$(".indexDiv").css('display','none');
	$(".GasDiv").css('display','flex');
	$(".GasDiv").removeClass('extralarge');
	let customIcon = {
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
				$(".leaflet-marker-icon").css('display','block');
	}
}else if(flag == "Yes" && id == '7'){
	$(".morecategoryDiv").removeClass('extralarge');
	var myElement = document.getElementById('simple-bar');
	new SimpleBar(myElement, { autoHide: true });
}else if(flag == "Yes" && id == '8'){
   var sessionid = $("#sessionid").val();
   if (typeof sessionid === "undefined") {
	   $("#exampleModal1").modal('show');
   }else{
		
	
   }
}else{

	$(this).attr('data-id', 'Yes');
	//window.location.reload();
	//var restaurantMap = L.geoJSON(restaurantLatLng,myLayerOptionssss);
		
}

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
			 if(arr[0].length !== '0' && arr[1] !== null){
				var LatLng = JSON.parse(arr[0]); 
				var Name = JSON.parse(arr[1]); 
				let customIcon = {
				 iconUrl:'http://localhost/akwaba/assets/img/icons/ic_eat_out.png',
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
				$(".eatoutdynamicDiv").html(arr[2]);
				$(".eatoutdynamicDiv").css('display','flex');			
			 }else{
				 alert('Data is not found');
			 }
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
	//$(".leaflet-marker-icon").css('display','none');
	 $(".leaflet-marker-icon").remove();
	 var lat = '';
	$('.lat').empty();
	var long = '';
	$('.long').empty();
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