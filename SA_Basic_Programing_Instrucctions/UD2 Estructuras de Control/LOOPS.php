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
</body>
</html>
