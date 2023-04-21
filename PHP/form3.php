<?php

          if(isset($_POST['msg'])){
            $subject = "Message 1";
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $msg = $_POST['msg'];
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

          if(isset($_POST['msg2'])){
            $subject = "Message 2";
            $name = $_POST['name2'];
            $email = $_POST['email2'];
            $phone = $_POST['phone2'];
            $msg = $_POST['msg2'];
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