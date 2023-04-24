<?php

    if(isset($_POST['Message'])){
    $subject = "Mail sent from HTML form through PHP using AJAX call";
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $msg = $_POST['Message'];
    $recipient = "syed.zain4401@gmail.com";

    $info = "Name: ".$name."\nPhone: ".$phone."\nEmail: ".$email."\nMessage: ".$msg;

    if(empty($name) || empty($phone) || empty($msg)){
        echo("All inputs are required");
    }
    else{
        if(mail($recipient, $subject, $info)){
            echo("Mail successfully sent to $recipient!");
        }
        else{
            echo("Failure in sending mail!");
        }
    }
    }

?>