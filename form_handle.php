<?php
$name=$_POST['Name'];
$visitor_email=$_POST['mail'];
$subject=$_POST['subject'];
$message=$_POST['Message'];
$email_form='info@yourwebsite.com'
$email_subject='New Form Submission'
$email_body="User Name: $name.\n".
            "User Email: $visitor_email.\n".
            "subject: $subject.\n".
            "User Message: $message.\n";
$to='kp922004@gmail.com'
$headers="From $email_from \r\n ";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("location:contact.html")     
?>