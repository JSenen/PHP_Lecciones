<?php
function calculate_running_total($price, $quantity){
    $cost = $price * $quantity;
    $tax = $cost * (20/100);
    $total = $cost + $tax;
    return $total;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Functions Parameters</title>
</head>
<body>
<h1>THE CANDY STORE</h1>
<p>Mints: $<?= calculate_running_total(2,5) ?></p>
<p>Toffe: $<?= calculate_running_total(2,5) ?></p>
<p>Fudge: $<?= calculate_running_total(2,5) ?></p>


</body>
</html>
