<?php

session_start();
include('config/db_mysql.php');
include('config/db_pg.php');
if(isset($_REQUEST['value'])){
    $search = $_REQUEST['value'];

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
    tags->'image' as image
     FROM planet_osm_point where tags != '' and name LIKE '%$search%' limit 25");
    $i=0;
    while($row = pg_fetch_array($categoryResult,NULL, PGSQL_ASSOC)) {
        $categoryData[$i]['name'] = $row['name'];
        $categoryData[$i]['coordinates'] = json_decode($row['geojson_data'])->coordinates;
        $i++;
    }


    if (! empty($categoryData)) {
      ?>
<ul class="OnClickMenuDetails" id="country-list">
<?php
      foreach ($categoryData as $country) {
          ?>
 <li class="OnClickMenuDetailsList"
      onClick="selectwhere('<?php echo $country["coordinates"][1]; ?>','<?php echo $country["coordinates"][0]; ?>','<?php echo $country["name"]; ?>');">
    <?php echo $country["name"]; ?>
  </li>
<?php
      } // end for
      ?>
</ul>
<?php
  }
}
exit;
?>
