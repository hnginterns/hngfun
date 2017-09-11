<!DOCTYPE html>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'itozabu@gmail.com';
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
<title> Hng Intern </title>
<meta http-equiv = "content-type" content = "text/html; charset = utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style rel = "stylesheet" type = "text/css">
.imintro{
	background-image: url(https://i.ytimg.com/vi/F8NxvkwkhiI/maxresdefault.jpg);
	background-repeat: no-repeat;
	background-size: 100% 100%;
}
#img{
	border: 0px solid #ddd;
    border-radius: 150px;
    width: 350px;
    display: block;
    margin: auto;
    height:350px;
} 
#white{
	color: green;
}
#green{
	color:white;
}

/*.spacing {
	width:;
	height:500px;
	background-color:yellow;
}*/
#ribbon{
	text-decoration:underline;
	color:red;
}
.spacing {
	background-color:yellow;
    -webkit-column-count: 3; 
    -moz-column-count: 3; 
    column-count: 3;

    -webkit-column-gap: 40px;
    -moz-column-gap: 40px; 
    column-gap: 40px;

    -webkit-column-rule: 4px outset #ff00ff; 
    -moz-column-rule: 4px outset #ff00ff; 
    column-rule: 4px outset #ff00ff;
}
.form{
	background-image: url(https://i.ytimg.com/vi/F8NxvkwkhiI/maxresdefault.jpg);
	color:yellow;
	background-repeat: no-repeat;
	background-size: 100% 100%
}
</style>
<body>
<div class = "imintro"><br>
<center><img src = "https://pbs.twimg.com/profile_images/905847940064915457/LwnSuYEo_400x400.jpg" id = "img" alt = "mfoni's pix"><h2 id = "name"><span id = "white">HELLO</span><span id = "green"> I'm </span><span id = "white">MFONI UMANA</span> <br><a class="links" href="https://hnginterns.slack.com/team/aspn"><i class="fa fa-slack">my Slack</i></a> &emsp;
		  <a class="links" href="https://github.com/Aspxn"><i class = "fa fa-github"> my github</i></a><br>
          <a class="links" href="https://github.com/Aspxn/Hng_test-repo"><i class="fa fa-github"> Stage 1 repo</i> </a></h2></center>
</div>
<hr>
<div class = "spacing ">
<h3 id = "ribbon"> ABOUT ME </h3>
 	Am a computer science student, a goal getter and always strive hard to make sure i end up the best in what ever i do. looking forward to learning a great deal interning at <a id = "hotels" href = "www.hotels.ng"> hotels.ng, </a>as i look forward to a career in software enginnering. <br>
 <ul><h3  id = "ribbon"> My hobbies</h3>
	<li> Playing game (especially FIFA)</li>
	<li> Coding</li>
	<li> Playing football</li>
	<li> Studying etc.</li>
</ul>
	<b><u>NOTE</u></b><br>
	well, if i am to say everything about me then i wouldnt be a mystery anymore. i look forward to completing all hng Internship tasks even tho am not that an excellent coder. i hope to learn alot as i practice.
<br><br>
</div>
<hr>
<hr>
 <div class="form">
        <form action="" method="POST">
            
                <label for="subject">
                    <p>Subject</p>
                    <input type="text" name="subject"  required>
                
                    <p>Message</p>
                    <textarea name="message"  required></textarea>
                </label>
            
            <br>
          
                <button type="submit"> Send </button>
            
        </form>
      </div> 


</body>
</html>
 