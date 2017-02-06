<?php
require_once('PHPMailer-master/PHPMailerAutoload.php');

//This php script is used for sending email through gmail smtp server.

$gmailUsername = "littlefish0908@gmail.com";
$gmailAppPassword = "aaqkkgapkwuhxlzw";
$sender = "Developer Team";

//$body uses <br> or <br/> instead of \n or \r
function sendEmail ($revEmailAddr, $subject, $body){
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 0; // debugging:0 = disable log. 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->IsHTML(true);

$mail->Username = $GLOBALS['gmailUsername'];
$mail->Password = $GLOBALS['gmailAppPassword'];

$mail->SetFrom($GLOBALS['gmailUsername'], $GLOBALS['sender']);
//$mail->AddReplyTo('redirect@gmail', 'Support Team');
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AddAddress($revEmailAddr, "");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
}


?>
