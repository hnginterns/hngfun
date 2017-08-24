<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];

    $subject = $_POST['subject'];
    $to  = 'dmpire2@gmail.com';
    $body = $_POST['body'];

    if($body == '' || $body == ' ') {
      $error[] = "Don't be shy. Write me a message";
    }


    if($subject == '' || $subject == ' ') {
      $error[] = 'A subject would be awesome.';
    }

    if(empty($error)) {

      $config = include __DIR__ . "/../config.php";
      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $con = new PDO($dsn, $config['username'], $config['pass']);

      $exe = $con->query('SELECT * FROM password LIMIT 1');
      $data = $exe->fetch();
      $password = $data['password'];

      $url = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";

      header("location: $url");

    }
  }
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daniella's Profile</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
      
        * {
          box-sizing: border-box;
        }

        body {
          padding: 1rem .5rem;
          font-size: 1.3rem;
          line-height: 1.2;
          max-width: 60rem;
          margin: 0 auto;
          background-image: linear-gradient(to right, #b666d2, #551A8B);  
        }

        .content-page {
          text-shadow: 2px 2px #551A8B;
        }

        h1,h4 {
          color:#ffffff;
          text-align: center;
          text-shadow: 2px 2px #551A8B;
        }

        hr {
          border-top: 1px solid #ffffff;
        }

        .myImage {
          float: left;
          border-radius: 50%;
          border:1px solid #551A8B;
          margin-right: 1em;
        }

        .dannys-text {
          padding: 10px 10px;
          color: #ffffff;
          text-shadow: 2px 2px #551A8B;
        }

        .dannys-slack-icon {
          color: #ffff00;
        }

        .my-github-task {
          color:white;
        }
        .my-github-task:hover {
          color:yellow;
          text-decoration: underline;
        }

        .dannys-input {
            border-radius: 5px;
            width:60%;
            padding: 5px;
        }

        .submit-btn {
          float: right;
          font-size: 12px;
          padding: 5px 15px;
          background-color: #32CD32;
          color:#ffffff;
          border-radius: 7px;
          margin-right: 4%;
        }

        legend {
          color:white;
        }
        .form label {
          color:white;
        }

        .form {
          margin-right: 15%;
          margin-left: 15%;
          margin-top: 3%;
        }

        textarea {
          border-radius: 7px;
        }

    </style>
  </head>
  <body>
    
    <div class="content-page">
        <h1>Daniella Mato</h1>
        <h4>
          <i class="fa fa-slack dannys-slack-icon"></i> @daniella
        </h4>
        <h4>
          <a href="https://github.com/dmpire/hng-php-task" target="_blank">
            <i class="fa fa-github dannys-slack-icon"></i>
            <span class="my-github-task"> GitHub Stage 1 Task</span>
          </a>
        </h4>
        <hr>
            <img src="http://i.imgur.com/dYFenOU.jpg" alt="Daniella Mato's photo" class="myImage" width="40%" height="40%" >
          
      <div class="dannys-text">
        <p>
          Hello there! 
          My name is Daniella Mato. I am learning to become a programmer. I graduated from the University of Jos where i studied applied Chemistry. I've always been in-love with tech though and finally learning to build software is like the coolest turn my life has taken in recent times. I reside in Abuja, Nigeria. When i'm not excitedly coding on Beauty (my beautiful laptop), you'll catch me hiking (I absolutely love nature!) or you'll find me captivated in a biography or autobiography of an awesome person. <br><br>
          Want to say hi? <br>
		  Then catch me on twitter 
          <a href="https://twitter.com/daniella_mato" target="_blank"><i class="fa fa-twitter dannys-slack-icon"></i></a>
        </p>
      </div>

      <div class="form">
        <form action="daniella.php" method="POST">
          <fieldset>
              <legend>Email Me!</legend>
              
                  <label>To :   </label><input name="to" id="to" type="hidden"><br>
                  <label>From : </label><input name="customer_mail" id="customer_mail" class="dannys-input" placeholder="Your E-mail"> <br>
                 <label>Subject :</label><input name="subject" id="subject" class="dannys-input" value="Hello"><br>
                  <label>Body: </label><br>
                <textarea id="body" name="body" cols="50" rows="5" value="Hello" required></textarea>
              <br>
              <button type="submit" class="submit-btn" name="thisemail"><strong>Send</strong></button>
          </fieldset>
        </form>
      </div> 
    </div>  

  </body>
</html>