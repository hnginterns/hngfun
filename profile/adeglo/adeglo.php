<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'glonimi0@gmail.com';
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
  <title>my profile</title>
    
    <meta charset="utf-8">
<link rel="stylesheet" href="adeglo.css" type="text/css"/>
  </head>
  <body>

    <div id="hey">
        <p>
            <img  id="img" src="http://i.imgur.com/NagAUya.jpg"
             alt="my picture"/>
        </p>
        <p id="pag">NAME: ADEBOWALE GLORY</p>
        <a  href="https://hnginterns.slack.com/messages/@adeglo"><img id="png" src="http://i.imgur.com/2cG9aht.png"/></a>
        <a  href="https://github.com/mystery1999"><img id="png2" src="http://i.imgur.com/l0pY0gZ.png"/></a>
        <a href="https://github.com/mystery1999/Stage-1">Stage1 repo</a>
        <p>
            About Me: I’m from Ondo State. I’m  a 200 level, Computer
            Engineering student of Federal University of Technology, Akure.
            I love cats although I have never owned one;).
        </p>
        <form method=“POST” action=“#”>
            
                <h3>LEAVE A COMMENT</h5>
                
                    <label for="subject">Subject</label>
                    <input  type=“text” name=“subject” placeholder = "Please type your name" required/></br>
                
                
                    <label for="message">Message</label>
                    <textarea  name= 'message' placeholder='Type your message'></textarea>
                
                    <button type=“submit” name=“submit”>
                        submit
                    </button>
                </div>
            
       </form>
   </div>
   
</body>
</html>
