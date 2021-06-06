<?php

/* Inputs */

// $name     = trim(stripslashes(htmlspecialchars($_POST['name'])));
// $email    = trim(stripslashes(htmlspecialchars($_POST['email'])));
// $message  = trim(stripslashes(htmlspecialchars($_POST['message'])));

$name    = trim(stripslashes(htmlspecialchars($_POST['data'][0]['value'])));
$email   = trim(stripslashes(htmlspecialchars($_POST['data'][1]['value'])));
$subject = trim(stripslashes(htmlspecialchars($_POST['data'][2]['value'])));
$message = $_POST['data'][3]['value'];

/* Email Template */

$to       = "inquiries@avogaholidays.com";

$subject  = "Contact form submitted by:  $name";

$body     = "You have received a new message. <br>";
$body    .= "Name : ".$name."<br>";
$body    .= "Email : ".$email."<br>";
$body    .= "Subject : ".$subject."<br>";
$body    .= "Message : ".$message."<br>";

$headers  = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8";
 
mail($to, $subject, $body, $headers);

die("Success! Your message has been sent.");

?>