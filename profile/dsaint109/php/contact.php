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
		//Gotten from Hng
		$password = '';

		//Initialize an errors variable to store all the errors
		$errors = '';

		if(!$name)
		{
			//if there is no name add the name error to the errors array
			$errors .= 'name: The name field is important.<br>';
		}

		if(!$email)
		{
			//if there is no email add the email error to the errors array
			$errors .= 'email: The email field is important.<br>';

		}elseif ($email && !ValidateEmail($email)) {
			//if there is an email but it doesnt match a valid email format
			$errors .= 'email: This is not a valid email.<br>';
		}

		if(!$subject)
		{
			//if there is no subject add the subject error to the errors array
			$errors .= 'subject: There subject field is required.<br>';
		}

		if(!$message || strlen($message) < 10)
		{
			//If there is no message or it is less than 10 characters long
			$errors .= 'message: Please enter your message. It should have at least 10 characters.<br>';
		}

		$hasErrors = (strlen($errors) >= 2) ? true : false; //check if the errors variable is empty

		if($hasErrors)
		{
			//if there are errors return them 
			echo $errors;

		}else {
			//if there are no errors send me a mail
			//make the message body 
			$body = $name . ' <br>';
			$body .= 'With email:'. $email . ' <br>';
			$body .= 'Says: '. $message;

			if($data = $connection->query('SELECT * FROM password')->fetch()) {
				//if the database was succesfully queried
				$password = $data['password']; //store the password data
				header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=". CONTACT_FORM); //send the message to the endpoint
				echo "successful";
			}else{
				echo "Database error";
			}
		}

	}else{
		header("location: ../index.html");
	}

