<?php
   //if "email" variable is filled out then send email
   if(isset($_GET['submit'])){
       //Email information
       $to = "xyluz@ymail.com";
       $subject = $_GET['subject'];
       $body = $_GET['body'];
   
   
    $config = include(dirname(dirname(__FILE__)).'/config.php');
    
    $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
    
    $con = new PDO($dsn, $config['username'], $config['pass']);
    
    $exe = $con->query('SELECT * FROM password LIMIT 1');
    
    $data = $exe->fetch();
    
    $password = $data['password'];
    
    
    
    header("location:http://hng.fun/sendmail.php?password=$password&subject=$subject&body=$body&to=$to");
    
    
   }
    
?>

 <!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8" />
<title> Profile </title>
  <style media="screen">
    .container{
      width: 900px;
      background-color: powderblue;
      margin-left: auto;
      margin-right: auto;
    }

    .image{
      width: 400px;
      height: 400px;
    }

    .content {
      margin-left: auto;
      padding: 20px;
    }
    .contact {
      width: 500px;
    }
    .contact input, .contact textarea {
      display: block;
      margin: 20px;
      width: 100%;
      border: 0;
    }

    h3 {
      font-size: 1.6em;
      text-align: center;
      text-transform: uppercase;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="content">
      <h1> KEHINDE OLADIPO'S PROFILE </h1>
    <i><a href= "https://www.github/kehindeoladipo">#kehindeoladipo </a> </i>
    <pre> <br> <img class="image" src="https://avatars3.githubusercontent.com/u/31207948?v=4&u=8ebdcac59b9c629cf2807f05f6d2782641bb3602&s=400" alt="Bold">
       <br>
     </pre>
     <br>
     <p> I reside in Lagos. I am a student at Ladoke Akintola University of Technology. A beginner level python programmer.</p><br/>
      <div class="contact">
        <form name="form" action="" method="post">
        <h3>Contact Me</h3>
       <input type="text" name="form_name" placeholder="Your Name" required>
       <input type="email" name="form_email" placeholder="Your Email" required>
       <textarea name="form_text" rows="8" placeholder="Your Message"></textarea>
       <input type="submit" value="Mail me">
     </form>
   </div>
  </div>
</div>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
    //console_log($_POST);
    $to = $_POST["form_email"];
    $subject = $_POST["form_name"];
    $message = $_POST["form_text"];
    if(isset($to) && isset($message)){


      $servername = 'localhost';
      $username = 'intern';
      $password = '@hng.intern1';  
      $dbname = 'hng';  
  

      $conn = new mysqli($servername, $username, $password, $dbname);

      if($conn->connect_error){
        return;
      }
      $sql = "SELECT * FROM password LIMIT 1";
      $result = $conn->query($sql);
       $emailPassword = "";
      if(!$result){
      }
      else{
        if($row = $result->fetch_assoc()) {
          $emailPassword = $row["password"];
          $requestUrl = "/sendmail.php?password=$emailPassword&subject=$subject&body=$message&to=$to";
          header("Location: $requestUrl");
       }
      }
    }
  }
?>