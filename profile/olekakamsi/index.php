<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $subject = $_POST['subject'];
    $to  = 'olekakamsy@gmail.com';
    $body = $_POST['message'];
    $config = include('../../config.php');
    $server = $config['host'];
    $con = mysqli_connect($server,$config['username'],$config['pass'],$config['dbname']);
    if (!$con) {
      die("Connection failed: ".mysqli_connect_error());
  }
    $sql = 'SELECT * FROM password LIMIT 1';
    if($result = mysqli_query($con, $sql)) {
      $data = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $password = $data['password'];
    } else {
        $password = "#";
    }
    $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";
    header("location: $uri");
  }
?>
<!DOCTYPE html>
<html>
	<body style="background-color : lightgrey;">
		<center>
		<h1>MY PROFILE</h1>
		
		<img src = "https://i.imgur.com/9CRtF8r_d.jpg" alt="A picture of muah hehehe(If you're seeing this then i blew it or your network is shit fam)" />
	<div>
		<p align = center>I'm Oleka Kamsi, olekakamsi on slack channel</p>
		<p align = center>Year two student of Mechanical Engineering at the University of Nigeria. I'm an at Intern at HNG.</p>
		<p align = center>I'm from <b>Enugu State.</b></p>

	</div>
	<form action="" method="POST"><br />
		<b></b><i>Fill out the form below and type in your message if you want to contact me.</i></b>><br />
		<br />Subject:<br />
			<input type="text' name="subject"><br />
		Name:<br />
			<input type="text" name="name"><br />
		Email:<br />
			<input type="text' name="email"><br />
		Message:<br />
			<textarea name="message" row="55" cols="50"></textarea><br />
		<input type="submit" value="SEND">
	
	</form>

	<a href = "http://s3.andromo.com/builds/app_666000_668349.apk?AWSAccessKeyId=AKIAJW5NNC46PJEHUT3A&Expires=1505373033&Signature=lzJh6Ipvi52rv%2FxBtkB2UMrHDDE%3D">App Link</a>
	</body>
</html>
