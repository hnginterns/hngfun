<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     
    <title>Coinman</title>
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
            </nav>
            <div class="container-fluid">
  <div class="row">
<div class="col-md-8" style="margin: 0 auto;">
            <div id="columnchart_material" class="col-md-8" style="width: 800px; height: 500px; margin-top: 50px;"></div>

</div>
</div>
<div class="col-md-4">
<p>hello</p>
</div>

</div>
            <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['BITCOINS', 'Buying', 'Selling'],
          ['BTC_ONE', 1000, 400],
          ['BTC_TWO', 1170, 460],
          ['BTC_THREE', 660, 1120],
          ['BTC_FOUR', 1030, 540]
        ]);

        var options = {
          chart: {
            title: 'Coinman',
            subtitle: 'Coin compare market',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
</body>
</html>