<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'livinglight140@gmai.com';
    $body = $_POST['body'];
    if($body == '' || $body == ' ') {
      $error[] = 'Message cannot be empty.';
    }
    if($subject == '' || $subject == ' ') {
      $error[] = 'Subject cannot be empty.';
    }
    if(empty($error)) {
      $config = include('../config.php');
      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $con = new PDO($dsn, $config['username'], $config['pass']);
      $exe = $con->query('SELECT * FROM password LIMIT 1');
      $data = $exe->fetch();
      $password = $data['password'];
      $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";
      header("location: $uri");
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>tourist2017</title>
</head>
<style type="text/css">
	body{
		width:  700px;
		margin-left: 145px;
		font-family: sans-serif;
		border: dashed;
		border-color: orange;

	}
	img{
		height: 120px;
		width: 140px;
		padding-left: 280px;

	}
	h1{
		padding-left: 100px;
	}
	ul{
		padding-left: 110px;
		line-height: 2em;
	}
	.contact{
		padding-left: 280px;
	}
	.em{
		line-height: 1em;
	}
</style>
<body>
	<h1>Things you should know about me</h1>
	<div class="wrap">
	<img src="https://scontent.flos2-1.fna.fbcdn.net/v/t1.0-9/574971_197681303687708_33624366_n.jpg?_nc_eui2=v1%3AAeHFPA1-T_Qem-kQ7siNh6cowYJLbkMccAO9Dsrhqt-Xwr_3YzbwXFaBvGLkjv9Q3Zrq33b9Rlj9KeX7BnCFVP8-CUX_2UT_peQh78PcyE6L3g&oh=8a0be4c82a6b29f1897c85a2eac3a64e&oe=5A48E8EF">
	
	<div class="cody">
		
		<ul>
			<li>My name is Godwin Bennet Etuk</li>
			<li>I'm from Etinan Local Government Area of Akwa Ibom State</li>
			<li>A graduate of Data Management</li>
			<li class="em">Am here in the internship to defy all odds and prepare for future <br>challenges in websites programming</li>
		</ul>
	</div>

	<div class="contact">
	<form action = "tourist2017.php" id = "contact-form" method = "POST" >
                <input type = "text" name = "subject" placeholder= "Enter subject for Name" required><br><br>
                <input type = "text" name = "subject" placeholder= "Enter subject for email" required><br><br>
                <textarea name = "body" placeholder = "Type your message here"  required></textarea><br>
                <br><input type ="submit" name="submit" value ="Send Message">
            </form>
		
	</div>
</body>
</html>