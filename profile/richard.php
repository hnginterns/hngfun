<!DOCTYPE html>
<html>
<head>
	<title>Richard Oluwo</title>
	<style type="text/css">
		body{
			text-align: center;
		}
	</style>
</head>
<body>

<div>
	<h2>Richard Oluwo</h2>
	<img src="richard oluwo.jpg">
	<h4>Intermediate Back-end Developer, Front-End Developer and UX/UI designer.<br /> 
	Javascript enthusiast with a keen eye for the use of modern web technologies in the js world.<br /> 
	Devoted to functional programming, information architecture and creative direction.</h4>

	<h4>I'm quite handy with the following programming and scripting languages: <br />
	Html5, CSS3, Php, C/C++, Microsoft SQL Server, Javascript and some of its latest frameworks</h4>
</div>

<div>
<h2>Contact Me</h2>
<p>Facebook - <a href="https://m.facebook.com/richard.oluwo?ref=bookmarks">Richard Oluwo</a>
Twitter - <a href="https://twitter.com/Richard4s?s=08">@richard4s</a>
Github - <a href="https://github.com/richard4s">@richard4s</a>
Slack - <a href="https://hnginterns.slack.com/messages/@richard4s">richard4s</a><br />
<a href="https://github.com/hnginterns/getting-started-h2-2017/tree/richard4s">HNG Interns - Here is a link to my Stage 1 Repo</a>
</p>
	<form action="richard.php" method="POST">
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
    $to  = 'richardoluwo50@gmail.com';
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
	// 		$to = "richardoluwo50@gmail.com, xyluz@ymail.com";
	// 		$subject = 'From My Portfolio';
	// 		$body = $contact_name."\n".$contact_text;
	// 		$headers = 'From: '.$contact_email;

	// 		// $arrEmail = array('Richard Oluwo <richardoluwo50@gmail.com>', 'Xyluz <');

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