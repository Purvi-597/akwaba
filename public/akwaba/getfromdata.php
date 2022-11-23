<?php
// include("vendor/autoload.php");
// use proj4php\Proj4php;
// use proj4php\Proj;
// use proj4php\Point;

$db = pg_connect("host=10.10.3.50 dbname=gis user=postgres password=uBj1vfYzg5Le3");
if(!$db) {
    echo "Database Connection Failed";
}
$directionResult = pg_query($db, "select ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data, name from planet_osm_point where name != ''");
$directionData = [];
$latlong = [];
$html = '';
while($row = pg_fetch_row($directionResult)) {
    $directionData = json_decode($row[0], true);
	$latlong = implode(",",$directionData['coordinates']);
	$html .= '<option data-id="'.$latlong.'" value="'.$row[1].'">';
}
echo $html;die;
?>
