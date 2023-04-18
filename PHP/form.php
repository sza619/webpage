<!DOCTYPE html>
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
        <h2 class="text-center">Send Message</h2>

        <?php
          if(isset($_POST['send'])){
            $recipient = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            $sender = "from: syed.zain4401@gmail.com";

            if(empty($recipient) || empty($subject) || empty($message)){
              ?>
              <div class="alert alert-danger text-center">
                <?php echo("All inputs are required")?></div>
              <?php
            }else{
              if(mail($recipient, $subject, $message, $sender)){
                ?>
                <div class="alert alert-success text-center">
                <?php echo("Mail successfully sent to $recipient!")?>
                </div>
              <?php
                $recipient = "";
              }else{
                ?>
                <div class="alert alert-danger text-center">
                <?php echo("Failure in sending mail!")?>
                </div>
                <?php
              }
            }
          }
        ?>

        <form action="form.php" method="POST" autocomplete="off">
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Recipient">
          </div>
          <div class="form-group">
            <input type="text" name="subject" class="form-control" placeholder="Subject">
          </div>
          <div class="form-group">
            <textarea name="message" cols="30" rows="10" class="form-control" placeholder="Compose message..."></textarea>
          </div>
          <div class="form-group">
            <input type="submit" class="form-control btn btn-primary" value="Send" name="send">
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
