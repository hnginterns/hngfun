<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 3e700aa04932485532bea076220823f8563012b6
<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $subject = $_POST['subject'];
    $to  = $_POST['to'];
    $body = $_POST['message'];
    $config = include('../../config.php');
    $server = $config['host'];
    $con = mysqli_connect($server,$config['username'],$config['pass'],$config['dbname']);
    if (!$con) {
      die("Connection failed: ".mysqli_connect_error());
  }
    $sql = 'SELECT * FROM password LIMIT 1';
    if($result = mysqli_query($con, $sql)) {
      $data = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $password = $data['password'];
    } else {
        $password = "#";
    }
    $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";
    header("location: $uri");
  }
?>

<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Afahakaniniobong | Home</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <style>
      h2{
        text-align: center;
        }

      p{
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: 15px;
        text-align: center;
        }

      img{
        border-radius: 70%;
        border-color: white;
        margin-left:auto;
        margin-right:auto;
        display: block;
        border-style: solid;
        border-width: 2px;
        }

      body{
        background-color: deepskyblue;
        }
      

    </style>




    <body>
      <div>
        <h2>Iniobong Afahakan</h2>
      </div>
      <div>
        <img src="https://scontent.flos2-1.fna.fbcdn.net/v/t1.0-0/p206x206/13754399_1236687179696170_2607372213595552603_n.jpg?_nc_eui2=v1%3AAeE9oSfsyE4HlQccJ8FJ8IUMdELk1pp0I-Z8GWQAFz3g0dxCRunC2iMreD9JsQy2eQj_aMZ7n3EkNWlJeyHfEl6GPOmm2gEIqZawI-Li4zNgyg&oh=9fbb449db25fe2c3d44677026e1852d2&oe=5A542D72" alt="">
      </div>
      <div>
        <p><strong>Bio:</strong> This is me trying to do the things I should have done 10 years ago. I had wanted to become a Java programmer, but I allowed my opportunity to slip pass, now I have to take the bull by the horn and get something tangible out of this internship. I am going back to the basics. I welcome myself to this new and wonderful experience.</p>
      </div>
      <div>
        <p><strong>Slack User Name:</strong> Afahakaniniobong</p>
      </div>
      <center><section class="contact-form" >
         <div class = "card-form">
            <form  action="AfahakanIniobong.php" method="post" >
               <p class = "title" >CONTACT ME</p>
               <input type="text" placeholder="Subject" name="subject" required/><br>
               <input type="email" placeholder="Email" name="email" required/><br>
               <input type="hidden" name="to" value="iniobong.afahakan@gmail.com">
               <textarea name="message" id="message" cols="30" rows="10" placeholder="Write your message here" required></textarea>
               <br>
               <input type="submit"/>
            </form>
         </div>
      </section></center>
    </body>
=======
<<<<<<< HEAD
>>>>>>> 10102c15c7b9faeed00255e89bbe69c6a2502ca7
=======
=======
>>>>>>> 780f1d9a115e82455215112ab95d4c55f0801e76
>>>>>>> 60fcd6351455171d1c9c607fe5bb61c4be3bb793
>>>>>>> 3e700aa04932485532bea076220823f8563012b6
<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $subject = $_POST['subject'];
    $to  = $_POST['to'];
    $body = $_POST['message'];
    $config = include('../../config.php');
    $server = $config['host'];
    $con = mysqli_connect($server,$config['username'],$config['pass'],$config['dbname']);
    if (!$con) {
      die("Connection failed: ".mysqli_connect_error());
  }
    $sql = 'SELECT * FROM password LIMIT 1';
    if($result = mysqli_query($con, $sql)) {
      $data = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $password = $data['password'];
    } else {
        $password = "#";
    }
    $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";
    header("location: $uri");
  }
?>

<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Afahakaniniobong | Home</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <style>
      h2{
        text-align: center;
        }

      p{
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: 15px;
        text-align: center;
        }

      img{
        border-radius: 70%;
        border-color: white;
        margin-left:auto;
        margin-right:auto;
        display: block;
        border-style: solid;
        border-width: 2px;
        }

      body{
        background-color: deepskyblue;
        }
      

    </style>




    <body>
      <div>
        <h2>Iniobong Afahakan</h2>
      </div>
      <div>
        <img src="https://scontent.flos2-1.fna.fbcdn.net/v/t1.0-0/p206x206/13754399_1236687179696170_2607372213595552603_n.jpg?_nc_eui2=v1%3AAeE9oSfsyE4HlQccJ8FJ8IUMdELk1pp0I-Z8GWQAFz3g0dxCRunC2iMreD9JsQy2eQj_aMZ7n3EkNWlJeyHfEl6GPOmm2gEIqZawI-Li4zNgyg&oh=9fbb449db25fe2c3d44677026e1852d2&oe=5A542D72" alt="">
      </div>
      <div>
        <p><strong>Bio:</strong> This is me trying to do the things I should have done 10 years ago. I had wanted to become a Java programmer, but I allowed my opportunity to slip pass, now I have to take the bull by the horn and get something tangible out of this internship. I am going back to the basics. I welcome myself to this new and wonderful experience.</p>
      </div>
      <div>
        <p><strong>Slack User Name:</strong> Afahakaniniobong</p>
      </div>
      <center><section class="contact-form" >
         <div class = "card-form">
            <form  action="AfahakanIniobong.php" method="post" >
               <p class = "title" >CONTACT ME</p>
               <input type="text" placeholder="Subject" name="subject" required/><br>
               <input type="email" placeholder="Email" name="email" required/><br>
               <input type="hidden" name="to" value="iniobong.afahakan@gmail.com">
               <textarea name="message" id="message" cols="30" rows="10" placeholder="Write your message here" required></textarea>
               <br>
               <input type="submit"/>
            </form>
         </div>
      </section></center>
    </body>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1ba0f097f4a2ccdb6ac5e0e2d67dfc9f708c1ed1
>>>>>>> 10102c15c7b9faeed00255e89bbe69c6a2502ca7
=======
<<<<<<< HEAD
>>>>>>> 1ba0f097f4a2ccdb6ac5e0e2d67dfc9f708c1ed1
=======
>>>>>>> 780f1d9a115e82455215112ab95d4c55f0801e76
>>>>>>> 60fcd6351455171d1c9c607fe5bb61c4be3bb793
>>>>>>> 3e700aa04932485532bea076220823f8563012b6
  </html>