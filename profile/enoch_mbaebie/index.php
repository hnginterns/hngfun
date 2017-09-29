<!doctype html>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'chukwuemekambaebie@gmail.com';
    $body = $_POST['message'];
    if($body == '' || $body == ' ') {
        $error[] = 'Message cannot be empty.';
    }

    if($subject == '' || $subject == ' ') {
        $error[] = 'Subject cannot be empty.';
    }
    if(empty($error)) {
        $config = include(dirname(dirname(dirname(__FILE__))).'/config.php');
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
<html lang="en">
<head>
	<meta charset="UTF-8">
   <meta name="viewport" content="wclassth=device-wclassth, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel='stylesheet' href="style.css" />
   <title>profile card</title>
</head>

<body>
	   <div class="container">
      <div class="header">
        <h1><b>Enoch Mbaebie</b></h1>
      </div>
      <div class="content">
      <div class="photo">
          <center><img src="https://i.imgur.com/nqu8ZYm.jpg" alt="image"/></center>
      </div> 
      <div class= "text"><center>
        <p>I'm a software engineer in training based in Lagos,passionate about technologies,<br>a contributor to the open source communities and mentee to Mark Essien.</p></center>
      </div>
      <div class="main">               
        <center>
          <a class="Slack" href="https://hnginterns.slack.com/team/U6UAY9VMG"><i class="fa fa-slack icons fa-lg"></i></a>
           
          <a href="https://github.com/EnochMbaebie/"><i class="fa fa-github icons fa-lg"></i></a>

          <figure><p><a href="http://hng.fun/profile/enoch_mbaebie/index.html"><img src="https://assets-cdn.github.com/images/modules/logos_page/GitHub-Mark.png" width="100px"><figcaption>Link to my Stage 1 Project</figcaption></a><p></figure>

          <figure><p><a href="https://goo.gl/iD8DKQ"><img src="https://developer.android.com/wear/images/features/apps.png" width="100px"><figcaption>Link to my APP Project</figcaption></a><p></figure>

        </center>
			</div>   
			<section class="grid-4">
                <center><h2>Contact</h2></center>
                 <form class="cd-form floating-labels" method="POST">
              		<fieldset>
              			<div class="icon">
              				<center><label class="cd-label" for="cd-name">Subject</label>
                                <input class="user" type="text" name="subject" id="cd-name" required></center>
              		  </div>

              			<div class="icon">
              				<center><label class="cd-label" for="cd-textarea">Message</label>
                                <textarea class="message" name="message" id="cd-textarea" required></textarea></center>
              			</div>

              			<div>
                           <center> <input type="submit" value="Send Message"></center>
              		  </div>
              		</fieldset>
              	</form>
                </section>
		</div>
				
			</section>
		</div>
		
		</center>
    
   


		

	</div><!-- End Container -->
	
</body>
    <style>
  body{
    background-color: #BFC0C0;
    color: black;
    height: 750px;
    margin: 2px;
    padding: 2px;
    
  }
.container{
    text-align: center;
    margin: 0 auto;
    width:400px;
    align-self: center;
    height:100px;
    background-color: #999;
  }
.header{
    margin:0px 0px 0px 0px;
    text-align:center;
    color:#e3e3e3;
    padding:0px;
  }
.photo img{
    width:100%;
    height:300px;
    text-align:center;
    margin:0px 0px 0px 0px;
    padding: 0px;
  }
.text{
    color:#239;
    font:none 15px sans-serif;
    margin:10px;
    padding:00px;
  }
.main{
    text-align: left;
    font:none 12px sans-serif;
    margin:00px;
    padding:00px;
}
.contact-headline {
  color: white;
}

    </style>
</html>
