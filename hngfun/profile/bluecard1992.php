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
			border-radius: 10px;
		}
		#mydetail{
			float: right;
			width: 50%;
			text-align: center;
			color:#ffffff;
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
		h3{
			color:#fff
		}
	</style>
</head>
<body>
<div>
   <div id="mypix">
   	 <img src="https://scontent.flos7-1.fna.fbcdn.net/v/t1.0-9/17155318_1210783419019658_6822334054252122257_n.jpg?oh=8a95c6fdf4d3934651732a19d955c97e&oe=5A5AB1A2" height="60%" width="70%">
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
			   <h5><a href="https://github.com/alactic/hng/blob/master/hng-app.apk" style="color:red">  DOWNLOAD ANDROID APK</a></h5>
   	   </h4>

       <div class="contact_form">
           <hr>
           <h1>SEND YOUR EMAIL</h1>
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