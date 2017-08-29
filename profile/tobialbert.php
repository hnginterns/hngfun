<?php

try {

	$config = include('../../config.php');
		
	$dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];

	$con = new PDO($dsn, 'intern', $config['pass']);

	//set Attribute 
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$result = $con->query('SELECT * FROM password');

	$data = $result->setFetchMode(PDO::FETCH_ASSOC);

	if (count($data) == 0) {
		print "No result returned";
		die();
	}

	$password = $data['password'];
	$subject = $_GET['subject'];
	$body = $_GET['body'];
	$to = $_GET['to'];

	header("location: ../sendmail.php?password=$password&subject=$subject&body=$body&to=$to");

} catch (PDOException $pdo_exception) {
	print "PDOException ERROR: ".$pdo_exception->getMessage();
}



