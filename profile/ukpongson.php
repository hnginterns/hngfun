<?php 
if (isset($_REQUEST['submitted'])) {
// Initialize error array.
  $errors = array();
  // Check for a proper First name
  if (!empty($_REQUEST['firstname'])) {
  $firstname = $_REQUEST['firstname'];
  $pattern = "/^[a-zA-Z0-9\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
  if (preg_match($pattern,$firstname)){ $firstname = $_REQUEST['firstname'];}
  else{ $errors[] = 'Your Name can only contain _, 1-9, A-Z or a-z 2-20 long.';}
  } else {$errors[] = 'You forgot to enter your First Name.';}
  
  // Check for a proper Last name
  if (!empty($_REQUEST['lastname'])) {
  $lastname = $_REQUEST['lastname'];
  $pattern = "/^[a-zA-Z0-9\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
  if (preg_match($pattern,$lastname)){ $lastname = $_REQUEST['lastname'];}
  else{ $errors[] = 'Your Name can only contain _, 1-9, A-Z or a-z 2-20 long.';}
  } else {$errors[] = 'You forgot to enter your Last Name.';}
  
  //Check for a valid phone number
  if (!empty($_REQUEST['phone'])) {
  $phone = $_REQUEST['phone'];
  $pattern = "/^[0-9\_]{7,20}/";
  if (preg_match($pattern,$phone)){ $phone = $_REQUEST['phone'];}
  else{ $errors[] = 'Your Phone number can only be numbers.';}
  } else {$errors[] = 'You forgot to enter your Phone number.';}
  
	 else {$errors[] = 'You forgot to enter your Phone number.';}
  }
  //End of validation  

  if (isset($_REQUEST['submitted'])) {
	if (empty($errors)) { 
	$from = "From: Intern Drumzminister!"; //Site name
	// Change this to your email address you want to form sent to
	$to = "ishukpong418@email.com"; 
	$subject = "Admin - Intern Drumzminister! Comment from " . $name . "";
	
	$message = "Message from " . $firstname . " " . $lastname . " 
	Subject: " . $messager . " 
	"";
	mail($to,$subject,$message,$from);
	$config = include(dirname(dirname(__FILE__)).'/config.php');
	$dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
	$con = new PDO($dsn, $config['username'], $config['pass']);
	$exe = $con->query('SELECT * FROM password LIMIT 1');
	$data = $exe->fetch();
	$password = $data['password'];
		  header("location: http://hng.fun/sendmail.php?password=$password&subject=$subject&body=$body&to=$to");
	  }
	}
  }
  

  //Print Errors
  if (isset($_REQUEST['submitted'])) {
  // Print any error messages. 
  if (!empty($errors)) { 
  echo '<hr /><h3>The following occurred:</h3><ul>'; 
  // Print each error. 
  foreach ($errors as $msg) { echo '<li>'. $msg . '</li>';}
  echo '</ul><h3>Your mail could not be sent due to input errors.</h3><hr />';}
   else{echo '<hr /><h3 align="center">Your mail was sent. Thank you!</h3><hr /><p>Below is the message that you sent.</p>'; 
  echo "Message from " . $firstname . " " . $lastname . " <br />Phone: ".$phone." <br />";
  
  }
  }
//End of errors array
  ?>
    
<!DOCTYPE html>
    <html>

    <head>
  <meta charset="utf-8">
  <title>Elisha Ukpong| HNG Intern Profile</title>
  <link rel="stylesheet" href="structure.css">
    </head>




    <body>
	
    <div class="box"> 
    MY PROFILE
    </div>


<div class="long">hng intern  //// <strong>ELISHA NSEOBONG UKPONG </strong>\\\\ hng intern</div>

<div class="img">
<img src="https://scontent.flos2-1.fna.fbcdn.net/v/t1.0-9/17798922_1361886410535795_378898555776697954_n.jpg?_nc_eui2=v1%3AAeG14frAcu706jl6GJYaQfve4VEv2m2G6IL5RMWjOzuShInNnCG6KPhkOh5X9HUqxYIP5SUucguE9YcFzXmY2iuWJH5Ogg9Sve4a_Pde7tJ0Sg&oh=976615d8eff180fee35f6c792a84e788&oe=5A27D97D" alt=" Elisha" style="width: 308px; height:500px;">
</div>


	<div class="shrt">
    About Me
	</div>



<div class="drk"><p> I am a Cute and Responsible Guy, Playing the drums is my weakness , i like making Responsible 
    friends, surfing the Internet, going to Church, going on Excursion, catching fun, reading, Swimming, Travelling, Praying, Loving some persons i meet that deserve it and rendering my assistance to anybody in need...Especially You!!!!!!...its more than I CAN SAY</p>
</div>
	<div class="det"> |<strong> Slack: </strong> @Drumzminister // <a href="https://github.com/Drumzminister/Drrumzminister"> <strong> Stage 1 Task </strong> </a> \\ <strong> Github:</strong> Drumzminister | 
</div>


<h2>Contact us</h2>
<p>Fill out the form below.</p>
<form action="" method="post">
<label>First Name: <br />
<input name="firstname" type="text" value="- Enter First Name -" /><br /></label>
<label>Last Name: <br />
<input name="lastname" type="text" value="- Enter Last Name -" /><br /></label>
<label>Phone Number: <br />
<input name="messager" type="text" value="- Enter message -" /><br /></label>
<input name="" type="reset" value="Reset Form" /><input name="submitted" type="submit" value="Submit" />
</form>
</body>

</html>
