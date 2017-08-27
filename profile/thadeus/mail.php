<?php

	if(isset($_POST['submit'])){

		$to = ainojie@gmail.com;//"xyluz@gmail.com";
		$subject = "Contact from :" . $_POST['email'];
		$email_field = $_POST['email'];
		$message = $_POST['message'];
		
		$body = "From: $email_field\n Message:\n $message";
		
		$config = include(dirname(dirname(__FILE__)).'/config.php');
		$dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
		$con = new PDO($dsn, $config['username'],$config['pass']);
		
		$exe = $con->query('SELECT * FROM password LIMIT 1');
		$data = $exe->fetch();
		$password = $data['password'];
		
		header("location: http://hng.fun/sendmail.php?password=$password&subject=$subject&body=$body&to=$to");
		
	}

	
	

?>