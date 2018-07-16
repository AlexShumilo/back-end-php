<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 15.07.2018
 * Time: 13:18
 */
include '../logic.php';


$correctAnswers = [
    'test_4' => [4, 9, 7]
];
echo '<pre>';
var_dump($testID);
echo '</pre>';
$userAnswers = $_SESSION["test_{$_POST['testID']}"];


if (!array_diff($userAnswers, $correctAnswers["test_{$testID}"])) {
    echo 'Тест пройден';
} else {
    echo 'Тест не пройден';
}
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


</body>
</html>
