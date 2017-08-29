<?php

require_once("vendor/autoload.php");
use poloniex\api\PoloniexAPIPublic;
use poloniex\api\Poloniex;
// Static call
$ticket = PoloniexAPIPublic::returnTicker();
// Dynamic call
$poloniex = new Poloniex();
$tickets = $poloniex->returnCurrencies();

foreach ($tickets as $ticket) {
  $name = "BTC_".$ticket['name'];
  
//$tickers = $poloniex->returnTradeHistory($name, time(), time());
 var_dump($name);
  
  
}

//var_dump($tickers);

//require 'index.view.php';
