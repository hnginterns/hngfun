<?php

 $config=include('../../config.php');
  $mysql_host=$config['host'];
  $mysql_user=$config['username'];
  $mysql_pass=$config['pass'];
  $mysql_db=$config['dbname'];

  $con=mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db);


  if (!$con) {
    die('Error');
    }
    else {

      $sql = 'SELECT * FROM password LIMIT 1';

      $query=mysqli_query($con, $sql);

      $result=mysqli_fetch_assoc($query);

      $password=$result['password'];


      if (isset($_POST['mail_subject'])&&isset($_POST['mail_body']))
       {
         echo "ok";
          $subject=$_POST['mail_subject'];
          $body=$_POST['mail_body'];
          $to="shalomizebhor@gmail.com";
       

       $uri="/sendmail.php?password=$password&subject=$subject&body=$body&to=$to";

       header("location: $uri");
       }
    }

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>



    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css.css">
  </head>
  <body>

    <div class="container-fluid">
      <div class="profile">
        <div class="profile-pic">
        </div>
        <div class="profile-caption">
          <h1 style="color: #424142;">Shalom O. Izebhor</h1>
          <div class="line"></div>
            <h2>Graphics Designer</h2>
            <h2>Web Developer</h2>

        </div>
        <span class="fa fa-arrow-down fa-2x down-arrow" id="down-arrow"></span>

      </div>

    </div>


      <div class="contact-container">
        <div class="contact-text">
            Hi, my name is <span style="color: #CE3538">Shalom Izebhor</span>, a student currently learning Software Engineering
            at NIIT. I am a Graphics designer and a software developer.
            <div class="line1"></div>
        </div>

    <div class="form-container">
              <form  action="index.php" method="post">

                  <label for="">SUBJECT:</label><br>
                  <input type="text" name="mail_subject" class="form-input subject" required placeholder="subject"><br><br>

                  <label for="">MESSAGE:</label><br>
                  <textarea name="mail_body" rows="4" cols="80" class="form-input body" required placeholder="Body"></textarea>
                  <br><br>

                  <button type="submit" class="send-button" name="button">Send Mail</button>
              </form>
          </div>

        
      </div>


    <script type="text/javascript">

    function testScroll(ev) {
      if (window.pageYOffset>20) {
        document.getElementById("down-arrow").style.opacity = "0";

      }else {
        document.getElementById("down-arrow").style.opacity = "1";

      }
    };
    window.onscroll=testScroll;



    </script>


  </body>
</html>
