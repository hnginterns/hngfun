<!DOCTYPE html>
<html>
<head>
	<title>Load Coinman</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<div id="load-data"><!-- all data contents here--></div>

<script type="text/javascript">
	$("document").ready(function (){
		var data = 'all';
		$.ajax({
			type: "GET",
			url: "class/load-data.php",
			dataType: "json",
			data: {
				data: data
			},
			success: function(data){
				// here data is alread in Json from the dataType set
				// $("#load-data").html(converted json here);
			}
		});
	});

</script>
</body>
</html>
