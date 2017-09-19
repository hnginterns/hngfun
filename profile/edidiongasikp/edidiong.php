<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'edidiongasipo@gmail.com';
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
<html>
    <head>
<title>Edidiong Asikpo</title>

<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/rt.css">
      	<link rel="stylesheet" href="css/st.css">
        
</head>
<style>
        
h1{
  text-align: center;
}

p{
  font-family: Georgia, 'Times New Roman', Times, serif;
  font-size: 20px;
  text-align: center;
}
body {
  padding-top:25px;
  background: #FFFFFF;
  margin-left:10px;
  margin-right:10px;
}
.contact-form input,
      .contact-form textarea {
      width: 80%;
      margin-top: 15px;
      padding: 12px 20px;
      border: .5px solid #ccc;
      border-radius: 7px;
      background-color: #eaeaea;
      }
      input[type=submit] {
      background-color: #26acd9;
      }
      input[type=submit]:hover {
      background: white;
      border: .7px solid #ccc;
      cursor: pointer;
      }
      textarea {
      font-family: inherit;
      resize: none;
      }



::-webkit-input-placeholder {
   color: #000;
}
:-moz-placeholder {
   color: #000;  
}
::-moz-placeholder {
   color: #000; 
}
:-ms-input-placeholder {  
   color: #000;  
}

hr {
    border: none;
    height: 3px;
    /* Set the hr color */
    color: #333; /* old IE */
    background-color: #333; /* Modern Browsers */
}

label.error {
    font-family:'Source Sans Pro',arial,sans-serif;
    font-size:1em;
    display:block;
    padding-top:10px;
    padding-bottom:10px;
    background-color:#d89c9c;
    width: 80%;
    margin:auto;
    color: #FAFAFA;
    -webkit-border-radius:6px;
    -moz-border-radius:6px;
    border-radius:6px;
}

.message {
    font-family:'Source Sans Pro',arial,sans-serif;
    font-size:1.1em;
    display:none;
    padding-top:10px;
    padding-bottom:10px;
    background-color:#2ABCA7;
    width: 80%;
    margin:auto;
    color: #666;
    color: #FAFAFA;
    -webkit-border-radius:6px;
    -moz-border-radius:6px;
    border-radius:6px;
}


    
    .profile {
        /*background: #e2e2e2;*/
        margin-bottom: 20px;
    }
    
    .profile-top {
        min-height: 200px;
        /*background: #999;*/
        background: #26A69A;
    }
    
    .profile-image {
        margin-top: -100px;
        height: 200px;
        width: 200px;
        border-radius: 100px;
        border: 8px solid #000;
    }
    
    .profile-body {
        padding: 20px;
        text-align: center;
        color: #666;
    }
    .text-color{
        color: #337AB7;
    }

        </style>
    </head>
<body>
<div class="profile">
  <div class="profile-top"></div>
  <div class="text-center">
  <center><img  src="https://scontent.flos1-1.fna.fbcdn.net/v/t1.0-1/p160x160/21106553_1931026153837126_2391483751032587349_n.jpg?oh=350c10be4f9a64d0eea299adc227459d&oe=5A5E79DC" class="profile-image"></center>
  </div>
  <div class="profile-body">
                <h3>Edidiong Asikpo 
                                <br>
                                <small>Android Developer</small>                           
                            </h3>

                             <h3> hello, my name is Edidiong Asikpo <br> I`m an android developer. I have always loved programing since high school.<br> Join me as we make the best out of this wonderful opportunity.</h3>
                              <div>

                                <br><strong>Slack Username :</strong> @edidiong
                                </div>
                                <div>
                           <strong>Github Username :</strong> @edyasikpo
                            </div>
                          </div>

      
<hr/>  

</body>


                <form class="cd-form floating-labels" method="POST">
              		<fieldset>


              			<div class="icon">
              				<label class="cd-label" for="cd-name">Subject</label>
              				<input class="user" type="text" name="subject" id="cd-name" required>
      
              		  </div>

                          <div class="icon">
              				<label class="cd-label" for="cd-textarea">Email</label>
                    	<input class="user" type="text" id="cd-email" name="Email" required>

              			</div>
              			<div class="icon">
              				<label class="cd-label" for="cd-textarea">Message</label>
                    	<textarea class="message" name="message" id="cd-textarea" required></textarea>
              			</div>
              			<div>
              		   <input type="submit" value="Send Message">
              		  </div>
              		</fieldset>
              	</form>

            </div>
        </div>
    </body>
</html>
