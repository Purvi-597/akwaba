<?php
error_reporting(0);
session_start();
include('config/db_mysql.php');
if(isset($_REQUEST['feedback']) && ($_REQUEST['feedback'] == 'feedbackForm')){
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$contact = $_REQUEST['contact'];
	$message = $_REQUEST['message'];
	$status = "1";
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	$sql = "INSERT INTO contactus (name, email, contact_no, message, status, created_at, updated_at) VALUES ('".$name."', '".$email."', '".$contact."', '".$message."', '".$status."', '".$created_at."', '".$updated_at."')";
	if (mysqli_query($conn, $sql)) {
		echo "true";die;
	} else {
		echo "false";die;
	}
}

?>
