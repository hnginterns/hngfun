
`<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  

 $error = [];

 $subject = $_POST['subject'];
  $to  = 'viclotana@gmail.com';
  $body = $_POST['message'];

 if($body == '' || $body == ' ') {
    $error[] = 'Message cannot be empty.';
  }


 if($subject == '' || $subject == ' ') {
    $error[] = 'Subject cannot be empty.';
  }

 if(empty($error)) {

   $config = include(dirname(dirname(dirname(__FILE__))).'/config.php');
    $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
    $con = new PDO($dsn, $config['username'], $config['pass']);

   $exe = $con->query('SELECT * FROM password LIMIT 1');
    $data = $exe->fetch();
    $password = $data['password'];

   $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";

   header("location: $uri");

 }
}
?>`


<!DOCTYPE html>
<html>
<head>
	<title> viclotana</title>
	<style type="text/css">
		
body {
  padding-left: 11em;
  font-family: Georgia, "Times New Roman",
        Times, serif;
  color: purple;
  background-color: #d8da3d }

.image{
		width:300px;
		height:300px;
		border-radius:10%;
		margin-top:1px;
		margin-right:6.7px;
		}
ul.navbar {
  list-style-type: none;
  padding: 0;
  margin: 0;
  position: absolute;
  top: 2em;
  left: 1em;
  width: 9em }
h1 {
  font-family: Helvetica, Geneva, Arial,
        SunSans-Regular, sans-serif }


        input[type=text], select, textarea {
    width: 100%; 
    padding: 12px;  
    border: 1px solid #ccc; 
    border-radius: 4px; 
    box-sizing: border-box; 
    margin-top: 6px; 
    margin-bottom: 16px; 
    resize: vertical 
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
    background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
    border-radius: 5px;
    
    padding: 20px;
}

	</style>

</head>

<body>
	<div>
		<center><img class="image" src="http://res.cloudinary.com/doab0xvfh/image/upload/v1503413511/WhatsApp_Image_2016-10-26_at_2.51.59_PM_rqabn2.jpg" align="left"alt="avatar" /></center>
		<h1>Nwose Lotanna </h1>
		<h2></h4><a href="https://github.com/viclotana/hnginternship" target="_blank">Stage1 link</a></h2><hr>
		
		<p>
			<strong>Bio:</strong> I am a youth corper serving at Government Secondary School, Karu in Nasarawa state<br/>
			Graduate of Universityof Benin<br/>I  stay at Apo, Abuja.<br/> 
		</p>
		<p>
			<strong>Abilities :</strong> I am a fast learner and pretty much a beginer.<br/>
			<strong>Intrests :</strong> I am interested in learning javascript and php. i have used angular js, and i am excited about this internship<br/> 
		</p><hr />
					
  

  		
<div class="container">
	<h3>Contact me</h3>
	
  <form method="POST" action="">

  	

    <label for="name"> Name</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <label for="message">Email</label>
    <input type="text" id="message" name="message" placeholder="Your email address..">

    <label for="Levels">Level</label>
    <select id="Level" name="select Level ">
      <option value="Beginner">Beginner</option>
      <option value="Intermediate">Intermidiate</option>
      <option value="Expert">Expert</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>
			Slack : @viclotana
			<br /><span>
				<a href="https://twitter.com/viclotana" target="_blank">Twitter</a>
				<a href="https://github.com/viclotana" target="_blank">Github</a>
				<a href="https://github.com/viclotana/hnginternship" target="_blank">Stage1 link</a>
			</span>
		<br />
	</div>
</body>
</html>
