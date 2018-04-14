<?php

//create short variable names
$name = trim($_POST['fname']);
$email = trim($_POST['email']);
$feedback = trim($_POST['feedback']);

//set up some static information
$toaddress = "aacellusa@example.com";

$subject = "Order Confirmation";

$mailcontent = "Customer name: ".str_replace("\r\n", "", $fname)."\n".
               "Customer email: ".str_replace("\r\n", "",$email)."\n".
               "Customer comments:\n".str_replace("\r\n", "",$order)."\n";

$fromaddress = "From: webserver@example.com";

//invoke mail() function to send mail
mail($toaddress, $subject, $mailcontent, $fromaddress);

?>