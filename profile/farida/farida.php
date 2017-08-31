<?php

if (isset ($_POST ['submit'])){
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
	if(empty($error)) {
		$config = include(dirname(dirname(dirname(__FILE__))).'/config.php');
		$dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
		$con = new PDO($dsn, $config['username'], $config['pass']);
		
		$exe = $con->query('SELECT * FROM password LIMIT 1');
		$data = $exe->fetch();
		$password = $data['password'];

		//Things i added start from here		 
		require_once('PHPMailer/PHPMailerAutoload.php');

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = 'mail.jointhands.net';
        $mail->Port = '465';
        $mail->isHTML();
        $mail->Username = "hng@jointhands.net";
        $mail->Password = 'QwertyUiop10/';
        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->SetFrom('hng@jointhands.net');
        $mail->AddAddress($email);
        $mail->AddCc($admin_email);

         if(!$mail->send()) {
           $error[] = 'Message sending failed <br/>'.$mail->ErrorInfo;
         } else {
			 $mail->send();
			 echo "Message sent Successfully";
		 }

		      header("location: http://hng.fun/sendmail.php?password=spamblocker&subject=Hello&body=The email body&to=fareedakabeer@gmail.com");
	}
			 
	}
}
?>



