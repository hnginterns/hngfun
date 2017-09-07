<?php
//Send Mail
if(isset($_POST['submit']))
{
if(!(empty($_POST['subject']) || empty($_POST['message'])) && filter_var($_POST['from'],FILTER_VALIDATE_EMAIL))
{
	$to = "cgi.helpcenter@gmail.com";
	$from = strtolower($_POST['from']);
	$headers = "From: $from ";
	$subject = ucwords($_POST['subject']);
	$message = ucfirst($_POST['message']);
	if(mail($to,$subject,$message,$headers))
	{
		echo 'Message successfully sent! <a href="software202.html">Back to profile</a>';
	}
	else
	{
		echo 'Sorry, error occured! <a href="software202.html">Back to profile</a>';
	}

}
else
{
	echo 'Please fill out the contact form fields correctly, are fields are required with proper values thanks. <a href="software202.html">Back to profile</a>';
}
}
else
{
	echo 'Please fill out the contact form first, thanks. <a href="software202.html">Back to profile</a>';
}
?>