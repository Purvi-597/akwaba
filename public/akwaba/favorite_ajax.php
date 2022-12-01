<?php
<<<<<<< HEAD
//error_reporting(0);
=======
error_reporting(0);
>>>>>>> Darshan
session_start();
include('config/db_pg.php');
include('config/db_mysql.php');
if(isset($_REQUEST['favorite']) && ($_REQUEST['favorite'] == 'favoriteForm')){
$id = $_REQUEST['osmid'];
$userid = $_REQUEST['userid'];
$cat_type = $_REQUEST['type'];

$pg_sql = pg_query($db, "select
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
osm_id as osmid,
ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data
from 
public.planet_osm_point 
WHERE osm_id=".$id);
$row = pg_fetch_array($pg_sql,NULL, PGSQL_ASSOC);

if(!empty($row['opening_hours'])){
	$arr = explode(" ",$row['opening_hours']);
	$day = explode("-",$arr[0]);
	if(!empty($day[0]) && !empty($day[1])){
		$week = $day[0]." to " .$day[1];
		$time = explode("-",$arr[1]);
	}else{
		$week = "";	
		$time = "";
	}
}else{
	$days = "";
	$week = "";
	$time = "";
}
$latlng = json_decode($row['geojson_data']);

$address='';
if($row['street'] != '' && $row['street']!= null){
    $address = $row['street'];
}else if($row['city'] != '' && $row['city']!= null){
    $address .= ", ".$row['city'];
}else if($row['district'] != '' && $row['district']!= null){
    $address = ", ".$row['district'];
}else if($row['country'] != '' && $row['country']!= null){
    $address .= ", ".$row['country'];
}
$name = trim($row['restaurantname'],'"');
$latitude = $latlng->coordinates[0];
$longitude = $latlng->coordinates[1];
$created_at = date("Y-m-d H:i:s");
$updated_at = date("Y-m-d H:i:s");
$sql = "INSERT INTO favorites (user_id, osm_id, name, address, cat_type, latitude, longitude, status, created_at, updated_at) VALUES ('".$userid."', '".$id."', '".$name."', '".$address."', '".$cat_type."', '".$latitude."', '".$longitude."', '1', '".$created_at."', '".$updated_at."')";
<<<<<<< HEAD
		$result = mysqli_query($conn, $sql);
		if ($result) {
=======
		if (mysqli_query($conn, $sql)) {
>>>>>>> Darshan
			  echo "true";die;
		} else {
			  echo "false";die;
		}
<<<<<<< HEAD
}else if(isset($_POST['check']) == "remove" ){
    $user_id = $_POST['userid'];
    $osm_id = $_POST['osmid'];    

$sql = "DELETE FROM `favorites` WHERE `user_id` = $user_id AND `osm_id` = $osm_id";
$result = mysqli_query($conn, $sql);

if ($result) {
      echo "true";die;
} else {
      echo "false";die;
}
}else{

=======
>>>>>>> Darshan
}

?>
