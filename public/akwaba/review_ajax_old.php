<?php
error_reporting(0);
session_start();
include('config/db_pg.php');
include('config/db_mysql.php');
if(isset($_REQUEST['addreview']) && ($_REQUEST['addreview'] == 'addreviewForm')){
$id = $_REQUEST['osmid'];
$userid = $_REQUEST['userid'];
$message = $_REQUEST['message'];
$rating = $_REQUEST['rating'];

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
$firstname = isset($_SESSION['users']['firstname'])?$_SESSION['users']['firstname']:"";
$lastname = isset($_SESSION['users']['lastname'])?$_SESSION['users']['lastname']:"";
$name = trim($row['restaurantname'],'"');
$photos = "index.png";
$latitude = $latlng->coordinates[0];
$longitude = $latlng->coordinates[1];
$created_at = date("Y-m-d H:i:s");
$updated_at = date("Y-m-d H:i:s");
$sql = "INSERT INTO review_rating (user_id, osm_id, title, message, rating, photos, status, created_at, updated_at) VALUES ('".$userid."', '".$id."', '".$name."', '".$message."', '".$rating."', '".$photos."', '1', '".$created_at."', '".$updated_at."')";
		if (mysqli_query($conn, $sql)) {
			  $html = '';
			  $html .='<div class="col-lg-12 col-12 inner-padding">
                          <div class="d-lg-flex d-block d-md-flex align-items-lg-center">';
						  if(isset($_SESSION['users']['profile_pic'])){
                            $html.='<img src="./uploads/users/'.$_SESSION['users']['profile_pic'].'" alt="..." class="user-profile-image rounded-circle ">';
						  }else{
							$html.='<img src="./assets/img/user1.png" alt="..." class="user-profile-image rounded-circle ">';
						  }  
                           $html.='<div class="lh-1">
                            <div class="lh-1">
                              <span class="code-profile">'.$firstname.' '.$lastname.'</span> <br>
                               <span class="code-deatils">'.date("D M Y H:i:s").'</span>
                            </div>
                            <div class="icon-right">
                              <div class="star-rating">
                                <input id="star-25" type="radio" name="rating-25" value="star-25" />
                                <label for="star-25" title="4 stars">
                                  <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="star-26" type="radio" name="rating-26" value="star-26" />
                                <label for="star-26" title="3 stars">
                                  <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="star-27" type="radio" name="rating-27" value="star-27" />
                                <label for="star-27" title="2 stars">
                                  <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="star-28" type="radio" name="rating-28" value="star-28" />
                                <label for="star-28" title="1 star">
                                  <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                              </div>
                            </div>
                          </div>
                          <p class="code-data mb-0">'.$message.'</p>
						<div class="lh-2">
                         <a href="#">
                          <span class="code-likes">
                            <img src="./assets/img/icons/like.svg" class="img-fluid like-btn" alt="">
                            Like
                          </span>
                         </a>
                         <a href="#">
                            <span class="code-likes pl-2 float-right">
                              <img src="./assets/img/icons/flag.svg" class="img-fluid" alt="">
                            </span>
                         </a>
                          </div>
                        </div>';
			echo $html;die;			
			  
		} else {
			  echo "false";die;
		}
}

?>
