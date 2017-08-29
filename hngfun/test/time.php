<?php

  echo time();

 ?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
  </head>

  <body>

     <div class="container">

         <div class="row">

           <?php


               /**
               **  Call the poloniex API to get all coins available
               **
               **/
               $coins = file_get_contents('coins.json');

               // Convert JSOn resource to object
               $coins = json_decode($coins);

               // Convert object to array
               $coins = json_decode(json_encode($coins) , TRUE);

               // Loop through coins array to get details for each coin
               foreach ($coins as $key => $coin) {

                 $coin_delisted = $coin['delisted'];

                 $coin_disabled = $coin['disabled'];

                 if ((!$coin_delisted)) {

                    // drop disabled coins
                    if ((!$coin_disabled)) {

                 // Get the coin abbreviation example Bitcoin (BTC), Ethereum (ETH)
                 $currency = $key;

                 // Form a currency pair with the abbreviation example BTC_ETH
                 $currencypair = "BTC_".$key;

                 //Get coin name
                 $coin_name = $coin['name'];



                 //Get current time in UNIX timestamp
                 $now = time();

                 //Go 20mins back
                 $then = $now - 1200;

                 //drop delisted coins


                 ?>


                 <div class="col-xs-6 col-sm-6 col-md-3 currency_tab">

                     <p>Name: <?=$coin_name;?>  (<?=$currency;?>)</p>
                     <p>Currency Pair: <?=$currencypair;?></p>
                     <p>Delisted: <?=$coin_delisted;?></p>
                     <p>Disabled: <?=$coin_disabled;?></p>


                 </div>


                 <?php

                  }

                }

               }

            ?>

         </div>

     </div>

  </body>
</html>
