  <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'anietiecares@gmail.com';
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
    <title>umike</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style type="text/css">
   html{
    background-color:white;
     margin: 0;
    padding: 0;
    border-radius: 5px;
   }

    header{
    background-color:orange;
    border-radius: 5px;
    padding: 5px;
    margin: 5px;
    text-align: center;
}
body {
    font-family: 'Handlee', cursive;
    font-size: 13pt;
    background-color: #efefef;
    padding: 10px;
    margin: 0;
}
h1 {
    font-size: 15pt;
    color: black;
    text-align: center;
    padding: 18px 0 18px 0;
    margin: 0 0 10px 0;
    letter-spacing: 5

}
h1 span {
    border: 4px;
    padding: 10px;
}
h2{
 font-family:monospace;
 font-size: 20pt;

}
p {
    padding: 0;
    margin: 0;
    text-align:center; ;
}
img{
    border: 5px;
    border-radius: 7px;
}
footer{
     text-align:center;
 }
div{
     text-align:center;
}
 
 aside{
    text-align:center;
 }
    input{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
 } 

 textarea{
     width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
 }
</style>
<body>
<header>
    <img src= "https://graph.facebook.com/100000084996729/picture?width=108&height=108" width="290" height="270"> 
</header>

 
             <!-- About me section end -->
             <div>
                       <h1><span>About Me</span></h1>
            <p>
     Am Unyime michael, from akwa ibom state. I love programming, sport is my hobby.colour me orange.
            </p>
             </div>
             <!-- About me section end -->
  
       <!-- Contacts section starts-->
      <div align="center" class="section">
            
           <form action = "janemike.php" id = "contact-form" method = "POST" >
                <input type = "text" name = "subject" placeholder= "Enter subject for Name" required><br><br>
                <input type = "text" name = "subject" placeholder= "Enter subject for email" required><br><br>
                <textarea name = "body" placeholder = "Type your message here"  required></textarea><br>
                <br><input type ="submit" name="submit" value ="Send Message">
            </form> 
        </div>
   
            <h1><span>Follow Me</span></h1>
            <div> 
<strong>Facebook:</strong>@unyime michael|
<strong>Github:</strong>@janemike|
<strong>Slack:</strong>@umike|
            </div>
        
 </aside>
       <footer class="copyright">
      &copy; 2017 unyime michael. All rights reserved.
</footer>
</body>
</html>
