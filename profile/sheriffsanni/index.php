<?php
	$servername = "localhost";
	$username = "intern";
	$password = "@hng.intern1";
	$dbname = "hng";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_select_db($conn, 'password');
    $query = "SELECT * FROM password LIMIT 1";
    $result = mysqli_query($conn, $query);
		
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Sheriff Profile</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave+Display" rel="stylesheet">
    
    
    
    <style type="text/css">
        body {
            background-image: url("http://res.cloudinary.com/dqcu2xgkg/image/upload/v1503485795/black-and-white-lights-abstract-curves_dzmir5.jpg");
            background-position: center;
            background-size: cover;
            background-repeat:repeat-y;
            color:blueviolet;
            text-align: center;
            align-content: center;
        }
        
        nav{
            position:inherit;
            
        }
        nav img {
            display: block;
            border:0;
            padding: 0;
            border-radius: 2em;
        }
        
        main {
            
        }
        
        .starter-template {
            padding-bottom: 1.5rem;
            text-align: center;
            font-family: '';
            margin-top: 80px;
            margin-right: 80px;
            width:100%;
        }
        
        .starter-template h1{           
            font-family: 'Sedgwick Ave Display', cursive;   
            text-align: center;
        }
        
        footer {
                bottom: 1em;
                width: 100%;
                
}
        
        .lead {
            vertical-align: top;
            align-content:space-between;
            text-align: center;
            font-family:cursive;
            color:aqua;
        }
        
        a {
            text-decoration: none;
        }
        
        .contact{
			width: 100%;
			display: inline-block;
            max-width:500px;
            align-content: center;
            text-align: center;
		}
        
        input[type=text]{
			width: 230px;
			padding: 12px 6px;
			padding-bottom: 3px;
			margin: 8px 0;
			border-bottom: 2px solid #fefefe;
			color:aqua;
			background-color: black;
			border-top: none;
			border-right: none;
			border-left: none;
		}
		
		input[type=text]::placeholder {
            color: #fefefe;
			opacity: 0.5;
			font-family: 'Raleway';
		}
		
		input[type=submit] {
			width: 15%;
			background-color: transparent;
			color: #fefefe;
			padding: 12px;
			border: 2px solid #fefefe;
			cursor: pointer;
		}
		
		textarea{
			width: 100%;
			resize:both;
			height: 100px;
			background-color: black;
			color: #fefefe;
			margin: 10px 0;
		}
		
		textarea::placeholder {
            color: #fefefe;
			opacity: 0.5;
			font-family: 'Raleway';
		}
		
        
    </style>
</head>


<body class="container-fluid">

    <nav class="nav">
        <a class="" href="#"><img src="http://res.cloudinary.com/dqcu2xgkg/image/upload/c_fill,r_18,w_54/v1503485524/Sheriff_dws6rv.jpg" class="img-circle" alt="Sheriff" /></a>
    </nav>
    
    <main>
        <div class="">
            <div class="starter-template">
                <h1>Sanni Sheriffdeen</h1><hr/>
                <p class="lead container">I get a Thrill in Problem Resolution and Business mixed as one.<br /> I Aim to be a Bad-Ass Programmer as a Skill. <br/>I reside in Lagos.<br/>

                </p>
           <p><a href="https://github.com/SheriffSanni/HNG-Internship">Stage one Results</a></p>
            </div>
        </div>
        
        <div class="contact">
        
		  <h2>Send Me a Message</h2>
		  <form method = "GET" action = "/sendmail.php">
			<input type = "text" name = "subject" placeholder = "your name" required>
			<input type = "text" name = "your email" placeholder = "email@example.com"><br />
			<input type = "hidden" name = "to" value = "sheriffdeensanni@gmail.com">
			<input type = "hidden" name = "password" value = "<?php while($row = mysqli_fetch_assoc($result)){echo $row['password'];} ?>">
			<textarea name = "body" placeholder = "your message goes here" required></textarea> <br/>
			<input type="submit" name = "submit" value="HIT">
		  </form>
	    </div>
        
        
        <!-- /.container -->   
    </main>
    
    <footer>
       <div>
            <a href="https://github.com/SheriffSanni" target="_blank" class="fa fa-slack" title="View my LinkedIn profile"> SheriffSanni</a>
       </div>
       
       
        
		<p>&copy;2017</p>
    </footer>
</body>
</html>