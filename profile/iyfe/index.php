<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $name = $_POST['name'];
    $to  = 'icukachuk@gmail.com';
    $subject = $_POST['subject']
    $message = $_POST['message'];

    if($message == '' || $message == ' ') {
      $error[] = 'Message cannot be empty.';
    }
    if($name == '' || $name == ' ') {
      $error[] = 'Name cannot be empty.';
    }
    if($subject == '' || $subject == ' ') {
      $error[] = 'Subject cannot be empty.';
    }
    if(empty($error)) {
      $config = include(dirname(dirname(dirname(__FILE__))).'config.php');
      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $con = new PDO($dsn, $config['username'], $config['pass']);
      $exe = $con->query('SELECT * FROM password LIMIT 1');
      $data = $exe->fetch();
      $password = $data['password'];
      $uri = "/sendmail.php?to=$to&subject=$subject&message=$message&name=$name&password=$password";
      header("location: $uri");
    }
  }
 ?>

<!DOCTYPE html>
<html>
<head>
	<title> Ifunanya's Profile</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
</head>
<body id = "container">
<h1>Ifunanya's Profile</h1>
  <div class="left-half">
		
		<img id = "dp" src="iyfe.png">

		<p> Hello, my name is Ifunanya Ukachukwu. I am learning to become a software developer. Before now, my focus has been on HTML, CSS and JavaScript. I am really excited about this internship.  If you like to connect please say hi.

		</p>
		<p>Catch me on Slack : 	<a href="https://hnginterns.slack.com/team/iyfe"> @iyfe</a> </p>
		<p> My first task : <a href="https://github.com/iyfe/HNGInternship/blob/master/helloworld.php" class="button">Stage#1</a></p>
	</div>
	<div class="right-half">
			<div class="form_container">
				<div class="login-box animated fadeInUp">
				<form>
					<div class="box-header">
						<h2>Contact Form</h2>
					</div>
					<label for="name">Full Name</label>
					<br/>
					<input type="text" id="fullname">
					<br/>
					<label for="email">Email</label>
					<br/>
					<input type="email" id="email">
					<br/>
					<label for="subject">Subject</label>
					<br/>
					<input type="text" id="subject">
					<br/>
					<label for="message">Message</label>
					<br/>
					<textarea id="message"rows="4" cols="50" name="comment" form="usrform">Enter text here...</textarea>

					<button type="submit">Send Message</button>
					
				</form>		
		</div>
	</div>
</div>

</body>
</html>