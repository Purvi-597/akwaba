<?php
error_reporting(0);
session_start();
include('config/db_mysql.php');
if(isset($_REQUEST['futured']) && ($_REQUEST['futured'] == 'futuredForm')){
$id = $_REQUEST['id'];
$featuresql = "SELECT * FROM `featured_places` WHERE `status` = '1' and id =".$id;
$results = $conn->query($featuresql);

if($results->num_rows > 0) {
	$rows = $results->fetch_assoc();
	$image = 'akwaba/uploads/featured/'.$rows['image'];
	$title = $rows['title'];
	$description = $rows['description'];
}
 
$sql = "SELECT * FROM `featured_places_list` WHERE `status` = '1' and featured_places_id =".$id; 
$result = $conn->query($sql);
if($result->num_rows > 0) {
	$Data = [];
	while($row = $result->fetch_assoc()) {
		$Data[] = $row;
		$coordinates = array('0'=>(float)$row['latitude'], '1'=>(float)$row['longitude']);
		$futuredLatLong[] = array('type'=>'Point', 'coordinates'=>$coordinates);
	}
	$latlong = json_encode($futuredLatLong);
	
}

$image = "assets/img/feature-image.png";
$html = '';
$html .= '<div class="restaurantdetilsbox" style="background-image: url('.$image.');">
          <div class="imagesandcontain">
            <div class="image-heading">
              <h2 class="image-heading-h2">Michelin-starred Restaurants: from French to Cantonese</h2>
              <p class="image-heading-p">The 2022 selection of the Michelin Guide Dubai is the the first-ever edition of
                the Michelin Guide in Middle East. Dubai is now home to a pair of two-star restaurants and nine one-star
                restaurants.</p>
            </div>
          </div>
        </div>
		<div class="info-card categories-icons-section">';
		foreach($Data as $res) {
	$html .= '<div class="row padding-section">
              <div class="col-md-12">
                <img src="../akwaba/uploads/featuredlist/'.$res['image'].'" class="img-fluid" alt="">
              </div>
              <div class="col-md-12 single-feature">
                <div class="d-lg-flex d-block d-md-flex ">
                  <div class="lh-1">
                    <a href="#" class="feature-h4">'.$res['title'].'</span>
                    </a>
                    <br>
                    <span class="feature-span">
                      <span class="one">​Tasca by José Avillez</span>
                      <span class="two">​restaurant</span>
                    </span>
                  </div>
                  <div class="icon-right">
                    <div class="star-rating">
                      <input id="star-25" type="radio" name="rating-25" value="star-25">
                      <label for="star-25" title="4 stars">
                        <i class="active fa fa-star" aria-hidden="true"></i>
                      </label>
                      <input id="star-26" type="radio" name="rating-26" value="star-26">
                      <label for="star-26" title="3 stars">
                        <i class="active fa fa-star" aria-hidden="true"></i>
                      </label>
                      <input id="star-27" type="radio" name="rating-27" value="star-27">
                      <label for="star-27" title="2 stars">
                        <i class="active fa fa-star" aria-hidden="true"></i>
                      </label>
                      <input id="star-28" type="radio" name="rating-28" value="star-28">
                      <label for="star-28" title="1 star">
                        <i class="active fa fa-star" aria-hidden="true"></i>
                      </label>
                      <input id="star-29" type="radio" name="rating-29" value="star-29">
                      <label for="star-29" title="1 star">
                        <i class="active fa fa-star" aria-hidden="true"></i>
                      </label>
                    </div>
                    <div class="star-rating-count">
                      <span class="star-rating-count-number">'.$res['ratings'].'</span>
                    </div>
                  </div>
                </div>
                <a class="btn p-0 toggle-btn">
                  <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
                <div class="features-overflow">
                  <p class="feature-p mb-0">'.$res['description'].'</p>
                </div>
                <div class="features-span2">
                  <span class="feature-span">
                    <span class="one">​Mandarin Oriental Hotel</span>
                    <span class="two">​1, 75a Street</span> <br>
                    <span class="three">​​Jumeirah 1, Jumeirah, Dubai</span>
                  </span>
                </div>
              </div>
            </div>';
		}
		$html.='</div>';
   echo $html."|".$latlong;die;

}

?>
