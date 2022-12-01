<?php
$db = pg_connect("host=10.10.3.50  dbname=gis user=postgres password=uBj1vfYzg5Le3");
if(!$db) {
    echo "Database Connection Failed";
}
?>
