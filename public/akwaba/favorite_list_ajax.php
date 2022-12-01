<?php
error_reporting(0);
session_start();
include('config/db_mysql.php');
if(isset($_REQUEST['favoritelist']) && ($_REQUEST['favoritelist'] == 'favoritelistForm')){
$id = $_REQUEST['userid'];
$sql = "SELECT * FROM `favorites` WHERE `status` = '1' and user_id = ".$id." and deleted_at IS NULL";
	$result = $conn->query($sql);
	if($result->num_rows > 0) {
		$fcount = $result->num_rows;
		$row = [];
		while($rows = $result->fetch_assoc()) {
			$row[] = $rows;
			$latlng[] = array('latitude'=>$rows['latitude'],'longitude'=>$rows['longitude'], 'name'=>$rows['name']);
		}
	}else{
		$fcount = 0;
		$row  = array(); 
	}
$latlong = json_encode($latlng);
$image = "assets/img/feature-image.png";
$html = '';
$html = '<div class="info-card Favorites-icons-section">
            <div class="FavoritesPart">
              <div class="FavoritesHead">
                <div class="FavoritesHeadContent" style="background: rgb(33, 0, 219);">
                  <h1>Favorites</h1>
                  <div class="FavoritesHeadSubContent">'.$fcount.' place</div>
                </div>
              </div>';
			  foreach($row as $res){
              $html .= '<div class="FavoritesBody Favorites-one-pencil">
                <div class="FavoritesBodyContent">
                  <div class="FavoritesBodyhead">
                    <div class="FavoritesBodyheadContent">
                      <button>'.$res['name'].'</button>
                    </div>
                    <div class="FavoritesBodySubContent">
                      <span>'.$res['cat_type'].'</span>
                    </div>
                  </div>
                  <div class="FavoritesBodyAddress">
                    <span class="FavoritesBodySpan">
                      <span class="span1">​6,&nbsp;Saad Bin Abi Waqas Street</span><br>
                      <span class="span2">​Abu Shagara, Al Qasimiah, Sharjah</span>
                    </span>
                  </div>
                </div>
                <div class="pencilIcon2">
                  <div class="pencilIconDiv">
                    <button title="Delete" class="pencilIconBTN">
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="currentColor"><path d="M10.998 14H10v-2h2.998v-2a2 2 0 0 1 2-2H18a2 2 0 0 1 2 2v2h3v2h-1v7a3 3 0 0 1-3 3h-5.002a3 3 0 0 1-3-3v-7zm2 0v7a1 1 0 0 0 1 1H19a1 1 0 0 0 1-1v-7h-7.002zm2-2H18v-2h-3.002v2z"></path></svg>
                    </button>
				</div>
                </div>
              </div>';
			  }
            $html .= '</div>
          </div>';
		echo $latlong."|".$html;die;
}

?>
