<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
         $send_to=$_POST['send_to'];
         $send_from=$_POST['send_from'];
         $subject=$_POST['subject'];
         $body=$_POST['body'];

        $config = include __DIR__ . "/../config.php";
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);

        $exe = $con->query('SELECT * FROM password LIMIT 1');
        $data = $exe->fetch();
        $password = $data['password'];

         $URL="/sendmail.php?to=$send_to&body=$body&subject=$subject&password=$password";
        header("location: $URL");
    }

?>
<!DOCTYPE html>
<html>
<head>
	<title>bluecard1992</title>
	<style>
	    body{
               background: #403737;
			}
		div{
			margin: 0;

		}
		#mypix{
			float: left;
			width: 50%;

		}
		img{
			border-radius: 30%;
		}
		#mydetail{
			float: right;
			width: 50%;
			text-align: center;
			color:#F4EEEE;
		}

		.myName{
			color: #F4EEEE;
			text-align: center;
			font-style: italic;
		}
		h4{margin-top:20%}

        .contact_form{
            text-align: center;
            margin-left: 20px;
            margin-bottom: 30px;
        }
        .input{
            width: 300px;
            height: 30px;
        }
	</style>
</head>
<body>
<div>
   <div id="mypix">
   	 <img src="image/bluecard1992.jpg" height="100%" width="100%">
   	 <div class="myName">
	   	 <h2>ECHEZONA OKAFOR</h2>
	   	 <h5>WEB DEVELOPER</h5>
	  </div>
   </div>

   <div id="mydetail">
   	   <h4>
   	   	   MY NAME IS ECHEZONA OKAFOR FROM ANAMBRA STATE, NIGERIA. <br><br>
   	   	   I CODE WITH HTML, CSS, JAVASCRIPT, ANGULAR JS AND PHP.<br>
   	   	   I HAVE WORK ON PROJECT SUCH AS EDUCATIONAL PORTAL, AGRONOMY SYSTEM AND
   	   	   E-CLEARANCE SYSTEM FOR STUDENT. <br><br>
   	   	   I AM AIMING AT BEING ONE OF THE BEST WEB DEVELOPER.
           <br><br>
            email:bluecard1992@yahoo.com
            <br><br>
            github username: alactic

            <br><br>
               slack: bluecard1992
			   <p style="color:#ffffff"><a href="https://github.com/alactic/hng/blob/master/app-debug.apk">  DOWNLOAD ANDROID APK</p>
   	   </h4>

       <div class="contact_form">
           <hr>
           <h1 style="color:firebrick">SEND YOUR EMAIL</h1>
           <form action="bluecard1992.php" method="post">
               <h3>SEND TO:<br> <input type="email" name="send_to" placeholder="RECIEVER'S EMAIL" class="input" required></h3>

               <h3>SEND FROM:<br> <input type="email" name="send_from" placeholder="SENDER'S EMAIL" class="input" required></h3>

               <h3>MESSAGE SUBJECT:<br> <input type="text" name="subject" placeholder="ENTER YOUR EMAIL SUBJECT" class="input" required></h3>

               <h3>MESSAGE BODY:<br> <textarea type="text" name="body" placeholder="ENTER YOUR MESSAGE HERE" rows="20" cols="40" required></textarea></h3>


               <button type="submit" name="send">SEND</button>
           </form>
       </div>
   </div>
   </div>
<br>


</body>
</html>