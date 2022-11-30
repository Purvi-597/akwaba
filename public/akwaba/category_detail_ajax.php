<?php
///error_reporting(0);
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
  ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data,
  name
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
  $latlng = json_decode($row['geojson_data'])->coordinates;

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
  if(isset($_REQUEST['from']) && $_REQUEST['from'] == 'addvertisement'){
    // echo "<pre>";
    // print_r($row);

  $image = "assets/img/feature-image.png";
  $html = '';


  $rowcountget = 0;
  $review = array();
  $session_user_name = "";
  $count_main = 0;
  $allcount  = 0;


  
  // $query4 = "select review_rating.user_id,review_rating.osm_id,review_rating.title,review_rating.message,review_rating.rating,review_rating.photos,review_rating.status,review_rating.created_at,users.first_name,users.last_name,users.profile_pic from review_rating left join users on review_rating.user_id = users.id where review_rating.status = '1' and osm_id = $id";
  // $result4 = mysqli_query($conn, $query4);
  // $rowcount4=mysqli_num_rows($result4);
  // if($rowcount4 > 0) {
  //         while($rows = $result4->fetch_assoc()) {
  //             $review[] = $rows;

  //         }
  // }

  // $get_review_count = "select * from review_rating where  status = '1' and osm_id = '".$id."'";
  // $result5 = mysqli_query($conn, $get_review_count);
  // $rowcount5 = mysqli_num_rows($result5);
  // $allcount = $rowcount5 * 5;
  // if($rowcount5 > 0){
  //     while($row5 = $result5->fetch_assoc()) {
  //         $count_main += $row5['rating'];
  //     }
  // }

  if(isset($_SESSION['users'])){
    $session_user_name = $_SESSION['users']['firstname']."".$_SESSION['users']['lastname'];;

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


    $get_favourite = "SELECT * from favorites where user_id = $user_id AND  osm_id = $id";
    $result2 = mysqli_query($conn, $get_favourite);
    $rowcountget=mysqli_num_rows($result2);


}


     $data = array();
     $osm_ids = array();
    if(isset($_COOKIE['set_notes'])) {
        $data = json_decode($_COOKIE['set_notes']);
        foreach($data as $row1){
            $osm_ids[] = $row1->osm_id;
        }
    }



  $html = '<div class="closeiconleftpanel" id="advertiseCloseBtn"><a href="javascript:void(0);">
            <img src="assets/img/icons/left-cross.png"></a>
           </div>
           <div class="closeiconleftpanel closeleftpanel2 closeleftpanel">
             <img src="assets/img/icons/left-arrow.png">
           </div>

        <div class="scrollbar list-page" data-simplebar>
           <div class="restaurantdetilsbox" style=""><div class="input-group  search-bar"><div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
          <input type="text" class="form-control" placeholder="Search in Akwaba Maps">
         </div><div class="imagesandcontain">
      <div class="leftpart">
      <p class="d-none lat">'.$latlng[0].'</p>
      <p class="d-none long">'.$latlng[1].'</p>
      <input type="hidden" class="category_osm_id" id="category_osm_id" value="'.$id.'">
      <p class="title">'.trim($row['restaurantname'],'"').'</p>
        <p class="subtitle">'.$cat_type.'</p>
        <p class="subtitle2">Get the best After Sale Service <span> — advertisement</span></p>
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
          <!-- <p class="totalreviews">191 Reviews</p> -->
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
        <a href="javascript:void(0);">know More</a>
      </div>';
    //   icon-8-filled.png

      $html .= '';
      if($rowcountget ==  0){
        $html .= '<div class="commonstylebtn favourites savebtn_add"  id="'.$id.'" data-index="'.$cat_type.'"><img src="assets/img/icons/icon-8.png" id="fav_image"> <p id="fav_status">save</p>';
      }else{
        $html .= '<div class="commonstylebtn favourites savebtn_remove"  id="'.$id.'" data-index="'.$cat_type.'"><img src="assets/img/icons/icon-8-filled.png" id="fav_image"> <p id="fav_status">saved</p>';
      }
    //  <div class="tooltip1" style="position: absolute; top: 25px; left: 0px; display: none;">
    //  <div class="tooltip_save">
    //     <span class="tooltip_add">Added to "Favorites"</span>
    //     <button class="tooltip_btn" type="button">Change</button>
    //  </div>
    $html .='</div>';




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
          <div class="photoslistmaindiv">
            <div class="imageslist">
              <div class="singleimg">
                <img src="assets/img/left-brand-image.png">
              </div>
              <div class="singleimg">
                <img src="assets/img/left-brand-image.png">
              </div>
              <div class="lable-input singleimg">
                <label for="uploadimg">
                  <img src="assets/img/left-brand-image.png">
                  <div class="overlaycount">
                    <p>07 Photos</p>
                  </div>
                </label>
                <input type="file" id="uploadimg" style="display: none;">
              </div>
            </div>
          </div>

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
            if(!empty($row['address'])) {
            $html .= '<div class="detailsofrestorant">
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
                      <p>'.$address.'</p>
                      </div>
                    </div>

                    <div class="entrance">
                      <div class="">
                        <button class="entranceBtnShow" type="button">Show entrance</button>
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
            if(!empty($time[0]) && $time[1]) {
            $html .= '<div class="detailsofrestorant detailsForTime">
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
                      Today from 08:00 am to 08:00 pm
                      <div class="detailsdivOpen">Open</div>

                      <div class="WeekNames">
                        <div class="">
                          <div class="weekDays">
                            <div class="weekDaysName">Sun</div>
                            <div>
                              <div>
                                <div class="OpningClose">opening hours</div>
                              </div>
                              <div class="weekDayTimes">
                                <div class="weekDayTimes2"><bdo dir="ltr">08:00&nbsp;am 08:00&nbsp;pm</bdo></div>
                              </div>
                            </div>
                          </div>
                          <div class="weekDays open">
                            <div class="weekDaysNameMon weekDaysName">Mon</div>
                            <div>
                              <div>
                                <div class="OpningClose">opening hours</div>
                              </div>
                              <div class="weekDayTimes">
                                <div class="weekDayTimes2"><bdo dir="ltr">08:00&nbsp;am 08:00&nbsp;pm</bdo></div>
                              </div>
                            </div>
                          </div>
                          <div class="weekDays">
                            <div class="weekDaysName">Tue</div>
                            <div>
                              <div>
                                <div class="OpningClose">opening hours</div>
                              </div>
                              <div class="weekDayTimes">
                                <div class="weekDayTimes2"><bdo dir="ltr">08:00&nbsp;am 08:00&nbsp;pm</bdo></div>
                              </div>
                            </div>
                          </div>
                          <div class="weekDays">
                            <div class="weekDaysName">Wed</div>
                            <div>
                              <div>
                                <div class="OpningClose">opening hours</div>
                              </div>
                              <div class="weekDayTimes">
                                <div class="weekDayTimes2"><bdo dir="ltr">08:00&nbsp;am 08:00&nbsp;pm</bdo></div>
                              </div>
                            </div>
                          </div>
                          <div class="weekDays">
                            <div class="weekDaysName">Thu</div>
                            <div>
                              <div>
                                <div class="OpningClose">opening hours</div>
                              </div>
                              <div class="weekDayTimes">
                                <div class="weekDayTimes2"><bdo dir="ltr">08:00&nbsp;am 08:00&nbsp;pm</bdo></div>
                              </div>
                            </div>
                          </div>
                          <div class="weekDays">
                            <div class="weekDaysName">Fri</div>
                            <div>
                              <div>
                                <div class="OpningClose">opening hours</div>
                              </div>
                              <div class="weekDayTimes">
                                <div class="weekDayTimes2"><bdo dir="ltr">08:00&nbsp;am 08:00&nbsp;pm</bdo></div>
                              </div>
                            </div>
                          </div>
                          <div class="weekDays" style="color: rgb(146, 146, 146);">
                            <div class="weekDaysName">Sat</div>
                            <div>
                              <div>
                                <div class="OpningClose">opening hours</div>
                              </div>
                              <div class="weekDayTimes">
                                <div class="_1y2nud6">—</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>';
            }

            if(!empty($row['phone'])){
            $html .= '<div class="detailsofrestorant detailsFormobilenum">
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
            if(!empty($row['website'])){

            $html .= '<div class="detailsofrestorant detailsFormobilenum">
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
                        href="www.dubai.ferraridealers.com">www.dubai.ferraridealers.com</a></div>
                  </div>
                </div>
              </div>
            </div>';
            }
            // instagram
            // contact_facebook
            if(!empty($row['instagram']) || !empty($row['contact_facebook'])){
            $html .= '<div class="SocialMedia" data-divider="true" data-divider-shifted="true">';
            if(!empty($row['instagram'])){
            $html .= '<div class="SocialMediaTab">
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
              </div>';
            }

            if(!empty($row['contact_facebook'])){
                $html .= '<div class="SocialMediaTab">
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
              </div>';
            }
              if(!empty($row['contact_facebook'])){
                $html .= '<div class="SocialMediaTab">
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
          </div>';
              }
            }
          $html .= '<div class="error-tab">
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
            </div>';



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
    </div>
    </div>
   </div>
  </div>
 </div>


      <div class="tab-pane fade Info-tab " id="Info" role="tabpanel" aria-labelledby="Info-tab">

      </div>
      <!-- Info-tab -->

      <!-- Reviews-Tab -->
      <div class="tab-pane fade Reviews-Tab " id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">
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
                  <p>'.$count_main.'/'.$allcount.'</p>
                </div>
              </div>
            </div>
          </div>
                <div class="allreviews" style="max-height: 35vh;    overflow: auto;">
                <div class="col-lg-12 col-12 inner-padding allreviews_in">';

                if(!empty($review)){

                    foreach($review as $r1){
                        if(!empty($r1['profile_pic'])){
                        $background_image = "background-image:url('../public/uploads/users/'".$r1['profile_pic'].");";
                        }else{
                        $background_image = "background-image: url(./assets/img/user1.png);";
                         }
                        $html .= '<div class="All-tab-div">
                        <div class="reviewHeadRating">
                          <div class="reviewHeadRatingDiv1">
                            <div class="reviewHeadRatingDiv12">
                              <div class="clientImageSmall">
                                <div class="clientSmallImg" style=" width: 100%;
                              height: 100%;
                              max-width: 100%;
                              max-height: 100%;'.
                              $background_image.'border-radius: 0px;"></div>
                              </div>
                              <div class="ClientNameReview">
                                <span class="ClientNameReviewSpan">
                                  <span class="ClientNameReviewSpan1">

                                    ​<span class="ClientNameOne" title="">'.$r1['first_name'].' '.$r1['last_name'].'</span>
                                  </span>
                                  <span class="ClientNameReviewSpan1">
                                    ​<span class="ClientReviewOne"></span>
                                  </span>
                                </span>
                                <div class="ClientReviewdate">'.date("d/m/Y h:m", strtotime($r1['created_at'])).'</div>
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
                            <a class="reviewBodyReviewOne">'.$r1['message'].'</a>
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
                }

                $html .= '</div>






          </div>
          <!-- OverflowTab -->


          <!-- NewReviewDiv -->
          <div class="NewReviewDiv">
            <div class="reviewonlinebtn orderonlinebtn">
            <a href="javascript:void(0)" class="addreviewBtn" style="display: inline;" data-index="'.$id.'" id="'.trim($row['name'],'"').'">
            <button class="NewReviewDivBtn" type="button">Write a new review</button>
            </a>
            </div>
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
//   $html = '<div class="closeiconleftpanel" id="catCloseBtn"><a href="javascript:void(0);"><img src="assets/img/icons/left-cross.png"></a> </div> <div class="closeiconleftpanel closeleftpanel2 closeleftpanel"> <img src="assets/img/icons/left-arrow.png"> </div> <div class="restaurantdetilsbox" style="background-image: url('.$image.');">
//             <div class="imagesandcontain">
//               <div class="leftpart">

//                 <p class="title">'.trim($row['restaurantname'],'"').'</p>
//                 <p class="subtitle">'.$cat_type.'</p>
//                 <div class="rattinggroup">
//                   <div class="starboxmaindiv">
//                     <div class="starbox">
//                       <img src="assets/img/icons/star-rating.png">
//                       <img src="assets/img/icons/star-rating.png">
//                       <img src="assets/img/icons/star-rating.png">
//                       <img src="assets/img/icons/star-rating.png">
//                     </div>
//                     <div class="ratting">
//                       <p>4.0</p>
//                     </div>
//                   </div>
//                   <p class="totalreviews">'.rand(100,999).' Reviews</p>
//                 </div>
//               </div>
//               <div class="rightpart">
//                 <div class="restaurantsimg">
//                   <img src="assets/img/left-brand-image.png">
//                 </div>
//               </div>
//             </div>
//             <div class="multiplebuttons">
//               <div class="orderonlinebtn">
//                 <a href="#">Order Online</a>
//               </div>
//               <div class="commonstylebtn savebtn">
//                 <img src="assets/img/icons/icon-8.png">
//                 <p>save</p>
//               </div>
//               <div class="commonstylebtn sendbtn">
//                 <img src="assets/img/icons/share.png">
//                 <p>send</p>
//               </div>
//               <div class="commonstylebtn gobtn">
//                 <img src="assets/img/icons/route.png">
//                 <p>go</p>
//               </div>
//             </div>
//           </div>
//           <div class="tabmaindiv" data-simplebar>
//             <ul class="nav nav-tabs" id="myTab" role="tablist">
//               <li class="nav-item">
//                 <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">info</a>
//               </li>
//               <li class="nav-item">
//                 <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">reviews</a>
//               </li>
//               <li class="nav-item">
//                 <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">prices</a>
//               </li>
//             </ul>
//             <div class="tab-content" id="myTabContent">
//               <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
//                 <div class="firsttabmaindiv">
//                   <div class="detailsofrestorant">
//                     <a class="btn p-0 toggle-btn">
//                       <i class="fa fa-angle-down" aria-hidden="true"></i>
//                     </a>
//                     <div class="features-overflow">';
//             if(!empty($row['description'])) {
//                         $html.='<p class="feature-p">'.$row['description'].'</p>';
//             }else{
//               $html.='<p class="feature-p">No Description found</p>';
//             }
//                     $html.='</div>
//                   </div>
//                   <div class="photoslistmaindiv">
//                     <p class="maintitle">Photos</p>
//                     <div class="imageslist">
//                       <div class="singleimg">
//                         <img src="assets/img/left-brand-image.png">
//                       </div>
//                       <div class="singleimg">
//                         <img src="assets/img/left-brand-image.png">
//                       </div>
//                       <div class="singleimg">
//                         <img src="assets/img/left-brand-image.png">
//                         <div class="overlaycount">
//                           <p>07 Photos</p>
//                         </div>
//                       </div>
//                     </div>
//                   </div>
//                   <div class="detailslist">';


//           if(!empty($address)){
//             $html.='<div class="singledetails">
//               <div class="icondiv">
//                 <img src="assets/img/icons/star-rating.png">
//               </div>
//               <div class="detailsdiv">
//               <p>'.$address.'</p>
//               </div>
//               </div>';
//           }
//             if(!empty($time[0]) && $time[1]) {
//                     $html.='<div class="singledetails">
//                       <div class="icondiv">
//                         <img src="assets/img/icons/star-rating.png">
//                       </div>
//                       <div class="detailsdiv">
//                         <p><span>Open Days:</span> '.$week.'</p>
//                       </div>
//                     </div>';
//             $html.='<div class="singledetails">
//                       <div class="icondiv">
//                         <img src="assets/img/icons/star-rating.png">
//                       </div>
//                       <div class="detailsdiv">
//                         <p><span>Open Hours:</span> '.date("g:i A", strtotime($time[0])).' to '.date("g:i A", strtotime($time[1])).'</p>
//                       </div>
//                     </div>';
//             }
//           if(!empty($row['phone'])){
//           $html.='<div class="singledetails">
//                       <div class="icondiv">
//                         <img src="assets/img/icons/star-rating.png">
//                       </div>
//                       <div class="detailsdiv">
//                         <p>'.$row['phone'].'</p>
//                       </div>
//                     </div>';
//           }
//           if(!empty($row['email'])){
//                   $html.='<div class="singledetails">
//                       <div class="icondiv">
//                         <img src="assets/img/icons/star-rating.png">
//                       </div>
//                       <div class="detailsdiv">
//                         <p>'.$row['email'].'</p>
//                       </div>
//                     </div>';
//           }
//                   $html.='</div>
//                 </div>
//               </div>
//               <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
//                 <div class="secondtabmaindiv">
//                   <div class="">

//                   </div>
//                 </div>
//               </div>
//               <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
//             </div>
//           </div>
//       <p class="d-none lat">'.$latlng[0].'</p>
//           <p class="d-none long">'.$latlng[1].'</p>';
  }else{


  $image = "assets/img/feature-image.png";



  
  $rowcountget = 0;
  $review = array();
  
  $count_main = 0;
  $allcount  = 0;

  $rowcount4  = 0;
  
  $query4 = "select review_rating.user_id,review_rating.osm_id,review_rating.title,review_rating.message,review_rating.rating,review_rating.photos,review_rating.status,review_rating.created_at,users.first_name,users.last_name,users.profile_pic from review_rating left join users on review_rating.user_id = users.id where review_rating.status = '1' and osm_id = $id ORDER BY review_rating.id DESC";
  $result4 = mysqli_query($conn, $query4);
  //$rowcount4=mysqli_num_rows($result4);

  // if($rowcount4 > 0) {
  //         while($rows = $result4->fetch_assoc()) {
  //             $review[] = $rows;

  //         }
  // }

  // $get_review_count = "select * from review_rating where  status = '1' and osm_id = '".$id."'";
  // $result5 = mysqli_query($conn, $get_review_count);
  // $rowcount5 = mysqli_num_rows($result5);
  // $allcount = $rowcount5 * 5;
  // if($rowcount5 > 0){
  //     while($row5 = $result5->fetch_assoc()) {
  //         $count_main += $row5['rating'];
  //     }
  // }



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

    //}
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
                <a class="nav-link Reviews-Tab" id="profile-tab" data-toggle="tab" href="#Reviews" role="tab" aria-controls="profile" aria-selected="false">reviews</a>
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
                        $html.='</div>
                        <input type="hidden" class="category_osm_id" id="category_osm_id" value="'.$id.'">';

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
                    </div></div></div>';

        $html .='<div class="tab-pane fade Reviews-Tab" id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">';
        $html .=' <div class="Review" style="padding: 12px 12px 4px;">
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
      
      <div class="Review" style="padding: 12px 12px 4px;">

      <div class="tab ReviewAnstab ">
      <ul class="nav nav-tabs " id="myTab" role="tablist">
        <li class="nav-item All-tab ">
          <a class="nav-link  active" id="this-branch" data-toggle="tab" href="#All" role="tab"
            aria-controls="All" aria-selected="true">This Branch</a>
        </li>
        <li class="nav-item Positive-tab">
          <a class="nav-link " id="all-branch" data-toggle="tab" href="#Positive" role="tab"
            aria-controls="Positive" aria-selected="false">All Branch</a>
        </li>
       
      </ul>
    </div>

      </div>
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
              <p></p>
            </div>
          </div>
        </div>
      </div>';
      
      $html .='<div class="allreviews" style="max-height: 52vh;    overflow: auto;">
      <div class="col-lg-12 col-12 inner-padding allreviews_in">';
      if(!empty($review)){

        foreach($review as $r1){
            // echo "<pre>";
            // print_r($r1);
            if(!empty($r1['profile_pic'])){
            $background_image = "background-image:url('../public/uploads/users/'".$r1['profile_pic'].")";
            }else{
            $background_image = "background-image: url(./assets/img/user1.png);";
             }
            $html .= '<div class="All-tab-div">
            <div class="reviewHeadRating">
              <div class="reviewHeadRatingDiv1">
                <div class="reviewHeadRatingDiv12">
                  <div class="clientImageSmall">
                    <div class="clientSmallImg" style=" width: 100%;
                  height: 100%;
                  max-width: 100%;
                  max-height: 100%;'.
                  $background_image.'border-radius: 0px;"></div>
                  </div>
                  <div class="ClientNameReview">
                    <span class="ClientNameReviewSpan">
                      <span class="ClientNameReviewSpan1">

                        ​<span class="ClientNameOne" title="">'.$r1['first_name'].' '.$r1['last_name'].'</span>
                      </span>
                      <span class="ClientNameReviewSpan1">
                        ​<span class="ClientReviewOne"></span>
                      </span>
                    </span>
                    <div class="ClientReviewdate">'.date("d/m/Y h:m", strtotime($r1['created_at'])).'</div>
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
                <a class="reviewBodyReviewOne">'.$r1['message'].'</a>
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
    }

      $html .= '</div></div>';
      $html .='  <div class="NewReviewDiv">
      <div class="reviewonlinebtn orderonlinebtn">
      <a href="javascript:void(0)" class="addreviewBtn" data-check="check" style="display: inline;" data-index="'.$id.'" id="'.trim($row['name'],'"').'">
      <button class="NewReviewDivBtn" type="button">Write a new review</button>
      </a>
      </div>
    </div>';

   

        $html .= '</div>';


        $html .= '<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"></div>
            </div>
          </div>
      <p class="d-none lat">'.$latlng[0].'</p>
          <p class="d-none long">'.$latlng[1].'</p>';
  }
	echo $html;die;
}
?>
 