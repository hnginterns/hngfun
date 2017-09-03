<?php
	if(isset($_POST['submit'])){
		$errorEmail=$errorSubject=$errorMessage ="error";
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$to = "samfield4sure@gmail.com";
		
		if($email =="" || empty($email)){
			$errorEmail = "Email cannot be Empty";
		}else{
			$email = test_input($email);
		}
		if($subject =="" || empty($subject)){
			$errorSubject = "Subject cannot be Empty";
		}else{
			$email = test_input($email);
		}
		if($email =="" || empty($email)){
			$errorMessage = "Message cannot be Empty";
		}else{
			$email = test_input($email);
		}
		$message = $message. ". Send by ".$email;
		$config = include(dirname(dirname(dirname(__FILE__))).'/config.php');
		$dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
		$con = new PDO($dsn, $config['username'], $config['pass']);
		$exe = $con->query('SELECT * FROM password LIMIT 1');
		$data = $exe->fetch();
		$password = $data['password'];
		$uri = "../../sendmail.php?password=$password&subject=$subject&body=$message&to=$to";
		header("location: $uri");
		
	
	}
	//function to clean and sanitze all in put
	function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		  }
?>

<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Samfield's Profile</title>
	<style type="text/css" rel="stylesheet">
		*{
	padding:0;
	margin:0;	
}
body {
	text-align:center;
	color:#333333;
}
header {
	background:#000000;
	color:#fff;
	height:80px;
}
a {
	color:#fff;
	text-decoration:none;
	
}
a:hover {
	color:#1c9963;
}
header div {
	width:50%;
	float:left;
}
nav {
	float:left;
	width:50%;
	margin:2% 0;
}
nav li{
	display:inline-block;
	width:20%;
	text-align:center;
}
nav li a {
	text-decoration:none;
	color:#fff;
	display:block;
}
nav li a:hover {
	color:#1c9963;
}
header h1 {
	margin:0% 5%;
}
.container {
	width:80%;
	margin:1% auto;
}
#myPhoto {
	width:46%;
	float:left;
	height:500px;
	background:#cccccc;
	border-radius:20%;
	padding:2%;
}
#myPhoto img {
	width:80%;
	height:100%;
	border-radius:50%;
}
.myProfile {
	float:left;
	width:50%;
}
.label,.dtl {
	width:94%;
	text-align:left;
	margin:2%;
	background:#efedee;
	padding:1%;
	border-radius:5px;
	height:25px;
}
.label {
	color:#1c9963;
	font-size:130%;
}
.clearfix {
	clear:both;
}
.about {
	background:#1c9963;
	color:#fff;
}
.about h2 {
	text-align:left;
	margin:1%;
	padding:0 2%;
	text-decoration:underline;
	text-transform:uppercase;
}
.about div {
	text-align:left;
	background:#1c9963;
}
.about div h3 {
	text-transform:uppercase;
}
.about div >div {
	margin:0 auto;
	width:70%;
}
.about  p {
	width:70%;
	margin:0 auto;
	font-size:110%;
}

.progress {
	padding-bottom:1%;
}
.progress >div {
	background:#fff;
	padding:.5% 4%;
	
}
.progress div >h3 {
	color:#1c9963;
}
progress {
	width:100%;	
}
.result a {
	color:#1c9963;
}
.result a:hover {
	color:#cccccc;
}
#contact .form{
	width:40%;
	margin:2%;
	text-align:left;
	border:2px solid #1c9963;
	border-radius:10px;
	float:left;
}
#contact .form h3 {
	background:#1c9963;
	color:#fff;
	height:50px;
	line-height:50px;
	text-transform:uppercase;
	text-align:center;
	border-top-left-radius:6px;
	border-top-right-radius:6px;
	margin-bottom:5%;
	
}
#contact input,#contact textarea {
	width:94%;
	border:1px solid #cccccc;
	padding:1%;
	border-radius:5px;
	margin:0% 2% ;

}
#contact label {
	width:100%;
	font-size:120%; 
	margin:2% 4%;
	height:50px;
	text-transform:uppercase;
}
#contact input {
	height:30px;
}
#contact input[type="submit"] {
	cursor:pointer;
	background:#1c9963;
	height:50px;
	color:#fff;
}
#contact textarea {
	height:200px;
}
.header {
	background:#000000;
	color:#fff;
	height:80px;
	line-height:80px;
}
#addr {
	width:40%;
	float:left;
	margin:2%;
	padding:2% 2% 4% 2%;
	font-size:120%;
	/*border:2px solid #1c9963;*/
	border-radius:5px;
}
.addr {
	width:96%;
	margin:1% 0%;
	display:inline-block;
	padding:2%;
	text-align:left;
}
.addr .addrtitle {
	width:60%;
	float:left;
	color:#1c9963;
	font-size:120%;
	font-weight:bold;
	text-transform:uppercase;
	line-height:30px;
	
}
.addr p {
	float:right;
	width:40%
}
.addr .btn {
	background:#1c9963;
	width:100%;
	padding:4% 2%;
	border-radius:5px;
	cursor:pointer;
	color:#fff;
	box-shadow:5px 8px 2px #000000;
}
.addr .btn:active {
	box-shadow:5px 5px 2px #000000;
	background:#1c9900;
}

.error {
	color:red;
	margin:0% 2%;
	height:20px;
}

footer {
	background:#000000;
	height:50px;
}

@media all and (max-width:768px){
	.container {
		width:100%;
	}
	header {
		height:150px;
	}
	header div {
		width:100%;
		float:left;
	}
	nav {
		width:96%;
		margin:2% 0;
	}
	#myPhoto {
		clear:both;
		width:98%;
		padding:1%;
		height:auto;
	}

	.myProfile{
		width:100%;
	}
	.label,.dtl {
		height:auto;
	}
	.about  p {
		width:96%;
		text-align:left;
		padding:2%;
	}
	#contact .form {
		width:92%;
		border:none;
	}
	#addr {
		width:96%;
		margin:0;
		border:0;
	}
	
}
	
	</style>
</head>
<body>
	<header>
		<div><a href="#"><h1>Samfield Hawb's <span >Profile</span></h1></a></div>
		<nav>
			<ul>
				<li><a href="https://web.facebook.com/SamfieldHawb">Facebook</a></li>
				<li><a href="https://hnginterns.slack.com/team/samfield4sure">Slack</a></li>
				<li><a href="https://github.com/psalmfill">Github</a></li>
				<li><a href="https://plus.google.com/u/0/+SamfieldHawbBassey">Google+</a></li>
			</ul>
		</nav>
	</header>
	<div class="clearfix"></div>
	<div>
		<section class="container">
			<div id="myPhoto">
				<img src="https://preview.ibb.co/jTdc6v/IMG_20160421_074718.jpg" alt="Samfield Hawb Bassey"/>
			</div>
			<div class="myProfile">
				<div class="label">Full Name : &#8595; </div>
				<div class="dtl">Samfield Hawb Bassey</div>
				<div class="label">Date of Birth : &#8595; </div>
				<div class="dtl">12<sup>th</sup> October</div>
				<div class="label">Ocupation : &#8595;</div>
				<div class="dtl">Software Developer / GSM Engineer</div>
				<div class="label">Maximum Academic Qualification : &#8595;</div>
				<div class="dtl">National Diploma in Civil Engineering</div>
				<div class="label">Slack Username : &#8595;</div>
				<div class="dtl">samfield4sure</div>
				<div class="label">Github Username : &#8595;</div>
				<div class="dtl">psalmfill</div>
			</div>
		</section>
		<div class="clearfix"></div>
		<section class="about">
			<h2>About Me</h2>
			<p>My name is Samfield Hawb Bassey, am a native of Mbiatok Itam in Itu <abbr title="Local Goverment Area">L.G.A</abbr> of Akwa Ibom State, Federal
			Republic of Nigeria,i am National Diploma holder of Civil Engineering from Federal Polytechnic, Nekede,Owerri,imo state.</p>
			<p>I have been working with computers for a couple of years even before my polytechnic education.
			Some years ago became interested in talking to the computer to behave the way i want, which made me started programming,
			i never attended a computer school, but i was a regular customer to the cyberCafe.</p>
			<p>I am also into Gsm repairs and maintenance, currently attaching myself to Gionee mobile Phones as their service center engineer</p>
			<p>I am a big fan of IT that is why I train myself on some of programming languages, looking forward to artificial intelligent (AI) </p>
			<div class="progress">
				<h2>My programming Skills progress</h2>
				<div >
					<h3>Html</h3>
					<progress max="100"  value="98"></progress>
				</div>
				<div >
					<h3>css</h3>
					<progress max="100" value="98"></progress>
				</div>
				<div >
					<h3>Javascript</h3>
					<progress max="100" value="95"></progress>
				</div>
				<div >
					<h3>php</h3>
					<progress max="100" value="90"></progress>
				</div>
				<div >
					<h3>sql</h3>
					<progress max="100" value="80"></progress>
				</div>
				<div >
					<h3>java</h3>
					<progress max="100" value="80"></progress>
				</div>
				<div >
					<h3>Python</h3>
					<progress max="100" value="70"></progress>
				</div>
				
			
			</div>
		</section>
		<section class="result">
			<h2>Stage 1:<a href="https://github.com/psalmfill/hngintern">Result</a></h2>
		</section>
		<section id="contact">
			<div class="header">
				<h2>Contact</h2>
			</div>
			<div class="form">
				<h3>Send Me a Mail</h3>
				<form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
					<label for="email">Email:</label>
					<input type="email" id="email" name="email" required >
					<div class="error"><?php if(isset($errorEmail)){echo $errorEmail;} ?></div>
					<label for="subject">Subject :</label>
					<input type="text" id="subject" name="subject" required>
					<div class="error"><?php if(isset($errorSubject)){echo $errorSubject;} ?></div>
					<label for="message">Message :</label>
					<textarea name="message" id="message"></textarea>
					<div class="error"><?php if(isset($errorMessage)){echo $errorMessage;} ?></div>
					<input type="submit" name="submit" value="send" >
				</form>
				
			</div>
			<div id="addr">
				<div class="addr">
					<address>
					<p class="addrtitle">Address:</p>
					<p>WorldCell Technologies<br>
						No 7 Oron Road Uyo,<br>
						Akwa Ibom State,<br>
						Nigeria
					</p>
					</address>
				</div>
				<div  class="addr">
					<p class="addrtitle">Phone Number:</p>
					<p>08188631121</p>
				</div>
				
				<div  class="addr">
					<p class="addrtitle">Skype :</p>
					<p>Sammywise</p>
				</div>
				<div  class="addr">
					<p class="addrtitle">Slack :</p>
					<p>samfield4sure</p>
				</div>
				<div  class="addr">
					<p class="addrtitle">Github :</p>
					<p>psalmfill</p>
				</div>
				<div  class="addr">
					<p class="addrtitle">Whatsapp :</p>
					<p><a class="btn" href="whatsapp://send?text=Hi Samfield!&phone=+2348188631121">Message me</a></p>
				</div>
			</div>
		</section>

	</div>
	<div class="clearfix"></div>
	<footer>
		design by Samfield&copy; 2017.
	</footer>
</body>
</html>