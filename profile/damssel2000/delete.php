<!doctype>
<html>
<head>
	<title> Connect DB</title>
</head>

<body>
<div>
	<form method ="POST">
		<fieldset>

				<legend> NATURE HEALS </legend>

			<div style ="width:1300px; height:1000px; background-color: lightgrey">
				<div style="width:1300px; height:50px; background-color:lightgrey">

					SN <input type="text" name= "SN"> <br><br>
					<input type="submit" name= "submit" value= "delete">
				</div>
			</div> 
		</fieldset>
	</form>
</div>


</body>

	<?php
		//Connect to server
	
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "dynamic_pharm";
		#start a new connection
		$connection = new mysqli($servername, $username, $password, $database);
		//test connection
		if ($connection-> connect_error) 
		{
			die("connection failed". $connection-> connect_error);
		}
			echo "successfully connected to your database";
		//selecting database from server

			if (isset ($_POST['SUBMIT'])){
				//code
	}
	$SN = $_POST['SN'];
	mysqli_query($connection, "DELETE FROM product where SN = $SN");

	if(mysqli_affected_rows($connection)>0)
	{
		echo "<p> Delete Successfully </p>";
		echo mysqli_error($connection);
	}
	
	?>

</html>