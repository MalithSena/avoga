<?php

/* Inputs */

$name     = trim(stripslashes(htmlspecialchars($_POST['data'][0]['value'])));
$email    = trim(stripslashes(htmlspecialchars($_POST['data'][1]['value'])));
$depart   = trim(stripslashes(htmlspecialchars($_POST['data'][2]['value'])));
$person   = trim(stripslashes(htmlspecialchars($_POST['data'][3]['value'])));
$category   = trim(stripslashes(htmlspecialchars($_POST['data'][4]['value'])));

/* Email Template */

$to       = "inquiries@avogaholidays.com";

$subject  = "Booking form submitted by:  $name";

$body     = "You have received a new message from $name, regarding a booking on $depart. Please provide necessary details in due course <br>";
$body    .= "Name: ".$name."<br>";
$body    .= "Email: ".$email."<br>";
$body    .= "Person: ".$person."<br>";
$body    .= "Depart date: ".$depart."<br>";
$body    .= "Category: ".$category."<br>";


$headers  = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8";
 
mail($to, $name, $body, $headers);

die("Success! Your message has been sent.");


?>






