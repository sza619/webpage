<?php
$to_email = "syed.zain4401@gmail.com";
$subject = "Test email to send from XAMPP";
$body = "Hi, This is a test mail to check how to send mail from Localhost using Gmail";
$headers = "From: LocalServer";

if(mail($to_email, $subject, $body, $headers))
{
    echo "Email successfully sent to $to_email!";
}

else
{
    echo "Error sending email!";
}
?>
