<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];

    $subject = $_POST['subject'];
    $to  = 'victorchimobi@yahoo.com';
    $body = $_POST['body'];

    if($body == '' || $body == ' ') {
      $error[] = "Please feel free to leave a message";
    }


    if($subject == '' || $subject == ' ') {
      $error[] = 'A subject would be appreciated.';
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
  <title>Victorbest | Home</title>
</head>
<style>
h2{
  text-align: center;
  background-color: #795548;
  padding: 3px;
}
img{
border-radius: 50%;
margin-right: auto;
margin-left: auto;
display: block;
}

body{
  background-color: #a1887f;
}

p{
  font-size: 20px;
  text-align: center;
  font-family: ar cena;
}

.name{
  font-family: ar cena;
  font-size: 16px;
}

a{
  text-decoration: none;
  font-family: ar cena;
  font-size: 18px;
  text-align: center;
}

</style>
<body>
<div>
  <h2>HNGINTERN</h2>
</div>

<div>
  <img src="http://bit.ly/2f8sYfC">
</div>

<div>
  <p><strong>Slack Username:</strong> @Victorbest34</p>
</div>

<div>
  <p><strong>Biograpghy:</strong>  I have always loved coding and I aspire to be a backend developer pro. it gives me great pleasure knowing that i can actually make things that can be useful to other people. One of the most satisfying aspects of programming to me is seeing code I wrote deployed in a live system and used by people, especially when it improves their lives in some way</p>
</div>

<div>
  <a href="https://github.com/Victorbest34"><span class="text">goto stage 1</span></a>
</div>

 <div class="form">
        <form action="victorbest34.php" method="POST">
          <fieldset>
              <legend class="name"><strong>Email Me!</strong></legend>
              
                  <label class="name"><strong>To : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</strong>   </label><input name="to" id="to" class="dannys-input" value="victorchimobi@yahoo.com" required><br>
                  <label class="name"><strong>From : &nbsp&nbsp&nbsp&nbsp</strong></label><input name="customer_mail" id="customer_mail" class="dannys-input" placeholder="Your E-mail" required> <br>
                 <label class="name"><strong>Subject : </strong></label><input name="subject" id="subject" class="vict-input" required><br>
                  <label class="name"><strong>Body: </strong></label><br>
                <textarea id="body" name="body" cols="50" rows="5" required></textarea>
              <br>
              <button type="submit" class="submit-btn" name="thisemail"><strong>Send</strong></button>
          </fieldset>
        </form>
      </div> 
    </div>
<div>
  <h2>2017</h2>
</div>

</body>
</html>