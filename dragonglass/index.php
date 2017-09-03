<?php
// get request
if(isset($_GET['type'])){
	$type = 'catchData';
}elseif(isset($_GET['type']) && isset($_GET['i'])){
	$type = 'catchData';
}else{
	$type = 'catchData';
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>coinman</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  	<script src="js/scripts.js"></script>
 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="css/table-style.css">
</head>
<body>
	<br />
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="results"></div>
				<input type="hidden" id="getType" value="<?php echo $type; ?>" name="">
			</div>
		</div>
	</div>
	
	<div id="useless">
	</div>
	<script type="text/javascript">
		// when docs is ready load data
		var getType = $("#getType").val()
		
		// refresh data every 1 mins
		var refreshData = function (){
			$("#useless").load("start.php?type=catchData");
		}
		// onload fresh data
		window.setInterval(refreshData, 1000 * 60);
		
		var refreshPage = function (){
			$("#results").load("start.php");
		}
		
		window.setInterval(refreshPage, 1500 * 60);

		$("document").ready(function (){
			$("#results").load("start.php");
		});

		
	</script>
</body>
</html>


