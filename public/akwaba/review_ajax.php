<?php
error_reporting(0);session_start();
include('config/db_pg.php');
include('config/db_mysql.php');

$id = $_REQUEST['osmids'];
$userid = $_REQUEST['session_id'];
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

$array_images = array();
$array_name = "";


for ($i = 0; $i < count($_FILES['file_review']['name']); $i++) {
    $newfilename = "image_". rand();
    $extension   = pathinfo($_FILES['file_review']['name'][$i], PATHINFO_EXTENSION);
    $basename    = $newfilename . "." . $extension;
    $file1       = $_FILES['file_review']['name'][$i];
    $target_path = "../uploads/review/". $basename;
    $array_images[] = $basename;
    move_uploaded_file($_FILES['file_review']['tmp_name'][$i], $target_path);

}
$array_name = implode(",",$array_images);
// echo "<pre>"; print_r($array_images);die;

$sql = "INSERT INTO review_rating (user_id, osm_id, title, message, rating, photos, status, created_at, updated_at) VALUES ('".$userid."', '".$id."', '".$name."', '".$message."', '".$rating."', '".$array_name."', '1', '".$created_at."', '".$updated_at."')";

$result = mysqli_query($conn, $sql);

		if ($result) {
      //$last_insert_id = $conn->insert_id;
      
			  $html = '';
              if($_SESSION['users']){
                if(!empty($_SESSION['users']['profile_pic'])){
                    $background_image = '../public/uploads/users/'.$_SESSION['users']['profile_pic'];
                }else{
                    $background_image = 'background-image: url(./assets/img/user1.png);';
                }
               
              }else{
                $background_image = 'background-image: url(./assets/img/user1.png);';
              }
              $html .='<div class="All-tab-div">
              <div class="reviewHeadRating">
                <div class="reviewHeadRatingDiv1">
                  <div class="reviewHeadRatingDiv12">
                    <div class="clientImageSmall">
                      <div class="clientSmallImg" style=" width: 100%;
                    height: 100%;
                    max-width: 100%;
                    max-height: 100%;'.$background_image.'               
                    border-radius: 0px;"></div>
                    </div>
                    <div class="ClientNameReview">
                      <span class="ClientNameReviewSpan">
                        <span class="ClientNameReviewSpan1">
                          ​<span class="ClientNameOne" title="">'.$firstname.' '.$lastname.'</span>
                        </span>
                        <span class="ClientNameReviewSpan1">
                          ​<span class="ClientReviewOne"></span>
                        </span>
                      </span>
                      <div class="ClientReviewdate">'.$created_at.'</div>
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
                        </labl>
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
                  <a class="reviewBodyReviewOne">'.$message.'</a>
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
			//   $html .='<div class="col-lg-12 col-12 inner-padding">
            //               <div class="d-lg-flex d-block d-md-flex align-items-lg-center">';
			// 			  if(isset($_SESSION['users']['profile_pic'])){
            //                 $html.='<img src="../public/uploads/users/'.$_SESSION['users']['profile_pic'].'" alt="..." class="user-profile-image rounded-circle ">';
			// 			  }else{
			// 				$html.='<img src="./assets/img/user1.png" alt="..." class="user-profile-image rounded-circle ">';
			// 			  }  
            //                $html.='<div class="lh-1">
            //                 <div class="lh-1">
            //                   <span class="code-profile">'.$firstname.' '.$lastname.'</span> <br>
            //                    <span class="code-deatils">'.date("D M Y H:i:s").'</span>
            //                 </div>
            //                 <div class="icon-right">
            //                   <div class="star-rating">
            //                     <input id="star-25" type="radio" name="rating-25" value="star-25" />
            //                     <label for="star-25" title="4 stars">
            //                       <i class="active fa fa-star" aria-hidden="true"></i>
            //                     </label>
            //                     <input id="star-26" type="radio" name="rating-26" value="star-26" />
            //                     <label for="star-26" title="3 stars">
            //                       <i class="active fa fa-star" aria-hidden="true"></i>
            //                     </label>
            //                     <input id="star-27" type="radio" name="rating-27" value="star-27" />
            //                     <label for="star-27" title="2 stars">
            //                       <i class="active fa fa-star" aria-hidden="true"></i>
            //                     </label>
            //                     <input id="star-28" type="radio" name="rating-28" value="star-28" />
            //                     <label for="star-28" title="1 star">
            //                       <i class="active fa fa-star" aria-hidden="true"></i>
            //                     </label>
            //                   </div>
            //                 </div>
            //               </div>
            //               <p class="code-data mb-0">'.$message.'</p>
			// 			<div class="lh-2">
            //              <a href="#">
            //               <span class="code-likes">
            //                 <img src="./assets/img/icons/like.svg" class="img-fluid like-btn" alt="">
            //                 Like
            //               </span>
            //              </a>
            //              <a href="#">
            //                 <span class="code-likes pl-2 float-right">
            //                   <img src="./assets/img/icons/flag.svg" class="img-fluid" alt="">
            //                 </span>
            //              </a>
            //               </div>
            //             </div>';
			echo $html;die;			
			  
		} else {
			  echo "false";die;
		}


?>
