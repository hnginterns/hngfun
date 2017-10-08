                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         <?p

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'paidiosat@gmail.com';
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
<meta name="description"  content="Okpongette Idio Profile">
	<title>Okpongette Idio Profile</title>


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
 <img src="https://scontent.flos5-1.fna.fbcdn.net/v/t1.0-9/13494904_635738319917051_5726601604228165339_n.jpg?oh=72be43a1384ac13e70da662083203b64&oe=5A55DB18" width="300px" height="400px" >
 </div>

 <div>
<H1>Name: <span class="bo">Okpongette Idio</span></H1>
</div>
<div>
<p><strong>BIO:</strong></br>My name is okpongette sunday idio. I am a native of Uruk Ata Ikot Otok, Etim Ekpo Local Government Area, Akwa Ibom State, Nigeria. I attended Qua Ibeo church Nursery/primary School Uruk  Ata Ikot Otok, Etim Ekpo Local Government Area, Akwa Ibom State, Holy family college, Oku Abak, Abak Local Government Area, Akwa Ibom State. Presently, I am studying computer engineering in Sure Foundation Polytechnic, Ikot Akai, Ukanafun Local Government Area, Akwa Ibom State. I'm learning wed design and software development.  </p>
</H2>
</div>
<div>
<a href=http://www.facebook.com/okidio> <strong>facebook:<strong/> ok idio</a>
<a href=http://www.slack.com/okpongetteidio> <stronng>slack:<strong/> okpongette idio</a>
<a href=http://www.github.com/paidio> <strong<github:<strong/> paidio</a>
<a href=mailto:http://www.gmail.com> <strong>email:<strong/> paidiosat@gmail.com</a>

</div>
<p>
</p>
<p>
	
</p>

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