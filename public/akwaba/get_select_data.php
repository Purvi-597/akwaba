<?php 

error_reporting(0);
session_start();
include('config/db_mysql.php');
$html = "";

$make_id = $_POST["make_id"];
$result = mysqli_query($conn,"SELECT * FROM model where make_id  = $make_id");
$result2 = array();
while($row = mysqli_fetch_assoc($result)) {
    $result2[] = $row;
}
echo json_encode($result2);
?>