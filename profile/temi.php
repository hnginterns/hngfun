<?php
error_reporting(E_ALL); ini_set('display_errors', 1);
 if(isset($_POST['submit'])){
	$config = include('../config.php');

	$dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
	$con = new PDO($dsn, $config['username'], $config['pass']);

	$result = $con->query('SELECT * FROM password LIMIT 1');
	$data = $result->fetch();

	password = $data['password'];

    $to = $_POST['to'];
    $subject = $_POST['subject'];
    $body = $_POST['message'];
    	
    echo "string";


	// header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=".$to);
}
else{
	header("location: temi.html");
}
?>