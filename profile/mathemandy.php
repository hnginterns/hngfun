<?php 
   $config = include('../config.php');
       $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
       $con = new PDO($dsn, $config['username'], $config['pass']);
   
       $exe = $con->query('SELECT * FROM password LIMIT 1');
       $data = $exe->fetch();
       $password = $data['password'];
   
   
   if (isset($_GET['sendmessage'])) {
   
           $subject = "Hello";
           $password = htmlentities(strip_tags(trim($password)));
           $body = htmlentities(strip_tags(trim($_GET['body'])));
           $to = "andyeshiet@gmail.com";
   
           $location = "../sendmail.php?to=$to&subject=$subject&password=$password&body=$body";
   
           header("Location: " . $location);
   
       }
   
   ?>
<!DOCTYPE HTML>
<html>
   <head>
      <meta charset="utf-8">
      <title>Andy's Profile: @mathemandy</title>
      <link rel="stylesheet" href="css/andy.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <body>
      <div class="sheath">
      <div id="body-wrapper">
      <div class="name">
         Andy Eshiet
         <h3>Akwa-ibom, Nigeria</h3>
         <h3> <a class="links" href="https://hnginterns.slack.com"><i class="fa fa-slack"></i> mathemandy </a>
         </h3>
          <h3>
            <a href="https://twitter.com/mathemandy" target="_blank"><i class="fa fa-twitter"></i>Follow Me</a>
            <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
            <link href='https://fonts.googleapis.com/css?family=Roboto:400' rel='stylesheet' type='text/css'>
          </h3>
      </div>
      <div class="row">
         <div class="content">
            <div class="me"></div>
            <div class="info">
               <p>
                  Android Developer, Computer Science Student of University of Uyo. I believe Discovery involves experimentation.
               </p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="tricks">
            <div class="skills">
               <div class="a">
                  <p>SQL Server</p>
                  <p class="lvl">Intermediate</p>
               </div>
               <div class="b">
                  <div class="time thirty"></div>
               </div>
            </div>
            <div class="skills">
               <div class="a">
                  <p>CSS</p>
                  <p class="lvl">INTERMEDIATE</p>
               </div>
               <div class="b">
                  <div class="time forty"></div>
               </div>
            </div>
            <div class="skills">
               <div class="a">
                  <p>Javascript</p>
                  <p class="lvl">BEGINNER</p>
               </div>
               <div class="b">
                  <div class="time twenty"></div>
               </div>
            </div>
            <div class="skills">
               <div class="a">
                  <p>Java</p>
                  <p class="lvl">Intermediate</p>
               </div>
               <div class="b">
                  <div class="time fourty"></div>
               </div>
            </div>
            <div class="skills">
               <div class="a">
                  <p>Android Development</p>
                  <p class="lvl">Intermediate</p>
               </div>
               <div class="b">
                  <div class="time ninety"></div>
               </div>
            </div>
         </div>
         <div class="head">Project</div>
         <div class="row">
            <div class="col-1">
               <div >
                  <h2>
                     <a class="title" href="https://github.com/mathemandy/HNG-Test"><i class="fa fa-github"></i> Stage-1</a>
                  </h2>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <form action="#" method="get">
            <h1>Miss Me and wanna Hit me?</h1>
            <input placeholder="Name" name="name" type="text" value="" required>
            <input placeholder="Email address" type="email" onblur="this.setAttribute('value', this.value);" value="" required>
            <div>
               <span class="validation-text">Please enter a valid email address.
               </span>
            </div>
            <div class="flex">
               <textarea placeholder="Type your Message here" name="body" rows="4" cols="80" required></textarea>
            </div>
            <button type="submit" name="sendmessage">
            Send Message
            </button>
         </form>
      </div>
        </div>
          </body>
</html>
