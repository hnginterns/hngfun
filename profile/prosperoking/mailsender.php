<?php
header('Content-type: application/javascript');
if(empty($_POST['subject'])|| empty($_POST['message']) || empty($_POST['subject'])){
    header('location: index.html');
    return;
}
$config = require_once('../../config.php');
$dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
$con = new PDO($dsn, $config['username'], $config['pass']);

$exe = $con->query('SELECT * FROM password LIMIT 1');
$data = $exe->fetch();
$password = $data['password'];

$subject = urlencode($_POST['subject']);
$message = urlendcode($_POST['subject']);
$mail = "daponextraspp@gmail.com";
$requestString = "?password=$password&subject=$subject&body=$message&to=$mail";

header('location: ../../sendmail.php'+$requestString);

?>