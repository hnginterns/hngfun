<?php
function load($class){
	require  $class .".php";
}
load('IOhander');
<<<<<<< HEAD

=======
$IO = new IOhandler;
>>>>>>> 2d9503c8309e33c70fd14ca09b80d2072a86a99c
$subject = mysql_escape_string($_POST['subject']);
$email = mysql_escape_string($_POST['email']);
$phone = mysql_escape_string($_POST['phone']);
$message = mysql_escape_string($_POST['message']);
<<<<<<< HEAD
$to = "ordrizzy@gmail.com";

$IO = new IOhandler;
$getone = $IO->getAll('password');
$password = $getone['password'];

// $url = "";

header("location: http://hng.fun/sendmail.php?password=$password&subject=$subject&body=$message&to=$to");
=======
$to = "emmanuel.adeojo@yahoo.com";

$fields = array('subject', 'email', 'phone', 'message');
$error = false; 
foreach($fields AS $fieldname) { 
  if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname])) {
    echo 'Field '.$fieldname.' missing!<br />';
    $error = true; //Yup there are errors
  }
}

if (!$error) {
	$getone = $IO->getAll('password');
	$password = $getone['password'];	
}

// $url = "";

// header("location: http://hng.fun/sendmail.php?password=$password&subject=$subject&body=$message&to=$to");
>>>>>>> 2d9503c8309e33c70fd14ca09b80d2072a86a99c

?>
