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
	ini_set("sendmail_from", $admin_email);
	$sent = mail($email_to, $email_subject, $message, $headers, "-f" .$email_from);
	if ($sent)
	{
	header("Location: http://hng.fun/sendmail.php?password=".$password."&name=".$name."&email=".$email."&subject=".$subject."&message=".$body."&to=fareedakabeer@gmail.com");
	}
?>



