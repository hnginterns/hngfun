<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['send'])) {
		include ('../config.php');
		$error = array();
		$subject = trim($_POST['subject']);
		$to = 'eul.nelson@gmail.com';
		$body = trim($_POST['body']);
		if (empty($subject)){
			array_push($error, "Subject cannot be empty");
		}
		if (empty($body)){
			array_push($error, "Message body cannot be empty");
		}
			if (empty($error)){
					$config = include('../config.php');
				   $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
				   $con = new PDO($dsn, $config['username'], $config['pass']);
				   $exe = $con->query('SELECT * FROM password LIMIT 1');
				   $data = $exe->fetch();
				   $password = $data['password'];
				   $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";
				   header("location: $uri");
				}
				die();
			}
		

?>

<!DOCTYPE html>
<html>
<head>
    <title>Emmanuel Nelson - Profile</title>
		<!--<meta name="viewport" content="width=device-width, initial-scale=1">
		-->
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel='stylesheet' href='w3.css'>
<style>
	#container{
		max-width: 1080px;
		margin: auto;
	}
	.w3-third{
		padding: 0.5em;
	}
	    img.icons{
                width:16px;
                height: 16px;
        }
		img.dp{
			height: 320px;
			width: 240px;
			display: block;
			margin-left: auto;
			margin-right: auto;
			padding-top: 1em;
			border-radius: 20px;
		}
		table.links{
				border: 0;
				margin-left:auto;
				margin-right: auto;
                text-align : center;
        }
</style>
</head>
<body>
	<div id='container'>
			<div class='w3-container'>
				<div class='w3-card-4' style='padding: 1.5em;'>
					<header class='w3-container w3-teal w3-round'>
					<h2 class='deep' style='text-align: center;'>Emmanuel Nelson</h2>
					</header>
					<div class='w3-container w-center'>
					<img class='dp' src='http://imgur.com/Zq5NFKE.jpg' alt="dot.e's photo">
					<h3 style='text-align: center;'>About Me</h3>
					<p>
						I an a student at University Of Uyo. Am fascinated with the way the web works and hence interested in web technologies and the programming languages of the world wide web especially PHP (frontend) - still among the learning folks though. I hope to use the internet to help small and medium scale enterprises expand their scope of operations.       
					</p>
					<p class='orange'>
						I am proudly from Akwa Ibom State.
					</p>
					</div>
					<h3>Contact Me</h3>
					<form action='dote.php' method='post'>
						<div class='w3-third'>
						<div class='w3-group'>
							<label class='w3-label'>Your Name:</label>	<input style='width: 135px;' class='w3-input w3-animate-input' name='name' type='text'  size='35' placeholder='Your name here' required ><br>
						</div>
						</div>
						<div class='w3-third'>
						<div class='w3-group'>
							<label class='w3-label'>Email:</label>	<input style='width: 135px;' class='w3-input w3-animate-input' name='email' type='email' size='35' placeholder='Your email address...' required ><br>
						</div>
						</div>
						<div class='w3-third'>
						<div class='w3-group'>
							<label class='w3-label'>Subject:</label>	<input style='width: 135px;' class='w3-input w3-animate-input' type='text' name='subject' size='35' placeholder='Subject...' required ><br>
						</div>
						</div>
						<div class='w3-group'>
							<label class='w3-label''>Message:</label><br>
							<textarea class='w3-input' name='body' rows='5' placeholder='Your message here...' required ></textarea><br>
						</div>
						<button class='w3-btn w3-teal' type='submit' name='send'>Send >>></button>
					</form>
					</div>
				
			</div>
			<footer id='foot'>
				<table class='links'>
					<thead>
						<td colspan='3'><h5>Find Me on:</h5>
						</td>
						</thead>
					<tr>
						<td>
									<td><img class='icons' src="https://cdn1.iconfinder.com/data/icons/logotypes/32/github-512.png" alt="github" >  <a href="https://github.com/dot-e" target="_blank">dot-e</a>
									</td>
									<td>
										<img class='icons' src='https://cdn3.iconfinder.com/data/icons/free-social-icons/67/twitter_circle_color-128.png' alt='twitter' > <a class='links' href='http://twitter.com/NLIrve' target='_blank' >NLIrve</a>
									</td>
									<td>
										<img class='icons' src='https://cdn0.iconfinder.com/data/icons/tuts/256/slack_alt.png' alt='slack'> <a class='links' href='https://hnginterns.slack.com/team/U72E21XTJ' target='_blank'>dot.r</a>
									</td>
									</tr>
									</table>
					
				</footer>

	`</div>
</body>
</html>
