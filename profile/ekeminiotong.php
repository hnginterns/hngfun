<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = array();
    $subject = $_POST['subject'];
    $to  = 'ekemini.otong@gmail.com';
    $body = $_POST['body'];
    if($body == '') {
        $error[] = 'You have to TYPE in something to tell me something';
    }

    if($subject == '' || $subject == ' ') {
        $error[] = 'Your name and email are very important, TYPE them in';
    }
    if(empty($error)) {
        $config = include('../../config.php');
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
 <html>
   <head>
   <title> MY PROFILE </title>
     
   </head>


  <body>

       <h1> NEW WEB DEVELOPER IN TOWN </h1>

       <img class="i" src="https://scontent.flos2-1.fna.fbcdn.net/v/t1.0-0/p480x480/16114949_1392644344142722_7221926781196373015_n.jpg?_nc_eui2=v1%3AAeGmUEX_ZYM60RPihqSegG5B1279Fia283LRDC2F1cXXj_7WgNbAC4Jt0sgYRJt-FdMIkD6qqz_Aot2mj7lTztBGoN9URYJucMIyODervBg41g&oh=9433b9665bea21787da3f4021c046747&oe=5A5F6D47" width:"300px" height"300px" alt: "Ekemini Otong photo" >

       <p class="dee">slack username: @ekeminiotong | github username: @ekemini otong</p>

       <div class="box">
      
       <h2> Who Is Ekemini Otong? </h2>
       	<p>I am an indigene of Ibiono Ibom in Akwa Ibom State </p>

  		<p> I have a good background knowlegde of Networking,
  		    I am also an amateur in HTML & CSS and also on Java.
  			Currently an intern at  <strong>Hotels.ng</strong> 
  		</p>

  		
  	   <p>
  	    		Ekemini otong is an ambitious young man who love to acquire more knowlege
  	    		and skills couple with making excellent decision.
  	    		</p>

  	      <p>
  	      		Am currently doing my final year project on e-marketing in Real Estate Management in University of Uyo,
  	      		which is the more reason i love to develop my knowlege in programming. I am fun loving, a lover of God, and a lover of good building designs.
  	      </p>
  	  </div>

  	       <div class="form_container">
        <form action="#" method="POST">


          <h2 style="text-align:center;" "margin-right:500px;">Contact Me</h2>
          Name<br>
          <input type="text" name="name" size="40" placeholder="e.g surname, initial middlename" >

         <br> Subject

          <br>
          <input type="text" name="subject" size="40" height="20"><br><br> 

           Message

          <br>
          <textarea rows="5" cols="40" name="body" placeholder="Write your message/comment here..."></textarea><br><br>

          <button type="submit" name="submit">Send</button>

        </form>
      </div>

  	     <div class="footer">
      MADE BY EKEMINI EDET OTONG. <br> All rights reserved. 2017
    </div>
  </body>

  <style type="text/css">


	
body{

    background-color: purple ;

    margin: auto;

    text-align: center;

    padding: 30px;

}


     
h1{
	font-size: 30px;
	color: blue;
	font-family: arial;
	text-align: relative;
	width: 480px;
	height: 40px;
	margin: auto;
	background-color: white;
	padding: 5px;
	margin-bottom: 10px;
}
.dee {
	font-size: 13px;
	color: blue;
	font-family: arial;
	text-align: relative;
	width: 470px;
	height: 20px;
	margin: auto;
	background-color: white;
	padding: 10px;
	margin-top: 7px;
	font-weight: bold;
}

.box{
	background-color: #81B1ff;
	margin: auto;
	padding: 7px 15px;
	width: 462px;
	color: solid black;
	font-family: fantasy;
	border-bottom: 12px solid white;
    border-top: 12px solid black;
}
.footer{
	color: white;
	margin-top: 10px;
	font-weight: bold;
	margin-left: 7 00px;
}
.form_container{
	color: blue;
	margin: auto;
	background-color: pink;
	width: 460px;
	margin-right: 1200px;
	height: 370px;
	margin-top: 15px;
}

  </style>
</html>  	     
