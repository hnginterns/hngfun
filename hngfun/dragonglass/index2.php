<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coinman</title>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<script src="js/jquery.js"></script>
 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<style>
	body{
		background: linear-gradient(to right, #25c481, #25b7c4);
	}
</style>

<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">Hng Coinman | Dragon Strategy</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="active" role="presentation"><a href="#">Home </a></li>
                    <li role="presentation"><a href="#">Team </a></li>
                    <li role="presentation"><a href="#">Algorithm </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="headdiv">
        <h2>Most Popular Coin : <strong>MAID</strong></h2>
        <h2>Least Popular Coin : <strong>DOGE</strong></h2></div>
    <div id="tablediv">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Coin Pair</th>
                        <th>Buys</th>
                        <th>Sells </th>
                        <th>Difference </th>
                        <th>Percentage Increase</th>
                    </tr>
                </thead>
                <tbody id="display">
                    
                </tbody>
            </table>
        </div>
    </div>
    <footer id="footerdiv">
        <p>C 2017 - Dragonglass Team</p>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script>
        
        // when docs is ready load data
		getJsonData();
        
		// refresh data every 1 mins
		var refreshData = function (){
			getJsonData();
		}
        
		// onload fresh data
		window.setInterval(refreshData, 1000 * 60);
        function getJsonData(){
       $.ajax({
         type: "POST", dataType: "json", url: "class/load-data.php",
            success: function(data){
                //var jsondata = $.parseJSON(data); // create an object with the key of the array
                var alltables = "";
                $.each(data, function(key, value) {                    
                    var rows = "";
                    $.each(value, function(newkey, newvalue) {
                          rows = rows+"<tr><td>"+newvalue['1']+"</td><td>"+newvalue['buys']+"</td><td>"+newvalue['sales']+"</td><td>"+newvalue['difference']+"</td><td>"+newvalue['perIncrease']+"</td></tr>";
                    });
                    alltables = alltables+'<div class="table-responsive"><table class="table table-striped table-bordered"><thead><tr><th>Coin Pair</th><th>Buys</th><th>Sells </th><th>Difference </th><th>Percentage Increase</th></tr></thead><tbody id="display">'+rows+'</tbody></table></div>';
                    
                    $('#tablediv').html(alltables);
                    console.log(alltables);
                    
                 });
             },
             error: function(data){
                  console.log(data);
                }
         });
            
        }
    </script>
</body>

</html>
