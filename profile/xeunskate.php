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
	<link href='http://fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet' type='text/css'>

<style>
body{
    width:auto;
    height:auto;
    background-color:#F0E68C;
    text-align:center;
    font-family: Berkshire Swash
}
h1{
    color:#000000;
    text-align:center;
    padding: 0% 0%;
    margin:auto;
    position: relative;
	font-size: 80px;
}
h2 {
    text-align:center;
    font-size:60px;
    position: relative;
    top: 0px;
}
h3 {text-align:center;
	colour:#000000;
	font-family: Arial;
}	
	
h4 {
    color:#0137f9;
    background: #B0E0E6;
}
	
	
	</style>
    </head>
    <body>
     <header>
     <h1><span>XeunSKATE's Profile</span></h1>
     </header>
     <p>
     <img src ="http://imgur.com/AMFBh5s.jpg" alt= "PROFILE PICTURE" class='img' style="width:728px;height:500px;"></p>

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
					<input type="text" name="subject" placeholder="Your name..."><br>
					Message:<br>
					<textarea rows="4" cols="50" placeholder="Write something.." input type="text" name="message"></textarea><br><br>
					<input type="submit" value="Send">
					<input type="reset" value="Reset">
					</form>



		<p> © 2017 </p>
    </body>
</html>
