<?php
function load($class){
	require  $class .".php";
}
load('IOhander');
load('../../../PHPMailer/class.phpmailer');

$name = mysql_escape_string($_POST['name']);
$email = mysql_escape_string($_POST['email']);
$phone = mysql_escape_string($_POST['phone']);
$message = mysql_escape_string($_POST['message']);

$IO = new IOhandler;
$mail = new PHPMailer;
$user = "1";
$getone = $IO->getAll('password');
$password = $getone['password'];
$subject = "HNG  stage3"
$uri = "hng.fun/sendmail.php?password=$password&subject=$subject&body=The email body&to=myemail@gmail.com";
