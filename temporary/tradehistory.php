<?php

    // $homepage = $poloniex->curl_get_file_contents('http://poloniex.com/public?command=returnTicker');

    $homepage = file_get_contents('https://poloniex.com/public?command=returnTradeHistory&currencyPair=all&start=1410158341&end=1410499372');

    // require 'Poloniex.php';
    //
    // $poloniex = new Poloniex;
    //
    // $currency = "BTC_NXT";
    //
    // $homepage = $poloniex->returnOrderBook($currency);

    $homepage = json_decode($homepage);

    echo "<pre>";

    print_r($homepage);



    // echo "Test";


?>
