<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coinman</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

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
                    <tr>
                        <td>Cell 1</td>
                        <td>Cell 2</td>
                        <td>Cell 3</td>
                        <td>Cell 4</td>
                        <td>Cell 5</td>
                    </tr>
                    
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
       $.ajax({
         type: "POST", dataType: "json", url: "class/load-data.php",
         success: function(data){
                //var jsondata = $.parseJSON(data); // create an object with the key of the array
             var row = "";
                $.each(data, function(key, value) {
                    $.each(value, function(newkey, newvalue) {
                          row = row+"<tr><td>"+newvalue['buys']+"</td><td>Cell 2</td><td>Cell 3</td><td>Cell 4</td><td>Cell 5</td></tr>";
                         
                    });
                    $('#display').html(row);
                    console.log(value);
                 });
              
         },
         error: function(data){
              console.log(data);
            }
        });
    </script>
</body>

</html>
