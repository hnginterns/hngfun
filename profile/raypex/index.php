<!DOCTYPE html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'raypex2@gmail.com';
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



<html lang ="en">
<head>
<meta charset ="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="contact.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> Ray Okaah's Profile at Hng Internship</title>
</head>
<body>

<h2 style="text-align:center">Hng Internship Stage 2 Task</h2>

<div class="card">
	<img src="http://i.imgur.com/UrkycNV.jpg" alt="Ray" style="width:300px">
  <div class="container">
    <h1>RAY OKAAH</h1>
    <p>I am a Java / Android Enthusiast. 200 level student of The University of Port Harcourt, Rivers state Nigeria.</p>
	<p> Slack username: raypex </p>
	<p> My stage 1 test project is <a href="https://github.com/raypex/hngtest">here</a> </p>
    <div style="margin: 24px 0;">
      <a href="http://www.github.com/raypex"><i class="fa fa-github"></i></a> 
      <a href="http://www.twitter.com/dear_ray"><i class="fa fa-twitter"></i></a> 
   </div>
  
  </div>
  
  
  <h3>Contact Me</h3>

<div class="container">
  <form action="/action_page.php">
    <label for="subject">SubJect</label>
    <input type="text" id="fname" name="subject" placeholder="Subject..">


    <label for="subject">Your Message</label>
    <textarea id="subject" name="subject" placeholder="Write something.. it's better than just starring... - Ray" style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
</div>

</body>
</html>
