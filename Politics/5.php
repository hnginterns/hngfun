<?php
	session_start();

	if(isset($_POST["btn_yes"]))
		{
				++$_SESSION['id'];
				
			}

		else if(isset($_POST["btn_no"])){

				++$_SESSION['num'];

			}

	else{
		"Error Performing Operation";
	} 
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
		<form class="form_back" action="result.php" method="Post">
			<h1>YOU CHOOSE<sup>&reg</sup></h1>
			<h3>2019 Nigeria Election</h3>

			<div class="vim2">

		 <h4>5. Create Poverty secure net for all citizens above 65.</h4> <br>
		<a href="result.php" ><input class="space" type="submit" name="btn_yes" value="Agree"></a>
		<a href="result.php" ><input type="submit" name="btn_no" value="I Disagree"></a><br><br>

		</div>
	</form>

</body>
</html> 