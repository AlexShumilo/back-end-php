<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 22.07.2018
 * Time: 14:42
 */
session_start();


    $_SESSION['history'][] = "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];


echo '<pre>';
print_r($_SESSION);
echo '</pre>';
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
<a href="index.php">На главную</a>

</body>
</html>
