                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         <?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'emmanuelantiamah@gmail.com';
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
<html lang= "en">
<head>
<meta charset="utf-8">
<meta name="description"  content="Emmanuel Antiamah Profile">
	<title>Emmanuel Antiamah Profile</title>


<style type="text/css">
	
	body {
		width: 70%;
		margin:0 auto;
		background-color: #87CEEB;
	}
	p {
		font-size:2em;
		text-align: center;
		font-weight: normal;
	}

	
	.bo{
		font-weight: normal;
		
	}
	
	h1{
		text-align: center;
		background-color: #2196f3
	}

	img {
		border-radius :50px;
		margin-right:auto;
		margin-left:auto;
		display:block;
	}
	h2{
	background-color: #29b6f6;
	width: auto;
	height: 40px;
	text-align: center;
	margin: auto;
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
		background-color:#448aff;
	
	}
</style>

</head>
<body>
<div>
 <img src="https://scontent.flos2-1.fna.fbcdn.net/v/t1.0-9/11828588_1609727202615845_5896177482869922432_n.jpg?_nc_eui2=v1%3AAeHhCOfVrXd-SIKpKziAEnQUyyjbtvpAiO3zugUPk4gwKcbq7vRw5KseAjDLLn9IXUpUO-TXo-3klQu-4wRv28CS_kNW76OvMCCjhti0-kpjrQ&oh=fab242a18e79f25a72a766e6cf5eabc0&oe=5A5AE600">
 </div>

 <div>
<H1>Name: <span class="bo">Emmanuel Antiamah</span></H1>
</div>
<div>
<p><strong>BIO:</strong>I am a student web developer. I have two months experience in web development with 3 weeks professional experience inclusive. I love creating new things, that is why i love coding. I hope that after my internship with <a href= "http://www.hotels.ng">Hotels.ng</a> , I will get to be a better programmer.</H2>
</div>
<div>
	<h2><strong>slack:</strong> yungfabulous</h2>

</div>
<p>
</p>
<p>
	
</p>

<div class="container">
 <form action="#" method="POST" class="formclass">

    <label for="fname">Name</label>
     <input type="text" id="fname" class="put" name="Name" placeholder="your Name is..."><br>
    <label for="email">email</label>
     <input type="text" id="email" class="put" name="email" placeholder="Your email address is..."><br>
    <label for="subject">subject</label>
     <input type="text" id="subject" class="put" name="subject" placeholder="Subject of email..."><br>
    <textarea id="comment" name="commentbox" class="commentbox" placeholder="Type your message here" rows="15" cols="110"></textarea><br>
  <p>
  	
  </p>
      <input type="submit" value="Submit">

 </form>
</div>


</body>
</html>