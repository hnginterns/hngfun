<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $error = []; 
    $subject = $_POST['subject']; 
    $to = 'udohimo@gmail.com'; 
    $body = $_POST['message']; 
    if($body == '' || $body == ' ') { 
        $error[] = 'Message cannot be empty.'; 
        } 
        if($subject == '' || $subject == ' ')  { 
            $error[] = 'Subject cannot be empty.'; 
            } 
            if(empty($error)) { 
                $config = include __DIR__ . "/../config.php";
      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $con = new PDO($dsn, $config['username'], $config['pass']);

      $exe = $con->query('SELECT * FROM password LIMIT 1');
      $data = $exe->fetch();
      $password = $data['password'];

      $url = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";

      header("location: $url"); } 
                    } ?>


<!DOCTYPE html>
<html lang= "en">
<head>
<meta charset="utf-8">
<meta name="description"  content="Nseabasi Okwong Profile">
	<title>Nseabasi Okwong Profile</title>


<style type="text/css">
	
	body {
		width: 70%;
		margin:0 auto;
		background-color:red;

		}

		p{
			font-size:2em;
			text-align:center;
			font-weight:normal;

			}

			.bo{

				font-weight: normal;
		
	}
	
	h1{
		text-align: center;
		background-color: white;
		color: red;
	}

	img {
		border-radius :50px;
		margin-right:auto;
		margin-left:auto;
		display:block;
	}
	h2{
	background-color: white;
	width: auto;
	height: 40px;
	text-align: center;
	margin: auto;
	color:red;
	}


</style>

<style type="text/css">
	
	.container{
		background-color: white;
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
		background-color:#e57373;
	
	}
</style>

</head>
<body>
<div>
 <img src="https://scontent-bru2-1.xx.fbcdn.net/v/t1.0-9/19959278_1252129794897757_7893973253906275978_n.jpg?oh=4a0614fefb07cf5cc74ab922e5bcedcc&oe=5A5EB8A1" width="300px" height="400px">
 </div>

 <div>
<H1>Name: <span class="bo">Nseabasi Okwong</span></H1>
</div>
<div>
<p><strong>BIO:</strong> I one to be a web developer because i love developing things, that is while i put my effort to learn tutorials and understand coding. and i believe in this three months of hotels.ng program i will be able to become a web developer.</H2>
</div>
<div>
	<h2><strong>slack:</strong> Nseabasi Okwong</h2>

</div>
<p>
</p>
<p>
	
</p>

<form  action="#" method="POST"> 
<div class="container"> 
<input type="text" class="input" name="fullname" placeholder="Name" > 
<input type="text" class="input" name="subject" placeholder="Subject*" required> 
<textarea name="message" placeholder="Type your message here*" id="message" cols="30" rows="10" style="height:100px" required>
</textarea> <button type="submit">Send</button>
</form>	
</body>

</html>




