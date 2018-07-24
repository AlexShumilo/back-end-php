<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 18.07.2018
 * Time: 22:41
 */

// Сделайте функцию, которая принимает параметром число от 1 до 7, а возвращает день недели на русском языке.
function dayToday($day) {
    $week = ['1' => 'Понедельник',
        '2' => 'Вторник',
        '3' => 'Среда',
        '4' => 'Четверг',
        '5' => 'Пятница',
        '6' => 'Суббота',
        '7' => 'Воскресенье'];
    foreach ($week as $key => $item) {
        if ($key == $day) {
            echo 'Выбранный день недели - ' . $item;
        }
    }
}
echo dayToday(7) . '<hr>';

//Дан многомерный массив (см. его под задачей). С помощью цикла выведите строки в формате 'имя-зарплата'
$arr = [
    ['name'=>'Коля', 'salary'=>300],
    ['name'=>'Вася', 'salary'=>400],
    ['name'=>'Петя', 'salary'=>500]
];
foreach ($arr as $item) {
    echo $item['name'] . ' - ' . $item['salary'] . '<br>';
}
echo '<hr>';

echo strtotime('2025-12-31') . '<hr>';





?>
<form action="" method="get"></form>
