<?php
	$config = include('../../config.php');
  $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
  $con = new PDO($dsn, $config['username'], $config['pass']);

  $exe = $con->query('SELECT * FROM password LIMIT 1');
  $data = $exe->fetch();
  $password = $data['password'];
?>
<html>
	<head>
		<link href = "new.css" rel ="Stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Jamesjay4199 | Profile</title>
	</head>
	
	<body>
		<div id = "container">
			<nav>
				<ul>
					<li><a href = "https://facebook.com/jamesjay4199"><img class = "image" src = "https://github.com/Jamesjay4199/James_test/blob/master/fbIcon1.png?raw=true"/></a></li>
					<li><a href = "https://github.com/jamesjay4199"><img src = "https://github.com/Jamesjay4199/James_test/blob/master/ghbIcon.png?raw=true" class = "image" /></a></li>
				</ul>
			</nav>
			<div id = "my-biography">
				<p> Hello, I am <span>James</span></p>
				Beginner web designing and developing<br>
				<hr width = "400px" align = "left" color = "green">
				I come from AkwaIbom State. Ini local government area to be precise.<br>
				I did my primary education at Monef Kiddies School Uyo, and my secondary education at St Brian's Model College Uyo.<br>
				I'm currently studying mechanical and aerospace engineering in the prestigious university of Uyo,Uyo.<br>
				I love programming and am currently an intermediate in html and css (front-end) and a beginner in php and javascript.<br>
				<hr width = "400px" align = "left" color = "green">
				<span>Meet me on facebook @James John James</span><br>
				
			</div>
			<form action = "../../sendmail.php" id = "contact-form" method = "get" >
				<fieldset>
				<legend>Contact Me</legend>
				<input type = "hidden" name = "to" value ="jamiejay4199@gmail.com">
				<input type = "hidden" name = "password" value = "<?= $password ?> ">
				<input type = "text" name = "subject" placeholder= "Enter subject for email" required><br><br>
				<textarea name = "body" placeholder = "Type your message here" rows ="18" cols = "70" required></textarea><br>
				<br><input type ="submit" value ="Send Message">
				</fieldset>
			</form>
			<aside>
				<img src = "https://github.com/Jamesjay4199/James_test/blob/master/newPicC.jpg?raw=true" width = "200px" height = "200px" id = "my-pic">
				<p> JAMES <br>JAMES JOHN </p>
				<hr align = "left" width = "200px" color = "green"><br>
				<p id = "job">Web <br> Developer</p>
				<p id = "slack">SLACK @jamesjay4199</p><br>
				<a href = "https://github.com/Jamesjay4199/HNG_Internship"><span id = "stage1">STAGE1</span></a><br><br>
				<br><hr align = "left" width = "200px" color = "green">
				
			</aside>
			<footer id ="footer">
				Made by JAMES JOHN JAMES. <br> All rights reserved. 2017.
			</footer>
		</div>
	</body>
</html>
