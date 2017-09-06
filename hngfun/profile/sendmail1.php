<?php
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
