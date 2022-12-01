<?php
error_reporting(0);
session_start();
include('config/db_mysql.php');
header("Access-Control-Allow-Origin: *");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/PHPMailer/Exception.php';
require_once __DIR__ . '/PHPMailer/PHPMailer.php';
require_once __DIR__ . '/PHPMailer/SMTP.php';


 if(isset($_REQUEST['signup']) && ($_REQUEST['signup'] == 'signupForm')){
	$name = $_REQUEST['firstname'].' '.$_REQUEST['lastname'];
	$firstname = $_REQUEST['firstname'];
	$lastname = $_REQUEST['lastname'];
	$email = $_REQUEST['email'];
	$password = md5($_REQUEST['psd']);
	$contactno = $_REQUEST['contactno'];
	$otp = '123456';
	$emailotp = rand(100000, 999999);
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	$users = "SELECT * FROM `users` WHERE `status` = '1' and email = '".$email."' OR contact_no = '".$contactno."'";
	
	$result = $conn->query($users);
	
	
	if($result->num_rows > 0) {
		echo "false|user is already exists";die;
	} else {
		if($result->num_rows != 0){
			$profile_pic = $result['profile_pic'];
		}else{
			$profile_pic = "";
		}
		$sql = "INSERT INTO tempusers (first_name, last_name, email, password, contact_no, role, otp, emailotp, status, created_at, updated_at) VALUES ('".$firstname."', '".$lastname."', '".$email."', '".$password."', '".$contactno."', 'user', '".$otp."', '".$emailotp."', '1', '".$created_at."', '".$updated_at."')";
		if (mysqli_query($conn, $sql)) {
			   sendmail($name,$email,$emailotp);
			   $id = $conn->insert_id;
			   echo "true|".$id;die;
		} else {
			  echo "false|user is already exists";die;
		}
	}
} 
function sendmail($username,$email,$emailotp){
$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = 'harshkumar.parmar@sapphiresolutions.net';
    $mail->Password = 'wtgbdfosnkipvbcv';
	
    $mail->setFrom($email, 'Verification code');
    $mail->addAddress($email, 'Verification code');
    $mail->addReplyTo($email, 'Verification code'); 

   
    $name = 'Verification code';
    $email = $email;
    $message = "Hello ".$username.", <br> Your email verification code is : <b>".$emailotp."</b> <br><br> Thank you. <br> AKWABA MAP.";
    $mail->IsHTML(true);
    $mail->Subject = 'Akwaba verification code';
    $mail->Body = $message;
    //$mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';

    $mail->send();
} catch (Exception $e) {
    // echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}	
	
}
?>
