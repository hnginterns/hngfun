<?php

require_once("vendor/autoload.php");
use poloniex\api\PoloniexAPIPublic;
use poloniex\api\Poloniex;
// Static call
$tickets = PoloniexAPIPublic::returnTicker();
// Dynamic call
$poloniex = new Poloniex();
$ticket = $poloniex->returnTicker();

require 'index.view.php';
