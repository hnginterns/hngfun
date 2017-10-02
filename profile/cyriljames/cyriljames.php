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
    <style>
    body {
      margin:10px;
      color: #6C7A89;
      background-color: #fff;
      font-family: "sans-serif", verdana;
      font-size: 14px;
      line-height: 1.5;
    }
    .container {
      display: flex;
      max-width: 500px;
      margin: 0 auto;
      justify-content: center;
      align-items: center;
    }
    .wrapper {
      display: flex;
      justify-content: center;
      align-content: center;
    }
    .profile {
      box-shadow: 0 7px 13px rgba(0,0,0,0.19), 0 1px 2px rgba(0,0,0,0.24);
      height: auto;
      margin-bottom: 50px;
    }
    .profile h3{
      margin-bottom: 30px;
    }
    @media only screen and (max-width: 768px) {
      .wrapper {
        flex-flow: column wrap;
        padding: 0px;
        width: 100%;
    }
    }
    img {
      display:block;
      height: auto;
      border-radius: 120px;
      border:4px solid #f9f9f9;
    }
    .img {
      height: auto;
      background-color: #86E2D5;
      padding: 20px 0px;
    }
    .biodata {
      background-color: #fff;
      text-align: left;
      padding: 15px;
      text-align: justify !important;
    }
    .biodata h3{
      text-align: center;
    }
    .contact{
      padding: 20px;
      background-color: #f8f8f8;
    }
    p > span {
      font-weight: bold;
    }
    p > a {
      text-decoration:none;
      color: #019875;
      font-size: 18px;
    }
    p > a:hover {
      text-decoration:underline;
      color: #36D7B7;
    }
    input[type=text], input[type=email]{
      padding: 10px;
      width: 90%;
      display: block;
      margin-bottom: 30px;
      font-family: "sans-serif", verdana;
      font-size: 14px;
    }
    input:focus{
      border: 2px solid #019875;
    }
    textarea{
      display: block;
      width: 90%;
      margin-bottom:10px;
      resize: none;
      padding: 10px;
      font-family: "sans-serif", verdana;
      font-size: 14px;
    }
    textarea:focus{
      border: 2px solid #019875;
    }
    .btn{
      padding: 10px 20px;
      border-width: 0px;
      border-radius: 2px;
    }
    .btn-send{
      background-color: #26A65B;
      box-shadow: 0 7px 13px rgba(0,0,0,0.19), 0 1px 2px rgba(0,0,0,0.24);
      color: #fff;
      font-family: "sans-serif", verdana;
      font-size: 14px;
      margin-top: 30px;
    }
    .btn-send:hover{
      background-color: #1E824C;
    }
    .error{
      padding: 5px;
      background-color: #F4B350;
      color: #fff;
      text-align: center;
    }

    </style>
	<title>Cyril James</title>
</head>
<body>

<div class="container">
	<div class="wrapper">
	<div class="profile">
		<div class="img" align="center">
			<img src="https://ca.slack-edge.com/T3QLSP8HM-U6S23RZ9V-66b1fabc0e55-512" width="300px" height="300px" alt="Cyril James">
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
		<div class="contact">
      <center>
			<h3>Send a message</h3>
			<form action="#" method="post">

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
				<input type="submit" name="submit" value="Send" class="btn btn-send">
			</form>
		</div></center>
	</div>
</div>
</div>

</body>
</html>
