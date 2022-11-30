<?php
error_reporting(0);
session_start();
include('layout/head.php');
include('config/db_mysql.php');
include('config/db_pg.php');
//echo "<pre>";
//print_r($_SESSION['users']);die;
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

/* Home Category */
$category = "SELECT * FROM `categories` WHERE `status` = '1' and deleted_at IS NULL LIMIT 5";
$cat_result = $conn->query($category);

$place_advertisement = $conn->query("SELECT * FROM `place_advertisement` WHERE `status` = '1' and deleted_at IS NULL order by id desc limit 1");
$place_advertisement_result = $place_advertisement->fetch_assoc();

if($cat_result->num_rows > 0) {
	$categoryData = [];
  $i=0;
	while($rows = $cat_result->fetch_assoc()) {
    if($i == 3){

      $categoryData[$i]['id'] = $place_advertisement_result['osm_id'];
      $categoryData[$i]['image'] = "../public/uploads/place_advertisement/".$place_advertisement_result['image'];
      $categoryData[$i]['display_name'] = $place_advertisement_result['place_name'];
      $categoryData[$i]['add'] = 'true';
    }
    $rows['image'] = "../public/uploads/categories/".$rows['image'];
    $categoryData[] = $rows;
    $i++;
	}

}

/* More Category */
$more_category = "SELECT * FROM `categories` WHERE `status` = '1' and deleted_at IS NULL";
$more_cat_result = $conn->query($more_category);
if($more_cat_result->num_rows > 0) {
	$morecategoryData = [];
	while($mrows = $more_cat_result->fetch_assoc()) {
		$morecategoryData[] = $mrows;
	}
}

$feature_text = "SELECT * FROM `featured_text` WHERE `status` = '1' and deleted_at IS NULL";
$feature_text_result = $conn->query($feature_text);
if($feature_text_result->num_rows > 0) {
	$ftrows = $feature_text_result->fetch_assoc();
	$title = isset($ftrows['title'])?$ftrows['title']:"";
	$description = isset($ftrows['description'])?$ftrows['description']:"";
}
$feature = "SELECT * FROM `featured_places` WHERE `status` = '1' and deleted_at IS NULL";
$feature_result = $conn->query($feature);
if($feature_result->num_rows > 0) {
	$featureData = [];
	while($frows = $feature_result->fetch_assoc()) {
		$featureData[] = $frows;
	}
}

$advertisement = "SELECT * FROM `advertisement` WHERE `status` = '1' and deleted_at IS NULL";
$advertisement_result = $conn->query($advertisement);
if($advertisement_result->num_rows > 0) {
	$advertisementData = [];
	while($Arows = $advertisement_result->fetch_assoc()) {
		$advertisementData[] = $Arows;
	}
}else{
	$advertisementData  = array();
}

if(isset($_SESSION['users']['id'])){

	$favorites = "SELECT * FROM `favorites` WHERE `status` = '1' and user_id = ".$_SESSION['users']['id']." and deleted_at IS NULL";
	$favorites_result = $conn->query($favorites);
	if($favorites_result->num_rows > 0) {
		$fcount = $favorites_result->num_rows;
		$favoritesData = [];
		while($Arows = $favorites_result->fetch_assoc()) {
			$favoritesData[] = $Arows;
		}
	}else{
		$fcount = 0;
		$favoritesData  = array();
	}

}
if(isset($_SESSION['users']['id'])){

	$review = "SELECT review_rating.*,first_name,last_name,profile_pic
				FROM `review_rating`
				LEFT JOIN users ON users.id = review_rating.user_id
				WHERE review_rating.`status` = '1' and review_rating.deleted_at IS NULL";

	$review_result = $conn->query($review);
	if($review_result->num_rows > 0) {
		$rcount = $review_result->num_rows;
		$reviewData = [];
		while($Rrows = $review_result->fetch_assoc()) {
			$reviewData[] = $Rrows;
			$reviewPhoto[] = explode(",",$Rrows['photos']);

		}
	}else{
		$rcount = 0;
		$reviewData  = array();
	}

}

?>

<body>
  <!-- Map Display Section-->
  <section>
    <div class="map-screen">
	 <div id="map"></div>
    </div>
  </section>
  <div class="right-panel"  data-simplebar style="display: none;">
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
                <a href="javascript:void(0);" class="detail-list-btn" id="add_company" data-toggle="modal" data-target="#addcompanyModalCenter">Add company</a>
              </div>
            </li>
            <li class="details-list pl-76">
              <div class="detail-list-name">
               <a href="javascript:void(0);" class="detail-list-btn" id="add_advertising" data-toggle="modal" data-target="#addAdvertisingModel">Advertising</p>
              </div>
            </li>
          </ul>
          <ul class="details-one">
            <li class="details-list py4">
              <div class="detail-list-image">
                <img src="assets/img/icons/ic_feedback.svg">
              </div>
              <div class="detail-list-name">
                <p class="detail-list-btn"><a href="javascript:void(0)" data-toggle="modal" data-target="#FeedbackModel" data-whatever="@mdo">Feedback</a></p>
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


    </div>

<!-- My place Sidebar -->
<?php

if(isset($_SESSION['users'])) {


	?>
<div class="left-panel left-scroll after_login favoriteDiv" id="style-2"  style="display: none;">
      <div class="closeiconleftpanel" id="favoritecloseBtn">
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
              <span class="Username"><?= isset($_SESSION['users']['firstname'])?$_SESSION['users']['firstname']:"";?>  <?= isset($_SESSION['users']['lastname'])?$_SESSION['users']['lastname']:"";?></span>
              <span class="Useremail"><?= isset($_SESSION['users']['email'])?$_SESSION['users']['email']:"";?></span>
            </div>
			<?php
				$firstName = substr($_SESSION['users']['firstname'], 0, 1);
				$lastName = substr($_SESSION['users']['lastname'], 0, 1);
				$name = strtoupper($firstName.''.$lastName);
			?>
            <div class="usericon">
              <?php if(empty($_SESSION['users']['profile_pic'])){ ?>
              <a class="" href="javascript:void(0);">
                <div>
                  <p class="username"><?=$name?></p>
                </div>
              </a>
			<?php }else{ ?>
			<a class="" href="javascript:void(0);">
                <div>
                  <p class="username"><img src="../public/uploads/users/<?= $_SESSION['users']['profile_pic'] ?>" alt="Profile picture"></p>
                </div>
              </a>
			<?php } ?>
            </div>
          </div>

          <div class="signout-user">
            <div class="signout-btns">
              <div class="editprofile-btns">
                <a href="javascript:void(0);" data-toggle="modal" data-target="#editProfile" data-whatever="@mdo">
                 <img src="assets/img/icons/ic_edit.svg" width="24" height="24"/>
                </a>
              </div>

              <div class="editprofile-btns">
                <a href="logout.php">
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
                <li class="nav-item "><a href="#tab2" class="nav-link active" role="tab" data-toggle="tab">Favorites</a></li>
                <li class="nav-item "><a href="#tab4" class="nav-link" role="tab" data-toggle="tab">Reviews</a></li>
                <li class="nav-item "><a href="#tab5" class="nav-link" role="tab" data-toggle="tab">Photos</a></li>
                <li class="nav-item "><a href="#tab6" class="nav-link" role="tab" data-toggle="tab">Corrections</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">


                <!-- Favorites -->
                <div role="tabpanel" class="tab-pane active" id="tab2">
                  <div class="Favorites-details">
                    <div class="Favorites-one">
                      <div class="details-one">
                        <div class="menu-list">
                          <div class="menu-list-image">
                            <img src="assets/img/icons/ic_my_places.svg">
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
                            <img src="assets/img/icons/ic_company.svg">
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

					<?php if($fcount > 0){ ?>
					<div class="Favorites-one Favorites-one-pencil  p-relative">
                        <div class="details-one">
                          <div class="menu-list">
                            <div class="menu-list-image">
                              <img src="assets/img/icons/ic_favourites.svg">
                            </div>
                            <p class="Favoritesname">Favorites</p>
                          </div>

                          <div class="menu-list1">
                            <div class="menu-list1_1">
                              <a class="">
                                <span class="Favoritessubname"><?= isset($fcount)?$fcount:"0";?> Places</span>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
					<?php } ?>
                  </div>
                </div>
                <!-- Favorites -->

                <!-- Reviews -->
				<div role="tabpanel" class="tab-pane" id="tab4">
                    <div class="Reviews-details">
					<?php
						if(count($reviewData) > 0){
						foreach($reviewData as $rev_res){ ?>
                      <div class="All-tab-div">
                        <div class="reviewHeadRating">
                          <div class="reviewHeadRatingDiv1">
                            <div class="reviewHeadRatingDiv12">
                              <div class="clientImageSmall">
                                <div class="clientSmallImg" style=" width: 100%;
                              height: 100%;
                              max-width: 100%;
                              max-height: 100%;
                              background-image: url(../public/uploads/users/<?=$rev_res['profile_pic']?>);
                              border-radius: 0px;"></div>
                              </div>
                              <div class="ClientNameReview">
                                <span class="ClientNameReviewSpan">
                                  <span class="ClientNameReviewSpan1">
                                    ​<span class="ClientNameOne" title="JAKIR HUSSAIN-2011"><?=$rev_res['first_name']?> <?=$rev_res['last_name']?></span>
                                  </span>

                                </span>
                                <div class="ClientReviewdate"><?=date("D M Y", strtotime($rev_res['created_at']))?></div>
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

                          <div class="CityName"><?= $rev_res['title'] ?></div>

                        </div>

                        <div class="reviewHeadRating">
                          <div class="reviewBodyReview">
                            <a class="reviewBodyReviewOne"><?= $rev_res['message'] ?></a>
                          </div>

                          <div class="reviewFooter">
                            <div class="reviewFooterDiv">
                              <div class="reviewFooterInnerDivs">
                                <button class="LikeCount" disabled="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                      d="M14 9l.31-2.47a2 2 0 0 0-1.24-2.1L12 4a10.76 10.76 0 0 1-4 5v9l7.35.74a3 3 0 0 0 3.23-2.34L20 10zM5 18h2L6 9H5v9z">
                                    </path>
                                  </svg>
                                  <span class="LikeViewCount">0</span>
                                </button>
                                <div class="ViewCount">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor" fill-rule="evenodd"
                                      d="M12 7c2.667 0 5.333 1.667 8 5l-.267.328C17.156 15.443 14.578 17 12 17c-2.667 0-5.333-1.667-8-5 2.667-3.333 5.333-5 8-5zm0 2c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zm1 2v2h-2v-2h2z">
                                    </path>
                                  </svg>
                                  <span class="LikeViewCount">0</span>
                                </div>
                              </div>

                              <div class="reviewFooterInnerDivs">
                                <div class="ChangeDeleteBtn">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="#929292">
                                    <path
                                      d="M16 5l-1 1.001 3 3 1.001-1v-1L17 5h-1zM6 15.001l-1 3V19h1l3-.999L17 10l-3-2.999-8 8z">
                                    </path>
                                  </svg>
                                  <div class="ChangeDeleteName">Change</div>
                                </div>

                                <div class="ChangeDeleteBtn">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="#929292"
                                      d="M6.85 18.17a2 2 0 0 0 2 1.83h6.32a2 2 0 0 0 2-1.83L18 8H6zM15 5l-1-1h-4L9 5 5 6v1h14V6l-4-1z">
                                    </path>
                                  </svg>
                                  <div class="ChangeDeleteName">Delete</div>
                                </div>



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
						<?php }} ?>
					</div>
                  </div>




                <!-- Reviews -->

                <!-- Photos -->
				 <div role="tabpanel" class="tab-pane" id="tab5">
                  <section class="img-gallery-magnific">
				  <?php for($i=0;$i<count($reviewPhoto);$i++){
						for($j=0;$j<count($reviewPhoto[$i]);$j++){?>
                    <div class="magnific-img">
                      <a class="image-popup-vertical-fit" href="../public/uploads/review/<?=$reviewPhoto[$i][$j]?>" title="<?=$reviewPhoto[$i][$j]?>">
                        <img src="../public/uploads/review/<?=$reviewPhoto[$i][$j]?>" alt="<?=$reviewPhoto[$i][$j]?>" />
                      </a>
                    </div>
					<?php }} ?>
                   </section>
                  <div class="clear"></div>
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

	  <div class="extrapart extrapartFavorites favoriteSidebar"  style="display: none;">

        </div>

<!--      <div class="extrapart extrapartAchivment" data-simplebar >
        <div class="info-card Achivment-icons-section">
          <div class="achivemntOne">
            <div class="achivemntImage">
              <div class="Image">
                <div class="InnerImage" style="width: 92px;
                height: 92px;
                border-radius: 0px;">
                 <img src="./assets/img/Image1.png" alt="">
                </div>
               </div>


            </div>
            <div class="imageContent">
              Menuger
            </div>
            <div class="imageContent2">How do you become a productive menuger? Step 1: find 5 places in the Eat Out category that have nothing in the Menu/Prices tab. Step 2: add your photo of the menu to that tab. And enjoy the success!</div>
            <div class="Counter"><span >0 of 5</span></div>

          </div>

          <div class="achivemntOne">
            <div class="achivemntImage">
              <div class="Image">
                <div class="InnerImage" style="width: 92px;
                height: 92px;
                border-radius: 0px;">
                 <img src="./assets/img/Image1.png" alt="">
                </div>
               </div>


            </div>
            <div class="imageContent">
              Menuger
            </div>
            <div class="imageContent2">How do you become a productive menuger? Step 1: find 5 places in the Eat Out category that have nothing in the Menu/Prices tab. Step 2: add your photo of the menu to that tab. And enjoy the success!</div>
            <div class="Counter"><span >0 of 5</span></div>

          </div>

          <div class="achivemntOne">
            <div class="achivemntImage">
              <div class="Image">
                <div class="InnerImage" style="width: 92px;
                height: 92px;
                border-radius: 0px;">
                 <img src="./assets/img/Image1.png" alt="">
                </div>
               </div>


            </div>
            <div class="imageContent">
              Menuger
            </div>
            <div class="imageContent2">How do you become a productive menuger? Step 1: find 5 places in the Eat Out category that have nothing in the Menu/Prices tab. Step 2: add your photo of the menu to that tab. And enjoy the success!</div>
            <div class="Counter"><span >0 of 5</span></div>

          </div>

          <div class="achivemntOne">
            <div class="achivemntImage">
              <div class="Image">
                <div class="InnerImage" style="width: 92px;
                height: 92px;
                border-radius: 0px;">
                 <img src="./assets/img/Image1.png" alt="">
                </div>
               </div>


            </div>
            <div class="imageContent">
              Menuger
            </div>
            <div class="imageContent2">How do you become a productive menuger? Step 1: find 5 places in the Eat Out category that have nothing in the Menu/Prices tab. Step 2: add your photo of the menu to that tab. And enjoy the success!</div>
            <div class="Counter"><span >0 of 5</span></div>

          </div>

          <div class="achivemntOne">
            <div class="achivemntImage">
              <div class="Image">
                <div class="InnerImage" style="width: 92px;
                height: 92px;
                border-radius: 0px;">
                 <img src="./assets/img/Image1.png" alt="">
                </div>
               </div>


            </div>
            <div class="imageContent">
              Menuger
            </div>
            <div class="imageContent2">How do you become a productive menuger? Step 1: find 5 places in the Eat Out category that have nothing in the Menu/Prices tab. Step 2: add your photo of the menu to that tab. And enjoy the success!</div>
            <div class="Counter"><span >0 of 5</span></div>

          </div>

          <div class="achivemntOne">
            <div class="achivemntImage">
              <div class="Image">
                <div class="InnerImage" style="width: 92px;
                height: 92px;
                border-radius: 0px;">
                 <img src="./assets/img/Image1.png" alt="">
                </div>
               </div>


            </div>
            <div class="imageContent">
              Menuger
            </div>
            <div class="imageContent2">How do you become a productive menuger? Step 1: find 5 places in the Eat Out category that have nothing in the Menu/Prices tab. Step 2: add your photo of the menu to that tab. And enjoy the success!</div>
            <div class="Counter"><span >0 of 5</span></div>

          </div>

          <div class="achivemntOne">
            <div class="achivemntImage">
              <div class="Image">
                <div class="InnerImage" style="width: 92px;
                height: 92px;
                border-radius: 0px;">
                 <img src="./assets/img/Image1.png" alt="">
                </div>
               </div>


            </div>
            <div class="imageContent">
              Menuger
            </div>
            <div class="imageContent2">How do you become a productive menuger? Step 1: find 5 places in the Eat Out category that have nothing in the Menu/Prices tab. Step 2: add your photo of the menu to that tab. And enjoy the success!</div>
            <div class="Counter"><span >0 of 5</span></div>

          </div>

        </div>
      </div>-->
    </div>
<?php } ?>

  <!-- Home Sidebar Section-->
  <section>
    <div class="left-panel left-scroll indexDiv" id="style-2" >
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
        $s=1;
			foreach($categoryData as $rows){ ?>
              <div class="col-md-3 text-center iconcol">
                <a href="javascript:void(0);" class="iconATag">
                  <div class="categories-icon icon-<?=$s?>" id="iconBtn" data-id="Yes" data-index="<?=$rows['id']?>" data-type="<?=$rows['add']?>">
                    <img src="<?=$rows['image']?>" alt="<?=$rows['image']?>">
                  </div>
                  <p class="categories-name"><?=$rows['display_name']?></p>
                </a>
              </div>
			<?php $s++; } ?>
              <div class="col-md-3 text-center iconcol">
                <a href="javascript:void(0);" class="iconATag">
                  <div class="categories-icon icon-7" id="iconBtn" data-id="Yes" data-index="allCategory">
                    <img src="assets/img/icons/more.png" alt="<?=$rows['image']?>">
                  </div>
                  <p class="categories-name">Categories</p>
                </a>
              </div>
              <div class="col-md-3 text-center iconcol">
                <a href="javascript:void(0);" class="iconATag">
                  <div class="categories-icon icon-8" id="iconBtn" data-id="Yes" data-index="favorite">
                    <img src="assets/img/icons/icon-8.png" alt="<?=$rows['image']?>">
                  </div>
                  <p class="categories-name">Favorite</p>
                </a>
              </div>
      <?php }else{ ?>
			<span style="color: red;">Data is not found!</span>
			<?php } ?>
            </div>
          </div>
          <div class="brend-image" id="advertisement_images">
		  <a href="<?=$Arows['link']?>" target="_blank">
		  <?php if(count($advertisementData) > 0){
        $i=0;
		  foreach($advertisementData as $Arows){
        $class = '';
        $style = 'none';
        if($i == 0){$class = 'active';$style = 'block';}
		  ?>
            <img src="../public/uploads/advertisement/<?=$Arows['image']?>" class="img-fluid <?=$class;?>" alt="" style="display:<?=$style?>">
		  <?php $i++; }}else{ ?>
			<img src="assets/img/deafult.png"  class="img-fluid active" alt="" style="display:block">
		  <?php } ?>
          </a></div>
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


	  <div class="left-panel left-feature-panel extralarge morecategoryDiv" id="style-2" style="display: none;">
      <div class="closeiconleftpanel" id="mcloseBtn">
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
        <div class="info-card categories-icons-section" data-simplebar>
          <h4 class="fs-18 left-panal-heading"></h4>
          <div class="row">
		  <?php
			if(count($morecategoryData) > 0){
			foreach($morecategoryData as $mrows){ ?>
            <div class="col-md-3 text-center iconcol col-6 ">
              <a href="javascript:void(0);" class="iconATag">
                <div class="categories-icon icon-<?=$mrows['id']?>" id="catBtn" data-id="Yes" data-index="<?=$mrows['id']?>">
                  <img src="../public/uploads/categories/<?=$mrows['image']?>" alt="<?=$mrows['image']?>">
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
      <div class="extrapart extrapartfeature subcatSubsidebar" id="simplebars" style="display: none;"></div>

    </div>

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
		if(!empty($featureData)){
		foreach($featureData as $frows) { ?>
		   <div class="row">
            <div class="col-md-12">
             <a href="javascript:void(0);" class="getFuturedlist" title="featured-places" id="<?= $frows['id'] ?>"> <img src="../public/uploads/feature/<?=$frows['image']?>" class="img-fluid" alt="<?=$frows['image']?>"></a>
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
	  <div class="extrapart extrapartfeature featureSubsidebar" id="simplebars1" style="display: none;"></div>
      </div>

    <div class="left-panel left-list-panel extralarge catDataDiv"  id="style-2" style="display: none;">
	  <div class="extrapart extrapartfeature eatoutSubsidebar" data-simplebar style="display: none;"></div>

	</div>


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
                <p class="username"><img src="../public/uploads/users/<?= isset($_SESSION['users']['profile_pic'])?$_SESSION['users']['profile_pic']:"" ?>" alt="Girl in a jacket" ></p>
              </div>
            </a>
			<?php } ?>
          </div>
          <div class="onhover-menu" style="display: none;">
            <nav class="menu-details">
              <ul class="details-menu-list nav" role="tablist" id="myTab">
                <li class="menu-list">
                  <div class="menu-list-image">
                    <img src="assets/img/icons/ic_favourites.svg">
                  </div>
                  <div role="tab" data-toggle="tab" href="javascript:void(0)"  data-index="favorites"  class="menu-list-name tabBtn">Favorites</div>
                </li>
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
			<a class="printIcon printBtn" href="javascript:void(0)">
			  <img src="assets/img/icons/print.png">
			</a></br>
			<a class="shareIcon" href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo">
			  <img src="assets/img/icons/share.png">
			</a>

			<div class="feedbackicon printIcon">
			<a href="javascript:void(0)" data-toggle="modal" data-target="#FeedbackModel" data-whatever="@mdo">
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
		var base_url = 'http://localhost/akwaba/';
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
      <div class="modal-body modalbodyscroll" data-simplebar>
        <form id="signupForm" method="post" action="">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">First Name:</label>
            <input type="text" class="form-control nickname" maxlength="100" id="first_name" name="first_name">
			<span id="firstname_error_msg" style="color: red;"></span>
		  </div>
		  <div class="form-group">
            <label for="recipient-name" class="col-form-label">Last Name:</label>
            <input type="text" class="form-control nickname" maxlength="100" id="last_name" name="last_name">
			<span id="lastname_error_msg" style="color: red;"></span>
		  </div>
		   <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="text" class="form-control" maxlength="100" id="email" name="email">
           <span id="email_error_msg" style="color: red;"></span>
		  </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Password:</label>
            <input type="password" class="form-control" maxlength="50" id="password" name="password">
			<span id="password_error_msg" style="color: red;"></span>
			<div id="strengthMessage"></div>
		  </div>
		  <div class="form-group">
            <label for="recipient-name" class="col-form-label">Confirm Password:</label>
            <input type="password" class="form-control" maxlength="50" id="confirmpassword" name="confirmpassword">
			<span id="conpass_error_msg" style="color: red;"></span>
		  </div>
		  <div class="form-group">
            <label for="recipient-name" class="col-form-label">Contact No:</label>
            <input type="text" class="form-control" maxlength="15" id="contact_no" name="contact_no">
			<span id="contact_error_msg" style="color: red;"></span>
		  </div>
		  <span> If you are existing user then click on <a href="javascript:void(0);" id="login"> login</a></span>

		</form>
		<span id="singup_error_msg" style="color: red;"></span>
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
		<span id="login_error_msg" style="color: red; font-size: 15px;"></span>
      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary loginBtn">Submit</button>
      </div>
    </div>
  </div>
</div>

<!-- OTP Model -->
<div class="modal fade" id="otpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">

    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Verification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form id="loginForm" method="post" action="">
           <div class="form-group">
            <label for="recipient-name mobilecode" class="col-form-label">Mobile verification code:</label>
            <input type="text" class="form-control" maxlength="100" id="otp" name="otp">
           <span id="otp_error_msg" style="color: red;"></span>
		  </div>
		  <div class="form-group">
            <label for="recipient-name emailcode" class="col-form-label">Email verification code:</label>
            <input type="text" class="form-control" maxlength="100" id="emailverification" name="emailverification">
           <span id="emailverification_error_msg" style="color: red;"></span>
		  </div>
            <span> If you are not getting otp then click on <a href="javascript:void(0);" id="signup"> Resend OTP</a></span>
		</form>
			<span id="error_msg" style="color: red;"></span>
	  </div>


	  <input type="hidden" id="lastinsertid" name="lastinsertid" value=""/>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary otpBtn">Submit</button>
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
				<i class="fa fa-link" aria-hidden="true"></i><input type="text" style="font-size: small;width: 120%; color: blue; padding-right: 48px;" class="form-control"   id="urllink" name="urllink">
			  </div>
			  <div class="col-md-2">
					<button style="/* margin-bottom: -138%; */height: 40px;position: absolute;top: 30px;right: 21px; display: flex;
    align-items: center;" type="button" onclick="Copy();" class="btn btn-primary btn-sm copyBtn">copy</button>
			  </div>
          </div>
           <span style="font-size: 75%;"> Maps, search for organizations and routes can be used in your project  <a href="javascript:void(0);" id="signup"></br> Learn how</a></span>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Feedback Model -->
<div class="modal fade" id="FeedbackModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <?php if(isset($_SESSION['users']['firstname'])) { ?>
			<input type="text" value="<?=$_SESSION['users']['firstname']?> <?=$_SESSION['users']['lastname']?>" class="form-control" maxlength="100" id="username" name="username">
			<?php }else{ ?>
			<input type="text" value="" class="form-control" maxlength="100" id="username" name="username">
            <?php } ?>
		   <span id="username_error_msg" style="color: red;"></span>
		  </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:<span style="color: red;">*</span></label>
            <?php if(isset($_SESSION['users']['email'])) { ?>
			<input type="text" value="<?=$_SESSION['users']['email']?>" class="form-control" maxlength="100" id="useremails" name="useremails">
			<?php }else{ ?>
			<input type="text" value="" class="form-control" maxlength="100" id="useremails" name="useremails">
			 <?php } ?>
			<span id="useremails_error_msg" style="color: red;"></span>
		  </div>
		   <div class="form-group">
            <label for="recipient-name" class="col-form-label">Contact No:<span style="color: red;">*</span></label>
             <?php if(isset($_SESSION['users']['contactno'])) { ?>
			<input type="text" value="<?=$_SESSION['users']['contactno']?>" class="form-control" maxlength="10" id="usercontact" name="usercontact">
			<?php }else{ ?>
			<input type="text" value="" class="form-control" maxlength="10" id="usercontact" name="usercontact">
			 <?php } ?>
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
		   <img src="../public/uploads/users/<?= $_SESSION['users']['profile_pic'] ?>" id="profileid" alt="Avatar" style="width:100px; border-radius: 50%;"></br>
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

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
	  <form method="post" name="frm_review" id="frm_review"  enctype="multipart/form-data">
        <div class="modal-content">
          <div class="modal-header">
            <div class="d-lg-flex d-block d-md-flex align-items-lg-center">
              <img src="assets/img/left-brand-image.png" alt="..." class="user-profile-image-modal rounded-circle ">
              <div class="lh-1">
                <span class="code-profile modal-profile" id="profilename"></span> <br>
                <span class="code-deatils modal-deatils">Quartier France, Grand Bassam, Ivory Coast</span>
              </div>
            </div>
          </div>

          <div class="modal-body">
            <div class="row">
              <div class="col-md-12">
                <h3 class="rating-stars">Rating</h3>
                <div class="star-rating star-rating-modal ">
                  <input id="star-31" type="radio" name="rating" value="5">
                  <label for="star-31" title="5 stars">
                    <i class="active fa fa-star" aria-hidden="true"></i>
                  </label>
                  <input id="star-32" type="radio" name="rating" value="4">
                  <label for="star-32" title="4 stars">
                    <i class="active fa fa-star" aria-hidden="true"></i>
                  </label>
                  <input id="star-33" type="radio" name="rating" value="3">
                  <label for="star-33" title="3 stars">
                    <i class="active fa fa-star" aria-hidden="true"></i>
                  </label>
                  <input id="star-34" type="radio" name="rating" value="2">
                  <label for="star-34" title="2 star">
                    <i class="active fa fa-star" aria-hidden="true"></i>
                  </label>
				  <input id="star-35" type="radio" name="rating" value="1">
                  <label for="star-35" title="1 star">
                    <i class="active fa fa-star" aria-hidden="true"></i>
                  </label>
                </div>
              </div>


              <div class="col-md-12 mt-3">
                <h3 class="rating-stars">Review</h3>
                <textarea name="message" id="message" cols="30" rows="3" class="review-text"></textarea>
              </div>
<div class="col-md-12  mt-3 photoslistmaindiv">
                <h3 class="rating-stars">Photos <span>(you can upload up to 10 photos)</span></h3>
                <div class="imageslist">
                  <div class="lable-input singleimg">
				<label for="uploadimg">
				  <img src="assets/img/left-brand-image.png">
				  <div class="overlaycount">
					<p>07 Photos</p>
				  </div>
				</label>
				<input name="file[]" multiple type="file" id="uploadimg" class="review_photos" style="display: none;">
			  </div>
                </div>
              </div>

				<div class="img_section_review" id="img_section1">


				</div>
            </div>
          </div>
		  <?php
			  $firstName = substr($_SESSION['users']['firstname'], 0, 1);
			  $lastName = substr($_SESSION['users']['lastname'], 0, 1);
			  $name = strtoupper($firstName.''.$lastName);
			?>
		   <div class="modal-header">
		   <div class="d-lg-flex d-block d-md-flex align-items-lg-center">
              <?php if(empty($_SESSION['users']['profile_pic'])){ ?>
			  <p class="user-profile-image-modal rounded-circle"><?=$name?></p>
			  <?php }else{ ?>
			  <img src="../public/uploads/users/<?= isset($_SESSION['users']['profile_pic'])?$_SESSION['users']['profile_pic']:"" ?>" alt="..." class="user-profile-image-modal rounded-circle ">
              <?php } ?>
			  <div class="lh-1">
                <span class="code-profile modal-profile" id="username"><?= isset($_SESSION['users']['firstname'])?$_SESSION['users']['firstname']:""?> <?= isset($_SESSION['users']['firstname'])?$_SESSION['users']['lastname']:""?></span> <br>
                <span class="code-deatils modal-deatils"></span>
              </div>
            </div>
		  </div>
		  <input type="hidden" id="osmids" name="osmids" value=""/>
		  <?php if(isset($_SESSION['users'])) { ?>
				<input type="hidden" value="<?= $_SESSION['users']['id']?>" id="session_id" name="session_id" />
			<?php } ?>
          <div class="modal-footer review-footer-btn">
            <button type="button" class="btn btn-post postratingBtn" >Post</button>
            <button type="button" class="btn btn-cancel" data-dismiss="modal">Cancel</button>
          </div>
        </div>
	</form>
      </div>
    </div>
<!---- Add Company Main Model ---->
<div class="modal fade Edit-modal addcompany-modal" id="addcompanyModalCenter" tabindex="-1" role="dialog"
     aria-labelledby="addcompanyCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
     <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <p class="modal-title">New company</p>
         </div>
         <form method="post" name="frm1" id="frm1"  enctype="multipart/form-data">
         <div class="modal-body" data-simplebar>
           <div class="addcompany-profile">
            <div class="addone">
              <div class="addone-head">
                <span>Make sure to specify the company name and area of activity:</span>
              </div>

             <div class="input-company">
              <div class="input-image">
                <img src="assets/img/icons/menu.png">
              </div>
              <div class="fields">
                <div class="input-field">
                  <input type="text" id="company_name" name="company_name" class="field-input" placeholder="Company name">

                </div>
                <span id="company_name_error" style="color:red;margin-left:10px;font-size: 12px;"></span>
              </div>
             </div>
            </div>

            <div class="addone">

             <div class="input-company">
              <div class="fields">
                <div class="input-field">
                  <input type="text" id="area_of_activity" name="area_of_activity" class="field-input" placeholder="Area of activity (for example, Furniture store)">
                </div>
                <span id="area_of_activity_error" style="color:red;margin-left:10px;font-size: 12px;"></span>
              </div>
             </div>
            </div>

            <div class="addone">
              <div class="addone-head">
                <span>Please specify at least one contact of the company:</span>
              </div>

             <div class="input-company">
              <div class="input-image">
                <img src="assets/img/icons/menu.png">
              </div>
              <div class="fields">
                <div class="input-field">
                  <input type="text" id="company_address" name="company_address" class="field-input" placeholder="Address" autocomplete="off">
                  <input type="hidden" id="company_latitude" name="company_latitude" class="field-input" >
                  <input type="hidden" id="company_longtitude" name="company_longtitude" class="field-input" >
                  <ul id="searchResult" style="display:none;"></ul>
                </div>
                <span id="company_address_error" style="color:red;margin-left:10px;font-size: 12px;"></span>
              </div>
             </div>
             <div class="input-company">
              <div class="input-image">
                <img src="assets/img/icons/menu.png">
              </div>
              <div class="inputgroupcustom phonedives">
                <div class="leftinput leftinputdiv leftinputdiv_1">
                <div class="phone_number_div" id="phone_number_div">
                  <div class="fields phone1" >
                    <div class="input-field">
                      <input type="text" name="phone_number[]" id="phone_number_1" class="field-input" placeholder="Phone number">
                    </div>
                  </div>
                  <div class="fields phone2">
                    <div class="input-field phone_number_comment_div" id="phone_number_comment_div">
                      <input type="text" name="phone_number_comment[]" id="phone_number_comment_1" class="field-input" placeholder="Comment on phone number">
                    </div>
                  </div>
                </div>
                </div>
                <div class="icon-cross remove_leftinputdiv_1">
                  <a href="javascript:void(0);" class="cancel_phonenumber" id="cancel_phonenumber_1"><i class="fa fa-times" aria-hidden="true"></i></a>
                </div>

              </div>
            </div>
            <a href="javascript:void(0);" id="add_phone_number">
             <div class="add-number">
              <span>Add phone number</span>
             </div>
             </a>
            </div>

            <div class="addone">

             <div class="input-company">
              <div class="input-image">
                <img src="assets/img/icons/menu.png">
              </div>
              <div class="inputgroupcustom websites">
                <div class="leftinput websitedivs website_1">
                  <div class="fields">
                    <div class="input-field">
                      <input type="text" name="website[]" class="field-input" placeholder="Website or page in social networks">
                    </div>
                  </div>

                </div>
                <div class="icon-cross remove_website_1">
                <a href="javascript:void(0);" class="cancel_website" id="cancel_website">
                      <i class="fa fa-times" aria-hidden="true"></i>
                </a>
                </div>

              </div>
             </div>
             <a href="javascript:void(0);" id="add_website">
             <div class="add-number">
              <span>Add website</span>
             </div>
             </a>
            </div>

            <div class="addone">
              <div class="addone-head">
                <span>Opening hours of the company, if known:</span>
              </div>

             <div class="input-company">
              <div class="input-image">
                <img src="assets/img/icons/menu.png">
              </div>
              <div class="fields">
                <div class="input-field">
                  <!-- <input type="text" class="field-input" placeholder="Company name"> -->
                  <textarea name="hours" id="hours" class="field-input" placeholder="For example, MON–FRI 9:00-20:00, lunch break 13:00-14:00, SAT–SUN 11:00-18:00" style="    height: 64px;"></textarea>
                </div>
              </div>
             </div>
            </div>

            <div class="addone">
              <div class="addone-head padding-extra">
                <span>Photos and any useful information will be helpful to us:</span>
              </div>
              <div class="lable-input">
                <a href="javascript:void(0);">
                <label for="uploadimg">
                  <i class="fa fa-camera-retro" aria-hidden="true"></i>
                  <span>Add image</span>
                </label>
                </a>
                <div class="lable-content">
                  <span class="spanone">
                    <a href="javascript:void(0);">Add photo</a>
                    of a business card or a signboard with the company name and opening hours
                  </span> <br>
                  <span class="spantwo">The photo size must not be more than 10 MB</span>
                </div>
                <input type="file" name="photos[]" style="display: none;" id="uploadimg" multiple >
              </div>
              <span id="image_other_error" style="color:red;margin-left:10px;"></span>
			<div class="img_section" id="img_section">
            </div>
            <div class="addone">
              <div class="input-company">
                <div class="fields pl-0">
                  <div class="input-field">
                    <textarea class="field-input" name="describe_accuracy" id="describe_accuracy" placeholder="Describe inaccuracy" style="height: 64px;"></textarea>
                  </div>
                </div>
               </div>
            </div>
           </div>
         </div>
       </div>

         </form>
     </div>
   </div>

</div>
<div class="modal fade Edit-modal addcompany-modal" id="addAdvertisingModel" tabindex="-1" role="dialog"
     aria-labelledby="addcompanyCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false" >
     <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <p class="modal-title">Advertising</p>
           <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button> -->
         </div>
         <form method="post" name="frm3" id="frm3" enctype="multipart/form-data">
         <div class="modal-body" data-simplebar>
           <div class="addcompany-profile">

              <div class="input-company">
                  <div class="fields">
                    <div class="input-field">
                      <label for="formrow-quest_name-input">Place title</label>
                      <input type="text" id="place_title" name="place_title" class="field-input" placeholder="Enter place title">
                    </div>
                    <span id="place_title_error" style="color:red;font-size: 12px;"></span>
                  </div>
             </div>
            <div class="input-company">

              <div class="fields">
                <div class="input-field">
                    <label for="formrow-quest_name-input">Image</label>
                  <input type="file" id="images_0" name="place_image" class="field-input" >

                </div>
                <img id="image_main0" name="image_main0" class="image_main0" height="30" width="30" style="display:none;margin-top:2px;" >
                <span id="image0_error" style="color:red;font-size: 12px;"></span>
              </div>
             </div>


             <div class="input-company">

            <div class="fields">

            <label for="formrow-quest_name-input">Type</label>
            <div class="input-field" style="display:flex;margin-left: 17px;">

            <input class="form-check-input place_type" type="radio" name="place_type" id="External" value="External">
            <label class="form-check-label" for="External">External</label>

            </div>
            <div class="input-field" style="display:flex;margin-left: 17px;">
            <input class="form-check-input place_type" type="radio" name="place_type" id="POI" value="POI">
            <label class="form-check-label" for="POI">POI</label>
            </div>

            <span id="place_type_error" style="color:red;font-size: 12px;"></span>
            </div>
            </div>
            <div class="input-company" id="link_div" style="display:none;">
            <div class="fields">
            <label for="formrow-quest_name-input">Link</label>
            <input type="text" class="form-control" name="place_link" id="place_link" placeholder="Enter Link">
            <span id="place_link_error" style="color:red;font-size: 12px;"></span>
            </div>

            </div>
            <?php
            $Place_names = pg_query($db,"select ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data, name, osm_id from planet_osm_point where name != ''");
            $place_name_result= [];
            while($row = pg_fetch_row($Place_names)) {
                array_push($place_name_result,$row, true);
            }
            ?>

            <div class="input-company" id="place_name_div" style="display:none;">

            <div class="fields">
            <label for="formrow-quest_name-input">Place Name</label>
            <!-- <input type="text" class="form-control" name="place_name" id="place_name" placeholder="Enter place Name"> -->
            <select class="js-example-basic-single form-control" name="place_name" id="place_name">
                <option value="" selected>Select</option>
            <?php if(!empty($place_name_result)){
               foreach($place_name_result as $row){
                $latitude = json_decode($row[0])->coordinates[0];
                $longtitude = json_decode($row[0])->coordinates[1];
                ?>

            <option value="<?php echo $row[2]; ?>" data-latitude="<?php echo $latitude; ?>" data-longtitude="<?php echo $longtitude; ?>"><?php echo $row[1]; ?></option>
                <?php } } ?>
            </select>
            <span id="place_name_error" style="color:red;font-size: 12px;"></span>
            </div>

            </div>

            <div class="input-company">
            <div class="fields">
            <label for="formrow-quest_name-input">Other Images</label>
            <input type="file" name="multiple_photos[]" id="multiple_photos" multiple >
             <span id="image_multiple_error" style="color:red;margin-left:10px;"></span>
            <div class="img_section1" id="img_section1">
           </div>
            </div>
            </div>

        </div>
         </div>
        <div class="modal-footer">
            <a href="javascript:void(0);" class="AdvertisigModalCenter_close">
                <button type="button" class="btn ">Close</button>
            </a>
           <a href="javascript:void(0);" id="save_advertising" name="save_advertising" class="btn btn-primary">Save</a>
         </div>
         </form>
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
			$(".printBtn").click(function(){
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
  $(document).ready(function ($) {
    $(".owl-carousel").owlCarousel({
      loop: false,
      margin: 10,
      dots: false,
      nav: true,
      items: 3
    });
    var owl = $(".owl-carousel");
    owl.owlCarousel();
    $(".next-btn").click(function () {
      owl.trigger("next.owl.carousel");
    });
    $(".prev-btn").click(function () {
      owl.trigger("prev.owl.carousel");
    });
    $(".prev-btn").addClass("disabled");
    $(owl).on("translated.owl.carousel", function (event) {
      if ($(".owl-prev").hasClass("disabled")) {
        $(".prev-btn").addClass("disabled");
      } else {
        $(".prev-btn").removeClass("disabled");
      }
      if ($(".owl-next").hasClass("disabled")) {
        $(".next-btn").addClass("disabled");
      } else {
        $(".next-btn").removeClass("disabled");
      }
    });
  });
   $(document).ready(function () {
      $(".toggle-btn").click(function () {
        $(this).closest(".detailsofrestorant").find('.feature-p').toggleClass("main");
      });
 if (window.File && window.FileList && window.FileReader) {
    $(".review_photos").change(function(e) {

    if($(".pip_review").length > 1){
    $(".pip_review").remove("");
    }

    if ($(".review_photos")[0].files.length > 5) {
        $(".review_photos").val(null);
        $("#image_review_multiple_error").html("You can only upload 3 images");
    }
else{
for (var i = 0; i < this.files.length; i++){
 let name = e.target.files[i].name;
$("#image_multiple_error").html("");
var files = e.target.files,
    filesLength = files.length;

var ext = name.split('.').pop().toLowerCase();
if($.inArray(ext, ['png','jpg','jpeg','jfif']) == -1) {

$("#image_review_multiple_error").html("Please upload images of following formats(*png,jpeg,jpg,jfif).");
}else{
$("#image_review_multiple_error").html("");
    var f = files[i];
    var fileReader = new FileReader();
    fileReader.onload = (function(ev) {
        var html =   $("<span class=\"pip_review_multiple\">" +
        "<img class=\"imageThumb\" height=\"100px\" width=\"100px\" src=\"" + ev.target.result + "\" title=\"" + name + "\"/>" +
        "<a href=\"javascript:void(0)\" id=\"deleteBtn_review\" style=\"display: block;\" data-id=\"${Files.length}\" onclick=\"removefiles('"+ name +"')\">"+
        "<span class=\"close_imge_review\"><i class=\"fa fa-window-close\" aria-hidden=\"true\"></i></span>"+
        "</a>" +
        "</span>");
        $(".img_section_review").append(html);

        $(document).on('click','#deleteBtn_review',function(){

        $(this).parent(".pip_review_multiple").remove();
        });
       });
        fileReader.readAsDataURL(f);
        }
    }

    }
        });
    } else {

    }
    });
  </script>
  <script>
  $(document).ready(function(){
	$("#confirmpassword").keyup(checkPasswordMatch);
    $(".savebtn").click(function(){
      $(".tooltip1").toggle();
    });
	$('#password').keyup(function () {
        $('#strengthMessage').html(checkStrength($('#password').val()));
    })
  });

$(".nickname").keypress(function(e){
	if ((e.which > 96 && e.which < 123 ) || (e.which > 64 && e.which < 91 ) || (e.which == 8) || (e.which == 82) || (e.which == 32) || (e.which == 0) || (e.which == 46) ) {

	  }
	else{
		   return false;
	 }
});
$("#contact_no").keydown(function (e) {
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 return;
        }
        if ((e.shiftKey || (e.keyCode == 32 ) || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {

            e.preventDefault();
        }
});
$(".mobilecode").keydown(function (e) {
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 return;
        }
        if ((e.shiftKey || (e.keyCode == 32 ) || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {

            e.preventDefault();
        }
});
$(".emailcode").keydown(function (e) {
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 return;
        }
        if ((e.shiftKey || (e.keyCode == 32 ) || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {

            e.preventDefault();
        }
});
function checkPasswordMatch() {
    var password = $("#password").val();
    var confirmPassword = $("#confirmpassword").val();
    if (password != confirmPassword)
	$("#conpass_error_msg").text("Password does not match!");
	else
	$("#conpass_error_msg").text("");
}
function checkStrength(password) {

	var strength = 0
	if (password.length < 6) {
		$('#strengthMessage').removeClass()
		$('#strengthMessage').addClass('Short')
		return 'Too short'
	}
	if (password.length > 7) strength += 1
	// If password contains both lower and uppercase characters, increase strength value.
	if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 1
	// If it has numbers and characters, increase strength value.
	if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) strength += 1
	// If it has one special character, increase strength value.
	if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
	// If it has two special characters, increase strength value.
	if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
	// Calculated strength value, we can return messages
	// If value is less than 2
	if (strength < 2) {
		$('#strengthMessage').removeClass()
		$('#strengthMessage').addClass('Weak')
		return 'Weak'
	} else if (strength == 2) {
		$('#strengthMessage').removeClass()
		$('#strengthMessage').addClass('Good')
		return 'Good'
	} else {
		$('#strengthMessage').removeClass()
		$('#strengthMessage').addClass('Strong')
		return 'Strong'
	}
}
  </script>
<!--<script type="text/javascript">
    $(document).on('click', '.closeleftpanel', function () {
      $('.left-panel').toggleClass('hideleftpanel');
      $('.overlayIconInIframe').toggleClass('w-100');
    });
  </script>-->

