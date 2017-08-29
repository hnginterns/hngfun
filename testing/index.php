<?php

require_once("vendor/autoload.php");

use poloniex\api\Poloniex;

// Returns ticker based BTC rate value in USD.
$tickerRate = Poloniex::getTickerBTCRate();
// Returns estimated (by order book) BTC rate value in USD.
$estimatedRate = Poloniex::getEstimatedBTCRate();


require 'index.view.php';

