<?php
error_reporting(0);
session_start();
include('config/db_pg.php');
include('config/db_mysql.php');
if(isset($_REQUEST['tourismdetail']) && ($_REQUEST['tourismdetail'] == 'tourismdetailForm')){
$id = $_REQUEST['id'];
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

$sql = "select * from review_rating where osm_id = '".$id."' and status = '1' and deleted_at IS NULL";
$result = $conn->query($sql);
if($result->num_rows > 0) {
		while($rowss = $result->fetch_assoc()) {
			$rows[] = $rowss;
		}
}

$sqlusers = "select * from review_rating where user_id = '".$_SESSION['users']['id']."' and osm_id = '".$id."' and status = '1' and deleted_at IS NULL";

$results = $conn->query($sqlusers);

if($results->num_rows > 0) {
		while($userrow = $results->fetch_assoc()) {
			$users[] = $userrow;
		}
}

if(isset($_SESSION['users']['id'])){
	$photosql = "select * from contact_photos where osm_id = '".$id."' and status = '1' and deleted_at IS NULL";
}else{
	$photosql = "select * from contact_photos where osm_id = '".$id."' and status = '1' and deleted_at IS NULL";	
}
$photoresult = $conn->query($photosql);
if($photoresult->num_rows > 0) {
		while($photorows = $photoresult->fetch_assoc()) {
			$prows[] = $photorows;
			//$photos[] = $rowss['photos'];
			$userPhoto[] = explode(",",$photorows['images']);
		}
}

$fav = "select * from favorites where user_id = '".$_SESSION['users']['id']."' and osm_id = '".$id."' and status = '1' and deleted_at IS NULL";
$favresult = $conn->query($fav);
if($favresult->num_rows > 0) {
		while($frow = $favresult->fetch_assoc()) {
			$favouritesData[] = $frow;
		}
}

$firstname = isset($_SESSION['users']['firstname'])?$_SESSION['users']['firstname']:"";
$lastname = isset($_SESSION['users']['lastname'])?$_SESSION['users']['lastname']:"";
$image = "assets/img/download.jpg";
$html = '';
$html = '<div class="closeiconleftpanel">
        <a href="javascript:void(0);" class="tourismCloseBtn"> <img src="assets/img/icons/left-cross.svg"></a>
      </div>
      <div class="closeiconleftpanel closeleftpanel2 closeleftpanel">
        <img src="assets/img/icons/left-arrow.svg">
      </div>
		<div class="scrollbar list-page" data-simplebar>
        <!-- restaurantdetilsbox -->
        <div class="restaurantdetilsbox" style="background-image: url('.$image.');">
          <div class="input-group  search-bar">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Search in Akwaba Maps">
          </div>
          <div class="imagesandcontain">
            <div class="leftpart">
              <p class="title">'.trim($row['restaurantname'],'"').'</p>
              <p class="subtitle">'.$cat_type.'</p>
              <p class="subtitle2">Get the best After Tourism Service</p>
              <div class="rattinggroup">
                <div class="starboxmaindiv color-yellow">
                  <div class="star-rating">
                    <input id="star-17" type="radio" name="rating-17" value="star-17" />
                    <label for="star-17" title="4 stars">
                      <i class="active fa fa-star" aria-hidden="true"></i>
                    </label>
                    <input id="star-18" type="radio" name="rating-18" value="star-18" />
                    <label for="star-18" title="3 stars">
                      <i class="active fa fa-star" aria-hidden="true"></i>
                    </label>
                    <input id="star-19" type="radio" name="rating-19" value="star-19" />
                    <label for="star-19" title="2 stars">
                      <i class="active fa fa-star" aria-hidden="true"></i>
                    </label>
                    <input id="star-20" type="radio" name="rating-20" value="star-20" />
                    <label for="star-20" title="1 star">
                      <i class="active fa fa-star" aria-hidden="true"></i>
                    </label>
                  </div>
                  <div class="ratting">
                    <p>4.0</p>
                  </div>
                </div>
                <!-- <p class="totalreviews">'.rand(100,999).' Reviews</p> -->
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
              <!--<a href="#">know More</a>-->
            </div>';
			if(empty($favouritesData)) { 
        $html .= '<div class="commonstylebtn savebtn" id="'.$row['osmid'].'" data-index="'.$cat_type.'">
              <img src="assets/img/icons/icon-8.png">
              <p>save</p>
              <div class="tooltip1" style="position: absolute; top: 25px; left: -25px;  display: none;">
                <div class="tooltip_save">
                  <span class="tooltip_add">Added to "Favorites"</span>
                  <button class="tooltip_btn" type="button">Change</button>
                </div>
              </div>
            </div>';
			}else{
			$html .= '<div class="commonstylebtn unsavebtn" id="'.$row['osmid'].'" data-index="'.$cat_type.'">
              <img src="assets/img/icons/icon-8-filled.png">
              <p>save</p>
              <div class="tooltip1" style="position: absolute; top: 25px; left: -25px;  display: none;">
                <div class="tooltip_save">
                  <span class="tooltip_add">Added to "Favorites"</span>
                  <button class="tooltip_btn" type="button">Change</button>
                </div>
              </div>
            </div>';	
			}
        $html .= '<div class="commonstylebtn sendbtn">
              <img src="assets/img/icons/share.png">
              <p>send</p>
            </div>
            <div class="commonstylebtn gobtn">
              <img src="assets/img/icons/route.png">
              <p>go</p>
            </div>
          </div>
        </div>
        <!-- restaurantdetilsbox -->
        <!-- tabmaindiv -->
        <div class="tabmaindiv">
          <!-- nav-tabs -->
          <ul class="nav nav-tabs px-2" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="Contacts-tab" data-toggle="tab" href="#Contacts" role="tab"
                aria-controls="Contacts" aria-selected="true">Contacts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " id="Info-tab" data-toggle="tab" href="#Info" role="tab" aria-controls="Info"
                aria-selected="false">Info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="Reviews-tab" data-toggle="tab" href="#Reviews" role="tab" aria-controls="Reviews"
                aria-selected="false">Reviews</a>
            </li>
          </ul>
          <!-- nav-tabs -->
          <div class="tab-content" id="myTabContent">
            <!--  Contacts-Tab -->
            <div class="tab-pane fade  Contacts-Tab active show" id="Contacts" role="tabpanel"
              aria-labelledby="Contacts-tab">
              <div class="firsttabmaindiv">
                <div class="col-md-12  mt-3 photoslistmaindiv">
				 <div class="imageslist bindPhotos">';
				 if(!empty($prows)) {
				 for($i=0;$i<count($userPhoto);$i++){ 
						for($j=0;$j<count($userPhoto[$i]);$j++){
				    $html.=' <div class="magnific-img col-md-3">
                      <a class="image-popup-vertical-fit" target="_blank" href="./uploads/review/'.$userPhoto[$i][$j].'" title="'.$userPhoto[$i][$j].'">
                        <img src="./uploads/review/'.$userPhoto[$i][$j].'" alt="'.$userPhoto[$i][$j].'" style="width: 150%;" />
                      </a>
                    </div>';
				 }}}
					$html.='<h3 class="rating-stars">Photos <span>(you can upload up to 5 photos)</span></h3>
					<div class="imageslist">
						<div class="lable-input singleimg">
							<a href="javascript:void(0)" class="uploadBtn" style="display: inline;" data-index="'.$row['osmid'].'" id="'.trim($row['restaurantname'],'"').'">
							<label for="">
								<img src="assets/img/left-brand-image.png"> 
							  <div class="overlaycount" >
								<p>Photos</p>
							  </div>
							</label>
							</a>
						</div>
					</div>
				</div>
			  </div>
			  <span id="images_review_error" style="color:red;margin-left:10px;"></span>
			  <div id="img_section3"></div>
                <div class="contacts-tab">
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
                  </div>';
				  if(!empty($address)){
                  $html.='<div class="detailsofrestorant">
                    <a class="btn p-0 toggle-btn">
                      <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                    <div class="features-overflow features-overflowAddress">
                      <div class="feature-p">
                        <div class="addressTogggle">
                          <div class="singledetails">
                            <div class="icondiv">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="#028eff">
                                <path
                                  d="M5 11v2a6.82 6.82 0 0 1 4.17 1.41C10.75 15.62 11.53 18 11.5 22h1c0-4 .75-6.38 2.33-7.59A6.82 6.82 0 0 1 19 13v-2a7 7 0 0 0-7-7 7 7 0 0 0-7 7z">
                                </path>
                              </svg>
                            </div>
                            <div class="detailsdiv">
                              <span class="detailSpan">'.$address.'</span>
                            </div>
                          </div>
                          <div class="entrance">
                            <div class="">
                              <!--<button class="entranceBtnShow" type="button">Show entrance</button>-->
                            </div>
                          </div>
                          <div class="singledetails mt-2 parkinglotmaindiv">
                            <div class="icondiv">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="#028eff">
                                <path d="M13 10h-2v2h2a1 1 0 0 0 0-2z"></path>
                                <path
                                  d="M16 4H8a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V8a4 4 0 0 0-4-4zm-3 10h-2v2H9V8h4a3 3 0 0 1 0 6z">
                                </path>
                              </svg>
                            </div>
                            <div class="detailsdiv">
                              <span class="detailSpan">8 parking lots</span>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>';
				  }
				  if(!empty($row['opening_hours'])) { 
                  $html.='<div class="detailsofrestorant detailsForTime">
                     <a class="btn p-0 toggle-btn">
                      <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                    <div class="features-overflow features-overflowTime">
                      <div class="feature-p">
                        <div class="singledetails">
                          <div class="icondiv">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                              fill="#299400">
                              <path d="M12 4a8 8 0 1 0 8 8 8 8 0 0 0-8-8zm5 9h-6l1-7h1v5.25l4 .75z"></path>
                            </svg>
                          </div>
                          <div class="detailsdiv">
                             '.$week.' from '.$row['opening_hours'].'
                            <div class="detailsdivOpen">Open</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>';
				  }
				  if(!empty($row['phone'])) { 
                 $html.='<div class="detailsofrestorant detailsFormobilenum">
                    <div class="feature-p">
                      <div class="addressTogggle">
                        <div class="singledetails">
                          <div class="icondiv">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                              fill="#028eff">
                              <path
                                d="M14 14l-1.08 1.45a13.61 13.61 0 0 1-4.37-4.37L10 10a18.47 18.47 0 0 0-.95-5.85L9 4H5.06a1 1 0 0 0-1 1.09 16 16 0 0 0 14.85 14.85 1 1 0 0 0 1.09-1V15h-.15A18.47 18.47 0 0 0 14 14z">
                              </path>
                            </svg>
                          </div>
                          <div class="detailsdiv">'.$row['phone'].'</div>
                        </div>
                      </div>
                    </div>
                  </div>';
				  }
				if(!empty($row['website'])) {   
                $html.='<div class="detailsofrestorant detailsFormobilenum">
                    <div class="feature-p">
                      <div class="addressTogggle">
                        <div class="singledetails">
                          <div class="icondiv">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                              fill="#028eff">
                              <path
                                d="M12 4a8 8 0 1 0 8 8 8 8 0 0 0-8-8zm-6 8a5.84 5.84 0 0 1 .22-1.57L7 12h2l1 2h1v3.91A6 6 0 0 1 6 12zm10.8 3.59L16 14h-1l-1-2h-4l1-2h1l1-2h1l.68-1.36a6 6 0 0 1 2.12 9z">
                              </path>
                            </svg>
                          </div>
                          <div class="detailsdiv"><a
                              href="www.dubai.ferraridealers.com">'.$row['website'].'</a></div>
                        </div>
                      </div>
                    </div>
                  </div>';
				}
                $html.='<div class="SocialMedia" data-divider="true" data-divider-shifted="true">
                    <div class="SocialMediaTab">
                      <span>
                        <a href="#" target="_blank" class="SocialMediaLink" aria-label="YouTube">
                          <div class="SocialMediaLinkDiv">
                            <div class="SocialMediaLinkIcons">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#028eff" width="24"
                                height="24">
                                <path
                                  d="M10 9.33L15.33 12 10 14.67zM24 2v20a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h20a2 2 0 0 1 2 2zm-4 10c0-4.12-.32-5.7-2.92-5.88C14.67 6 9.32 6 6.92 6.12 4.33 6.3 4 7.87 4 12s.32 5.7 2.92 5.88c2.4.16 7.75.16 10.16 0C19.67 17.7 20 16.13 20 12z">
                                </path>
                              </svg>
                            </div>
                            <span class="SocialMediaLinkName">YouTube</span>
                          </div>
                        </a>
                      </span>
                    </div>
                    <div class="SocialMediaTab">
                      <span>
                        <a href="#" target="_blank" class="SocialMediaLink" aria-label="Facebook">
                          <div class="SocialMediaLinkDiv">
                            <div class="SocialMediaLinkIcons">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#028eff" width="24"
                                height="24">
                                <path
                                  d="M0 2v20a2 2 0 0 0 2 2h20a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2zm16 6h-1.92c-.62 0-1.08.25-1.08.89V10h3l-.24 3H13v6h-3v-6H8v-3h2V8.08C10 6.06 11.06 5 13.46 5H16z">
                                </path>
                              </svg>
                            </div>
                            <span class="SocialMediaLinkName">Facebook</span>
                          </div>
                        </a>
                      </span>
                    </div>
                    <div class="SocialMediaTab">
                      <span>
                        <a href="#" target="_blank" class="SocialMediaLink" aria-label="Instagram">
                          <div class="SocialMediaLinkDiv">
                            <div class="SocialMediaLinkIcons">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#028eff" width="24"
                                height="24">
                                <path
                                  d="M14.67 12A2.67 2.67 0 1 1 12 9.33 2.68 2.68 0 0 1 14.67 12zm3.84-3.23v6.46c-.1 2.15-1.11 3.18-3.28 3.28H8.77c-2.18-.1-3.18-1.13-3.28-3.28V12 8.77c.1-2.15 1.11-3.18 3.28-3.28h6.46c2.17.1 3.18 1.13 3.28 3.28zM16.11 12A4.11 4.11 0 1 0 12 16.11 4.11 4.11 0 0 0 16.11 12zm1.12-4.27a1 1 0 1 0-1 1 1 1 0 0 0 1-1zM24 2v20a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h20a2 2 0 0 1 2 2zm-4 10c0-2.17 0-2.44-.05-3.3-.13-2.9-1.74-4.52-4.65-4.65H8.7c-2.9.13-4.52 1.74-4.65 4.65C4 9.56 4 9.83 4 12v3.3c.18 2.9 1.79 4.52 4.7 4.7.86 0 1.13.05 3.3.05s2.45 0 3.3-.05c2.9-.13 4.52-1.74 4.65-4.65.05-.9.05-1.18.05-3.35z">
                                </path>
                              </svg>
                            </div>
                            <span class="SocialMediaLinkName">Instagram</span>
                          </div>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="error-tab">
                  <div class="FoundError">
                    <div>
                      <button class="FoundErrorBtn" type="button">Found an error?</button>
                    </div>
                  </div>
                  <div class="useFull">
                    <span class="">
                      <span class="useFullLinks">
                        ​<a href="#" class="_1rehek">It’s my company</a>
                      </span>
                      <span class="useFullLinks">
                        ​<a href="#" class="_1rehek">Advertising in 2GIS ↗</a>
                      </span>
                    </span>
                  </div>
                  <div class="AddNotes">
                    <div class="AddNotesBtn">Add note</div>
                  </div>
                  <div class="AddNotesSection">
                    <form>
                      <div>
                        <div class="AddNotesDiv1">
                          <div class="AddNotesDiv2">
                            <div class="AddNotesDiv2_1">
                            </div>
                            <div class="AddNotesDiv3" style="margin-left: 32px;">
                              <div data-n="wat-kit-textfield" style="width: 100%;">
                                <div class="AddNotesDiv4">
                                  <div class="AddNotesDiv5">
                                    <input class="AddNotesDivInput" placeholder="Note text" maxlength="70" type="text"
                                      value="">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div style="display: block;">
                        <div class="AddNotesDivBtn">
                          <div class="AddNotesDivBtn1">
                            <button class="FoundErrorBtn AddNotesDivbutton" type="button">Cancel</button>
                          </div>
                          <button class="FoundErrorBtn AddNotesDivbutton AddNotesDivbuttonBlue "
                            type="submit">Save</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!--  Contacts-Tab -->
            <!-- Info-tab -->
            <div class="tab-pane fade Info-tab " id="Info" role="tabpanel" aria-labelledby="Info-tab">
              <div class="firsttabmaindiv">
                <div class="contacts-tab">
                  <div class="Info-one ">
                    <div class="infoSecOne mt10">
                      <div class="detailsofrestorant">
                        <div class="features-overflow features-overflowAddress">
                          <div class="feature-p">
                            <div class="addressTogggle">
                              <div class="singledetails">
                                <div class="icondiv">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="8 8 32 32"
                                    fill="currentColor">
                                    <path
                                      d="M22.586 14H14a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h20a1 1 0 0 0 1-1V18a1 1 0 0 0-1-1h-8.414l-3-3zm3.828 1H34a3 3 0 0 1 3 3v13a3 3 0 0 1-3 3H14a3 3 0 0 1-3-3V15a3 3 0 0 1 3-3h9.414l3 3z">
                                    </path>
                                  </svg>
                                </div>
                                <div class="detailsdiv">
                                  <span class="detailSpan">No Data Found</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="error-tab">
                  <div class="FoundError">
                    <div>
                      <button class="FoundErrorBtn" type="button">Found an error?</button>
                    </div>
                  </div>
                  <div class="useFull">
                    <span class="">
                      <span class="useFullLinks">
                        ​<a href="#" class="_1rehek">It’s my company</a>
                      </span>
                      <span class="useFullLinks">
                        ​<a href="#" class="_1rehek">Advertising in 2GIS ↗</a>
                      </span>
                    </span>
                  </div>
                  <div class="AddNotes">
                    <div class="AddNotesBtn">Add note</div>
                  </div>
                  <div class="AddNotesSection">
                    <form>
                      <div>
                        <div class="AddNotesDiv1">
                          <div class="AddNotesDiv2">
                            <div class="AddNotesDiv2_1">
                            </div>
                            <div class="AddNotesDiv3" style="margin-left: 32px;">
                              <div data-n="wat-kit-textfield" style="width: 100%;">
                                <div class="AddNotesDiv4">
                                  <div class="AddNotesDiv5">
                                    <input class="AddNotesDivInput" placeholder="Note text" maxlength="70" type="text"
                                      value="">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div style="display: block;">
                        <div class="AddNotesDivBtn">
                          <div class="AddNotesDivBtn1">
                            <button class="FoundErrorBtn AddNotesDivbutton" type="button">Cancel</button>
                          </div>
                          <button class="FoundErrorBtn AddNotesDivbutton AddNotesDivbuttonBlue "
                            type="submit">Save</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- Info-tab -->
            <!-- Reviews-Tab -->
            <div class="tab-pane fade Reviews-Tab " id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">
              <div>
                <!-- ReviewHead TABS -->
                <div class="Review">
                  <div class="ReviewAnstab">
                    <label class="ReviewAnslable" title="With answers">
                      <input class="ReviewAnsInput" type="checkbox" value="">
                      <span class="ReviewAnsSpan">With answers</span>
                    </label>
                  </div>
                  <div class="tab ReviewAnstab ">
                    <ul class="nav nav-tabs " id="myTab" role="tablist">
                      <li class="nav-item All-tab ">
                        <a class="nav-link  active" id="All-tab" data-toggle="tab" href="#All" role="tab"
                          aria-controls="All" aria-selected="true">All</a>
                      </li>
                      <li class="nav-item Positive-tab">
                        <a class="nav-link " id="Positive-tab" data-toggle="tab" href="#Positive" role="tab"
                          aria-controls="Positive" aria-selected="false">Positive</a>
                      </li>
                      <li class="nav-item  Negative-tab">
                        <a class="nav-link" id="Negative-tab" data-toggle="tab" href="#Negative" role="tab"
                          aria-controls="Negative" aria-selected="false">Negative</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- ReviewHead TABS -->
                <div class="reviewRatings">
                  <div class="rattinggroup">
                    <div class="starboxmaindiv color-yellow">
                      <div class="star-rating">
                        <input id="star-101" type="radio" name="rating-101" value="star-101">
                        <label for="star-101" title="4 stars">
                          <i class="active fa fa-star" aria-hidden="true"></i>
                        </label>
                        <input id="star-102" type="radio" name="rating-102" value="star-102">
                        <label for="star-102" title="3 stars">
                          <i class="active fa fa-star" aria-hidden="true"></i>
                        </label>
                        <input id="star-103" type="radio" name="rating-103" value="star-103">
                        <label for="star-103" title="2 stars">
                          <i class="active fa fa-star" aria-hidden="true"></i>
                        </label>
                        <input id="star-104" type="radio" name="rating-104" value="star-104">
                        <label for="star-104" title="1 star">
                          <i class="active fa fa-star" aria-hidden="true"></i>
                        </label>
                        <input id="star-105" type="radio" name="rating-105" value="star-105">
                        <label for="star-105" title="1 star">
                          <i class="active fa fa-star" aria-hidden="true"></i>
                        </label>
                      </div>
                      <div class="ratting">
                        <p>3/5</p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- OverflowTab -->
                <div class="tab-content OverflowTab" id="myTabContent">
                  <div class="tab-pane fade   All-tab-content active show allreviews_in" id="All" role="tabpanel"
                    aria-labelledby="All-tab">';
                     if(isset($rows)){ 
                    $html.='<div class="All-tab-div">
                      <div class="reviewHeadRating">
                        <div class="reviewHeadRatingDiv1">
                          <div class="reviewHeadRatingDiv12">
                            <div class="clientImageSmall">
                              <div class="clientSmallImg" style=" width: 100%;
                            height: 100%;
                            max-width: 100%;
                            max-height: 100%;
                            background-image: url(./uploads/users/'.$_SESSION['users']['profile_pic'].');
                            border-radius: 0px;"></div>
                            </div>
                            <div class="ClientNameReview">
                              <span class="ClientNameReviewSpan">
                                <span class="ClientNameReviewSpan1">
                                  ​<span class="ClientNameOne">'.$firstname.' '.$lastname.' </span>
                                </span>
                                <span class="ClientNameReviewSpan1">
                                  ​<span class="ClientReviewOne">'.count($rows).' review</span>
                                </span>
                              </span>
                              <div class="ClientReviewdate">'.date('D M Y H:i:s').'</div>
                            </div>
                          </div>
                          <div class="rattinggroup">
                            <div class="starboxmaindiv color-yellow">
                              <div class="star-rating">
                                <input id="star-101" type="radio" name="rating-101" value="star-101">
                                <label for="star-101" title="4 stars">
                                  <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="star-102" type="radio" name="rating-102" value="star-102">
                                <label for="star-102" title="3 stars">
                                  <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="star-103" type="radio" name="rating-103" value="star-103">
                                <label for="star-103" title="2 stars">
                                  <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="star-104" type="radio" name="rating-104" value="star-104">
                                <label for="star-104" title="1 star">
                                  <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="star-105" type="radio" name="rating-105" value="star-105">
                                <label for="star-105" title="1 star">
                                  <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="reviewHeadRating">
                        <div class="reviewBodyReview">
                          <a class="reviewBodyReviewOne">'.$rows['message'].'</a>
                        </div>
                        <div class="reviewFooter">
                          <div class="reviewFooterDiv">
                            <div class="reviewFooterInnerDivs">
                              <button class="reviewFooterBtn">
                                <div class="reviewFooterBTNImg">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                      d="M14 9l.31-2.47a2 2 0 0 0-1.24-2.1L12 4a10.76 10.76 0 0 1-4 5v9l7.35.74a3 3 0 0 0 3.23-2.34L20 10zM5 18h2L6 9H5v9z">
                                    </path>
                                  </svg>
                                </div>
                                <div class="reviewFooterBTNtext">Useful</div>
                                <div class="reviewFooterBTNCount">0</div>
                              </button>
                            </div>
                            <div class="reviewFooterInnerDivs">
                              <div class="CautionSign">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="#929292">
                                  <path
                                    d="M20.23 16L13.72 4.93a2 2 0 0 0-3.44 0L3.77 16a2 2 0 0 0 1.73 3h13a2 2 0 0 0 1.73-3zM11 16l.5-2h1l.5 2zm1.5-3h-1L11 8h2z">
                                  </path>
                                </svg>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>';
					 }
                  $html.='</div>
                  <!-- Positive-tab-content -->
                  <div class="tab-pane fade Positive-tab-content " id="Positive" role="tabpanel"
                    aria-labelledby="Positive-tab">
                    <!-- review One -->
                    <div class="All-tab-div">
                      <div class="reviewHeadRating">
                        <div class="reviewHeadRatingDiv1">
                          <div class="reviewHeadRatingDiv12">
                            <div class="clientImageSmall">
                              <div class="clientSmallImg" style=" width: 100%;
                          height: 100%;
                          max-width: 100%;
                          max-height: 100%;
                          background-image: url(./assets/img/user1.png);
                          border-radius: 0px;"></div>
                            </div>
                            <div class="ClientNameReview">
                              <span class="ClientNameReviewSpan">
                                <span class="ClientNameReviewSpan1">
                                  ​<span class="ClientNameOne" title="VIP HIJAMA WITH EXPERT">VIP HIJAMA WITH
                                    EXPERT</span>
                                </span>
                                <span class="ClientNameReviewSpan1">
                                  ​<span class="ClientReviewOne">6 review</span>
                                </span>
                              </span>
                              <div class="ClientReviewdate">11 July 2022</div>
                            </div>
                          </div>
                          <div class="rattinggroup">
                            <div class="starboxmaindiv color-yellow">
                              <div class="star-rating">
                                <input id="star-101" type="radio" name="rating-101" value="star-101">
                                <label for="star-101" title="4 stars">
                                  <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="star-102" type="radio" name="rating-102" value="star-102">
                                <label for="star-102" title="3 stars">
                                  <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="star-103" type="radio" name="rating-103" value="star-103">
                                <label for="star-103" title="2 stars">
                                  <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="star-104" type="radio" name="rating-104" value="star-104">
                                <label for="star-104" title="1 star">
                                  <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="star-105" type="radio" name="rating-105" value="star-105">
                                <label for="star-105" title="1 star">
                                  <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="reviewHeadRating">
                        <div class="reviewBodyReview">
                          <a class="reviewBodyReviewOne">8kjjjk999j99j9j999j.ij9j99j9joii9j99jjjjjj9</a>
                        </div>
                        <div class="reviewFooter">
                          <div class="reviewFooterDiv">
                            <div class="reviewFooterInnerDivs">
                              <button class="reviewFooterBtn">
                                <div class="reviewFooterBTNImg">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                      d="M14 9l.31-2.47a2 2 0 0 0-1.24-2.1L12 4a10.76 10.76 0 0 1-4 5v9l7.35.74a3 3 0 0 0 3.23-2.34L20 10zM5 18h2L6 9H5v9z">
                                    </path>
                                  </svg>
                                </div>
                                <div class="reviewFooterBTNtext">Useful</div>
                                <div class="reviewFooterBTNCount">0</div>
                              </button>
                            </div>
                            <div class="reviewFooterInnerDivs">
                              <div class="CautionSign">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="#929292">
                                  <path
                                    d="M20.23 16L13.72 4.93a2 2 0 0 0-3.44 0L3.77 16a2 2 0 0 0 1.73 3h13a2 2 0 0 0 1.73-3zM11 16l.5-2h1l.5 2zm1.5-3h-1L11 8h2z">
                                  </path>
                                </svg>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- review One -->
                  </div>
                  <!-- Positive-tab-content -->
                  <!-- Negative-tab-content -->
                  <div class="tab-pane fade Negative-tab-content " id="Negative" role="tabpanel"
                    aria-labelledby="Negative-tab">
                    <!-- review Two -->
                    <div class="All-tab-div">
                      <!-- reviewHeadRating -->
                      <div class="reviewHeadRating">
                        <div class="reviewHeadRatingDiv1">
                          <div class="reviewHeadRatingDiv12">
                            <div class="clientImageSmall">
                              <div class="clientSmallImg" style=" width: 100%;
                            height: 100%;
                            max-width: 100%;
                            max-height: 100%;
                            background-image: url(./assets/img/user1.png);
                            border-radius: 0px;"></div>
                            </div>
                            <div class="ClientNameReview">
                              <span class="ClientNameReviewSpan">
                                <span class="ClientNameReviewSpan1">
                                  ​<span class="ClientNameOne" title="JAKIR HUSSAIN-2011">JAKIR HUSSAIN-2011</span>
                                </span>
                                <span class="ClientNameReviewSpan1">
                                  ​<span class="ClientReviewOne">1 review</span>
                                </span>
                              </span>
                              <div class="ClientReviewdate">31 July 2022</div>
                            </div>
                          </div>
                          <div class="rattinggroup">
                            <div class="starboxmaindiv color-yellow">
                              <div class="star-rating">
                                <input id="star-101" type="radio" name="rating-101" value="star-101">
                                <label for="star-101" title="4 stars">
                                  <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="star-102" type="radio" name="rating-102" value="star-102">
                                <label for="star-102" title="3 stars">
                                  <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="star-103" type="radio" name="rating-103" value="star-103">
                                <label for="star-103" title="2 stars">
                                  <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="star-104" type="radio" name="rating-104" value="star-104">
                                <label for="star-104" title="1 star">
                                  <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="star-105" type="radio" name="rating-105" value="star-105">
                                <label for="star-105" title="1 star">
                                  <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- reviewHeadRating -->
                      <!-- reviewHeadRating -->
                      <div class="reviewHeadRating">
                        <div class="reviewBodyReview">
                          <a class="reviewBodyReviewOne">8kjjjk999j99j9j999j.ij9j99j9joii9j99jjjjjj9</a>
                        </div>
                        <div class="reviewFooter">
                          <div class="reviewFooterDiv">
                            <div class="reviewFooterInnerDivs">
                              <button class="reviewFooterBtn">
                                <div class="reviewFooterBTNImg">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                      d="M14 9l.31-2.47a2 2 0 0 0-1.24-2.1L12 4a10.76 10.76 0 0 1-4 5v9l7.35.74a3 3 0 0 0 3.23-2.34L20 10zM5 18h2L6 9H5v9z">
                                    </path>
                                  </svg>
                                </div>
                                <div class="reviewFooterBTNtext">Useful</div>
                                <div class="reviewFooterBTNCount">0</div>
                              </button>
                            </div>
                            <div class="reviewFooterInnerDivs">
                              <div class="CautionSign">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="#929292">
                                  <path
                                    d="M20.23 16L13.72 4.93a2 2 0 0 0-3.44 0L3.77 16a2 2 0 0 0 1.73 3h13a2 2 0 0 0 1.73-3zM11 16l.5-2h1l.5 2zm1.5-3h-1L11 8h2z">
                                  </path>
                                </svg>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- reviewHeadRating -->
                    </div>
                    <!-- review Two -->
                  </div>
                  <!-- Negative-tab-content -->
                </div>
                <!-- OverflowTab -->
                <!-- NewReviewDiv -->
                <div class="NewReviewDiv">
                  <div>';
				  if($results->num_rows == 0) {
                    $html.='<button class="NewReviewDivBtn addreviewBtn" type="button" data-index="'.$row['osmid'].'" id="'.trim($row['restaurantname'],'"').'">Write a new review</button>';
				  }else{
                    $html.='<button class="NewReviewDivBtn editreviewBtn" type="button" data-index="'.$row['osmid'].'" id="'.trim($row['restaurantname'],'"').'">Edit review</button>';
				  }
			   $html.='</div>
                </div>
                <!-- NewReviewDiv -->
              </div>
            </div>
            <!-- Reviews-Tab -->
          </div>
          <!-- tabmaindiv -->
        </div>
        <!-- scrollbar -->
      </div>';	
	  
	  echo $html;die;
	
}

?>
