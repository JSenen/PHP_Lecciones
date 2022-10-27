<?php
function write_logo(){
    echo '<img src="" alt="">';
}
function write_copyright_notice(){
    $year = date('Y');
    echo '&copy: '.$year;

}
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
<h1><?php write_logo(); ?></h1>
<h2>Welcome to Candy store</h2>
<footer>
    <?php write_logo();?>
    <?php write_copyright_notice();?>
</footer>
</body>
</html>
