<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 12.07.2018
 * Time: 21:44
 */

echo '<p>Задание №1</p>';
$products = [
    ['name' => 'Телевизор',
     'price' => '400',
     'quantity' => 1],

    ['name' => 'Телефон',
     'price' => '300',
     'quantity' => 3],

    ['name' => 'Кроссовки',
     'price' => '150',
     'quantity' => 2]
];

/**
 * Функция, которая возвращает общую стоимость и общее количество товаров из корзины
 * @param $order Многомерный массив: первый уровень - индексы, второй уровень - ключи
 * @return string Строка с результатами подсчёта
 */
function getBasketInfo($order) {
    $finalPrice = 0;
    $finalQuantity = 0;
    foreach($order as $key => $item) {
        $finalPrice += $order[$key]['price'];
        $finalQuantity += $order[$key]['quantity'];
    }
    return "Общая стоимость товаров составляет: " . $finalPrice . " usd. <br>Количество товара для заказа: " .
        $finalQuantity . " шт.";
}
echo getBasketInfo($products);
echo '<hr>';


echo '<p>Задание №3</p>';
$numbers = [5, 12, -3, 0, 4, 8, -7, -5];

/** Функция для удаления отрицательных чисел в массиве
 * @param $array Массив, с котрого нужно удалить отрицательные числа
 * @return mixed Возвращает входящий массив, только без отрицательных чисел
 */
function deleteNegatives(&$array) {
    foreach ($array as $key => $item) {
        if ($item < 0) {
            unset($array[$key]);
        }
    }
    return $array;
}

$positiveNumbers = deleteNegatives($numbers);

echo '<pre>';
print_r($positiveNumbers);
echo '</pre><hr>';


echo '<p>Задание №4</p>';
deleteNegatives($numbers); //----- для примера передачи аргумента в функцию по ссылкке
echo '<pre>';
print_r($numbers);
echo '</pre>';

?>
