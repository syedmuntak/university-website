<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$messgae = $_POST['message'];

$email_form = 'cse_1812020151@lus.ac.bd'

$email_subject = 'New Form Submission';
$email_body = "User name: $name.\n".
"User Email: $visitor_email.\n".
"Subject: $subject.\n".
"User Message: $message.\n"



$to = 'ejaj.lus.1999@gmail.com';
$header = "Form: $email_from \r\n";

$header .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$header);
header("Location: contact.html");

?>