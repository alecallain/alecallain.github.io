<?php

$name = $_POST['name'];
$subject = $_POST['subject'];
$sendingEmail = $_POST['mail'];
$message = $_POST['message'];

$to = "alecjallain@gmail.com";
$headers = "From: ".$sendingEmail." <".$sendingEmail.">\r\n";
$headers .= "Reply-To: ".$to."\r\n";
$mailMessage = "You have recieved an e-mail from".$name.".\n\n".$message;

$send = mail($to, $subject, $mailMessage, $headers);

if ($send) {
    echo "<br>";
    echo "Thank you for contacting me. I will reply to your message as soon as I can!";
}
else {
    echo "not able to send";
}

?>