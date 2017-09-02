<!doctype html>
<html lang="en">
	<head>
	  <meta charset="utf-8" />
	  <meta name="codaphrenic" content="profile" />

	  <link rel="stylesheet" type="text/css" href="css/style.css"  />
	  <title>Codaphrenic</title>
	</head>
	<body>
		<div class="container">
			<div class="header">
				<h1>@codaphrenic</h1>
				<h2>Backend Developer</h2>
				<img src="https://imgur.com/lWDqRlc.jpg" class="profile" alt="Codaphrenic"/>
			</div>
			<div class="content">
				<h3>about me</h3>
				<p>Hey - I am Edafe Oghenefego, candidate for HNG Internship. Graduate of Computer Science,
				   University of Port Harcourt. I'm a back-end web developer proficient in <b>PHP,JAVA ,HTML</b> and <b>CSS</b>. </p>
				<a href="https://github.com/codaphrenic/basic-login" > View Stage1 task </a>
			</div>
			<div id="wraptheform">
				<div id="contactform"><h4>Leave me a message:</h4><br /></div>    
				<div id="contactwas">Thanks for contacting me!<br/><br/>I will stay in touch.</center></div>

				<form method="post" id="mailer" action="mail.php">
					
					<p class="email">
						<input name="email" type="text" placeholder="Email" />
					</p>
					<p class="name">
						<input name="subject" type="text" placeholder="Subject" />
					</p>
					<p class="text">
						<textarea name="message" placeholder="Message"></textarea>
					</p>
					<div class="submit">
						<input type="submit" value="SEND" />
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
