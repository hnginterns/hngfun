

<?php foreach($tickets as $ticket) : ?>

<li><?= $ticket['name'] ?></li>


$currencies = $poloniex->returnTradeHistory($ticket['name']);

echo $currencies;

<?php endforeach ?>
