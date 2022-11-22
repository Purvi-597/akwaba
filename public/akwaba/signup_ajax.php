<?php
error_reporting(0);
session_start();
include('config/db_mysql.php');
if(isset($_REQUEST['signup']) && ($_REQUEST['signup'] == 'signupForm')){
	$firstname = $_REQUEST['firstname'];
	$lastname = $_REQUEST['lastname'];
	$email = $_REQUEST['email'];
	$password = md5($_REQUEST['psd']);
	$contactno = $_REQUEST['contactno'];
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	$users = "SELECT * FROM `users` WHERE `status` = '1' and email = '".$email."' OR contact_no = '".$contactno."'";
	
	$result = $conn->query($users);
	
	if($result->num_rows > 0) {
		echo "user is already exists.";die;
	} else {
		$sql = "INSERT INTO users (first_name, last_name, email, password, contact_no, role, status, created_at, updated_at) VALUES ('".$firstname."', '".$lastname."', '".$email."', '".$password."', '".$contactno."', 'user', '1', '".$created_at."', '".$updated_at."')";
		if (mysqli_query($conn, $sql)) {
			   $_SESSION['users'] =  array(
			     'id' =>$conn->insert_id,
			     'firstname' =>$firstname,
			     'lastname' =>$lastname,
			     'email' =>$email,
			     'contactno' =>$contactno
			   );
			  echo "true";die;
		} else {
			  echo "false";die;
		}
	}
}

?>
