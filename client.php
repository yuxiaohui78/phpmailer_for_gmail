<?php
include 'mailsender.php';
sendEmail ('test@gmail.com', 'Password recovery. Do NOT reply!!!', 'Dear customer, <br> Your password is 123456.<br> Best, <br>Developer Team.');
?>
