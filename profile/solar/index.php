<?php 

$config = include('../../config.php');
$dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
try {
         $con = new PDO($dsn, $config['username'], $config['pass']);

            }

//catch exception
        catch(Exception $e) {
                echo 'Message: ' .$e->getMessage();
                die();
            }

     if(isset($con)){

        $exe = $con->query('SELECT * FROM password LIMIT 1');
        $data = $exe->fetch();
        $password = $data['password'];

        }else {
    echo "Error Fetching Data";
    die();

        }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>OKanlawon Emmanuel | Profile </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fastcdn.org/Animate.css/3.4.0/animate.min.css" rel="stylesheet">

    <style>

    </style>

</head>

<body>

    <div class="grid-container">

        <div class="grid-item grid1">

            <img src="https://scontent-lhr3-1.cdninstagram.com/t51.2885-15/e35/14592022_632162846965673_6489739989922873344_n.jpg" class="image"
                alt="huh..Okanlawon Emmanuel picture is not loading">
            <div class="social">
                <ul>
                    <li><a href="mailto:okanlawonemmanuel41@gmail.com" title="let talk?" target="_blank"><i class="fa fa-envelope"></i></a></li>
                    <li><a href="https://twitter.com/okanlawonema" title="@okanlawonema" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://medium.com/@emmanuelokanlawon" title="@okanlawonema" target="_blank"><i class="fa fa-medium"></i></a></li>
                    <li><a href="https://github.com/okanlawonema" title="@olaoluwa-98" target="_blank"><i class="fa fa-github"></i></a></li>
                    <li><a href="https://instagram.com/okanlawonema/" title="@okanlawonema" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.facebook.com/okanlawonemma" title="@okanlawonemma" target="_blank"><i class="fa fa-facebook"></i></a></li>
                </ul>

            </div>
        </div>

        <div class="grid-item grid2">

            <div class="inner-grid">

                <p class="typing">
                    I'm Okanlawon Emmanuel 👨🏻‍<br>
                    <br> A Full Stack Web Developer based in Lagos, Nigeria.<br>
                    <br> My Favorite Quote
                    <br>“No Risk No Reward”
                </p>
                <a href="#" id="msgbutton" class="message">Send me a Message</a>
            </div>



            <div id="messagebox" class="inner-grid modal">

<form id="messageform" class="contact-grid">

                <div id="alert" class="form-group full">Sending...</div>

    <div class="form-group full">

        <label for="name">Subject</label>
        <input type="text" id="subject">

    </div>
  
    <div class="form-group full">
        <label for="message">Message</label>
        <textarea id="message" rows="5"> </textarea>

    </div>
    <div class="form-group leftspan">
        <input type="hidden"  id="password" name="password" value="<?php echo $password; ?>">
    <button type="submit" id="formsubmit" class="submit">Submit</button>

    </div>

<span id="expand">X</span>

</form>


            </div>


        </div>
    </div>
<script src="js/main.js"></script>
</body>

</html>