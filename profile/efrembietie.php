<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'efrembietie@yahoo.com';
    $body = $_POST['body'];
    if($body == '' || $body == ' ') {
      $error[] = 'Message cannot be empty.';
    }
    if($subject == '' || $subject == ' ') {
      $error[] = 'Subject cannot be empty.';
    }
    if(empty($error)) {
      $config = include('../config.php');
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
<!DOCTYPE html>
<html>
<head>
 <title>HNG Fun Profile</title>
 <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link href="https://fonts.googleapis.com/css?family=Josefin Slab" rel="stylesheet">
       <style>
   body {
       /*border-style: solid;*/
       background: ##EEEEEE ;
       font-family: "Josefin Slab";
   }
   .btn-primary{
       
       background-color: #009688 !important;
   }
   
   .text-center {
       text-align: center;
   }
   .profile {
       margin-top: 20px
       max-width: 300px
       margin-bottom: 20px;
   }
   
   .profile-top {
       min-height: 150px;
     
   }
   .profile-down {
       min-height: 50px;
     
   }
   .link {
       border: transparent;
       padding: 12px 16px;
       background-color: #009688 ;
       text-decoration: none;
       color: #fff;
       border-radius: 5px;
   }
   
   .profile-image {
       margin-top: -100px;
       width: 200px;
       border-radius: 10px;
       border: 8px solid #009688 ;
   }
   
   .profile-body {
       max-width: 300px
       padding: 20px;
       text-align: center;
       color: #212121 ;
   }
   .text-color{
       color: #000000 ;
   }
    input{
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
 } 

 textarea{
   width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
  }
  form{
     text-align: center;
  }
  div{
     text-align: center;
  }
   </style>
  }
  }
     
</head>
<body>
    <div class="container" max-width = "100px" margin-top = "30px"  >
       <div class="profile">
           <div class="profile-top"></div>
           
           <div class="text-center">
               <img src="http://res.cloudinary.com/drgaacia9/image/upload/v1505225947/picture091_noagr5.jpg" class="profile-image">
           </div>
           <div class="profile-body">
               <h2 ><b>Efremfon Adiakpan</b>
                               <br>
                               <small class="text-color"><b>@efrembietie</b></small>
                               <br>
                               
                           </h2>
               
               <h3>software developer and an Engineer</h3>
      </div>
       </div>
         <form action = "efrembietie.php" id = "contact-form" method = "POST" >
        <input type = "text" name = "subject" placeholder= "Enter subject for Name" required><br><br>
        <input type = "text" name = "subject" placeholder= "Enter subject for email" required><br><br>
        <textarea name = "body" placeholder = "Type your message here"  required></textarea><br>
        <br><input type ="submit" name="submit" value ="Send Message">
      </form>
           <div>
        <h1><span>Follow Me</span></h1>
<strong>Facebook:</strong>@efremfon adiakpan|
<strong>Github:</strong>@efrembietie|
<strong>Twitter:</strong>@Adiakpan Efjay|
<strong>Slack:</strong>@efrembietie|
            </div>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       
     
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
 
</html>s