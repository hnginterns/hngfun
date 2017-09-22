<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
   $subject = $_POST['subject'];
    $to  = 'nnamseakwa@yahoo.com';
    $body = $_POST['body'];
   if($body == '' || $body == ' ') {
      $error[] = 'Message cannot be empty.';
    }
   if($subject == '' || $subject == ' ') {
      $error[] = 'Subject cannot be empty.';
    }
   if(empty($error)) {
     $config = include __DIR__ . "/../config.php";
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
<html lang="en">

<head>
    <style>
        body {
            background-color: white;
            margin:0;
            padding:0;
        }
        .container {
            width: 60%;
            margin:0 auto;
            text-align:center;
            border: 2px solid purple;
            padding: 0;
        }
        header {
            background-color: purple;
            color: #FFFFFF;

        }
        header h1{
            margin:0;
        }
        .logo {
            background-color:purple;
        }
        .trust ul {
            background: purple;
            color: #FFFFFF;
            text-transform: uppercase;
            font-size:14px;
            margin: 0;
        }
        .trust ul li {
            list-style: none;
            display: 
        }
        
        h2 {
            color: black;
        }
        
        img {
            border: 7px solid white;
            border-radius: 100%;

        }
        
        p {
            text-align: center;
            color: black;
        }
        
        
        .me {
            text-align: left;
        }
        
        
        
        
    </style>

    <style type="text/css">
    
    .container{
        background-color: white;
        padding: 10px;
    } 

    .put{
        width:85%;
        padding: 10px;
        margin-top: 4px;
        margin-bottom: 8px;
        border-radius: 6px;
        border: 2px solid #7c4dff;
        font-weight: bold;
        color: #42a5f5;
        resize: none;

    }
    
    
    

    .formclass{
        padding:15px;
        background-color:#448aff;
    
    }
</style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title> hng.fun/profile/controltam </title>

    <body>
        <div class="container">
            <header>
                <h1>
                    Nnamse Richard Akwa
                </h1>
            </header>
            <div class="logo">
                <img src= "https://scontent.flos2-1.fna.fbcdn.net/v/t1.0-9/21728033_1594144067302303_2987783540613644003_n.jpg?_nc_eui2=v1%3AAeEPGcTHlnEQ7CdEXGROBcWOQr-XnY-VNVSyoN_lF2Z_2kgQ6peB10gSXmvtJZ4yrCE1L2VgctycopegFRU-9Fpgu_aH4H5j8btbvi4aOGsCng&oh=48579c932800a453606d2045bfbd8162&oe=5A15D0D9" width="200" height="210" alt="">
            </div>

            <div class="trust">

                <ul>
                    <li> aircraft fixed wing and rotary wing pilot</li>
                    <li> Budding Software developer</li>
                    <li>building consruction surpervisor</li>
                </ul>

                <P>email:nnamseakwa@yahoo.com<br> <a href="https://www."nnamseakwa@yahoo.com/"></a><br> slack:@richtech</P>
            </div> 

            <div class="me">
                <p>
                    My name is nnamse akwa,<br> i studied piloting in south africa leading to a  South African private pilot license and helicopter plioting in united state<br> i am facinated and drawn to technology in particular information technology and look forward to launch a career as both front end and back end programmer<br>application of I.T in engineering and appiled sciences is one of my area of interest as well as e-commerce
                    
                </p>
            </div>
            <p style="background-color:white;">
                <a href="">Link to task one</a>
            </p>

        </div>
        <div class="container">
 <form action="nnamseproject3.php" class="formclass">

    <label for="fname">Name</label>
     <input type="text" id="fname" class="put" name="Name" placeholder="your Name is..."><br>
    <label for="email">email</label>
     <input type="text" id="email" class="put" name="email" placeholder="Your email address is..."><br>
    <label for="subject">subject</label>
     <input type="text" id="subject" class="put" name="subject" placeholder="Subject of email..."><br>
    <textarea id="" classs="commentbox" placeholder="Type your message here" rows="15" cols="90"></textarea><br>
  <p>
    
  </p>
      <input type="submit" value="Submit">

 </form>
</div>




    </body>

</html>