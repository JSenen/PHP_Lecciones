<?php
$us_price = 4;

$rates = [
    'uk' => 0.81,
    'eu' => 0.93,
    'jp' => 113.21
];

function calculate_prices($usd, $exchange_rates){
    $prices = [
        'pound' => $usd * $exchange_rates['uk'],
        'euro' => $usd * $exchange_rates['eu'],
        'yen' => $usd * $exchange_rates['jp'],
    ];
    return $prices;
}
$global_prices = calculate_prices($us_price, $rates);
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
<h2>CHOCOLATE</h2>
<p>US $<?= $global_prices['pound'] ?></p>
<p>EUR $<?= $global_prices['euro'] ?></p>
<p>YEN $<?= $global_prices['yen'] ?></p>
</body>
</html>
