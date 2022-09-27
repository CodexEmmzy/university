<?php
$name =$_POST['name'];
$c_email =$_POST['email'];
$subject =$_POST['subject'];
$message =$_POST['message'];

$email_from = 'emmaxcharles123@gmail.com'

$email_subject = 'New Form Submission'

$email_from = "User Name: $name.\n"
             "User Email: $email.\n"
             "User Subject: $subject.\n"
             "User Message: $message.\n";

$to = 'emmaxcharles123@gmail.com';

$headers = "From: $email_form" .\n";
$headers .= "Reply_To: $visitor_email" .\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html")
?>