<?php

$name = $_POST['name'];
$subject = $_POST['subject'];
$sendingEmail = $_POST['mail'];
$message = $_POST['message'];

$mailToMe = "alecjallain@gmail.com";
$headers = "From: ".$sendingEmail;
$mailMessage = "You have recieved an e-mail from".$name.".\n\n".$message;

mail($mailToMe, $subject, $mailMessage, $headers);
header("Location: index.php?mailsend");

?>