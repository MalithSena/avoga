<?php

/* Inputs */

$email    = trim(stripslashes(htmlspecialchars($_POST['email'])));

/* Email Template */

$to       = "inquiries@avogaholidays.com";

$subject  = "Subscribe form submitted";

$body     = "You have received a new message. <br>";
$body    .= "Email: ".$email."<br>";

$headers  = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8";
 
mail($to, $subject, $body, $headers);

die("Success! Your message has been sent.");

?>