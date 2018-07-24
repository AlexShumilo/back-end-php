<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 18.07.2018
 * Time: 18:21
 */

$array = [1, 2, 3, -4, 5, -6];

$result = array_filter($array, function ($item) {
    if ($item > 0 && !($item % 2)) {
        return true;
    }
});

array_walk($array, function (&$value){
    $value += 10;
});
var_dump($array);


// Ниже - самостоятельное написание array_filter

echo '<pre>';
print_r(getPositiveNumbers($array, function($items) {
    $result = [];
    foreach ($items as $item) {
        if (!($item % 2)) {
            $result[] = $item;
        }
    }
    return $result;
}));
echo '</pre>';


function getPositiveNumbers(array $array, callable $callback = NULL) {
    $result = [];
    foreach ($array as $value) {
        if ($value > 0) {
            $result[] = $value;
        }
    }
    if ($callback){
        $result = call_user_func($callback, $result);
    }
    return $result;
};

// Самостоятельная работа
$array = ['Vadim', 'Max']; // Изменить значения каждого элемента массива на 'Hello Vadim' и 'Hello Max'
array_walk($array, function (&$value){
    $value = 'Hello ' . $value;
});
var_dump($array);

$array = [1, 5, 7, 8, -9, 3]; //Отформатировать массив: если элемент больше 3 и нечётный
$result = array_filter($array, function ($value){
    if ($value > 3 && $value % 2) {
       return true;
    }
});
echo '<pre>';
print_r($result);
echo '</pre>';

?>