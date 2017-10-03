<?php
$error = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = strip_tags($_POST['name']);
	$subject = strip_tags($_POST['subject'])." from ".$name;
	$message = strip_tags($_POST['message']);
	
	if(!empty($name) && !empty($subject) && !empty($message)) {
		$config = include (dirname(dirname(__FILE__)).'/config.php');
		$connect = mysqli_connect($config['host'], $config['username'], $config['pass'], $config['dbname'])
		or die("Connection failed");
		$pw = "SELECT * FROM password LIMIT 1";
		$pwq = mysqli_query($connect, $pw);
		$pwf = mysqli_fetch_assoc($pwq);
		$pass = $pwf['password'];
		
		header("location: http://hng.fun/sendmail.php?to=isaacnsikak@gmail.com&body=$message&subject=$subject&password=$pass");
		
	}
	else {
		$error = "<div id='errors'><i class='fa fa-times-circle'></i> Please fill required fields.</div>";
	}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Nsikak Isaac - Profile Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
* {
   margin: 0;
   padding: 0;
   box-sizing: border-box;
}

body {
   max-height: 100%;
   margin: 0;
   background-color: rgba(32,178,170, 0.6) ;
   }
   
.profile {
     width: 360px;
	 height: 90%;
     min-width: 25%;
	 min-height: 90%;
	 text-align: center;
	 border: 2px solid #20b2aa;
	 margin: 5%;
	 float: left;
	 background-color: #48d1cc;
	 border-radius: 10px;	 
	 box-shadow: 20px 20px 20px 20px rgba(0, 0, 0, 0.2);
}  
#ppic{
     max-width: 40%;
	 max-height: 40%;
	 border-radius: 50%;
	 margin: auto;
	 display: block;
	 border: 4px solid #20b2aa;
	 
}

p {
   font-style: italic;
}

.bg {
  background-color: #20b2aa;
  border-radius: 2px;
}  

#social {
    margin-top: 47%;
	background-color: #20b2aa;
	border-radius: 5px;
	font-size: 18px;
	font-weight: bold;
}

.icons {
    color: #ADD8E6;
	font-size: 30px;
}

.icons:hover {
    color: #48d1cc;
}

#contact {
	border: 2px solid #20b2aa;
	border-radius: 10px;
	float: right;
	width: 360px; 
	height: 550px;
    min-width: 20%;
	min-height:	90%;
	margin: 7% 5%;
	background-color: #48d1cc;
	box-shadow: 20px 20px 20px 20px rgb(0, 0, 0, 0.2);
	
}

#contact h2 {
	text-align: center;
	background-color: #20b2aa;
}

input[type=text], [type=email] {
	margin: 5px 0;
	width: 100%;
	height: 40px;
	padding: 5px;
	font-family: serif;
	border: none;
	border-radius: 4px;
	background-color: #ADD8E6;
}

input:focus{
	height: 50px;
    background-color: #20b2aa;	
	border: none;
	border-radius: 4px;
}
textarea {
	margin: 5px 0;
	width: 100%;
	height: 150px;
	padding: 5px;
	resize: none;
	font-size: 16px;
	font-family: serif;
	border: none;
	border-radius: 4px;
	background-color: #ADD8E6;
	
}
textarea:focus {
	height: 160px;
	background-color: #20b2aa;
	border: none;
	border-radius: 4px;
}
fieldset {
	border: none; 
}

label {
	font-weight: bold;
	margin-left: 2px;
	margin-top: 2px;
}

button {
	margin: 5px 0;
	width: 100%;
	height: 40px;
	font-size: 18px;
	font-weight: bold; 
	background-color: #20b2aa;
	border: none;
	border-radius: 4px;
}

button:hover {
	color: #ADD8E6;
}

#errors {
	width: 100%;
	background-color: red;
	padding-top: 5px;
	height: 30px;
	border-radius: 4px;
	text-align: center;
}


@media only screen and (max-width: 499px)  {
    .profile {
     max-width: 90%;
	 max-height: 90%;
	 float: none;
}
    #contact {
		max-width: 90%;
		max-height: 90%;
		float: none;
	}
}

@media only screen and (min-width: 500px) and (max-width: 920px) {
    .profile {
     max-width: 100%;
	 max-height: 100%;
	 float: left;
	 margin-left: 17.5%;
	 margin-right: 17.5%;
	 
}
    #contact {
		max-width: 100%;
		max-height: 100%;
		float: left;
	    margin-left: 17.5%; 
		margin-right: 17.5%;
	}
}

</style>
</head>

<body>
<div class="profile">
<header>
<div class="bg">
<h1><i class="fa fa-user-circle"></i> Nsikak Isaac</h1>
</div>
</header>

<br />

<img id="ppic" src="http://res.cloudinary.com/brainiac/image/upload/v1504997184/Nzikak_hcfvyc.jpg" 
title="Nsikak" alt="Nsikak">
<br />
<br />

<div class="bg">
<h2>&nbsp;<i class="fa fa-id-card-o"></i> Bio </h2>
<p>Tech Enthusiast, Budding Web/App developer, Music/Meme Lover, Game Of Thrones fan, Staunch Chelsea fan,
Business Minded, and an aspiring Entrepreneur. 
</p>
</div>

<div id='social'>
<i class="fa fa-users"></i> Connect With Me On
<br />
<a class="icons" title="Fb: Nzikak Isaac" target="_blank" href="https://fb.com/profile.php?id=100010635757410"><i class="fa fa-facebook-square"></i></a>
<a class="icons" title="Github: Nzikak" target="_blank" href="https://github.com/Nzikak"><i class="fa fa-github"></i></a>
<a class="icons" title="Slack: @Nzikak" target="_blank" href="https://hnginterns.slack.com/team/nzikak"><i class="fa fa-slack"></i></a>
</div>
</div> 

<div id="contact">
<h2><i class="fa fa-edit"></i> Contact Form</h2>
<fieldset>
<form action="Nzikak.php" method="POST">
<?php echo $error; ?>
<label><i class="fa fa-user"></i> Name (Required): </label>
<input type="text" name="name" placeholder="Enter Your Name" required />

<label><i class="fa fa-envelope"></i> Email (Optional): </label>
<input type="email" name="email" placeholder="Enter Your Email" />

<label><i class="fa fa-question-circle"></i> Subject (Required): </label>
<input  type="text" name="subject" placeholder="Subject" required />

<label><i class="fa fa-file-text"></i> Message (Required): </label>
<textarea placeholder="Enter Your Message" name="message" required ></textarea>

<button type="Submit"><i class="fa fa-arrow-circle-right"></i> Send</button>
</form>

</fieldset>
</div>
</body>
</html>