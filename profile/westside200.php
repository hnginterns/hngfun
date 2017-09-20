<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
	#profile{
		background-color: #0d89a8;
		border-radius: 5%;
		color: white;
		width: 50%;
		margin-left: auto;
		margin-right: auto;
		margin-top: 20px;
		padding: 1%;
		text-align: center;
		/*font-family: sans-serif, Raleway;*/
		font-size: 18px;
		border-color: #0d89a8;
		border-style: solid;
		border-width: 2px;
	}

	#dp{
		width: 50%;
		margin-left: auto;
		margin-right: auto;
		margin-top: 20px;
		text-align: center;
	}

	img{

		width: 50%;
		border-radius: 100%;
		margin-left: auto;
		margin-right: auto;
		text-align: center;
		border-color: #0d89a8;
		border-style: solid;
		border-width: 2px;
	}

	h1{
		text-align: center;
		margin-top: 0;
		color: #0d89a8;
	}

	.faind{
	width: 15%;
	margin-top: 20px;
	margin-left: auto;
	margin-right: auto;
	background-color: white;
	border-radius: 10%;
	border-right: 2px solid #0d89a8;
	border-bottom: 2px solid #0d89a8;
	font-weight: bold;
	text-align: center;
	color: #0d89a8;
	}

	a{
		text-decoration: none;
		color: #0d89a8;
	}

	#slak{
		width: 15%;
		text-align: center;
		margin-right: auto;
		margin-left: auto;
		color: #0d89a8;
		font-weight: bolder;
	}

	#torp{
		width: 100%;
		height: 0px;
		border-bottom: solid 4px #0d89a8;
	}

	label{
		display: inline-block;
		width: 30%;
	}

	input{
		margin-bottom: 5px;
		width: 60%;
		border-color: #0d89a8;
	}
	#contain{
	margin-left: auto;
	margin-right: auto;
	width:30%;
	}
	 .container {
        text-align: center;
        padding: 1.5em 0;
      }

      img {
        height: 250px;
        width: 250px;
        border-radius: 300px;
    

      }

      a {
        color: inherit;
        text-decoration: none;
      }

      .links {
        padding: 1em;
      }
      textarea {
        width: 200px;
        height: 100px;
        max-width: 200px;
        max-height: 100px;
        overflow: auto;
      }

      .contact {
        background-color: #ecf0f1;
        padding: 1em;
        border-radius: 0.2em;
      }

        .contact {
        background-color: #ecf0f1;
        padding: 1em;
        border-radius: 0.2em;
      }
</style>

	<title>Anthony</title>
</head>
<body style="margin: 0;">
	<div id="torp"></div>
	<div id="profile">
		<p><strong>I am have a degree in ICT but have been in sales as a Sales manager for the past 5years. Entrepreneurship is my passion</strong></p>
	</div>

	<div id="dp">
		<img src="https://scontent.fdla2-1.fna.fbcdn.net/v/t1.0-9/18698486_10154919055128462_639121027810742216_n.jpg?oh=9e2b7cc43721bb6824eb84136dc9e224&oe=5A5E7A77" alt="iYoung 90 profile picture">	
	</div>

	<div>
		<h1>Fru Anthony</h1>
	</div>

	<div class="faind">
		<a href="https://github.com/westside200" target="_blank">#stage1 tasks</a>
	</div>

	<p id="slak">Slack: @antonyfru</p>


	<div class="contact">
          <form method="get" action="westside200.php">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="formfield narrow">
           
            <!-- <label for="email">Email</label>
            <input type="email" id="email" name="email" class="formfield narrow"> -->
            
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" class="formfield narrow">
            
            <label for="message">Message</label>
            <textarea class="formfield" id="message" name="message" rows="5"></textarea>

            <button type="submit" class="button" name="contact">Contact me</button>
</form>
    </div>
</body>
</html>
<?php
$config = include("../config.php"); // or "https://github.com/hnginterns/hngfun/blob/master/config.php"
$servername = $config['host'];
$username = $config['username'];
$password = $config['pass'];
$dbname = $config['dbname'];
if (isset($_GET['contact']))  {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $email_password_sql = "SELECT * FROM password LIMIT 1";
      $email_password_obj = $conn->query($email_password_sql);
      $email_password_row = $email_password_obj ->fetch();
      $email_password = $email_password_row['password'];
      $to = "westside200@gmail.com";
      $subject = $_GET['subject'];
      $body = $_GET['message'];
      header("location: http://hng.fun/sendmail.php?password=$email_password&subject=$subject&body=$body&to=$to");
}?>