<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'dolapob@gmail.com';
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
    <meta charset="utf-8">

    <title>Babatunde Adedolapo - @dolapobabs</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="HandheldFriendly" content="true">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="https://ca.slack-edge.com/T3QLSP8HM-U6Q4F9V0E-45a4b4ef6a53-512">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />

    
    <style type="text/css">
    
    html {
    background-color: whitesmoke;

}
    body {
        margin: 0%;
        text-align: center; 
        font-weight: 100; 
        font-family: Trebuchet MS,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Tahoma,sans-serif;

    }
    .body{
        margin: 0%; 
        padding: 0; 
        width: 100%;  
        text-align: center;
    }
    

    .avatar {
        margin: 0 40px 20px 0;
        margin-top: 40px;
    }
        .avatar img {
            max-width: 300px;
            max-height: 300px;
            border-radius: 80px;
        }


    .content {
        width: auto;
            text-align: center; 


    }
    a{
          text-decoration: none;
         }
            
    .title {
        font-size: 48px;
        font-weight: normal;
        line-height: 1;
        color: blue;
    }
    .name{
        font-size: 22px;
        color: green;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    .social-icons li {
        display: inline;
        margin: 0 10px;
        font-size: 20px; color: blue;
    }
    
    .social-icons i.fa.fa-facebook{
	color: #4A6AAF;

    }
    .social-icons i.fa.fa-twitter{
        color:  #71D8FF;
        
    }
    .social-icons i.fa.fa-google{
        color: #EA4335;
        
    }
    .social-icons i.fa.fa-google:hover{
        color: #FBBC05;
        
    }
    .social-icons i.fa.fa-github{
        color:  #323131;
        
    }
    .social-icons i.fa.fa-envelope{
        color: black;
        
    }

input[type=text], select, textarea {
    width: 100%; /* Full width */
    padding: 12px; /* Some padding */  
    border: 1px solid #ccc; /* Gray border */
    border-radius: 4px; /* Rounded borders */
    /* box-sizing: border-box; /* Make sure that padding and width stays in place */ 
    margin-top: 6px; /* Add a top margin */
    margin-bottom: 16px; /* Bottom margin */
    resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}
    #form{
        width: 50%;
        margin: 0 auto;
        min-width:80px;
    }

/* Style the submit button with a specific background color etc */
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;

}
input[type=reset] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
    background-color: greenyellow;
}

/* Add a background color and some padding around the form */
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
    </style>
    <!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
</head>

<body class="body">
    <div class="avatar">
        <img src="https://ca.slack-edge.com/T3QLSP8HM-U6Q4F9V0E-45a4b4ef6a53-512" alt="Avatar">
        
    </div>

    

    <div class="content">
        <h1 class="title">Babatunde Adedolapo</h1>

        <p>
            I'm a 300 level Computer Science Student of the Federal University of Agriculture, Abeokuta. I'm a Front-End Developer.<br> I'm a lover of anything "techy". I like to try out new things. <br>I believe in Hardwork and consistency..
        </p>
        <p><img src="https://p4.zdassets.com/hc/theme_assets/138842/200037786/logo.png" height="32" width="100" alt="Slack logo">  <span class="name">@dolapobabs</span> </p>
        <ul class="social-icons">
            <li><a target='_blank' href="mailto:dolapob@gmail.com" title="Send an email"><i class="fa fa-envelope"></i></a></li>
            <li><a target='_blank' href="https://web.facebook.com/adedolapo.adekunle.5"> <i class="fa fa-facebook"></i></a></li>
            <li><a target='_blank' href="http://twitter.com/dolapobabs" ><i class="fa fa-twitter"></i></a></li>
            <li><a target='_blank' href="http://instagram.com/dolapobabs" ><i class="fa fa-instagram"></i></a></li>
            <li><a target='_blank' href="https://plus.google.com/u/0/109609644786879758331" ><i class="fa fa-google"></i></a></li>
            <li><a target='_blank' href="http://github.com/dolapobabs"> <i class="fa fa-github"></i></a></li>
            <li><a target="_blank" href="http://dolapobabs.ng.tn"><i class="fa fa-globe"></i></a></li>
        </ul>

        <p>Want to check my Completed Stage 1 Task? <a target='_blank' href="https://github.com/dolapobabs/HNG-Internship">Here!</a></p>

        <br>
        <h3>Contact Me</h3>
        <div class="container">
                <form  id="form" method="POST">
              
                  <label for="subject">Subject</label>
                  <textarea id="subject" name="subject" placeholder="Enter Subject.." style="height:30px"></textarea>
                  <label for="subject">Message</label>
                  <textarea id="message" name="message" placeholder="Write something here.." style="height:200px"></textarea>
              
                  <input type="submit" id="submit" value="SEND">
                  <input type="reset" class="reset" value="RESET" id="reset" name="reset" />
              
                </form>
              </div>


    </div>
    <br>
    <footer>  &copy; Dolapobabs. All Rights Reserved </footer>
</body>


</html>
