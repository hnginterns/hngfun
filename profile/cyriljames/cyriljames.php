<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'fluxydprince@gmail.com';
    $body = $_POST['message'];
    if($subject == '' || $subject == ' ') {
      $error[] = 'Subject cannot be empty.';
    }
    if($body == '' || $body == ' ') {
      $error[] = 'Message cannot be empty.';
    }
    if(empty($error)) {
      $config = include(dirname(dirname(dirname(__FILE__))).'/config.php');
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/styles.css">
	<title>Cyril James</title>
</head>
<body>

<div class="container">
	<div class="wrapper">
	<div class="profile">
		<div class="img" align="center">
			<img src="https://ca.slack-edge.com/T3QLSP8HM-U6S23RZ9V-66b1fabc0e55-512" width="80%" height="80%" alt="Cyril James">
		</div>
		<div class="biodata">
			<h3>HNG Internship</h3>
			<p><span>Name:</span> Cyril Christopher James</p>
			<p><span>Email:</span> Fluxydprince@gmail.com</p>
			<p><span>Slack:</span> Fluxy17</p>
			<p>
				<span>Bio-data:</span> I'm a Web developer (Frontend &amp; Backend).  Graduate of computer science in Michael Opkara University of Agricultire, Umudike,
				Abia State. I'm from  Essien Udim Local Government Area, Akwa Ibom State.
				I am always ready to learn.
			</p>
			<p><span>Stage 1: </span><a href="https://github.com/flexyfluxy/hnginterns.git">Stage 1 result</a></p>
		</div>
		<div class="contact" align="center">
			<h3>Send a message</h3>
			<form action="" method="post">

        <?php if(isset($error) && !empty($error)): ?>
          <div class="error">
            <ul style='list-style:none;'>
              <?php
                foreach ($error as $key => $value) {
                  //echo "<li>$value</li>";
                }
              ?>
            </ul>
          </div>
        <?php endif; ?>

				<input type="text" name="subject" placeholder="Subject" required>
				<textarea name="message" rows="8" cols="52" placeholder="Message" required></textarea>
				<input type="submit" name="" value="Send" class="btn btn-send">
			</form>
		</div>
	</div>
</div>
</div>

</body>
</html>
