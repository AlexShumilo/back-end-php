<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 15.07.2018
 * Time: 13:13
 */
include '../logic.php';
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
<form action="result.php" method="post">
    <input type="hidden" name="testID" value="4">
    <input type="hidden" name="questionNumber" value="3">
    <p>2 + 5 = ?</p>
    <input type="text" name="answer">
    <input type="submit" name="send" value="Next">
</form>
</body>
</html>
