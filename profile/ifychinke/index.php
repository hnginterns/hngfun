<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'chinkeifeyinwa@gmail.com';
    $body = $_POST['message'];
    if($body == '' || $body == ' ') {
        $error[] = 'Message cannot be empty.';
    }
    if($subject == '' || $subject == ' ') {
        $error[] = 'Subject cannot be empty.';
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
<!DOCTYPE html>
<html lang           = "en">
<head>
    <meta charset    = "UTF-8">
    <meta name       = "viewport" content        = "width=device-width, initial-scale=1.0">
    <meta http-equiv = "X-UA-Compatible" content = "ie=edge">
    <title>Chinke Ifeyinwa Ruth</title>
    

    <script src="https://use.fontawesome.com/6d6c797eb7.js"></script>
    
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    

    <style type = "text/css">
     @import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css);



        #rcorners2 {
    border-radius:     25px;
    border:            2px solid purple;
    padding:           20px; 
    width:             1290px;
    height:            1290px;  
    text-align: center;  
    }

    #contact{
        border-radius: 15px;
        border: 1px purple;
        padding: 10px;
        text-align: left;
        width: 1000px;
        height: 500px;
        

    }

    .img-circle {
    border-radius: 50%;
    
    }

    body{
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
       

    }

    .submit-button {
            min-width: 100px;
            padding: 10px;
            border-radius: 20px;
            border: none;
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            background: purple;
            color: white;
            cursor: pointer;
        }
        
        .submit-button:focus {
            outline: none;
            background: darkgrey;
        }

    .user-message {
            border: 2px solid #4e4b4b;
            padding: 10px;
            font-size: 14px;
            border-radius: 20px;
            width: 33%;
            background: purple;
            color: white;
        }
        
        .user-message:focus {
            border: 2px solid purple;
            outline: none;
        }

    .input-box {
            height: 28px;
            border: 2px solid #4e4b4b;
            border-radius: 20px;
            width: 33%;
            padding: 0 10px;
            font-size: 13px;
            font-weight: 500;
            background: purple;
            color: white;
        }
        
        .input-box:focus {
            border: 2px solid purple;
            outline: none;
        }
        
        .input-holder {
            margin: 20px 0;
        }
    
    
    </style>

</head>
<body>
    
    <div id="rcorners2">
        <img class="img-circle" src="http://res.cloudinary.com/dro4p9dl3/image/upload/c_scale,w_238/v1503441509/eephie_waf1ci.jpg" title="Chinke Ifeyinwa Ruth"  alt="Chinke Ifeyinwa Ruth" > 
        
        <h1>Chinke Ifeyinwa Ruth</h1>

        <p>
            I am Ifeyinwa Chinke a.k.a Ify. I am from Abia State but i'm based in Lagos and Abuja. I'm a frontend developer, i work mostly with HTML/CSS, bootstrap, Javascript, NodeJs and a little of Angular
        </p>

        <div>
             <a class="links" href="https://hnginterns.slack.com"><i class="fa fa-slack"></i> ifychinke </a>
          <a class="links" href="https://github.com/eephie/HNG-Internship"><i class="fa fa-github"></i> #Stage1</a>
        </div>

        
         <main class="profile-body" id="contact-area">
            <h3>Contact Me</h3>
            <form class="cd-form floating-labels" method="POST" >
                <div class="input-holder">
                    <input type="text" placeholder="Full Name" name="subject" class="input-box" required>
                </div>
                <div class="input-holder">
                    <input type="email" placeholder=" Email" name="to" class="input-box" required>
                </div>
             
            <div class="input-holder">
                <textarea name="message" id="user-message" cols="30" rows="10" placeholder="Type your message here" class="user-message" required></textarea>
            </div>
            <div>
                <button type="submit" class="submit-button">
                    SUBMIT
                </button>
            </div>
        </form>
    </main>

        
    
    </div>

    

    
       
   
</body>
</html> 