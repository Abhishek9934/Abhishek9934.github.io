<?php 

$name = $_POST['Name'];
$email= $_POST['Email'];
$subject = $_POST['Subject'];

$message = $_POST['Message'];
$recipient= "abhiigupta9934@gmail.com";
$content=  "From : $name \n Message: $message";

$mailheader = "From: $email \r\n";

mail($recipient,$subject,$content , $mailheader) or die("Error");
echo "Thank You.\n Your message has been sent.";


 ?>
