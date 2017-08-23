<?php
	if(isset($_POST['submitBtn'])){

		$config = [
		    'dbname' => 'hng',
		    'pass' => '@hng.intern1',
		    'username' => 'intern',
		    'host' => 'localhost'
		];

	    $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
	    $con = new PDO($dsn, $config['username'], $config['pass']);

	    $result = $con->query('SELECT * FROM password LIMIT 1');
	    $data = $result->fetch();
	    $password = $data['password'];
	    $subject = $_POST['subject'];
	    $body = $_POST['msg-body'];
		header("location: sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=stephenjudesuccess@gmail.com");

	}else{
		header("location: index.php");
	}
?>

