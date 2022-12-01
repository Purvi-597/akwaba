<?php
error_reporting(0);
session_start();
include('config/db_mysql.php');
include('config/db_pg.php');
if(isset($_REQUEST['id'])){
  $id = $_REQUEST['id'];
  $subcatql = "SELECT `name` FROM `sub_categories` WHERE `status` = '1' and cat_id =".$id;
  $result = $conn->query($subcatql);

  $categoryData= array();
  if($result->num_rows > 0) {
    $fieldName = '';
    $valuesarr = array();
    while($row = $result->fetch_assoc()) {
        $fieldArr = explode("-",$row['name']);
        $fieldName = $fieldArr[0];
        $valuesarr[] = $fieldArr[1];
    }
    $values = implode("','",$valuesarr);
    //echo "SELECT osm_id,name,ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data FROM planet_osm_point WHERE ".$fieldName." IN ('".$values."') and name!=''";
    $categoryResult = pg_query($db, "SELECT osm_id,name,ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data, tags->'phone' as phone,
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
    $fieldName as cat_type
     FROM planet_osm_point WHERE ".$fieldName." IN ('".$values."') and name!=''");
    $i=0;
    while($row = pg_fetch_array($categoryResult,NULL, PGSQL_ASSOC)) {
        $categoryData[] = $row;
        $categoryData[$i]['name'] = $row['name'];
        $categoryData[$i]['coordinates'] = json_decode($row['geojson_data'])->coordinates;
        $i++;
    }
  }
  echo json_encode($categoryData);
}
exit;
?>
