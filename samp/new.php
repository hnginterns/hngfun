

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

                // $coins = file_get_contents('coins.json');
                $coins = file_get_contents('https://poloniex.com/public?command=returnCurrencies');
                $coins = json_decode($coins);
                $coins = json_decode(json_encode($coins) , TRUE);

                foreach ($coins as $key => $value) {
                  $currency = $key;
                  $currencypair = "BTC_".$key;
                  $coin_id = $value['id'];
                  $coin_name = $value['name'];

                      // $trade = file_get_contents('trade.json');
                      $trade = file_get_contents("https://poloniex.com/public?command=returnTradeHistory&currencyPair=$currencypair&start=1504008000&end=1504009200");
                      $trade = json_decode($trade);
                      $trade = json_decode(json_encode($trade) , TRUE);

                      $trade_buy = 0;
                      $trade_sell = 0;
                      foreach ($trade as $key => $value) {
                          if ($value['type'] == "buy") {
                            $trade_buy = $trade_buy + 1;
                          }elseif ($value['type'] == "sell") {
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
