<!DOCTYPE html>
<html>
	<head>
		<title> Ndu Sunday Profile</title>
		<link rel="stylesheet" type="text/css" href="ndusunday/customize.css">
		<link rel="stylesheet" type="text/css" href="customize.css">

	</head>
	<body>
		<div class = "main">

			<h1>
				<P>NDU SUNDAY ZISTUS</P>
				<a href="#"><img width="400" height="260" alt="Profile Pics" src="myProfile.png"></a>
				<br>
				Software Engineer
			</h1>
			<ul class="head_list">
				<h3>slack: <a href="#">ndusunday</a></h3>

				<div class="about">
				<h4 class="about-head">About Me</h4>
					<div class="about-content">
						<p>I love working with backends majorly php but am heading to be fullstack, i also do android developement and also desktop development using JavaFx.</p>
						<p> I love innovation and can put my self on the line to see innovation born</p>
						
					</div>		
				</div>
				<h3><a href="htpps://github.com/ndusunday/ndusunday">Git</a></h3>
				<h3><a href="https://www.facebook.com/sunday.ndu.96">Facebook</a></h3>
				<h3><a href="https://twitter.com/ndusundayDev">Twitter</a></h3>

			</ul>
		</div>
		<?php
			include 'ndusunday/message.php';
			echo $error_msg;
		?>
		<div class="contact-form">
			<form method = "GET" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>">  
					Contact Form
					<br>
					<input type="name" name="Full Name" placeholder="Enter Full name">
					<br>
					<input type="email" name="sender_email" placeholder="Enter email">
					<br>
					<input type="textarea" name="subject" placeholder="Subject">
					<br>
					<textarea name="message" hint="Enter your message">
						
					</textarea>
					<br>
					<input type="submit" name="submit" value="submit">
				</form>
		</div>

		

	</body>

<html>
