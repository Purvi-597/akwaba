<?php
error_reporting(0);
session_start();
include('config/db_mysql.php');
include('config/db_pg.php');
if(isset($_REQUEST['id'])){
  $id = $_REQUEST['id'];
  $page_no = $_REQUEST['page_no'];
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
    if($page_no == ''){$offset = 0;}else{$offset = ($page_no-1)*10;}
    
    $values = implode("','",$valuesarr);
    //echo "SELECT osm_id,name,ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data FROM planet_osm_point WHERE ".$fieldName." IN ('".$values."') and name!=''";
    $categoryResult = pg_query($db, "SELECT osm_id,name,ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data, tags->'phone' as phone,
    tags->'name:en' as en_Name, 
    tags->'opening_hours' as opening_hours,  
    tags->'cuisine' as cuisine,  
    tags->'addr:city' as city,  
    tags->'addr:street' as street,
    tags->'description' as description,
    tags->'addr:postcode' as postcode,
    tags->'addr:country' as country,
    tags->'addr:district' as district,
    tags->'image' as image,
    $fieldName as cat_type
     FROM planet_osm_point WHERE ".$fieldName." IN ('".$values."') and name!=''");
    $i=0;
    while($row = pg_fetch_array($categoryResult,NULL, PGSQL_ASSOC)) {
        $categoryData[] = $row;
        $categoryData[$i]['name'] = base64_encode($row['name']);
        $categoryData[$i]['coordinates'] = json_decode($row['geojson_data'])->coordinates;
        $i++;
    }
  }
  echo json_encode($categoryData);
}
exit;
?>
