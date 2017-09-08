<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];

    $subject = $_POST['subject'];
    $to  = 'ishukpong418@gmail.com';
    $body = $_POST['body'];

    if($body == '' || $body == ' ') {
      $error[] = "Don't be shy. Write me a message";
    }


    if($subject == '' || $subject == ' ') {
      $error[] = 'A subject would be awesome.';
    }

    if(empty($error)) {

      $config = include __DIR__ . "/../config.php";
      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $con = new PDO($dsn, $config['username'], $config['pass']);

      $exe = $con->query('SELECT * FROM password LIMIT 1');
      $data = $exe->fetch();
      $password = $data['password'];

      $url = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";

      header("location: $url");

    }
  }
 ?>
  <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Elisha Ukpong| HNG Intern Profile</title>
<style>
	body {
    background-color: #e55ea2
}
.box {
    background-color: #ffd2e8;
    color: #A91961;
    font-weight: bolder;
    padding: 30px;
    width: 600px;
    height:80px;
    margin: auto;
    border-top-right-radius:1.5em;
    border-top-left-radius:1.5em;
    text-align: center;
    font-size:60px;
    box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14),  0 8px 10px -5px rgba(0, 0, 0, 0.2);
    
}
.long {
    background-color: #CD8DAD;
    
    width: 660px;
    height:25px;
    padding-top: 5px;
    margin: auto;
    position:relative;
    top: 45px;
    left:-1px;
    text-align: center;
    font-size:15px;
    border-bottom-right-radius:1.2em;
    border-bottom-left-radius:1.2em;
    box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
    color: #60163B
}
.imrg{ 
    border: 3px solid #ddd;
    border-radius:8px;
    width : 308px;
    height: 500px;
    position:relative;
    top: 80px;
    left:170px;
}
.shrt {
    background-color: #ffd2e8;
    padding-top: 10px;
    color: #993f6c; 
    font-weight: bolder;
    position: relative;
    top: -360px;
    left:160px;
    width: 200px;
    height:50px;
    margin: auto;
    border-top-right-radius:1em;
    border-top-left-radius:1em;
    text-align: center;
    font-size:30px;
    box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}
.drk {
    background-color: #7f345a;
    
    width: 200px;
    height:300px;
    padding: 5px;
    margin: auto;
    position:relative;
    top: -350px;
    left:160px;
    text-align: justify;
    font-size:16px;
    border-bottom-right-radius:1.2em;
    :1.2em;
    box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
    color: #ffa5d2
}
.det{
    background-color: #ff1d8e;
    width: 650px;
    height:20px;
    padding: 5px;
    margin: auto;
    position:relative;
    top: -900px;
    text-align: center;
    font-size:16px;
    box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
    color: white
}
.form{
    background-color: #ff1d8e;
    width: 650px;
    height:3#20px;
    padding: 10px;
    margin: auto;
    position:relative;
    top: -250px;
    border-bottom-right-radius: 2em;
    border-top-left-radius: 2em;
    text-align: center;
    box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
    color:black
}
h2{
    color: white;
}
h3{
    color: white;
}
.forminside{
    background-color: white;
    width: 400px;
    height:30px;
    padding: 10px;
    margin: auto;
    position:relative;
    top: -10px;
    border-top-right-radius: 2em;
    border-top-left-radius: 2em;
    text-align: center;
    box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
    color:black
}
.forminside2{
    background-color: white;
    width: 175px;
    height:30px;
    padding: 10px;
    position:relative;
    left:100px;
    text-align: center;
    box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
    color:black
}
.forminside3{
    background-color: white;
    width: 175px;
    height:30px;
    padding: 10px;
    position:relative;
    left:325px;
    top: -50px;
    text-align: center;
    box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
    color:black
}
.forminside4{
    background-color: white;
    width: 400px;
    height:120px;
    padding: 10px;
    margin: auto;
    position:relative;
    top: -40px;
    border-bottom-right-radius: 2em;
    border-bottom-left-radius: 2em;
    text-align: center;
    box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
    color:black
}
.button {
    display: inline-block;
    border-radius: 4px;
    background-color: deepskyblue;
    border: none;
    color: black;
    text-align: center;
    font-size: 28px;
    padding: 20px;
    width: 200px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
    box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
    
  }
  
  .button span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
  }
  
  .button span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
  }
  
  .button:hover span {
    padding-right: 25px;
  }
  
  .button:hover span:after {
    opacity: 1;
    right: 0;
  }
</style>
</head>

<body>
<div class="box"> 
MY PROFILE
</div>
<div class="long">hng intern  //// <strong>ELISHA NSEOBONG UKPONG </strong>\\\\ hng intern</div>
<div class="imrg">
<img src="https://scontent.flos2-1.fna.fbcdn.net/v/t1.0-9/17798922_1361886410535795_378898555776697954_n.jpg?_nc_eui2=v1%3AAeG14frAcu706jl6GJYaQfve4VEv2m2G6IL5RMWjOzuShInNnCG6KPhkOh5X9HUqxYIP5SUucguE9YcFzXmY2iuWJH5Ogg9Sve4a_Pde7tJ0Sg&oh=976615d8eff180fee35f6c792a84e788&oe=5A27D97D" alt=" Elisha" style="width: 308px; height:500px;">
</div>
    <div class="shrt">
About Me
    </div>
<div class="drk"><p> I am a Cute and Responsible Guy, Playing the drums is my weakness , i like making Responsible 
friends, surfing the INTERNET, going to Church, going on Excursion, catching fun, reading, Swimming, TRAVELLING, Praying, Loving some persons i meet that deserve it and rendering my assistance to anybody in need...Especially You!!!!!!...its more than I CAN SAY</p>
</div>
    <div class="det"> |<strong> Slack: </strong> @Drumzminister // <a href="https://github.com/Drumzminister/Drrumzminister"> <strong> Stage 1 Task </strong> </font> </a> \\ <strong> Github:</strong> Drumzminister | 
</div>

<div class="form">
        <form action="review.php" method="POST">
          <fieldset>
              <legend> <h2> Email Me! </h2></legend>
              
                  
                  <div class="forminside">
                      <input name="to" id="to" class="dannys-input" value="ishukpong418@gmail.com" placeholder="FILL THE FORM BELOW"><br>
                  </div>
                  <div class="forminside2">
                      <input name="customer_mail" id="customer_mail" class="dannys-input" placeholder="Your E-mail" required> <br>
                  </div>
                  <div class="forminside3">
                      <input name="subject" id="subject" class="dannys-input" placeholder="Subject" required><br>
                  </div>
                  <div class="forminside4">
                <textarea id="body" name="body" cols="45" rows="5" required></textarea> <br>
                  </div>
                  <div class="bot">
              <button type="submit" class="button" name="thisemail" style="vertical-align:middle"><span>Send</span></button>
                  </div>
            </fieldset>
        </form>
      </div> 
</body>
</html> 