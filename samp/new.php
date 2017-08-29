

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="bootstrap.min.css">
     <link rel="stylesheet" href="main.css">
   </head>
   <body>

      <div class="container">

          <div class="row">

            <?php

                // $homepage = file_get_contents('coins.json');
                $homepage = file_get_contents('https://poloniex.com/public?command=returnCurrencies');
                $homepage = json_decode($homepage);
                $homepage = json_decode(json_encode($homepage) , TRUE);

                foreach ($homepage as $key => $value) {
                  $currency = $key;
                  $currencypair = "BTC_".$key;
                  $coin_id = $value['id'];
                  $coin_name = $value['name'];

                  ?>

                      <div class="col-md-3 currency_tab">

                          <p>Name: <?=$coin_name;?>  (<?=$currency;?>)</p>
                          <p>Currency Pair: <?=$currencypair;?></p>




                      </div>

                  <?php
                }

             ?>

          </div>

      </div>

   </body>
 </html>
