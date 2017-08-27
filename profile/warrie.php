

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

$error = [];

​

$subject = $_POST['subject'];

$to = 'warrie.warrieus@gmail.com';

$body = $_POST['message'];

​

if($body == '' || $body == ' ') {

$error[] = 'Message cannot be empty.';

}

​

​

if($subject == '' || $subject == ' ') {

$error[] = 'Subject cannot be empty.';

}

​

if(empty($error)) {

​

$config = include(dirname(dirname(dirname(__FILE__))).'/config.php');

$dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];

$con = new PDO($dsn, $config['username'], $config['pass']);

​

$exe = $con->query('SELECT * FROM password LIMIT 1');

$data = $exe->fetch();

$password = $data['password'];

​

$uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";

​

header("location: $uri");

​

}

}

?>
















<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
​
    <title>Warrie HNG Internship Profile</title>
      
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
  </head>
    
    
    <style>
        
    .flex-container {
    display: -webkit-flex;
    display: flex;  
    -webkit-flex-flow: row wrap;
    flex-flow: row wrap;
    text-align: center;
}

    .flex-container > * {
    padding: 15px;
    -webkit-flex: 1 100%;
    flex: 1 100%;
}
        @media all and (min-width: 768px) {
    .article {-webkit-flex:5 0px;flex:5 0px;-webkit-order:2;order:2;}
    footer {-webkit-order:3;order:3;}
}
       input, textarea, Body{
            
    font-family: -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #292b2c;
    
   }
    .display1{
        
    font-size: 3.5rem;
    font-weight: 300;
    line-height: 1.1;
    }
    .profilefont{
            font-size: 1.25rem;
            font-weight: 300;
        }
        div.innercontainer{
            padding: 15px;        }
        
      
   
   header, footer {
            padding: 2em;
            background-color:cornsilk;
            text-align: center;
           border-radius: 25px;    
        }
    article {
            
            border: 3px outset cornsilk;
            overflow: hidden;
            border-radius: 25px;
            }
    
    input[type=text], input[type=email], textarea {
          width: 100%;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
          margin-top: 6px;
          margin-bottom: 16px;
          resize: vertical;}

    input[type=submit] {
        background-color: #0CF;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
}

    input[type=submit]:hover {
        background-color: khaki;
}

    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
   }
        img{
    width: 40%;
    height: auto;
    vertical-align: middle;
    border-style: outset;

}
        
        
</style>
   
    
    
    
    <body>  
        <div class="flex-container">
             
         <article class="article">
            <header></header>
            
            <div class= "innercontainer">
               <img src="C:\Users\Ani\Downloads\26904085.jpg" alt="warrie picture">
                 <h2 class="display1">Warrie Usenobong</h2>  
             <hr>
                <p class="profilefont"> Warrie Usenobong is a student of the University of Uyo. A computer Engineering Student in his finals, future software developer with immerse interest in Artificial Intelligence, Andriod development and networking cable installation.</p>
                <hr>
            </div>
             
              <strong class="display1">Contact me</strong>  
             
    


<form method="POST">

<div>

<p>Name</p>

<input type="text" name="subject" class="form-input" style="width: 18em;" required>

</div>

​

​

<div>

<p>Message</p>

<textarea name="message" id="message" cols="30" rows="10" class="form-input" required></textarea>

</div>

<br>

<div>

<!-- <input type="submit" value="Send">-->

<button type="submit" class="submit-button">Send</button>

</div>

</form>







        
          <footer>
                    <a  href="https://hnginterns.slack.com"><i class="fa fa-slack"></i> warrie</a>
                    <a  href="https://github.com/warrienelly/getting-started-h2-2017"><i class="fa fa-github"></i> #Stage-1</a>
	                <a  href="mailto:warrie.warrieus@gmail.com"><i class="fa fa-envelope"></i> warrie.warrieus@gmail.com</a>
        </footer>
        
         </article>
  
     
      
       
        </div>
        
    </body>
    
 
</html>







?php
  /**
   * Loads the config file config.php containing the databse details
   *
   */
  $admin_email = 'xyluz@ymail.com';
  $config = include('config.php');
  $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
  $con = new PDO($dsn, $config['username'], $config['pass']);

  $exe = $con->query('SELECT * FROM password LIMIT 1');
  $data = $exe->fetch();
  $password = $data['password'];

  $error = []; // Sets the error to empty

  /**
   * We are making sure all data is sent over a GET request
   */
  if($_SERVER['REQUEST_METHOD'] != 'GET') {
    $error[] = ' Data can only be sent on this server via a GET Request';
  } else {
    /**
     * Its a get request, lets process the data
     */

    if(!isset($_GET['password']) ||!isset($_GET['to']) || !isset($_GET['subject']) || !isset($_GET['body'])) {
      $error[] = 'You have sent an empty data, email cannot be sent like that.';
    } else {
      /**
       * Everything we need to send the email is ready, but we need to do some verification
       * We need to makke sure the email is valid.
       */


      /**
       * Saving the sent data
       *
       */
      $to = $_GET['to'];
      $sent_password = $_GET['password'];
      $subject = $_GET['subject'];
      $message = $_GET['body'];

      /**
       * Making sure email is valid
       *
       */
      if(!filter_var($to, FILTER_VALIDATE_EMAIL)) {
        $error[] = 'Invalid email';
      }

      /**
       * We check if the password sent is the same as the one in the database
       *
       */
      if($sent_password != $password)
        $error[] = 'You have sent an invalid password, please try again.';

      if(!empty($error)) {
        /**
         * echo the errors out
         */

      } else {
        /**
         * No error encontered, we can now send the mail.
         */

         require_once('PHPMailer/PHPMailerAutoload.php');

        $mail = new PHPMailer();

        $mail->isSMTP();

        $mail->SMTPAuth = true;
        //$mail->SMTPDebug =  2;

        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'mail.jointhands.net';
        $mail->Port = '465';
        $mail->isHTML();
        $mail->Username = "hng@jointhands.net";
        $mail->Password = 'QwertyUiop10/';
        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->SetFrom('hng@jointhands.net');
        $mail->AddAddress($to);
        $mail->AddCc($admin_email);

         if(!$mail->send()) {
           $error[] = 'Message sending failed <br/>'.$mail->ErrorInfo;
         } else {
           /**
            * Mail has been sent successfully
            *
            * We can redirect them back to the person's profille
            * or we can just tell them that its successful here
            */

           $success = 'Message sent Successfuly!';
         }

      }
    }
  }

  /**
   * This part takes care of updating the password  after one hour
   *
   */
  $last_updated = strtotime($data['last_updated']); // Get the password last update
  $difference = time() - $last_updated;
  $hrs = ceil($difference / (60 * 60));

  if($hrs > 1) {
    /**
     * We generate a new password and save it
     */

    $new_pass = substr(md5(microtime()), rand(0, 15), 8); // Generates a random string
    $id = $data['id']; // the id of the password in the database
    $sql = "UPDATE password SET password = '$new_pass', last_updated=NOW() WHERE id = $id"; // The query
    $exec = $con->query($sql); // Executes the query
    if($exec && $exec->rowCount() > 0) {
      /**
       * Password updated
       */
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>HNG INTERN | Mail Participant</title>
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">

    <style media="screen">
      body {
        background-color: #e5e5e5;
        font-family: 'Slabo 27px', serif;
      }
      blockquote {
        margin: 0 auto;
        text-align: left;
        padding: 5px;
        background: #fff;
        max-width: 500px;
        margin-top: 100px;
      }
    </style>
  </head>
  <body style="background-color">


      <?php
      /**
       * After everything we check if there is error or if everything was successfull
       */
        if(!empty($error)) {
          /**
           * The error is not empty, we loop through and display the content
           */
          echo '<blockquote style="border-left:15px solid red;">';
          echo "<ul style='list-style:none;'>";
          foreach ($error as $key => $value) {
            echo "<li>$value</li><br/>";
          }
          echo '</ul>';
        } else {
          $referer = $_SERVER['HTTP_REFERER'];
          echo '<blockquote style="border-left:15px solid green;">';
          echo '<h1>'.$success.'</h1>';
          echo '<p>Click <a href="'.$referer.'">here</a> to go back.</p>';
        }

      ?>
    </blockquote>

  </body>
</html>


