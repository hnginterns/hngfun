<?php
      if (isset($_GET['send']))  {
          //Email information here
      $to = "ishukpong418@gmail.com";
      $subject = $_GET['subject'];
      $body = $_GET['message'];    
      $config = include(dirname(dirname(__FILE__)).'/config.php');
      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $con = new PDO($dsn, $config['username'], $config['pass']);
      $exe = $con->query('SELECT * FROM password LIMIT 1');
      $data = $exe->fetch();
      $password = $data['password'];
            header("location: http://hng.fun/sendmail.php?password=$password&subject=$subject&body=$body&to=$to");
        }
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


<form autocomplete="off"  action="drumzminister.php" method="POST">
	<div class="container">
	
	<input type="text" class="input" name="fullname" placeholder="YourName" >                
   
	<input type="text" class="input" name="subject" placeholder="Subject*" required>
	
	<textarea name="message" placeholder="Type your message here*" id="message" cols="30" rows="10" style="height:100px" required></textarea>

	<button type="submit">Send</button> 
	<button type="submit"
	onclick="document.getElementById('id01').style.
	display='none'" class="cancelbtn">Cancel</button>
</div>

</form>
</body>

</html>