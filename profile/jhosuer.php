<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];

    $fullname = $_POST['fullname'];
    $to  = 'jumbojoshua91@gmail.com';
    $body = $_POST['message'];

    if($body == '' || $body == ' ') {
      $error[] = 'Message cannot be empty.';
    }


    if($fullname == '' || $fullname == ' ') {
      $error[] = 'Name cannot be empty.';
    }

    if(empty($error)) {

      $config = include '../config.php';
      $sn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $con = new PDO($sn, $config['username'], $config['pass']);

      $exe = $con->query('SELECT * FROM password LIMIT 1');
      $data = $exe->fetch();
      $password = $data['password'];

      $uri = "/sendmail.php?to=$to&body=$body&subject=$fullname&password=$password";

      header("location: $uri");

    }
  }
 ?>

<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title> Joshua | Jumbo </title>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<!-- x, s, w -->
		<style>
		
			html, body {
			
				width: 100%;
				margin: 0px;
				padding: 0px;
				background-color: #f8f8f8;
				color: #ccc;
				font-family: Raleway, Sans;
			}
			.wrap {
			
				width: 80%;
				min-height: 150px;
				padding-bottom: 300px;
				margin: 0px auto;
				background-color: #256EFF;
				
			}
			a {
				
				text-decoration: none;
				clear: both;
			}
			h2 {
			
				width: 100%;
				height: 30px;
				padding: 10px;
				text-align: center;
				color: #333;
			}
			.img {
				width: 400px;
				height: 466px;
				margin: 0px auto;
			}
			img {
				width: 300px;
				height: 366px;
				padding: 10px;
				border: 1px solid #333;
				transition: opacity 0.5s;
			}
				
			img:hover {
				opacity: 0.8;
			}
			
			figcaption {
				text-align: center;
				position: relative; 
				top: 10px;
			}
			h3 {
				font-size: 16px;
				color: #333;
				text-align: center;
				padding: 10px;
			}
			.form {
			
				width: 400px;
				height: 400px;
				padding: 50px;
				padding-bottom: 150px;
				background-color: rgba(51,51,51,0.5);
				margin: 0px auto;
				position: relative;
				top: 150px;
			}
			input[type="text"] {
			
				width: 400px;
				height: 60px;
				padding-left: 10px;
				border-radius: 10px;
				box-shadow: 0px 0px 5px #ccc;
			}
			textarea {
			
				border-radius: 5px;
				padding-left: 10px;
			}
			.form button {
			
				width: 400px;
				height: 60px;
				background-color: #333;
				color: #ccc;
				border-color: #333;
				border-radius: 5px;
				transition: background-color 0.5s;
			}
			.form button:hover {
				
				background-color: transparent;
			}
			
			div.panel {
				
				width: 300px;
				padding: 50px;
				margin: 0px auto;
				position: relative;
				bottom: 10px;
				background-color: #333;
			}
			
			p.muted {
				color: #aaa; 
			}
			
			footer {
			
				width: 80%;
				margin: 0px auto;
				height: 30px;
				padding: 20px;
				text-align: center;
				background-color: #333;
			}
		</style>
	</head>
		<div class="wrap">
			<a href="https://github.com/jhosuer/Php-simple-script" target="_blank"><h2>HNG Internship - Stage 1 Result</h2></a>
			<div class="img">
				<figure><img src="https://scontent.flos3-1.fna.fbcdn.net/v/t1.0-9/15726563_1602744799741089_7874891167110176521_n.jpg?_nc_eui2=v1%3AAeGjgHkyfA8TlzGoJijUu7eLx6w-aTJcdrhcCHndC0dSlkgVdzVtkAhYJ2cnRk8V97LGw6PwzKKqcJU8UyL_MKROvIqjJJMi8J5IEdEC0mDkUw&oh=d476efae2b6e618acbc7f482e92a58e4&oe=5A1A5557" alt="Image">
				<figcaption><i class="fa fa-user-plus" aria-hidden="true"></i><span>&nbsp;&nbsp;Joshua Jumbo</span></figcaption>
				</figure>
				<h3>
					Web Developer | Mobile Developer | Digital Marketer | Techpreneur | God-Lover
				</h3>
			</div>
			<div class="form">
				
				<?php if(isset($error) && !empty($error)): ?>
				  <blockquote style="text-align: left;padding:5px;background: #fcf6f6; border-left:15px solid red;">
					<ul style='list-style:none;'>
					  <?php
						foreach ($error as $key => $value) {
						  echo "<li>$value</li>";
						}
					  ?>
					</ul>
				  </blockquote>
				<?php endif; ?>
				<form method="POST" action="" id="form_jhosuer">
				
					<input type="text" placeholder="Full Name *" name="fullname" autocomplete="off" required>
					<br><br>
					<textarea rows="10" cols="54" placeholder="Message *" name="message" required></textarea>
					<br><br>
					<button type="submit" form="form_jhosuer" value="submit">Send</button>
					<p class="muted">* means a required field</p>
				</form>
			</div>
		</div>
		<footer>
			&copy; Copyright <?php echo Date('Y'); ?> &nbsp;&nbsp;&nbsp;
					<a href="https://github.com/jhosuer"><i class="fa fa-github fa-2x" aria-hidden="true"></i></a>
					<a href="https://hnginterns.slack.com/team/jhosuar"><i class="fa fa-slack fa-2x" aria-hidden="true"></i></a>
					<a href="https://github.com/jhosuer"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
					<a href="https://facebook.com/josh.01j"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
					<a href="https://twitter.com/blissfuljoe"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
		</footer>
	<body>
	</body>
</html>
