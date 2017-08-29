<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Popular Cryptocurrencies</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src="js/script.js"></script>
</head>

<body>
    <div id="banner">
        <img src="coin.svg" id="icon" width="32" height="32">
        <p> WILDFIRE</p>
    </div>
    <h2 id="heading">Most Popular Cryptocurrencies</h2>
    <h5>Sorted by popularity, in descending order</h5>
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

              $coin_delisted = $coin['delisted'];

              $coin_disabled = $coin['disabled'];

              $i = 1;

              // drop delisted coins
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

              //Go 24hrs back
              $then = $now - 86400;

              /**
              **  Call the poloniex API to get all trade history for the currency pair
              **
              **/
              $trades = file_get_contents("https://poloniex.com/public?command=returnTradeHistory&currencyPair=$currencypair&start=$then&end=$now");

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

              <div id="one" class="currency">
                  <div><p><?=$i;?></p><p class="currency-name"><?=$coin_name;?>  (<?=$currency;?>)</p></div>
                  <p class="bought">Total no of buy: <?=$trade_buy;?></p>
                  <p class="sold">Total no of sell: <?=$trade_sell;?></p>
                  <p class="status"><span class="fa fa-arrow-up"></span> 0.05%</p>
              </div>

              <div id="mobile-and-tablet">
                  <div id="one" class="currency">
                    <div><p><?=$i;?></p><p class="currency-name"><?=$coin_name;?>  (<?=$currency;?>)</p></div>
                    <p class="bought">Total no of buy: <?=$trade_buy;?></p>
                    <p class="sold">Total no of sell: <?=$trade_sell;?></p>
                    <p class="status"><span class="fa fa-arrow-up"></span> 0.05%</p>
                  </div>
              </div>


              <?php
                }

              }

              $i++;

            }

         ?>

      </div>

    </div>

     <!--<div id="observations">
        <h4>Trade observations</h4>
        <ul>
            <li class="observation">Etherum is the most sold coin</li>
            <li class="observation">Kobo is declining in popularity</li>
            <li class="observation">Observation 3</li>
            <li class="observation">Observation 4</li>
        </ul>
    </div> -->
<div style="text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;"><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&amp;utm_campaign=000_logo&amp;utm_medium=website_teamwildfire&amp;utm_content=footer_img"><img src="https://cloud.githubusercontent.com/assets/23024110/20663010/9968df22-b55e-11e6-941d-edbc894c2b78.png" alt="www.000webhost.com"></a></div>

</body></html>
