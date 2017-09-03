

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Stephen Jude - Profile</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

</head>

<body>

    <div class="main-container">

        <h1 class="head-col" style="padding: 0px 10px">About Me</h1>        
        <div class="image-col">
            <img src="https://scontent-bru2-1.xx.fbcdn.net/v/t1.0-9/20842105_1148987211913011_7406302709112086834_n.jpg?oh=229243199555e5fe179ab7294eb8c132&oe=5A36047D" class="profile-image" alt="stephen jude profile picture" />        
        </div>

        <div class="description-col"> 
            <h3>Stephen Jude</h3>   
            <p>
                I am software developer based in Onitsha Anambra State. I develop web and desktop applications. I am also a UI and UX design lover.
            </p> 
            <p> I believe that people with passion will make a difference.</p>
                
        </div>

        <div class="social-col">
            <ul> 
                <li><a><i class="fa fa-slack" ></i>Slack handle - @stephen_jude </a></li> 
                <li><a href="https://github.com/stephenjude/HNG-Test"><i class="fa fa-github" ></i> Github</a></li>
                <li><a href="https://www.facebook.com/stephenjudesuccess"><i class="fa fa-facebook" ></i> Facebook</a></li>
                <li><a href="https://www.twiter.com/stephenjudeso"><i class="fa fa-twitter" ></i> Twitter</a></li>
                <li class="sub-btn" ><a href="https://github.com/stephenjude/ContactApp/blob/master/Stephen%20Jude_V1.0.apk"><i class="fa fa-send" ></i> Contact App</a></li>
            </ul>
        </div>

        <div class="divider"></div>
        <div class="contact-form">
            <h1 class="head-col">Contact Form</h1>
                <form method="post" action="#">
                    <input type="text" name="subject" class="form-input" placeholder="subject" required="required">
                    <textarea name="msg-body" placeholder="message body..." class="form-input" cols="30" rows="6" required="required"></textarea> 
                    <input type="submit"  value="Send" class="sub-btn" name="submitBtn">                
                </form>
        </div>
    </div>
    <?php

         if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $subject = $_POST['subject'];
            $to  = 'stephenjudesuccess@gmail.com';
            $body = $_POST['msg-body'];

           $config = include(dirname(dirname(__FILE__)).'/config.php');
              $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
              $con = new PDO($dsn, $config['username'], $config['pass']);
              $exe = $con->query('SELECT * FROM password LIMIT 1');
              $data = $exe->fetch();
              $password = $data['password'];
              $uri = "http://hng.fun/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";
              header("location: $uri");
        }
?>
    
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto:200');

         body{
            margin: 0;
            padding: 10px;
            background-image: url('https://s27.postimg.org/whfiw4w0z/Amazing-_Background-_Picture-_For-_Website.jpg');
            font-family: roboto;
            color: #555;
         }  

         a{
            text-decoration: none;
            color: #555;
         }



        @media only screen and (min-width : 320px) {

        }

        
         .divider{    
            width: 95%; 
            padding: 0;
            margin: 0 auto;
            position: relative; 
            float: left;  
            border-bottom: 1px solid #666;
         }


         .main-container{
            margin:0 auto;
            width: 60%;
            background: #E9E8ED;
            overflow: auto;
            padding: 10px;
         } 

         .main-container div{
            padding: 10px;
         }

         .image-col{
            width: 12%;
            padding:10px 0px; 
            float: left;
         }

         .description-col{
            position: relative; 
            float: left;
            width: 40%;
            font-family: Roboto;
         }

         .description-col p{
            font-size: 15px;
            font-family: Roboto;
         }

         .social-col{
            width: 40%;
            position: relative; 
            float: left;
            padding:10px;
            padding-left: 40px;
         }

         .social-col ul li{
            list-style-type: none;
            padding-bottom: 15px;
         }

         .github-button{
            border: 2px solid #555;
            border-radius: 5px;
            background: #555;
            padding: 10px;
            cursor: pointer;
         }

          .github-button a{
            color:white;
            font-size: 20px;
            text-decoration: none;
            cursor: pointer;
         }

         .profile-image{
            margin: 40px 0;
            border: 1px solid #555;
            border-radius: 150px;
            width: 100px;   
        }

        .contact-form input, .contact-form textarea{
            font-size: 15px;
            font-family: roboto;

        }

        .contact-form .form-input{
            border: 1px solid #ccc;
            border-radius: 4px;
            background: #fff;
            padding: 10px;
            position: relative;
            float: left;
            width: 500px;
            margin: 10px 0px;
        }

        .contact-form .sub-btn{
            border: 1px solid #666;
            border-radius: 4px;
            background: #666;
            padding: 10px;
            position: relative;
            float: left;
            color: #fff;
            width: 100px;
            margin-left:30px;
            margin-top: 120px;
            font-size: 15px;
            cursor: pointer;
        }

        .contact-form .sub-btn:hover{
            background: #555;
        }

    </style>
</body>

</html>
