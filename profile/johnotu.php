<?php
$config = include("../config.php"); // or "https://github.com/hnginterns/hngfun/blob/master/config.php"
$servername = $config['host'];
$username = $config['username'];
$password = $config['pass'];
$dbname = $config['dbname'];

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
	die("Connection failed: " . mysql_connect_error());
}

echo "Connected successfully";

$email_password_sql = "SELECT * FROM password LIMIT 1";
$email_password = $conn -> query($email_password_sql);
$current_email_password_row = $email_password -> fetch();
$current_email_password = $current_email_password_row['password'];


?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HNG Internship Profile - John Otu</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      img.bg {
        min-height: 100%;
        min-width: 1024px;
        
        width: 100%;
        height: auto;
        
        position: fixed;
        top: 0;
        left: 0;
        opacity: 0.2;
      }

      @media screen and (max-width: 1024px) { 
        img.bg {
          left: 50%;
          margin-left: -512px; 
        }
      }

      .center {
        text-align: center;
      }

      .container {
        padding: 1.5em 0;
      }

      .img-profile {
        width: 40%;
        height: auto;
      }

      a {
        color: inherit;
        text-decoration: none;
      }

      .links {
        padding: 1em;
        font-size: 1.3em;
      }

      .bio {
        font-size: 1.5em;
        background-color: #ecf0f1;
        padding-right: 0.5em;
        padding-left: 0.5em;
        border-radius: 0.2em;
      }

      .contact {
        background-color: #ecf0f1;
        padding: 1em;
        border-radius: 0.2em;
      }
    </style>
  </head>

  <body>
    <img src="https://s2.postimg.org/mhf7grqmx/nature-reserve-375609_1920.jpg" class="bg">
    <div class="container">
      <div class="col-12 col-sm-8 col-lg-8 offset-sm-2 offset-md-2">
        <div class="center">
          <img class="img-fluid rounded-circle img-profile" src="https://s20.postimg.org/bleryh20t/35w_Afqcf_400x400.jpg" alt="John_Otu_Photo">
          <h1 class="display-4">John Otu</h1>
          <hr>
          <div class="bio">
            <p class="bio-text">I am <strong>human</strong>.</p>
            <p class="bio-text">I like how technology can be used to automate tedious tasks and solve problems. I am an Electrical/Electronics Engineer, I code in JavaScript and play with Python from time to time. I hope to exit something close to a unicorn before my hair turns grey.</p>
          </div>
          <hr>
          <div>
            <a class="links" href="https://hnginterns.slack.com"><i class="fa fa-slack"></i> johnotu </a>
            <a class="links" href="https://github.com/johnotu/hng-tasks"><i class="fa fa-github"></i> #Stage-1</a>
          </div>
        </div>
        <hr>
        <div class="contact">
          <form method="get" action="../sendmail.php">
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Name">
           </div>
           <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Email Address">
            </div>
            <div class="form-group">
            	<input type="text" name="subject" class="form-control" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea class="form-control" name="body" rows="5" placeholder="Message"></textarea>
            </div>
            <input type="hidden" name="to" value="johnne01@gmail.com">
            <input type="hidden" name="password" value="<?= $current_email_password; ?>">
            <button type="submit" class="btn btn-secondary">Send</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>