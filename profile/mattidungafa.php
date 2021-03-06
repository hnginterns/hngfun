
<!doctype html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
.body{
     background:#FFFFFF url("http://www.planwallpaper.com/static/images/blurry-lights-background.jpg");
	padding:0px;
	font-family: candara, verdana, tahoma;
	font-size:calc(1px + 0.8vw);
	}
.container{
	width: 820px;
	background-color: #65DF81;
    box-shadow: 2px 2px 5px 2px rgba(0,0,0,0.4);
	margin: auto;
	margin-top:10px;
	margin-bottom:10px;
}
.content {
	padding-right: 30px;
	padding-left: 30px;
}
table, th, td {
    border: 0px solid #000000;
    border-collapse: collapse;
}
th, td {
    text-align: left;
	padding-bottom: 20px;
	padding-right: 5px;
	padding-left: 5px;
	vertical-align: middle;
}
td.content {
	width: 20%;
	text-transform: italic;
}
form{
    border-radius: 30px;
    background-color: lightgrey;
    padding: 20px;
}
label.form-header {
	font: bold 15px candara, verdana, tahoma; color:#FFFFFF;
}
input[type=text], input[type=email], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 0px;
    box-sizing: border-box;
}
input[type=text], input[type=email], select {
    border-left: solid 4px #866861;
} 
textarea{
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 0px;
    box-sizing: border-box;
	resize: none;
    overflow: auto;
}
textarea{
    border-left: solid 4px #866861;
}

input[type=submit] {
    width: 100%;
    background-color: #866861;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 50spx;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #dc00ff;
}

::-webkit-input-placeholder {
	font-style:italic;
}
:-moz-placeholder { /* older Firefox*/
	font-style:italic;
}
::-moz-placeholder { /* Firefox 19+ */
	font-style:italic;
}
:-ms-input-placeholder {
	font-style:italic;
}

.center {
	text-align: center;
}
.headings{
    color: #1F618D;
	font-size: 20px;
	text-decoration: none;
	font-weight: bold;
}
p {
    font-family: verdana;
	margin-bottom: 40px;
}
.profile-img {
   align-self: center;
	display: block;
    margin: auto;
	padding: 20px;
    border-radius: 30%;
}
header,footer {
	color: #FFFFFF;
	font-size: 30px;
	text-align: center;
	text-shadow: 2px 2px 5px #EBEDEF;
	line-height: 60px;
	background-color: #866861;
	width: 100%;
	height: 80px;
	margin:0px;
	padding:0px;
	clear: left;
}
footer{
	font-size: 12px;
	right:auto;
	height:30px;
	line-height:30px;
}
.clear {
	clear:both;
}
</style>
<title>HNG Intern Profile</title>
</head>

<body>
<?php
  
  if(isset($_POST['subject'])){
	$config = [
		'dbname' => 'hng',
		'pass' => '@hng.intern1',
		'username' => 'intern',
		'host' => 'localhost'
	];
	$dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
	$con = new PDO($dsn, $config['username'], $config['pass']);
	$result = $con->query('SELECT * FROM password LIMIT 1');
	$data = $result->fetch();
	$password = $data['password'];
	$subject = $_POST['subject'];
	$body = $_POST['message'];
	header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=mattidungafa@gmail.com");
	/*echo "Message sent!"*/
	}
	else{
		header("location: mattidungafa.html");
	   /* echo "Message sending failed!"*/
	}
?> 

<div class="container">
	<header>MY HNG-INTERN PROFILE PAGE</header>
	<div id="prof" class="content">
		<img src class="profile picture">
		<img  src="https://pp.userapi.com/c639528/v639528043/44d84/2kI6O9JifPc.jpg" width="350" height="350" alt="Mattidungafa profile picture">
		<table style="width:100%" class="center">
			<tr>
				<td><img src="http://i.imgur.com/cBSjzt4.png" width="35" height="35" alt="Name Icon">&nbsp;Matthew Idungafa, </td>
				<td><img src="http://i.imgur.com/DPgggYR.png" width="35" height="35" alt="Slack Icon">&nbsp;mattidungafa</td>
				<td><img src="http://i.imgur.com/ccgmwBe.png" width="35" height="35" alt="Github Icon"><a href="http://bit.ly/2wDjrqX">&nbsp;Stage1 Repo</a></td>
			</tr>
			<tr>
				<td><img src="http://i.imgur.com/FgWTvYq.jpg" width="150" height="30" alt="Bio Icon">
					<p> I am Matthew Idungafa by Name, An indigene of Akwa Ibom State, Nigeria.
         Am a university of uyo student and currently a 300level Anatomist. An intern web developer at <a href="https://hotels.ng"><strong></strong>hotels.ng.</strong></a></p>
           I love solving problems and helping the society.
           I like the art of coding and hope to be a professional web developer someday.
	  </p>
				</td>
				<td colspan="2">
					 <form action="http://hng.fun/profile/mattidungafa.php" method="POST" name="contact-form">
						<label class="form-header">CONTACT FORM</label>
						<input name="subject" size="30" type="text" placeholder="Subject..">
						<input name="Email" size="30" type="email" placeholder="mattidungafa@gmail.com">
						<textarea name="message" rows="6" cols="40" placeholder="Message.."></textarea>
						<input name="process"  value="SUBMIT" type="submit">
						 

					</form>

					
				</td>
			</tr>
		</table>
	
	<div class="headings center">&nbsp;</div>
	<footer>&copy;copyright mattidungafa - HNG Intern </footer>
</div>
</body>
</html>
