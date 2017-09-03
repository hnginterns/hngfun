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
.img{ 
    border: 3px solid #ddd;
    border-radius:8px;
    width : 308px;
    height: 500px;
    position:relative;
    top: 80px;
    left:70px;
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
    border-bottom-left-radius:1.2em;
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
.contact{
    background-color: #ff1d8e;
    width: 650px;
    height:100px;
    padding: 5px;
    margin: auto;
    position:relative;
    top: -100px;
    text-align: center;
    font-size:16px;
    box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
    color: white
}
</style>
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
friends, surfing the INTERNET, going to Church, going on Excursion, catching fun, reading, Swimming, TRAVELLING, Praying, Loving some persons i meet that deserve it and rendering my assistance to anybody in need...Especially You!!!!!!...its more than I CAN SAY</p>
</div>
    <div class="det"> |<strong> Slack: </strong> @Drumzminister // <a href="https://github.com/Drumzminister/Drrumzminister"> <strong> Stage 1 Task </strong> </font> </a> \\ <strong> Github:</strong> Drumzminister | 
</div>
<div class="dpp">  </div>
<div class="form">
        <form action="review.php" method="POST">
          <fieldset>
              <legend>Email Me!</legend>
              
                  <label>To :   </label><input name="to" id="to" class="dannys-input" value="ishukpong418@gmail.com" required><br>
                  <label>From : </label><input name="customer_mail" id="customer_mail" class="dannys-input" placeholder="Your E-mail" required> <br>
                 <label>Subject :</label><input name="subject" id="subject" class="dannys-input" required><br>
                  <label>Body: </label><br>
                <textarea id="body" name="body" cols="50" rows="5" required></textarea>
              <br>
              <button type="submit" class="submit-btn" name="thisemail"><strong>Send</strong></button>
          </fieldset>
        </form>
      </div> 
</body>
</html> 
