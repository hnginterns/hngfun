<?php
// define variables and set to empty values
$bodyErr = $emailErr = "";
$email = $body = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
   if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
  if (empty($_POST["body"])) {
    $bodyErr = "Write a Message";
  } else {
    $body = $_POST["body"];
  }
  if(isset($_POST['subject'])){

      $config = include __DIR__ . "/../config.php";
        
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);
        $result = $con->query('SELECT * FROM password');
        $data = $result->fetch();
        $password = $data['password'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];
        header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=omobolajimary@gmail.com");
}

}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Omobolaji's Profile</title>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style type="text/css">
	body{
	    background-color: #404040;

	}
	.error {
	    color: #FFF;
	    }
	.main{
	    margin:50px;
	    padding:30px;

	    color:#ffffff;
	    font-size: 24px;
	}
	.profile_img{
	    margin-left:330px;

	}
	.bio-data{
	    margin:20px;
	    padding:20px;
	}
	.form{
	    margin:20px;
	    padding:20px;
	}
	a{
	    color:#ffffff;
	}
	input{
	    padding:10px;
	    border-radius:5px;

	}
	.submit-btn{
	    padding: 10px;
	    color: #fff;
	    background-color: black;

	}

	</style>
    </head>
    

<body>
    <div class="main">
        <div class = "bio-data">
            <center><img class="profile_img" src="https://avatars1.githubusercontent.com/u/23702327?v=4&u=47417231767a20c385643d8e41a0a530d76efb97&s=400"alt ="my_profilePic"></center>
            <p>My name is <b>Omobolaji Adediran</b>, I love the way technology make life easy and I love to be part of it. I have adequate knowlegde in HTML, CSS, Javascript and little of PHP. . </p>
            <h4>
                 <i class="fa fa-slack omobolajimary-slack-icon"></i> HNG Slack username:- @omobolajimary
            </h4>
            <h4><a href="https://github.com/hnginterns/getting-started-h2-2017/blob/master/contributors.txt"></a><i class="fa fa-github omobolajimary-github-icon"></i>link to #stage1</h4> 
        </div>
        
        <div class="form">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <fieldset>
                    <legend>Contact Me!</legend>
                    <p><span class="error">* required field.</span></p>
                    <label>To :   </label><input name="to" id="to" class="client-input" value="omobolajimary@gmail.com" required><br><br>
                    <label>From : </label><input name="client_mail" id="client_mail" class="client-input" placeholder="Your E-mail" required><span class="error">* <?php echo $emailErr;?></span><br><br>
                    <label>Subject :</label><input name="subject" id="subject" class="client-input" placeholder= "Subject" required><br><br>
                    <label>Message: </label><br><br>
                    <textarea id="body" name="body" cols="60" rows="6" required></textarea><span class="error">* <?php echo $bodyErr;?></span>
                    <br><br>
                    <button type="submit" class="submit-btn" name="thisemail"><strong>Send</strong></button>
                </fieldset>
            </form>
      </div> 
   </div>


        
</body>

</html>
