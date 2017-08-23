<?php
	if(isset($_POST['submitBtn'])){

		$config = include('config.php');
	    $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
	    $con = new PDO($dsn, $config['username'], $config['pass']);

	    $result = $con->query('SELECT * FROM password LIMIT 1');
	    $data = $result->fetch();
	    $password = $data['password'];
	    $subject = $_POST['subject'];
	    $body = $_POST['msg-body']
		header('location: sendmail.php?password=$password&subject=&body=$body&to=stephenjudesuccess@gmail.com');

	}else{
		header("location: index.php");
	}
?>
