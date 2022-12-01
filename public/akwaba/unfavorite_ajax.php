<?php
error_reporting(0);
session_start();
include('config/db_mysql.php');
if(isset($_REQUEST['unfavorite']) && ($_REQUEST['unfavorite'] == 'unfavoriteForm')){
$id = $_REQUEST['osmid'];
$userid = $_REQUEST['userid'];
$cat_type = $_REQUEST['type'];


$sql = "DELETE from favorites WHERE user_id = '".$userid."' and osm_id = '".$id."'";
echo $sql;die;
        $result = mysqli_query($conn, $sql);
		if ($result) {
			  echo "true";die;
		} else {
			  echo "false";die;
		}
}

?>
