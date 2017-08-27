<?php

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$body = $_POST['name'];
		$subject = $_POST['subject'];
		$to = 'alabujadaniel@gmail.com';
		$body = $_POST['email'];
		$body = $_POST['body'];
	    if(empty($subject))
	    {
	    	echo "Subject is Empty!!!";
	    }
	    
	    elseif (empty($body))
	    {
	    	echo "Message is Empty!!!";
	    }
	    else
	    {
	    	$config = include("../../config.php");
	    	$dns = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
	    	$con = new PDO($dns, $config['username'], $config['pass']);

	    	$execute = $con->query('SELECT * FROM password LIMIT 1');
	    	$data = $execute->fetch();
	    	$password = $data['password'];

            $sent_url = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";

	    	header("location: $sent_url");
	    }
	}
?>
