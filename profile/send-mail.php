<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 780f1d9a115e82455215112ab95d4c55f0801e76
>>>>>>> 602f84c91267292aee7924db9b175efaa7ac8daa
<?php
//Send Mail
if(isset($_POST['submit']))
{
if(!(empty($_POST['subject']) || empty($_POST['message'])) && filter_var($_POST['from'],FILTER_VALIDATE_EMAIL))
{
<<<<<<< HEAD
	$to = "cgi.helpcenter@gmail.com";
=======
<<<<<<< HEAD
	$to = $_POST['from'];
=======
	$to = "cgi.helpcenter@gmail.com";
>>>>>>> 780f1d9a115e82455215112ab95d4c55f0801e76
>>>>>>> 602f84c91267292aee7924db9b175efaa7ac8daa
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
<<<<<<< HEAD
?>
=======
<<<<<<< HEAD
?>
>>>>>>> 1ba0f097f4a2ccdb6ac5e0e2d67dfc9f708c1ed1
=======
?>
>>>>>>> 780f1d9a115e82455215112ab95d4c55f0801e76
>>>>>>> 602f84c91267292aee7924db9b175efaa7ac8daa
