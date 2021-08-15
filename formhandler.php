<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='info@geekoengineers.com';

$email_subject='New form Submission'
$email_body="User name:$name.\n"
"User email:$email.\n"
"Subject:$subject .\n"
"Message :$message .\n";

$to='sanchaysindhwani2002@gmail.com';
$headers="From:$email_from.\n";
$headers="Reply to:$visitor_email .\n";

mail($to,$email_subject,$email_body,$headers);

header("Location:contact.html");


?>