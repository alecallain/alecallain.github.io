<?php

$to = "alecjallain@gmail.com";
$Subject = "Email from custom website";

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$headers = "From: ".$email;

mail($to, $Subject, $message, $headers);

header("Location: index.php?mailsend");

?>