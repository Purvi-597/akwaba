<?php
@error_reporting(0);
@session_start();
include('config/db_pg.php');
if(isset($_REQUEST['grocery']) && ($_REQUEST['grocery'] == 'groceryForm')){
$id = $_REQUEST['id'];
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
osm_id as osmid,
ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data
from 
public.planet_osm_point 
WHERE shop='supermarket' and shop!='' and osm_id=".$id);
$row = pg_fetch_row($pg_sql);
if(!empty($row[4])){
	$arr = explode(" ",$row[48]);
	if(!empty($arr[0]) && !empty($arr[1])){
		$day = explode("-",$arr[0]);
		$week = $day[0]." To " .$day[1];
		$time = explode("-",$arr[1]);
	}else{
		$day = "";
		$time = explode("-",$arr[0]);
	}
}else{
	$day = "";
	$week = "";
	$time = "";
}
$latlng = json_decode($row[71]);

$image = "assets/img/feature-image.png";
$html = '';
$html = '<div class="restaurantdetilsbox" style="background-image: url('.$image.');">
          <div class="imagesandcontain">
            <div class="leftpart">
              <p class="title">'.trim($row[1],'"').'</p>
              <p class="subtitle">'.trim($row[69],'"').'</p>
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
              <a href="#">PROMOTIONS</a>
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
					if(!empty($row[12])) { 
                       $html.='<p class="feature-p">'.$row[12].'</p>';
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
				if(!empty($row[8])){
					$html.='<div class="singledetails">
						<div class="icondiv">
						  <img src="assets/img/icons/star-rating.png">
						</div>
						<div class="detailsdiv">
						<p>'.$row[8].', '.$row[7].' '.$row[21].'</p>
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
				if(!empty($row[0])){  
				$html.='<div class="singledetails">
                    <div class="icondiv">
                      <img src="assets/img/icons/star-rating.png">
                    </div>
                    <div class="detailsdiv">
                      <p>'.$row[0].'</p>
                    </div>
                  </div>';
				}
				if(!empty($row[15])){  
                $html.='<div class="singledetails">
                    <div class="icondiv">
                      <img src="assets/img/icons/star-rating.png">
                    </div>
                    <div class="detailsdiv">
                      <p>'.$row[15].'</p>
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
		<p class="d-none lat">'.$latlng->coordinates[0].'</p>
        <p class="d-none long">'.$latlng->coordinates[1].'</p>';
		echo $html;die;
}

?>
