<?php
function sendMail() {
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
   $email = $_POST['email'];
   $subject = $_POST['subject'];
   $body = $_POST['body'];
   header("Location:http://hng.fun/sendmail.php?to=$email&body=$body&subject=$subject&password=$password");
}


?>
