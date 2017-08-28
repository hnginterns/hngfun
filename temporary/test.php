<?php

    require 'Poloniex.php';

    $poloniex = new Poloniex;

    // $data = $poloniex->get_ticker();
    //
    // echo $data;

    $homepage = $poloniex->curl_get_file_contents('http://poloniex.com/public?command=returnTicker');

    // $homepage = file_get_contents('http://poloniex.com/public?command=returnTicker');
    echo $homepage;


?>
