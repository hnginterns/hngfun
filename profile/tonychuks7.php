<?php
      if (isset($_GET['send']))  {
          //Email information here
      $to = "tonychuks7@gmail.com";
      $subject = $_GET['subject'];
      $body = $_GET['message'];    
      $config = include(dirname(dirname(__FILE__)).'/config.php');
      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $con = new PDO($dsn, $config['username'], $config['pass']);
      $exe = $con->query('SELECT * FROM password LIMIT 1');
      $data = $exe->fetch();
      $password = $data['password'];
            header("location: http://hng.fun/sendmail.php?password=$password&subject=$subject&body=$body&to=$to");
        }
?>
<!DOCTYPE html>
<head>
   <title>Engineer Turned Web Developer</title>
   <link rel="stylesheet" href="https://github.com/Naccuddi/hngfun.git/html/styles.css">
</head>
<body style="background-color:#b0e0e6 ">
   <p style="text-align:center;"><h1 style="text-align:center;">Anthony Nwaizuzu</h1>
   <p style="text-align:center;"><img src ="tony.jpg" alt="tony" width="300" height="300">
   <p style="text-align:center;"><i>BIOGRAPHY:- I'm Anthony Nwaizuzu - Web developer from Nigeria.</i></p>
   <p style="text-align:center;"><i>I code in HTML, CSS, JS & PHP.</i></p>

   <p style="text-align:center;">Slack username:- @tonychuks7</p>
   <p style="text-align:center;"><a href="https://github.com/Naccuddi/Hngtonychuks.git">link to #stage1</a>
   <p style="text-align:center;"><a href="tonychuks7@gmail.com">Reach me via mail</a></p>                   
   
<form id="contact_form" action="#" method="GET" >
    <div class="row">
        <label for="fname">First Name:</label><br />
        <input id="fname" class="input" name="fname" type="text" value="" size="30" /><br />
    </div>
    <div class="row">
        <label for="lname">Last Name:</label><br />
        <input id="lname" class="input" name="lname" type="text" value="" size="30" /><br />
    </div>
    <div class="row">
        <label for="email">Your Email:</label><br />
        <input id="email" class="input" name="email" type="text" value="" size="30" /><br />
    </div>
    <div class="row">
        <label for="message">Your Message:</label><br />
        <textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
    </div>
    <input id="submit_button" type="submit" value="Send email" />
</form>		

</body>
</html>
