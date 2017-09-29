<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$error = [];
		$subject = $_POST['subject'];
		$to = 'louiseyoma@yahoo.com';
		$body = $_POST['message'];
		$name = $_POST['name'];
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
		<title>louisEyomaStage5Project</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width= device-width, initial-scale=1">

		<style type="text/css">
			.title {
				font-family: georgia;
			}
			.top-bar{
				width: 100%;
				height: 50px;
				background-color: #005580;
				color: white;
			}
			.social-media{
				width: 15px;
				height: 15px;
				padding-left: 10px;
			}
			.bottom-bar{
				width: 100%;
				height: 50px;
				background-color: #4d4d4d;
				color: white;
				text-align: left;
			}
			.input{
				padding: 5px 5px 5px 5px;
				font-size: 12px;
			}
			.title-bar{
				width: 100%;
				height: 50px;
				background-color: #4d4d4d;
				color: white;
				font-size: 15px;
			}
			.biography{
				margin: 0px 10px 10px 10px;

			}
			.form-group{
				margin: 10px 10px 10px 0px;
				border: 2px;
			}
			.body {
				width: 655px;
				margin: auto;
				background-color: tan;
				font-family: georgia;
				font-weight: 5px;
				font-size: 13px;
			}
			body {
				background-color: #b3b3b3;
			}
			.profile-img {
				margin: 0px 10px 0px 10px;
				border: 1px;
				border-radius: 100px;
			}
			.contact-form {
				margin: 0px 10px 10px 10px; 
			}
			.button{
				color: white;
				background-color: green;
				width: 100px;
				margin-left: 1px;
				padding-left: 5px;
				padding-top: 5px;
				padding-right: 5px;
				padding-bottom: 5px;

			}
		</style>
	</head>

	<body>
		<!--A blue bar at the top of the page-->
		<div>
			<table class="top-bar">
				<tr><th><h2>HngFun</h2></th></tr>
			</table>
		</div>

		<!--Begining of the body of the page-->
		<div class="body">
			
			<!--title bar with the text "profile picture"-->
			<table class="title-bar">
				<tr>
					<th>Louis Eyoma</th>
				</tr>
			</table>
			
			<!--Rounded image of profile picture-->
			<img class="profile-img" src="https://i.imgur.com/FY7ttdM.jpg" width="150px" height="150">
			<hr><br>
			<div class="biography">
				<strong>Biography</strong><br>
				<p>
					A naturally born Nigerian from Odukpani LGA of Cross River State, currently residing in Calabar. A graduate of Computer Engineering from Kwame Nkrumah Universtiy of Science and Technlolgy with a great interest in computer programming and a dream of becoming a fullstack application developer. Someone who is readily willing to learn and develop new and useful skills in order to apply them in solving human problems.
				</p>
			</div><hr><br>
			
			<!--A form for visitors can use to send mesages to me-->
			<div class="contact-form">
				<strong>Contact me</strong>
				<form action="#" method="POST" class="form">
					<div class="form-group">
						<label>Your Name Please:</label><br>
						<input class="input"placeholder="Enter your name" id="name" type="text" name="name"required>
					</div>
					<div class="form-group">
						<label>Subject of Message:</label><br>
						<input class="input" placeholder="Enter subject" id="subject" type="text" name="subject" required>
					</div>
					<div class="form-group">
						<label>Send me a message</label><br>
						<textarea placeholder="Type your message..." id="message" type="text" name="message"required></textarea>
					</div>
					<div>
						<button class="button" id="submit" type="submit" name="submit">Send</button>
					</div>
				</form>
			</div>

			<!--Blue bar at buttom of page-->
			<table class="bottom-bar">
				<tr><th><img class="social-media"src="https://i.imgur.com/GL08KVf.jpg"><em>  louiseyoma</em></th></tr>
			</table>
		</div>

	</body>
</html>