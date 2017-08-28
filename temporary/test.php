<?php

    // require 'Poloniex.php';
    //
    // $poloniex = new Poloniex;

    // $homepage = $poloniex->curl_get_file_contents('http://poloniex.com/public?command=returnTicker');

    $homepage = file_get_contents('http://poloniex.com/public?command=returnTicker');
    echo $homepage;

    // echo "Test";


?>
