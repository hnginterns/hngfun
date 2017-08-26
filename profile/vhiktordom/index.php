<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];

    $subject = $_POST['subject'];
    $to  = 'vhiktordom@gmail.com';
    $body = $_POST['message'];

    if($body == '' || $body == ' ') {
      $error[] = 'Message cannot be empty.';
    }


    if($subject == '' || $subject == ' ') {
      $error[] = 'Subject cannot be empty.';
    }

    if(empty($error)) {

      $config = include(dirname(dirname(dirname(__FILE__))).'/config.php');
      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $con = new PDO($dsn, $config['username'], $config['pass']);

      $exe = $con->query('SELECT * FROM password LIMIT 1');
      $data = $exe->fetch();
      $password = $data['password'];

      $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";

      header("location: $uri");

    }
  }
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Vhiktor Dominic</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

          <script type="text/javascript">
                  function myDetails()
                  {
                      alert("Thanks for Viewing!");
                  }
          </script>

          <style type="text/css">

                body, html {
                  height: 171%;
                  margin: 0;
                }

                .bg{

                  background-image: url("me.jpg");

                  height: 100%;

                  background-position: center;
                  background-repeat: no-repeat;
                  background-size: cover;
                }

                .card{
                  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 30.92);
                  max-width: 300px;
                  margin: auto;
                  text-align: center;
                  font-family: arial;;
                }

                .container{
                  padding: 0 16px;
                }

                .container::after {

                  content: "";
                  clear: both;
                  display: table;
                }

                .title{
                  color: gold;
                  font-size: 18px;

                }

                button {
                  border: none;
                  outline: 0;
                  display: inline-block;
                  padding: 8px;
                  color: white;
                  background-color: #000;
                  text-align: center;
                  cursor: pointer;
                  width: 100%;
                  font-size: 18px;
                }

                a{
                  text-decoration: none;
                  font-size: 22px;
                  color: azure;
                }
                button:hover, a:hover {
                  opacity: 0.7;
                }
                h1{
                  color:azure;
                }
                p{
                  color: azure;
                }
          </style>

     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body class="bg">
       
          <div class="card">

            <img src="vhiktordom.jpg" alt="Victor Dominic" style="width:100%">
            <div class="container">
              <h1>Victor Dominic</h1>
              <p class="title">Web/Mobile Developer</p>
              <p>I'm just a simple guy, I love transmuting my ideas into reality with the help of a programming Languages.<br> I'm here to get value and hope to leave more better than I came.</p>
                <div style="margin: 24px 0;">
                  
                  <a href="https://github.com/Vhiktordom/getting-started-h2-2017"><i class="fa fa-github"> Stage 1 </i></a><br>
                  <a href="#"><i class="fa fa-slack"> @Vhiktordom</i></a>
                </div>
                 <form method="POST">
            <div>
                    <p>Name</p>
                    <input type="text" name="subject" class="form-input" style="width: 18em;" required>
            </div>


            <div>
               
                    <p>Message</p>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-input" required></textarea>
               
            </div>
            <br>
            <div>
<!--                <input type="submit" value="Send">-->
                <button type="submit" class="submit-button">Send</button>
            </div>
        </form>
            </div>
           </div>
    </body>
</html> 