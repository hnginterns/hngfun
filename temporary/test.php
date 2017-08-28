<?php

    // $homepage = $poloniex->curl_get_file_contents('http://poloniex.com/public?command=returnTicker');

    // $homepage = file_get_contents('http://poloniex.com/public?command=returnTicker');

    require 'Poloniex.php';

    $poloniex = new Poloniex;

    $currency = "all";

    $homepage = $poloniex->returnOrderBook($currency);

    $homepage = json_decode($homepage);

    echo "<pre>";

    var_dump($homepage);

    // echo "Test";


?>
