<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $error = [];
    $subject = $_POST['subject'];
    $to  = 'mopahemma@gmail.com';
    $body = $_POST['message'];

    if($body == '' || $body == ' ') {
      $error[] = "Please Write me a message";
    }
      
    if($subject == '' || $subject == ' ') {
      $error[] = 'Please give message a subject';
    }
      
    if(empty($error)) {
      $config = include __DIR__ . "/../../config.php";
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile Page</title>
    <link rel="stylesheet" type="text/css" href="mopahshewuri.css">
</head>
<body>
	<div id="container">
		<img src="https://z-p3-scontent-lht6-1.xx.fbcdn.net/v/t1.0-9/18700349_1466489463373989_2991987763592421259_n.jpg?oh=b3addb17a19aa3f5b4c9491134d8b007&oe=5A4A1C8C">
		<h1>Mopah Shewuri</h1>
        <img class="icon" src="https://upload.wikimedia.org/wikipedia/commons/7/76/Slack_Icon.png"> mopahshewuri

        <p>Am Mopah Emmanuel Shewuri by name, a graduate that is interested in technology. am current learning web programming with hotels.ng </p>
	
<div class="contact">
    <h1>Contact Me</h1>
        <form class="form" action="#" method="POST">
            <input type="text" name="name" placeholder="Enter name" required="required"/><br> <br>
        
            <input type="email"  name="email" placeholder="Enter email" required="required"/><br><br>
        
            <input type="text" name="subject" placeholder="Enter subject" required="required"/><br><br>

            <textarea name="message" name="message" rows="6" cols="10" required="required" placeholder="Message"></textarea> <br><br>
        
    
        <button type="submit" class="btn" id="form-submit">Send</button>
        </form>
    </div>
                        
</div>
</div>



</body>
</html>