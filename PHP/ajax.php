<!DOCTYPE html>
<html lang="en">
<head>
  <title>AJAX Form Call</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="images/img3.jpg">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
        <form>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Recipient" value="syed.zain4401@gmail.com">
          </div>
          <div class="form-group">
            <input type="text" name="subject" class="form-control" placeholder="Subject" value="Test email">
          </div>
          <div class="form-group">
            <textarea name="message" cols="30" rows="10" class="form-control" placeholder="Compose message...">This is a test email sent from an AJAX call.</textarea>
          </div>
          <div class="form-group">
            <button type="button" class="form-control btn btn-primary" onclick="sendEmail()">Send</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    function sendEmail() {
      $.ajax({
        type: "POST",
        url: "form.php",
        data: {
          email: $("input[name='email']").val(),
          subject: $("input[name='subject']").val(),
          message: $("textarea[name='message']").val(),
          send: true
        },
        success: function(response) {
          console.log(response);
          alert("Mail Sent!");
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
          alert("Mail could not be sent!");
        }
      });
    }
  </script>

</body>
</html>
