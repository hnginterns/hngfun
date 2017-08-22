<?php
	include_once ('database.php');
	include_once ('students.php');
/*
	$mat_no='U2014/5575017';
	$first_name = "Franklyn";
	$last_name = "Thomas";
	
	$sql = "INSERT INTO students (mat_no,first_name,last_name) 
				VALUES ('$mat_no','$first_name','$last_name')";

	$database->connection->query($sql);
*/
/*
	$sql = "UPDATE students SET status = '0' WHERE mat_no = 'U2014/5575017'";
*/
	$database->connection->query($sql);
	
	$sql = "SELECT * FROM students";

	$result = $database->connection->query($sql);

	$results = $result->fetchAll(PDO::FETCH_CLASS,'students');

	foreach ($results as $obj){
		echo $obj->mat_no.' = > '.$obj->get_fullname().' = > '.$obj->status.'<br>';
	}
	
?>