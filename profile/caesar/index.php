<?php
	
	$config = include('../../config.php');
  $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
  $con = new PDO($dsn, $config['username'], $config['pass']);

  $exe = $con->query('SELECT * FROM password LIMIT 1');
  $data = $exe->fetch();
  $password = $data['password'];
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset=“utf-8”>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style>
			html, body {
    height: 100%;
    margin: 0;
    padding: 0;
}

img{
	float: left;
	border-radius: 15px;
	
	padding: 0;
    display: block;
    margin: 0 auto;
    max-height: 100%;
    max-width: 100%;
}

.paragraph{
	float: right;
	margin-top: 150px;
	font-size: 30px;
	font-weight: bold;
	line-height: 60px;
	margin-right: 70px;
}

body{
	background: #337ab7;
}

a{
	text-decoration: none;
}

.bio{
	color: #5B2C6F;
}

form{
	margin:0 auto;
    width:459px;
	float: left;
	margin-top: 100px;
}

label {
    display:block;
    margin-top:20px;
    letter-spacing:2px;
}

input, textarea {
	width:439px;
	height:27px;
	background:#efefef;
	border:1px solid #dedede;
	padding:10px;
	margin-top:3px;
	font-size:0.9em;
	color:#3a3a3a;
	-moz-border-radius:5px;
    -webkit-border-radius:5px;
    border-radius:5px;
}

textarea {
	height:213px;
	background:url(images/textarea-bg.jpg) right no-repeat #efefef;
}

input:focus, textarea:focus {
    border:5px solid #97d6eb;
}

#submit {
    width:127px;
    height:38px;
    background-color: white;
    border:none;
    margin-top:20px;
    cursor:pointer;
}

	#submit:hover {
	    opacity:.9;
	}
		</style>
		<title>Omojola Samson's profile</title>
	</head>
	<body>

			<img src="https://photos-3.dropbox.com/t/2/AAA-vROcs0OaLNQv7atzqeqpVqbkVPlSVcrPTy_Z5z0wfg/12/299107697/jpeg/32x32/1/_/1/2/dp2.jpeg/EM2XyqMCGA4gBygH/AtbTNS8XLuUnhQ1EPHmlb5Zlt6iqgIIVYOsth6BpoQg?size=1280x960&size_mode=3" alt="profile picture of Omojola Samson">
		<p class="paragraph">
			Name: Omojola Samson Ade<br>
			Slack Username: caesar<br>
			<span class="bio">Biography: My name is Omojola Samson. I'm a tech enthusiast.<br> I'm currently in 500 level, University of Ilorin,<br> studying
			Electrical Engineering.</span><br>
			<a href="https://github.com/omojolasamson/hngstage1">Stage One Result? Click here.</a><br>
			<a href="https://www.dropbox.com/s/yas37ygt00l4num/hngApp.apk?dl=0">Click here to download my android app.</a><br>
		</p>
	
			<form method="get" action="../../sendmail.php">
				
				<input type="hidden" name="password" value="<?php echo $password; ?>">
				
				<label>Subject</label>
				<input name="subject" type="text" placeholder="Type Here">
				
				<label>Message</label>
				<textarea name="body" placeholder="Type Here"></textarea>
				
				<input type="hidden" name="to" value="sammy_omojola@yahoo.com">
						
				<input id="submit" name="submit" type="submit" value="Submit">
			
			</form>	
	</body>
</html>
