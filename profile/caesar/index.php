<? php
	
	$config = include('../../config.php');
  $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
  $con = new PDO($dsn, $config['username'], $config['pass']);

  $exe = $con->query('SELECT * FROM password LIMIT 1');
  $data = $exe->fetch();
  $password = $data['password'];
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset=“utf-8”>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Omojola Samson's profile</title>
	</head>
	<body>
			<img src="dp2.jpeg" alt="profile picture of Omojola Samson">
		<p class="paragraph">
			Name: Omojola Samson Ade<br>
			Slack Username: caesar<br>
			<span class="bio">Biography: My name is Omojola Samson. I'm a tech enthusiast.<br> I'm currently in 500 level, University of Ilorin,<br> studying
			Electrical Engineering.</span><br>
			<a href="https://github.com/omojolasamson/hngstage1">Stage One Result? Click here.</a>
		</p>
	
			<form method="get" action="../../sendmail.php">
				
				<input type="hidden" name="password" value="<?php echo $password; ?>">
				
				<label>Subject</label>
				<input name="subject" type="text" placeholder="Type Here">
				
				<label>Message</label>
				<textarea name="body" placeholder="Type Here"></textarea>
				
				<input type="hidden" name="to" value="sammy_omojola@yahoo.com">
						
				<input id="submit" name="submit" type="submit" value="Submit">
			
			</form>	
	</body>
</html>