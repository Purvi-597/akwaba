<?php
@error_reporting(0);
@session_start();
include('config/db_mysql.php');
if(isset($_REQUEST['subcategory']) && ($_REQUEST['subcategory'] == 'subcategoryForm')){
$id = $_REQUEST['id'];
$subcatql = "SELECT * FROM `sub_categories` WHERE `status` = '1' and cat_id =".$id;

$result = $conn->query($subcatql);

if($result->num_rows > 0) {
	$Data = [];
	while($row = $result->fetch_assoc()) {
		$Data[] = $row;
		/* $coordinates = array('0'=>(float)$row['latitude'], '1'=>(float)$row['longitude']);
		$futuredLatLong[] = array('type'=>'Point', 'coordinates'=>$coordinates); */
	}
	//$latlong = json_encode($futuredLatLong);
	
}

$image = "assets/img/feature-image.png";
$html = '';
$html .= '<div class="img-top">
            <div class="topboxheader">
              <span>Eat out</span>
              <div class="icontopmaindiv"><img src="./assets/img/icons/icon-1.png"></div>
            </div>
          </div>
          <div class="info-card categories-icons-section">
            <h4 class="fs-18 left-panal-heading"></h4>
            <div class="row">';
			foreach($Data as $res){
		$html .='<div class="col-md-3 text-center iconcol col-6 ">
                <a href="javascript:void(0);" class="iconATag">
                  <div class="categories-icon icon-1" id="subcatBtn"  data-flag="Yes" data-id="'.$res['name'].'" data-index="'.$res['id'].'">
                    <img src="../akwaba/uploads/subcategories/'.$res['image'].'" alt="">
                  </div>
                  <p class="categories-name">'.$res['display_name'].'</p>
                </a>
              </div>';
			} 
        $html .= '</div>
          </div>';
   echo $html;die;

}

?>
