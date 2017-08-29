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
  
  $t = time();
  
  //$tickers = $poloniex->returnTradeHistory($name, $t, $t);
 echo $t;
  
  
}

//var_dump($tickers);

//require 'index.view.php';
