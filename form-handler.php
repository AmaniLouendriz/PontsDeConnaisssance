<?php
 /** initializing the input variables */

include 'home.html';

$visitor_name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@pontsConn.ma';
$email_subject= 'New Form Submission';
$email_body="User Name:$name.\n".
             "User Email:$visitor_email.\n".
              "Subject: $subject.\n".
                "User Message:$message.\n";


$to = "amani.louendriz@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email\r\n";


mail($to,$email_subject,$email_body,$headers)or die("Error");

// header("Location:contact.html");

echo "message sent";







?>
