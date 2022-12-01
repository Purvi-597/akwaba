<?php
error_reporting(0);
session_start();
include('config/db_mysql.php');
if(isset($_REQUEST['login']) && ($_REQUEST['login'] == 'loginForm')){
	$email = $_REQUEST['email'];
	$password = md5($_REQUEST['psd']);
	$sql = "SELECT * FROM `users` WHERE `status` = '1' and email = '".$email."' and password = '".$password."'";
	
	$result = $conn->query($sql);
	
	if($result->num_rows == 0) {
		echo "false";die;
	} else {
			while($row = $result->fetch_assoc()) {
				$users =  array(
			     'id' =>$row['id'],
			     'firstname' =>$row['first_name'],
			     'lastname' =>$row['last_name'],
			     'email' =>$row['email'],
			     'contactno' =>$row['contact_no'],
<<<<<<< HEAD
                 'profile_pic' => $row['profile_pic']
=======
				 'profile_pic' =>$row['profile_pic']
>>>>>>> Darshan
			   );
			}
			  $_SESSION['users'] = $users;
			  echo "true";die;
		
	}
}

?>
