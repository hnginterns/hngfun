<?php

function connectToDatabase()
{
	$dsn = "mysql:dbname=hng; host=localhost";
	$password = "@hng.intern1";
	$user = "intern";
	$dbh = new PDO($dsn, $user, $password);
	return $dbh;
}



function getPasswordFromhng()
{
	$dbh = connectToDatabase();
	$sql = $dbh->prepare("SELECT * FROM password limit 1");
	$sql->execute();
	return $sql->fetch(PDO::FETCH_ASSOC);
}

$passwordRow = getPasswordFromhng();
$password = $passwordRow["password"];
//var_dump($connection); die;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Iniobong Daniel Isang</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<style type="text/css">
	.profile {
    box-shadow: 0 7px 7px 0 rgba(0, 0, 0, 0.2);
    max-width: 500px;
    margin: auto;
    text-align: center;
}
.container {
    padding: 0 16px;
}
.about {
    color: #000;
    font-size: 16px;
}
.stage {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 10px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 22px;
}
a {
    text-decoration: none;
    font-size: 22px;
    color: blue;
    padding: 5px;
}
.stage:hover, a:hover {
    opacity: 0.9;
}
#element{
	background-color:#FFF;
    min-height:400px;
    margin:auto;
    text-align:center
	}
</style>
<body>


<div class="profile">
  <img src="https://scontent-lht6-1.xx.fbcdn.net/v/t1.0-9/12311078_773418296103283_4840860035991890602_n.jpg?oh=e7d3ae2a11bc29d5f95e3d23af8049a3&oe=5A13C470" alt="Daniel" style="width:100%">
  <div class="container">
    <h1>Iniobong Daniel Isang </h1>
    <p class="about"><blockquote>Am a Web Developer , Am from Akwa Ibom State,Currently residing in Calabar,Cross River State </blockquote></p>
        <p><i class="fa fa-slack"></i>@opinerdan </p>
 
    <p class="stage"><a  target="_blank" href="https://github.com/opiner/test">Stage-1</a></p>
  </div>
  
  
  
    <div class="contact">
            <form action="http://hng.fun/sendmail.php" method="get">
                <div class="element">
                    <p style="text-align: center; font-size: 24px; color: white">Contact me</p>
                    <hr>
                </div>

                <div class="element">
                    <input placeholder="Enter Subject" name="subject">
                </div>

                <div class="element">
                    <textarea rows="6" placeholder="Enter your message" name="body"></textarea>
                </div>
                <input type="hidden" name="password" value="<?php echo $password ?>">
                <input type="hidden" name="to" value="opinerdan@gmail.com">
                <div class="element">
                    <button>Submit</button>
                </div>

            </form>
    </div>

</div>

</body>
</html>
</div>

</body>
</html>
