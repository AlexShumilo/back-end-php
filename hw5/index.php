<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 22.07.2018
 * Time: 13:16
 */
/* Задача 1:
 Создайте переменную $name и присвойте ей строковое значение содержащее ваше имя
 Создайте переменную $age и присвойте ей числовое значение
 Выведите: Меня зовут: "ваше имя"
 Выведите: Мой "ваш возраст" лет*/

$name = 'Саша';
$age = 27;
echo "Меня зовут: $name<br> Мне $age лет <hr>";



/*Задача 2:
 Создайте константу и присвойте ей значение
 Проверьте существует ли константа.
 Выведите значение константы
 Попытайтесь изменить ее значение.
 */

const NUMBER = 145;
echo defined('NUMBER') . '<br>';
echo NUMBER . '<br>';
const NUMBER = 123; // переназначить константу не удастся
echo NUMBER . '<hr>';



/*Задача 3:
 Создайте переменную $age и присвойте ей значение
 - Напишите конструкцию if, которая выводит фразу:
 "Вам еще работать и работать" при условии что $age попадает в диапазон чисел от 18 до 59 (включительно)
 - Расширьте конструкцию if, выводя фразу: "Вам пора на пенсию" при условии, что $age больше 59
 - Если $age от 1 до 17 то выводите вам еще рано работать*/
$age = 27;
if ($age >= 18 && $age <= 59) {
    echo 'Вам ещё работать и работать' . '<hr>';
} elseif ($age > 59) {
    echo 'Вам пора на пенсию' . '<hr>';
} else {
    echo 'Вам ещё рано работать' . '<hr>';
}




/*Задача 4:
 Создайте переменную $day и присвойте ей числовое значение
 С помощью конструкции switch выведите фразу "Это рабочий день если $day от 1-5
 Если 6-7 "Это выходной день"
 Если переменная $day не попадает в диапазон выводить неизвестный день*/
$day = 6;
switch ($day) {
    case $day >= 1 && $day <=5:
        echo 'Это рабочий день' . '<hr>';
        break;
    case $day >= 6 && $day <= 7:
        echo 'Это выходной день' . '<hr>';
        break;
    case $day:
        echo 'Это неизвестный день' . '<hr>';
        break;
}




/*Задача 5:
 Вывести все числа, меньшие 10000, у которых есть хотя бы одна цифра 3 и которые не делятся на 5*/

$result = [];
for ($i = 0; $i <= 10000; $i++) {
    if ($i % 5 !== 0 && preg_match('/3/', $i)) {
        $result[] = $i;
    }
}
foreach ($result as $item) {
    echo $item . '; ';
}
echo '<hr>';




/*Задача 6:
 Использую куки выводите информацию о количестве посещений и дате последнего посещения.
!!!!!!!! Чтобы посмотреть результат, нужно закомментировать все предыдущие выводы на страницу*/

/**
 * Функция, которая с помощью записи в куки выводит информацию о количестве посещений и дате последнего посещения
 */
function setCookieLastVisitAndCount() {
    setcookie('lastVisit', date('Y-m-d в H:i:s'));
    $count = 1;
    if ($_COOKIE['lastVisit'] && $_COOKIE['counter']) {
        setcookie('counter', $_COOKIE['counter'] + 1);
        echo 'Дата последнего визита на страницу: ' . $_COOKIE['lastVisit'] . '<br>';
        echo 'Количество посещений: ' . $_COOKIE['counter'] . '<hr>';
    } else {
        setcookie('counter', $count);
        echo 'Вы впервые на странице! Добро пожаловать ;)';
    }
}
//setCookieLastVisitAndCount();




/*Задача 7:
 Создайте в сессии массив для хранения всех посещенных страниц.
 Выведите в цикле список всех посещенных страниц.
!!!!!!!! Чтобы посмотреть результат, нужно закомментировать все предыдущие выводы на страницу*/

/*session_start();
$_SESSION['history'][] = "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

echo '<pre>';
print_r($_SESSION);
echo '</pre>';*/




/*Задача 8:
 Создайте файл 'test.txt' и запишите в него массив ['name' => 'Your name', 'age' => 'Your age'].
 Считайте данные из файла 'test.txt' и выведите их на экран.*/
function putInfoToTestFile(string $name, int $age) {
    $array['name'] = $name;
    $array['age'] = $age;
    file_put_contents('test.txt', serialize($array));
}
putInfoToTestFile('Alex', 27);
$text = file_get_contents('test.txt');
print_r(unserialize($text));
echo '<hr>';




/* Задача 9:
 Даны два упорядоченных по возрастанию массива. Образовать из этих двух массивов единый упорядоченный по возрастанию массив.*/
$arr1 = [3, 4, 8, 12, 17, 25];
$arr2 = [1, 5, 9, 10, 15, 22];
$resultArray = array_merge($arr1, $arr2);
sort($resultArray);
echo '<pre>';
print_r($resultArray);
echo '</pre><hr>';




/*Задача 10:
 Написать функцию сортировки пузырьком, с возможностью доп. фильтрации результатов с помощью callback функции*/

/** Функция для сортировки массива пузырьком с коллбек-функцией
 * @param array $array входящий массив, который нужно отсортировать
 * @param callable|NULL $callback колл-бек функция для дополнительных действий с отсортированным массивом
 * @return array|mixed результат в виде массива, если нет коллбека
 */
function bubbleSort(array $array, callable $callback = NULL) {
    for ($i=0; $i < count($array); $i++) {
        for ($y=($i+1); $y < count($array); $y++) {
            if ($array[$i] > $array[$y]) {
                $c = $array[$i];
                $array[$i] = $array[$y];
                $array[$y] = $c;
            }
        }
    }
    if ($callback){
        $array = call_user_func($callback, $array);
    }
    return $array;
}

$arrayForSort = array(52, 21, 8, 39, 68, 15, 40, 11);
echo '<pre>';
print_r(bubbleSort($arrayForSort, function($arr) {
    foreach($arr as $key => $item) {
        $arr[$key] = $item + 1;
    }
    return $arr;
}));
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
<a href="page2.php">На вторую страницу</a>

</body>
</html>
