<?php
///error_reporting(0);
session_start();
include('config/db_mysql.php');
if(isset($_REQUEST['login']) && ($_REQUEST['login'] == 'loginForm')){
	$email = $_REQUEST['email'];
	$password = md5($_REQUEST['psd']);
	
	// $sql = "SELECT * FROM `users` LEFT JOIN cars ON users.id = cars.userId LEFT JOIN make ON cars.car_name = make.id LEFT JOIN model ON make.id = model.make_id WHERE `status` = '1' AND email = '".$email."' AND password = '".$password."'";

	$sql = "SELECT * FROM `users` LEFT JOIN cars ON users.id=cars.userId LEFT JOIN make ON cars.car_name=make.id LEFT JOIN model ON make.id=model.id WHERE `status`='1' AND email='$email'";
	
	$result = mysqli_query($conn, $sql);
	

if (mysqli_num_rows($result) < 0) {
	} else {
			while($row = mysqli_fetch_assoc($result)) {
				$users =  array(
			     'id' =>$row['id'],
			     'firstname' =>$row['first_name'],
			     'lastname' =>$row['last_name'],
			     'email' =>$row['email'],
			     'contactno' =>$row['contact_no'],
				 'profile_pic' =>$row['profile_pic'],
				 'car_make' => $row['car_make'],
				 'car_model'=>$row['car_model'],
				 'car_transmission'=>$row['car_transmission'],
				 'car_fuel'=>$row['car_fuel'],
				 'car_year'=>$row['car_year'],

			   );
			}
			  $_SESSION['users'] = $users;
			  echo "true"; die;
		
	}
}

?>
