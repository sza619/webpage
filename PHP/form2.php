<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>Send Mail from Localhost</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="images/img3.jpg">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    html, body{
      background-color: dodgerblue;
    }
    .container{
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-family: Arial, Helvetica, sans-serif;
    }

    .f{
      background-color: white;
      padding: 20px 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5),0 6px 15px 0 rgba(0,0,0,0.5);
    }
    .form-control{
      height: 50px;
      font-size: 15px;
    }
    .form-group{padding: 7px;}
    .container .f textarea{
      height: 100px;
      resize: none;
    }
    .container .f .btn{
      font-size: 20px!important;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 f">
        <h2 class="text-center">Fill Details</h2>  -->
        <?php

          if(isset($_POST['msg'])){
            $subject = "Mail sent from HTML form through PHP using AJAX call";
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

        ?>
        
        <!-- <form class="needs-validation" method="POST" autocomplete="off" novalidate>
          <div class="form-group">
            <input name="name" class="form-control" placeholder="Name" pattern="[a-zA-Z ]"></input>
          </div>
          <div class="form-group">
            <input name="recipient" type="recipient" class="form-control" placeholder="recipient" pattern="[a-z0-9]+@[a-z]+(\.[a-z]{2,3})+">
          </div>
          <div class="form-group">
            <input name="no" type="text" class="form-control" placeholder="Phone" pattern="[a-zA-Z ]">
          </div>
          <div class="form-group">
            <input name="send" type="submit" class="form-control btn btn-primary" value="Send" placeholder="Submit">
          </div>
        </form>
      </div>
    </div>
  </div> 
</body>
</html> -->