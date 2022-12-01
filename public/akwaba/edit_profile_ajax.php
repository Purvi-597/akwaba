<?php
error_reporting(0);
session_start();
include('config/db_mysql.php');

if(isset($_REQUEST['profile']) && ($_REQUEST['profile'] == 'profileForm')){
   $id = $_REQUEST['userid'];
   $name = $_REQUEST['name'];
   $surname = $_REQUEST['surname'];
   $email = $_REQUEST['email'];
    if($_FILES["file"]["name"] != ''){
		$test = explode('.', $_FILES["file"]["name"]);
		$ext = end($test);
		$imagename = rand(100, 999) . '.' . $ext;
		$location = './uploads/users/' . $imagename;  
		move_uploaded_file($_FILES["file"]["tmp_name"], $location);
	   
		$users = "SELECT * FROM `users` WHERE `status` = '1' and email = '".$email."' and id =".$id;
	    $result = $conn->query($users);
		
		if($result->num_rows > 1) {
			echo "false|user is already exists.";die;
		} else {
			$sql = "UPDATE users SET first_name = '".$name."', last_name = '".$surname."', email = '".$email."', profile_pic = '".$imagename."' WHERE id =". $id;
			if (mysqli_query($conn, $sql)) {
				   $_SESSION['users'] =  array(
					 'id' =>$id,
					 'firstname' =>$name,
					 'lastname' =>$surname,
					 'email' =>$email,
					 'profile_pic' =>$imagename
				   );
				  echo 'true|'.$imagename;die;
			} else {
				  echo "false|Something went wrong!";die;
			}
		}
	}
}

?>
