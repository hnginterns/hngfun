<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $error = [];
    $subject = $_POST['subject'];
    $to  = 'etimnseabasi@gmail.com';
    $body = $_POST['body'];

    if($body == '' || $body == ' ') {
      $error[] = "I would love to have your opinion. Please Write me a message";
    }
      
    if($subject == '' || $subject == ' ') {
      $error[] = 'A subject would be nice.';
    }
      
    if(empty($error)) {
      $config = include __DIR__ . "/../config.php";
      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $con = new PDO($dsn, $config['username'], $config['pass']);
      $exe = $con->query('SELECT * FROM password LIMIT 1');
      $data = $exe->fetch();
      $password = $data['password'];
      $url = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";
      header("location: $url");
    }
  }
 ?>


<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>HNG-(nseetim)</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  
</head>

<body>
  <div class="wrapper">
   <div class="form-holder">
       <header class="clearfix">
           <div id="info">
               <h1><span itemprop="name">Nse-Abasi Joseph</span></h1>
               <h3><span itemprop="jobtitle">Software Engineer &amp; Programmer</span></h3>
               <small itemprop="adress" itemscope="" itemtype="http://schema.org/PostalAddress">
                   <span itemprop="addressLocality">Oron</span>,
                   <span itemprop="addressState">Akwa-Ibom</span><br>
                   <span itemprop="addressCountry">Nigeria</span>
               </small>
               </div>
       </header>
    
    <img id="logo" src="https://avatars3.githubusercontent.com/u/6292486?v=4&u=e0f8b24571da3e3701296ba2df9e09b09cdb556b&s=400" alt="" width="240" />
     
     <p>A full stack Python Developer,
       experienced with HTML,CSS and Java script for web design with Python as the backend, and Software Development on all platforms using Python. This profile wont be complete if i fail to mention that am a Christian and Jesus is my everything.
       </p>
       <form action="nseetim.php" method="POST" name="Contat-Me">
        <input class="contact-me-input placeholder" name="name" placeholder="Your name" type="text">
        <input class="contact-me-input placeholder" name="phone-number" placeholder="Your phone-number" type="number">
        <input class="contact-me-input placeholder" name="email" placeholder="Your email address" type="email" onblur="this.setAttribute('value', this.value);" value="" required>
        <div class="contact-me-input placeholder">
        <textarea class="contact-me-input placeholder" placeholder="Message" rows="1" required></textarea>
        </div>
        <input class="cta top" type="submit" value="Submit">
        <input name="input-processing" type="hidden" value="contact-me">
       </form>
     <p class="top">Thanks for reaching out.</p>
       <a href="https://github.com/nseetim/hotels.ng/blob/master/script.php" class="fa fa-github" fa_custom fa-2x aria-hidden="true">Stage 1 repo</a>
       <a href="http://hnginterns.slack.com/etimnseabasi" class="fa fa-slack" fa_custom fa-2x aria-hidden="true">slack</a>
       <a href="https://facebook.com/nse.etim" class="fa fa-facebook-square" fa_custom fa-2x aria-hidden="true">Facebook</a>

   </div>
</div>
  
  
</body>
</html>
