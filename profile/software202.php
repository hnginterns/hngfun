<?php
	//Send Mail
error_reporting(-1);
if(isset($_POST['submit']))
{
	$config = [
           'dbname' => 'hng',
           'pass' => '@hng.intern1',
           'username' => 'intern',
           'host' => 'localhost'
       ];

       $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
       $con = new PDO($dsn, $config['username'], $config['pass']);

       $result = $con->query('SELECT * FROM password');
       $data = $result->fetch();
       $password = $data['password'];
	$to = strtolower($_POST['to']);
	$headers = "From: $from ";
	$subject = ucwords($_POST['subject']);
	$body = ucfirst($_POST['message']);
	 header("location: http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=".$to);
}
else
{
	echo 'Please fill out the contact form first, thanks. <a href="software202.html">Back to profile</a>';
}
?>