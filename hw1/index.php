<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 11.07.2018
 * Time: 13:48
 */

// Задание №1 с добавлением комментариев
/*
 * Второй многострочный комментарий
 *
 *
 */

// Задание №2;
$chanelName = 'Name';
$developerAdress = 'Adress';
$carColor = 'color';
$waterTemp = 'degree';
$phoneModel = 'model';

echo "Задание №3 <br>";
$one = 3;
$two = 5;
$three = 8;
echo $one . ' ' . $two . ' ' . $three . "<br>";
$sum = $one + $two + $three;
echo $sum . "<br>";
$result = 2+6+2/5-1;
echo $result . "<br>";
echo "<hr>";

echo "Задание №4 <br>";
$a = 1;
$b = 2;
echo $a . " " . $b . "<br>";
$c = $a;
$d = &$b;
echo $c . " " . $d . "<br>";
$a = 3;
$b = 4;
echo $a . " " . $b. " " .$c . " " . $d . "<br>";
echo "<hr>";

echo "Задание №5 <br>";
const FIRST = 41;
const SECOND = 38;
echo FIRST + SECOND . "<br>";
echo "<hr>";

echo "Задание №6 <br>";
$array = [152, '152', 'London', array(152), 15.2, false, true];
foreach ($array as $element) {
    echo gettype($element) . "<br>";
}
echo "<hr>";

echo "Задание №7 <br>";
$a = 10;
$b = 5;
echo "$b из {$a}ти студентов посетили лекцию <br>";
echo $b . ' из ' . $a . 'ти студентов посетили лекцию' . '<br>';
echo "<hr>";

echo "Задание №8 <br>";
$nice = "Доброе утро";
$lady = "дамы";
$men = "и господа";
echo $nice . ', ' . $lady . ' ' . $men . "<br>";
echo "<hr>";

echo "Задание №9 <br>";
$array1 = [5, 4, 23, 17, 9];
$array2 = [8, 14, 3, 29, 11];
$array1['element'] = 77;
unset($array2[0]);
echo $array1[2] . ' ' . $array2[2] . "<br>";
echo 'Массив $array1: ';
    foreach ($array1 as $item) {
        echo $item . " ";
    }
echo "<br>";
echo 'Массив $array2: ';
    foreach ($array2 as $item) {
        echo $item . " ";
    }
echo "<br>";
echo 'В массиве $array1 ' . count($array1) . ' элементов';
echo "<br>";
echo 'В массиве $array2 ' . count($array2) . ' элементов';
echo "<hr>";

echo "Задание №10 <br>";
const MIN = 10;
const MAX = 50;
$x = 20;
    if ($x > MIN && $x < MAX) {
        echo '+';
    } elseif ($x = MIN || $x = MAX) {
        echo '+-';
    } else {
        echo '-';
    }


// работа на занятии

$array = [1, 2, 'name' => 'Alex', 4, 5, 6];
/*for ($i = 0; $i < count($array); $i++) {
    echo $array[$i];
    echo '<br>';
}*/

/*foreach ($array as $key => $value) {
    echo "Key: $key; Value: $value </br>";
}*/

//echo myPow (5, 2);
/**
 * Функция для возведения числа в степень
 *
 * @param int $num Число, которое мы возводим в степень
 * @param int $degree Степень, в которую возводим число
 * @return int
 */
function myPow (int $num, $degree = 2) {
    $result = $num ** $degree;
    return $result;
}