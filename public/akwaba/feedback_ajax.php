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
		sendmail($name,$email,$message);
		echo "true";die;
	} else {
		echo "false";die;
	}
}
function sendmail($username,$email,$usermessage){
$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = 'harshkumar.parmar@sapphiresolutions.net';
    $mail->Password = 'wtgbdfosnkipvbcv';
	
    $mail->setFrom($email, 'Feedback');
    $mail->addAddress($email, 'Feedback');
    $mail->addReplyTo($email, 'Feedback'); 

   
    $name = 'Feedback';
    $email = $email;
	//$message = $usermessage;
    $message = "Hello '".$username."', <br> Thank you for your valuable feedback. AKWABA team will be contact shortly. <br><br> Thank you. <br> AKWABA MAP.";
    $mail->IsHTML(true);
    $mail->Subject = 'Feedback Response';
    $mail->Body = $message;
    //$mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';

    $mail->send();
} catch (Exception $e) {
    // echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}	
	
}
?>
