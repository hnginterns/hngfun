<?php
//Send Mail
if(!(empty($_POST['subject']) || empty($_POST['message'])) && filter_var($_POST['to'],FILTER_VALIDATE_EMAIL))
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

	$to = 'abdulhafeez.ola@gmail.com';
  $from = strtolower($_POST['to']);
	$subject = ucwords($_POST['subject']);
	$body = "Message from email: $from\n ".ucfirst($_POST['message']);
	 header("location: http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=".$to);
	 exit;
}
	
?>