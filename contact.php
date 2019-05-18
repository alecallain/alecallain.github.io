<?php

$to = "alecjallain@gmail.com";
$Subject = "Email from custom website";

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$headers = "From: ".$email;

mail($to, $Subject, $message, $headers);

echo "Email has been sent! Thank you $name!";

echo "Click here to go back to the main page"
?>

<html>
    <a href="index.html">Home page link</a>
</html>