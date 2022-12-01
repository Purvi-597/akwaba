<?php
error_reporting(0);
session_start();
include('config/db_mysql.php');

if(isset($_REQUEST['verification']) && ($_REQUEST['verification'] == 'verificationForm')){
	$otp = $_REQUEST['otpcode'];
	$emailotp = $_REQUEST['emailverification'];
	$id = $_REQUEST['id'];
	$users = "SELECT * FROM `tempusers` WHERE `status` = '1' and id = '".$id."' and otp = '".$otp."' and emailotp = '".$emailotp."'";
	$result = $conn->query($users);
	$row = $result->fetch_assoc();
	if($result->num_rows > 0){
		$created_at = date("Y-m-d H:i:s");
	   $updated_at = date("Y-m-d H:i:s");

		$sql = "INSERT INTO users (first_name, last_name, email, password, contact_no, role, otp, emailotp, status, created_at, updated_at) VALUES ('".$row['first_name']."', '".$row['last_name']."', '".$row['email']."', '".$row['password']."', '".$row['contact_no']."', 'user', '".$otp."', '".$emailotp."', '1', '".$created_at."', '".$updated_at."')";
		
		$results = $conn->query($sql);
			
			$res =  array(
			 'id' =>$conn->insert_id,
			 'firstname' =>$row['first_name'],
			 'lastname' => $row['last_name'],
			 'email' =>$row['email'],
			 'contactno' =>$row['contact_no'],
			 'profile_pic' =>""
		   );
		
		$_SESSION['users'] = $res;
		echo "true";die;
	}else{
		echo "false";die;
	}
	
	
}
	/*if(isset($_REQUEST['otp']) && ($_REQUEST['otp'] == 'otpForm')){
	echo $_REQUEST['otp'];die;
	$otp = $_REQUEST['otp'];
	$id = $_REQUEST['id'];
	
	$users = "SELECT * FROM `tempusers` WHERE `status` = '1' and id = '".$id."' and otp = '".$otp."'";
	echo $users;die;
 $result = $conn->query($users);
	$row = $result->fetch_assoc();
	
	if($result->num_rows == 0) {
		echo "You are not registered. Please first signup.";die;
	} else {
		$sql = "INSERT INTO tempusers (first_name, last_name, email, password, contact_no, role, otp, status, created_at, updated_at) VALUES ('".$firstname."', '".$lastname."', '".$email."', '".$password."', '".$contactno."', 'user', '".$otp."', '1', '".$created_at."', '".$updated_at."')";
		while($row = $result->fetch_assoc()) {
			$users =  array(
			 'id' =>$row['id'],
			 'firstname' =>$row['first_name'],
			 'lastname' =>$row['last_name'],
			 'email' =>$row['email'],
			 'contactno' =>$row['contact_no'],
			 'profile_pic' =>$row['profile_pic']
		   );
		}
		$_SESSION['users'] = $users;
		echo "true";die;
	} 
}*/

?>
