<!DOCTYPE html>
<html>

<head>
	<title>Maxwell4reel Profile</title>
	<meta charset="utf-8">
	<meta name="view port" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<style type="text/css">
			html {
			height: 100%;
			/*			width: 100%;*/
		}
		
		body {
			
			height: auto;
			width: 100%;
*/
			margin: 0px;
			background-image: url("http://res.cloudinary.com/dq4i6bqcx/image/upload/v1503775344/Web%20backs/2015_Computing_and_Software_dc_8.jpg");
			background-repeat: no-repeat;
			background-size: cover;
			margin: 0;
		}
		
		.img {
			margin-left: 43%;
			margin-top: 3%;
		}
		
		.imgs {
			max-width: : 180px;
			max-height: 180px;
			border-radius: 100px;
		}
		
		.text {
			text-align: center;
			color: #fff;
			margin-left: 2%;
		}
		
		.text h1 {
			color: #fff;
			font-family: 'Lucida Sans';
			font-size: 35px;
		}
		
		.text h2 {
			font-family: 'century gothic';
			font-size: 20px;
			color: #fff;
		}
		
		.bio {
			opacity: 0.6;
			margin-top: 10px;
			text-align: center;
		}
		
		.bio h3 {
			font-family: 'Courier New';
			font-size: 20px;
			margin-top: 5px;
			text-align: left;
		}
		
		.bio p {
			padding-top: -2000px;
			font-family: 'Lucida Sans';
			padding-left: 80px;
			padding-right: 80px;
			text-align: justify;
			/*			color: white;*/
			text-shadow: 2px 2px 4px #000000;
		}
		/* button .gitlink{
				margin-bottom: 20px;
				text-decoration: none;
				background-color:#6699ff !important;

			}*/
		
		a:link {
			background-color: black;
			color: white;
			font-size: 20px;
			text-decoration: none;
		}
		
		a:hover {
			color: hotpink;
		}
		
		.tex {
			color: #fff;
			font-size: 20px;
		}
		
		.icon {
			width: 30px;
			height: 30px;
			margin-top: 20px;
		}
		
		---------------------------------------- input[type=text],
		textarea {
			width: 50%;
			padding: 12px;
			border: 1px solid;
			border-radius: 4px;
			box-sizing: border-box;
			margin-top: 6px;
			margin-bottom: 16px;
			resize: vertical;
		}
		
		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		
		input[type=submit]:hover {
			background-color: #45a049;
		}
		
		.container {
			border-radius: 0px;
			padding: 20px;
			width: 50%;

	</style>

<body>

	<div class=" img">
		<img src="https://avatars0.githubusercontent.com/u/26363001?v=4&s=460" class="imgs" alt="profile_picture">
	</div>
	<div class="bg">
		<div class="text">
			<h1>Nwafor Maxwell Chukwuebuka</h1>
			<p><a style="color: white;" href="https://github.com/maxwell4reel/Hngtest_register"> Click here to view my Stage 1 Project</a></p>
			<p class="tex"><a href="https://github.com/maxwell4reel"><i class="fa fa-github">Github:</i> Maxwell4reel</a></p>
			<p class="tex"><i class="fa fa-slack">Slack: </i> Maxwell444</p>
			<div class="bio">
				<h3>Biography</h3>
				<p>I am Nwafor Maxwell Chukwuebuka. A 300l student of computer science from the University of Nigeria, Nsukka. I am from Enugu state Nigeria and i reside at Lagos state. Am web/software developer who strives to add value any where i find myself. At my lesiure i enjoy Swimming, Playing games.
				</p>

			</div>
		</div>
	</div>
	<hr>
	
	<?php
      if (isset($_GET['send']))  {
          //Email information here
      $to = "spencemaxwell4@gmail.com";
      $subject = $_GET['subject'];
      $body = $_GET['message'];    
      $config = include(dirname(dirname(__FILE__)).'/config.php');
      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $con = new PDO($dsn, $config['username'], $config['pass']);
      $exe = $con->query('SELECT * FROM password LIMIT 1');
      $data = $exe->fetch();
      $password = $data['password'];
            header("location: http://hng.fun/sendmail.php?password=$password&subject=$subject&body=$body&to=$to");
        }
?>
	
	<h2 style="color: white; margin-left: 2%; text-shadow: 2px 2px 4px #000000;">Leave a Message</h2>
	<div class="container">
		<form action="" method="get">

			<div class="form">
				<div class="grid_1">
					<input type="text" name="name" placeholder="Enter Your Name..">

					<input type="email" name="subject" placeholder="@example.com"><br>
				</div>
			</div>
			<div class="form">
				<div class="grid_3">
					<textarea id="subject" name="message" placeholder="Say Something.." style="height:60px"></textarea><br>

					<input type="submit" value="Submit" name="send">
				</div>
			</div>
		</form>
	</div>

</body>

</html>
