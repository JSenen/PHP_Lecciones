<?php
$tax_rate = 0.2; //Variable GLOBAL

function calculate_running_total($price, $quantity){
    global $tax_rate; //Recupera la clave global
    static $running_total = 0;
    $total = $price * $quantity;
    $tax = $total * $tax_rate;
    $running_total = $running_total + $total + $tax;
    return $running_total;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <th>Item</th><th>Price</th><th>Qty</th><th>Running Total</th>
    </tr>
    <tr>
        <td>Mints $</td><td>$2</td><td>5</td>
        <td>$<?= calculate_running_total(2,5); ?></td>
    </tr>
    <tr>
        <td>Toffe $</td><td>$3</td><td>5</td>
        <td>$<?= calculate_running_total(2,5); ?></td>
    </tr>
    <tr>
        <td>Fudge $</td><td>$5</td><td>4</td>
        <td>$<?= calculate_running_total(5,4); ?></td>
    </tr>

</table>
</body>
</html>
