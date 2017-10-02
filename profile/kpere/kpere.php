<!--Stage 2 Assesment PHP CODE-->
<html>
        <title>Kpere</title>
    <head>
 <!--Using Internal CSS -->       
   <style>
        body {
    background-color: lightsteelblue;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: normal;
    position: relative;
    text-emphasis-color: black;
    text-decoration-color: black;
            }

        html,body {
    font-size: 100%;
    width: 100%;
}

       img {
    vertical-align: middle;
}

       .img-circle{
    vertical-align: middle;
    border-radius: 50%;
    height: 40%;
    width: 15%;
}

       h1,h2,h3,h4,h5 {
    font-family: 'Raleway', sans-serif;
    font-weight: bold;
}

       h3 {
    color: #525252;
    letter-spacing: 1px;
}

       h5 {
    color: #ffa400;
    letter-spacing: 4px;
    padding-top: 22px;
}

       .heading {
    color: #000000;
    font-size: 62px;
}

       p {
    color: black;
    letter-spacing: 0.9px;
    line-height: 28px;
}

       a {
    outline: none !important;
}

       hr {
    width: 120px;
}

       .form{
    display: contents;
    width: auto;
    border: 2px solid transparent;
    padding: 5px;
    text-align: center;
}

       .form-control{
    white-space: normal;
    word-spacing: normal;
}

       .section-title {
    border: 4px solid #000;
    padding: 50px;
    position: relative;
    text-align: center;
    margin-bottom: 50px;
}
       input[type="text"] {
    border: 4px solid transparent;
    color: black;
    letter-spacing: 1px;
    margin-top: 18px;
    height:35px;
}

       input[type="email"] {
    border: 4px solid transparent;
    color: black;
    letter-spacing: 1px;
    margin-top: 18px;
    height:35px;
}

       input[type="mssg"] {
    border: 4px solid transparent;
    color: black;
    letter-spacing: 1px;
    margin-top: 18px;
    height:120px;
}


       input[type="submit"] {
    border: 4px solid transparent;
    color: rebeccapurple;
    letter-spacing: 1px;
    margin-top: 18px;
    height:35px;
}
            </style>
    </head>
    <!-- Body containing Contact Inofrmation -->
    <body>
        <div class="header">
        <h1 align="center">MY PROFILE</h1>
        <img class="img-circle" src="https://i.imgur.com/97ykJ0t.jpg" alt="Kpere"> 
        </div>
        
        
        
        <div class="section-title">
        <form class="form-control">
            <h4>MAIL FEEDBACK</h4>
				     
            <?php  
                //Prepare mail
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];
                //Feedback
                echo "Dear, " .$name . " your mail has been sent to the administrator.";
                
            ?>  
            
            </form>
        </div>
    </body>
</html>
