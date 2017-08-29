<?php require 'contact_me.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>HNG Intern</title>

<style>

body {
  background-image: url("wall.png");
}
#container {background-color: #808080;
text-align: center;
margin: 0 auto; width: 600px;}

</style>

</head>

<body>
<div id="container">
<div id="my_img">
  <img src="profile3.png" style="width:240px; heigh:300px" alt="" />
</div>

<div id="details">
  <p>My name is Kebe Eyong</p>
  <p>With Slack username @kebeeyong</p>
  <p>Certified Cisco Network Engineer with programing Skills, Graduate of Computer Science, loves exploring new ideas
    <br /> Key Interests Include:
    <br /> API's, Python, GOlang,Network Automation, Ansible, PHP, Unix and Project Management.
  </p>
  
</div>

<div id="details">
  <div class="container">
  <form action="<?= $_SERVER[PHP_SELF]?>" method="post">
Name:<br>
<input type="text" name="name"><br>
E-mail:<br>
<input type="email" name="mail"><br>
Subject<br>
<input type="text" name="subject"><br>
Message<br>
<textarea class="form-control" name="message" rows="5" placeholder="Type your Message Here ..."></textarea><br>
<input type="submit" value="Send">
</form>
</div>
  
</div>
</div>
</body>
</html>