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
</body>
</html>


