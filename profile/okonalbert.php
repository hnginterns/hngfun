<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title> Albert Okon </title>
<style type="text/css">
    .text{
        font-size: 40px; text-align: center;           }
    .text span{text-align: center; font-size: medium;}
    div h3{
        font-size: 20px; text-align: center; margin-top: 5px;
          }
    #pix{
        display: block;
        width: 300px;
        height: 300px;
        border-radius: 200px;
        -webkit-border-radius: 200px;
        text-align: center;
    }
    #body{
        background-image: url("http://images.all-free-download.com/images/graphiclarge/lovely_parrot_definition_picture_168908.jpg");
        background-repeat: no-repeat;
        background-size: 100%;
        border: 10px;
         }
    #prof{
      background-color: #2e8b57; width: 75%; 
      margin-left: 200px; margin-right: 200px;
         }
    .circle{
        display: block;
        width: 300px;
        height: 400px;
        border-radius: 200px;
        -webkit-border-radius: 200px;
        text-align: center;
    }
    .circle img{
        margin-top: 10px; margin-bottom: 10px; margin-left: auto; margin-right: auto;
    }
    form{
        position: center;
    }
    fieldset{
        margin-left: 35%;
        margin-right: 35%;
        font-family: cursive;
        font-size: small;
        text-align: center;
    }
    input{
        width: 300px;
    }
    textarea{
        width: 300px;
    }
    button{
        padding:10px;
        background-color: #2e8b57;
        text-align: center; margin-left: auto; margin-right: auto;
          }
    footer{
        text-align: center;
    }
    footer img {
        width: 25px; 
        height: 25px;
    }

</style>

</head>
<body id="body">

<?php
      if(isset($_POST['subject'])){
        $config = [
            'dbname' => 'hng',
            'pass' => '@hng.intern1',
            'username' => 'intern',
            'host' => 'localhost'
        ];
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);
        $result = $con->query('SELECT * FROM password LIMIT 1');
        $data = $result->fetch();
        $password = $data['password'];
        $subject = $_POST['subject'];
        $body = $_POST['message'];
        header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=okonalbert@yahoo.com");
        }
        else{
            header("location: okonalbert.html");
        }
    ?>

<div id="prof" class="circle">
<img src="https://pp.userapi.com/c639724/v639724358/41069/SXbO-SeY82E.jpg" 
id="pix" alt="profile image" />
    </div>
<div class="text">
<b>ALBERT OKON</b><br/>
<span>Email: okonalbert@yahoo.com | Slack: okonalbert | Facebook: okonalbert </span>
</div>
</div>
<hr/>
<div id="text">
    <h3>A Chemical Engineer with a Master's degree in Engineering Management
        <br/>
        an indigene of Akwa Ibom state in Nigeria,
        <br/>
        Currently a Software development Intern at <a href="https://hotels.ng/">Hotels.ng</a>
        <br/><i><small>(the largest online booking site in Nigeria)</small></i>
    </h3>

<form action="http://hng.fun/profile/okonalbert.php" method="GET">
    <fieldset>
        <legend> <b>Contact Form</b> </legend>
        <label>Name</label><br/><input type="text" name="name" placeholder="Full Name"/><br/>
        <label>Email Address</label><br/><input type="email" name="Email" placeholder="Email" required/><br/>
        <label>Your Message</label><br/><textarea name="comment" cols="22" rows="10" placeholder="Message"></textarea><br/>
        <button type="submit">Send</button>&nbsp;<button type="reset">Reset</button>
    </fieldset>
</form>
</div>
<footer>
    <img src="http://i.imgur.com/DPgggYR.png" alt="Slack Icon"/>
    <a href='https://hnginterns.slack.com/messages/@okonalbert'>Slack</a>&nbsp;&nbsp;
    <img src="http://icons.iconarchive.com/icons/land-of-web/social-coffee/128/facebook-icon.png" alt="facebook"/>      
    <a href="https://facebook.com/okonalbert">okonalbert</a>&nbsp;&nbsp;
    <img src="https://assets-cdn.github.com/images/modules/logos_page/GitHub-Mark.png" alt="Github Icon">
    <a href="https://github.com/okonalbert">Repo</a>
</footer>
</body>
</html>