<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['ftopic'];
    $to  = 'nseabasiokwong@yahoo.com';
    $body = $_POST['fmsg'];
    if($body == '' || $body == ' ') {
        $error[] = 'You have to TYPE in something to tell me something';
    }
    if($subject == '' || $subject == ' ') {
        $error[] = 'Your name and email are very important, TYPE them in';
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
<html lang= "en">
<head>
<meta charset="utf-8">
<meta name="description"  content="Nseabasi Okwong Profile">
	<title>Nseabasi Okwong Profile</title>


<style type="text/css">
	
	body {
		width: 70%;
		margin:0 auto;
		background-color:red;

		}

		p{
			font-size:2em;
			text-align:center;
			font-weight:normal;

			}

			.bo{

				font-weight: normal;
		
	}
	
	h1{
		text-align: center;
		background-color: white;
		color: red;
	}

	img {
		border-radius :50px;
		margin-right:auto;
		margin-left:auto;
		display:block;
	}
	h2{
	background-color: white;
	width: auto;
	height: 40px;
	text-align: center;
	margin: auto;
	color:red;
	}


</style>

<style type="text/css">
	
	.container{
		background-color: white;
		padding: 10px;
	} 

	.put{
		width:85%;
		padding: 10px;
		margin-top: 4px;
		margin-bottom: 8px;
		border-radius: 6px;
		border: 2px solid #7c4dff;
		font-weight: bold;
		color: #42a5f5;
		resize: none;

	}
			
			.formclass{
				padding:15px;
				background-color:#e57373;
	
	}
</style>

</head>
<body>
<div>
 <img src="https://scontent-bru2-1.xx.fbcdn.net/v/t1.0-9/19959278_1252129794897757_7893973253906275978_n.jpg?oh=4a0614fefb07cf5cc74ab922e5bcedcc&oe=5A5EB8A1" width="300px" height="400px">
 </div>

 <div>
<H1>Name: <span class="bo">Nseabasi Okwong</span></H1>
</div>
<div>
<p><strong>BIO:</strong> I one to be a web developer because i love developing things, that is while i put my effort to learn tutorials and understand coding. and i believe in this three months of hotels.ng program i will be able to become a web developer.</H2>
</div>
<div>
	<h2><strong>slack:</strong> Nseabasi Okwong</h2>

</div>
<p>
</p>
<p>
	
</p>
			<!-- contact form -->
			<div class="contact-form">
				<form action="#" method="post">
					<div class="form-input">
						<div class="label"><label for="fname">Name</label></div>
						<div class="bin">
							<input type="text" name="fname" id="fname" placeholder="Your Full Name" />
						</div>
					</div>
					<div class="form-input">
						<div class="label"><label for="fmail">Email</label></div>
						<div class="bin">
							<input type="email" name="fmail" id="fmal" placeholder="Your Email Address" />
						</div>
					</div>
					<div class="form-input">
						<div class="label"><label for="ftopic">Subject</label></div>
						<div class="bin subject">
							<input type="text" name="ftopic" id="ftopic" placeholder="Topic" />
						</div>
					</div>
					<div class="form-input txtaea">
						<div class="label"><label for="fmsg">Message</label></div>
						<div class="bin">
							<textarea name="fmsg" id="fmsg" placeholder="Your Message"></textarea>
						</div>
					</div>
					<div class="form-input">
						<input type="submit" value="Send Message" />
					</div>
				</form>
			</div>
		</div>
		<!-- footer -->
		<footer>
			<ul>
				<li><span><img src="https://cdn0.iconfinder.com/data/icons/tuts/256/slack_alt.png" alt="slack" /></span><a href="https://hnginterns.slack.com/team/nseabasiokwong" target="_blank">@nseabasiokwong</a></li>
				<li><span><img src="https://cdn3.iconfinder.com/data/icons/popular-services-brands/512/whatsapp-512.png" alt="whatsapp" /></span><a href="tel:09056517499">09056517499</a></li>
			</ul>			
		</footer>
	</div>
</body>
</html>