<?php

require_once("vendor/autoload.php");
use poloniex\api\PoloniexAPIPublic;
use poloniex\api\Poloniex;
// Static call
$ticket = PoloniexAPIPublic::returnTicker();
// Dynamic call
$poloniex = new Poloniex();
$tickets = $poloniex->return24Volume();

var_dump($tickets);

require 'index.view.php';
