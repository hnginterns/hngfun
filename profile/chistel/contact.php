<?php defined('PREVENT') or die(header('HTTP/1.0 403 Forbidden'));
$return = '';
if (isset($_POST['send'])) 
{

	$name = $_POST['fullname'];

	$email = $_POST['email'];

	$subject = $_POST['subject'];

	$message = $_POST['message'];

	$to = "chistelbrown@yahoo.com";
	$content = "Hey Chistel you've got a new message from {$email} with subject {$subject}<br/>";
	$content .= "Message content:{$message}";
	if(empty($name) OR empty($email) OR empty($subject) OR empty($message))
	{
		$return = "<div class='notification is-warning'>oh oh you did not fill all forms</div>";
	}else{

		if(@mail($to,$subject,$content,"From: $name  <$email>"))
		{
			$return = "<div class='notification is-success'>Message was sent successful</strong></div>";
		}else{
			$return = "<div class='notification is-warning'>Hupz message was not sent</strong></div>";
		}
	}
}