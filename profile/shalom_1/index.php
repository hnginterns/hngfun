
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
<html>
  <head>

    <meta charset="utf-8">
    <title>Shalom Izebhor</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <style media="screen">
    .container{
    	position: relative;
    	width: 100%;
    	height: 100%;
    }

    .img-rounded{
		width: 200px;
		height: 200px;
		background: url(https://avatars2.githubusercontent.com/u/25535834?v=4&s=460), #C4C4C4;
		border-radius: 50%;
		margin: 10px;
		background-position: center;
		background-size: 200px;
		background-repeat: no-repeat;
    }

    .profile-body{
    	width: 40%;
    	padding: 5px;
    	font-family: 'Roboto', sans-serif;
    	letter-spacing: 0.5px;
    	color: #424142;

    }

    .line{
		width: 300px;
		height: 0px;
		margin-top: 10px;
		border: 1px solid #CE3539;
		margin-bottom: 10px;
	}

	.form-container{
		position: relative;
		width: 50%;
		text-align: center;
	}

	a{
		margin: 5px;
	}

	label{
		margin:5px;
		padding:5px;
		font-family: 'Roboto', sans-serif;
		font-style: bold;
		font-weight: 500;
		line-height: normal;
		font-size: 20px;
		letter-spacing: 1px;
		color: #412135

	}

	.form-input{
		padding:5px;
		font-size: 11pt;
		font-family: 'Roboto', sans-serif;
		box-sizing: border-box;
		border-bottom: 1px solid #424142;
		border-left: 0px;
		border-right: 0px;
		border-top: 0px;
	    text-align: center;
	    transition: 0.5s all ease;
	}

	.form-input:focus{
    padding: 10px;
    outline: none;
    border-bottom: 2px solid #CE3539;
	border-left: 0px;
	border-right: 0px;
	border-top: 0px;
  }

	.subject{
		width: 40%;
	}

	.body{
		width: 60%;
	}

	.send-button{
		line-height: normal;
		font-size: 14px;
		text-align: center;
		background-color: #CE3539;
		padding:10px;
		border:none;
		font-family: 'Roboto', sans-serif;
		cursor: pointer;
	   color: #FFFFFF;
	}

	a{
		color: #CE3539
	}

@media(max-width: 425px) {
		.line{
		width: 100px;
		
	}
	   .img-rounded{
		width: 150px;
		height: 150px;
		margin: 5px;
		background-position: center;
		background-size: 150px;
    }
     .profile-body{
    	width: 80%;
    }

    .subject{
		width: 80%;
	}

	.body{
		width: 100%;
	}
}


    </style>
  </head>
  <body>
    <div class="container">

      <center>
        <div class="img-rounded">

        </div>
        </center>
        <center>
         <div class="profile-body" style="text-align: center;">
         <h2>Shalom O. Izebhor</h2>
         Hi, my name is Shalom Izebhor, a student currently learning <br> Software Engineering
    at NIIT. I am a Graphics designer and a software developer.<br>

          <a href="https://github.com/Shalom101">
            <span class="fa fa-github-square fa-1x"></span>
          </a>

          <a href="https://hnginterns.slack.com/team/shalom_1">
            <span class="fa fa-slack fa-1x "></span>
          </a>
        </div>
        </center>

        <center>
        	<div class="line"></div>
        </ce`nter>

        <center>
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
      </center>

    </div>




  </body>
</html>
