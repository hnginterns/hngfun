<?php

	include 'config.php'; //include configuration files
	include 'functions.php'; //include functions for validating emails and array additions

	$post = (!empty($_POST)) ? true : false; //determine if the post request is empty 

	if ($post) 
	{

		$name = stripslashes($_POST['name']); //Fix the name from post
		$email = trim($_POST['email']); //Fix the email from the post
		$subject = stripslashes($_POST['subject']); // Fix the subject from the post
		$message = stripslashes($_POST['message']); // Fix the message from the post
		$myemail = 'topstronics@gmail.com';
		//Gotten from Hng
		$password = '';

		//Initialize an errors array to store all the errors
		$errors = [];

		if(!$name)
		{
			//if there is no name add the name error to the errors array
			array_add($errors, 'name', 'The name field is important.');
		}

		if(!$email)
		{
			//if there is no email add the email error to the errors array
			array_add($errors, 'email', 'The email field is important.');

		}elseif ($email && !ValidateEmail($email)) {
			//if there is an email but it doesnt match a valid email format
			array_add($errors, 'email', 'This is not a valid email.');
		}

		if(!$subject)
		{
			//if there is no subject add the subject error to the errors array
			array_add($errors, 'subject', 'There subject field is required.');
		}

		if(!$message || strlen($message) < 10)
		{
			//If there is no message or it is less than 10 characters long
			array_add($errors, 'message', 'Please enter your message. It should have at least 10 characters.');
		}

		$hasErrors = (!empty($errors)) ? true : false; //check if the errors array is empty

		if($hasErrors)
		{
			//if there are errors return them 
			return $errors;

		}else {
			//if there are no errors send me a mail
			//make the message body 
			$body = $name . ' <br>';
			$body .= 'With email:'. $email . ' <br>';
			$body .= 'Says: '. $message;
		}

	}else{
		header("location: ../index.html");
	}

