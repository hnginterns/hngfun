<!Doctype html>
<html>
<head>
<title> Mfonabasiisaac - contact </title>
<meta name='viewport'content='width=device-width,initial-scale=1.0'>
<script>
function autofocus(){
document.getElementById("focus").focus();	
}

</script>
<style>
body{
font-family:cabri,sarif;
font-size:20px;
background-color: #004040;	
padding-top:20px;	
padding-left:20px;	
padding-right:0px;	
color:#f0f0f0;
}
#main-container{
width:100%;
height:800px;	
	
}
#subleft-container{
background-color:#002020;
float:left;
width:30%;
height:inherit;
border:1px solid #000;	
padding:10px;	
margin-right:10px;
margin-bottom:10px;
box-sizing: border-box;
word-wrap:break-word;
-o-border-radius:10px;
border-radius:10px;

}



#subright-container{
background-color:#002020;
-o-border-radius:10px;
border-radius:10px;
float:left;
width:65%;
height:inherit;
border:1px solid #000;	
padding:15px;	
margin-bottom:10px;
box-sizing: border-box;
overflow:hidden;
word-wrap:break-word;
text-align:justify;
}

#my-photo{
width:100%;
height:50%;	
border:3px outset #000020;
margin-bottom:10px;	
}

#my-photo:hover{
	opacity:0.5;
	cursor:pointer;
}
.details{
margin-bottom:5px;
-o-border-radius:10px;
border-radius:10px;
background-color: #004040;
display:block;
padding:5px;
width:100%;
height:auto;	
	

	}
.details h2{
	display:inline;
	font-size:22px;
}
.details:hover{
	opacity:0.7;
}
a{
color:grey;
text-decoration:none;
display:inline;
}
a:hover{
text-decoration:underline;	
}
h1{
	text-align:center;
}

#contact-info{
clear:both;
height:750px;
width:90%;
margin:auto;
border:1px solid #000;	
background-color:#002020;
-o-border-radius:10px;
border-radius:10px;	
text-align:center;	
	
	
}
form{
	width:100%;
	height:100%;
	text-align:center;
}
fieldset{
	width:80%;
	height:90%;
	margin:auto;
	-o-border-radius:10px;	
	border-radius:10px;	
}
input {
width:80%;
height:6%;
margin-bottom:5px;
-o-border-radius:10px;
border-radius:10px;
	
}
input:focus{
	background-color:#004040;
	height:12%;
	color:#fff;
}
input[type='submit']:hover{
background-color:#004040;
color:#fff;
height:6%;
}
input[type='submit']:focus{
position:relative;
top:5px;	
}

#mail-content{
	width:80%;
height:50%;
margin-bottom:5px;
-o-border-radius:10px;
border-radius:10px;
	
}
#mail-content:focus{
	background-color:#004040;
	color:#fff;
}

#error{
	
width:60%;
background-color:#f00;
margin:auto;
margin-bottom:5px;	
margin-top:5px;	
-o-border-radius:10px;
border-radius:10px;
}

@media only screen and (max-width:582px){
	
#main-container{
width:100%;
height:1000px;	
	
}
@media only screen and (max-width:429px){
	

#main-container{
width:100%;
height:800px;	
	
}
#subleft-container{
background-color:#002020;

width:100%;
height:auto;
border:1px solid #000;	
padding:10px;	
margin-right:10px;
margin-bottom:10px;
box-sizing: border-box;
word-wrap:break-word;
-o-border-radius:10px;
border-radius:10px;

}



#subright-container{
background-color:#002020;
border-radius:10px;
width:100%;
height:auto;
border:1px solid #000;	
padding:15px;	
margin-bottom:10px;
box-sizing: border-box;
overflow:hidden;
word-wrap:break-word;
text-align:justify;
}

#my-photo{
width:100%;
height:50%;	
border:3px outset #000020;
margin-bottom:10px;	
}




	
	
	
}
</style>
</head>
<body onload='autofocus()'>
<!---
things to placed on my biography
Date and place of birth (and death, if applicable)
Major achievements
Education
Work facts
An overview of what makes the person significant
-->
<div id='main-container'>
	<div id='subleft-container'>
	<h1>My Profile</h1>
	<img src='http://res.cloudinary.com/dycfllatt/image/upload/v1505010301/mypix_yosrug.jpg'
	id='my-photo'><!-- my profile picture -->
	
	<span class='details'><h2>Name:&nbsp; </h2> Mfonabasi Isaac </span>
	<span class='details'><h2>Slack Username:&nbsp;</h2> @mfonabasiisaac </span>
	<span class='details'><h2>Facebook:&nbsp;</h2><a href='https://www.facebook.com/mfonabasiisaacudobia.udobia'target='_blank'>Mfonabasi Isaac</a> </span>
	
	
	
	</div><!--end of sub left container-->
		<div id='subright-container'>
		<h1>My Biography</h1>
		<p style='text-indent:12px;'>
		Mfonabasi Isaac is an accounting student aged 18years. He loves math, accounting and programming and devotes 
		most of his time to them. He became interested in programming
		at the age of 13years and owned a website which isn't in existence anymore. He stopped coding html
        markup language	at the age of 14years to focused on his education. After the end of 2017/2018 waec examination
		he resumed his programming life, now having a strong foundation on html, css, php and little knowledge of 
		javascript.</p>
		<p style='text-indent:12px;'>
		Mfonabasi joined the Internship program to help him put his programming skills to used and to assist
		other programmers with or without knowledge of programming. He can be contacted on 
		facebook: <a href='https://www.facebook.com/mfonabasiisaacudobia.udobia'target='_blank'>Mfonabasi Isaac</a> 
		</p>
		
		</div><!--end of sub right container-->
</div><!-- end of body container -->


<div id='contact-info'>
<!-- php code starts here -->
<?php
//configuration
$config = [
          'dbname' => 'hng',
          'pass' => '@hng.intern1',
          'username' => 'intern',
          'host' => 'localhost'
      ];
$host = $config['host'];	  
$username = $config['username'];	  
$password = $config['pass'];	  
$dbname = $config['dbname'];	  
	 
//end of configuration

if(isset($_POST['sendmail'])){
$to = 'mfonabasiisaac@gmail.com';	
$subject = $_POST['subject']; 	
$content = $_POST['content']; 
$error = array();
if(!empty($subject) AND !empty($content)){
	
	

//conection
$connect = mysqli_connect('$host','$username','$password','$dbname');
//sql statement
$sql = "SELECT * FROM password LIMIT 1";
if($query = mysql_query($connect, $sql)){
$field = mysqli_fetch_assoc($query);
$password = $field['password'];
$send = "http://hng.fun/sendmail.php?password=$password&subject=$subject&body=$content&to=$to";
header("location: $send");
}
}
else{

$error[] = 'Your mail cant be empty, fill in all input';	
}	
	
	
if($error){	
echo "<div id='error'> $error[0] </div>";
}	
}


?>
<!-- php code ends here -->
<form action='mfonabasiisaac.php'method='POST'>
<fieldset><legend><h2>Mail Mfonabasi</h2></legend>
<input type='text'name='subject'placeholder='Subject of mail......'id='focus'autofocus>
<textarea id='mail-content'name='content'placeholder='Content of the mail......'></textarea>
<input type='submit'name='sendmail'value='Mail me'>
</fieldset>
</form>



</div><!-- end of contact info -->













</body>
</html> 
  
  
 
  
  
  </body>
  </html>