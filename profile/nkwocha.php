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
               $coins = file_get_contents('https://poloniex.com/public?command=returnCurrencies');

               // Convert JSOn resource to object
               $coins = json_decode($coins);

               // Convert object to array
               $coins = json_decode(json_encode($coins) , TRUE);

               // Loop through coins array to get details for each coin
               foreach ($coins as $key => $coin) {

                 // Get the coin abbreviation example Bitcoin (BTC), Ethereum (ETH)
                 $currency = $key;

                 // Form a currency pair with the abbreviation example BTC_ETH
                 $currencypair = "BTC_".$key;

                 //Get coin name
                 $coin_name = $coin['name'];

                 /**
                 **  Call the poloniex API to get all trade history for the currency pair
                 **
                 **/
                 $trades = file_get_contents("https://poloniex.com/public?command=returnTradeHistory&currencyPair=$currencypair&start=1504008000&end=1504009200");

                 // Convert JSOn resource to object
                 $trades = json_decode($trades);

                 // Convert object to array
                 $trades = json_decode(json_encode($trades) , TRUE);

                 // Initialize trade buy and trade sell
                 $trade_buy = 0;
                 $trade_sell = 0;

                 // Loop through trade history to get details for each currency pair
                 foreach ($trades as $key => $trade) {

                     // Check if the type of trade done is a buy or a sell
                     if ($trade['type'] == "buy") {

                       // if trade is buy increment trade_buy
                       $trade_buy = $trade_buy + 1;

                     }elseif ($trade['type'] == "sell") {

                       // if trade is sell increment trade_sell
                       $trade_sell = $trade_sell + 1;

                     }

                 }
                 ?>


                 <div class="col-md-3 currency_tab">

                     <p>Name: <?=$coin_name;?>  (<?=$currency;?>)</p>
                     <p>Currency Pair: <?=$currencypair;?></p>
                     <p>Total no of buy: <?=$trade_buy;?> </p>
                     <p>Total no of sell: <?=$trade_sell;?> </p>

                 </div>


                 <?php
               }

            ?>

         </div>

     </div>

  </body>
</html>
