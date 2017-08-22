<?php 
include "header.php"; 
?>

<link rel="stylesheet" type="text/css" href="css/style.css">
<style>
  @import url('https://fonts.googleapis.com/css?family=Lato');

  .m-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    box-sizing: border-box;
    font-family: 'Lato', sans-serif;
  }
  .contact {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    width: 95%;
    margin: 30px 0 10px;
  }

  .contact section {
    width: 45%;
  }
  .title {
    font-size: 20px;
  }

  .subheading-text{
    font-size: 1.5em;
    padding:10px;
  }

  .contact-form input,
  .contact-form textarea {
    width: 100%;
    margin-top: 15px;
    padding: 12px 20px;
    border: .5px solid #ccc;
    border-radius: 5px;
    background-color: #eaeaea;
  }
  input[type=submit] {
    background-color: #d2b356;
  }

  input[type=submit]:hover {
    background: white;
    border: .5px solid #ccc;
    cursor: pointer;
  }

  textarea {
    font-family: inherit;
    resize: none;
  }

  .social-links {
    padding-top: 50px;
    padding-left: 50px;
  }
  .social-links span {
    margin-right: 30px;
  }

  .fa-facebook {
    color: #0054a8;
  }

  .fa-facebook:hover {
    color: #004080;
  }

  .fa-twitter {
    color: #00d2d2;
  }

  .fa-twitter:hover {
    color: #009f9f
  }

  .fa-slack {
    color: #510051;
  }

  .fa-slack:hover {
    color: #3e003e;
  }

  .fa-github {
    color: #141414;
  }

  .fa-github:hover {
    color: #191919;
  }

  .map {
    margin-top: 15px;
  }

  p > span {
    margin-right: 10px;
  }

  .map iframe {
    width: 100%;
    height: 100%:
  }

  .underlined::after {
    background: none repeat scroll 0 0 #d2b356;
    bottom: -5px;
    content: "";
    display: block;
    height: 2px;
    position: relative;
    width: 100%;
  }
  @media only screen and (max-width:1024px) {
    .contact {
      width: 90%;
    }
    .contact section {
      width: 45%;
    }
  }

  @media only screen and (max-width:768px) {
    .contact section {
      width: 95%;
    }
    .contact section:last-of-type {
      margin-top: 20px;
    }

    .social-links {
    padding-top: 20px;
    padding-left: 20px;
    }

    .subheading-text{
    font-size: 1.2em;
    }
  }

</style>
<main class="m-container">
<iframe src=https://www.google.com/maps/embed/v1/place?key=AIzaSyAtVAvtq9fcVMGq2sOSK0Ok6tiRQT71I2o&q=Ibom+eLibrary"" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  
  <div class="underlay"></div>
  <h2 style="font-family: 'Lato', sans-serif" class="underlined">GET IN TOUCH</h2>
  <section class="contact">
  <section class="contact-form" >
    <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post" >
    <!-- php code checks against html injection -->
    <p class = "title" >WE CARE ABOUT YOUR FEEDBACK</p>
    <input type="text" placeholder="Name" name="name" required/><br>
    <input type="email" placeholder="Email" name="email" required/><br>
    <textarea name="message" id="message" cols="30" rows="5" placeholder="Write your message here" name = "message" required></textarea><br>
    <input type="submit"/>
    </form>
  </section>
  <section class="contact-info">
    <div>
      <p class= "title">OFFICE ADDRESS</hp>
      <p class = "subheading-text"><span><i class="fa fa-map-marker"></i></span><span>No 3, Birrel Avenue, Off Herbert Macaulay way, Sabo, Yaba Lagos</span></p>
      <p class = "subheading-text"><span><i class="fa fa-phone"></i></span><span>+234-700-880-8800</span></p>
      <p class = "subheading-text"><span><i class="fa fa-envelope-o"></i></span><span>internship@hotels.ng</span></p>
    </div>
    <div class="social-links" >
      <span > <a href="https://web.facebook.com/hotelsng/?ref=br_rs"><i class="fa fa-2x fa-facebook"></i></a></span>
      <span><a href="https://twitter.com/hotelsng"><i class="fa fa-2x fa-twitter"></i></a></span>
      <span><a href="https://hnginterns.slack.com"><i class="fa fa-2x fa-slack"></i></a></span>
      <span><a href="https://github.com/hnginterns/hngfun"><i class="fa fa-2x fa-github"></i></a></span>
    </div>
  
  </section>
  
  </section>
<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
  //checks if it's a post request from the form
  if(isset($_POST["name"])){
    $filename = $_POST["name"];
  }
if(isset($filename)){ 

$name = test_input($_POST["name"]);
$email = test_input($_POST["email"]);
$message = test_input($_POST["message"]);

$from = 'Hotelsng Intern Contact Form'; 
$to = 'emayoung95@gmail.com'; // email address to be replaced
$subject = 'Message from Contact Form ';
 
$body = "From: $name\n E-Mail: $email\n Message:\n $message";

$mail=mail ($to, $subject, $body, $from);


if ($mail) {
  //sends the mail to the $to address, this should be changed to hotels.ng address
    $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    echo "<script type=\"text/javascript\">".
        "alert('Message Sent Successfully');".
        "</script>";
  
}
else {
    $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    echo "<script type=\"text/javascript\">".
        "alert('Message Not Sent');".
        "</script>";
  }
}
}

function test_input($data) {
  //tests the data to make sure we are free from javascript attacks
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>
  
</main>



<?php 
include "footer.php"; 
?>
