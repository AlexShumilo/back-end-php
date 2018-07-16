<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 15.07.2018
 * Time: 11:15
 */

// работа на занятии 15.07.2018

// самостоятельная работа
/*$arr = [3, 2, 5, 14, 8, 9, 16];

function getSomeNumbers($array, $delimeter = true) {
    if ($delimeter == true) {
        foreach ($array as $key => $item) {
            if (!($item % 2)) {
                $newArray[] = $array[$key];
            }
        }
    } else {
        foreach ($array as $key => $item) {
            if ($item % 2) {
                $newArray[] = $array[$key];
            }
        }
    }
    return $newArray;
}
echo "<pre>";
(getSomeNumbers($arr));
echo "</pre><hr>"; */

// работа с формами

setcookie("name", "Alex"); // метод для установки параметра для куки
//var_dump($_COOKIE);

if (isset($_POST['send'])){
    echo "<pre>";
    print_r($_POST);
    print_r($_FILES);
    echo "</pre><hr>";

    if (isset($_FILES['file'])){
        move_uploaded_file($_FILES['file']['tmp_name'], "./saved/" . $_FILES['file']['name']);
    }
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
    <form action="" method="post" enctype="multipart/form-data">
        <p>Name: <input type="text" name="name" placeholder="Введите Ваше имя"></p>
        <p>Email: <input type="email" name="email" placeholder="Введите Ваш e-mail"></p>
        <p><input type="file" name="file"></p>
        <input type="submit" name="send" value="Отправить">

    </form>

</body>
</html>

