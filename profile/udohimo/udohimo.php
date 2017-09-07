<?php
  if(isset($_SERVER['REQUEST_METHOD']) == 'POST') {
    $error = [];
    $subject = isset($_POST['subject']);
    $to  = 'udohimo@gmail.com';
    $body = isset($_POST['message']);
    if($body == '' || $body == ' ')  {
      $error[] = "Testing 1! 2!! 3!!!.";
    }
    if($subject == '' || $subject == ' ') {
      
    }
    if(empty($error)) { 
                $config = include(dirname(dirname(dirname(__FILE__))).'/config.php'); 
                $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname']; 
                $con = new PDO($dsn, $config['username'], $config['pass']); 
                $exe =$con->query('SELECT * FROM password LIMIT 1'); 
                    $data = $exe->fetch(); 
                    $password = $data['password']; 
                    $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password"; header("location: $uri"); } 
                    } ?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Imo Udo| HNG Intern Profile</title>
<style type="text/css">
body{background-color:#85f678;
margin-top:10%;}
.left {width:50%;
float: left;}
p {text-align:center}
a {text-align:center}
h1 {font-family:cooper;}
h2 {font-family:vernada;}
.right {float: right;
width: 40%;
margin-right:8%;}
h3 {font-family:bell mt;}
.right {float: right;
width: 40%;
margin-right:8%;}
h4 {font-family:bodini;}
.right {float: right;
width: 40%;
margin-right:8%;}
a {
text-decoration: none;
}
a:link {
    color: blue;
}
/* visited link */
a:visited {
    color: red;
}
p {
width:70%;
}
textarea {
width: 100%;
height: 150px;
padding: 12px 20px;
box-sizing: border-box;
border: 2px solid #ccc;
border-radius: 4px;
background-color: #f8f8f8;
resize: none;
}
img {    border-radius: 35%;
	img-align:right;
}
input[type=button], input[type=submit], input[type=reset] {
background-color: #00ffff;
border: none;
color: white;
padding: 16px 32px;
text-decoration: none;
margin: 4px 2px;
cursor: pointer;}

</style>
</head>

<body>

<div class="left" style="text-align:center;">
<h1>PROFILE</h1>
<img src = "https://ca.slack-edge.com/T3QLSP8HM-U6W8RGQ3U-bdf242b227f2-512"
height = "200"
width = "200"
alt = "profile picture" />
<p></p>
<h2> Udoh, Imo Ime</h2>
<fieldset>
<h4> I am an Akwa Ibomite and a graduate of <br>Geography and Regional Planning from <br>University of Uyo, Uyo.</h4>
<p><h4> I'm a lover of Technology and a people's person.<br>
    When faced with persistent problems, 
	<br>I like taking long walks to clear my head 
	<br>as well as taking some steps back <br>to view the bigger picture.</h4>
	</fieldset>
<fieldset><a href="https://hnginterns.slack.com/team/U6W8RGQ3U">udohimo</a>
<a href="https://github.com/udohimo/">#Stage1</a></fieldset>
</div>
<div class="right">
<fieldset>
<legend><h3> Contact Udohimo </h3></legend>

<div class="forminside">
<input name="customer_mail" id="customer_mail" class="dannys-input" placeholder="Your E-mail" required> <br>
</div>
<div class="forminside2">
<input name="subject" id="subject" class="dannys-input" placeholder="Subject" required><br>
</div>
<div class="forminside3">
<textarea id="body" name="body" cols="45" rows="5" required></textarea> <br>
<div class="bot">
</div></div>
<button type="submit" name="send">Send</button>
</fieldset></div>
</body>
</html>