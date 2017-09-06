<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];

   $subject = $_POST['subject'];
    $to  = 'jenniferolibie@gmail.com';
    $body = $_POST['message'];

   if($body == '' || $body == ' ') {
      $error[] = 'Message cannot be empty.';
    }

   if($subject == '' || $subject == ' ') {
      $error[] = 'Subject cannot be empty.';
    }

   if(empty($error)) {

     $config = include __DIR__ . "/../config.php";
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
        <meta charset="UTF-8">
        <title>Profile|Jeni</title>
        
        <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style type="text/css">
            body{
    width:auto;    height:auto;
    background-color:#DFECF6;
    text-align:center;
    font-family: 'Handlee', cursive, Arial, Helvetica, sans-serif;
}
h1{
    color:#20bcd5;
    text-align:center;
    padding: 1% 0.5%;
    margin:auto;
    position: relative;

}
h1 span{
    border: 7px dashed #20bcd5;
    padding: 7px;
}
.img{
    position: relative;
    top:30px;
}
h2 {
    text-align:center;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode',sans-serif ,cursive;
    font-size:30px;
    position: relative;
    top: 40px;
}
article{
    position: relative;
    top: 45px;
}
article p a:hover{
    color:#02F6F9;
   background: #B0E0E6;
    opacity:0.7;
}
article p a{ 
    padding: 10px;
    background-color:  #20bcd5;
    border-radius:15px;
    color: white;
}          
a {
    text-decoration: none;
}
aside{
    text-align:right;
}

input[type=text], textarea{
    width:100%;
    padding:12px;
    border:1px solid #ccc;
    border-radius:4px;
    box-sizing:border-box;
    margin-top:4px;
    margin-bottom:16px;
    resize:vertical;
}
button[type=submit]{
    background-color: palevioletred;
    color:white;
    padding: 6px 10px;
    border:none;
    border-radius:4px;
    cursor:pointer;
}


/* Style all font awesome icons */
.fa {
    padding: 5px;
    font-size: 30px;
    width: 30px;
    
}

/* Add a hover effect*/
.fa:hover {
    opacity: 0.7;
}

/* Set a specific color for each brand */

/* Facebook */
.fa-facebook {
    background: #3B5998 ;
    color: white;
}

/* Instagram */
.fa-instagram {
    background: #FA0867 ;
    color: white;
}
/* the modal*/
.modal {
    display: none; /*hidden by default*/
    position:fixed; /*stay in place*/
    z-index: 1; /*sit on top*/
    left:0;
    top:0;
    width:100%;
    height:100%;
    overflow: auto; /*Enable scrolling*/
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
    border-radius:5px;
    padding-top:30px;
}
.modal-content{
    background-color:pink;
    margin:5% auto 15% auto;
    width:80%;
    text-align: left;
    padding: 15px;
    border-radius:15px;
}

.close{
    position: absolute;
    right:30px;
    color:#000;    font-size: 35px;
    font-weight: bold;
}
.close:hover,
.close:focus{
    color:red;
    cursor:pointer;
}
.animate{
    animation: animatezoom 0.6s;
}

@keyframes animatezoom{
    from {transform:scale(0);}
    to {transform: scale(1);}
}

        </style>
     </head>
    <body>
        <header>
            <h1><span>Jeni's Profile</span></h1>
        </header>
        <img src ="http://i.imgur.com/LdQpWp2.jpg" height="600" width="500" alt= "A PICTURE OF  ME" class='img'/>

        <h2>OLIBIE JENNIFER CHIDERA</h2>
        <article><!-- a short article about me-->
            <h3>About Me</h3>
            <p>I am a 400 level student in department of Electronic and Computer Engineering <br>
            at Nnamdi Azikiwe University, Awka, Nigeria.<br>
            Love programming, still learning though.
            Believe in being the <strong>'Best of Me'</strong></p>
            <!-- a section of the artcle that gives my username-->
            <p>Slack username: Jeni<br>
                Github username: Je-ni</p>

            <p><a href= "https://github.com/Je-ni/newrepo.git">Stage 1 task</a>
               <a href = "https://drive.google.com/file/d/0B4RsYe5Wn1hBaS1DLVh2WmNXaEU/view?usp=drivesdk">Contact App</a></p>
            
          </article><br><br>

        <!--Modal -->
        <div id="id01" class="modal">
            <span
            onclick="document.getElementById('id01').style.display='none'"
            class="close" title="Close Modal">&times;</span>

            <!--Modal Content-->
            <form autocomplete="off" class="modal-content animate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <div class="container">
                    
                    <input type="text" class="input" name="fullname" placeholder="YourName" >                
                   
                    <input type="text" class="input" name="subject" placeholder="Subject*" required>
                    
                    <textarea name="message" placeholder="Type your message here*" id="message" cols="30" rows="10" style="height:100px" required></textarea>

                    <button type="submit" name="send">Send</button> 

                </div>

            </form>
        </div>

        <footer>
            
            <!-- Add font awesome icons -->
            <p>
                <a href="http://facebook.com/JenniOCE" class="fa fa-facebook"></a>
                <a href="http://instagram.com/Jenn_0c" class="fa fa-instagram"></a>
                <!--button to open modal contact form-->
                <button type='submit'
                onclick="document.getElementById('id01').style.display='block'">Contact Me</button>
            </p>
           
        </footer>
    </body>
</html>
