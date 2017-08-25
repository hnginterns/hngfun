<?php
 if($_SERVER[‘REQUEST_METHOD’] == ‘POST’) {
   $error = [];
   $subject = $_POST[‘subject’];
   $to  = ‘glonimi0@gmail.com’;
   $body = $_POST[‘message’];
   if($body == ‘’ || $body == ' ‘) {
     $error[] = ‘Message cannot be empty.‘;
   }
   if($subject == ‘’ || $subject == ' ‘) {
     $error[] = ‘Subject cannot be empty.‘;
   }
   if(empty($error)) {
     $config = include(dirname(dirname(dirname(__FILE__))).‘/config.php’);
     $dsn = ‘mysql:host=‘.$config[‘host’].‘;dbname=‘.$config[‘dbname’];
     $con = new PDO($dsn, $config[‘username’], $config[‘pass’]);
     $exe = $con->query(‘SELECT * FROM password LIMIT 1’);
     $data = $exe->fetch();
     $password = $data[‘password’];
     $uri = “/sendmail.php?to=$to&body=$body&subject=$subject&password=$password”;
     header(“location: $uri”);
   }
 }
?>



<!DOCTYPE HTML>
<html lang=“en”>

<head>
    <meta charset=“UTF-8">
   <title>my profile</title>
   <link rel=“stylesheet” href=“adeglo.css” type=“text/css”/>
</head>

<body>
   <div>
       <p id=“img”>
           <img src=“http://i.imgur.com/NagAUya.jpg”
            alt=“my picture”/>
       </p>
       <p id=“hey”>NAME: ADEBOWALE GLORY</p>
       <p><a href=“https://hnginterns.slack.com/messages/@adeglo”>Slack</a></p>
       <p><a href=“https://github.com/mystery1999”>github</a></p>
       <p><a href=“https://github.com/mystery1999/Stage-1">Stage1 repo</a></p>  
       <p>
           About Me: I’m from Ondo State. I’m  a 200 level, Computer
           Engineering student of Federal University of Technology, Akure.
           I love cats although I have never owned one;).
       </p>
       <form action=“#” method=“POST”>
               <div >
                   <input id=“name” type=“text” name=“subject” placeholder=“Please type your name” />
               </div>
               <div >
                   <textarea id=“body” rows=“3"  name=“message” placeholder=“Type your message” ></textarea>
               </div>
               
               
               <div>
                   <button type=“submit” name=“submit”>
                   submit
               </button>
           </div>
   
       </form>
   </div>
   
</body>

</html>
