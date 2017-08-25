<?php
   	$admin_email = "xyluz@gmail.com";
  if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $error = ""; 
    $successMessage = "";
    $name = $_GET['name'];
    $to  = 'icukachuk@gmail.com';
    $subject = $_GET['subject'];
    $message = $_GET['message'];
    $email = $_GET["email"];

  	if (!$email) {
        $error .= "An email address is required.<br>";
    }
    if (!$message {
        $error .= "The content field is required.<br>";
    }
    if (!$subject) {
        $error .= "The subject is required.<br>";
    }
    if ($email && filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $error .= "The email address is invalid.<br>";
    }
    if ($error != "") {
        $error = '<div class="alert alert-danger" role="alert"><p>There were error(s) in your form:</p>' . $error . '</div>';
    }else{
	    if(empty($error)) {
	      include('../../config.php');
	      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
	      $con = new PDO($dsn, $config['username'], $config['pass']);
	      $exe = $con->query('SELECT * FROM password LIMIT 1');
	      $data = $exe->fetch();
	      $password = $data['password'];
	      $message = urlencode($message);
	      header("location: http://hng.fun/sendmail.php?password=$password&subject=$subject&body=$message&to=$to");
	    }
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
	<div id = "container_2">
		<h1>Ifunanya's Profile</h1>
		<div class="left-half">
				<img id = "dp" alt="Display Picture" src="iyfe.png">
				<p> Hello, my name is Ifunanya Ukachukwu. I am learning to become a software developer. Before now, my focus has been on HTML, CSS and JavaScript. I am really excited about this internship.  If you like to connect please say hi.

				</p>
				<p>Catch me on Slack : 	<a href="https://hnginterns.slack.com/team/iyfe"> @iyfe</a> </p>
				<p> My first task : <a href="https://github.com/iyfe/HNGInternship/blob/master/helloworld.php" class="button">Stage#1</a></p>
		</div>
		<div class="right-half">
			<div class="form_container">
				<div class="login-box animated fadeInUp">
					<form method="GET" action="/sendmail.php">
						<div class="box-header">
						<h2>Contact Form</h2>
						</div>
						<label for="name">Full Name</label>
						<br/>
						<input type="text" id="fullname" name = "name" placeholder="Ada John">
						<br/>
						<label for="email">Email</label>
						<br/>
						<input type="email" id="email" name = "email" placeholder=" ada@john.co">
						<br/>
						<label for="subject">Subject</label>
						<br/>
						<input type="text" id="subject" name = "subject" placeholder="Hello">
						<br/>
						<label for="message">Message</label>
						<br/>
						<textarea id="message" rows="4" cols="50" name="message" placeholder ="Enter text here..."></textarea>
						<button type="submit">Send Message</button>						
					</form>		
				</div>
			</div>
		</div>
</div>

</body>
</html>