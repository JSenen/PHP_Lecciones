

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
</body>
</html>
