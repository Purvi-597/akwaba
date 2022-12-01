<?php
header("Access-Control-Allow-Origin: *");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/Exception.php';
require_once __DIR__ . '/PHPMailer.php';
require_once __DIR__ . '/SMTP.php';

// passing true in constructor enables exceptions in PHPMailer
$mail = new PHPMailer(true);
// header('Location: http://localhost:8080/fitrst%20project/contact.html');
try {
	
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = 'harshkumar.parmar@sapphiresolutions.net'; // YOUR gmail email
    $mail->Password = 'wtgbdfosnkipvbcv'; // YOUR gmail password
	
    // Sender and recipient settings
    $mail->setFrom('darshan.modi@sapphiresolutions.net', 'AKWABA');
    $mail->addAddress('darshan.modi@sapphiresolutions.net', 'Verification code');
    $mail->addReplyTo('darshan.modi@sapphiresolutions.net', 'AKWABA'); // to set the reply to

    // Setting the email content message
    $name = 'AKWABA';
    $email = 'darshan.modi@sapphiresolutions.net';
    $message = 'This is my demo mail';
    $message = "Hello Admin, <br> Following user tried to contact you : <br> Name : $name <br> email : $email <br> message : $message <br> Thank you. <br> Akshar Tiffin Services.";
    $mail->IsHTML(true);
    $mail->Subject = 'AKWABA';
    $mail->Body = $message;
    $mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';

    $mail->send();

} catch (Exception $e) {
    // echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}
?>