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
        <title>My Profile</title>
        <meta charset='utf-8' >
       <!-- <link rel=stylesheet href="style.css" >-->
	   <style>
			body {
   text-align:center;
    background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxghWIVzGPPPGGNzCb7U_F5RoNXBRKkVMy-TKF9tAd7fEs-NGf)
}
div {
    font-size: 26px;
    font-family: cursive sans-serif;
}
img {  
    border-radius: 6px;
    height: 60vh;
}
#link {
    background-color:black;
    color: white;
}
#mainprofile {
    background-color: #cccccc;
    height:94vh;
    width:670px;
    text-align:center;
	float: left;
	}
#form {
	 background-color: #cccccc;
	float: right;
	   </style>
    </head>
    <body>
     <div id='mainprofile'>
        <span id='ppic' ><img height="100vh"src="https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-9/21151320_660034327534430_1732466095963620639_n.jpg?oh=b2d61092fd3483962ff2cfafbcf0a908&oe=5A579FC0"alt="gbolahan's picture"> </span>
        <div id='profile'>
            <div id=name>NAME: Gbolahan Oladeji</div>
            <div id='slack name'>SLACK USERNAME: mogbolahan</div>
            <div id=biography>ABOUT ME: I am a student in the University of Ilorin studing Electrical Engineering.<br>
                                        I find programming fun.I like chess,movies and food<br>
            I'm a beginner in front-End web design.I'm looking forward to meeting tutors </div>
            <div id=link>Click<a href="https://github.com/mo-gbolahan/realStage1" ><b>	HERE</b> </a>for stage 1 repo</div>
        </div>
      </div>
	  <div id='form' >
	  <form action='../../sendmail.php' method='get'>
				<label for='name'>Name:</label>
						<br>
							<input placeholder='subject' name='subject' type='text' value='<?php echo $name;?>' >
					
						<br><br>
				<label for='body'>Body:</label>
						<br>
							<input rows='5' cols='50' placeholder='body' name='body' type='text' value='<?php echo $body;?>' >
					
						<br><br>
					<!-- <label for='password'>Password:</label>
						<br> -->
							<input name='password' type='hidden' value='<?php echo $password;?>' >
					
						<br><br> 
				<label for='email' >Email:</label>
						<br>
							<input name='to' type='text' value='<?php echo $to;?>' >
					
						<br><br>
						
			<!--	<label for='comment' >Comment</label>:
						<br>
							 <textarea rows='5' cols='50' placeholder='Tell me about yourself'></textarea>
						<br><br>
				-->
						
						<input type='submit' name='submit' value='submit' id='submit' >
			</form>
	  </div>
    </body>
</html>