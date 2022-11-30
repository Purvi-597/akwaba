<?php
error_reporting(0);
session_start();
include('config/db_pg.php');
include('config/db_mysql.php');
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

$sql = "select * from review_rating where user_id = '".$_SESSION['users']['id']."' and status = '1' and deleted_at IS NULL";
$result = $conn->query($sql);
if($result->num_rows > 0) {
		while($rowss = $result->fetch_assoc()) {
			$rows[] = $rowss;
		}
}
$firstname = isset($_SESSION['users']['firstname'])?$_SESSION['users']['firstname']:"";
$lastname = isset($_SESSION['users']['lastname'])?$_SESSION['users']['lastname']:"";

$image = "assets/img/feature-image.png";
$html = '';

 if(isset($_SESSION['users'])){
        $user_id = $_SESSION['users']['id'];
        $query = "SELECT * from notes where user_id = $user_id AND  osm_id = $id";
        $result = mysqli_query($conn, $query);
        $rowcount = "";
        $rowcount=mysqli_num_rows($result);
        $note_name = "";
        if($rowcount > 0){
        $i = mysqli_fetch_array($result);
        $note_name = $i['notes'];
        }

         }
         $data = array();
         $osm_ids = array();
        if(isset($_COOKIE['set_notes'])) {
            $data = json_decode($_COOKIE['set_notes']);
            foreach($data as $row1){
                $osm_ids[] = $row1->osm_id;
            }
        }



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
            <div class="commonstylebtn savebtn" id="'.$row['osmid'].'" data-index="'.$cat_type.'">
              <img src="assets/img/icons/icon-8.png">
              <p>save</p>
			 <div class="tooltip1" style="position: absolute; top: 25px; left: 0px; display: none;"> <div class="tooltip_save"> <span class="tooltip_add">Added to "Favorites"</span> <button class="tooltip_btn" type="button">Change</button> </div> </div> 
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

                $html.='</div><input type="hidden" class="category_osm_id" id="category_osm_id" value="'.$id.'">';
                  if(isset($_SESSION['users'])){
                                $style = 'display:none';
                                    if($rowcount == 0){
                                        $style = 'display:block';
                                    }
                                     $html .='<div class="AddNotes Add_notes_link" style="'.$style.'">
                                        <div class="AddNotesBtn">Add note</div>
                                        </div>';


                            }else{
                                $style = 'display:none';
                                if(!in_array($id, $osm_ids)){
                                    $style = 'display:block';
                                }
                                $html .='<div class="AddNotes Add_notes_link" style="'.$style.'">
                                <div class="AddNotesBtn">Add note</div>
                                </div>';
                                }


	
                        $html .='<div class="AddNotesSection">
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
                                  <a href="javascript:void(0);" id="save_cancel"><button class="FoundErrorBtn AddNotesDivbutton" type="button">Cancel</button></a>

                                </div>
                                <a href="javascript:void(0);" class="save_note" id="save_note"><button class="FoundErrorBtn AddNotesDivbutton AddNotesDivbuttonBlue "
                                  type="button">Save</button></a>

                              </div>
                            </div>
                        </div>';
	
                    if(isset($_SESSION['users'])){

                    $html .= '<div class="AddNotes edit_notes_div"';

                            if($rowcount > 0){
                    $html .=  'style="display: block"';
                            }else{
                                $html .=  'style="display: none"';
                            }

	
                    $html .='>
                    <div class="AddNoteReturn">
                    <div class="Note edit_note_text" id="edit_note_text">'.$note_name.'</div>
                    <div class="EditDeleteIcons">
                      <div class="EditDeleteIconsDiv">
                      <a herf="javascript:void(0);" id="edit_note_osm" class="edit_note_osm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M16 5l-1 1.001 3 3 1.001-1v-1L17 5h-1zM6 15.001l-1 3V19h1l3-.999L17 10l-3-2.999-8 8z"></path></svg>
                      <a>
                      </div>
                      <div class="EditDeleteIconsDiv">
                      <a herf="javascript:void(0);" id="delete_note_osm" class="delete_note_osm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M6.85 18.17a2 2 0 0 0 2 1.83h6.32a2 2 0 0 0 2-1.83L18 8H6zM15 5l-1-1h-4L9 5 5 6v1h14V6l-4-1z"></path></svg>
                        </a>
                      </div>
                    </div>
                     </div>
                    </div>';

                    }else {
                    
							$style = 'display:none';
		
							$notes = '';
							 if(in_array($id, $osm_ids)){
								 $style = 'display:block';
								 $key = array_search ($id, $osm_ids);
								 $notes = $data[$key]->notes;
							 }
							$html .= '<div class="AddNotes edit_notes_div" style="'.$style.'">                        <div class="AddNoteReturn">
                        <div class="Note edit_note_text" id="edit_note_text">'.$notes.'</div>
                        <div class="EditDeleteIcons">
                          <div class="EditDeleteIconsDiv">
                          <a herf="javascript:void(0);" id="edit_note_osm" class="edit_note_osm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M16 5l-1 1.001 3 3 1.001-1v-1L17 5h-1zM6 15.001l-1 3V19h1l3-.999L17 10l-3-2.999-8 8z"></path></svg>
                          <a>
                          </div>
                          <div class="EditDeleteIconsDiv">
                          <a herf="javascript:void(0);" id="delete_note_osm" class="delete_note_osm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M6.85 18.17a2 2 0 0 0 2 1.83h6.32a2 2 0 0 0 2-1.83L18 8H6zM15 5l-1-1h-4L9 5 5 6v1h14V6l-4-1z"></path></svg>
                            </a>
                          </div>
                        </div>
                         </div>
                        </div>';


                    }
		          $html .='<div class="EditNotesSection">
                    <div>
                     <div class="AddNotesDiv1">
                       <div class="AddNotesDiv2">
                         <div class="AddNotesDiv2_1">

                         </div>
                         <div class="AddNotesDiv3" style="margin-left: 32px;">
                           <div data-n="wat-kit-textfield" style="width: 100%;">
                             <div class="AddNotesDiv4">
                               <div class="AddNotesDiv5">
                                 <input class="editNotesDivInput" placeholder="Note text" maxlength="70" type="text"
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
                         <a href="javascript:void(0);" id="save_edit_cancel"><button class="FoundErrorBtn AddNotesDivbutton" type="button">Cancel</button></a>
                       </div>
                       <a href="javascript:void(0);" class="save_edit_note" id="save_edit_note"><button class="FoundErrorBtn AddNotesDivbutton AddNotesDivbuttonBlue "
                         type="button">Save</button></a></div>
                   </div>
                    </div></div>';


	 $html.='</div>
            </div>
             <div class="tab-pane fade " id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <div class="secondtabmaindiv">
                <div class="top-review-positive">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="starboxmaindiv star-15 color-yellow">
                        <div class="star-rating">
                          <input id="star-21" type="radio" name="rating-21" value="star-21" />
                          <label for="star-21" title="4 stars">
                            <i class="active fa fa-star" aria-hidden="true"></i>
                          </label>
                          <input id="star-22" type="radio" name="rating-22" value="star-22" />
                          <label for="star-22" title="3 stars">
                            <i class="active fa fa-star" aria-hidden="true"></i>
                          </label>
                          <input id="star-23" type="radio" name="rating-23" value="star-23" />
                          <label for="star-23" title="2 stars">
                            <i class="active fa fa-star" aria-hidden="true"></i>
                          </label>
                          <input id="star-24" type="radio" name="rating-24" value="star-24" />
                          <label for="star-24" title="1 star">
                            <i class="active fa fa-star" aria-hidden="true"></i>
                          </label>
                        </div>
                        <div class="ratting">
                          <p class="ratting-p"><span class="ratting-span">4.0</span>/4</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-5 my-auto">
                      <div class="positive-input-box">
                        <!-- <a class="btn p-0 toggle-btn2 toggle-btn4">
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                          </a> -->
                        <input type="text" class="cafesbar-input positive-input  w-101" value="" placeholder="Positive">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="top-review-tabs">
                  <div class="row">
                    <div class="col-lg-12 px-3">
                      <ul class="nav nav-tabs branch-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="thisbranch-tab" data-toggle="tab" href="#thisbranch" role="tab"
                            aria-controls="thisbranch" aria-selected="false">This branch</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link  " id="allbranch-tab" data-toggle="tab" href="#allbranch" role="tab"
                            aria-controls="allbranch" aria-selected="true">All branches</a>
                        </li>
                      </ul>
					<div class="tab-pane fade show active" id="thisbranch" role="tabpanel"
                        aria-labelledby="thisbranch-tab">';
                       if(isset($rows)){ 
						 $html.='<div class="col-lg-12 col-12 inner-padding">
                          <div class="d-lg-flex d-block d-md-flex align-items-lg-center">';
						  if(isset($_SESSION['users']['profile_pic'])){
                            $html.='<img src="../public/uploads/users/'.$_SESSION['users']['profile_pic'].'" alt="..." class="user-profile-image rounded-circle ">';
						  }else{
							$html.='<img src="./assets/img/user1.png" alt="..." class="user-profile-image rounded-circle ">';
						  }  
                           $html.='<div class="lh-1">
                              <span class="code-profile">'.$firstname.' '.$lastname.'</span> <br>
                              <span class="code-deatils">'.date('D M Y H:i:s').'</span>
                            </div>
                            <div class="icon-right">
                              <div class="star-rating">
                                <input id="star-25" type="radio" name="rating-25" value="star-25" />
                                <label for="star-25" title="4 stars">
                                  <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="star-26" type="radio" name="rating-26" value="star-26" />
                                <label for="star-26" title="3 stars">
                                  <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="star-27" type="radio" name="rating-27" value="star-27" />
                                <label for="star-27" title="2 stars">
                                  <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                                <input id="star-28" type="radio" name="rating-28" value="star-28" />
                                <label for="star-28" title="1 star">
                                  <i class="active fa fa-star" aria-hidden="true"></i>
                                </label>
                              </div>
                            </div>
                          </div>
                          <p class="code-data mb-0">'.$rows[0]['message'].'</p>
						<div class="lh-2">
                         <a href="#">
                          <span class="code-likes">
                            <img src="./assets/img/icons/like.svg" class="img-fluid like-btn" alt="">
                            Like
                          </span>
                         </a>
                         <a href="#">
                            <span class="code-likes pl-2 float-right">
                              <img src="./assets/img/icons/flag.svg" class="img-fluid" alt="">
                            </span>
                         </a>
                          </div>
                        </div>';
					   }
				$html.='</div>
					  <div class="review-div-btn  multiplebuttons">
							<div class="reviewonlinebtn orderonlinebtn">
							  <a href="javascript:void(0)" class="addreviewBtn" style="display: inline;" data-index="'.$row['osmid'].'" id="'.trim($row['restaurantname'],'"').'">Write a new review</a>
							</div>
						</div>
						</div>
                  </div>
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
