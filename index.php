<?php
$buyOneItemPrice = filter_input(INPUT_POST, 'buyoneprice');
$buyOneItemPrice2 = filter_input(INPUT_POST, 'buysecondprice');
$buyOneItems = filter_input(INPUT_POST, 'itembought');
$buyOneItemDeal = filter_input(INPUT_POST, 'getthisdeal');
$buyOneDiscount = filter_input(INPUT_POST, 'discount');
$firstDeal = 100 - ($buyOneItemPrice * $buyOneItems + ($buyOneItemPrice2 * $buyOneItemDeal * $buyOneDiscount / 100)) / ($buyOneItemPrice * $buyOneItems + $buyOneItemPrice2 * $buyOneItemDeal) * 100;
$buyOneSavings = ($buyOneItemPrice * $buyOneItems + $buyOneItemPrice2 * $buyOneItemDeal) * $firstDeal / 100;
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Compare Deals</title>
    </head>
    <body>
        <p><?php echo $buyOneItemPrice ?></p>
        <p><?php echo $buyOneItems ?></p>
        <p><?php echo $buyOneItemDeal ?></p>
        <p><?php echo $buyOneDiscount ?></p>
        <p><?php echo $firstDeal . " percent off."?></p>
        <p><?php echo "You save " . $buyOneSavings ?></p>
    </body>
</html>