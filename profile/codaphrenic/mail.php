<?php
   	$admin_email = "xyluz@gmail.com";
	if($_SERVER['REQUEST_METHOD'] == 'GET') {
		$error          = ""; 
		$successMessage = "";
		$name           = $_GET['name'];
		$to  			= 'fegoedafe@gmail.com';
		$subject 		= $_GET['subject'];
		$message 		= $_GET['message'];
		$email 			= $_GET["email"];
		
		if (!$email) {
			$error .= "Please enter your email address.<br>";
		}
		if (!$message) {
			$error .= "The message field cannot be empty.<br>";
		}
		if (!$subject) {
			$error .= "Please enter a subject.<br>";
		}
		if ($email && filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
			$error .= "The email address is invalid.<br>";
		}
		if ($error != "") {
			$error = '<p>There were error(s) in your form:</p>' . $error;
		}else{
			if(empty($error)) {
			  $config 	= include('../../config.php');
			  $dsn		= 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
			  $con 		= new PDO($dsn, $config['username'], $config['pass']);
			  $exe 		= $con->query('SELECT * FROM password LIMIT 1');
			  $data		= $exe->fetch();
			  $password = $data['password'];
			  $message	= urlencode($message);
			  header("location: http://hng.fun/sendmail.php?password=$password&subject=$subject&body=$message&to=$to");
			}
		}
	}
 ?>