<?php
  $config = include('../../config.php');
$dbc = mysqli_connect($config['host'],$config['username'],$config['pass'],$config['dbname']);
    if (!$dbc) {
      $ferror = "We apologize but a fatal error has occured. Please check back and let our engineers find a solution to this problem";
  }
  if(isset($_POST['submit']) and !isset($ferror)) {
    $subject = mysqli_real_escape_string($dbc,$_POST['subject']);
    $to  = "tescointsite@gmail.com";
    $body = "From: $_POST[email] <br> <hr>";
    $body .= mysqli_real_escape_string($dbc,$_POST['message']);   
    if(empty($subject) or empty($to) or empty($body)){
      $ferror = "Sorry All field are required. <a href=''>Go Back</>";
    }else{     
    $sql = 'SELECT * FROM password LIMIT 1';
    if($result = mysqli_query($dbc, $sql)) {
      $data = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $password = $data['password'];
    } else {
        $password = "";
    }
    if(!empty($password)){
      $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";
      header("location: $uri");
    }
  }
  }
  // $ferror ='';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tes Sal's Profile</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://hng.fun/profile/tessal/style/main.css">
    
</head>
<body>
    <div class="flex-container">
        <div class="">
          <?php if(empty($ferror)){?>
          <img src="https://scontent.flos2-1.fna.fbcdn.net/v/t1.0-9/21105692_1789938437702588_2039611269563020598_n.jpg?_nc_eui2=v1%3AAeELBWEsIVmuUYg34mXqWpzoiDSQQzGXK1SJtF-DAdYUtW1I4sPhcZKkQRc2ExG1xASREw5dkxLW5gY5Fs5IfY8XiJuuI3SROVOVRTJ1-ljqqA&oh=f3b62cb1a86651328b84c358803f97b0&oe=5A263493" alt="tessal" class="card" width="200" >
          <h1>Name: Salako Teslim Akolade</h1>
          <p>
              <h3>Slack Username: tessal</h3>
              <h3>BIOGRAPHY</h3>
              I am Salako Teslim,
               A passionate tech enthusiat, 
               self taught fullstack developer, love coding and 
               always ready to learn and here to improve my programming skills, have some fun and probably meet some great minds . 
          </p>
          <a  href="https://hnginterns.slack.com/team/tessal"><i class="fa fa-slack"></i> tessal</a>
                    <a  href="https://github.com/hnginterns/hngfun/commit/0efc801c25bd4871ef202e84a673e3854de5506a"><i class="fa fa-github"></i> #Stage-1</a>
                  <a  href="mailto:tescointsite@gmail.com"><i class="fa fa-envelope"></i> tescointsite@gmail.com</a>
                  <a href="http://app.appsgeyser.com/5580744/Tes%20Sal">Download App</a>
          <div class="container">
            
           <form action="" method="post" >
    <input type="text"  name="subject" placeholder="Your Subject..">
    <input type="email"  name="email"    placeholder="Your email.." required>
    <textarea  name="message" placeholder="Type your message here..." style="height:200px" required></textarea>
    <input type="submit" name="submit" value="Send Message">
  </form>
  </div>
          <?php }else{?>
          <p><?php echo $ferror; ?></p>

          <?php } ?>
        </div>
      </div>
</body>
</html>