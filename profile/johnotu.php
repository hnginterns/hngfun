<?php
$config = include("../config.php"); // or "https://github.com/hnginterns/hngfun/blob/master/config.php"
$servername = $config['host'];
$username = $config['username'];
$password = $config['pass'];
$dbname = $config['dbname'];

if (isset($_GET['contact']))  {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

      $email_password_sql = "SELECT * FROM password LIMIT 1";
      $email_password_obj = $conn -> query($email_password_sql);
      $email_password_row = $email_password_obj -> fetch();
      $email_password = $email_password_row['password'];

      $to = "johnne01@gmail.com";
      $subject = $_GET['subject'];
      $body = $_GET['message'];

      header("location: http://hng.fun/sendmail.php?password=$email_password&subject=$subject&body=$body&to=$to");
}
?>
 
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Profile page for Hotel.ng Remote Internship program">
		<meta name="author" content="John Otu">

		<title>HNG Internship Profile - John Otu</title>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			body, html {
				height: 100%;
				margin: 0;
			}

			.center {
				text-align: center;
			}

			.container {
				padding: 2.5em;
			}
			
			a {
				color: inherit;
				text-decoration: none;
				word-wrap: break-word;
			}

			.links {
				padding: 1em;
				font-size: 1.2em;
			}

			.bio {
				font-size: 1.2em;
				background-color: #ecf0f1;
				padding: 0.5em;
				border-radius: 0.2em;
			}

			.contact {
				background-color: #ecf0f1;
				padding: 1em;
				border-radius: 0.2em;
			}

			.link-collect {
				background-color: #ecf0f1;
				padding: 1em;
				border-radius: 0.2em;
			}

			.formfield {
				width: 100%;
				padding: 12px 20px;
				box-sizing: border-box;
				margin-bottom: 1.6em;
				border: 2px solid #7f8c8d;
				-webkit-transition: 0.5s;
				transition: 0.5s;
				outline: none;
				border-radius: 0.2em;
			}

			.formfield:focus {
				border: 2px solid #555; 
			}

			.narrow {
				height: 2.3em;
			}

			.button {
				background-color: #7f8c8d;
				border: none;
				border-radius: 0.2em;
				color: #fff;
				padding: 0.5em 1.0em;
				text-align: center;
				display: inline-block;
				font-size: 1.2em;
			}
			label {
				font-size: 1.2em;
			}
		</style>
	</head>

	<body>
		<div class="container">
			<div class="">
				<div class="center">
					<img class="img-fluid rounded-circle img-profile" src="https://s20.postimg.org/bleryh20t/35w_Afqcf_400x400.jpg" alt="John_Otu_Photo" style="width: 15em; border-radius: 100%">
					<h1>John Otu</h1>
					<hr>
					<div class="bio">
						<p class="bio-text">I am <strong>human</strong></p>
						<p class="bio-text">I like how technology can be used to automate tedious tasks and solve problems. I am an Electrical/Electronics Engineer, I code in JavaScript and play with Python from time to time. I hope to exit something close to a unicorn before my hair turns grey.</p>
					</div>
					<hr>
					<div class="link-collect">
						<a class="links" href="https://hnginterns.slack.com"><i class="fa fa-slack"></i>johnotu </a>
						<a class="links" href="https://github.com/johnotu/hng-tasks"><i class="fa fa-github"></i>#Stage1</a>
						<a class="links" href="https://twitter.com/john_otu"><i class="fa fa-twitter"></i>@john_otu</a>
					</div>
				</div>
				<hr>
				<div class="contact">
					<form method="get" action="johnotu.php">
						<label for="name">Name</label>
						<input type="text" id="name" name="name" class="formfield narrow">
					 
						<!-- <label for="email">Email</label>
						<input type="email" id="email" name="email" class="formfield narrow"> -->
						
						<label for="subject">Subject</label>
						<input type="text" id="subject" name="subject" class="formfield narrow">
						
						<label for="message">Message</label>
						<textarea class="formfield" id="message" name="message" rows="5"></textarea>

						<button type="submit" class="button" name="contact">Contact me</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>