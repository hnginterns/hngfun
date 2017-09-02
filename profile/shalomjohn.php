<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'shaliz.jhay@gmail.com';
    $body = $_POST['body'];
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
<html>

<head>
<title>Shalom John</title>
<script src="https://use.fontawesome.com/6d6c797eb7.js"></script>
<style type="text/css">
body {
    background-color: #EBECF0;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
a{
    text-decoration: none;
}
ul{
	align-items: center;
}
.image{

    height: 400px;
    width: 380px;
    ;
}
</style>
</head>

<body>

<center><img class="image" src="https://scontent-waw1-1.xx.fbcdn.net/v/t1.0-9/17626667_1304703359605988_8550045173239731599_n.jpg?oh=71d5449bed8089446acb4620e3e5425d&oe=5A25E345"></center>

<center><h1>Shalom John</h1>
<p>My name is Shalom Prince John.</p>
<p>I am a student of University of Uyo studying Computer Engineering. A proud Akwa-Ibomite. I love the idea of transforming mental ideas into something which lots of people can actually benefit from with relatively little capital. I hope to learn a lot from the best here at the internship.</p>
</div>
<p><span class="al">
                        <ul>
                            <li>
                                <i class="fa fa-slack fa-2x"></i><br>
                                @shalomjohn
                            </li>
                            <li style="padding-top: 25px;">
                                <i class="fa fa-link fa-2x"></i><br>
                                <a href="https://github.com/otuekongjohn/Test" target="_blank">Stage 1 Task Here</a>
                            </li>
                        </ul></span>
                        <form action="shalomjohn.php" id = "contact-form" method = "POST" >
				<fieldset>
				<legend>Contact Me</legend>
				<input type = "text" name = 'subject' placeholder= "Enter subject for email" required><br><br>
				<textarea name = 'body' placeholder = "Type your message here" rows ="10" cols = "70" required></textarea><br>
				<br><input type ="submit" name="submit" value ="Send Message">
				</fieldset>
			</form>
			<footer id = "footer"> Shalom John &copy; </footer>
</p>
</center>
</body>
</html>