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

</body>
</html>
