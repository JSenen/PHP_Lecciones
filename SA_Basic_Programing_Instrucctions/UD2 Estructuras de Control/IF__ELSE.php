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
</body>
</html>

