<!doctype>
<html>
<head>

	<title> PHP Test Page2</title>

</head>
<body>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "dynamic_pharm";
		#start a new connection
	$connection = new mysqli($servername, $username, $password, $database);
		if($connection-> connect_error) {
			die("connection failed". $connection-> connect_error);
		}
			echo "successfully connected to your database";
			$sql = "select * from Suppliers";
			
			$result = mysqli_query($connection, $sql);
			

			if(mysqli_num_rows($result)>0)
			{
				while($row = mysqli_fetch_assoc($result)){
					echo "id=" .$row["SN"]. 
					"Supplier_Name=". $row["Supplier_Name"]. 
					"Supplier_Address=". $row["Supplier_Address"]. 
					"Phone_Number=". $row["Phone_Number"]. 
					"Email=". $row["Email"].
					"<br>";}		
			} else 
			{echo "0 results";}

	$sql = "select SN, Supplier_Name, Supplier_Address, Email from Suppliers where SN=2
	";
	$result = mysqli_query($connection, $sql);
	
	echo "<table border = 1>";
	echo "<tr style = 'background-color: red; text-align = center; colour = pink;'> 
					<td> SN </td>
					<td> Supplier_Name </td>
					<td> Supplier_Address </td>
					<td> Email </td> </tr> ";
	$row= mysqli_fetch_assoc($result);
	echo "<tr> <td> ".$row['SN']. "</td>
	<td> ".$row['Supplier_Name']. "</td >
	<td> ".$row['Supplier_Address']. "</td>
	<td> ".$row['Email']. "</td></tr>";
mysqli_close($connection)
?>
</body>
</html>