<?php
error_reporting(0);
session_start();
include('config/db_pg.php');
if(isset($_REQUEST['id'])){
$id = $_REQUEST['id'];
$cat_type = $_REQUEST['cat_type'];
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
ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data,name
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
$latlng = json_decode($row['geoJSON_data'])->coordinates;

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


$image = "assets/img/feature-image.png";
$html = '';
$html = '<div class="restaurantdetilsbox" style="background-image: url('.$image.');">
          <div class="imagesandcontain">
            <div class="leftpart">
              <p class="title">'.trim($row['restaurantname'],'"').'</p>
              <p class="subtitle">'.$cat_type.'</p>
              <div class="rattinggroup">
                <div class="starboxmaindiv">
                  <div class="starbox">
                    <img src="assets/img/icons/star-rating.png">
                    <img src="assets/img/icons/star-rating.png">
                    <img src="assets/img/icons/star-rating.png">
                    <img src="assets/img/icons/star-rating.png">
                  </div>
                  <div class="ratting">
                    <p>4.0</p>
                  </div>
                </div>
                <p class="totalreviews">'.rand(100,999).' Reviews</p>
              </div>
            </div>
            <div class="rightpart">
              <div class="restaurantsimg">
                <img src="assets/img/left-brand-image.png">
              </div>
            </div>
          </div>
          <div class="multiplebuttons">
            <div class="orderonlinebtn">
              <a href="#">Order Online</a>
            </div>
            <div class="commonstylebtn savebtn">
              <img src="assets/img/icons/icon-8.png">
              <p>save</p>
            </div>
            <div class="commonstylebtn sendbtn">
              <img src="assets/img/icons/share.png">
              <p>send</p>
            </div>
            <div class="commonstylebtn gobtn">
              <img src="assets/img/icons/route.png">
              <p>go</p>
            </div>
          </div>
        </div>
        <div class="tabmaindiv" data-simplebar>
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">reviews</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">prices</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="firsttabmaindiv">
                <div class="detailsofrestorant">
                  <a class="btn p-0 toggle-btn">
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                  </a>
                  <div class="features-overflow">';
					if(!empty($row['description'])) { 
                       $html.='<p class="feature-p">'.$row['description'].'</p>';
					}else{
					   $html.='<p class="feature-p">No Description found</p>';
					}					
                  $html.='</div>
                </div>
                <div class="photoslistmaindiv">
                  <p class="maintitle">Photos</p>
                  <div class="imageslist">
                    <div class="singleimg">
                      <img src="assets/img/left-brand-image.png">
                    </div>
                    <div class="singleimg">
                      <img src="assets/img/left-brand-image.png">
                    </div>
                    <div class="singleimg">
                      <img src="assets/img/left-brand-image.png">
                      <div class="overlaycount">
                        <p>07 Photos</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="detailslist">';
				if(!empty($address)){
					$html.='<div class="singledetails">
						<div class="icondiv">
						  <img src="assets/img/icons/star-rating.png">
						</div>
						<div class="detailsdiv">
						<p>'.$address.'</p>
						</div>
					  </div>';
				}
				  if(!empty($time[0]) && $time[1]) { 
                  $html.='<div class="singledetails">
                    <div class="icondiv">
                      <img src="assets/img/icons/star-rating.png">
                    </div>
                    <div class="detailsdiv">
                      <p><span>Open Days:</span> '.$week.'</p>
                    </div>
                  </div>';
				  $html.='<div class="singledetails">
                    <div class="icondiv">
                      <img src="assets/img/icons/star-rating.png">
                    </div>
                    <div class="detailsdiv">
                      <p><span>Open Hours:</span> '.date("g:i A", strtotime($time[0])).' to '.date("g:i A", strtotime($time[1])).'</p>
                    </div>
                  </div>';
				  }
				if(!empty($row['phone'])){  
				$html.='<div class="singledetails">
                    <div class="icondiv">
                      <img src="assets/img/icons/star-rating.png">
                    </div>
                    <div class="detailsdiv">
                      <p>'.$row['phone'].'</p>
                    </div>
                  </div>';
				}
				if(!empty($row['email'])){  
                $html.='<div class="singledetails">
                    <div class="icondiv">
                      <img src="assets/img/icons/star-rating.png">
                    </div>
                    <div class="detailsdiv">
                      <p>'.$row['email'].'</p>
                    </div>
                  </div>';
				}
                $html.='</div>
              </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <div class="secondtabmaindiv">
                <div class="">
                  
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
          </div>
        </div>
		<p class="d-none lat">'.$latlng[0].'</p>
        <p class="d-none long">'.$latlng[1].'</p>';
		echo $html;die;
}

?>
