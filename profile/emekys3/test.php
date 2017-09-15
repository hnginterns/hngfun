<?php


if(isset($_POST["register"])){
	try {
	$connection = new PDO('mysql:host-127.0.0.1;dbname-team_data', 'root');
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo $e->getMessage();
	die();
}
 $sql = $connection->prepare("INSERT INTO team_data(first_name,last_name,phone_number,gender,email, skillset) VALUES (:first_name, :last_name, :phone_number, :gender, :email, :skillset");
 $sql -> bindParam(,'first_name', $first_name);
 $sql -> bindParam(':last_name', $last_name);
 $sql -> bindParam(':phone_number', $phone_number);	
 $sql -> bindParam(':gender', $gender);
 $sql -> bindParam(':email', $email);
 $sql -> bindParam(':skillset', $skillset);

 $first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$phone_number = $_POST['phone_number'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$skill = $_POST['skillset'];

$sql->execute();

}


?>
<!DOCTYPE html  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta lang="en" http-equiv="Content-Type" content="text/html;charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/formlayout.css">
<title>Stage 1 form</title>
</head>
<body class="mainsection">
<form id="form" action="result.php" method="post">
	<fieldset>
	<p><b>Personal Information</b></p>
	<label>First Name:</label>
	<input type="text" name="first_name" placeholder="Enter your first name" class="fulllength" required="required"><br>
	<label>Last Name</label>
	<input type="text" name="last_name" placeholder="Enter your last name" class="fulllength" required="required"><br>
	<label>Phone Number</label>
	<input type="text" name="phone_number" placeholder="Enter your Phone Number" class="fulllength" required="required"><br>
	<label>Gender</label>
	<select name="gender" class="fulllength" required="required">
		<option value="female">Female</option>
		<option value="male">Male</option>
	</select><br>
	<label>Email Address</label>
	<input type="email" name="email" placeholder="Enter your email address" class="fulllength" required="required">
	<label>Skillset</label><br>
	<input type="checkbox" name="skillset">HTML<br>
	<input type="checkbox" name="skillset">CSS<br>
	<input type="checkbox" name="skillset">Bootstrap<br>
	<input type="checkbox" name="skillset">JavaScript<br>
	<input type="checkbox" name="skillset">PHP<br>
	<input type="checkbox" name="skillset">NodeJs<br>
	<input type="checkbox" name="skillset">Ruby<br>
	<input type="submit" name="register" placeholder="register" >
	</fieldset>
</form>
</body>
</html>