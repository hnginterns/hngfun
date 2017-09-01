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
  border-radius: 50%;
  margin-bottom: : 40px;
}
.container {
  padding: 0 16px;
}
.container::after {
  content: "";
  clear: both;
  display: table;
}
.need{
background-color: gold;
}
.idea{
  background-color:teal;

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

<h2 style="text-align:center">My HNG Profile</h2>

<div class="card">
  <img src="https://image.ibb.co/cjXCcQ/Rhodinet.jpg" alt="Rhodinet" border="0" height="180" width="150">
  <div class="container need">
    <h1>Imo Okon</h1>
    <p class="title">My Stage 3 Repo</p>
    <p>I am a Laxury Consultant in GWTcorp a POSH, FERI and FERIMOSH designers company that deals with Men and Women wears.
    a graduate of Physics, University of Uyo, Nigeria. My hobby is Korean martial arts (Taekwondo). 
     My career as a computer programmer in HTML, CSS, MYSQL, JAVA, PYTHON, JAVASCRIPT, PHP is a great decision in my life. 
        I have passion to work with Web and Android developers </p>
    <p></p>
    <div style="margin: 10px 0;">
    <p><h8><span class="fa fa-slack">
    </span></i> <a target="_blank" href="https://slack.com/in/rhodinet/" class="repo"> @rhodinet</a> </h10><p>
        <p><h10><span class="fa fa-github">
        </span></i> <a target="_blank" href="https://github.com/rhodinet/" class="repo"> @rhodinet</a></h10></p>
        <p><h10><span class="fa fa-facebook">
        </span></i> <a target="_blank" href="https://facebook.com/rhodinet2/" class="repo"> @rhodinet2</a></h10></p>
        </span></i> <a target="_blank" href="https://globalwealthtrade.com/rhodinet/opportunity.html" class="repo">GWT COMPANY</a></h10></p>
  
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



<div class="container">
  <form action="rhodinet.php" class="idea" method="post">
  <br><br>
    <h2>Contact Form</h2>
    <p><label for="lname">Name</label></p>
     <input type="text" id="name" name="name" placeholder="Full name">

        <p><label for="lname">E-mail</label></p>
<input type="text" id="lname" name="e-mail" placeholder="example@gmail.com">

       <p><label for="subject">Message</label></p>
    <textarea id="subject" name="subject" placeholder="Write message here.." style="height:100px"></textarea>
        <p><input type="submit" name="process" value="Submit"></p>
     </form>
   </div>
 </body>
</html>

</body>
</html>
