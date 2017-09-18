<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'nedyudombat@gmail.com';
    $body = $_POST['commentbox'];
    if($body == '' || $body == ' ') {
        $error[] = 'You have to TYPE in something to tell me something';
    }

    if($subject == '' || $subject == ' ') {
        $error[] = 'Your name and email are very important, TYPE them in';
    }
    if(empty($error)) {
        $config = include('../config.php');
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

<!-- after php summon-->

<!DOCTYPE html>
<html>

  <head>
    <title>MY PROFILE</title>
    <link rel="stylesheet" type="text/css" href="nedyudombat.css">
  </head>
 
  <body>
  <div align="center">
  	<h1><strong>My Profile</strong></h1>
  	<img src= "https://github.com/NedyUdombat/Nedy/blob/master/my%20d.p.jpg?raw=true width="280" height="280" />
  	<h2><strong> EDIDIONG</strong> <br> <strong>UDO UDOMBAT</strong></h2>
  	<h3> <strong>Biography</strong> <br>
  	   	Amateur Web Designer and Amateur Android Programmer <br>
  	<hr width="85%" align = "center" colour="blue">
  	I am an indigene of Ikot Abasi in Akwa Ibom State, 20 years of age and a 400 level student of Computer science in the University of Uyo.<br>
  	I have a good background knowlegde of MATLAB programming language, I am also an amateur in HTML& CSS and also on Java.<br>
  	Currently an intern at <strong>Start Innovation Hub</strong> and also an intern <strong>Hotels.ng</strong> 
  	<hr width="81%" align= "center" colour="blue">
  	</h3>
    </div>
    <div align="center">
      <a href="https://github.com/NedyUdombat/Nedy" id="stageone"><em><strong>Stage one</strong></em><br>
      <a href="https://drive.google.com/open?id=0B3D_p5iFO95_eE0zSGdZSlhGUzg" id="DownloadContactAppHere"><em><strong>Download Contact App Here</strong></em>
      <h4><strong>Handlers</strong></h4>
      <a href="https://hnginterns.slack.com/team/nedyudombat"></a><img src="https://github.com/NedyUdombat/Nedy/blob/master/slack.jpg?raw=true" width="25" height="25"> @nedyudombat
      <img src="https://github.com/NedyUdombat/Nedy/blob/master/github.jpg?raw=true" width="25" height="25"> @nedyudombat
      <a href="https://web.facebook.com/mento.udombat.1"></a><img src="https://github.com/NedyUdombat/Nedy/blob/master/facebook.jpg?raw=true" width="25" height="25">>@mentoudombat<br>
      <a href="https://twitter.com/Mentoudombat?lang=en"></a><img src="https://github.com/NedyUdombat/Nedy/blob/master/twitter.jpg?raw=true" width="25" height="25">@nedy_kvng
      <img src="https://github.com/NedyUdombat/Nedy/blob/master/instagram.jpg?raw=true" width="25" height="25"> @nedy_kvng
      <img src="https://github.com/NedyUdombat/Nedy/blob/master/gmail.png?raw=true" width="25" height="25"> <em><strong>nedyudombat@gmail.com</strong></em>
    </div>
      <br>
    <div class="r" align="center">
               Contact Form
                <form action="#" method="POST">
          
                  
                        <div class="space">
                            <input type="text" id="name" name="name" required="required" placeholder="Your Name" /> </br>
                        

                            <input type="email" id="email" name="email" required="required" placeholder="Your Email" /></br>
                       

                    
                            <input type="text" id="subject" name="subject" required="required" placeholder="Subject" /></br>
                    

                        
                            <textarea name="commentbox" placeholder="Tell me anything..." cols="70" rows="20"></textarea></br>
                 
                       
                            <input id="send" type="submit" value="Send mail" />
                       
                           </div>
    <footer id="footer">
      MADE BY EDIDIONG UDO UDOMBAT. <br> All rights reserved. 2017
    </footer>
  </div>
  </body>
</html>