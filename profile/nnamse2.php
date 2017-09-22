<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'nnamseakwa@yahoo.com';
    $body = $_POST['commentbox'];
    if($body == '' || $body == ' ') {
        $error[] = 'Please type something';
    }

    if($subject == '' || $subject == ' ') {
        $error[] = 'Your name and email are important to me, TYPE them in';
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
<!doctype html>
<html>
<head>
<title>nnamse</title>
<style>
   h3{
        background-color:blue;
    
  }
  img {
    display: block;
    margin: auto;
    width:20%;
    border: solid blue 8px;
    border-radius: 7px;
}
html{
    background-color:pink;
     margin: 0;
    padding: 0;
    border-radius: 5px;
}
body {
    font-family: 'time new roma';
    font-size: 13pt;
    background-color: #efefef;
    padding: 10px;
    margin: 0;
  }
  .bio{
  text-align:center;
  }
  .contact{
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
  div{
    text-align: center;
  }
  
</style>
</head>
<body>
<div>
        <h3 align="center">NNAMSE <h3>
</div>
<div>
                <img src= "https://scontent.flos2-1.fna.fbcdn.net/v/t1.0-9/21728033_1594144067302303_2987783540613644003_n.jpg?_nc_eui2=v1%3AAeEPGcTHlnEQ7CdEXGROBcWOQr-XnY-VNVSyoN_lF2Z_2kgQ6peB10gSXmvtJZ4yrCE1L2VgctycopegFRU-9Fpgu_aH4H5j8btbvi4aOGsCng&oh=48579c932800a453606d2045bfbd8162&oe=5A15D0D9" width="200" height="210" alt="">
            </div>
            <p style="background-color: blue;
                      text-align:center;
                <P>email:nnamseakwa@yahoo.com<br> <a href="https://www."nnamseakwa@yahoo.com/"></a><br> slack:@richtech</P>
            </div> 

            <div class="me">
                <p>
                    My name is nnamse akwa,<br> i studied piloting in south africa leading to a  South African private pilot license and helicopter plioting in united state<br> i am facinated and drawn to technology in particular information technology and look forward to launch a career as both front end and back end programmer<br>application of I.T in engineering and appiled sciences is one of my area of interest as well as e-commerce
                </p>
            </div>
            <div class="contact">
                 <h2> Follow me on </h2>
                 <p><strong>slack:</strong> </p> @richteck
                 </div>
            
  <form action = "nnamse2.php" id = "contact-form" method = "POST" >
        <input type = "text" name = "subject" placeholder= "Enter subject for email" required><br><br>
        <textarea name = "body" placeholder = "Type your message here"  required></textarea><br>
        <br><input type ="submit" name="submit" value ="Send Message">
      </form>
</body>
</html>
