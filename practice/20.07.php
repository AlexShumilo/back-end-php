<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 20.07.2018
 * Time: 18:00
 */

if (isset($_POST['send'])) {
    $requestData = [
        'name' => $_POST['name'],
        'message' => $_POST['message']
    ];
    $data[] = $requestData;
    $filePath = 'counter.txt';
    $fileData = file_get_contents($filePath);

    file_put_contents($filePath, serialize($data));


    header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . "/practice/20.07.php");
}

$myfile = fopen('counter.txt', 'r');
$messages = fread($myfile, filesize('counter.txt'));
fclose($myfile);

$arrayMessages = unserialize($messages);

echo "<p>Ваше сообщение следующее: " . "<br>" . "Имя: " . $arrayMessages['name'] . "<br> Сообщение: " .
    $arrayMessages['message'] . "</p>";

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
    <form action="" method="post">
        <p>Ваше имя: <input type="text" name="name"></p>
        <p>Ваше сообщение: <input type="text" name="message"></p>
        <p><input type="submit" name="send" value="Отправить"></p>
    </form>
</body>
</html>
