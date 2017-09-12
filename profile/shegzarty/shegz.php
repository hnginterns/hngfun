<!DOCTYPE html>
<html>
<head>
	<title>Adedire Adekunle</title>
	<style type="text/css">
		body{
			text-align: center;
		}
	</style>
</head>
<body>

<div>
	<h2>Adedire Adekunle</h2>
	<img src="C:\Users\adesegun\Pictures\Design\my gig 1">

	<h4>Hi, I am Adedire Adekunle. I am an intern at hotels.ng<br />
	I am a graphic designer and a student at Lautech</h4>
</div>

<div>
<h2>Contact Me</h2>
<p>Facebook - <a href="https://m.facebook.com/adedire.adekunle?ref=bookmarks">Adedire Adekunle</a>
Github - <a href="https://github.com/shegzarty">@shegzarty</a>
Slack - <a href="https://hnginterns.slack.com/messages/@shegzarty">shegzarty</a><br />
<a href="https://github.com/hnginterns/getting-started-h2-2017/tree/shegzarty">HNG Interns - Here is a link to my Stage 1 Repo</a>
</p>
	<form action="shegzarty.php" method="POST">
		<h4>Name: <br /><input type="text" name="contact_name"></h4>
		<h4>E-mail Address<br /><input type="text" name="contact_email"></h4>
		<h4>Message: <br /><textarea name="body" rows="6" cols="30"></textarea></h4>
		<input type="submit" value="Send">
	</form>
</div>

<?php

	 if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];

    $subject = 'From my Portfolio';
    $to  = 'adekunleyshegun@gmail.com';
    $body = $_POST['body'];

    if($body == '' || $body == ' ') {
      $error[] = "Don't forget to write me a message";
    }


    if(empty($error)) {

      $config = include __DIR__ . "/../config.php";
      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $con = new PDO($dsn, $config['username'], $config['pass']);

      $exe = $con->query('SELECT * FROM password LIMIT 1');
      $data = $exe->fetch();
      $password = $data['password'];

      $url = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";

      header("location: $url");

    }
  }

	// if (isset($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_text'])) {
	// 	$contact_name = $_POST['contact_name'];
	// 	$contact_email = $_POST['contact_email'];
	// 	$contact_text = $_POST['contact_text'];

	// 	if (!empty($contact_name) && !empty($contact_email) && !empty($contact_text)) {
	// 		$to = "adekunleyshegun@gmail.com, xyluz@ymail.com";
	// 		$subject = 'From My Portfolio';
	// 		$body = $contact_name."\n".$contact_text;
	// 		$headers = 'From: '.$contact_email;

	// 		// $arrEmail = array('Adedire Adekunle<adekunleyshegun@gmail.com>', 'Xyluz <');

	// 		// foreach($arrEmail as $key => $email_to){
	// 		// 	mail($)
	// 		// }

	// 		if(mail($to, $subject, $body, $headers)){
	// 			echo "Thanks for contacting us. We\'ll be in touch soon.";
	// 		} else {
	// 			echo 'Sorry, An error ocurred. Please try again later.';
	// 		}
	// 	} else {
	// 		echo 'All fields are required';
	// 	}
	// }

?>


</body>
</html>