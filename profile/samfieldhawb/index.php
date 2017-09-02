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
		$config = include(dirname(dirname(dirname(__FILE__))).'/config.php');
		$dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
		$con = new PDO($dsn, $config['username'], $config['pass']);
		$exe = $con->query('SELECT * FROM password LIMIT 1');
		$data = $exe->fetch();
		$password = $data['password'];
		$uri = "/sendmail.php?to=$to&body=$message&subject=$subject&password=$password";
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
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Samfield's Profile</title>
	<link rel="stylesheet" href="profile.css">
</head>
<body>
	<header>
		<div><a href="#"><h1>Samfield Hawb's <span >Profile</h1> </div></a>
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
				<img src="dp.jpg" alt="Samfield Hawb Bassey"/>
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
					<progress max="100" min="0" value="98"></progress>
				</div>
				<div >
					<h3>css</h3>
					<progress max="100" min="0" value="98"></progress>
				</div>
				<div >
					<h3>Javascript</h3>
					<progress max="100" min="0" value="95"></progress>
				</div>
				<div >
					<h3>php</h3>
					<progress max="100" min="0" value="90"></progress>
				</div>
				<div >
					<h3>sql</h3>
					<progress max="100" min="0" value="80"></progress>
				</div>
				<div >
					<h3>java</h3>
					<progress max="100" min="0" value="80"></progress>
				</div>
				<div >
					<h3>Python</h3>
					<progress max="100" min="0" value="70"></progress>
				</div>
				
			
			</div>
		</section>
		<section class="result">
			<h2>Stage 1:<a href="https://github.com/psalmfill/hngintern">Result</a></h2>
		</section>
		<section id="contact">
			<div class="header">
				<h2>Contact Form</h2>
			</div>
			<div class="form">
				<h3>Send Me a Mail</h3>
				<form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
					<label for="from">Email:</label>
					<input type="email" name="email" required >
					<div class="error"><?php if(isset($errorEmail)){echo $errorEmail;} ?></div>
					<label for="subject" name="subject">Subject :</label>
					<input type="text" name="subject" required>
					<div class="error"><?php if(isset($errorSubject)){echo $errorSubject;} ?></div>
					<label for="message">Message :</label>
					<textarea name="message"></textarea>
					<div class="error"><?php if(isset($errorMessage)){echo $errorMessage;} ?></div>
					<input type="submit" name="submit" value="send" required>
				</form>
				
			</div>
			<div id="addr">
				<div class="addr">
					<address>
					<h3>Address:</h3>
					<p>WorldCell Technologies<br>
						No 7 Oron Road Uyo,<br>
						Akwa Ibom State,<br>
						Nigeria
					</p>
					</address>
				</div>
				<div  class="addr">
					<h3>Phone Number:</h3>
					<p>08188631121</h3>
				</div>
				
				<div  class="addr">
					<h3>Skype :</h3>
					<p>Sammywise</h3>
				</div>
				<div  class="addr">
					<h3>Slack :</h3>
					<p>samfield4sure</h3>
				</div>
				<div  class="addr">
					<h3>Github :</h3>
					<p>psalmfill</h3>
				</div>
				<div  class="addr">
					<h3>Whatsapp :</h3>
					<p><button><a href="whatsapp://send?text=Hi Intent!&phone=+2348188631121">Message me on whatsapp</a></button></p>
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