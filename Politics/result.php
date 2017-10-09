<?php
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">

		.space{
			margin-left:200px;
			margin-top: 85px;
		}

		.vim{

			width: 50%;
			height: 400px;
			background-color: rgb(254,198,58);
			margin-left: 355px;
			margin-top: 150px;
		}

		.vim2{
			width: 75%;
			height: 200px;
			background-color: azure;
			margin-left: 100px;
			margin-top: 20px;
			float:left;
		}

		h1{
			color: white;
			padding-top: 30px;
			margin-left: 150px;
		}
		h3{
			margin-left: 280px;
			font-family: oswald;
		}

		h4{
			margin-left: 30px;
			margin-top: 30px;
		}
	</style>
</head>
<body>
	 <div class="vim">
		<form class="form_back" action="3.php" method="Post">
			<h1>YOU CHOOSE<sup>&reg</sup></h1>
			<h3>2019 Nigeria Election</h3>

			<div class="vim2">

		 <h4>You've Come to the end of the quiz.<br><br>

		 	<?php
		 	if($_SESSION['id'] > $_SESSION['num']){
		$result = "Your Political Party is PDP";
		echo $result;
	     }
	     else{
	  	$result = "Your Policies are Inline with UPP Manifestos <br>";
		echo $result;
	  }

	 ?>
	 <a href="1.php">Try Again</a>
	 <h4 style="color: red;">* Please Clear the Sessions on your browser in order to get new results.....</h4>
		</div>
	</form>

</body>
</html> 