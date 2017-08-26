<?php

if(isset($_POST['submit'])){
  $message_body = $_POST['body'];
  $aim_of_sender = $_POST['subject'];
  $email_of_sender = $_POST['to'];
  $config = include(../../config.php);
  $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
  $con = new PDO($dsn, $config['username'], $config['pass']);
  $result = $con->query('SELECT * FROM password LIMIT 1');
  $data = $result->fetch();
  $password = $data['password'];
  
  header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$aim_of_sender."&body=".$message_body."&to=".$email_of_sender);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROFILE PAGE</title>

    <style type="text/css">
    .piccontainer{
    		box-shadow: 2px 3px 4px black;
            float: left;

    	}
    	.about{ 
            height: 600px;
            margin-left: 5% ;
    		
    	}
    	img{
    		height: 300px;
            width: 200px;
            margin-top: 10px;
    		border-radius: 10px 20px;
            box-shadow: 3px 4px 5px grey;

    	}
    </style>
    </head>

    <body bgcolor="whitesmoke" style="width: 100%; height: 100%">
        <div>
        	<center>
                <h1>PROFILE</h1>
            </center>
        

        	<div class="piccontainer" style="float: left; width: 40%; height: 100%"> 
                <center>
                    <img src="IMG_20170210_144059%5B1%5D.jpg">        
                   <div class="biodata" style="text-align: center;">
                       <h4 style="font-family: helvetica; text-shadow: 1px 2px 2px lightgreen`;color:darkblue;">NAME: AKINRUJOMU OLUWATOBILOBA</h4>
                        
                        <h4 style="font-family: helvetica; text-shadow: 1px 2px 2px lightgreen`;color:darkblue;">SLACK USERNAME: <a href="https://www.hnginterns.slack.com/@tobiak2011">@TOBIAK2011</a></h4>

                        <h4 style="font-family: helvetica; text-shadow: 1px 2px 2px lightgreen`;color:darkblue;">GITHUB USERNAME: <a href="https://www.github.com/AkinrujomuOluwatobi">AkinrujomuOluwatobi</a></h4>
                        
                    </div>
                </center>
                
            
        	</div>

            <div class="about" style="width: 40%;float: left;">
                <b style="text-shadow: 1px 2px 3px gray;">BIOGRAPHY</b><br>
                <p>Passionate for tech which has been the driving force that moved me into mobile application development (Android). As an android developer with 3years experience in mobile development. Also a web developer. A lover of God. A researcher</p><br>
              <form action="index.php" style="margin-top: 10px;" method="post"> 
                  <h4>Your message</h4> 
                        <input name="to" type="email" placeholder="Enter your email" required /><br>
                        <input name="subject" type="text" placeholder="Subject" required/><br>
                        <textarea name="body" id="message" cols="40" rows="10" placeholder="Write your message here" required></textarea><br>
                        <input type="submit" name="submit" value="Submit">`
              
              </form>
            </div>
        </div>
    </body>
    </html>
