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
<h3>MATCH</h3>

</body>
</html>
