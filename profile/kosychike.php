<?php
   //if "email" variable is filled out then send email
   if(isset($_GET['submit'])){
       //Email information
       $to = "kosyononye@gmail.com";
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
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>kosychike</title>

    <link href="https://use.fontawesome.com/6d6c797eb7.css" media="all" rel="stylesheet">
    <script src="https://use.fontawesome.com/6d6c797eb7.js"></script>

    <style type="text/css">
        body {
            background-color: #E6E7E8;
        }
        
        h1 {
            font-family: cursive;
            text-align: center;
        }
        
        p {
            font-family: cursive;
            text-align: center;
        }
        
        .img {
            border-radius: 100%;
            width: 240px;
            height: 250px;
            margin-left: 550px;
            margin-top: 30px;
        }
        
        #links {
            padding-left: 620px;
        }
        
        .formsubmit {
            background-color: #FFFFFF;
        }
    </style>
</head>

<body>

    <div class="body">

        <img class="img" src="https://pbs.twimg.com/media/DGtGqu5XcAA5J3-.jpg" />

        <h1>Chike Ononye</h1>
        <p>Hello, I'm Chike Ononye, graduated sixth form(Alevel) August, 2017. Junior Front End Devloper and Designer.LANGUAGE(S), FRAMEWORK(S) AND LIBRARIE(S): HTML/CSS, Bootstrap, JavaScript, jQuery , particlesJS, AdobeXD(design)</p>

        <div id="links">
            <a id="slack" href="https://hnginterns.slack.com">
                <i class="fa fa-slack"></i> slack

            </a>

            <a id="github" href="https://github.com/hnginterns">
                <i class="fa fa-github"></i> github

            </a>

            <a id="twitter" href="https://twitter.com/chykeofficial">
                <i class="fa fa-twitter"></i> twitter

            </a>



        </div>
    </div>

    
    <!-- 
    <div class="form-area">
        <input type="hidden" name="to" value="kosyononye@gmail.com">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value=""  required>

        <label for="subject">Subject</label>
        <input type="text" name="subject" id="subject" value="" required>

        <label for="body">Message</label>
        <textarea name="body" id="body" rows="5" cols="50" required=""></textarea>

        <input type="submit" value="SEND">
      </div>
      -->
      <footer>
        <form class="formsubmit" action="" method="GET" name="contact_area">
        <input type="hidden" name="to" value="kosyononye@gmail.com">

            <p>Name<br />
                <input name="name" type="text" size="30" /></p>
                
            <p>Email<br />
                <input name="email" type="text" size="30" /></p>
                <p>Subject <br />
                <input name="subject" type="text" size="30" /></p>
            <p>Message<br />
                <textarea name="body" cols="30" rows="5"></textarea></p>
            <p>
                <input name="submit" type="submit" value="Send" />
            </p>
        </form>
   
    </footer>
</body>

</html>
