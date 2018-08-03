<?php

if (!isset($_POST['submit'])) {
	header("Location: http://www.example.com/");
}

$m_name = $_POST['name'];
$m_email = $_POST['email'];
$m_subject = $_POST['subject'];
$m_message = $_POST['message'];

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/OAuth.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  						// Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               	// Enable SMTP authentication
    $mail->Username = 'allanapryvet@gmail.com';          	// SMTP username
    $mail->Password = 'e/2euedR15af@9#29/a';//kjoewdfucgfbjwehdaoIHWERICBASIDUuqwdiuASGI                       	// SMTP password
    $mail->SMTPSecure = 'tls';                            	// Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                   	// TCP port to connect to

    //Recipients
    $mail->setFrom($m_email, $m_name);
    $mail->addAddress('kairanyapaul@gmail.com', 'Paul');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo($m_email, $m_name);
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $m_subject;
    $mail->Body    = "<div><h4>".$m_name." contacted you through the Website</h4><p>".$m_message."</p";
    $mail->AltBody = $m_message;

    $mail->send();

} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

    header("Location: /ndalambi");

?>