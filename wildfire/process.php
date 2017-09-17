<?php
    ob_start();
    /**
    **  Algorithm for this page
    **  Delete records in previous table
    **  Fetch records in current table
    **  Move records from current table to previous table
    **  Delete records in current table
    **  Process POloniex API
    **  Save processed data in current table
    **/

    require_once 'function/function.php';

    // Lets Delete all records in the previous table
    deletePreviousRecords();

   // Reset table ID
    ResetTableID ();

    // Lets fetch records from current so we can move it to the previous table
    $records = fetchRecordsFromCurrent ();

    foreach ($records as $key => $record) {

        $coin = $record['coin'];
        $currencypair = $record['currencypair'];
        $buy = $record['buy'];
        $sell = $record['sell'];
        $date_saved = $record['date_saved'];

        // We can now move the records from current table to previous table to enable us delete all record in current table
        $update_previous_table = updatePreviousTable ($coin, $currencypair, $buy, $sell, $date_saved );

    }

    if ($update_previous_table) {

        // Lets Delete all records in the current table since we have moved them to the previous table
        deleteCurrentRecords ();

        /**
        **  Call the poloniex API to get all coins available
        **
        **/
        $coins = file_get_contents('https://poloniex.com/public?command=returnCurrencies');

        // Convert JSOn resource to object
        $coins = json_decode($coins);

        // Convert object to array
        $coins = json_decode(json_encode($coins) , TRUE);

        //Get current time in UNIX timestamp
        $now = time();

        //Lets go back 5mins
        $then = $now - 300;

        // Loop through coins array to get details for each coin
        foreach ($coins as $key => $coin) {

          $coin_delisted = $coin['delisted'];

          $coin_disabled = $coin['disabled'];

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

                $total_volume += $trade_buy;
                $update_current_table = updateCurrentTable ($coin_name, $currency, $trade_sell, $trade_buy, $now);
                $update_current_buy = updateCurrentBuyInPreviousTable ($trade_sell, $total_volume, $currency);

            }

          }

        }

    }else {

      echo "string";

    }



    redirect('index.php');

?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Popular Cryptocurrencies</title>
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/main.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
     <!-- <script src="js/jquery-3.2.1.min.js"></script>
     <script src="js/script.js"></script> -->
 </head>

 <body>
     <div id="banner">
         <img src="img/coin.svg" id="icon" width="32" height="32">
         <p> WILDFIRE</p>
     </div>

     <h2 id="heading">Most Popular Cryptocurrencies for the past 24hrs</h2>
     <h5>Sorted by popularity, in descending order</h5>

     <div class="container">

        <div class="row">

          <div id="banner1">

              <h4 class="text-center"><img src="img/coin.svg" id="icon" width="32" height="32">Hang on... While we process the data</h4>
          </div>

        </div>

     </div>


 </body></html>
