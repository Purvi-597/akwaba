<?php 
error_reporting(0);
session_start();
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
      $categoryData[$i]['image'] = "../uploads/place_advertisement/".$place_advertisement_result['image'];
      $categoryData[$i]['display_name'] = $place_advertisement_result['place_name'];
      $categoryData[$i]['add'] = 'true';
      $categoryData[$i]['type'] = $place_advertisement_result['type'];
      $categoryData[$i]['external_link'] = $place_advertisement_result['external_link'];
    }
    $rows['image'] = "../uploads/categories/".$rows['image'];
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
}

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
                <img src="assets/img/icons/route.png">
              </div>
              <div class="detail-list-name">
                <a href="javascript:void(0);" id="interesting_places" class="interesting_places">
                <p class="detail-list-btn">Interesting places</p>
              </a>    
              </div>
            </li>

            <li class="details-list">
              <div class="detail-list-image">
                <img src="assets/img/icons/route.png">
              </div>
              <div class="detail-list-name">
                <p class="detail-list-btn">Coronavirus</p>
              </div>
            </li>

          </ul>

          <ul class="details-one">
            <li class="details-list">
              <div class="detail-list-image">
                <img src="assets/img/icons/route.png">
              </div>
              <div class="detail-list-name">
                <button class="detail-list-btn">Android</button>
              </div>
            </li>



          </ul>

          <ul class="details-one">
            <li class="details-list py4">
              <div class="detail-list-image">
                <img src="assets/img/icons/route.png">
              </div>
              <div class="detail-list-name">
                <!-- <button class="detail-list-btn">Add company</button> -->
                <a href="javascript:void(0);" class="detail-list-btn" id="add_company" data-toggle="modal" data-target="#addcompanyModalCenter">Add company</a>
              </div>
            </li>
            <li class="details-list pl-76">
              <div class="detail-list-name">
                <p class="detail-list-btn">Business Account</p>
              </div>
            </li>
            <li class="details-list pl-76">
              <div class="detail-list-name">
                <p class="detail-list-btn">Advertising</p>
              </div>
            </li>
            <li class="details-list pl-76">
              <div class="detail-list-name">
                <p class="detail-list-btn">2GIS API</p>
              </div>
            </li>
            <li class="details-list pl-76">
              <div class="detail-list-name">
                <p class="detail-list-btn">2GIS data</p>
              </div>
            </li>



          </ul>

          <ul class="details-one">
            <li class="details-list py4">
              <div class="detail-list-image">
                <img src="assets/img/icons/route.png">
              </div>
              <div class="detail-list-name">
                <p class="detail-list-btn">Feedback</p>
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
                <img src="assets/img/icons/route.png">
              </div>
              <div class="detail-list-name">
                <p class="detail-list-btn">Print</p>
              </div>
            </li>
          </ul>

          <ul class="details-one">
            <li class="details-list pl-76">
              <div class="detail-list-name">
                <p class="detail-list-btn">Sign out</p>
              </div>
            </li>
          </ul>

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
        $s=1;
			foreach($categoryData as $rows){ ?>
              <div class="col-md-3 text-center iconcol">
                <a href="javascript:void(0);" class="iconATag">
                  <div class="categories-icon icon-<?=$s?>" id="iconBtn" data-id="Yes" data-index="<?=$rows['id']?>" data-add="<?=$rows['add']?>" data-type="<?=$rows['type']?>" data-link="<?=$rows['external_link']?>">
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
		  <?php if(!empty($advertisementData)){ 
        $i=0;
		  foreach($advertisementData as $Arows){ 
        $class = '';
        $style = 'none';
        if($i == 0){$class = 'active';$style = 'block';} 
		  ?>
      <a href="<?= $Arows['link'] ?>" target="_blank">
            <img src="../uploads/advertisement/<?=$Arows['image']?>" class="img-fluid <?=$class;?>" alt="" style="display:<?=$style?>"></a>
		  <?php $i++; }} ?>	
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
      <div class="left-panel left-feature-panel addsidebar" style="display: none;"><div class="closeiconleftpanel" id="closeBtn">
       <a href="javascript:void(0);"><img src="assets/img/icons/left-cross.png"></a>
      </div>
      <div class="closeiconleftpanel closeleftpanel2 closeleftpanel">
        <img src="assets/img/icons/left-arrow.png">
      </div></div>
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
        <div class="info-card categories-icons-section" data-simplebar>
          <h4 class="fs-18 left-panal-heading"></h4>
          <div class="row">
		  <?php 
			if(!empty($morecategoryData)){
			foreach($morecategoryData as $mrows){ ?>
            <div class="col-md-3 text-center iconcol col-6 ">
              <a href="javascript:void(0);" class="iconATag">
                <div class="categories-icon icon-<?=$mrows['id']?>" id="catBtn" data-id="Yes" data-index="<?=$mrows['id']?>">
                  <img src="../uploads/categories/<?=$mrows['image']?>" alt="<?=$mrows['image']?>">
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
	
	<div class="left-panel left-feature-panel extralarge featuredDiv" id="style-2" style="display: none;">
      <div class="closeiconleftpanel" id="featureCloseBtn">
       <a href="javascript:void(0);"  id="interesting_close"><img src="assets/img/icons/left-cross.png"></a>
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

    <div class="left-panel left-list-panel extralarge catDataDiv"  id="style-2" style="display: none;"></div>
	
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
            <a class="" href="#">
              <div>
                <p class="username"><?=$name?></p>
              </div>
            </a>
          </div>

          <div class="onhover-menu" style="display: none;">

            <nav class="menu-details">
              <ul class="details-menu-list nav" role="tablist" id="myTab">
                <li class="menu-list">
                  <div class="menu-list-image">
                    <img src="assets/img/icons/route.png">
                  </div>
                  <div role="tab" data-toggle="tab" href="#tab1" class="menu-list-name">My places</div>
                </li>

                <li class="menu-list">
                  <div class="menu-list-image">
                    <img src="assets/img/icons/route.png">
                  </div>
                  <div role="tab" data-toggle="tab" href="#tab2" class="menu-list-name">Favorites</div>

                </li>

                <li class="menu-list">
                  <div class="menu-list-image">
                    <img src="assets/img/icons/route.png">
                  </div>
                  <div role="tab" data-toggle="tab" href="#tab3" class="menu-list-name">Achievements</div>
                  
                </li>

                <li class="menu-list">
                  <div class="menu-list-image">
                    <img src="assets/img/icons/route.png">
                  </div>
                  <div role="tab" data-toggle="tab" href="#tab4" class="menu-list-name">Reviews</div>
                  
                </li>

                <li class="menu-list">
                  <div class="menu-list-image">
                    <img src="assets/img/icons/route.png">
                  </div>
                  <div role="tab" data-toggle="tab" href="#tab5" class="menu-list-name">Photos</div>

                  
                </li>

                <li class="menu-list">
                  <div class="menu-list-image">
                    <img src="assets/img/icons/route.png">
                  </div>
                  <div role="tab" data-toggle="tab" href="#tab6" class="menu-list-name">Corrections</div>

                  
                </li>



              </ul>

              <ul class="details-menu-list">
                <li class="menu-list">
                  <div class="menu-list-image">
                    <img src="assets/img/icons/route.png">
                  </div>
                  <div class="menu-list-name">Edit
                  </div>
                </li>

                <li class="menu-list">
                  <div class="menu-list-image">
                    <img src="assets/img/icons/route.png">
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
			<a class="printIcon" href="javascript:void(0)">
			  <img src="assets/img/icons/print.png">
			</a></br>
			<div class="feedbackicon printIcon">
			<a href="#" data-toggle="modal" data-target="#FeedbackModalCenter">
			  <span>Feedback</span>
			  <i class="fas fa-comment"></i>
			</a>
		  </div>
			<!--<a class="shareIcon" href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal3" data-whatever="@mdo">
			  <img src="assets/img/icons/ic_feedback.png">
			</a>-->
		</div>
		
    
  </section>

  <!---- Add Company Main Model ---->
<div class="modal fade Edit-modal addcompany-modal" id="addcompanyModalCenter" tabindex="-1" role="dialog"
     aria-labelledby="addcompanyCenterTitle" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <p class="modal-title">New company</p>
           <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button> -->
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
                <input type="file" name="photos[]" id="uploadimg" multiple style="display: none;">
              </div>
              <span id="image_other_error" style="color:red;margin-left:10px;"></span>
      <div class="img_section" id="img_section">

            </div>


            <div class="addone">
              <div class="input-company">
                <div class="fields pl-0">
                  <div class="input-field">
                    <!-- <input type="text" class="field-input" placeholder="Company name"> -->
                    <textarea class="field-input" name="describe_accuracy" id="describe_accuracy" placeholder="Describe inaccuracy" style="height: 64px;"></textarea>
                  </div>
                </div>
               </div>


            </div>



           </div>
         </div>

       </div>
       <div class="modal-footer">
         <?php if(!isset($_SESSION['users'])) { ?>

            <div class="d-lg-flex d-block d-md-flex img_top_username">
            <div class="signinbtn1">
            <!-- data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo" -->
      <a class="" href="javascript:void(0);" class="btn btn-outline-default" id="signInbutton2">
        <div>
        <img src="assets/img/icons/signin.png">
        </div>
        <p>Sign in</p>
      </a>
      <!--<a href="logout.php" style="background-color: #fff;" class="btn btn-outline-default"><i class="fa fa-power-off" aria-hidden="true"></i>&nbsp; Logout</a>-->
      </div>
            </div>
         <?php }else{
        $firstName = substr($_SESSION['users']['firstname'], 0, 1);
        $lastName = substr($_SESSION['users']['lastname'], 0, 1);
        $name = strtoupper($firstName.''.$lastName);
      ?>
             <div class="d-lg-flex d-block d-md-flex img_top_username">
            <div class="usericon">
              <a class="" href="#">
                <div>
                  <p class="username"><?php echo $name; ?></p>
                </div>
              </a>
            </div>
            <!-- <div class="lh-1">
              <span class="Username">Darshan Modi</span>
            </div> -->
          </div>
        <?php }?>


          <?php if($_SESSION['users']){ ?>
            <a href="javascript:void(0);" class="addcompanyModalCenter_close"><button type="button" class="btn " data-dismiss="modal">Close</button></a>
            <a href="javascript:void(0);" id="save_company" name="save_company" class="btn btn-primary">Save</a>
        <?php }else{ ?>
            <a href="javascript:void(0);" class="addcompanyModalCenter_close">
                <button type="button" class="btn ">Close</button>
            </a>
           <a href="javascript:void(0);" id="save_company_without_login" name="save_company_without_login" class="btn btn-primary">Save</a>

           <?php } ?>
         </div>
         </form>
     </div>
   </div>

</div>
<!---- Add Company EMail Model --->
<div class="modal fade Edit-modal addcompany-modal" id="addcompanyModal2Center" tabindex="-1" role="dialog"
     aria-labelledby="addcompanyCenterTitle" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <p class="modal-title">New company</p>
           <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
             <!-- <span aria-hidden="true">&times;</span> -->
           </button>
         </div>
         <hr>
         <form method="post" name="frm2" id="frm2">
         <div class="modal-body" data-simplebar>
           <div class="addcompany-profile">
            <div class="addone">
              <div class="addone-head">
                <span>Enter your email address to receive information about the
                    status of your issue, or simply send your
                     correction if you don't need to know the status
            </span>
              </div>

             <div class="input-company">
              <div class="fields">
                <div class="input-field">
                  <input type="text" id="add_company_email" name="add_company_email" class="field-input" placeholder="Enter email address">

                </div>
                <span id="error_add_company_email" style="color:red;margin-left:10px;font-size: 12px;"></span>
              </div>
             </div>
            </div>

         </div>

       </div>
       <div class="modal-footer">
          <!-- <div class="d-lg-flex d-block d-md-flex img_top_username">
          </div> -->
          <a href="javascript:void(0);" class="addcompanyModal2Center_close">
          <button type="button" class="btn " data-dismiss="modal">Close</button>
          </a>
           <a href="javascript:void(0);" id="final_save" name="final_save" class="btn btn-primary">Save</a>

         </div>
         </form>
     </div>
   </div>

</div>




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
    var base_url = 'http://127.0.0.1:8000/akwaba/';
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
	<!-- 		   <div class="form-group col-md-10">
				<label for="recipient-name" style="font-size: small;" class="col-form-label">Copy link:</label>
				<i class="fa fa-link" aria-hidden="true"></i><input type="text" style="font-size: small;width: 120%; color: blue;" class="form-control"   id="urllink" name="urllink">
			  </div>
			  <div class="col-md-2">
					<button style="margin-bottom: -138%;height:31px;" type="button" onclick="Copy();" class="btn btn-primary btn-sm copyBtn">copy</button>
			  </div>
          </div>
           <span style="font-size: 75%;"> Maps, search for organizations and routes can be used in your project  <a href="javascript:void(0);" id="signup">&nbsp;&nbsp; Learn how</a></span> -->
    <div class="form-group col-md-12">
        <label for="recipient-name" style="font-size: small;" class="col-form-label">Copy link:</label>
        <button style="height: 31px;position: absolute;padding: 5px 10px;top: 41px;right: 23px;border: 0px solid;font-size: 13px;z-index: 1" type="button" onclick="Copy();" class="btn btn-primary btn-sm copyBtn">copy</button><i class="fa fa-link" aria-hidden="true"></i><input type="text" style="font-size: 12px;width: 100%;color: blue;position: relative;" class="form-control" id="urllink" name="urllink">
         <span style="font-size: 75%;"> Maps, search for organizations and routes can be used in your project  <a href="javascript:void(0);" id="signup">&nbsp;&nbsp; Learn how</a></span>
        </div>
        </div>
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
			$(".printIcon").click(function(){
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

          $(document).ready(function (){


             $("#interesting_places").click(function(){
             $(".indexDiv").css('display','none');
             $(".morecategoryDiv").css('display','none');
             $(".featuredDiv").removeClass('extralarge');
             $(".featuredDiv").css('display','flex');
            });
            $(document).on('click','#interesting_close',function(){
                $(".indexDiv").css('display','block');
                $(".featuredDiv").css('display','none');
                $(".morecategoryDiv").css('display','none');
                $(".eatoutDiv").css('display','none');
            });
            $(document).on("click",'#add_phone_number',function(){

                var length = $(".leftinputdiv").length;

                var i = length + 1;
                if(length < 2){
                var html ='<div class="leftinput leftinputdiv leftinputdiv_'+i+'"><div class="phone_number_div" id="phone_number_div">';
                    html += '<div class="fields phone1"><div class="input-field"><input type="text" id="phone_number_'+i+'"name="phone_number[]" class="field-input" placeholder="Phone number">';
                    html += '</div></div>';
                    html += '<div class="fields phone2">';
                    html += '<div class="input-field phone_number_comment_div" id="phone_number_comment_div">';
                    html += '<input type="text" name="phone_number_comment[]" id="phone_number_comment_'+i+'"class="field-input" placeholder="Comment on phone number">';
                    html += '</div> </div></div> </div>';
                    html += '<div class="icon-cross remove_leftinputdiv_'+i+'">';
                    html += '<a href="javascript:void(0);" class="cancel_phonenumber" data-id="'+i+'" ><i class="fa fa-times" aria-hidden="true"></i></a>';
                    html += '</div>';
                $(".phonedives").append(html)
                }
            });
            $(document).on("click",'.cancel_phonenumber',function(){
                var id = $(this).attr('data-id');
                if(id > 1){
                $(".leftinputdiv_"+id).remove();
                $(".remove_leftinputdiv_"+id).remove();
                }
            });
            $(document).on("click",'#add_website',function(){
                var length = $(".websitedivs").length;

              var i = length + 1;
              if(length < 2){
                var html =  '<div class="leftinput websitedivs website_'+i+'">';
                    html +=  '<div class="fields">';
                    html +=  '<div class="input-field">';
                    html +=  ' <input type="text" name="website[]" class="field-input" placeholder="Website or page in social networks">';
                    html +=  '</div>';
                    html +=  '</div>';
                    html +=  '</div>';
                    html +=  '<div class="icon-cross remove_website_'+i+'">';
                    html +=  '<a href="javascript:void(0);" class="cancel_website" data-id="'+i+'" id="cancel_website_'+i+'">';
                    html +=  '  <i class="fa fa-times" aria-hidden="true"></i>';
                    html +=  '</a>';
                    html +=  '</div>';
                    $(".websites").append(html);
              }
            });
            $(document).on("click",'.cancel_website',function(){
                var id = $(this).attr('data-id');
                $(".website_"+id).remove();
                $(".remove_website_"+id).remove();
            });


     if (window.File && window.FileList && window.FileReader) {
        $("#uploadimg").change(function(e) {


        if($(".pip").length > 1){
          $(".pip").remove("");
        }

        if ($("#uploadimg")[0].files.length > 5) {
             $("#uploadimg").val(null);
        $("#image_other_error").html("You can only upload 3 images");
    }
    else{
    for (var i = 0; i < this.files.length; i++){
                let name = e.target.files[i].name;
                    $("#image_other_error").html("");
                    var files = e.target.files,
                        filesLength = files.length;

                var ext = name.split('.').pop().toLowerCase();
                if($.inArray(ext, ['png','jpg','jpeg','jfif']) == -1) {
                    $(".o-img").remove();
                $("#image_other_error").html("Please upload images of following formats(*png,jpeg,jpg,jfif).");
                    var html = '<input type="file" class="o-img oim" name="image[]" id="image" multiple  accept=".gif,.jpg,.jpeg,.png" onchange="get_other_image(this);"/>';
                    $(".other-img").append(html);

                }else{
                    $("#image_other_error").html("");
                        var f = files[i];
                        var fileReader = new FileReader();
                        fileReader.onload = (function(ev) {
                            var html =   $("<span class=\"pip\">" +
                            "<img class=\"imageThumb\" height=\"100px\" width=\"100px\" src=\"" + ev.target.result + "\" title=\"" + name + "\"/>" +
                            "<a href=\"javascript:void(0)\" id=\"deleteBtn\" style=\"display: block;\" data-id=\"${Files.length}\" onclick=\"removefiles('"+ name +"')\">"+
                            "<span class=\"close_imge\"><i class=\"fa fa-window-close\" aria-hidden=\"true\"></i></span>"+
                                                "</a>" +
                            "</span>");
                            $(".img_section").append(html);

                            $(document).on('click','#deleteBtn',function(){

                            $(this).parent(".pip").remove();
                            });


                        });
                    fileReader.readAsDataURL(f);
                    }
                }

                }
                    });
                } else {

                }
                $(document).on("change","#company_name",function(){
                    if($(this).val() == ""){
                        $("#company_name_error").text("Please provide a company");
                    }else{
                        $("#company_name_error").text("");
                    }
                });
                $(document).on("change","#area_of_activity",function(){
                    if($(this).val() == ""){
                        $("#area_of_activity_error").text("Please provide a company");
                    }else{
                        $("#area_of_activity_error").text("");
                    }
                });
                $(document).on("change","#company_address",function(){
                    if($(this).val() == ""){
                        $("#company_address_error").text("Please provide a company");
                    }else{
                        $("#company_address_error").text("");
                    }
                });
                $(document).on("change","#add_company_email",function(){
                    if($(this).val() == ""){
                        $("#error_add_company_email").text("Please provide a email address");
                    }else{
                        $("#error_add_company_email").text("");
                    }
                });

                $(document).on("click","#save_company",function(){
                    var company_name  = $("#company_name").val();
                    var area_of_activity = $("#area_of_activity").val();
                    var company_address = $("#company_address").val();

                    if(company_name == "" || company_name == undefined){
                        $("#company_name_error").text("Please provide a company");

                    }
                    if(area_of_activity == "" || area_of_activity == undefined){
                        $("#area_of_activity_error").text("Please provide a area of activity");


                    }
                    if(company_address == "" || company_address == undefined){
                        $("#company_address_error").text("Please provide a address");

                    }
                    if(company_address == "" || area_of_activity == "" || company_name == ""){
                        return false;
                    }
                    var form = $('#frm1')[0];
                    var data = new FormData(form);
                    $.each($("input[type='file']")[0].files, function(i, file) {
                    data.append('file', file);
                    });

                    $.ajax({
                    url:"add_company.php",
                    type: "POST",
                    enctype: 'multipart/form-data',
                    data:data,
                    contentType: false,
                    cache: false,
                    processData:false,
                    dataType: 'text',
                    success: function(data){
                        if($.trim(data) == 'success'){
                            $("#addcompanyModalCenter").modal('hide');
                            $('#frm1').trigger("reset");
                            $(".pip").remove();
                            Swal.fire({
                                       title: "New company",
                                       icon:"success",
                                       text: "we will make changes after verify your details",
                                       type: "success"
                                });


                        }else{

                            Swal.fire({
                                       title: "New company",
                                       icon:"success",
                                       text: "New company not added.please try again.",
                                       type: "error"
                                });


                        }


                     }
                   });
                });
                    $(document).on("click","#save_company_without_login",function(){
                        var company_name  = $("#company_name").val();
                    var area_of_activity = $("#area_of_activity").val();
                    var company_address = $("#company_address").val();

                    if(company_name == "" || company_name == undefined){
                        $("#company_name_error").text("Please provide a company");

                    }
                    if(area_of_activity == "" || area_of_activity == undefined){
                        $("#area_of_activity_error").text("Please provide a area of activity");


                    }
                    if(company_address == "" || company_address == undefined){
                        $("#company_address_error").text("Please provide a address");

                    }
                    if(company_address == "" || area_of_activity == "" || company_name == ""){
                        return false;
                    }
                    $("#addcompanyModalCenter").modal('hide')
                    $("#addcompanyModal2Center").modal('show');
                    });
                    $("#final_save").click(function(){
                        var add_company_email = $("#add_company_email").val();
                        if(add_company_email == "" || add_company_email == undefined){
                        $("#error_add_company_email").text("Please provide a email address");

                            return false;
                    }
                    var check = validateEmail(add_company_email);
                    if(check == false){
                        $("#error_add_company_email").text("Please provide a valid email address");
                        return false;
                    }else{
                        $("#error_add_company_email").text("");
                    }
                    var form = $('#frm1')[0];
                    var data1 = new FormData(form);
                    $.each($("input[type='file']")[0].files, function(i, file) {
                    data1.append('file', file);
                    });
                    data1.append('email',add_company_email);

                    $.ajax({
                    url:"add_company.php",
                    type: "POST",
                    enctype: 'multipart/form-data',
                    data:data1,
                    contentType: false,
                    cache: false,
                    processData:false,
                     dataType: 'text',
                     success: function(data){
                        console.log(data)


                            if($.trim(data) == 'success'){
                            $("#addcompanyModal2Center").modal('hide');
                            $('#frm1').trigger("reset");
                            $(".pip").remove();
                            Swal.fire({
                                       title: "New company",
                                       icon:"success",
                                       text: "we will make changes after verify your details",
                                       type: "success"
                                });


                        }else{

                            Swal.fire({
                                       title: "New company",
                                       icon:"success",
                                       text: "New company not added.please try again.",
                                       type: "error"
                                });


                        }


                     }
                    });
                    });
                    $("#signInbutton2").click(function(){
                        $("#addcompanyModal2Center").modal('hide');
                        $("#addcompanyModalCenter").modal('hide');
                        $("#exampleModal1").modal('show');
                    });
                    $(".addcompanyModalCenter_close").click(function(){

                        if (confirm('Close the window? Your changes will not be saved')) {
                            $("#addcompanyModalCenter").modal('hide');

                            $('#frm1').trigger("reset");
                        } else {

                         }
                    });
                    $(".addcompanyModal2Center_close").click(function(){

                       if (confirm('Close the window? Your changes will not be saved')) {
                           $("#addcompanyModal2Center").modal('hide');

                           $('#frm1').trigger("reset");
                           $("#addcompanyModal2Center").remove();
                           $("#add_company_email").val();
                       } else {

                        }
                   });

                   $("#company_address").keyup(function(){
                    var search = $(this).val();
                    if(search != ""){
                      $("#searchResult").css('display','block')
                    var xmlhttp = new XMLHttpRequest();
                      var url = "https://nominatim.openstreetmap.org/search?country=uae&format=json&q=" + search;
                      xmlhttp.onreadystatechange = function()
                      {
                      if (this.readyState == 4 && this.status == 200)
                      {
                          var myArr = JSON.parse(this.responseText);
                          myFunction(myArr);
                      }
                      };
                      xmlhttp.open("GET", url, true);
                      xmlhttp.send();
                    }
                   });
                    function myFunction(arr)
                    {
                    var out = "";
                    var i;

                    if(arr.length > 0)
                    {
                    for(i = 0; i < arr.length; i++)
                    {
                     //Jainil

                        // arr[i].lat arr[i].lon <img src="assets/img/icons/signin.png">
                    out +='<div class="img_top_username autodiv">';
                    out +='<div class="signinbtn1 address" data-latitude="'+arr[i].lat+'" data-longtitude="'+arr[i].lon+'">';
                    out +='<p>'+arr[i].display_name+'</p></div>';
                    // out += "<li class='address' data-latitude='"+arr[i].lat+"' data-longtitude='"+arr[i].lon+"'>"+ arr[i].display_name + "</li>";
                    }
                    document.getElementById('searchResult').innerHTML = out;
                    }
                    // else
                    // {
                    // document.getElementById('searchResult').innerHTML = "Sorry, no results...";
                    // }

                    }
                    // $(".address").on("click", function(){
                        $(document).on('click','.address',function(){
                        var latitude = $(this).attr('data-latitude');
                        var longtitude = $(this).attr('data-longtitude');
                        console.log(latitude,longtitude)
                        $("#company_address").val($(this).text());
                        $("#company_latitude").val(latitude);
                        $("#company_longtitude").val(longtitude);
                        $(".autodiv").remove();
                        $("#searchResult").hide();
                    });

                    });
                    function validateEmail(email) {
                            var re = /\S+@\S+\.\S+/;
                            return re.test(email);
                     }


   </script>

