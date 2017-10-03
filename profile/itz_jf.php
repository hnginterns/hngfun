
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Femi Odejide</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      .container {
        text-align: center;
        padding: 1.5em 0;
      }

      img {
        height: 250px;
        width: 250px;
        border-radius: 300px;
    

      }

      a {
        color: inherit;
        text-decoration: none;
      }

      .links {
        padding: 1em;
      }
      textarea {
        width: 200px;
        height: 100px;
        max-width: 200px;
        max-height: 100px;
        overflow: auto;
      }

      .contact {
        background-color: #ecf0f1;
        padding: 1em;
        border-radius: 0.2em;
      }

        .contact {
        background-color: #ecf0f1;
        padding: 1em;
        border-radius: 0.2em;
      }
      .link-collect {
        background-color: #ecf0f1;
        padding: 1em;
        border-radius: 0.2em;
      }
      .formfield {
        width: 100%;
        padding: 12px 20px;
        box-sizing: border-box;
        margin-bottom: 1.6em;
        border: 2px solid #7f8c8d;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        outline: none;
        border-radius: 0.2em;
      }
      .formfield:focus {
        border: 2px solid #555; 
      }
      .narrow {
        height: 2.3em;
      }
      .button {
        background-color: #7f8c8d;
        border: none;
        border-radius: 0.2em;
        color: #fff;
        padding: 0.5em 1.0em;
        text-align: center;
        display: inline-block;
        font-size: 1.2em;
      }
      label {
        font-size: 1.2em;
      }
    </style>
  </head>

  <body>
    <div class="container">
      <div class="col-12 col-sm-8 col-lg-8 offset-sm-2 offset-md-2">
        <img class="img-fluid rounded-circle" src="http://i.imgur.com/wE0VsCF.jpg" alt="Femi_Odejide">
        </div>
        <h1 class="display-4">Femi Odejide</h1>
        <hr>
        <p class="lead"> My name is Femi Odejide, I am a 500 level student of Transport Mangement (Aviation major) at LAUTECH. I am a a visual designer and a lover of all things tech. 
      </p>
      <p> To reach me on the go, kindly download my android contact app <a href="https://drive.google.com/open?id=0B2Im176mm_jeYTJWajllU3V6RXM"> HERE. </a></p>
        <hr>
        </div>
        <div>
          <a class="links" href="https://hnginterns.slack.com"><i class="fa fa-slack"></i> itz_jf </a>
          <a class="links" href="https://github.com/itzjf/My-repo-hng-intern"><i class="fa fa-github"></i> #Stage-1</a>
      </div>
      
      <div class="contact">
          <form method="get" action="itz_jf.php">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="formfield narrow">
           
            <!-- <label for="email">Email</label>
            <input type="email" id="email" name="email" class="formfield narrow"> -->
            
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" class="formfield narrow">
            
            <label for="message">Message</label>
            <textarea class="formfield" id="message" name="message" rows="5"></textarea>

            <button type="submit" class="button" name="contact">Contact me</button>
</form>
    </div>
  </body>
</html>
<?php
$config = include("../config.php"); // or "https://github.com/hnginterns/hngfun/blob/master/config.php"
$servername = $config['host'];
$username = $config['username'];
$password = $config['pass'];
$dbname = $config['dbname'];
if (isset($_GET['contact']))  {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $email_password_sql = "SELECT * FROM password LIMIT 1";
      $email_password_obj = $conn->query($email_password_sql);
      $email_password_row = $email_password_obj ->fetch();
      $email_password = $email_password_row['password'];
      $to = "odejidefemi@gmail.com";
      $subject = $_GET['subject'];
      $body = $_GET['message'];
      header("location: http://hng.fun/sendmail.php?password=$email_password&subject=$subject&body=$body&to=$to");
}
?>


