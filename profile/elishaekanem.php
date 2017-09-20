
<<<<<<< HEAD


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         <?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'elishaekanem@yahoo.com';
    $body = $_POST['commentbox'];
    if($body == '' || $body == ' ') {
        $error[] = 'Please type something';
    }

    if($subject == '' || $subject == ' ') {
        $error[] = 'Your name and email are important to me, TYPE them in';
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
?>

<!-- after php summon -->






<!DOCTYPE html>
<html>
<head>
	<title> ELISHA EKANEM (EasyE)</title>
	<style type="text/css">
		
		body {
            padding: 50px;
        }

        div{
            padding: : 10px;
        }
        
        .shadow {
            box-shadow: 0 6px 10px 0;
            max-width: 50vw;
            margin: auto;
            text-align: center;
            background-color:orange ;
            padding-bottom: 30px;
        }
        
        img {
            margin-right: 16px;
        }

        #align_horizontally {
            display: inline-block;
        }
	</style>


<style type="text/css">
	
	.container{
		background-color: orange;
		padding: 10px;
	} 

	.put{
		width:85%;
		padding: 10px;
		margin-top: 4px;
		margin-bottom: 8px;
		border-radius: 6px;
		border: 2px solid #7c4dff;
		font-weight: bold;
		color: #42a5f5;
		resize: none;

	}
	
	
	

	.formclass{
		padding:15px;
		background-color:white;
	
	}

</head>
<body>


	<div>
		<div class="shadow">
			<img src="https://scontent.flos2-1.fna.fbcdn.net/v/t1.0-9/20374806_964326527043102_8411855216411653263_n.jpg?_nc_eui2=v1%3AAeE22-9JKowJOxa9wqY_xxUiWENQqeY2yOGQ3FIHgh5PnEZjGoHSnccOYzlBnvHM8IqlU-vx2G7xyz5BRdWRENZCTI9lcCB9HG1y7YElFI8sDQ&oh=85f3f3cefef1de58c0f28b359e05ff63&oe=5A4A2D38"  width="300px" height="400px" alt= EasyE, <br>
		</div>

		<div class="shadow">
			<h1> 	ELISHA  EKANEM (EasyE)</h1> 
			<H2>SLACK USERNAME:	elishaekanem</H2>
		</div>
		<div class="shadow">
			<p> <h2>WHO IS EasyE</h2>
	<hr>
	   <p id="biography"> Am from Ikot Ekpene Akwa Ibom State, Nigeria, currently am a student of University of Uyo in the Department of Geoinformatics and survey. I have passion for programming but i only have little knowledge about it,I have some basic knowledge about mathlab and Qbasic , i wish to become a world class web developer.
	   Am kind, simple, crazy and easy to deal with that while my name <b>E</b>lish<b>a</b> <b>s</b>unda<b>y</b> <b>E</b>kanem =<b> EasyE</b>
	   <hr>
						
						  
						  </p>
<hr>						  
		</div>

		<div class="container">
		<form action="/action_page.php" class="formclass">

    <label for="fname">Name</label>
     <input type="text" id="fname" class="put" name="Name" placeholder="your Name is..."><br>
    <label for="email">email</label>
     <input type="text" id="email" class="put" name="email" placeholder="Your email address is..."><br>
    <label for="subject">subject</label>
     <input type="text" id="subject" class="put" name="subject" placeholder="Subject of email..."><br>
    <textarea id="" classs="commentbox" placeholder="Type your message here" rows="15" cols="110"></textarea><br>
  <p>
  	
  </p>
      <input type="submit" value="Submit">

 </form>
	</div>



</body>
</html>
=======
?>
<?php
    if(isset($_POST['submit'])){
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
        header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=elishaekanem@yahoo.com");
    
    }else{
        header("location: elishaekanem.html");
    }
?>
>>>>>>> 60fcd6351455171d1c9c607fe5bb61c4be3bb793
