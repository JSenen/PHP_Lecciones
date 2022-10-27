<?php $member = [
    'name' => 'Ivy',
    'age' => 16,
    'country' => 'Italy'
];
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
<h3>Associative Arrays</h3>
<p>Give each element (or item) in the array a <strong>key</strong> that describes the data item</p>

<p>Array Member</p>
<p>Name <?php echo $member['name']; ?></p>
<p>Age <?php echo $member['age']; ?></p>
<p>Country <?php echo $member['country']; ?></p>
<h3>Indexed Arrays</h3>
<p>An array it's vreated, if a key is not provided </p>
<?php $shopping_list = ['bread','cheese','milk']; ?>
<p>Array indexed "Shopping list"</p>
<ul>
    <li><?php echo $shopping_list[0] ?></li>
    <li><?php echo $shopping_list[1] ?></li>
    <li><?php echo $shopping_list[2] ?></li>
</ul>
<h3>Storing Arrays into Array</h3>
<?php $offers = [
    ['name' => 'Toffee','price' => 5,'stock' => 120],
    ['name' => 'Mints','price' => 15,'stock' => 45],
    ['name' => 'Fudge','price' => 7,'stock' => 34],
];
?>
<p>Offers</p>
<p><?php echo $offers[0]['name']; ?> -$ <?php echo $offers[0]['price']; ?></p>
<p><?php echo $offers[1]['name']; ?> -$ <?php echo $offers[1]['price']; ?></p>
<p><?php echo $offers[2]['name']; ?> -$ <?php echo $offers[2]['price']; ?></p>


</body>
</html>

</body>
</html>
