<?php
$name = 'Ivy';
$gretting = 'Welcome';
$stock = 5;
$stockb = 15;
$stockc = 35;
$message = "";
?>
<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!-- SWITCH -->
<h3>SWITCH</h3>
<?php
$day = 'Monday';
switch ($day) {
    case 'Monday':
        $offer = '20% off chocolates';
        break;

    case 'Tuesday':
        $offer = '10% off Candys';
        break;
    case 'Wednesday':
        $offer = '10% of cakes';
        break;
    default:
        $offer = '5% of cokies';
}
?>
<h4>The Cnady store offers every week day</h4>
<p>Offers of the day</p>
<p>Today is <?= $day ?>, and our offers is <?= $offer ?></p>
<h3>MATCH</h3>
<?php
$day = 'Thursday';

$offer = match($day) {
    'Monday'    =>'20% offers of chees',
    'Wednesday' =>'15% offers of chocolates',
    'Thursday'   => '5% offers of coffe',
    default     => 'No offer',
}
?>
<p>today is <?= $day ?>, our offer for today it is <?= $offer ?> </p>

</body>
</html>

