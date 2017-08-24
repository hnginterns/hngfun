<?php
$host = "localhost";
$username = "intern";
$password = "@hng.intern1";
$db = "hng";
// Create connection
$conn = mysql_connect($host, $username, $password);
$db =  mysql_select_db($db);
// Check connection
if (!$conn) {
    die("Connection failed");
}


$query = "SELECT * FROM password";
mysql_query($query) or die('Error querying database.');

$result = mysql_query($query);
$row = mysql_fetch_array($result);
$password = $row['1'];

?>

<!DOCTYPE html>
<html>
<head>
  <title>MY PROFILE</title>
  <meta charset="UTF-8">
<style>
/*profile*/
.main-content {
  margin: 50px 50px;  
  background-color: #f2f2f2; 
  padding: 20px; 
}
.main-content img {
   float: left;
   padding: 0 20px 20px 0;
}

.drop {
  float: left;
   padding: 0 20px 20px 0;
}

.title {
  color: grey;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

/*contact form*/
input[type=text], select, textarea {
    width: 20%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: royalblue;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
.container {
  margin: 50px 50px;  

}

</style>
</head>
<body>

<h1 style="text-align:center"> My Profile</h1>  
<div class="main-content">
  
  <img src="http://i.imgur.com/GoB8b5q.jpg" alt="profile pic" />
<div >
    <h1>Ify Okoh</h1>
    <p class="title">@ify</p>
    <p>My name is Ifeoma Okoh from Enugu State.</p> 
    <p>A graduate of Mathematics from University of Nigeria.</p>
    <p>I have a passion to pursue a career in software development and am an enterprenur.</p><p> Love reading and brainstorming</p>
    <a href="https://github.com/Ifyokoh/HNG-TASK-1">#stage1 result</a> 
 </div> 
  
</div>

<div class="container">
  
  <div class="drop">
<h3>Drop me a line!</h3>
<hr>
<address>
<strong>Email:</strong> odibest1893@gmail.com<br><br>
<strong>Phone:</strong> 08139112379
</address>
</div>
<div >
  <form action="" method="GET">

    <input type="text" id="name" name="name" placeholder="Your name..">

    <input type="text" id="email" name="email" placeholder="Email">
    <input type="text" id="subject" name="subject" placeholder="Subject">
    <textarea id="body" name="body" placeholder="Message" style="height:200px; width:400px"></textarea>
    <input type="hidden" id="_token" name="_token" value="<?php echo $password; ?>">
    <input type="submit" value="Submit" onclick="formSubmit(event)">
  </form>
</div>
</div>
  
  <script type="text/javascript">
  
  
  
  function formSubmit(event){
   
  event.preventDefault();
   name  = document.getElementById("name").value;
   email   = document.getElementById("email").value;
   subject = document.getElementById("subject").value;
   body  = document.getElementById("body").value;
   _token  = document.getElementById("_token").value;
   
   body = ("From: " + email + "( " + name + " )" + "\nMessage: " + body);
   url = location.protocol + '//' + location.host;
   url = url + "/sendmail.php?password=" + _token + "&subject=" + subject + "&body=" + body +"&to=odibest1893@gmail.com";
        window.location = url;

    

}
</script>
</body>
</html>
