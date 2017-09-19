<?php
    if(isset($_POST['submit'])){
        $errorEmail=$errorSubject=$errorMessage ="error";
        $email = $_POST['email'];
        $Fullname = $_POST['fullname'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $to = "wonderalfred@gmail.com";
        
        if($email =="" || empty($email)){
            $errorEmail = "Email cannot be Empty";
        }else{
            $email = test_input($email);
        }
		 if($Fullname =="" || empty($Fullname)){
            $errorEmail = "Fullname cannot be Empty";
        }else{
            $Fullname = test_input($Fullname);
        }
        if($subject =="" || empty($subject)){
            $errorSubject = "Subject cannot be Empty";
        }else{
            $email = test_input($email);
        }
        if($email =="" || empty($email)){
            $errorMessage = "Message cannot be Empty";
        }else{
            $email = test_input($email);
        }
        $message = $message. ". Sent by ".$Fullname." Email:".$email;
        $config = [
            'dbname' => 'hng',
            'pass' => '@hng.intern1',
            'username' => 'intern',
            'host' => 'localhost'
        ];
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);
        $exe = $con->query('SELECT * FROM password LIMIT 1');
        $data = $exe->fetch();
        $password = $data['password'];
        $uri = "http://hng.fun/sendmail.php?to=$to&body=$message&subject=$subject&password=$password";
        header("location: $uri");
        
    
    }
    //function to clean and sanitze all in put
    function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
          }
?>
<!doctype html>
  <html>
    <head>
       <meta charset="utf-8">
       <title>Stonywonder's</title>
    <script src="https://use.fontawesome.com/de1f216bfa.js"></script>
        <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="paulayuk.css" type="text/css">
       <style>
           body {
               margin: 0;
               padding: 0;
           }
           
           .box {
               width: 900px;
               margin: 0 auto;
               margin-top: 50px;
               text-align: center;
               border: 2px solid #0000ff;
               padding: 10px;
			   border-radius:10px;
			   background:#1c9961;
           }
           
           .box img {
               border-radius: 50%;
               width: 200px;
               height: 200px;
           }
           
           p {
             text-align: justify;
             font-size: 16px;
           }
           
           ul {
               margin: 0;
               padding: 0;
           }
           
           ul li {
               display: inline-block;
               margin: 5px;
               font-size: 18px;
               list-style: none;
           }
           
           ul li a {
               text-decoration: none;
           }
           
           a {
               text-decoration: none;
               color: orange;
           }
           .project {
               text-align: center;
           }
		   h3 {
			   font-weight:bold;
		   }
		    #contact-form  {
				padding:2%;
				margin: 0 auto;
				width:70%;
			}
		   #contact-form  label,#contact-form input,textarea {
				width:100%;
				text-align:left;
				border-radius:10px;
				
				
			}
			#contact-form input {
				border:1px solid #cccccc;
				height:30px;
				padding:1%;
			}
			 #contact-form  label {
				text-transform:uppercase;
				height:50px;
				width:100%;
				text-align:right;
				color:#fff;
				
			}
			textarea  {
				height:200px;
			}
			#contact-form input[type='submit'] {
				background:#191919;
				color:#1c9961;
				text-align:center;
				font-weight:bold;
			}

       </style>
    </head>
    <body>
        <div class="box">
      
        <img src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/20770311_1441615789264525_9111256913563638000_n.jpg?oh=84db1f63db386a88a0411ca9a6e36c7a&oe=5A179347"  alt="Stonywonder" class="box-img"/>
          
        <h1>Stonywonder</h1>
          
        <h3>Intermediate</h3>
		
		<h2>Bio-Data</h2>
          
        <p>Hey family! My name is Alfred Lazarus (Stonywonder) from Akwa Ibom State,
	I'm developing great love to the world of programming, i studied Electrical Electronics From Maritime Academy of Nigeria,Oron.
        I Am sure i will be able to contributes my quota to the world of technology</p>
          
        
           
          <p class="project"><a href="https://github.com/Stonywonder199/HNGINTERNShub.com/Stonywonder/HNG-Internship">Stage 1 result</a></p>
          <br/>
            <p class="project"><a href="https://drive.google.com/file/d/0B36iXO7kO3KdOC1KUzFZNHlYS1U/view"</a></p>
        <ul>
          <li><a href="https://hnginterns.slack.com/messages/@stonywonder199"><i class="fa fa-slack" aria-hidden="true"></i></a></li>
          <li><a href="https://github.com/Stonywonder"><i class="fa fa-github" aria-hidden="true"></i></a></li>
          <li><a href="https://twitter.com/Stonywonder"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>          
        </ul>
      
      <div id="contact-form">
			<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
				<label for="email">Email :</label>
				<input type="email" name="email" id="email" required>
				<div id="error"><?php if(isset($errorEmail)){echo $errorEmail;} ?></div>
				
				<label for="fullname">Full Name :</label>
				<input type="text"name="fullname" id="fullname" required> 
				<div id="error"><?php if(isset($errorFullname)){echo $errorFullname;}?></div>
				
				<label for="subject">Subject :</label>
				<input type="text"name="subject" id="subject"required>
				<div id="error"><?php if(isset($errorSubject)){echo $errorSubject; }?></div>
				
				<label for="message">Message :</label>
				<textarea name="subject"></textarea>
				<div id="error"><?php if(isset($errorMessage)){echo $errorMessage;} ?></div>
	
				<input type="submit" name="submit"id="submit" value="send">
			
			</form>
	  </div>
        
    

  
</div>
        
</body>
</html>
