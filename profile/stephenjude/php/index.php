<!DOCTYPE html>
<html>
<head>
	<title>HNG Coinman</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<nav class="navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="">HNG CoinMan</a>
			</div>

			<div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="menuItem"><a href="javascript:void(0);"><i class="fa fa-user"></i> DragonGlass </a></li>
					<li class="menuItem"><a href="tactics.php"><i class="fa fa-download"></i> View Strategy </a></li>
					<li class="menuItem"><a href="all.php"><i class="fa fa-download"></i> Ticker</a></li>
				</ul>	
			</div>
		</div>
	</nav>

	<div class="container">
		<h2>HGN CoinMan Trade Strategy predict</h2>
		<p>This strategy show transaction gap between each crypto-currencies, buy transaction rate, the sell transaction rate and trade activity details. </p>
		<hr />

	<div id="home" class="tab-pane fade in active">
		<div id="load-all"></div>
	</div>
			
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			// refresh every 1 mins
			var refreshMarket = function (){
				// load students
				$("#load-all").load("test.php", function (){
				});
			};
			window.setInterval(refreshMarket, 60000);
		});
	</script>
</body>
</html>
