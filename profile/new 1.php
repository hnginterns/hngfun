<?php
// Source: http://custom-anything.com/sand/contact_example.php
if(empty($error)) {
        $config = include(dirname(dirname(__FILE__)).'/config.php');
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);
        $exe = $con->query('SELECT * FROM password LIMIT 1');
        $data = $exe->fetch();
        $password = $data['password'];
        $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";
        header("location: $uri");
    }

if( formSubmission() && ( $formFields = validateFormSubmission( $errors )) ){
    if( !$errors ){
        if( sendEmail( $config,$formFields ) ){
            $OUTPUT = successMessage();
        }else{
            $OUTPUT = failureMessage();
        }
    }else{
        $OUTPUT = errorMessage( $errors );
    }
}
?>
<!doctype HTML><html lang="en"><head><meta charset="UTF-8">
<title>One Webpage PHP Contact Form</title>
<style>
h1, p {
text-align:center;
}
form, input, textarea, .message {
border:1px solid #333;
border-radius:4px;
box-shadow:0 0 4px #333;
}
form {
width:600px;
margin:40px auto;
padding:30px 30px 10px;
background:#eee;
color:#333;
}
input, textarea, .message {
display:block;
width:580px;
margin:0 0 20px;
padding:5px 10px;
}
textarea {
height:150px;
}
input[type="submit"] {
width:auto;
background:#ccc;
cursor:pointer;
}
.message {
background:#cef6ce;
color:#088a08;
}
.message.error {
background:#f5a9a9;
color:#610b0b;
}
</style>
</head>
<body>
<h1>One Webpage PHP Contact Form</h1>
		<?php include("../../inc/breadcrumb.php"); ?>
		<?php include("../../inc/topad.php"); ?>
<p>Credit: <a href="http://custom-anything.com/sand/contact_example.php">http://custom-anything.com/sand/contact_example.php</a></p>
<p>Source Code: <a href="one-webpage-php-contact-form.txt">one-webpage-php-contact-form.txt</a></p>
<form action="http://hng.fun/profile/new%201.php" method="post">
	<?php print $OUTPUT; ?>
	<textarea name="yourmessage" placeholder="Write your message here..."></textarea>
	<input name="yourname" placeholder="Your Name...">
	<input type="email" name="youremail" placeholder="Your email...">
	<input type="submit" name="exampleform" value="Send message">
</form>
</body>
</html>
<?php 
function formSubmission(){
    if( isset( $_POST['exampleform'] ) ){
        if( get_magic_quotes_gpc() ){ stripslashes_deep( $_POST ); }
        return true;
    }
    return false;
}
function stripslashes_deep( $value ){
    $value = is_array( $value ) ?
        array_map('stripslashes_deep', $value):
        stripslashes($value);
    return $value;
}
function validateFormSubmission( &$errors=array() ){
    $formData = array( '','','' );
    
    if( empty( $_POST['yourmessage'] ) ){
        $errors['yourmessage'] = "Please write a message."; 
    }else{
        $formData[0] = $_POST['yourmessage'];
    }
    
    if( empty( $_POST['yourname'] ) ){
        $errors['yourname'] = "Please provide your name.";
    }else{
        $formData[1] = $_POST['yourname'];
    }
    
    if( empty( $_POST['youremail'] ) ){
        $errors['youremail'] = "Please provide your email address.";
    }elseif( !filter_var( $_POST['youremail'],FILTER_VALIDATE_EMAIL ) || !preg_match( '#\w\.\w{2,}$#',$_POST['youremail'] ) ){
        $errors['youremail'] = "Please re-enter your email address.";
    }else{
        $formData[2] = $_POST['youremail'];
    }
    
    return $formData;
}

function sendEmail( $mailConfig,$formFields ){
    list( $myname,$myemail ) = $mailConfig;
    
    list( $yourname,$youremail,$yourmessage ) = $formFields;
    
    $headers = "From: $myemail
";
    $headers .= "Reply-to: $youremail
";
    $headers .= "X-Mailer: PHP Contact Form Example";
    
    $t = new DateTime( '@'.time() );
    $datetime = $t->format( 'r' );
    
    $subject = "Contact Form Submission";
    $message = "
$subject
=======================

$yourname <$youremail> sent you a message using the PHP Contact Form Example script:
----------------------------------------------------------------------
$yourmessage

----------------------------------------------------------------------
Sent on $datetime";
    $message = wordwrap( $message,70 );
    
    if( mail( $myemail,$subject,$message,$headers ) ){
        return true;
    }else{
        return false;
    }
}

function successMessage(){
    $message = "Your message was sent successfully - expect a reply soon!  Thank you!";
    return "<div class='message'>$message</div>";
}

function failureMessage(){
    $message = "We're sorry, we were unable to send your message.  Please try again.";
    return "<div class='message error'>$message</div>";
}

function errorMessage( $errors=array() ){
    if( empty( $errors ) ){ return; }
    $message = implode( "<br>",$errors );
    return "<div class='message error'>$message</div>";
}