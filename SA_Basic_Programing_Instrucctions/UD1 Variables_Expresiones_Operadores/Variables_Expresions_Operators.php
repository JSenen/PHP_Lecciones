<?php
$name = 'Juan';
$price = 5;
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>U1 - Variables - Expresiones - Operadores</title>
</head>
<body>
<h3>Variables</h3>
<p>Tu nombre es <?php echo $name; ?></p>
<p>El precio es <?php echo $price; ?></p>
<h3>Updating variables value</h3>
<?php $name = 'Jose'; ?>
<p>Se a actualizado la variable $name a <?php echo $name ?></p>
</body>
</html>


