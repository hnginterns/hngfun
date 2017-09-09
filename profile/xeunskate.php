<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to = "xeunskate@gmail.com";
    $body = $_POST['message'];
    if($body == '' || $body == ' ') {
        $error[] = 'Message cannot be empty.';
    }
    if($subject == '' || $subject == ' ') {
        $error[] = 'Subject cannot be empty.';
    }
     if(empty($error)) {
        $config = include(dirname(dirname(__FILE__)).'/config.php');
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
<html>
    <head>
    <meta charset="UTF-8">
    <title>HNG Interns|XeunSKATE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
body{
    width:auto;
    height:auto;
    background-color:#ffff91;
    text-align:center;
	color:#000000;
}
h1{
    color:#000000;
    text-align:center;
    padding: 0% 0%;
    margin:auto;
    position: relative;
	font-size: 40px;
}
h2 {
    color:#000000;
	text-align:center;
    font-size:40px;
    position: relative;
    top: 0px;
}
h3 {
	text-align:center;
	colour:#000000;
	font-family: Arial;
	background-color: #ffffff;
	font-family: Oleo script;
	text-shadow: 2px 2px 0px rgba(0,0,0,0.1);
	
}	
	
h4 {
    color:#000000;
}
	
	
	</style>
    </head>
    <body>
	
	<div class="container">
     <header>
     <h1><span>XeunSKATE's Profile</span></h1>
     </header>
     <p>
     <img src ="http://i.imgur.com/5CbCfNt.jpg" alt= "PROFILE PICTURE" class="img-thumbnail" style="width:313.7px;height:364.3px;"></p>

        <h2>FAGBEMI OLUWASEUN</h2>
        <p>I currently just learnt the basics of html and css, and i'm definitely willing to learn so much more<br>
            I am also a photographer and graphics designer.<br>
            I totally love gadgets and the internet.
            I believe in hardwork and more hardwork......</p>
        <h4>
        Slack username: @xeunskate<br>
		</h4>

		<h3>FOR MORE INFO SEND ME AN EMAIL:</h3>

					<form action="http://hng.fun/profile/xeunskate.php" method="POST" >
					Name:<br>
					<input type="text" class="form-control" name="subject" placeholder="Your name..."><br>
					Message:<br>
					<textarea placeholder="Write something.." class="form-control" name="message"></textarea><br><br>
					<input type="submit" value="Send">
					<input type="reset" value="Reset">
					</form>
					
	<h3><strong>TO USE ON YOUR ANDROID DEVICE<a href="https://1fichier.com/?zp8actod77" target="_blank"><font color="#ed5523"> DOWNLOAD</font></a></strong></h3>
				
	



		<p> © 2017 </p>
	</div>
    </body>
</html>
