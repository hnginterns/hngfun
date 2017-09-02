<!DOCTYPE html>
<html>
<head>
	<title>HNG Coinman</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="js/jquery.js"></script>
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

		<div id="buy-sell"></div>

		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#home">Current Updates </a></li>
			<li><a data-toggle="tab" href="#menu1">Last 1 min of trade</a></li>
			<li><a data-toggle="tab" href="#menu2">Last 3 mins of trade</a></li>
			<li><a data-toggle="tab" href="#menu3">Last 24 mins of trade</a></li>
		</ul>

		<div class="tab-content">
			<div id="home" class="tab-pane fade in active">
				<div id="load-all"></div>
			</div>
			<div id="menu1" class="tab-pane fade">
				<div id="load-all-1hr"></div>
			</div>
			<div id="menu2" class="tab-pane fade">
				<div id="load-all-3hr"></div>
			</div>
			<div id="menu3" class="tab-pane fade">
				<div id="load-all-24hr"></div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="refresh_db"></div>
				<div id="trade-history">
					<img id="loading-wait" src="img/loading.svg" height="50" width="50"> 
					<span id="loading-text">Loading.............</span>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		// refresh every 1 mins
		var refreshMarket = function (){
			// load students
			$("#load-all").load("test.php", function (){
				$("#loading-wait").hide();
				$("#loading-text").hide();
			});
			$("#buy-sell").load("test.php");
		};
		window.setInterval(refreshMarket, 60000);
		
	</script>
	<script src="js/bootstrap.js"></script>
</body>
</html>
