<?php
error_reporting(0);
session_start();
include('config/db_mysql.php');
include('config/db_pg.php');
if(isset($_REQUEST['id'])){
  $id = $_REQUEST['id'];
  $page_no = $_REQUEST['page_no'];
  $catName = $_REQUEST['catName'];
  $hoursfilter = $_REQUEST['hoursfilter'];
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
    if($page_no == '1'){$offset = 0;}else{$offset = ($page_no-1)*10;}
    
    if($catName!=''){
      $values = $catName;
    }else{
      $values = implode("','",$valuesarr);
    }

    /*$exSql = '';
    if($hoursfilter!=''){
      $exSql = $catName;
    }else{
      $values = implode("','",$valuesarr);
    }*/
    
    //echo "SELECT osm_id,name,ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data FROM planet_osm_point WHERE ".$fieldName." IN ('".$values."') and name!=''";

    $categoryCountResult = pg_query($db, "SELECT count(osm_id) as tolcnt FROM planet_osm_point WHERE ".$fieldName." IN ('".$values."') and name!=''");
    $cntrow = pg_fetch_array($categoryCountResult,NULL, PGSQL_ASSOC);

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
     FROM planet_osm_point WHERE ".$fieldName." IN ('".$values."') and name!='' limit 10 offset $offset");
    $i=0;
    while($row = pg_fetch_array($categoryResult,NULL, PGSQL_ASSOC)) {
        $categoryData[] = $row;
        $categoryData[$i]['name'] = base64_encode($row['name']);
        $categoryData[$i]['coordinates'] = json_decode($row['geojson_data'])->coordinates;
        $categoryData[$i]['tolcnt'] = $cntrow['tolcnt'];
        $subcateArr[] = $row['cat_type'];
        $i++;
    }
    $catvalues = implode(",",$valuesarr);
    $categoryData[$i]['subcateArr'] = $catvalues;
  }
  echo json_encode($categoryData);
}
exit;
?>
