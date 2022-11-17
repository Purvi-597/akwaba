<?php
error_reporting(0);
session_start();
include('config/db_pg.php');
if(isset($_REQUEST['subcategorydetail']) && ($_REQUEST['subcategorydetail'] == 'subcategorydetailForm')){
$Array = explode("-",$_REQUEST['name']);

$sql = pg_query($db, "select ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data from planet_osm_point where ".$Array[0]."='".$Array[1]."' and name!=''");
$sqlData= [];
while($row = pg_fetch_row($sql)) {
    array_push($sqlData, json_decode($row[0], true));
}
$sqlnameResult = pg_query($db, "SELECT osm_id,name FROM public.planet_osm_point WHERE ".$Array[0]."='".$Array[1]."' and name!=''");
while($rows = pg_fetch_row($sqlnameResult)) {
    $nameData[] = array('name'=>base64_encode($rows[1]));
}

$eatoutDatas = pg_query($db, "select
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
osm_id as osmid
from 
public.planet_osm_point 
WHERE ".$Array[0]."='".$Array[1]."' and name!=''");
$eatouts= [];
while($row = pg_fetch_row($eatoutDatas)) {
	
	$eatouts[] = array(
	"phone"=>$row[0],
	"en_name"=>trim($row[1],'"'),
	"hy_name"=>trim($row[2],'"'),
	"ru_name"=>trim($row[3],'"'),
	"opening_hours"=>$row[4],
	"cuisine"=>$row[5],
	"website"=>$row[6],
	"city"=>$row[7],
	"street"=>$row[8],
	"internet_access"=>$row[9],
	"outdoor_seating"=>$row[10],
	"internet_access_fee"=>$row[11],
	"description"=>$row[12],
	"smoking"=>$row[13],
	"delivery"=>$row[14],
	"email"=>$row[15],
	"ja_cuisine"=>$row[16],
	"az_name"=>$row[17],
	"postcode"=>$row[18],
	"facebook"=>$row[19],
	"country"=>$row[20],
	"district"=>$row[21],
	"contact_phone"=>$row[22],
	"instagram"=>$row[23],
	"operator"=>$row[24],
	"vegetarian"=>$row[25],
	"ar_name"=>$row[26],
	"townhall"=>$row[27],
	"designation"=>$row[28],
	"es_name"=>$row[29],
	"capacity"=>$row[30],
	"tr_name"=>$row[31],
	"contact_facebook"=>$row[32],
	"reservation"=>$row[33],
	"instagram"=>$row[34],
	"takeaway"=>$row[35],
	"url"=>$row[36],
	"level"=>$row[37],
	"toilets"=>$row[38],
	"cuisine_1"=>$row[39],
	"cuisine_2"=>$row[40],
	"brand"=>$row[41],
	"contact_email"=>$row[42],
	"wikidata"=>$row[43],
	"wikipedia"=>$row[44],
	"drive_in"=>$row[45],
	"wheelchair"=>$row[46],
	"microbrewery"=>$row[47],
	"opening_hours_covid19"=>$row[48],
	"diet_vegan"=>$row[49],
	"image"=>$row[50],
	"diet_meat"=>$row[51],
	"vatin"=>$row[52],
	"phone_1"=>$row[53],
	"restaurantname"=>trim($row[54],'"'),
	"osmid"=>$row[55]
	) ;
	
}
$rate = mt_rand(0,5);
$rating = number_format((float)$rate, 1, '.', '');
$html = '';
$html = '<div class="closeiconleftpanel" id="EatoutdynamicCloseBtn">
       <a href="javascript:void(0);"><img src="assets/img/icons/left-cross.png"></a>
      </div>
	  <div class="closeiconleftpanel closeleftpanel2 closeleftpanel">
        <img src="assets/img/icons/left-arrow.png">
      </div>
      <div class="scrollbar list-page">
        <div class="img-top ">
          <div class="input-group  search-bar">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Eat Out">
            <div class="cross-btn">
              <button type="button" class="cross-btn2" aria-label="Clear local search field">
                <img src="./assets/img/icons/cross-search.png" alt="">
              </button>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-6">
              <button class="No_Filters">
                <a href="#">
                  <span class="Filter-btn">
                    <img src="./assets/img/icons/filter-btn.png" alt="">
                  </span>
                  <span class="No_Filters_btn">Filters</span>
                </a>
              </button>
            </div>
            <div class="col-md-6">
              <div class="float-right">
                <div class="No_places">
                  <a href="#" class="No_places-list">Places:
                    <span class="No_places-number">'.count($eatouts).'</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="info-card categories-icons-sections">
          <div class="row m-0">
            <div class="filterpart"  data-simplebar>
                <div class="col-md-12 border-bottom">
                  <div class="cafesbar">
                    <a class="btn p-0 toggle-btn">
                      <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                    <ul>
                      <li class="side-list">Cafe</li>
                      <li class="side-list">Bars</li>
                      <li class="side-list">Restaurants</li>
                      <li class="morebtn side-list"><img src="./assets/img/icons/more.png" alt=""></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-12 border-bottom">
                  <div class="cafesbar">
                    <ul>
                      <li class="side-list">Wi-Fi</li>
                      <li class="side-list">Amenities</li>
                      <li class="side-list">Brunch</li>
                      <li class="side-list">payment</li>
                      <li class="side-list">Photo available</li>
                    </ul>
                    <div class="input">
                      <input type="text" class="cafesbar-input" value="" placeholder="Metro station">
                    </div>
                  </div>
                </div>
                <div class="col-md-12 border-bottom">
                  <div class="cafesbar">
                    <h6 class="list-heading">Opening hours</h6>
                    <ul>
                      <li class="side-list active">Open right now</li>
                      <li class="side-list">Open 24 hours</li>
                      <li class="side-list">At the specific time</li>
                    </ul>
                    <div class="input-group">
                      <div class="input">
                        <input type="text" class="cafesbar-input  w-101" value="" placeholder="06:00 pm">
                      </div>
                      <div class="input ml-2">
                        <input type="text" class="cafesbar-input w-64" value="" placeholder="Wed">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 border-bottom">
                  <div class="cafesbar">
                    <h6 class="list-heading">Cuisine</h6>
                    <ul>
                      <li class="side-list">Afgan</li>
                      <li class="side-list">African</li>
                      <li class="morebtn side-list"><img src="./assets/img/icons/more.png" alt=""></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-12 border-bottom">
                  <div class="cafesbar">
                    <h6 class="list-heading">Average bill from 8 to 550 AED</h6>
                    <div class="slidermaindiv">
                      <div id="slider-range"></div>
                      <div class="row slider-labels">
                        <div class="col-xs-6 caption"><span id="slider-range-value1"></span>
                        </div>
                        <div class="col-xs-6 text-right caption"><span id="slider-range-value2"></span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <form>
                            <input type="hidden" name="min-value" value="">
                            <input type="hidden" name="max-value" value="">
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="restaurantslistpart ">
                  <div class="restaurantslistmaindiv"  data-simplebar>';
				  foreach($eatouts as $res){
					 if(!empty($res['opening_hours'])){
						$opening_hours = $res['opening_hours'];
					}else{
					  $opening_hours = "";
					}
					
				$html.='<div class="singledivlist">
                      <div class="leftpart">
                        <a href="javascript:void(0);" class="getEatoutDyanmicDetail" id="'.$res['osmid'].'"><p class="title">'.$res['restaurantname'].'</p></a>
                        <p class="subtitle">Restaurants</p>
                        <p class="details">Average bill $ '.rand(10,99).' '.str_replace(";",",",$res['cuisine']).'</p>
                        <div class="orderonlinebtn">
                          <a href="#">Order Online</a>
                        </div>
                        <div class="location">
                          <img src="assets/img/icons/location.png">
                          <p>'.$res['street'].'</p>
                        </div>
						<div class="location">
                          <p>'. $opening_hours.'</p>
						</div>
                      </div>
                      <div class="rightpart">
                        <div class="restaurantsimg">
						  <img src="assets/img/left-brand-image.png">
						</div>
                        <div class="starboxmaindiv">
                          <div class="starbox">
                            <img src="assets/img/icons/cross-search.png">
                            <img src="assets/img/icons/cross-search.png">
                            <img src="assets/img/icons/cross-search.png">
                            <img src="assets/img/icons/cross-search.png">
                          </div>
                          <div class="ratting">
                            <p>'.$rating.'</p>
                          </div>
                        </div>
                        <p class="totalreviews">'.rand(100,999).' Reviews</p>
                      </div>
                    </div>';
				  }
			$html.='</div>
				<div class="paginationmaindiv">
					<nav aria-label="...">
                  <ul class="pagination">
                    <li class="page-item disabled">
                      <span class="page-link"><img src="assets/img/icons/left-arrow.png"></span>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                      <span class="page-link">
                        2
                        <span class="sr-only">(current)</span>
                      </span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#"><img src="assets/img/icons/right-arrow.png"></a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
	  <div class="extrapart eatoutdynamicSubsidebar" style="display: none;"></div>';

$name = json_encode($nameData);
$data = json_encode($sqlData);
echo $html."|".$data."|".$name;die;


}

?>
