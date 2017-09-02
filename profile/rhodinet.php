<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 700px;
  margin: auto;
  text-align: center;
  font-family: arial;
}
.container {
  padding: 0 16px;
}
.container::after {
  content: "";
  clear: both;
  display: table;
}
.title {
  color: blue;
  font-size: 18px;
}
button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 30%;
  font-size: 18px;
}
a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}
button:hover, a:hover {
  opacity: 0.7;
}

</style>

</head>

<body>

<h2 style="text-align:center">My HNG Interns Profile</h2>

<div class="card">
  <img src="https://image.ibb.co/cjXCcQ/Rhodinet.jpg" alt="Rhodinet" border="0" height="180" width="150">
  <div class="container">
    <h1>Imo Okon</h1>
    <p class="title">My Stage 1 Repository</p>
    <p>I am a graduate of Physics from University of Uyo, Nigeria. I live in   Abuja, my hobby is Taekwondo. 
        I have passion for programming languages such as: HTML, CSS, MYSQL, JAVA, PYTHON, JAVASCRIPT, PHP etc. 
        I enjoyed working with software developers. Its a real hngfun</p>
    <p></p>
    <div style="margin: 10px 0;">
    <p><h10><span class="fa fa-slack">
    </span></i> <a target="_blank" href="https://slack.com/in/rhodinet/" class="repo"> @rhodinet</a> </h10><p>
        <p><h10><span class="fa fa-github">
        </span></i> <a target="_blank" href="https://github.com/rhodinet/" class="repo"> @rhodinet</a></h10></p>
        <p><h10><span class="fa fa-facebook">
        </span></i> <a target="_blank" href="https://facebook.com/rhodinet/" class="repo"> @rhodinet</a></h10></p>
  
  </div>
</div>
<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select, textarea {
    width: 40%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;
    margin-top: 0px;
    margin-bottom: 1px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 5px;
}
</style>
</head>
<body>

<h4>Contact Form</h4>

<div class="container">
  <form action="/action_page.php">
    <p><label for="lname">Name</label></p>
     <input type="text" id="name" name="name" placeholder="Full name">

        <p><label for="lname">E-mail</label></p>
<input type="text" id="lname" name="e-mail" placeholder="example@gmail.com">

       <p><label for="subject">Message</label></p>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px"></textarea>
        <p><input type="submit" value="Submit"></p>
     </form>
   </div>
 </body>
</html>

</body>
</html>

<?php
  if(isset($_POST['process'])){
      $config = [
          'dbname' => 'hng',
          'pass' => '@hng.intern1',
          'username' => 'intern',
          'host' => 'localhost'
      ];
      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $con = new PDO($dsn, $config['username'], $config['pass']);
      $result = $con->query('SELECT * FROM password');
      $data = $result->fetch();
      $password = $data['password'];
      $subject = $_POST['subject'];
      $body = $_POST['body'];
      header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=rhodimosokon@gmail.com");
  }else{
      header("location: rhodinet.html");
  }
?>