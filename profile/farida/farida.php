<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
 $name = $_POST['name'];
 $email = $_POST['email'];
 $subject = $_POST['subject'];
 $body = $_POST['message'];


$to  = 'fareedakabeer@gmail.com';
$admin_email = 'xyluz@ymail.com';
$error = "";

if (!$email) {
	$error .= "Your email address is required.<br>";
}

if (!$subject) {
	$error .= "A subject is required.<br>";
}

if (!$body) {
	$error .= "Your message is required.<br>";
}

if ($email && filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $error .= "The email address is invalid.<br>";
    }
    if ($error != "") {
        $error = '<p>There were error(s) in your form:</p>' . $error;
}

else{
	if(empty($error)) {
		$config = include('../../config.php');
		$dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
		$con = new PDO($dsn, $config['username'], $config['pass']);
		
		$exe = $con->query('SELECT * FROM password LIMIT 1');
		$data = $exe->fetch();
		$password = $data['password'];

		      header("location: http://hng.fun/sendmail.php?password=spamblocker&subject=Hello&body=The email body&to=fareedakabeer@gmail.com");
	}
			 
	}
}
?>



