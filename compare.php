<?php
$d1Item1Price = filter_input(INPUT_POST, 'd1price1');
$d1Item2Price = filter_input(INPUT_POST, 'd1price2');
$d1Item1 = filter_input(INPUT_POST, 'd1item1');
$d1Item2 = filter_input(INPUT_POST, 'd1item2');
$d1Discount = filter_input(INPUT_POST, 'discount');

$d1TotalPrice = $d1Item1Price * $d1Item1 + $d1Item2Price * $d1Item2;
$d1TotalPriceF = number_format($d1TotalPrice, 2);
$d1DiscountAmount = $d1Item2Price * $d1Item2 * $d1Discount / 100;
$d1DiscountAmountF = number_format($d1DiscountAmount, 2);
$d1Percent = $d1DiscountAmount / $d1TotalPrice * 100;
$d1PercentF = number_format($d1Percent, 2);
$d1Each = ($d1TotalPrice - $d1DiscountAmount) / ($d1Item1 + $d1Item2);
$d1EachF = number_format($d1Each, 2);


$d2TotalPrice = filter_input(INPUT_POST, 'd2price');
$d2TotalPriceF = number_format($d2TotalPrice, 2);
$d2Percent = filter_input(INPUT_POST, 'd2percent');
$d2PercentF = number_format($d2Percent, 2);
$d2DiscountAmount = $d2TotalPrice * $d2Percent / 100;
$d2DiscountAmountF = number_format($d2DiscountAmount, 2);
$d2Each = ($d2TotalPrice - $d2DiscountAmount) / ($d1Item1 + $d1Item2);
$d2EachF = number_format($d2Each, 2);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Compare Deals</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
</head>
<body>
    <main>
    <div>
        <h3>First Deal</h3>
        <p><?php echo "Total Price before discount: $" . htmlspecialchars($d1TotalPriceF) ?></p>
        <p><?php echo "Discount Amount: $" . htmlspecialchars($d1DiscountAmountF) ?></p>
        <p><?php echo "You paid $" . htmlspecialchars($d1EachF) . " for each item." ?></p>
        <p><?php echo "You got " . htmlspecialchars($d1PercentF) . "% off on this deal."?></p>
    </div>
    <div>
        <h3>Second Deal</h3>
        <p><?php echo "Total Price before discount: $" . htmlspecialchars($d2TotalPriceF) ?></p>
        <p><?php echo "Discount Amount: $" . htmlspecialchars($d2DiscountAmountF) ?></p>
        <p><?php echo "You paid $" . htmlspecialchars($d2EachF) . " for each item." ?></p>
        <p><?php echo "You got " . htmlspecialchars($d2PercentF) . "% off on this deal."?></p>
    </div>
    </main>
</body>
</html>