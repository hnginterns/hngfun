<<<<<<< HEAD
<?php
	$db = "stage1";
	$host = "localhost";
	$userName = "root";
	$password = "";
	
	//Connect to database
	
	$con = mysqli_connect($host,$userName,$password,$db);
	
	if ($con){
		echo "Connected to database <br>";
	} else {
		echo "Error connecting to database \n";
	}
	
	//Insert into database
	$insert = "INSERT INTO users (firstName, lastName, designation) VALUES('Thadeus','Ajayi','Android Developer')";
	
	$sql = mysqli_query($con,$insert);
	
	if ($sql) {
		echo "Successfully inserted into database  <br>";
	} else {
		echo "There was an error inserting into database";
	}
	
	//Query database
	
	$query = "SELECT * FROM users";
	
	$sql = mysqli_query($con,$query);
	
	if (mysqli_num_rows($sql) > 0) {
		
		while ($result = mysqli_fetch_assoc($sql)) {
			echo $result["firstName"] ." ". $result["lastName"] ." ". $result["designation"]. "<br>";
		}
		
	} else {
		echo "There was no result found";
	}

	
	

=======
<?php
	$db = "stage1";
	$host = "localhost";
	$userName = "root";
	$password = "";
	
	//Connect to database
	
	$con = mysqli_connect($host,$userName,$password,$db);
	
	if ($con){
		echo "Connected to database <br>";
	} else {
		echo "Error connecting to database \n";
	}
	
	//Insert into database
	$insert = "INSERT INTO users (firstName, lastName, designation) VALUES('Thadeus','Ajayi','Android Developer')";
	
	$sql = mysqli_query($con,$insert);
	
	if ($sql) {
		echo "Successfully inserted into database  <br>";
	} else {
		echo "There was an error inserting into database";
	}
	
	//Query database
	
	$query = "SELECT * FROM users";
	
	$sql = mysqli_query($con,$query);
	
	if (mysqli_num_rows($sql) > 0) {
		
		while ($result = mysqli_fetch_assoc($sql)) {
			echo $result["firstName"] ." ". $result["lastName"] ." ". $result["designation"]. "<br>";
		}
		
	} else {
		echo "There was no result found";
	}

	
	

>>>>>>> 22d766b0e9a795d77633619c9b97c92437b2efe3
?>