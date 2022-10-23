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
    <title>Chapter 2</title>
</head>
<body>
<!-- IF --->
<h3>IF</h3>
<p>El stock es <?= $stock ?> . Condicion que sea mayor de 5</p>
<?php if ($stock > 5){
    $message = " El Stock es mayor";
}
?>
<p><?= $message ?> </p>
<!-- IF.. ELSE --->
<h3>IF .. ELSE</h3>
<p>El stock es <?= $stock ?> . Condicion que sea mayor de 5</p>
<?php if ($stock > 5){
    $message = " El Stock es mayor de 5";
}else {
    $message =" El stock es menor";
}
?>
<p><?= $message ?> </p>
<!-- IF ELSEIF --->
<h3>IF .. ELSEIF</h3>
<p>El stock es <?= $stock ?> . Condicion que sea mayor de 5 o mayor de 10</p>
<?php if ($stock > 5){
    $message = " El Stock es mayor de 5";
}elseif ($stock > 10) {
    $message =" El stock es mayor de 10";
}elseif ($stock < 5 ){
    $message =" El stock es menor de 5";
}
?>
<p><?= $message ?> </p>

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
<!-- LOOPS -->
<h3>WHILE LOOPS</h3>
<?php
$counter = 1;
$pack = 5;
$price = 1.99;
?>
<p>Price for Multiple Packs</p>
<p>
    <?php
    while ($counter <= $pack){
        echo $counter;
        echo ' packs cost $';
        echo $price * $counter;
        echo '<br>';
        $counter++;
    }
    ?>
</p>
<!-- DO WHILE -->
<h3>DO WHILE</h3>
<?php
$pack = 5;
$price = 1.99;
?>
<p>Price for Multiple Packs</p>
<p>
    <?php
    do {
        echo $pack;
        echo ' packs cost $';
        echo $price * $pack;
        echo '<br>';
        $pack--;
    } while($pack > 0);

    ?>
</p>
<!-- FOR LOOPS -->
<h3>FOR LOOPS</h3>
<?php
$price = 1.99;
?>
<p>Price for large Orders</p>
<?php
for($i = 0; $i <=100; $i = $i + 10){
    echo $i;
    echo ' pack cost $';
    echo $price * $i;
    echo '<br>';
}
?>
<!-- FOREACH-->
<h3>FOREACH LOOPS</h3>
<?php
$products = [
        'Toffe' => 2.99,
        'Mints' => 1.99,
        'Fudge' => 3.49,
];
?>
<p>Price List</p>
<table>
    <tr>
        <th>Item</th>
        <th>Price</th>
    </tr>
    <?php
    foreach ($products as $item => $price) { ?>
    <tr>
        <td><?= $item ?></td>
        <td><?= $price ?></td>
    </tr>
    <?php } ?>

</table>

<!-- INCLUDE FILES-->
<h3>INCLUDE FILES</h3>
<?php include 'includes/header.php'; ?>
<h3>The Candy Store</h3>
<h3>Welcome</h3>
</body>
</html>
