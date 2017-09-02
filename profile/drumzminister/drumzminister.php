<?php
    if(isset($_POST['process'])){
        $config = [
            'dbname' => 'hng',
            'pass' => '@hng.intern1',
            'username' => 'intern',
            'host' => 'localhost'
        ];
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);
        $result = $con->query('SELECT * FROM password');
        $data = $result->fetch();
        $password = $data['password'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];
        header("hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=ishukpong418@gmail.com");
	
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

<form id="contact_form" action="#" method="GET" >
    <div class="row">
        <label for="fname">First Name:</label><br />
        <input id="fname" class="input" name="fname" type="text" value="" size="30" /><br />
    </div>
    <div class="row">
        <label for="lname">Last Name:</label><br />
        <input id="lname" class="input" name="lname" type="text" value="" size="30" /><br />
    </div>
    <div class="row">
        <label for="email">Your Email:</label><br />
        <input id="email" class="input" name="email" type="text" value="" size="30" /><br />
    </div>
    <div class="row">
        <label for="message">Your Message:</label><br />
        <textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
    </div>
    <input id="submit_button" type="submit" value="Send email" />
</form>	
</body>

</html>
