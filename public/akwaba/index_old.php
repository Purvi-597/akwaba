<?php 
@session_start();
include('layout/head.php');
include('config/db_mysql.php');
include('config/db_pg.php');

/* Direction */
$directionResult = pg_query($db, "select ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data from planet_osm_point where name ='%Aladin%'");
$directionData= [];
while($row = pg_fetch_row($directionResult)) {
    array_push($directionData, json_decode($row[0], true));
}


/* Railway Metro fixed */
$metroResult = pg_query($db, "select ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data from planet_osm_line where railway='subway'");
$metroData= [];
while($row = pg_fetch_row($metroResult)) {
    array_push($metroData, json_decode($row[0], true));
}

/* Tourism fixed */

$tourismResult = pg_query($db, "select ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data from planet_osm_point where tourism='attraction'");
$tourismData= [];
while($row = pg_fetch_row($tourismResult)) {
    array_push($tourismData, json_decode($row[0], true));
}

/* Aminity Parking fixed */
$parkingResult = pg_query($db, "select ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data from planet_osm_point where amenity='parking'");
$parkingData= [];
while($row = pg_fetch_row($parkingResult)) {
    array_push($parkingData, json_decode($row[0], true));
}

/* Photos fixed */
$photos = "SELECT id,photo_image as image,photo_name as name,photo_address as address, latitude, longitude FROM `tourist_place` WHERE `status` = '1'";
$result = $conn->query($photos);
if($result->num_rows > 0) {
	$touristplaceData = [];
	$touristLatLong = [];
	while($row = $result->fetch_assoc()) {
		$touristplaceData[] = $row;
		$coordinates = array('0'=>(float)$row['latitude'], '1'=>(float)$row['longitude']);
		$touristLatLong[] = array('type'=>'Point', 'coordinates'=>$coordinates);
	}
}

/* Eat-out Fixed*/
$restaurantResult = pg_query($db, "select ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data from planet_osm_point where amenity='restaurant' and name!=''");
$restaurantData= [];
while($row = pg_fetch_row($restaurantResult)) {
    array_push($restaurantData, json_decode($row[0], true));
}
$restaurantnameResult = pg_query($db, "SELECT osm_id,name FROM public.planet_osm_point WHERE amenity = 'restaurant' and name!=''");
while($row = pg_fetch_row($restaurantnameResult)) {
    $restaurantnameData[] = array('name'=>base64_encode($row[1]));
}

/* shop Grocery Fixed*/
$groceryResult = pg_query($db, "select ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data from planet_osm_point where shop='supermarket'");
$groceryData= [];
while($row = pg_fetch_row($groceryResult)) {
    array_push($groceryData, json_decode($row[0], true));
}
$grocerynameResult = pg_query($db, "SELECT osm_id,name FROM public.planet_osm_point WHERE shop='supermarket' and name!=''");
$grocerynameData= [];
while($row = pg_fetch_row($grocerynameResult)) {
	$grocerynameData[] = array('name'=>base64_encode($row[1]));
}

/* Mall Fixed */
$mallResult = pg_query($db, "select ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data from planet_osm_point where shop='mall'");
$mallData= [];
while($row = pg_fetch_row($mallResult)) {
    array_push($mallData, json_decode($row[0], true));
}
$mallnameResult = pg_query($db, "SELECT osm_id,name FROM public.planet_osm_point WHERE shop='mall'");
$mallnameData= [];
while($row = pg_fetch_row($mallnameResult)) {
	$mallnameData[] = array('name'=>base64_encode($row[1]));
}

/* Hotel Fixed*/
$hotelResult = pg_query($db, "select ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data from planet_osm_point where tourism='hotel' and name != ''");
$hotelData= [];
while($row = pg_fetch_row($hotelResult)) {
    array_push($hotelData, json_decode($row[0], true));
}
$hotelnameResult = pg_query($db, "SELECT osm_id,name FROM public.planet_osm_point where tourism='hotel' and name != ''");
$hotelnameData= [];
while($row = pg_fetch_row($hotelnameResult)) {
	$hotelnameData[] = array('name'=>base64_encode($row[1]));
}

/* Gas Station Fixed */
$gasResult = pg_query($db, "select ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data from planet_osm_point where amenity='fuel' and name != ''");
$gasData= [];
while($row = pg_fetch_row($gasResult)) {
    array_push($gasData, json_decode($row[0], true));
}
$gasnameResult = pg_query($db, "SELECT osm_id,name FROM public.planet_osm_point where amenity='fuel' and name != ''");
$gasnameData= [];
while($row = pg_fetch_row($gasnameResult)) {
	$gasnameData[] = array('name'=>base64_encode($row[1]));
}

/* Home Category */
$category = "SELECT * FROM `homecategories` WHERE `status` = '1' LIMIT 8";
$cat_result = $conn->query($category);
if($cat_result->num_rows > 0) {
	$categoryData = [];
	while($rows = $cat_result->fetch_assoc()) {
		$categoryData[] = $rows;
	}
}

/* More Category */
$more_category = "SELECT * FROM `categories` WHERE `status` = '1'";
$more_cat_result = $conn->query($more_category);
if($more_cat_result->num_rows > 0) {
	$morecategoryData = [];
	while($mrows = $more_cat_result->fetch_assoc()) {
		$morecategoryData[] = $mrows;
	}
}

$feature_text = "SELECT * FROM `featured_text` WHERE `status` = '1'";
$feature_text_result = $conn->query($feature_text);
if($feature_text_result->num_rows > 0) {
	$ftrows = $feature_text_result->fetch_assoc();
	$title = isset($ftrows['title'])?$ftrows['title']:"";
	$description = isset($ftrows['description'])?$ftrows['description']:"";
}
$feature = "SELECT * FROM `featured_places` WHERE `status` = '1'";
$feature_result = $conn->query($feature);
if($feature_result->num_rows > 0) {
	$featureData = [];
	while($frows = $feature_result->fetch_assoc()) {
		$featureData[] = $frows;
	}
}

$advertisement = "SELECT * FROM `advertisement` WHERE `status` = '1'";
$advertisement_result = $conn->query($advertisement);
if($advertisement_result->num_rows > 0) {
	$advertisementData = [];
	while($Arows = $advertisement_result->fetch_assoc()) {
		$advertisementData[] = $Arows;
	}
}



/* Eat Out Query */
$restaurantDatas = pg_query($db, "select
tags->'phone' as phone,
tags->'name:en' as en_Name,  
tags->'name:hy' as hy_Name,  
tags->'name:ru' as ru_Name,  
tags->'opening_hours' as opening_hours,  
tags->'cuisine' as cuisine,  
tags->'website' as website,  
tags->'addr:city' as city,  
tags->'addr:street' as street,
tags->'internet_access' as internet_access,
tags->'outdoor_seating' as outdoor_seating,
tags->'internet_access:fee' as internet_access_fee,
tags->'description' as description,
tags->'smoking' as smoking,
tags->'delivery' as delivery,
tags->'email' as email,
tags->'cuisine:ja' as cuisine_ja,
tags->'name:az' as az_name,
tags->'addr:postcode' as postcode,
tags->'facebook' as facebook,
tags->'addr:country' as country,
tags->'addr:district' as district,
tags->'contact:phone' as contact_phone,
tags->'contact:instagram' as instagram,
tags->'operator' as operator,
tags->'diet:vegetarian' as vegetarian,
tags->'name:ar' as ar_name,
tags->'townhall:type' as townhall,
tags->'designation' as designation,
tags->'name:es' as es_name,
tags->'capacity' as capacity,
tags->'name:tr' as tr_name,
tags->'contact:facebook' as contact_facebook,
tags->'reservation' as reservation,
tags->'instagram' as instagram,
tags->'takeaway' as takeaway,
tags->'url' as url,
tags->'level' as level,
tags->'toilets' as toilets,
tags->'cuisine_1' as cuisine_1,
tags->'cuisine_2' as cuisine_2,
tags->'brand' as brand,
tags->'contact:email' as contact_email,
tags->'brand:wikidata' as wikidata,
tags->'brand:wikipedia' as wikipedia,
tags->'drive_in' as drive_in,
tags->'wheelchair' as wheelchair,
tags->'microbrewery' as microbrewery,
tags->'opening_hours:covid19' as opening_hours_covid19,
tags->'diet:vegan' as diet_vegan,
tags->'image' as image,
tags->'diet:meat' as meat,
tags->'ref:vatin' as vatin,
tags->'phone_1' as phone_1,
name as restaurantname,
osm_id as osmid
from 
public.planet_osm_point 
WHERE amenity='restaurant' and name!=''");
$restaurants= [];
while($row = pg_fetch_row($restaurantDatas)) {
	if(!empty($row[1])) {
	$restaurants[] = array(
	"phone"=>$row[0],
	"en_name"=>trim($row[1],'"'),
	"hy_name"=>trim($row[2],'"'),
	"ru_name"=>trim($row[3],'"'),
	"opening_hours"=>$row[4],
	"cuisine"=>$row[5],
	"website"=>$row[6],
	"city"=>$row[7],
	"street"=>$row[8],
	"internet_access"=>$row[9],
	"outdoor_seating"=>$row[10],
	"internet_access_fee"=>$row[11],
	"description"=>$row[12],
	"smoking"=>$row[13],
	"delivery"=>$row[14],
	"email"=>$row[15],
	"ja_cuisine"=>$row[16],
	"az_name"=>$row[17],
	"postcode"=>$row[18],
	"facebook"=>$row[19],
	"country"=>$row[20],
	"district"=>$row[21],
	"contact_phone"=>$row[22],
	"instagram"=>$row[23],
	"operator"=>$row[24],
	"vegetarian"=>$row[25],
	"ar_name"=>$row[26],
	"townhall"=>$row[27],
	"designation"=>$row[28],
	"es_name"=>$row[29],
	"capacity"=>$row[30],
	"tr_name"=>$row[31],
	"contact_facebook"=>$row[32],
	"reservation"=>$row[33],
	"instagram"=>$row[34],
	"takeaway"=>$row[35],
	"url"=>$row[36],
	"level"=>$row[37],
	"toilets"=>$row[38],
	"cuisine_1"=>$row[39],
	"cuisine_2"=>$row[40],
	"brand"=>$row[41],
	"contact_email"=>$row[42],
	"wikidata"=>$row[43],
	"wikipedia"=>$row[44],
	"drive_in"=>$row[45],
	"wheelchair"=>$row[46],
	"microbrewery"=>$row[47],
	"opening_hours_covid19"=>$row[48],
	"diet_vegan"=>$row[49],
	"image"=>$row[50],
	"diet_meat"=>$row[51],
	"vatin"=>$row[52],
	"phone_1"=>$row[53],
	"restaurantname"=>trim($row[54],'"'),
	"osmid"=>$row[55]
	) ;
	}
}

/* Groceries Query */
$GroceriesDatas = pg_query($db, "select
tags->'phone' as phone,
tags->'name:en' as en_Name,  
tags->'name:hy' as hy_Name,  
tags->'name:ru' as ru_Name,  
tags->'opening_hours' as opening_hours,  
tags->'cuisine' as cuisine,  
tags->'website' as website,  
tags->'addr:city' as city,  
tags->'addr:street' as street,
tags->'internet_access' as internet_access,
tags->'outdoor_seating' as outdoor_seating,
tags->'internet_access:fee' as internet_access_fee,
tags->'description' as description,
tags->'smoking' as smoking,
tags->'delivery' as delivery,
tags->'email' as email,
tags->'cuisine:ja' as cuisine_ja,
tags->'name:az' as az_name,
tags->'addr:postcode' as postcode,
tags->'facebook' as facebook,
tags->'addr:country' as country,
tags->'addr:district' as district,
tags->'contact:phone' as contact_phone,
tags->'contact:instagram' as instagram,
tags->'operator' as operator,
tags->'diet:vegetarian' as vegetarian,
tags->'name:ar' as ar_name,
tags->'townhall:type' as townhall,
tags->'designation' as designation,
tags->'name:es' as es_name,
tags->'capacity' as capacity,
tags->'name:tr' as tr_name,
tags->'contact:facebook' as contact_facebook,
tags->'reservation' as reservation,
tags->'instagram' as instagram,
tags->'takeaway' as takeaway,
tags->'url' as url,
tags->'level' as level,
tags->'toilets' as toilets,
tags->'cuisine_1' as cuisine_1,
tags->'cuisine_2' as cuisine_2,
tags->'brand' as brand,
tags->'contact:email' as contact_email,
tags->'brand:wikidata' as wikidata,
tags->'brand:wikipedia' as wikipedia,
tags->'drive_in' as drive_in,
tags->'wheelchair' as wheelchair,
tags->'microbrewery' as microbrewery,
tags->'opening_hours:covid19' as opening_hours_covid19,
tags->'diet:vegan' as diet_vegan,
tags->'image' as image,
tags->'diet:meat' as meat,
tags->'ref:vatin' as vatin,
tags->'phone_1' as phone_1,
tags->'payment:cash' as cash,
tags->'payment:visa' as visa,
tags->'payment:mastercard' as mastercard,
tags->'payment:debit_cards' as debit_cards,
tags->'payment:credit_cards' as credit_cards,
tags->'sym' as sym,
tags->'start_date' as start_date,
tags->'air_conditioning' as air_conditioning,
tags->'int_name' as int_name,
tags->'second_hand' as second_hand,
tags->'currency:AZN' as currency_AZN,
tags->'old_name' as old_name,
tags->'name:signed' as signed,
tags->'wheelchair' as wheelchair,
name as restaurantname,
shop as shop,
osm_id as osmid
from 
public.planet_osm_point 
WHERE shop='supermarket' and shop!=''");
$Groceries= [];
while($row = pg_fetch_row($GroceriesDatas)) {
	if(!empty($row[1])) {
	$Groceries[] = array(
	"phone"=>$row[0],
	"en_name"=>trim($row[1],'"'),
	"hy_name"=>trim($row[2],'"'),
	"ru_name"=>trim($row[3],'"'),
	"opening_hours"=>$row[4],
	"cuisine"=>$row[5],
	"website"=>$row[6],
	"city"=>$row[7],
	"street"=>$row[8],
	"internet_access"=>$row[9],
	"outdoor_seating"=>$row[10],
	"internet_access_fee"=>$row[11],
	"description"=>$row[12],
	"smoking"=>$row[13],
	"delivery"=>$row[14],
	"email"=>$row[15],
	"ja_cuisine"=>$row[16],
	"az_name"=>$row[17],
	"postcode"=>$row[18],
	"facebook"=>$row[19],
	"country"=>$row[20],
	"district"=>$row[21],
	"contact_phone"=>$row[22],
	"instagram"=>$row[23],
	"operator"=>$row[24],
	"vegetarian"=>$row[25],
	"ar_name"=>$row[26],
	"townhall"=>$row[27],
	"designation"=>$row[28],
	"es_name"=>$row[29],
	"capacity"=>$row[30],
	"tr_name"=>$row[31],
	"contact_facebook"=>$row[32],
	"reservation"=>$row[33],
	"instagram"=>$row[34],
	"takeaway"=>$row[35],
	"url"=>$row[36],
	"level"=>$row[37],
	"toilets"=>$row[38],
	"cuisine_1"=>$row[39],
	"cuisine_2"=>$row[40],
	"brand"=>$row[41],
	"contact_email"=>$row[42],
	"wikidata"=>$row[43],
	"wikipedia"=>$row[44],
	"drive_in"=>$row[45],
	"wheelchair"=>$row[46],
	"microbrewery"=>$row[47],
	"opening_hours_covid19"=>$row[48],
	"diet_vegan"=>$row[49],
	"image"=>$row[50],
	"diet_meat"=>$row[51],
	"vatin"=>$row[52],
	"phone_1"=>$row[53],
	"cash"=>$row[54],
	"visa"=>$row[55],
	"mastercard"=>$row[56],
	"debit_cards"=>$row[57],
	"credit_cards"=>$row[58],
	"sym"=>$row[59],
	"start_date"=>$row[60],
	"air_conditioning"=>$row[61],
	"int_name"=>$row[62],
	"second_hand"=>$row[63],
	"currency_AZN"=>$row[64],
	"old_name"=>$row[65],
	"signed"=>$row[66],
	"wheelchair"=>$row[67],
	"restaurantname"=>trim($row[68],'"'),
	"shop"=>trim($row[69],'"'),
	"osmid"=>$row[70]
	) ;
	}
}


/* Mall Query */
$MallDatas = pg_query($db, "select
tags->'phone' as phone,
tags->'name:en' as en_Name,  
tags->'name:hy' as hy_Name,  
tags->'name:ru' as ru_Name,  
tags->'opening_hours' as opening_hours,  
tags->'cuisine' as cuisine,  
tags->'website' as website,  
tags->'addr:city' as city,  
tags->'addr:street' as street,
tags->'internet_access' as internet_access,
tags->'outdoor_seating' as outdoor_seating,
tags->'internet_access:fee' as internet_access_fee,
tags->'description' as description,
tags->'smoking' as smoking,
tags->'delivery' as delivery,
tags->'email' as email,
tags->'cuisine:ja' as cuisine_ja,
tags->'name:az' as az_name,
tags->'addr:postcode' as postcode,
tags->'facebook' as facebook,
tags->'addr:country' as country,
tags->'addr:district' as district,
tags->'contact:phone' as contact_phone,
tags->'contact:instagram' as instagram,
tags->'operator' as operator,
tags->'diet:vegetarian' as vegetarian,
tags->'name:ar' as ar_name,
tags->'townhall:type' as townhall,
tags->'designation' as designation,
tags->'name:es' as es_name,
tags->'capacity' as capacity,
tags->'name:tr' as tr_name,
tags->'contact:facebook' as contact_facebook,
tags->'reservation' as reservation,
tags->'instagram' as instagram,
tags->'takeaway' as takeaway,
tags->'url' as url,
tags->'level' as level,
tags->'toilets' as toilets,
tags->'cuisine_1' as cuisine_1,
tags->'cuisine_2' as cuisine_2,
tags->'brand' as brand,
tags->'contact:email' as contact_email,
tags->'brand:wikidata' as wikidata,
tags->'brand:wikipedia' as wikipedia,
tags->'drive_in' as drive_in,
tags->'wheelchair' as wheelchair,
tags->'microbrewery' as microbrewery,
tags->'opening_hours:covid19' as opening_hours_covid19,
tags->'diet:vegan' as diet_vegan,
tags->'image' as image,
tags->'diet:meat' as meat,
tags->'ref:vatin' as vatin,
tags->'phone_1' as phone_1,
tags->'payment:cash' as cash,
tags->'payment:visa' as visa,
tags->'payment:mastercard' as mastercard,
tags->'payment:debit_cards' as debit_cards,
tags->'payment:credit_cards' as credit_cards,
tags->'sym' as sym,
tags->'start_date' as start_date,
tags->'air_conditioning' as air_conditioning,
tags->'int_name' as int_name,
tags->'second_hand' as second_hand,
tags->'currency:AZN' as currency_AZN,
tags->'old_name' as old_name,
tags->'name:signed' as signed,
tags->'wheelchair' as wheelchair,
name as restaurantname,
shop as shop,
osm_id as osmid
from 
public.planet_osm_point 
WHERE shop='mall'");
$Malls= [];
while($row = pg_fetch_row($MallDatas)) {
	$Malls[] = array(
	"phone"=>$row[0],
	"en_name"=>trim($row[1],'"'),
	"hy_name"=>trim($row[2],'"'),
	"ru_name"=>trim($row[3],'"'),
	"opening_hours"=>$row[4],
	"cuisine"=>$row[5],
	"website"=>$row[6],
	"city"=>$row[7],
	"street"=>$row[8],
	"internet_access"=>$row[9],
	"outdoor_seating"=>$row[10],
	"internet_access_fee"=>$row[11],
	"description"=>$row[12],
	"smoking"=>$row[13],
	"delivery"=>$row[14],
	"email"=>$row[15],
	"ja_cuisine"=>$row[16],
	"az_name"=>$row[17],
	"postcode"=>$row[18],
	"facebook"=>$row[19],
	"country"=>$row[20],
	"district"=>$row[21],
	"contact_phone"=>$row[22],
	"instagram"=>$row[23],
	"operator"=>$row[24],
	"vegetarian"=>$row[25],
	"ar_name"=>$row[26],
	"townhall"=>$row[27],
	"designation"=>$row[28],
	"es_name"=>$row[29],
	"capacity"=>$row[30],
	"tr_name"=>$row[31],
	"contact_facebook"=>$row[32],
	"reservation"=>$row[33],
	"instagram"=>$row[34],
	"takeaway"=>$row[35],
	"url"=>$row[36],
	"level"=>$row[37],
	"toilets"=>$row[38],
	"cuisine_1"=>$row[39],
	"cuisine_2"=>$row[40],
	"brand"=>$row[41],
	"contact_email"=>$row[42],
	"wikidata"=>$row[43],
	"wikipedia"=>$row[44],
	"drive_in"=>$row[45],
	"wheelchair"=>$row[46],
	"microbrewery"=>$row[47],
	"opening_hours_covid19"=>$row[48],
	"diet_vegan"=>$row[49],
	"image"=>$row[50],
	"diet_meat"=>$row[51],
	"vatin"=>$row[52],
	"phone_1"=>$row[53],
	"cash"=>$row[54],
	"visa"=>$row[55],
	"mastercard"=>$row[56],
	"debit_cards"=>$row[57],
	"credit_cards"=>$row[58],
	"sym"=>$row[59],
	"start_date"=>$row[60],
	"air_conditioning"=>$row[61],
	"int_name"=>$row[62],
	"second_hand"=>$row[63],
	"currency_AZN"=>$row[64],
	"old_name"=>$row[65],
	"signed"=>$row[66],
	"wheelchair"=>$row[67],
	"restaurantname"=>trim($row[68],'"'),
	"shop"=>trim($row[69],'"'),
	"osmid"=>$row[70]
	) ;
}



/* Hotels Query */
$HotelDatas = pg_query($db, "select
tags->'phone' as phone,
tags->'name:en' as en_Name,  
tags->'name:hy' as hy_Name,  
tags->'name:ru' as ru_Name,  
tags->'opening_hours' as opening_hours,  
tags->'cuisine' as cuisine,  
tags->'website' as website,  
tags->'addr:city' as city,  
tags->'addr:street' as street,
tags->'internet_access' as internet_access,
tags->'outdoor_seating' as outdoor_seating,
tags->'internet_access:fee' as internet_access_fee,
tags->'description' as description,
tags->'smoking' as smoking,
tags->'delivery' as delivery,
tags->'email' as email,
tags->'cuisine:ja' as cuisine_ja,
tags->'name:az' as az_name,
tags->'addr:postcode' as postcode,
tags->'facebook' as facebook,
tags->'addr:country' as country,
tags->'addr:district' as district,
tags->'contact:phone' as contact_phone,
tags->'contact:instagram' as instagram,
tags->'operator' as operator,
tags->'diet:vegetarian' as vegetarian,
tags->'name:ar' as ar_name,
tags->'townhall:type' as townhall,
tags->'designation' as designation,
tags->'name:es' as es_name,
tags->'capacity' as capacity,
tags->'name:tr' as tr_name,
tags->'contact:facebook' as contact_facebook,
tags->'reservation' as reservation,
tags->'instagram' as instagram,
tags->'takeaway' as takeaway,
tags->'url' as url,
tags->'level' as level,
tags->'toilets' as toilets,
tags->'cuisine_1' as cuisine_1,
tags->'cuisine_2' as cuisine_2,
tags->'brand' as brand,
tags->'contact:email' as contact_email,
tags->'brand:wikidata' as wikidata,
tags->'brand:wikipedia' as wikipedia,
tags->'drive_in' as drive_in,
tags->'wheelchair' as wheelchair,
tags->'microbrewery' as microbrewery,
tags->'opening_hours:covid19' as opening_hours_covid19,
tags->'diet:vegan' as diet_vegan,
tags->'image' as image,
tags->'diet:meat' as meat,
tags->'ref:vatin' as vatin,
tags->'phone_1' as phone_1,
tags->'payment:cash' as cash,
tags->'payment:visa' as visa,
tags->'payment:mastercard' as mastercard,
tags->'payment:debit_cards' as debit_cards,
tags->'payment:credit_cards' as credit_cards,
tags->'sym' as sym,
tags->'start_date' as start_date,
tags->'air_conditioning' as air_conditioning,
tags->'int_name' as int_name,
tags->'second_hand' as second_hand,
tags->'currency:AZN' as currency_AZN,
tags->'old_name' as old_name,
tags->'name:signed' as signed,
tags->'internet_access:ssid' as ssid,
tags->'stars' as stars,
tags->'bar' as bar,
tags->'payment:maestro' as maestro,
tags->'addr:village' as village,
tags->'contact:youtube' as youtube,
tags->'rooms' as rooms,
tags->'fax' as fax,
tags->'addr:place' as place,
tags->'building:levels' as building_levels,
tags->'rooms:lux' as lux,
tags->'rooms:delux' as delux,
tags->'rooms:business' as business,
name as restaurantname,
shop as shop,
osm_id as osmid
from 
public.planet_osm_point 
WHERE tourism='hotel' and name != ''");
$Hotels= [];
while($row = pg_fetch_row($HotelDatas)) {
//	if(!empty($row[1])){
	$Hotels[] = array(
	"phone"=>$row[0],
	"en_name"=>trim($row[1],'"'),
	"hy_name"=>trim($row[2],'"'),
	"ru_name"=>trim($row[3],'"'),
	"opening_hours"=>$row[4],
	"cuisine"=>$row[5],
	"website"=>$row[6],
	"city"=>$row[7],
	"street"=>$row[8],
	"internet_access"=>$row[9],
	"outdoor_seating"=>$row[10],
	"internet_access_fee"=>$row[11],
	"description"=>$row[12],
	"smoking"=>$row[13],
	"delivery"=>$row[14],
	"email"=>$row[15],
	"ja_cuisine"=>$row[16],
	"az_name"=>$row[17],
	"postcode"=>$row[18],
	"facebook"=>$row[19],
	"country"=>$row[20],
	"district"=>$row[21],
	"contact_phone"=>$row[22],
	"instagram"=>$row[23],
	"operator"=>$row[24],
	"vegetarian"=>$row[25],
	"ar_name"=>$row[26],
	"townhall"=>$row[27],
	"designation"=>$row[28],
	"es_name"=>$row[29],
	"capacity"=>$row[30],
	"tr_name"=>$row[31],
	"contact_facebook"=>$row[32],
	"reservation"=>$row[33],
	"instagram"=>$row[34],
	"takeaway"=>$row[35],
	"url"=>$row[36],
	"level"=>$row[37],
	"toilets"=>$row[38],
	"cuisine_1"=>$row[39],
	"cuisine_2"=>$row[40],
	"brand"=>$row[41],
	"contact_email"=>$row[42],
	"wikidata"=>$row[43],
	"wikipedia"=>$row[44],
	"drive_in"=>$row[45],
	"wheelchair"=>$row[46],
	"microbrewery"=>$row[47],
	"opening_hours_covid19"=>$row[48],
	"diet_vegan"=>$row[49],
	"image"=>$row[50],
	"diet_meat"=>$row[51],
	"vatin"=>$row[52],
	"phone_1"=>$row[53],
	"cash"=>$row[54],
	"visa"=>$row[55],
	"mastercard"=>$row[56],
	"debit_cards"=>$row[57],
	"credit_cards"=>$row[58],
	"sym"=>$row[59],
	"start_date"=>$row[60],
	"air_conditioning"=>$row[61],
	"int_name"=>$row[62],
	"second_hand"=>$row[63],
	"currency_AZN"=>$row[64],
	"old_name"=>$row[65],
	"signed"=>$row[66],
	"ssid"=>$row[67],
	"stars"=>$row[68],
	"bar"=>$row[69],
	"maestro"=>$row[70],
	"village"=>$row[71],
	"youtube"=>$row[72],
	"rooms"=>$row[73],
	"fax"=>$row[74],
	"place"=>$row[75],
	"building_levels"=>$row[76],
	"lux"=>$row[77],
	"delux"=>$row[78],
	"business"=>$row[79],
	"restaurantname"=>trim($row[80],'"'),
	"shop"=>trim($row[81],'"'),
	"osmid"=>$row[82]
	) ; 
	//}
}


/* Gas Query */
$GasDatas = pg_query($db, "select
tags->'phone' as phone,
tags->'name:en' as en_Name,  
tags->'name:hy' as hy_Name,  
tags->'name:ru' as ru_Name,  
tags->'opening_hours' as opening_hours,  
tags->'cuisine' as cuisine,  
tags->'website' as website,  
tags->'addr:city' as city,  
tags->'addr:street' as street,
tags->'internet_access' as internet_access,
tags->'outdoor_seating' as outdoor_seating,
tags->'internet_access:fee' as internet_access_fee,
tags->'description' as description,
tags->'smoking' as smoking,
tags->'delivery' as delivery,
tags->'email' as email,
tags->'cuisine:ja' as cuisine_ja,
tags->'name:az' as az_name,
tags->'addr:postcode' as postcode,
tags->'facebook' as facebook,
tags->'addr:country' as country,
tags->'addr:district' as district,
tags->'contact:phone' as contact_phone,
tags->'contact:instagram' as instagram,
tags->'operator' as operator,
tags->'diet:vegetarian' as vegetarian,
tags->'name:ar' as ar_name,
tags->'townhall:type' as townhall,
tags->'designation' as designation,
tags->'name:es' as es_name,
tags->'capacity' as capacity,
tags->'name:tr' as tr_name,
tags->'contact:facebook' as contact_facebook,
tags->'reservation' as reservation,
tags->'instagram' as instagram,
tags->'takeaway' as takeaway,
tags->'url' as url,
tags->'level' as level,
tags->'toilets' as toilets,
tags->'cuisine_1' as cuisine_1,
tags->'cuisine_2' as cuisine_2,
tags->'brand' as brand,
tags->'contact:email' as contact_email,
tags->'brand:wikidata' as wikidata,
tags->'brand:wikipedia' as wikipedia,
tags->'drive_in' as drive_in,
tags->'wheelchair' as wheelchair,
tags->'microbrewery' as microbrewery,
tags->'opening_hours:covid19' as opening_hours_covid19,
tags->'diet:vegan' as diet_vegan,
tags->'image' as image,
tags->'diet:meat' as meat,
tags->'ref:vatin' as vatin,
tags->'phone_1' as phone_1,
tags->'payment:cash' as cash,
tags->'payment:visa' as visa,
tags->'payment:mastercard' as mastercard,
tags->'payment:debit_cards' as debit_cards,
tags->'payment:credit_cards' as credit_cards,
tags->'sym' as sym,
tags->'start_date' as start_date,
tags->'air_conditioning' as air_conditioning,
tags->'int_name' as int_name,
tags->'second_hand' as second_hand,
tags->'currency:AZN' as currency_AZN,
tags->'old_name' as old_name,
tags->'name:signed' as signed,
tags->'internet_access:ssid' as ssid,
tags->'stars' as stars,
tags->'bar' as bar,
tags->'payment:maestro' as maestro,
tags->'addr:village' as village,
tags->'contact:youtube' as youtube,
tags->'rooms' as rooms,
tags->'fax' as fax,
tags->'addr:place' as place,
tags->'building:levels' as building_levels,
tags->'rooms:lux' as lux,
tags->'rooms:delux' as delux,
tags->'rooms:business' as business,
tags->'fuel:cng' as cng,
tags->'fuel:octane_91' as octane_91,
tags->'fuel:octane_92' as octane_92,
tags->'fuel:octane_95' as octane_95,
tags->'fuel:octane_76' as octane_76,
tags->'fuel:lpg' as lpg,
tags->'fuel:diesel' as diesel,
tags->'fuel:gas' as gas,
tags->'fuel:metan' as metan,
tags->'fuel:methane' as methane,
tags->'fuel:methane_gas' as methane_gas,
tags->'self_service' as self_service,
tags->'payment:coins' as coins,
tags->'fuel:biogas' as biogas,
tags->'fuel:biodiesel' as biodiesel,
name as restaurantname,
shop as shop,
osm_id as osmid
from 
public.planet_osm_point 
WHERE amenity='fuel' and name != ''");
$Gas= [];
while($row = pg_fetch_row($GasDatas)) {
	$Gas[] = array(
	"phone"=>$row[0],
	"en_name"=>trim($row[1],'"'),
	"hy_name"=>trim($row[2],'"'),
	"ru_name"=>trim($row[3],'"'),
	"opening_hours"=>$row[4],
	"cuisine"=>$row[5],
	"website"=>$row[6],
	"city"=>$row[7],
	"street"=>$row[8],
	"internet_access"=>$row[9],
	"outdoor_seating"=>$row[10],
	"internet_access_fee"=>$row[11],
	"description"=>$row[12],
	"smoking"=>$row[13],
	"delivery"=>$row[14],
	"email"=>$row[15],
	"ja_cuisine"=>$row[16],
	"az_name"=>$row[17],
	"postcode"=>$row[18],
	"facebook"=>$row[19],
	"country"=>$row[20],
	"district"=>$row[21],
	"contact_phone"=>$row[22],
	"instagram"=>$row[23],
	"operator"=>$row[24],
	"vegetarian"=>$row[25],
	"ar_name"=>$row[26],
	"townhall"=>$row[27],
	"designation"=>$row[28],
	"es_name"=>$row[29],
	"capacity"=>$row[30],
	"tr_name"=>$row[31],
	"contact_facebook"=>$row[32],
	"reservation"=>$row[33],
	"instagram"=>$row[34],
	"takeaway"=>$row[35],
	"url"=>$row[36],
	"level"=>$row[37],
	"toilets"=>$row[38],
	"cuisine_1"=>$row[39],
	"cuisine_2"=>$row[40],
	"brand"=>$row[41],
	"contact_email"=>$row[42],
	"wikidata"=>$row[43],
	"wikipedia"=>$row[44],
	"drive_in"=>$row[45],
	"wheelchair"=>$row[46],
	"microbrewery"=>$row[47],
	"opening_hours_covid19"=>$row[48],
	"diet_vegan"=>$row[49],
	"image"=>$row[50],
	"diet_meat"=>$row[51],
	"vatin"=>$row[52],
	"phone_1"=>$row[53],
	"cash"=>$row[54],
	"visa"=>$row[55],
	"mastercard"=>$row[56],
	"debit_cards"=>$row[57],
	"credit_cards"=>$row[58],
	"sym"=>$row[59],
	"start_date"=>$row[60],
	"air_conditioning"=>$row[61],
	"int_name"=>$row[62],
	"second_hand"=>$row[63],
	"currency_AZN"=>$row[64],
	"old_name"=>$row[65],
	"signed"=>$row[66],
	"ssid"=>$row[67],
	"stars"=>$row[68],
	"bar"=>$row[69],
	"maestro"=>$row[70],
	"village"=>$row[71],
	"youtube"=>$row[72],
	"rooms"=>$row[73],
	"fax"=>$row[74],
	"place"=>$row[75],
	"building_levels"=>$row[76],
	"lux"=>$row[77],
	"delux"=>$row[78],
	"business"=>$row[79],
	"cng"=>$row[80],
	"octane_91"=>$row[81],
	"octane_92"=>$row[82],
	"octane_95"=>$row[83],
	"octane_76"=>$row[84],
	"lpg"=>$row[85],
	"diesel"=>$row[86],
	"gas"=>$row[87],
	"metan"=>$row[88],
	"methane"=>$row[89],
	"methane_gas"=>$row[90],
	"self_service"=>$row[91],
	"coins"=>$row[92],
	"biogas"=>$row[93],
	"biodiesel"=>$row[94],
	"restaurantname"=>trim($row[95],'"'),
	"shop"=>trim($row[96],'"'),
	"osmid"=>$row[97]
	) ; 
	
}

 /* echo "<pre>";
print_r($Gas);die; */


?>

<body>
  <!-- Map Display Section-->
  <section>
    <div class="map-screen">
	 <div id="map"></div>
    </div>
  </section>
  <div class="right-panel" style="display: none;" data-simplebar>
      <div class="right-side-panal">
        <div class="right-panal-heading">
          <div class="rightlogo">
            <a href="/" class="Akwabalogo">
              Akwaba
            </a>
          </div>
          <div class="closepanal closerightpanel">
            <i class="fa fa-times" aria-hidden="true"></i>
          </div>
        </div>

        <div class="right-panal-body">
          <ul class="details-one">
            <li class="details-list">
              <div class="detail-list-image">
                <img src="assets/img/icons/ic_interesting_places.svg">
              </div>
              <div class="detail-list-name">
                <p class="detail-list-btn interstingplace">Interesting places</p>
              </div>
            </li>

           <!-- <li class="details-list">
              <div class="detail-list-image">
                <img src="assets/img/icons/ic_coronavirus.svg">
              </div>
              <div class="detail-list-name">
                <p class="detail-list-btn">Coronavirus</p>
              </div>
            </li>-->

          </ul>

          <ul class="details-one">
            <li class="details-list">
              <div class="detail-list-image">
                <img src="assets/img/icons/ic_android.svg">
              </div>
              <div class="detail-list-name">
                <button class="detail-list-btn">Android</button>
              </div>
            </li>



          </ul>

          <ul class="details-one">
            <li class="details-list py4">
              <div class="detail-list-image">
                <img src="assets/img/icons/ic_company.svg">
              </div>
              <div class="detail-list-name">
                <button class="detail-list-btn">Add company</button>
              </div>
            </li>
            <!--<li class="details-list pl-76">
              <div class="detail-list-name">
                <p class="detail-list-btn">Business Account</p>
              </div>
            </li>-->
            <li class="details-list pl-76">
              <div class="detail-list-name">
                <p class="detail-list-btn">Advertising</p>
              </div>
            </li>
            <!--<li class="details-list pl-76">
              <div class="detail-list-name">
                <p class="detail-list-btn">2GIS API</p>
              </div>
            </li>
            <li class="details-list pl-76">
              <div class="detail-list-name">
                <p class="detail-list-btn">2GIS data</p>
              </div>
            </li>-->



          </ul>

          <ul class="details-one">
            <li class="details-list py4">
              <div class="detail-list-image">
                <img src="assets/img/icons/ic_feedback.svg">
              </div>
              <div class="detail-list-name">
                <p class="detail-list-btn"><a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal3" data-whatever="@mdo">Feedback</a></p>
              </div>
            </li>
            <li class="details-list pl-76">
              <div class="detail-list-name">
                <p class="detail-list-btn">License Agreement</p>
              </div>
            </li>
            <li class="details-list pl-76">
              <div class="detail-list-name">
                <p class="detail-list-btn">Privacy policy</p>
              </div>
            </li>
          </ul>

          <ul class="details-one">
            <li class="details-list py4">
              <div class="detail-list-image">
                <img src="assets/img/icons/ic_print.svg">
              </div>
              <div class="detail-list-name">
                <p class="detail-list-btn">Print</p>
              </div>
            </li>
          </ul>

          <ul class="details-one">
            <li class="details-list py4">
			<div class="detail-list-image">
                <img src="assets/img/icons/ic_signout.svg">
              </div>
              <div class="detail-list-name">
                <p class="detail-list-btn"><a href="logout.php">Sign out</a></p>
              </div>
            </li>
          </ul>

        </div>
      </div>

    </div>
  <!-- My Placed Sidebar -->
  <div class="left-panel left-scroll left_after_login" id="style-2" style="display:none;">
      <div class="closeiconleftpanel" id="closeBtn">
       <a href="javascript:void(0);"><img src="assets/img/icons/left-cross.png"></a>
      </div>
	  <div class="closeiconleftpanel closeleftpanel2 closeleftpanel">
        <img src="assets/img/icons/left-arrow.png">
      </div>
      <div class="scrollbar left-scroll-2" data-simplebar>
        <div class="img-top img_top_user">
          <div class="input-group  search-bar">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Search in Akwaba Maps">
          </div>

          <div class="d-lg-flex d-block d-md-flex img_top_username">

            <div class="lh-1">
              <span class="Username">Darshan Modi</span>
              <span class="Useremail">darshan.modi@sapphiresolutions.net</span>
            </div>
            <div class="usericon">
              <a class="" href="#">
                <div>
                  <p class="username">DM</p>
                </div>
              </a>
            </div>
          </div>

          <div class="signout-user">
            <div class="signout-btns">
              <div class="editprofile-btns">
                <a href="#" data-toggle="modal" data-target="#editModalCenter">
                  <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M1 19c0-5.6324 4.5314-9 9-9v2c-3.25305 0-6.45281 2.2338-6.93702 6H9v2H1v-1ZM13.2336 12.7664l1.4693-1.4693C13.2766 10.4503 11.6341 10 10 10v2c1.1205 0 2.2346.265 3.2336.7664ZM19 9.5l4.5 4.5-7.4196 7.2481L13.8246 22H11v-2.8246l.7519-2.2558L19 9.5Zm0 3 1.5 1.5-5.5 5.5-1.5.5H13v-.5l.5-1.5 5.5-5.5Z"
                      fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M15 7c0 2.76142-2.2386 5-5 5-2.76142 0-5-2.23858-5-5s2.23858-5 5-5c2.7614 0 5 2.23858 5 5Zm-5 3c1.6569 0 3-1.34315 3-3s-1.3431-3-3-3C8.34315 4 7 5.34315 7 7s1.34315 3 3 3Z"
                      fill="currentColor"></path>
                  </svg>
                </a>
              </div>

              <div class="editprofile-btns">
                <a href="#">
                  <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="m18.2929 7.29187 4.707 4.70703-4.707 4.707-1.414-1.414 2.292-2.293H8.58594v-2H19.1709l-2.292-2.29303 1.414-1.414Z"
                      fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M17.8602 3.89615C16.2135 2.70326 14.1889 2 12 2 6.47715 2 2 6.47715 2 12c0 5.5228 4.47715 10 10 10 2.1894 0 4.2145-.7036 5.8615-1.8971l-1.4369-1.4368C15.1574 19.5089 13.636 20 12 20c-4.41828 0-8-3.5817-8-8 0-4.41828 3.58172-8 8-8 1.6355 0 3.1563.49076 4.4233 1.33306l1.4369-1.43691Z"
                      fill="currentColor"></path>
                  </svg>
                </a>
              </div>
            </div>

          </div>

        </div>



        <div class="info-card">
          <div class="tabmaindiv userdetails-tab" data-simplebar>
            <div class="tab-details">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist" id="myTab">
                <li class="nav-item"><a href="#tab1" class="nav-link" role="tab" data-toggle="tab">My places</a>
                </li>
                <li class="nav-item "><a href="#tab2" class="nav-link" role="tab" data-toggle="tab">Favorites</a></li>
                <li class="nav-item "><a href="#tab3" class="nav-link active" role="tab" data-toggle="tab">Achievements</a>
                </li>
                <li class="nav-item "><a href="#tab4" class="nav-link" role="tab" data-toggle="tab">Reviews</a></li>
                <li class="nav-item "><a href="#tab5" class="nav-link" role="tab" data-toggle="tab">Photos</a></li>
                <li class="nav-item "><a href="#tab6" class="nav-link" role="tab" data-toggle="tab">Corrections</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <!-- My places -->
                <div role="tabpanel" class="tab-pane " id="tab1">
                  <div class="places-details">
                    <div class="my-places">
                      <figure class="places-figure">
                        <div class="places-figure-image">
                          <svg width="220" height="160" viewBox="0 0 220 160" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect width="7.071" height="7.258" rx="3.536"
                              transform="matrix(1 .00302 -.00303 1 110.373 53.29)" fill="#19663A"></rect>
                            <ellipse rx="4.057" ry="4.051" transform="rotate(3.199 -423.515 2549.35) skewX(-.01)"
                              fill="#C4C4C4"></ellipse>
                            <ellipse rx="4.057" ry="4.051" transform="rotate(3.199 -423.515 2549.35) skewX(-.01)"
                              fill="url(#a)"></ellipse>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                              d="m112.694 58.945-.578.809c9.392 1.734 15.371 4.841 22.479 8.536 5.064 2.632 10.701 5.562 18.555 8.506C174.028 84.622 191.516 85 191.516 85c-11.227-9.134-18.316-16.768-25.479-24.481-8.161-8.788-16.417-17.679-30.997-29.01-9.73 9.767-14.065 15.837-22.346 27.435Zm47.963 4.847c-10.541-4.274-22.006-7.668-33.288-10.199l8.85-9.518c8.753 5.93 16.839 12.526 24.438 19.717Z"
                              fill="url(#b)"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                              d="m112.694 58.945-.578.809c9.392 1.734 15.371 4.841 22.479 8.536 5.064 2.632 10.701 5.562 18.555 8.506C174.028 84.622 191.516 85 191.516 85c-11.227-9.134-18.316-16.768-25.479-24.481-8.161-8.788-16.417-17.679-30.997-29.01-9.73 9.767-14.065 15.837-22.346 27.435Zm47.963 4.847c-10.541-4.274-22.006-7.668-33.288-10.199l8.85-9.518c8.753 5.93 16.839 12.526 24.438 19.717Z"
                              fill="url(#c)"></path>
                            <path
                              d="m115.027 53.842 6.66 2.726c-25.305 29.835-62.77 73.836-69.226 81.418-.579.68-1.525.877-2.339.508l-2.576-1.17c-1.212-.551-1.574-2.087-.71-3.098 8.225-9.614 44.279-51.797 68.191-80.385Z"
                              fill="#19AA1E"></path>
                            <path
                              d="m115.027 53.842 6.66 2.726c-25.305 29.835-62.77 73.836-69.226 81.418-.579.68-1.525.877-2.339.508l-2.576-1.17c-1.212-.551-1.574-2.087-.71-3.098 8.225-9.614 44.279-51.797 68.191-80.385Z"
                              fill="url(#d)"></path>
                            <path
                              d="M157.72 74.204c18.48 6.385 38.674 3.925 38.674 3.925-28.063-15.598-37.882-38.982-59.754-49.856-.809-.402-1.787-.18-2.372.508-9.009 10.593-14.777 15.186-23.305 26.051 3.611-1.522 8.444.894 13.35 3.01 11.932 5.149 14.926 9.978 33.407 16.362Z"
                              fill="url(#e)"></path>
                            <ellipse rx="3.416" ry="2.509" transform="rotate(31.491 -217.41 155.775) skewX(-.083)"
                              fill="#C4C4C4"></ellipse>
                            <ellipse rx="3.416" ry="2.509" transform="rotate(31.491 -217.41 155.775) skewX(-.083)"
                              fill="url(#f)"></ellipse>
                            <ellipse rx="3.416" ry="2.509" transform="rotate(31.491 -217.41 155.775) skewX(-.083)"
                              fill="url(#g)"></ellipse>
                            <path
                              d="M97.907 121.9c-6.298-13.651 2.021-33.185 16.877-36.074 1.127-.22 3.016.018 3.475.597 1.005 1.267-1.374 1.432-3.48 1.315-3.262-.182-8.056-1.986-12.281-4.772-7.4-4.878-13.056-12.767-5.692-20.223 4.939-4.486 28.789 8.128 32.493 12.306 5.562 6.275.002 28.818-11.153 48.713-7.293 13.007-25.044 15.56-37.533 9.762-5.2-2.453-9.06-4.644-13.914-12.449"
                              stroke="#000" stroke-linecap="round"></path>
                            <path
                              d="M105.036 62.593c-2.14-14.14-2.14-23.54 3.189-41.38.818-2.737 3.424-4.534 6.277-4.396 3.386.165 6.036 2.973 6.022 6.364-.079 18.443.277 29.685 1.679 46.828M95.646 63.31c-5.447-12.121-6.688-26.49-7.777-41a6.45 6.45 0 0 0-7.418-5.891c-2.39.368-4.4 2.03-5.005 4.37-3.497 13.536-3.148 31.294-.732 42.458 1.302 6.014 3.204 10.115 5.428 10.61M77.787 82.89c-3.576 1.441 1.856 11.013 7.575 19.47 3.262 4.825-.853 11.564-6.59 10.541a5.803 5.803 0 0 1-2.015-.746c-6.038-3.698-12.313-10.222-17.018-26.896-1.648-5.84-2.125-12.711 1.879-17.268.128-.147.27-.295.42-.445 3.74-3.728 9.906-1.818 12.678 2.68"
                              stroke="#000"></path>
                            <path
                              d="M56.124 80.805c-6.044 1.35-7.106 6.767-5.411 13.226 1.636 6.236 6.577 16.142 14.203 22.459 3.865 3.202 8.765 3.518 12.216-.122M51.222 44.71c.085-.571.908-.569.99.002l.33 2.31a1.5 1.5 0 0 0 1.264 1.272l2.302.343c.57.084.568.908-.003.989l-2.304.328a1.5 1.5 0 0 0-1.272 1.264l-.344 2.309c-.085.57-.908.567-.99-.003l-.33-2.31a1.5 1.5 0 0 0-1.264-1.272l-2.302-.343c-.57-.084-.568-.908.002-.99l2.305-.328a1.5 1.5 0 0 0 1.272-1.263l.344-2.309ZM24.9 103.302c.085-.57.908-.568.99.003l.33 2.309a1.5 1.5 0 0 0 1.264 1.271l2.3.342c.57.085.568.908-.003.99l-2.302.328a1.499 1.499 0 0 0-1.272 1.263l-.344 2.307c-.085.57-.908.568-.99-.003l-.33-2.309a1.5 1.5 0 0 0-1.264-1.271l-2.3-.342c-.571-.085-.569-.908.002-.99l2.303-.328a1.499 1.499 0 0 0 1.272-1.263l.344-2.307ZM144.18 113.645c.085-.57.908-.568.99.003l.33 2.309a1.499 1.499 0 0 0 1.264 1.271l2.3.342c.571.085.568.909-.003.99l-2.302.328a1.5 1.5 0 0 0-1.272 1.264l-.344 2.307c-.085.57-.908.567-.99-.003l-.33-2.309a1.5 1.5 0 0 0-1.264-1.272l-2.3-.342c-.571-.084-.568-.908.003-.989l2.302-.328a1.5 1.5 0 0 0 1.272-1.264l.344-2.307Z"
                              stroke="#000"></path>
                            <defs>
                              <linearGradient id="a" x1="-6.932" y1="-7.508" x2="-.532" y2="-10.615"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#195441"></stop>
                                <stop offset="1" stop-color="#19AA1E"></stop>
                              </linearGradient>
                              <linearGradient id="b" x1="264.57" y1="73.996" x2="225.981" y2="-37.105"
                                gradientUnits="userSpaceOnUse">
                                <stop offset=".098" stop-color="#23CC29"></stop>
                                <stop offset=".571" stop-color="#19AA1E"></stop>
                              </linearGradient>
                              <linearGradient id="c" x1="112.359" y1="55.413" x2="192.92" y2="59.922"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#195441"></stop>
                                <stop offset=".013" stop-color="#195640"></stop>
                                <stop offset=".302" stop-color="#197A31"></stop>
                                <stop offset=".571" stop-color="#199427"></stop>
                                <stop offset=".812" stop-color="#19A420"></stop>
                                <stop offset="1" stop-color="#19AA1E"></stop>
                              </linearGradient>
                              <linearGradient id="d" x1="60" y1="130.901" x2="43.911" y2="44.81"
                                gradientUnits="userSpaceOnUse">
                                <stop offset=".098" stop-color="#23CC29"></stop>
                                <stop offset="1" stop-color="#195F3D"></stop>
                              </linearGradient>
                              <linearGradient id="e" x1="202.047" y1="78.934" x2="202.422" y2="47.962"
                                gradientUnits="userSpaceOnUse">
                                <stop offset=".098" stop-color="#23CC29"></stop>
                                <stop offset="1" stop-color="#19AA1E"></stop>
                              </linearGradient>
                              <linearGradient id="f" x1="-9.266" y1="6.261" x2="-9.233" y2="-.999"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#19AA1E"></stop>
                                <stop offset="1" stop-color="#195441"></stop>
                              </linearGradient>
                              <linearGradient id="g" x1="12.957" y1="3.512" x2="7.973" y2="-6.767"
                                gradientUnits="userSpaceOnUse">
                                <stop offset=".098" stop-color="#23CC29"></stop>
                                <stop offset=".571" stop-color="#19AA1E"></stop>
                              </linearGradient>
                            </defs>
                          </svg>
                        </div>

                        <figcaption>
                          <p class="places-figure-caption1">
                            Places you have visited will appear here soon
                          </p>
                          <p class="places-figure-caption2">
                            Recommend them to your friends right in 2GIS: add reviews, photos or just check in
                          </p>
                        </figcaption>

                      </figure>

                    </div>
                  </div>

                </div>
                 <!-- My places -->

                <!-- Favorites -->
                <div role="tabpanel" class="tab-pane " id="tab2">
                  <div class="Favorites-details">
                    <div class="Favorites-one">
                      <div class="details-one">
                        <div class="menu-list">
                          <div class="menu-list-image">
                            <img src="assets/img/icons/route.png">
                          </div>
                          <p class="Favoritesname">Building</p>
                        </div>

                        <div class="menu-list1">
                          <div class="menu-list1_1">
                            <a class="">
                              <span class="">Add</span>
                            </a>
                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="Favorites-one">
                      <div class="details-one">
                        <div class="menu-list">
                          <div class="menu-list-image">
                            <img src="assets/img/icons/route.png">
                          </div>
                          <p class="Favoritesname">Work</p>
                        </div>

                        <div class="menu-list1">
                          <div class="menu-list1_1">
                            <a class="">
                              <span class="">Add</span>
                            </a>
                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="Favorites-one">
                      <div class="details-one">
                        <div class="menu-list">
                          <div class="menu-list-image">
                            <img src="assets/img/icons/route.png">
                          </div>
                          <a href="#">
                            <p class="Favoritesname">Create collection</p>
                          </a>
                        </div>
                      </div>

                    </div>

                  </div>
                </div>
                <!-- Favorites -->

                <!-- Achievements -->
                <div role="tabpanel" class="tab-pane active" id="tab3">
                  <div class="places-details">
                      <div class="places-image">
                        <div class="upper-slider">
                          <div class="slider-nav">
                          <div class="slider-heading">
                            <span>Achievements</span>
                          </div>
                            <div class="slider-arrow">
                              <div class="left-arrow">
                                <i class="fa fa-angle-left"></i>
                              </div>
                              <div class="right-arrow">
                                <i class="fa fa-angle-right"></i>
                              </div>
                            </div>
                          </div>

                          <div class="slider-content">
                          
                          </div>
                        </div>
                      </div>

                   
                  </div>
                </div>
                <!-- Achievements -->

                <!-- Reviews -->
                <div role="tabpanel" class="tab-pane" id="tab4">
                  <div class="places-details">
                    <div class="my-places">
                      <figure class="places-figure">
                        <div class="places-figure-image">
                          <svg width="220" height="160" viewBox="0 0 220 160" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="m92.65 127.815-8.374-4.587a.988.988 0 0 1-.39-1.237l8.375 4.587a.994.994 0 0 0 .39 1.237"
                              fill="#0D5810"></path>
                            <path
                              d="m92.26 126.578-8.373-4.587c.018-.05.039-.099.063-.146l8.374 4.587a1.442 1.442 0 0 0-.063.146"
                              fill="#0E5C10"></path>
                            <path d="m92.323 126.433-8.374-4.588 6.562-13.156 8.374 4.588-6.562 13.156Z" fill="url(#a)">
                            </path>
                            <path
                              d="M136.976 54.049c25.414-3.597 45.986 8.899 45.951 27.913-.035 19.014-20.664 37.341-46.078 40.937-11.113 1.573-21.303.067-29.247-3.716l-14.055 8.576c-.12.075-.252.124-.391.146-.696.098-1.232-.674-.833-1.473l6.562-13.156c-5.05-4.815-8-11.083-7.987-18.29.036-19.014 20.668-37.341 46.078-40.937Z"
                              fill="#19AA1E"></path>
                            <path
                              d="M136.976 54.049c25.414-3.597 45.986 8.899 45.951 27.913-.035 19.014-20.664 37.341-46.078 40.937-11.113 1.573-21.303.067-29.247-3.716l-14.055 8.576c-.12.075-.252.124-.391.146-.696.098-1.232-.674-.833-1.473l6.562-13.156c-5.05-4.815-8-11.083-7.987-18.29.036-19.014 20.668-37.341 46.078-40.937Z"
                              fill="url(#b)"></path>
                            <path
                              d="M90.9 94.987c-.014 7.206 2.936 13.474 7.985 18.289l-8.374-4.587-.022-.021.118-.237c-5.049-4.815-7.973-11.03-7.96-18.238.437-18.772 20.3-36.838 46.521-40.618 2.427-.35 7.062-.558 12.935-.514 4.281.377 8.531 1.261 12.562 2.77 4.711 1.776 9.046 4.486 13.449 6.899-8.182-4.482-19.12-6.382-31.137-4.68-25.41 3.595-46.043 21.922-46.078 40.937Z"
                              fill="url(#c)"></path>
                            <path
                              d="M60.82 120.575c-16.27 8.292-50.355 3.054-48.045-39.528.658-12.126-5.16-23.357-10.438-29.677-2.591-3.103-1.976-9.555 4.677-10.335 6.652-.78 12.673 6.85 14.289 14.648 1.616 7.8 3.33 16.219 14.102 14.528 6.326-.992 17.447-7.13 30.08-4.638 5.513 1.088 11.798 6.323 5.766 14.464-6.033 8.14-27.34 14.132-30.876 7.055-2.959-5.922 8.392-10.189 12.285-11.125 8.515-2.047 8.588-5.29 8.588-5.29"
                              stroke="#000" stroke-miterlimit="10"></path>
                            <path
                              d="M76.093 81.716c1.67 5.76-3.27 11.477-13.698 15.678-10.445 4.207-17.519.594-18.055-4.809"
                              stroke="#000" stroke-miterlimit="10"></path>
                            <path
                              d="M76.89 90.572c1.678 5.547.099 10.929-10.109 15.31-6.263 2.688-13.255 3.438-17.512-2.44"
                              stroke="#000" stroke-miterlimit="10"></path>
                            <path
                              d="M78.082 101.99c.166 3.546-.243 9.419-11.048 13.226-4.562 1.608-13.003 1.942-14.784-4.252M209.714 85.827c.632-31.83-32.952-46.304-36.742-39.241"
                              stroke="#000" stroke-miterlimit="10"></path>
                            <path d="M213.409 84.087c.336-26.892-23.461-45.2-30.348-39.653" stroke="#000"
                              stroke-miterlimit="10"></path>
                            <path
                              d="M204.611 87.406c.506-4.773-2.212-34.67-32.543-39.351-7.446-1.15-8.396 5.194-6.355 7.667 7.366 8.926 29.72 11.61 23.312 40.599-2.389 10.811-9.645 16.243-17.229 15.09-11.221-1.705-19.262 2.201-22.219 5.049-4.739 4.565-3.08 13.783 6.952 10.619 17.046-5.375 22.47 6.627 44.386-5.253 13.563-7.352 24.469-30.082 14.449-55.055-7.895-19.678-14.424-19.538-15.688-18.57"
                              stroke="#000" stroke-miterlimit="10"></path>
                            <path
                              d="M55.092 70.047c7.382-28.904 47.69-44.663 78.55-26.792 24.914 14.428 13.58 43.736-.648 51.594-18.934 10.456-30.913-11.179-13.29-24.532 14.59-11.054 56.873-11.426 48.2 27.72"
                              stroke="#000" stroke-miterlimit="10"></path>
                            <defs>
                              <linearGradient id="a" x1="76.741" y1="138.066" x2="130.417" y2="64.109"
                                gradientUnits="userSpaceOnUse">
                                <stop offset=".163" stop-color="#195441"></stop>
                                <stop offset=".175" stop-color="#195640"></stop>
                                <stop offset=".416" stop-color="#197A31"></stop>
                                <stop offset=".641" stop-color="#199427"></stop>
                                <stop offset=".843" stop-color="#19A420"></stop>
                                <stop offset="1" stop-color="#19AA1E"></stop>
                              </linearGradient>
                              <linearGradient id="b" x1="198.833" y1="90.672" x2="135.23" y2="-19.851"
                                gradientUnits="userSpaceOnUse">
                                <stop offset=".098" stop-color="#23CC29"></stop>
                                <stop offset=".571" stop-color="#19AA1E"></stop>
                              </linearGradient>
                              <linearGradient id="c" x1="82.647" y1="81.165" x2="168.114" y2="81.165"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#195441"></stop>
                                <stop offset=".013" stop-color="#195640"></stop>
                                <stop offset=".302" stop-color="#197A31"></stop>
                                <stop offset=".571" stop-color="#199427"></stop>
                                <stop offset=".812" stop-color="#19A420"></stop>
                                <stop offset="1" stop-color="#19AA1E"></stop>
                              </linearGradient>
                            </defs>
                          </svg>
                        </div>

                        <figcaption>
                          <p class="places-figure-caption1">
                            Here will be your reviews
                          </p>
                          <p class="places-figure-caption2">
                            Rate and write reviews about any companies and places you've visited
                          </p>
                        </figcaption>

                      </figure>

                    </div>
                  </div>
                </div>
                <!-- Reviews -->

                <!-- Photos -->
                <div role="tabpanel" class="tab-pane" id="tab5">
                  <div class="places-details">
                    <div class="my-places">
                      <figure class="places-figure">
                        <div class="places-figure-image">
                          <svg width="220" height="160" viewBox="0 0 220 160" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M77.052 101.817V57.021a7 7 0 0 1 6.156-6.949l62.235-7.555c7.745-.94 14.567 5.105 14.567 12.906v41.895a8.999 8.999 0 0 1-7.915 8.934l-61.597 7.478c-7.149.867-13.446-4.712-13.446-11.913Z"
                              fill="#19AA1E"></path>
                            <path d="m150.739 52.216-.071 54.779-55.762 6.801.072-54.778 55.761-6.802Z" fill="#19AA1E">
                            </path>
                            <path d="m150.739 52.216-.071 54.779-55.762 6.801.072-54.778 55.761-6.802Z" fill="url(#a)">
                            </path>
                            <path
                              d="M76.8 55.61c2.5 2.801 10.64 4.327 18.177 3.407v54.771c-7.538.919-15.677-.447-18.177-3.248-.653-.732-.718-1.671-.735-2.6V53.01c.017.93.082 1.868.735 2.6Z"
                              fill="url(#b)"></path>
                            <path
                              d="M141.686 42.072c7.542-.92 15.677.604 18.178 3.407 2.5 2.8-1.582 5.817-9.124 6.737l-55.762 6.802c-7.538.919-15.678-.607-18.177-3.407-2.501-2.803 1.586-5.818 9.124-6.738l55.761-6.801Z"
                              fill="#169523"></path>
                            <path
                              d="M141.686 42.072c7.542-.92 15.677.604 18.178 3.407 2.5 2.8-1.582 5.817-9.124 6.737l-55.762 6.802c-7.538.919-15.678-.607-18.177-3.407-2.501-2.803 1.586-5.818 9.124-6.738l55.761-6.801Z"
                              fill="#169523"></path>
                            <path
                              d="M160.599 47.166v-.003 54.933c-.006 2.236-3.918 4.048-9.936 4.895l.074-54.775h.002c6.034-.736 9.854-2.814 9.86-5.05Z"
                              fill="url(#c)"></path>
                            <path
                              d="M94.2 45.804c5.216-.636 10.846.419 12.574 2.355 1.729 1.938-1.096 4.025-6.312 4.66-5.212.636-10.841-.419-12.57-2.357-1.729-1.936 1.097-4.023 6.309-4.658Z"
                              fill="#169523"></path>
                            <path
                              d="M107.282 49.304v-.006 3.668c.022 1.555-2.627 3.004-6.82 3.515-5.212.636-10.841-.419-12.57-2.357-.34-.381-.504-.768-.508-1.15v-3.661c.004.38.167.768.507 1.15 1.73 1.937 7.36 2.992 12.571 2.356 4.193-.51 6.842-1.96 6.82-3.515Z"
                              fill="url(#d)"></path>
                            <path
                              d="M118.492 54.364c3.845 0 6.962-1.2 6.962-2.68l.067-.14a1.844 1.844 0 0 1-.151.15c-.803.712-2.403 1.296-4.537 1.556-.7.085-1.404.13-2.109.138-3.035.033-5.91-.63-7.121-1.71a1.706 1.706 0 0 1-.138-.138c.02.048.042.096.064.145 0 1.48 3.118 2.679 6.963 2.679Z"
                              fill="url(#e)"></path>
                            <path
                              d="M116.299 44.477c3.651-.445 7.59.293 8.799 1.648 1.211 1.356-.766 2.816-4.417 3.261-3.647.445-7.586-.293-8.796-1.65-1.21-1.354.767-2.814 4.414-3.26Z"
                              fill="#169523"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M125.95 48.091c-.071 1.541-3.382 2.782-7.455 2.782-4.118 0-7.456-1.268-7.456-2.832 0-.318.244-.552.381-.818.052-.116.091-.221.118-.425-.012.103-.013.204.001.305-.039.036-.043.041 0 .001.188 1.37 3.23 2.46 6.956 2.46 3.847 0 6.965-1.161 6.965-2.595 0-.032-.001-.064-.004-.097.01.06.019.108.032.158.039.16.14.28.234.412.125.202.198.412.227.645l.001.004Z"
                              fill="url(#f)"></path>
                            <path
                              d="M125.22 49.31c-.437.34-1.059.648-1.838.898-1.724.554-3.584.712-5.386.666-1.858-.048-3.612-.357-4.897-.858-.835-.325-1.777-.869-2.046-1.696a.996.996 0 0 1-.023-.218l-.004 2.507c.022.549.394.942.812 1.25.779.575 2.039 1.017 3.552 1.275 1.034.177 2.162.264 3.325.252 1.379-.014 2.771-.156 4.107-.508 1.088-.287 1.936-.677 2.471-1.118.339-.281.655-.67.655-1.13l.003-2.507c-.013.443-.275.832-.731 1.187Z"
                              fill="url(#g)"></path>
                            <path
                              d="M136.896 63.502c12.321-1.72 22.285 7.595 22.261 20.802-.025 13.207-10.03 25.306-22.35 27.026-12.318 1.72-22.282-7.592-22.257-20.798.025-13.207 10.029-25.31 22.346-27.03Z"
                              fill="#19AA1E"></path>
                            <path
                              d="M106.022 70.285c-6.076 10.983-4.524 24.8 6.719 32.022 4.207 2.703 8.789 4.908 13.164 7.323a27.793 27.793 0 0 1-1.404-.83c-11.247-7.233-12.769-21.063-6.703-32.028 6.067-10.965 18.601-17.039 30.718-11.378.155.072.315.15.487.238-4.059-2.24-8.057-4.742-12.26-6.708-12.106-5.663-24.645.379-30.721 11.361Z"
                              fill="url(#h)"></path>
                            <ellipse rx="19.135" ry="22.044" transform="rotate(29.968 -95.005 301.015) skewX(-.064)"
                              fill="#000"></ellipse>
                            <g filter="url(#i)">
                              <path
                                d="m155.256 97.865.042-.073c6.465-11.184 3.798-24.81-5.958-30.435-9.755-5.625-22.904-1.119-29.369 10.065-6.466 11.183-3.798 24.809 5.957 30.434 6.64 3.829 14.852 2.964 21.459-1.505-6.325 4.259-14.072 5.116-20.303 1.523-9.273-5.347-11.679-18.523-5.374-29.429 6.304-10.906 18.932-15.412 28.205-10.066 9.273 5.347 11.679 18.523 5.374 29.429l-.033.057Z"
                                fill="url(#j)"></path>
                            </g>
                            <g filter="url(#k)">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M127.945 106.191c8.741 5.04 20.518 1.009 26.306-9.003 5.787-10.011 3.394-22.213-5.347-27.253-8.74-5.04-20.518-1.01-26.305 9.002-5.788 10.012-3.394 22.214 5.346 27.254Zm24.518-10.022a24.047 24.047 0 0 1-1.261 1.96c-5.893 8.326-15.888 11.671-23.226 7.439a10.826 10.826 0 0 1-.314-.187c-.105-.057-.21-.116-.314-.176-8.239-4.75-10.353-16.499-4.722-26.24 5.632-9.742 16.876-13.788 25.116-9.037.11.064.219.129.328.195.1.054.2.11.3.168 7.332 4.227 9.431 14.53 5.173 23.784a24.298 24.298 0 0 1-1.08 2.094Z"
                                fill="url(#l)"></path>
                            </g>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M127.084 107.874c9.272 5.346 21.9.84 28.205-10.066s3.899-24.082-5.374-29.429c-9.273-5.346-21.901-.84-28.205 10.066-6.305 10.906-3.899 24.082 5.374 29.429Zm1.06-1.569c8.63 4.977 20.319.895 26.106-9.117 5.788-10.011 3.484-22.162-5.147-27.138-8.631-4.977-20.319-.895-26.107 9.117-5.788 10.011-3.483 22.162 5.148 27.138Z"
                              fill="#19AA1E"></path>
                            <path
                              d="M147.85 81.99c1.659-.304 2.707-2.154 2.34-4.133-.366-1.978-2.008-3.336-3.667-3.033-1.66.303-2.707 2.153-2.341 4.132.367 1.978 2.009 3.337 3.668 3.033ZM141.905 83.276c.602-.11.97-.846.823-1.644-.148-.798-.756-1.356-1.359-1.245-.602.11-.971.846-.823 1.644.148.797.756 1.355 1.359 1.245Z"
                              fill="#fff"></path>
                            <path
                              d="M68.618 128.552c-25.193 6.969-57.61-9.951-37.68-58.376C45.719 34.269 79.15 35.454 88.09 37.152c11.948 2.268 15.473 8.078 11.755 11.77-4.447 4.419-11.677-.376-22.88 1.296-8.25 1.23-21.255 3.942-27.942 19.924 8.665-21.31 50.885-27.091 45.568 11.32"
                              stroke="#000" stroke-miterlimit="10"></path>
                            <path
                              d="M55.315 93.216c2.146-2.886 6.448-9.455 16.579-11.03 17.73-2.758 26.336 25.85 4.056 34.268-11.485 4.339-13.357-10.154.365-13.888"
                              stroke="#000" stroke-miterlimit="10"></path>
                            <path
                              d="M52.97 79.257C61.165 62.67 98.78 57.88 90.422 93.563M116.488 125.995c6.207 11.315 40.439 23.485 62.076 13.632 32.066-14.602 12.251-51.118-3.751-66.432-10.84-10.375-12.918-15.72-16.911-12.953-3.275 2.27-2.067 10.664.046 16.198 3.42 8.955 16.402 19.726 3.341 30.933-8.756 7.512-25.334 6.476-36.758.289-9.761-5.285-19.971-12.73-22.948-6.86-1.077 2.122.472 7.505 5.152 12.057 8.265 8.039 23.771 16.921 45.701 17.629"
                              stroke="#000" stroke-miterlimit="10"></path>
                            <path
                              d="M151.195 136.355c-9.41-.349-32.357-6.897-40.07-17.977M121.743 35.593l17.686-12.52-4.542 16.502 28.881-19.998-13.652 26.238 39.273-17.948-19.282 23.27"
                              stroke="#000" stroke-miterlimit="10"></path>
                            <defs>
                              <linearGradient id="a" x1="143.559" y1="84.599" x2="113.651" y2="73.417"
                                gradientUnits="userSpaceOnUse">
                                <stop offset=".098" stop-color="#23CC29"></stop>
                                <stop offset="1" stop-color="#19AA1E"></stop>
                              </linearGradient>
                              <linearGradient id="b" x1="76.065" y1="83.541" x2="94.977" y2="83.541"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#195441"></stop>
                                <stop offset=".013" stop-color="#195640"></stop>
                                <stop offset=".302" stop-color="#197A31"></stop>
                                <stop offset=".571" stop-color="#199427"></stop>
                                <stop offset=".812" stop-color="#19A420"></stop>
                                <stop offset="1" stop-color="#19AA1E"></stop>
                              </linearGradient>
                              <linearGradient id="c" x1="151.805" y1="77.077" x2="164.198" y2="77.077"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#23CC29"></stop>
                                <stop offset=".396" stop-color="#19AA1E"></stop>
                                <stop offset=".551" stop-color="#199427"></stop>
                                <stop offset=".749" stop-color="#197A31"></stop>
                                <stop offset="1" stop-color="#195640"></stop>
                              </linearGradient>
                              <linearGradient id="d" x1="87.384" y1="52.982" x2="107.282" y2="52.982"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#195441"></stop>
                                <stop offset=".251" stop-color="#19AA1E"></stop>
                                <stop offset=".477" stop-color="#E6F6E6" stop-opacity=".5"></stop>
                                <stop offset=".506" stop-color="#C5EAC6" stop-opacity=".58"></stop>
                                <stop offset=".623" stop-color="#49BC4D" stop-opacity=".882"></stop>
                                <stop offset=".679" stop-color="#19AA1E"></stop>
                                <stop offset=".998" stop-color="#195541"></stop>
                                <stop offset="1" stop-color="#195441"></stop>
                              </linearGradient>
                              <linearGradient id="e" x1="111.465" y1="52.952" x2="125.521" y2="52.952"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#194B41"></stop>
                                <stop offset=".173" stop-color="#19513F"></stop>
                                <stop offset=".412" stop-color="#196338"></stop>
                                <stop offset=".69" stop-color="#19812D"></stop>
                                <stop offset=".996" stop-color="#19A91E"></stop>
                                <stop offset="1" stop-color="#19AA1E"></stop>
                              </linearGradient>
                              <linearGradient id="g" x1="111.026" y1="50.745" x2="125.951" y2="50.745"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#195441"></stop>
                                <stop offset=".707" stop-color="#199029"></stop>
                                <stop offset="1" stop-color="#19AA1E"></stop>
                              </linearGradient>
                              <linearGradient id="h" x1="100.922" y1="101.791" x2="144.902" y2="63.149"
                                gradientUnits="userSpaceOnUse">
                                <stop offset=".09" stop-color="#195441"></stop>
                                <stop offset=".102" stop-color="#195640"></stop>
                                <stop offset=".365" stop-color="#197A31"></stop>
                                <stop offset=".61" stop-color="#199427"></stop>
                                <stop offset=".829" stop-color="#19A420"></stop>
                                <stop offset="1" stop-color="#19AA1E"></stop>
                              </linearGradient>
                              <linearGradient id="j" x1="137.634" y1="64.935" x2="137.634" y2="110.278"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#16961A"></stop>
                                <stop offset="1" stop-color="#0D5810"></stop>
                              </linearGradient>
                              <linearGradient id="l" x1="138.425" y1="67.763" x2="138.425" y2="108.363"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#0D5810"></stop>
                                <stop offset="1" stop-color="#16961A"></stop>
                              </linearGradient>
                              <filter id="i" x="116.441" y="64.935" width="42.386" height="45.343"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                <feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                                <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                  result="hardAlpha"></feColorMatrix>
                                <feOffset dx=".5" dy=".25"></feOffset>
                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"></feComposite>
                                <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"></feColorMatrix>
                                <feBlend in2="shape" result="effect1_innerShadow_886_9171"></feBlend>
                                <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                  result="hardAlpha"></feColorMatrix>
                                <feOffset dx="-.5" dy="-.25"></feOffset>
                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"></feComposite>
                                <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"></feColorMatrix>
                                <feBlend in2="effect1_innerShadow_886_9171" result="effect2_innerShadow_886_9171">
                                </feBlend>
                              </filter>
                              <filter id="k" x="119.441" y="67.763" width="37.967" height="40.599"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                <feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                                <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                  result="hardAlpha"></feColorMatrix>
                                <feOffset dx=".5" dy=".25"></feOffset>
                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"></feComposite>
                                <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"></feColorMatrix>
                                <feBlend in2="shape" result="effect1_innerShadow_886_9171"></feBlend>
                                <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                  result="hardAlpha"></feColorMatrix>
                                <feOffset dx="-.5" dy="-.25"></feOffset>
                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"></feComposite>
                                <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"></feColorMatrix>
                                <feBlend in2="effect1_innerShadow_886_9171" result="effect2_innerShadow_886_9171">
                                </feBlend>
                              </filter>
                              <radialGradient id="f" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                                gradientTransform="matrix(5.46821 0 0 5.42279 118.494 48.836)">
                                <stop stop-color="#fff" stop-opacity=".5"></stop>
                                <stop offset=".053" stop-color="#E4F5E4" stop-opacity=".559"></stop>
                                <stop offset=".353" stop-color="#52BF56" stop-opacity=".876"></stop>
                                <stop offset=".494" stop-color="#19AA1E"></stop>
                                <stop offset=".642" stop-color="#199029"></stop>
                                <stop offset="1" stop-color="#195441"></stop>
                              </radialGradient>
                            </defs>
                          </svg>
                        </div>

                        <figcaption>
                          <p class="places-figure-caption1">
                            Here will be the photos you add
                          </p>
                          <p class="places-figure-caption2">
                            In 2GIS, you can upload a photo of any place or company. For example, a cafe, shop, or home
                          </p>
                        </figcaption>

                      </figure>

                    </div>
                  </div>
                </div>
                <!-- Photos -->

                <!-- Corrections -->
                <div role="tabpanel" class="tab-pane" id="tab6">
                  <div class="places-details">
                    <div class="my-places">
                      <figure class="places-figure">
                        <div class="places-figure-image">
                          <svg width="220" height="160" viewBox="0 0 220 160" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M104.29 75.092h17.378" stroke="#000" stroke-width=".82" stroke-linecap="round">
                            </path>
                            <path
                              d="m104.042 74.915 12.922-6.026M74.76 67.683l18.756-11.462a8 8 0 0 0 3.828-6.826V25.668c0-3.124-3.42-5.042-6.085-3.413L53.49 45.335a8 8 0 0 0-3.828 6.826v5.653M54.796 53.747l37.41-22.861M63.911 56.154l28.296-17.291"
                              stroke="#000" stroke-width=".82"></path>
                            <path
                              d="M25.789 150.476c12.434 9.3 28.347 3.517 36.984-6.465 6.076-7.021 5.53-15.379 13.107-23.972 4.46-5.057 14.608-11.946 6.427-16.476-1.676-.929-6.538-1.241-11.244 2.46M45.137 106.218c9.111-12.417 14.78-45.565 4.968-45.932-5.008-.187-6.257 3.101-7.147 9.874"
                              stroke="#000" stroke-width=".82" stroke-linecap="round"></path>
                            <path
                              d="M27.756 151.569c-13.216-7.931-16.164-25.031-13.589-37.169 1.862-8.778 4.956-14.034 13.097-26.543 6.543-10.054 7.343-19.718 12.414-19.48 7.449.35.87 17.46.87 17.46s-5.731 14.927-7.096 15.787M53.04 61.333c2.187-2.923 6.994-2.146 8.409.395 3.514 6.314 3.88 19.479 1.544 31.398-1.253 6.395-2.842 9.372-5.288 15.827"
                              stroke="#000" stroke-width=".82" stroke-linecap="round"></path>
                            <path
                              d="M62.67 64.766c.96-3.545 6.008-2.828 7.923.396 1.43 2.409 1.896 5.406 2.288 10.496 1.877 24.373-3.917 34.714-8.81 47.623"
                              stroke="#000" stroke-width=".82" stroke-linecap="round"></path>
                            <path
                              d="M111.388 135.585a2.71 2.71 0 0 1-2.708 2.714 2.71 2.71 0 0 1-2.708-2.714 2.71 2.71 0 0 1 2.708-2.714 2.71 2.71 0 0 1 2.708 2.714ZM215.574 49.122a2.71 2.71 0 0 1-2.708 2.714 2.711 2.711 0 0 1-2.709-2.714c0-1.5 1.213-2.714 2.709-2.714a2.711 2.711 0 0 1 2.708 2.714ZM19.02 63.914c0 1.5-1.214 2.714-2.71 2.714a2.711 2.711 0 0 1-2.708-2.714c0-1.5 1.214-2.714 2.709-2.714a2.711 2.711 0 0 1 2.708 2.714Z"
                              stroke="#000" stroke-width=".82"></path>
                            <path
                              d="M135.87 74.32c.702-5.955-1.021-11.624-4.258-14.74l-1.183-1.961-3.487-.413c-5.867-.795-11.579 5.378-12.622 14.228-1.085 9.217 3.452 16.433 9.597 17.16.199.023 4.226.432 4.226.432l.184-1.564c3.856-2.142 6.841-7.186 7.543-13.142Z"
                              fill="url(#a)"></path>
                            <path
                              d="M139.589 74.758c-.957 8.119-6.156 14.52-11.953 14.274-6.199-.261-10.682-7.943-9.596-17.16 1.085-9.216 7.211-15.474 13.281-14.116 5.671 1.312 9.228 8.85 8.268 17.002Z"
                              fill="url(#b)"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                              d="m135.891 68.918-7.233 10.145a1.306 1.306 0 0 1-1.063.545 1.463 1.463 0 0 1-1.125-.532l-4.697-5.631 2.091-1.724 3.521 4.223 6.22-8.724 2.286 1.698Z"
                              fill="#19AA1E"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                              d="m135.274 68.192-6.736 9.357c-.246.34-.641.54-1.07.54-.43-.001-.845-.202-1.124-.544l-4.106-5.02 2.109-1.701 2.937 3.592 5.711-7.932 2.279 1.708Z"
                              fill="#fff"></path>
                            <path
                              d="M167.507 45.199c-14.142-8.228-25.913-6.566-36.649.595-9.461 6.312-9.106 12.33-6.744 13.54 4.703 2.41 9.415-5.409 17.616-7.017 8.2-1.608 13.165 2.382 16.161 8.954 3.496 7.666 6.96 29.313-8.496 28.733-12.314-.463-17.302-6.998-22.996-4.873-5.105 1.906-3.348 13.271 19.312 23.112 24.108 10.469 29.818 2.754 33.758-.749 5.53-4.918 7.535-15.935 8.468-24.246 1.603-14.271-.226-39.38-11.312-49.207-6.08-5.39-11.13-7.957-23.153-9.312-7.286-.822-13.705-6.712-15.802-3.943-2.28 3.012 1.881 8.053 7.629 9.014"
                              stroke="#000" stroke-width=".82" stroke-miterlimit="10"></path>
                            <path
                              d="M169.713 38.862c-9.259-5.157-19.435-6.667-29.459-3.854-9.387 2.634-17.095 10.022-15.699 16.584"
                              stroke="#000" stroke-width=".82" stroke-miterlimit="10"></path>
                            <path
                              d="M170.22 34.371c-7.829-4.419-18.574-5.555-26.836-4.46-3.57.474-17.72 6.243-15.988 12.927"
                              stroke="#000" stroke-width=".82" stroke-miterlimit="10"></path>
                            <defs>
                              <linearGradient id="a" x1="114.289" y1="71.591" x2="135.887" y2="74.135"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#195441"></stop>
                                <stop offset=".09" stop-color="#195441"></stop>
                                <stop offset=".1" stop-color="#195640"></stop>
                                <stop offset=".36" stop-color="#197A31"></stop>
                                <stop offset=".61" stop-color="#199427"></stop>
                                <stop offset=".83" stop-color="#19A420"></stop>
                                <stop offset="1" stop-color="#19AA1E"></stop>
                              </linearGradient>
                              <linearGradient id="b" x1="118.006" y1="72.058" x2="139.604" y2="74.603"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#19AA1E"></stop>
                                <stop offset=".976" stop-color="#23CC29"></stop>
                                <stop offset="1" stop-color="#23CC29"></stop>
                              </linearGradient>
                            </defs>
                          </svg>
                        </div>

                        <figcaption>
                          <p class="places-figure-caption1">
                            Here will be the statuses of your clarifications
                          </p>
                          <p class="places-figure-caption2">
                            Did you see the inaccuracy? Submit new information about companies and places — we will
                            check and update
                          </p>
                        </figcaption>

                      </figure>

                    </div>
                  </div>
                </div>
                <!-- Corrections -->
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  
  
  <!-- Home Sidebar Section-->
  <section>
    <div class="left-panel left-scroll indexDiv" id="style-2">
	  <div class="closeiconleftpanel">
       <a href="./index.html"> <img src="assets/img/icons/left-cross.png"></a>
      </div>
      <div class="closeiconleftpanel closeleftpanel">
        <img src="assets/img/icons/left-arrow.png">
      </div>
	  <div class="scrollbar left-scroll-2" data-simplebar>
         <div class="img-top">
          <div class="input-group  search-bar">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Search in Akwaba Maps">
          </div>
          <div class="img-top-name">
            <h5>Azerbaijan</h5>
          </div>
        </div>
          <div class="info-card categories-icons-section">
            <h4 class="fs-18 left-panal-heading"></h4>
            <div class="row">
			<?php 
			if(count($categoryData) > 0){
			foreach($categoryData as $rows){ ?>
              <div class="col-md-3 text-center iconcol">
                <a href="javascript:void(0);" class="iconATag">
                  <div class="categories-icon icon-<?=$rows['id']?>" id="iconBtn" data-id="Yes" data-index="<?=$rows['id']?>">
                    <img src="../akwaba/uploads/categories/<?=$rows['image']?>" alt="<?=$rows['image']?>">
                  </div>
                  <p class="categories-name"><?=$rows['name']?></p>
                </a>
              </div>
			<?php }}else{ ?>  
			<span style="color: red;">Data is not found!</span>
			<?php } ?>  
            </div>
          </div>
         <div class="brend-image" id="advertisement_images">
		  <?php if(count($advertisementData) > 0){ 
        $i=0;
		  foreach($advertisementData as $Arows){
        $class = '';
        $style = 'none';
        if($i == 0){$class = 'active';$style = 'block';} 
		  ?>
            <img src="../akwaba/uploads/advertisement/<?=$Arows['image']?>" class="img-fluid <?=$class;?>" alt="" style="display:<?=$style?>">
		  <?php $i++;}} ?>	
          </div>
          <div class="info-card featured-places-section">
          <h4 class="fs-18 left-panal-heading mb-3">Featured Places</h4>
          <a href="javascript:void(0);" class="featuredBtn">
            <div class="featured-places-list">
              <div class=" single-list">
                <div class="icon-list">
                  <img src="assets/img/icons/featuredplaces.png">
                </div>
                <p>Featured Places</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
	
	<!--<div class="left-panel left-feature-panel extralarge morecategoryDiv" id="style-2" style="display: none;">
      <div class="closeiconleftpanel" id="closeBtn">
       <a href="javascript:void(0);"><img src="assets/img/icons/left-cross.png"></a>
      </div>
      <div class="closeiconleftpanel closeleftpanel2 closeleftpanel">
        <img src="assets/img/icons/left-arrow.png">
      </div>
	 
      <div class="scrollbar left-scroll-2">
         <div class="img-top">
          <div class="input-group  search-bar">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Search in Akwaba Maps">
          </div>
          <div class="img-top-name">
            <h5>Ivory Coast</h5>
          </div>
        </div>
          <div class="info-card categories-icons-section">
            <h4 class="fs-18 left-panal-heading">Categories</h4>
            <div class="row">
			<?php 
			if(count($morecategoryData) > 0){
			foreach($morecategoryData as $mrows){ ?>
              <div class="col-md-3 text-center iconcol">
                <a href="javascript:void(0);" class="iconATag">
                  <div class="categories-icon icon-<?=$mrows['id']?>" id="catBtn" data-id="Yes" data-index="<?=$mrows['id']?>">
                    <img src="../akwaba/uploads/categories/<?=$mrows['image']?>" alt="<?=$mrows['image']?>">
                  </div>
                  <p class="categories-name"><?=$mrows['display_name']?></p>
                </a>
              </div>
			<?php }}else{ ?>  
			<span style="color: red;">Data is not found!</span>
			<?php } ?>  
            
            </div>
          </div>
      </div>
	  <div class="extrapart extrapartfeature subcatSubsidebar" data-simplebar style="display: none;"></div>
      </div>-->
	  <div class="left-panel left-feature-panel extralarge morecategoryDiv" id="style-2" style="display: none;">
      <div class="closeiconleftpanel" id="closeBtn">
       <a href="javascript:void(0);"><img src="assets/img/icons/left-cross.png"></a>
      </div>
      <div class="closeiconleftpanel closeleftpanel2 closeleftpanel">
        <img src="assets/img/icons/left-arrow.png">
      </div>
      <div class="scrollbar featured-places" data-simplebar>
        <div class="img-top ">
          <div class="input-group  search-bar">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Search in Akwaba Maps">
          </div>
          <div class="img-top-name">
            <h4></h4>
            <p>Ivory Coast</p>
          </div>
        </div>
        <div class="info-card categories-icons-section" id="simple-bar" data-simplebar>
          <h4 class="fs-18 left-panal-heading"></h4>
          <div class="row">
		  <?php 
			if(count($morecategoryData) > 0){
			foreach($morecategoryData as $mrows){ ?>
            <div class="col-md-3 text-center iconcol col-6 ">
              <a href="javascript:void(0);" class="iconATag">
                <div class="categories-icon icon-<?=$mrows['id']?>" id="catBtn" data-id="Yes" data-index="<?=$mrows['id']?>">
                  <img src="../akwaba/uploads/categories/<?=$mrows['image']?>" alt="<?=$mrows['image']?>">
                </div>
                <p class="categories-name"><?=$mrows['display_name']?></p>
              </a>
            </div>
            <?php }}else{ ?>  
			<span style="color: red;">Data is not found!</span>
			<?php } ?>  
            <div class="col-md-3 text-center iconcol col-6 ">
              <a href="#" class="iconATag">
                <div class="categories-icon icon-8">
                  <img src="./assets/img/icons/icon-8.png" alt="">
                </div>
                <p class="categories-name">Favorite</p>
              </a>
            </div>
          </div>
        </div>
        
      </div>
      <div class="extrapart extrapartfeature subcatSubsidebar" style="display: none;" data-simplebar ></div>
    </div>
	
	
	<!-- More Category Sidebar Section-->
	<!--<div class="left-panel left-scroll morecategoryDiv" style="display: none;" id="style-2">
	  <div class="closeiconleftpanel" id="closeBtn">
       <a href="javascript:void(0);"><img src="assets/img/icons/left-cross.png"></a>
      </div>
      <div class="closeiconleftpanel closeleftpanel2 closeleftpanel">
        <img src="assets/img/icons/left-arrow.png">
      </div>
	 
      <div class="scrollbar left-scroll-2">
         <div class="img-top">
          <div class="input-group  search-bar">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Search in Akwaba Maps">
          </div>
          <div class="img-top-name">
            <h5>Ivory Coast</h5>
          </div>
        </div>
          <div class="info-card categories-icons-section">
            <h4 class="fs-18 left-panal-heading">Categories</h4>
            <div class="row">
			<?php 
			if(count($morecategoryData) > 0){
			foreach($morecategoryData as $mrows){ ?>
              <div class="col-md-3 text-center iconcol">
                <a href="javascript:void(0);" class="iconATag">
                  <div class="categories-icon icon-<?=$mrows['id']?>" id="catBtn" data-id="Yes" data-index="<?=$mrows['id']?>">
                    <img src="../akwaba/uploads/categories/<?=$mrows['image']?>" alt="<?=$mrows['image']?>">
                  </div>
                  <p class="categories-name"><?=$mrows['display_name']?></p>
                </a>
              </div>
			<?php }}else{ ?>  
			<span style="color: red;">Data is not found!</span>
			<?php } ?>  
            
            </div>
          </div>
      </div>
    </div>-->
	<!-- Featured Placed Sidebar Section-->
	<!-- <div class="left-panel featuredDiv" id="style-2"  style="display: none;">
      <div class="closeiconleftpanel" id="closeBtn">
       <a href="javascript:void(0);"><img src="assets/img/icons/left-cross.png"></a>
      </div>
      <div class="closeiconleftpanel closeleftpanel2 closeleftpanel">
        <img src="assets/img/icons/left-arrow.png">
      </div>
      <div class="scrollbar featured-places">
        <div class="img-top ">
          <div class="input-group  search-bar">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Search in Akwaba Maps">
          </div>
          <div class="img-top-name">
            <h4><?=$title?></h4>
            <p><?=$description?></p>
          </div>
        </div>
        <div class="info-card categories-icons-section" data-simplebar>
		<?php 
		if(count($featureData) > 0){
		foreach($featureData as $frows) { ?>
		   <div class="row">
            <div class="col-md-12">
             <a href="javascript:void(0);" class="getFuturedlist" title="featured-places" id="<?= $frows['id'] ?>"> <img src="../akwaba/uploads/featured/<?=$frows['image']?>" class="img-fluid" alt="<?=$frows['image']?>"></a>
            </div>
            <div class="col-md-12 border-bottom single-feature">

              <h4 class="feature-h4"><?= $frows['title'] ?> <span>10 Places</span></h4>

              <a class="btn p-0 toggle-btn" >
                <i class="fa fa-angle-down" aria-hidden="true"></i>
              </a>
            <div class="features-overflow"> 
              <p class="feature-p"><?= strip_tags($frows['description']) ; ?></p>
            </div>
            </div>
          </div>
			<?php }}else{ ?> 
			<span style="color: red;">Data is not found!</span>		
			<?php } ?>  
        </div>
      </div>
    </div>-->
	<div class="left-panel left-feature-panel extralarge featuredDiv" id="style-2" style="display: none;">
      <div class="closeiconleftpanel" id="featureCloseBtn">
       <a href="javascript:void(0);"><img src="assets/img/icons/left-cross.png"></a>
      </div>
      <div class="closeiconleftpanel closeleftpanel2 closeleftpanel">
        <img src="assets/img/icons/left-arrow.png">
      </div>
      <div class="scrollbar featured-places">
        <div class="img-top ">
          <div class="input-group  search-bar">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Search in Akwaba Maps">
          </div>
          <div class="img-top-name">
            <h4><?=$title?></h4>
            <p><?=$description?></p>
          </div>
        </div>
        <div class="info-card categories-icons-section" data-simplebar>
		<?php 
		if(count($featureData) > 0){
		foreach($featureData as $frows) { ?>
		   <div class="row">
            <div class="col-md-12">
             <a href="javascript:void(0);" class="getFuturedlist" title="featured-places" id="<?= $frows['id'] ?>"> <img src="../akwaba/uploads/featured/<?=$frows['image']?>" class="img-fluid" alt="<?=$frows['image']?>"></a>
            </div>
            <div class="col-md-12 border-bottom single-feature">

              <h4 class="feature-h4"><?= $frows['title'] ?> <span>10 Places</span></h4>

              <a class="btn p-0 toggle-btn" >
                <i class="fa fa-angle-down" aria-hidden="true"></i>
              </a>
            <div class="features-overflow"> 
              <p class="feature-p"><?= strip_tags($frows['description']) ; ?></p>
            </div>
            </div>
          </div>
			<?php }}else{ ?> 
			<span style="color: red;">Data is not found!</span>		
			<?php } ?>  
        </div>
      </div>
	  <div class="extrapart extrapartfeature featureSubsidebar" data-simplebar style="display: none;"></div>
      </div>
	<!-- Eat Out sidebar -->
	<div class="left-panel left-list-panel extralarge eatoutDiv"  id="style-2" style="display: none;">
       <div class="closeiconleftpanel" id="EatoutCloseBtn">
       <a href="javascript:void(0);"><img src="assets/img/icons/left-cross.png"></a>
      </div>
	  <div class="closeiconleftpanel closeleftpanel2 closeleftpanel">
        <img src="assets/img/icons/left-arrow.png">
      </div>
      <div class="scrollbar list-page">
        <div class="img-top ">
          <div class="input-group  search-bar">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Eat Out">
            <div class="cross-btn">
              <button type="button" class="cross-btn2" aria-label="Clear local search field">
                <img src="./assets/img/icons/cross-search.png" alt="">
              </button>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-6">
              <button class="No_Filters">
                <a href="#">
                  <span class="Filter-btn">
                    <img src="./assets/img/icons/filter-btn.png" alt="">
                  </span>
                  <span class="No_Filters_btn">Filters</span>
                </a>
              </button>
            </div>
            <div class="col-md-6">
              <div class="float-right">
                <div class="No_places">
                  <a href="#" class="No_places-list">Places:
                    <span class="No_places-number"><?= count(isset($restaurants)?$restaurants:"0")?></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="info-card categories-icons-sections">
          <div class="row m-0">
            <div class="filterpart"  data-simplebar>
                <div class="col-md-12 border-bottom">
                  <div class="cafesbar">
                    <a class="btn p-0 toggle-btn">
                      <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                    <ul>
                      <li class="side-list">Cafe</li>
                      <li class="side-list">Bars</li>
                      <li class="side-list">Restaurants</li>
                      <li class="morebtn side-list"><img src="./assets/img/icons/more.png" alt=""></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-12 border-bottom">
                  <div class="cafesbar">
                    <ul>
                      <li class="side-list">Wi-Fi</li>
                      <li class="side-list">Amenities</li>
                      <li class="side-list">Brunch</li>
                      <li class="side-list">payment</li>
                      <li class="side-list">Photo available</li>
                    </ul>
                    <div class="input">
                      <input type="text" class="cafesbar-input" value="" placeholder="Metro station">
                    </div>
                  </div>
                </div>
                <div class="col-md-12 border-bottom">
                  <div class="cafesbar">
                    <h6 class="list-heading">Opening hours</h6>
                    <ul>
                      <li class="side-list active">Open right now</li>
                      <li class="side-list">Open 24 hours</li>
                      <li class="side-list">At the specific time</li>
                    </ul>
                    <div class="input-group">
                      <div class="input">
                        <input type="text" class="cafesbar-input  w-101" value="" placeholder="06:00 pm">
                      </div>
                      <div class="input ml-2">
                        <input type="text" class="cafesbar-input w-64" value="" placeholder="Wed">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 border-bottom">
                  <div class="cafesbar">
                    <h6 class="list-heading">Cuisine</h6>
                    <ul>
                      <li class="side-list">Afgan</li>
                      <li class="side-list">African</li>
                      <li class="morebtn side-list"><img src="./assets/img/icons/more.png" alt=""></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-12 border-bottom">
                  <div class="cafesbar">
                    <h6 class="list-heading">Average bill from 8 to 550 AED</h6>
                    <div class="slidermaindiv">
                      <div id="slider-range"></div>
                      <div class="row slider-labels">
                        <div class="col-xs-6 caption"><span id="slider-range-value1"></span>
                        </div>
                        <div class="col-xs-6 text-right caption"><span id="slider-range-value2"></span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <form>
                            <input type="hidden" name="min-value" value="">
                            <input type="hidden" name="max-value" value="">
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="restaurantslistpart ">
                  <div class="restaurantslistmaindiv"  data-simplebar>
				  <?php foreach($restaurants as $res){ 
				  if(!empty($res['opening_hours'])){
					$arr = explode(" ",$res['opening_hours']);
					if(!empty($arr[0]) && !empty($arr[1])){
						$day = explode("-",$arr[0]);
						$week = $day[0]." To " .$day[1];
						$time = explode("-",$arr[1]);
					}else{
						$day = "";
						$time = explode("-",$arr[0]);
					}
				  }else{
					  $days = "";
					  $week = "";
					  $time = "";
				  }
				  ?>
                    <div class="singledivlist">
                      <div class="leftpart">
                        <a href="javascript:void(0);" class="getEatoutDetail" id="<?=$res['osmid']?>"><p class="title"><?=isset($res['en_name'])?$res['en_name']:"";?></p></a>
                        <p class="subtitle">Restaurants</p>
                        <p class="details">Average bill $ <?= rand(10,99)?> <?= str_replace(";",",",$res['cuisine'])?></p>
                        <div class="orderonlinebtn">
                          <a href="#">Order Online</a>
                        </div>
                        <div class="location">
                          <img src="assets/img/icons/location.png">
                          <p><?= $res['street']?></p>
                        </div>
						<div class="location">
                          <p><?= $week ?></p>
						  <?php if(!empty($time[0]) && !empty($time[1])) {?>
                          <p><?= date("g:i A", strtotime($time[0]))?> to <?= date("g:i A", strtotime($time[1]))?></p>
						  <?php } ?>
						</div>
                      </div>
                      <div class="rightpart">
                        <div class="restaurantsimg">
						 <?php if(empty($res['image'])){?>
                          <img src="assets/img/left-brand-image.png">
						 <?php }else{ ?> 
                          <img src="<?= $res['image'] ?>">
						 <?php } ?>
                        </div>
                        <div class="starboxmaindiv">
                          <div class="starbox">
                            <img src="assets/img/icons/cross-search.png">
                            <img src="assets/img/icons/cross-search.png">
                            <img src="assets/img/icons/cross-search.png">
                            <img src="assets/img/icons/cross-search.png">
                          </div>
                          <div class="ratting">
                            <p>4.0</p>
                          </div>
                        </div>
                        <p class="totalreviews"><?= rand(100,999)?> Reviews</p>
                      </div>
                    </div>
				  <?php } ?>
                  </div>

                  <div class="paginationmaindiv">
					<nav aria-label="...">
                  <ul class="pagination">
                    <li class="page-item disabled">
                      <span class="page-link"><img src="assets/img/icons/left-arrow.png"></span>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                      <span class="page-link">
                        2
                        <span class="sr-only">(current)</span>
                      </span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#"><img src="assets/img/icons/right-arrow.png"></a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
	 <!-- Eatout sub sidebar -->
	 <div class="extrapart eatoutSubsidebar" style="display: none;"></div>
	</div>
	 <!-- Groceries sidebar -->
	<div class="left-panel left-list-panel extralarge GroceriesDiv"  id="style-2" style="display: none;">
       <div class="closeiconleftpanel" id="GroceriesCloseBtn">
       <a href="javascript:void(0);"><img src="assets/img/icons/left-cross.png"></a>
      </div>
	  <div class="closeiconleftpanel closeleftpanel2 closeleftpanel">
        <img src="assets/img/icons/left-arrow.png">
      </div>
      <div class="scrollbar list-page">
        <div class="img-top ">
          <div class="input-group  search-bar">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Eat Out">
            <div class="cross-btn">
              <button type="button" class="cross-btn2" aria-label="Clear local search field">
                <img src="./assets/img/icons/cross-search.png" alt="">
              </button>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-6">
              <button class="No_Filters">
                <a href="#">
                  <span class="Filter-btn">
                    <img src="./assets/img/icons/filter-btn.png" alt="">
                  </span>
                  <span class="No_Filters_btn">Filters</span>
                </a>
              </button>
            </div>
            <div class="col-md-6">
              <div class="float-right">
                <div class="No_places">
                  <a href="#" class="No_places-list">Places:
                    <span class="No_places-number"><?= count(isset($Groceries)?$Groceries:"0")?></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="info-card categories-icons-sections">
          <div class="row m-0">
            <div class="filterpart"  data-simplebar>
                <div class="col-md-12 border-bottom">
                  <div class="cafesbar">
                    <a class="btn p-0 toggle-btn">
                      <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                    <ul>
                      <li class="side-list">Cafe</li>
                      <li class="side-list">Bars</li>
                      <li class="side-list">Restaurants</li>
                      <li class="morebtn side-list"><img src="./assets/img/icons/more.png" alt=""></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-12 border-bottom">
                  <div class="cafesbar">
                    <ul>
                      <li class="side-list">Wi-Fi</li>
                      <li class="side-list">Amenities</li>
                      <li class="side-list">Brunch</li>
                      <li class="side-list">payment</li>
                      <li class="side-list">Photo available</li>
                    </ul>
                    <div class="input">
                      <input type="text" class="cafesbar-input" value="" placeholder="Metro station">
                    </div>
                  </div>
                </div>
                <div class="col-md-12 border-bottom">
                  <div class="cafesbar">
                    <h6 class="list-heading">Opening hours</h6>
                    <ul>
                      <li class="side-list active">Open right now</li>
                      <li class="side-list">Open 24 hours</li>
                      <li class="side-list">At the specific time</li>
                    </ul>
                    <div class="input-group">
                      <div class="input">
                        <input type="text" class="cafesbar-input  w-101" value="" placeholder="06:00 pm">
                      </div>
                      <div class="input ml-2">
                        <input type="text" class="cafesbar-input w-64" value="" placeholder="Wed">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 border-bottom">
                  <div class="cafesbar">
                    <h6 class="list-heading">Cuisine</h6>
                    <ul>
                      <li class="side-list">Afgan</li>
                      <li class="side-list">African</li>
                      <li class="morebtn side-list"><img src="./assets/img/icons/more.png" alt=""></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-12 border-bottom">
                  <div class="cafesbar">
                    <h6 class="list-heading">Average bill from 8 to 550 AED</h6>
                    <div class="slidermaindiv">
                      <div id="slider-range"></div>
                      <div class="row slider-labels">
                        <div class="col-xs-6 caption"><span id="slider-range-value1"></span>
                        </div>
                        <div class="col-xs-6 text-right caption"><span id="slider-range-value2"></span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <form>
                            <input type="hidden" name="min-value" value="">
                            <input type="hidden" name="max-value" value="">
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="restaurantslistpart ">
                  <div class="restaurantslistmaindiv"  data-simplebar>
				  <?php foreach($Groceries as $res){ 
				  if(!empty($res['opening_hours'])){
					$arr = explode(" ",$res['opening_hours']);
					if(!empty($arr[0]) && !empty($arr[1])){
						$day = explode("-",$arr[0]);
						$week = $day[0]." To " .$day[1];
						$time = explode("-",$arr[1]);
					}else{
						$day = "";
						$time = explode("-",$arr[0]);
					}
				  }else{
					  $days = "";
					  $week = "";
					  $time = "";
				  }
				  ?>
                    <div class="singledivlist">
                      <div class="leftpart">
                        <a href="javascript:void(0);" class="getGroceryDetail" id="<?=$res['osmid']?>"><p class="title"><?=isset($res['en_name'])?$res['en_name']:"";?></p></a>
                        <p class="subtitle"><?=isset($res['shop'])?$res['shop']:"";?></p>
                        <p class="details"><?= $res['description'] ?></p>
                        <div class="orderonlinebtn">
                          <a href="#">PROMOTIONS</a>
                        </div>
                        <div class="location">
                          <img src="assets/img/icons/location.png">
                          <p><?= $res['street']?></p>
                        </div>
						<div class="location">
                          <p><?= $week ?></p>
						  <?php if(!empty($time[0]) && !empty($time[1])) { ?>
                          <p><?= date("g:i A", strtotime($time[0]))?> to <?= date("g:i A", strtotime($time[1]))?></p>
						  <?php } ?>
						</div>
                      </div>
                      <div class="rightpart">
                        <div class="restaurantsimg">
						 <?php if(empty($res['image'])){?>
                          <img src="assets/img/left-brand-image.png">
						 <?php }else{ ?> 
                          <img src="<?= $res['image'] ?>">
						 <?php } ?>
                        </div>
                        <div class="starboxmaindiv">
                          <div class="starbox">
                            <img src="assets/img/icons/cross-search.png">
                            <img src="assets/img/icons/cross-search.png">
                            <img src="assets/img/icons/cross-search.png">
                            <img src="assets/img/icons/cross-search.png">
                          </div>
                          <div class="ratting">
                            <p>4.0</p>
                          </div>
                        </div>
                        <p class="totalreviews"><?= rand(100,999)?> Reviews</p>
                      </div>
                    </div>
				  <?php } ?>
                  </div>

                  <div class="paginationmaindiv">
					<nav aria-label="...">
                  <ul class="pagination">
                    <li class="page-item disabled">
                      <span class="page-link"><img src="assets/img/icons/left-arrow.png"></span>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                      <span class="page-link">
                        2
                        <span class="sr-only">(current)</span>
                      </span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#"><img src="assets/img/icons/right-arrow.png"></a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
	 <!-- Groceries sub sidebar -->
	 <div class="extrapart grocerySubsidebar" style="display: none;"></div> 
	</div>
	
	
	<!-- Malls sidebar -->
	<div class="left-panel left-list-panel extralarge MallsDiv"  id="style-2" style="display: none;">
       <div class="closeiconleftpanel" id="MallsCloseBtn">
       <a href="javascript:void(0);"><img src="assets/img/icons/left-cross.png"></a>
      </div>
	  <div class="closeiconleftpanel closeleftpanel2 closeleftpanel">
        <img src="assets/img/icons/left-arrow.png">
      </div>
      <div class="scrollbar list-page">
        <div class="img-top ">
          <div class="input-group  search-bar">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Eat Out">
            <div class="cross-btn">
              <button type="button" class="cross-btn2" aria-label="Clear local search field">
                <img src="./assets/img/icons/cross-search.png" alt="">
              </button>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-6">
              <button class="No_Filters">
                <a href="#">
                  <span class="Filter-btn">
                    <img src="./assets/img/icons/filter-btn.png" alt="">
                  </span>
                  <span class="No_Filters_btn">Filters</span>
                </a>
              </button>
            </div>
            <div class="col-md-6">
              <div class="float-right">
                <div class="No_places">
                  <a href="#" class="No_places-list">Places:
                    <span class="No_places-number"><?= count(isset($Malls)?$Malls:"0")?></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="info-card categories-icons-sections">
          <div class="row m-0">
            <div class="filterpart"  data-simplebar>
                <div class="col-md-12 border-bottom">
                  <div class="cafesbar">
                    <a class="btn p-0 toggle-btn">
                      <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                    <ul>
                      <li class="side-list">Cafe</li>
                      <li class="side-list">Bars</li>
                      <li class="side-list">Restaurants</li>
                      <li class="morebtn side-list"><img src="./assets/img/icons/more.png" alt=""></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-12 border-bottom">
                  <div class="cafesbar">
                    <ul>
                      <li class="side-list">Wi-Fi</li>
                      <li class="side-list">Amenities</li>
                      <li class="side-list">Brunch</li>
                      <li class="side-list">payment</li>
                      <li class="side-list">Photo available</li>
                    </ul>
                    <div class="input">
                      <input type="text" class="cafesbar-input" value="" placeholder="Metro station">
                    </div>
                  </div>
                </div>
                <div class="col-md-12 border-bottom">
                  <div class="cafesbar">
                    <h6 class="list-heading">Opening hours</h6>
                    <ul>
                      <li class="side-list active">Open right now</li>
                      <li class="side-list">Open 24 hours</li>
                      <li class="side-list">At the specific time</li>
                    </ul>
                    <div class="input-group">
                      <div class="input">
                        <input type="text" class="cafesbar-input  w-101" value="" placeholder="06:00 pm">
                      </div>
                      <div class="input ml-2">
                        <input type="text" class="cafesbar-input w-64" value="" placeholder="Wed">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 border-bottom">
                  <div class="cafesbar">
                    <h6 class="list-heading">Cuisine</h6>
                    <ul>
                      <li class="side-list">Afgan</li>
                      <li class="side-list">African</li>
                      <li class="morebtn side-list"><img src="./assets/img/icons/more.png" alt=""></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-12 border-bottom">
                  <div class="cafesbar">
                    <h6 class="list-heading">Average bill from 8 to 550 AED</h6>
                    <div class="slidermaindiv">
                      <div id="slider-range"></div>
                      <div class="row slider-labels">
                        <div class="col-xs-6 caption"><span id="slider-range-value1"></span>
                        </div>
                        <div class="col-xs-6 text-right caption"><span id="slider-range-value2"></span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <form>
                            <input type="hidden" name="min-value" value="">
                            <input type="hidden" name="max-value" value="">
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="restaurantslistpart ">
                  <div class="restaurantslistmaindiv"  data-simplebar>
				  <?php foreach($Malls as $res){ 
				  if(!empty($res['opening_hours'])){
					$opening_hours = $res['opening_hours'];
				  }else{
					  $opening_hours = "";
				  }
				  $rate = mt_rand(0,5);
				  $rating = number_format((float)$rate, 1, '.', '');
				  ?>
                    <div class="singledivlist">
                      <div class="leftpart">
                        <a href="javascript:void(0);" class="getMallsDetail" id="<?=$res['osmid']?>"><p class="title"><?=isset($res['restaurantname'])?$res['restaurantname']:"";?></p></a>
                        <p class="subtitle"><?=isset($res['shop'])?$res['shop']:"";?></p>
                        <p class="details"><?= isset($res['description'])?$res['description']:""; ?></p>
                        <div class="orderonlinebtn">
                          <a href="#">LOCATION</a>
                        </div>
                        <div class="location">
                          <img src="assets/img/icons/location.png">
                          <p><?= $res['street']?></p>
                        </div>
						<div class="location">
                          <p><?= $opening_hours ?></p>
						</div>
                      </div>
                      <div class="rightpart">
                        <div class="restaurantsimg">
						 <?php if(empty($res['image'])){?>
                          <img src="assets/img/left-brand-image.png">
						 <?php }else{ ?> 
                          <img src="<?= $res['image'] ?>">
						 <?php } ?>
                        </div>
                        <div class="starboxmaindiv">
                          <div class="starbox">
                            <img src="assets/img/icons/cross-search.png">
                            <img src="assets/img/icons/cross-search.png">
                            <img src="assets/img/icons/cross-search.png">
                            <img src="assets/img/icons/cross-search.png">
                          </div>
                          <div class="ratting">
                            <p><?= $rating ?></p>
                          </div>
                        </div>
                        <p class="totalreviews"><?= rand(100,999)?> Reviews</p>
                      </div>
                    </div>
				  <?php } ?>
                  </div>
                  <div class="paginationmaindiv">
					<nav aria-label="...">
                  <ul class="pagination">
                    <li class="page-item disabled">
                      <span class="page-link"><img src="assets/img/icons/left-arrow.png"></span>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                      <span class="page-link">
                        2
                        <span class="sr-only">(current)</span>
                      </span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#"><img src="assets/img/icons/right-arrow.png"></a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
	 <!-- Groceries sub sidebar -->
	 <div class="extrapart mallSubsidebar" style="display: none;"></div> 
	</div>
	
	
	<!-- Hotels sidebar -->
	<div class="left-panel left-list-panel extralarge HotelsDiv"  id="style-2" style="display: none;">
       <div class="closeiconleftpanel" id="HotelsCloseBtn">
       <a href="javascript:void(0);"><img src="assets/img/icons/left-cross.png"></a>
      </div>
	  <div class="closeiconleftpanel closeleftpanel2 closeleftpanel">
        <img src="assets/img/icons/left-arrow.png">
      </div>
      <div class="scrollbar list-page">
        <div class="img-top ">
          <div class="input-group  search-bar">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Eat Out">
            <div class="cross-btn">
              <button type="button" class="cross-btn2" aria-label="Clear local search field">
                <img src="./assets/img/icons/cross-search.png" alt="">
              </button>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-6">
              <button class="No_Filters">
                <a href="#">
                  <span class="Filter-btn">
                    <img src="./assets/img/icons/filter-btn.png" alt="">
                  </span>
                  <span class="No_Filters_btn">Filters</span>
                </a>
              </button>
            </div>
            <div class="col-md-6">
              <div class="float-right">
                <div class="No_places">
                  <a href="#" class="No_places-list">Places:
                    <span class="No_places-number"><?= count(isset($Hotels)?$Hotels:"0")?></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="info-card categories-icons-sections">
          <div class="row m-0">
            <div class="filterpart"  data-simplebar>
                <div class="col-md-12 border-bottom">
                  <div class="cafesbar">
                    <a class="btn p-0 toggle-btn">
                      <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                    <ul>
                      <li class="side-list">Cafe</li>
                      <li class="side-list">Bars</li>
                      <li class="side-list">Restaurants</li>
                      <li class="morebtn side-list"><img src="./assets/img/icons/more.png" alt=""></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-12 border-bottom">
                  <div class="cafesbar">
                    <ul>
                      <li class="side-list">Wi-Fi</li>
                      <li class="side-list">Amenities</li>
                      <li class="side-list">Brunch</li>
                      <li class="side-list">payment</li>
                      <li class="side-list">Photo available</li>
                    </ul>
                    <div class="input">
                      <input type="text" class="cafesbar-input" value="" placeholder="Metro station">
                    </div>
                  </div>
                </div>
                <div class="col-md-12 border-bottom">
                  <div class="cafesbar">
                    <h6 class="list-heading">Opening hours</h6>
                    <ul>
                      <li class="side-list active">Open right now</li>
                      <li class="side-list">Open 24 hours</li>
                      <li class="side-list">At the specific time</li>
                    </ul>
                    <div class="input-group">
                      <div class="input">
                        <input type="text" class="cafesbar-input  w-101" value="" placeholder="06:00 pm">
                      </div>
                      <div class="input ml-2">
                        <input type="text" class="cafesbar-input w-64" value="" placeholder="Wed">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 border-bottom">
                  <div class="cafesbar">
                    <h6 class="list-heading">Cuisine</h6>
                    <ul>
                      <li class="side-list">Afgan</li>
                      <li class="side-list">African</li>
                      <li class="morebtn side-list"><img src="./assets/img/icons/more.png" alt=""></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-12 border-bottom">
                  <div class="cafesbar">
                    <h6 class="list-heading">Average bill from 8 to 550 AED</h6>
                    <div class="slidermaindiv">
                      <div id="slider-range"></div>
                      <div class="row slider-labels">
                        <div class="col-xs-6 caption"><span id="slider-range-value1"></span>
                        </div>
                        <div class="col-xs-6 text-right caption"><span id="slider-range-value2"></span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <form>
                            <input type="hidden" name="min-value" value="">
                            <input type="hidden" name="max-value" value="">
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="restaurantslistpart ">
                  <div class="restaurantslistmaindiv"  data-simplebar>
				  <?php foreach($Hotels as $res){ 
				  if(!empty($res['opening_hours'])){
					  $opening_hours = $res['opening_hours'];
				  }else{
					  $opening_hours = "";
				  }
				  $rate = mt_rand(0,5);
				  $rating = number_format((float)$rate, 1, '.', '');
				  ?>
                    <div class="singledivlist">
                      <div class="leftpart">
                        <a href="javascript:void(0);" class="getHotelsDetail" id="<?=$res['osmid']?>"><p class="title"><?=isset($res['restaurantname'])?$res['restaurantname']:"";?></p></a>
                        <p class="subtitle">Hotels</p>
                        <p class="details"><?= isset($res['description'])?$res['description']:""; ?></p>
                        <div class="orderonlinebtn">
                          <a href="#">LOCATION</a>
                        </div>
                        <div class="location">
                          <img src="assets/img/icons/location.png">
                          <p><?= $res['street']?></p>
                        </div>
						<div class="location">
                          <p><?= $opening_hours ?></p>
						</div>
                      </div>
                      <div class="rightpart">
                        <div class="restaurantsimg">
						 <?php if(empty($res['image'])){?>
                          <img src="assets/img/left-brand-image.png">
						 <?php }else{ ?> 
                          <img src="<?= $res['image'] ?>">
						 <?php } ?>
                        </div>
                        <div class="starboxmaindiv">
                          <div class="starbox">
                            <img src="assets/img/icons/cross-search.png">
                            <img src="assets/img/icons/cross-search.png">
                            <img src="assets/img/icons/cross-search.png">
                            <img src="assets/img/icons/cross-search.png">
                          </div>
                          <div class="ratting">
                            <p><?= isset($res['stars'])?$res['stars']:$rating ?></p>
                          </div>
                        </div>
                        <p class="totalreviews"><?= rand(100,999)?> Reviews</p>
                      </div>
                    </div>
				  <?php } ?>
                  </div>
                  <div class="paginationmaindiv">
					<nav aria-label="...">
                  <ul class="pagination">
                    <li class="page-item disabled">
                      <span class="page-link"><img src="assets/img/icons/left-arrow.png"></span>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                      <span class="page-link">
                        2
                        <span class="sr-only">(current)</span>
                      </span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#"><img src="assets/img/icons/right-arrow.png"></a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
	 <!-- Hotel sub sidebar -->
	 <div class="extrapart hotelSubsidebar" style="display: none;"></div> 
	</div>
	
	<!-- Gas sidebar -->
	<div class="left-panel left-list-panel extralarge GasDiv"  id="style-2" style="display: none;">
       <div class="closeiconleftpanel" id="GasCloseBtn">
       <a href="javascript:void(0);"><img src="assets/img/icons/left-cross.png"></a>
      </div>
	  <div class="closeiconleftpanel closeleftpanel2 closeleftpanel">
        <img src="assets/img/icons/left-arrow.png">
      </div>
      <div class="scrollbar list-page">
        <div class="img-top ">
          <div class="input-group  search-bar">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Gas">
            <div class="cross-btn">
              <button type="button" class="cross-btn2" aria-label="Clear local search field">
                <img src="./assets/img/icons/cross-search.png" alt="">
              </button>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-6">
              <button class="No_Filters">
                <a href="#">
                  <span class="Filter-btn">
                    <img src="./assets/img/icons/filter-btn.png" alt="">
                  </span>
                  <span class="No_Filters_btn">Filters</span>
                </a>
              </button>
            </div>
            <div class="col-md-6">
              <div class="float-right">
                <div class="No_places">
                  <a href="#" class="No_places-list">Places:
                    <span class="No_places-number"><?= count(isset($Gas)?$Gas:"0")?></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="info-card categories-icons-sections">
          <div class="row m-0">
            <div class="filterpart"  data-simplebar>
                <div class="col-md-12 border-bottom">
                  <div class="cafesbar">
                    <a class="btn p-0 toggle-btn">
                      <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                    <ul>
                      <li class="side-list">Cafe</li>
                      <li class="side-list">Bars</li>
                      <li class="side-list">Restaurants</li>
                      <li class="morebtn side-list"><img src="./assets/img/icons/more.png" alt=""></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-12 border-bottom">
                  <div class="cafesbar">
                    <ul>
                      <li class="side-list">Wi-Fi</li>
                      <li class="side-list">Amenities</li>
                      <li class="side-list">Brunch</li>
                      <li class="side-list">payment</li>
                      <li class="side-list">Photo available</li>
                    </ul>
                    <div class="input">
                      <input type="text" class="cafesbar-input" value="" placeholder="Metro station">
                    </div>
                  </div>
                </div>
                <div class="col-md-12 border-bottom">
                  <div class="cafesbar">
                    <h6 class="list-heading">Opening hours</h6>
                    <ul>
                      <li class="side-list active">Open right now</li>
                      <li class="side-list">Open 24 hours</li>
                      <li class="side-list">At the specific time</li>
                    </ul>
                    <div class="input-group">
                      <div class="input">
                        <input type="text" class="cafesbar-input  w-101" value="" placeholder="06:00 pm">
                      </div>
                      <div class="input ml-2">
                        <input type="text" class="cafesbar-input w-64" value="" placeholder="Wed">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 border-bottom">
                  <div class="cafesbar">
                    <h6 class="list-heading">Cuisine</h6>
                    <ul>
                      <li class="side-list">Afgan</li>
                      <li class="side-list">African</li>
                      <li class="morebtn side-list"><img src="./assets/img/icons/more.png" alt=""></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-12 border-bottom">
                  <div class="cafesbar">
                    <h6 class="list-heading">Average bill from 8 to 550 AED</h6>
                    <div class="slidermaindiv">
                      <div id="slider-range"></div>
                      <div class="row slider-labels">
                        <div class="col-xs-6 caption"><span id="slider-range-value1"></span>
                        </div>
                        <div class="col-xs-6 text-right caption"><span id="slider-range-value2"></span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <form>
                            <input type="hidden" name="min-value" value="">
                            <input type="hidden" name="max-value" value="">
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="restaurantslistpart ">
                  <div class="restaurantslistmaindiv"  data-simplebar>
				  <?php foreach($Gas as $res){ 
				  if(!empty($res['opening_hours'])){
					  $opening_hours = $res['opening_hours'];
				  }else{
					  $opening_hours = "";
				  }
				  $rate = mt_rand(0,5);
				  $rating = number_format((float)$rate, 1, '.', '');
				  ?>
                    <div class="singledivlist">
                      <div class="leftpart">
                        <a href="javascript:void(0);" class="getGasDetail" id="<?=$res['osmid']?>"><p class="title"><?=isset($res['restaurantname'])?$res['restaurantname']:"";?></p></a>
                        <p class="subtitle">Station <?=rand(1000,9999)?></p>
                        <p class="details"><?= isset($res['description'])?$res['description']:""; ?></p>
                        <div class="orderonlinebtn">
                          <a href="#">LOCATION</a>
                        </div>
                        <div class="location">
                          <img src="assets/img/icons/location.png">
                          <p><?= $res['street']?></p>
                        </div>
						<div class="location">
                          <p><?= $opening_hours ?></p>
						</div>
                      </div>
                      <div class="rightpart">
                        <div class="restaurantsimg">
						 <?php if(empty($res['image'])){?>
                          <img src="assets/img/left-brand-image.png">
						 <?php }else{ ?> 
                          <img src="<?= $res['image'] ?>">
						 <?php } ?>
                        </div>
                        <div class="starboxmaindiv">
                          <div class="starbox">
                            <img src="assets/img/icons/cross-search.png">
                            <img src="assets/img/icons/cross-search.png">
                            <img src="assets/img/icons/cross-search.png">
                            <img src="assets/img/icons/cross-search.png">
                          </div>
                          <div class="ratting">
                            <p><?= isset($res['stars'])?$res['stars']:$rating ?></p>
                          </div>
                        </div>
                        <p class="totalreviews"><?= rand(100,999)?> Reviews</p>
                      </div>
                    </div>
				  <?php } ?>
                  </div>
                  <div class="paginationmaindiv">
					<nav aria-label="...">
                  <ul class="pagination">
                    <li class="page-item disabled">
                      <span class="page-link"><img src="assets/img/icons/left-arrow.png"></span>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                      <span class="page-link">
                        2
                        <span class="sr-only">(current)</span>
                      </span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#"><img src="assets/img/icons/right-arrow.png"></a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
	 <!-- Gas sub sidebar -->
	 <div class="extrapart gasSubsidebar" style="display: none;"></div> 
	</div>
	
	<!-- My Places sidebar -->
	
	<!-- Eatout sidebar dynamic -->
	<div class="left-panel left-list-panel extralarge eatoutdynamicDiv"  id="style-2" style="display: none;">
    </div>
	
	
	
		<div class="overlayIconInIframe">
		  <a class="routeicon" href="#">
			<img src="assets/img/icons/route.png">
		  </a>
		  <?php if(!isset($_SESSION['users'])) { ?>
		  <div class="signinbtn">
			<a class="" href="javascript:void(0);" class="btn btn-outline-default" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo">
			  <div>
				<img src="assets/img/icons/signin.png">
			  </div>
			  <p>Sign in</p>
			</a>
			<!--<a href="logout.php" style="background-color: #fff;" class="btn btn-outline-default"><i class="fa fa-power-off" aria-hidden="true"></i>&nbsp; Logout</a>-->
		  </div>
		  <?php }else{ 
			  $firstName = substr($_SESSION['users']['firstname'], 0, 1);
			  $lastName = substr($_SESSION['users']['lastname'], 0, 1);
			  $name = strtoupper($firstName.''.$lastName);
		  ?>
		  <div class="userloginmenu">
          <div class="signinbtn loginbtn">
		    <?php if(empty($_SESSION['users']['profile_pic'])){ ?>
            <a class="" href="javascript:void(0);">
              <div>
                <p class="username"><?=$name?></p>
              </div>
            </a>
			<?php }else{ ?>
			<a class="" href="javascript:void(0);">
              <div>
                <p class="username"><img src="./uploads/users/<?= isset($_SESSION['users']['profile_pic'])?$_SESSION['users']['profile_pic']:"" ?>" alt="Girl in a jacket" ></p>
              </div>
            </a>
			<?php } ?>	
          </div>

          <div class="onhover-menu" style="display: none;">

            <nav class="menu-details">
              <ul class="details-menu-list nav" role="tablist" id="myTab">
                <li class="menu-list">
                  <div class="menu-list-image">
                    <img src="assets/img/icons/ic_my_places.svg">
                  </div>
                  <div role="tab" data-toggle="tab" href="#tab1" class="menu-list-name">My places</div>
                </li>

                <li class="menu-list">
                  <div class="menu-list-image">
                    <img src="assets/img/icons/ic_favourites.svg">
                  </div>
                  <div role="tab" data-toggle="tab" href="#tab2" class="menu-list-name">Favorites</div>

                </li>

                <!--<li class="menu-list">
                  <div class="menu-list-image">
                    <img src="assets/img/icons/route.png">
                  </div>
                  <div role="tab" data-toggle="tab" href="#tab3" class="menu-list-name">Achievements</div>
                  
                </li>-->

                <li class="menu-list">
                  <div class="menu-list-image">
                    <img src="assets/img/icons/ic_reviews.svg">
                  </div>
                  <div role="tab" data-toggle="tab" href="#tab4" class="menu-list-name">Reviews</div>
                  
                </li>

                <li class="menu-list">
                  <div class="menu-list-image">
                    <img src="assets/img/icons/ic_photos.svg">
                  </div>
                  <div role="tab" data-toggle="tab" href="#tab5" class="menu-list-name">Photos</div>

                  
                </li>

                <li class="menu-list">
                  <div class="menu-list-image">
                    <img src="assets/img/icons/ic_corrections.svg">
                  </div>
                  <div role="tab" data-toggle="tab" href="#tab6" class="menu-list-name">Corrections</div>

                  
                </li>



              </ul>

              <ul class="details-menu-list">
                <li class="menu-list">
                  <div class="menu-list-image">
                    <img src="assets/img/icons/ic_edit.svg">
                  </div>
                  <div class="menu-list-name" data-toggle="modal" data-target="#editProfile" data-whatever="@mdo">Edit
                  </div>
                </li>

                <li class="menu-list">
                  <div class="menu-list-image">
                    <img src="assets/img/icons/ic_signout.svg">
                  </div>
                  <div class="menu-list-name"><a href="logout.php">Sign Out</a></div>
                </li>

              </ul>

            </nav>

          </div>

        </div>
		  <?php } ?>
		  <a class="sidebarmenu" href="javascript:void(0);">
			<img src="assets/img/icons/menu.png">
		  </a>
		</div>
	  
		<div class="multipleIconList">
			<a class="shareIcon" href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo">
			  <img src="assets/img/icons/share.png">
			</a>
			<a class="printIcon picon" href="javascript:void(0)">
			  <img src="assets/img/icons/print.png">
			</a></br>
			<div class="feedbackicon printIcon">
			<a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal3" data-whatever="@mdo">
			  <span>Feedback</span>
			  <i class="fas fa-comment"></i>
			</a>
		  </div>
			<!--<a class="shareIcon" href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal3" data-whatever="@mdo">
			  <img src="assets/img/icons/ic_feedback.png">
			</a>-->
		</div>
		
    
  </section>
	<input type="hidden" value="" id="fromdata" name="fromdata" />
    <input type="hidden" value="" id="todata" name="todata" />
    <input type="hidden" value="" id="latitude" name="latitude" />
    <input type="hidden" value="" id="longitude" name="longitude" />
    <input type="hidden" value="yes" id="flag" name="flag" />
    <input type="hidden" value="yes" id="feedback_flag" name="feedback_flag" />
    <input type="hidden" value="" id="catid" name="catid" />
	<?php if(isset($_SESSION['users'])) { ?>
    <input type="hidden" value="<?= $_SESSION['users']['id']?>" id="sessionid" name="sessionid" />
	<?php } ?>
	
<script type="text/javascript">
        var metroLatLng = JSON.parse('<?php echo json_encode($metroData); ?>');
        var tourismLatLng = JSON.parse('<?php echo json_encode($tourismData); ?>');
        var parkingLatLng = JSON.parse('<?php echo json_encode($parkingData); ?>');
        var restaurantLatLng = JSON.parse('<?php echo json_encode($restaurantData); ?>');
        var groceryLatLng = JSON.parse('<?php echo json_encode($groceryData); ?>');
        var mallLatLng = JSON.parse('<?php echo json_encode($mallData); ?>');
        var hotelLatLng = JSON.parse('<?php echo json_encode($hotelData); ?>');	
        var touristLatLong = JSON.parse('<?php echo json_encode($touristLatLong); ?>');	
        var restaurantnameData = JSON.parse('<?php echo json_encode($restaurantnameData); ?>');	
        var grocerynameData = JSON.parse('<?php echo json_encode($grocerynameData); ?>');	
        var mallnameData = JSON.parse('<?php echo json_encode($mallnameData); ?>');	
        var hotelnameData = JSON.parse('<?php echo json_encode($hotelnameData); ?>');	
        var gasDataLatLng = JSON.parse('<?php echo json_encode($gasData); ?>');	
		var gasnameData = JSON.parse('<?php echo json_encode($gasnameData); ?>');	
</script> 
<!-- Signup Model -->	
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New User Register Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="signupForm" method="post" action="">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">First Name:</label>
            <input type="text" class="form-control" maxlength="100" id="first_name" name="first_name">
			<span id="firstname_error_msg" style="color: red;"></span>
		  </div>
		  <div class="form-group">
            <label for="recipient-name" class="col-form-label">Last Name:</label>
            <input type="text" class="form-control" maxlength="100" id="last_name" name="last_name">
			<span id="lastname_error_msg" style="color: red;"></span>
		  </div>
		   <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="text" class="form-control" maxlength="100" id="email" name="email">
           <span id="email_error_msg" style="color: red;"></span>
		  </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Password:</label>
            <input type="password" class="form-control" maxlength="20" id="password" name="password">
			<span id="password_error_msg" style="color: red;"></span>
		  </div>
		  <div class="form-group">
            <label for="recipient-name" class="col-form-label">Contact No:</label>
            <input type="text" class="form-control" maxlength="10" id="contact_no" name="contact_no">
			<span id="contact_error_msg" style="color: red;"></span>
		  </div>
		  <span> If you are existing user then click on <a href="javascript:void(0);" id="login"> login</a></span>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary signupBtn">Submit</button>
      </div>
    </div>
  </div>
</div>	
<!-- Login Model -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="loginForm" method="post" action="">
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="text" class="form-control" maxlength="100" id="useremail" name="useremail">
           <span id="useremail_error_msg" style="color: red;"></span>
		  </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Password:</label>
            <input type="password" class="form-control" maxlength="20" id="userpassword" name="userpassword">
			<span id="userpassword_error_msg" style="color: red;"></span>
		  </div>
		    <span> If you are new user then click on <a href="javascript:void(0);" id="signup"> signup</a></span>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary loginBtn">Submit</button>
      </div>
    </div>
  </div>
</div>	
<!-- Send link Model -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #d3d3d340;">
        <h5 class="modal-title" id="exampleModalLabel">Send link</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="shareForm" method="post" action="">
		<div class="row">
			   <div class="form-group col-md-10">
				<label for="recipient-name" style="font-size: small;" class="col-form-label">Copy link:</label>
				<i class="fa fa-link" aria-hidden="true"></i><input type="text" style="font-size: small;width: 120%; color: blue;" class="form-control"   id="urllink" name="urllink">
			  </div>
			  <div class="col-md-2">
					<button style="margin-bottom: -138%;height:31px;" type="button" onclick="Copy();" class="btn btn-primary btn-sm copyBtn">copy</button>
			  </div>
          </div>
           <span style="font-size: 75%;"> Maps, search for organizations and routes can be used in your project  <a href="javascript:void(0);" id="signup">&nbsp;&nbsp; Learn how</a></span>
        </form>
      </div>
    </div>
  </div>
</div>	
<!-- Feedback Model -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Feedback</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="feedbackForm" method="post" action="">
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name:<span style="color: red;">*</span></label>
            <input type="text" class="form-control" maxlength="100" id="username" name="username">
           <span id="username_error_msg" style="color: red;"></span>
		  </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:<span style="color: red;">*</span></label>
            <input type="text" class="form-control" maxlength="100" id="useremails" name="useremails">
			<span id="useremails_error_msg" style="color: red;"></span>
		  </div>
		   <div class="form-group">
            <label for="recipient-name" class="col-form-label">Contact No:<span style="color: red;">*</span></label>
            <input type="text" class="form-control" maxlength="10" id="usercontact" name="usercontact">
			<span id="usercontact_error_msg" style="color: red;"></span>
		  </div>
		  <div class="form-group">
            <label for="recipient-name" class="col-form-label">Message:<span style="color: red;">*</span></label>
            <textarea class="form-control" id="usermessage" name="usermessage" rows="3"></textarea>
			<span id="usermessage_error_msg" style="color: red;"></span>
		  </div>
		  <span id="success_message" style="color: green"></span>
		  <span id="error_message" style="color: red"></span>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary feedbackBtn">Submit</button>
      </div>
    </div>
  </div>
</div>

<!-- Edit Profile Model -->
<div class="modal fade" id="editProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Profile editing</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="loginForm" enctype="multipart/form-data" method="post" action="">
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">First Name:</label>
            <input type="text" class="form-control" value="<?= isset($_SESSION['users']['firstname'])?$_SESSION['users']['firstname']:""?>" maxlength="100" id="name" name="name">
           <span id="name_error_msg" style="color: red;"></span>
		  </div>
		  <div class="form-group">
            <label for="recipient-name" class="col-form-label">Surname:</label>
            <input type="text" class="form-control" value="<?= isset($_SESSION['users']['lastname'])?$_SESSION['users']['lastname']:""?>" maxlength="100" id="surname" name="surname">
           <span id="surname_error_msg" style="color: red;"></span>
		  </div>
		   <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="text" class="form-control" value="<?= isset($_SESSION['users']['email'])?$_SESSION['users']['email']:""?>" maxlength="100" id="emailid" name="emailid">
           <span id="emailaddress_error_msg" style="color: red;"></span>
           
		  </div></br>
		  <div class="form-group" id="fileDiv">
		  <?php if(empty($_SESSION['users']['profile_pic'])) { ?>
		   <input type="file" name="file" id="file" /></br>
		  <?php }else{ ?>
		   <img src="./uploads/users/<?= $_SESSION['users']['profile_pic'] ?>" id="profileid" alt="Avatar" style="width:100px; border-radius: 50%;"></br>
			<a href="javascript:void(0);"  class="removeImage" style="margin-left: 6%;">remove</a>
		  <?php } ?> 
		  </div>
		  <span id="image_error_msg" style="color: red;"></span></br>
		  <input type="hidden" value="<?=isset($_SESSION['users']['id'])?$_SESSION['users']['id']:""?>" name="userid" id="userid" />
          <span style="font-size: small;"> By clicking "Send" I give Urbi consent to the processing of personal data on the terms and for the purposes specified by <a href="javascript:void(0);" id=""> the Privacy policy</a></span>
        </form>
      </div>
	   <span id="uploaded_image" style="color: red;"></span>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary editprofileBtn">Submit</button>
      </div>
    </div>
  </div>
</div>	

<?php 
include('layout/footer.php');
?>
<script>
		$(document).ready(function (){
			if($("#advertisement_images img").length > 1){
				setTimeout(changeImage, 5000);
			}
			$(".leaflet-control-layers-selector").css('display','none');
			 $.ajax({
                    type: "POST",
                    url: 'getfromdata.php',
                    success: function(response){
						$("#from").html(response);
						$("#to").html(response);
					}
			 })
			$("#from_search").change(function(){
				 var from_id=0;
			     var FromName=$("#from_search").val();
				  from_id = $('#from').find('option[value="' +FromName + '"]').attr('data-id');
				  $("#fromdata").val(from_id);
				  putmarkerfrom(from_id);
			});
			$("#to_search").change(function(){
				 var to_id=0;
			     var ToName=$("#to_search").val();
				  to_id = $('#to').find('option[value="' +ToName + '"]').attr('data-id');
				  putmarkerto(to_id);
                  $("#todata").val(to_id);
				  var fromdata = $("#fromdata").val();
                  let profile = $("#select-profile").val();
				  snake(fromdata,to_id, profile);
			});

            $("#select-profile").change(function(){
				 var to_id=0;
			     var ToName=$("#to_search").val();
				  to_id = $('#to').find('option[value="' +ToName + '"]').attr('data-id');
                  $("#todata").val(to_id);
				  var fromdata = $("#fromdata").val();
                  let profile = $("#select-profile").val();
				  snake(fromdata,to_id, profile);
			});
			$(".picon").click(function(){
				$('#map').print();
			});
			
			map.on("moveend", function () {
				var freshLatLan = map.getCenter().toString();
				var removeFirst = freshLatLan.replace('LatLng', '');
				var result = removeFirst.substring(1, removeFirst.length-1);
				var arr = result.split(",");
				var string1 = arr[0];
				let string2 = arr[1].replace(/^\s+|\s+$/gm,'');
				$("#latitude").val(string1);
				$("#longitude").val(string2);
				window.location.hash = "#map=13/"+string1+"/"+string2;
				var url = window.location.href+"#map=13/"+string1+"/"+string2;
				if(url != window.location.href){
				  var urls = window.location.href;
				  var uarr = urls.split("#");
				  var nurl = uarr[0]+"#map=13/"+string1+"/"+string2;
				  	$("#urllink").val(nurl);
				}else{
					$("#urllink").val(url);
				}
			});
			  map.on("click", function (e) {
				var lat, lng;
				var marker;
				  if (marker) map.removeLayer(marker);
				  lat = e.latlng.lat;
				  lng = e.latlng.lng;
				  let eiffelMarker = L.marker([lat, lng]).addTo(map);
				  eiffelMarker.bindPopup("You clicked the map at -<br>" + 
				"<b>lat:</b> " + lat + "<br>" + 
				"<b>lang:</b> " + lng).openPopup();
				}); 
		});
		function changeImage(){
		  $curr = $("#advertisement_images .active");
		  $next = $("#advertisement_images .active").next();
		if($next[0] === undefined)
			$next = $("#advertisement_images img").eq(0);
		    $curr.fadeOut(500, function(){
			$next.fadeIn(500, function(){
              $curr.removeClass("active");
              $next.addClass("active");
              setTimeout(changeImage, 5000);
			});   
		});                 
    }
   </script>
    <script>
    ;
    (function () {
      'use strict';


      $(activate);


      function activate() {
	
        $('.nav-tabs')
          .scrollingTabs()
          .on('ready.scrtabs', function () {
            $('.tab-content').show();
          });

      }
    }());
  </script>
<!--<script type="text/javascript">
    $(document).on('click', '.closeleftpanel', function () {
      $('.left-panel').toggleClass('hideleftpanel');
      $('.overlayIconInIframe').toggleClass('w-100');
    });
  </script>-->
 
