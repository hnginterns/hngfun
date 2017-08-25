<?php
// define variables and set to empty values
 
    


      if (isset($_GET['send']))  {
          //Email information here
      $to = "bogadeji@gmail.com";
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

 //$url = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password&to=bogadeji@gmail.com";


?>
<!DOCTYPE HTML>
<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Adeboga Abigail | Profile Page</title>
<style type="text/css">
	    img{
    border-radius:50%; 
      display:block;
      
      border:1px solid #551A8B;
      margin: auto; 
     }

    .myprofile {
      justify-content: center;
      background-color: #aaa;
      height:100%;
      padding-top: 70px;
        }
    #profile{
        text-align: center;
        font-size:1.3em;
        font-family:  Serif;
        font-style: oblique;
        color:white;
        margin:auto;
        width:80%;
        padding: 20px;
       
    }
    form{
  background:#F9F9F9;
  padding:25px;
  margin:30px auto 0 auto;width:45%;align-items: center;
  justify-content: center;
}
    .contact{
      background-color: #aaa;
    text-align: center;
    align-items: center;
    margin: auto;
    display: block;
  padding: 0 0 50px 0;
  width:100%;
}
input, textarea, button{
  border:1px solid #CCC;
  background:#FFF;
  margin:auto;
  padding:6px;
  width:95%;
}
fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}
 textarea {
  height:100px;
  max-width:100%;
  resize:none;
}

button[type="submit"] {
  cursor:pointer;
  width:100%;
  border:none;
  background:#551A8B;
  color:#FFF;
  margin:0 0 5px;
  padding:10px;
  font-size:15px;
}
    hr{max-width: 20%;}
    .antispam{display: none;
      margin: 0 ;
  min-width: 100%;
  padding: 0;}
    #name{
        font-family:Arial;
    }
    h3 {
  color: #551A8B;
  display: block;
  font-size: 40px;
  font-weight: 400;
}
    body{
      margin: auto;
      width:70%;
      background-color: #eee;

      
    }
    html,body {
    height:100%;
}

</style>
</head>

<body>


	<div class = "myprofile">
	
	
	<img src="../images/bogadeji.jpg" onload="this.width/=(2);this.onload=null;"">
	<div id ="profile"><p>Beginner web developer with a desire to see the things I have learnt make sense and become something tangible. I love to learn and work on challenges even when I shed tears, get headaches and almost quit way too many times. Slack name: @bogadeji. Check out my first task <a href = "https://github.com/bogadeji/hnginterns-stage1" target ="_blank">here</a></p><hr>
	<p id="name">ADEBOGA ABIGAIL</p></div><hr>

  <div class ="contact">
    
                        <form action="bogadeji.php" method="GET">
                        <h3>Contact</h3>
    
    <fieldset>
      <input type="text" name="name" placeholder="Your Name" required="Enter your name">
     
    </fieldset>

    <fieldset>
      <input type="email" name="email" placeholder="Email Address" required="This field cannot be blank">
    </fieldset>

     <fieldset>
      <input type="text" name="subject" placeholder="Subject" required="This field cannot be blank">
    </fieldset>
  
    <fieldset>
      <textarea name ="message" rows="6" placeholder="Type your Message Here...." required="This field cannot be blank"></textarea> 
    </fieldset>

    <fieldset>
      <button name="submit" type="submit"  >Submit</button>
    </fieldset>
                            
                        </form>
                    </div>

	</div>

	
</body>
</html>
