# PHPMailer for Gmail
This code is used for sending email through gmail. The code is using the library PHPMailer.
>https://github.com/PHPMailer/PHPMailer

#1. How to use the code

Modify the file mailsender.php with your own email address and app password as a sender.

The password is NOT the login password of gmail. It is the APP password that Gmail allows user's app to log in the smtp server to send email. 

Read the step #2 to set Gmail and get the 16-digit APP password.

```
<?php
require_once('PHPMailer-master/PHPMailerAutoload.php');

//This php script is used for sending email through gmail smtp server.

$gmailUsername = "littlefish0908@gmail.com"; //Need to be modified according to your gmail address
$gmailAppPassword = "aaqkkgapkwuhxlzw";//Need to be modified according to your App password.
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
```

#2.	How to set gmail for phpmailer

###1.	Go to Sign-in & security -> Connected apps & sites

###2.	Enable “Allow less secure apps”

###3.	Go to Sign-in & security -> Signing in to Google

     Enable “2-Step Verification”

###4.	After step 3. You will receive an email for setting the 2-step verification.

###5.	Then go to the following link to generate an app password

>https://security.google.com/settings/security/apppasswords

Then you can use this app password to connect to smtp server of Gmail with phpMailer.
               
The username is your email address, the password is the app password in PHPMailer.

#Reference
>https://github.com/PHPMailer/PHPMailer

>http://stackoverflow.com/questions/16048347/send-email-using-gmail-smtp-server-through-php-mailer
               
