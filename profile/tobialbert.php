<?php
	
$config = [
	'dbname' => 'hng',
	'pass'=> '@hng.intern1',
	'username' => 'intern',
	'host' => 46.101.104.14

];

$dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];

$con = new PDO($dsn, $config['username'], $config['pass']);

$result = $con->query('SELECT * FROM password');
$data = $result->fetch();
$password = $data['password'];
$subject = $_GET['subject'];
$body = $_GET['body'];
$to = $_GET['to'];

header("location: ../sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=".$to);




