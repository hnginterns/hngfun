<?php

    // This function fetches the static record in the database
    function fetchRecords () {
      $dsn = 'mysql:host=localhost;dbname=coins';
      $pdo = new PDO($dsn, 'root', '');
        $query = $pdo->prepare('SELECT * FROM previous ORDER BY current_buy DESC LIMIT 10');
        // $query = $pdo->prepare('SELECT * FROM previous ORDER BY buy DESC');
        if ($query->execute()) {
          $records = $query->fetchAll(PDO::FETCH_ASSOC);
          return $records;
        }
    }

    function selectTotalCurrentBuy()
    {

      $dsn = 'mysql:host=localhost;dbname=coins';
      $pdo = new PDO($dsn, 'root', '');
      $query = $pdo->prepare('SELECT current_buy, buy FROM previous');
      if ($query->execute()) {
        $records = $query->fetchAll(PDO::FETCH_ASSOC);
        return $records;
      }

    }

    function updatePercentageChange ($percentage_change, $currencypair)
    {
      $dsn = 'mysql:host=localhost;dbname=coins';
      $pdo = new PDO($dsn, 'root', '');
        $query = $pdo->prepare('UPDATE previous SET percentage_change = :percentage_change WHERE currencypair = :currencypair');
        $query->bindParam(':percentage_change' , $percentage_change);
        $query->bindParam(':currencypair' , $currencypair);
        if ($query->execute()) {
            return true;
        }else {
          return false;
        }
    }

     function ResetTableID ()
    {
      $dsn = 'mysql:host=localhost;dbname=coins';
      $pdo = new PDO($dsn, 'root', '');
      $query = $pdo->prepare('ALTER previous auto_increment = 1;');
      if ($query->execute()) {
          return true;
      }else {
        return false;
      }

    }

    function selectPastTime()
    {
      $dsn = 'mysql:host=localhost;dbname=coins';
      $pdo = new PDO($dsn, 'root', '');
      $query = $pdo->prepare('SELECT date_saved FROM current');
      if ($query->execute()) {
        $time = $query->fetchAll(PDO::FETCH_ASSOC);
        return $time;
      }
    }


    function fetchRecordsFromCurrent () {
      $dsn = 'mysql:host=localhost;dbname=coins';
      $pdo = new PDO($dsn, 'root', '');
        $query = $pdo->prepare('SELECT * FROM current ORDER BY buy DESC');
        if ($query->execute()) {
          $records = $query->fetchAll(PDO::FETCH_ASSOC);
          return $records;
        }
    }

    // This function inserts data into the current table after processing poloniex API
        function updateCurrentTable ($coin, $currencypair, $buy, $sell, $date_saved ) {
          $dsn = 'mysql:host=localhost;dbname=coins';
          $pdo = new PDO($dsn, 'root', '');
        $query = $pdo->prepare('INSERT into current (coin , currencypair, buy, sell, date_saved) values (:coin , :currencypair, :buy, :sell, :date_saved) ');
        $query->bindParam(':coin' , $coin);
        $query->bindParam(':currencypair' , $currencypair);
        $query->bindParam(':buy' , $buy);
        $query->bindParam(':sell' , $sell);
        $query->bindParam(':date_saved' , $date_saved);
        if ($query->execute()) {
          return true;
        }else {
          return false;
        }
    }

    // This function inserts data into the current table after processing poloniex API
        function updatePreviousTable ($coin, $currencypair, $buy, $sell, $date_saved ) {
          $dsn = 'mysql:host=localhost;dbname=coins';
          $pdo = new PDO($dsn, 'root', '');
          $query = $pdo->prepare('INSERT into previous (coin , currencypair, buy, sell, date_saved) values (:coin , :currencypair, :buy, :sell, :date_saved) ');
          $query->bindParam(':coin' , $coin);
          $query->bindParam(':currencypair' , $currencypair);
          $query->bindParam(':buy' , $buy);
          $query->bindParam(':sell' , $sell);
          $query->bindParam(':date_saved' , $date_saved);
          if ($query->execute()) {
            return true;
          }else {
            return false;
          }
    }

    function updateCurrentBuyInPreviousTable ($buy, $total_trade_volume, $currencypair)
    {
      $dsn = 'mysql:host=localhost;dbname=coins';
      $pdo = new PDO($dsn, 'root', '');
        $query = $pdo->prepare('UPDATE previous SET current_buy = :buy, total_trade_volume = :total_trade_volume WHERE currencypair = :currencypair');
        $query->bindParam(':buy' , $buy);
        $query->bindParam(':total_trade_volume' , $total_trade_volume);
        $query->bindParam(':currencypair' , $currencypair);
        if ($query->execute()) {
            return true;
        }else {
          return false;
        }
    }

    function deletePreviousRecords () {

      $dsn = 'mysql:host=localhost;dbname=coins';
      $pdo = new PDO($dsn, 'root', '');
      $query = $pdo->prepare('DELETE FROM previous');
      if ($query->execute()) {
          return true;
      }else {
        return false;
      }

    }

    function deleteCurrentRecords () {

      $dsn = 'mysql:host=localhost;dbname=coins';
      $pdo = new PDO($dsn, 'root', '');
      $query = $pdo->prepare('DELETE FROM current');
      if ($query->execute()) {
          return true;
      }else {
        return false;
      }

    }

   function redirect($location) {
        header("Location: " . $location);
        exit;
    }




 ?>
