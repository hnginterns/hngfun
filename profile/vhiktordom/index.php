<?php

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $name = $_POST['name'];
    $to  = 'vhiktordom@gmail.com';
    $message = $_POST['message'];

    if($message == '' || $message == ' ') {
      $error[] = 'Message cannot be empty.';
    }

    if($name == '' || $name == ' ') {
      $error[] = 'name cannot be empty.';
    }

    if(empty($error)) {
      $config = include(dirname(dirname(dirname(__FILE__))).'/config.php');
      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $con = new PDO($dsn, $config['username'], $config['pass']);
      $exe = $con->query('SELECT * FROM password LIMIT 1');
      $data = $exe->fetch();
      $password = $data['password'];
      $uri = "/sendmail.php?to=$to&message=$message&name=$name&password=$password";
      header("location: $uri");

    }

  }

 ?>
<!Doctype>
<html>
    <head>
        <title>Vhiktor Dominic</title>
        <script type="text/javascript">
            function myDetails(){
                    alert("Thanks for Viewing!");
            }
        </script>

        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body style="background-color:#563d7c">
        <center>
            <img src="vhiktordom.jpg" alt="Vhiktordom" height="300px;" width="20%">
            <h3 style="font-family:cambria Math;font-size:24px;"> Victor Dominic</h3>
                <h4 style="font-family:Bookman old style;font-size:20px;">I am Victor Dominic --> An upcoming Web Developer In Nigeria</h4>
            <h6>------------------------------</h6>
            <h2 style="font-family:century Schoolbook;color:white">Bio</h2>
            <h6>------------------------------</h6>
            <h4 style="color:grey;font-family:Rockwell">I'm Passionate about development, because it's the only avenue for me to transmute my mental pictures into a reality</h4>
            
            <h4>Slack Username: @Vhiktordom</h4>
            <a href="https://github.com/Vhiktordom/getting-started-h2-2017" style="text-decoration:none;color:white">Stage 1 Project</a><br><br>
            <input style="background-color:red;color:white;height:30px;width:150px;" type="button" class="button" onclick="myDetails()" value="A Message for you">
            
            <form action="" method="GET">
            <div>
                <label for="name">
                    <p>Name</p>
                    <input type="text" name="name" class="form-input" style="width: 18em;" required>
                </label>
            </div>


            <div>
                <label for="message">
                    <p>Message</p>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-input" required></textarea>
                </label>
            </div>
            <br>
            <div>
<!--                <input type="submit" value="Send">-->
                <button type="submit" class="submit-button">Send</button>
            </div>
        </form>
            
        </center>
        
    </body>
</html> 