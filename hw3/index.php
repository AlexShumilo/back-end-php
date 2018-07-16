<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 16.07.2018
 * Time: 22:10
 */

// Дана строка 'HelloWorld'. Сделайте из нее строку 'HELLOWORLD'
$str = 'HelloWorld';
$str = strtoupper($str);
echo $str . '<hr>';

//В переменной $date лежит дата в формате '23-11-2035'. Преобразуйте эту дату в формат '2035.11.'
$date = '23-11-2035';
$date = implode(array_reverse(explode('-', $date)), '.');
echo $date . '<hr>';

//Дана строка 'html css php'. Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'
$str = 'html css php';
$strArr = explode(' ', $str);
foreach ($strArr as $item) {
    echo $item . '<br>';
}
echo '<hr>';

// Дана строка '30.11.2016'. Замените все точки на дефисы
$str = '30.11.2016';
$str = str_replace('.', '-', $str);
echo $str . '<hr>';

//Дана строка 'слова слова слова.'. В конце этой строки может быть точка, а может и не быть.
//Сделайте так, чтобы в конце этой строки гарантировано стояла точка. То есть: если этой точки нет - ее надо добавить,
//а если есть - ничего не делать. Задачу решите без всяких ифов
$str ='слова слова слова.';
$str = rtrim($str) . '.';
$str = str_replace('..', '.', $str);
echo $str . '<hr>';

//Создайте массив, заполненный числами от 1 до 100. Найдите сумму элементов данного массива. (Повторяю использовать функции)
function arraySum() {
    $arr = [];
    for ($i = 1; $i <= 100; $i++) {
        $arr[] = $i;
    }
    foreach ($arr as $item) {
        $sum += $item;
    }
    return $sum;
}
echo arraySum() . '<hr>';

//Дан массив с числами. Проверьте, что в нем есть элемент со значением 3
$arr = [5, 6, 9, 3, 25, 17];
foreach ($arr as $item) {
    if ($item == 3) {
        echo 'Найдено 3!';
    }
}
echo '<hr>';

// Даны два массива: первый с элементами 1, 2, 3, второй с элементами 'a', 'b', 'c'.
// Сделайте из них массив с элементами 1, 2, 3, 'a', 'b', 'c'.
$numbersArray = [1, 2, 3];
$wordsArray = ['a', 'b', 'c'];
$finalArray = array_merge($numbersArray, $wordsArray);
print_r($finalArray);
echo '<hr>';

//Дан массив 'a'=>1, 'b'=>2, 'c'=>3'. Запишите в массив $keys ключи из этого массива, а в $values – значения.
$assArray = ['a'=>1, 'b'=>2, 'c'=>3];
foreach ($assArray as $key => $val) {
    $keys[] = $key;
    $values[] = $val;
}
print_r($keys);
echo '<br>';
print_r($values);
echo '<hr>';

//Дан массив с элементами 'a', 'b', 'c', 'b', 'a'. Удалите из него повторяющиеся элементы
$arr = ['a', 'b', 'c', 'b', 'a'];
$arr = array_unique($arr);
print_r($arr);
?>