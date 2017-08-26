<?php
function load($class){
	require  $class .".php";
}

load('IOhander');
$IO = new IOhandler;

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$subject = $_POST['subject'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
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
		$datas = $IO->getAll('password');
		foreach ($datas as $row) {
			$password = $row['password'];
		}	

		$url = "http://hng.fun/sendmail.php?password=$password&subject=$subject&body=$message&to=$to";
		header("location:".$url);
	}

	
}else{
	echo "invalid request";
}

?>
