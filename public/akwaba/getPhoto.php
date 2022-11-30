<?php 
include('config/db_mysql.php');

$sql ='SELECT * FROM photos';
$sql1 = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($sql1);
$Data = [];
if(mysqli_num_rows($sql1) > 0) {
	while($row = mysqli_fetch_assoc($sql1)) {
		$Data[] = $row;

	}
	
	
}
$latlong = json_encode($Data);

echo $latlong;

?>