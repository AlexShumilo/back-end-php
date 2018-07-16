<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 16.07.2018
 * Time: 23:05
 */

/*  Задача 1: Время жизни cookie
Пользователь приходит на сайт. Используя cookie сделать так, что б впервые пришедший пользователь видел фразу:
"Добро пожаловать, новичек!"
Если пользователь уже посещал сайт в течении последних 10-ти часов, выводить фразу:
"С возвращением, дружище!"
Подсказка: Используйте инструменты для разработчиков Вашего браузера для просмотра и
очистки текущих значений cookie. */

if ($_COOKIE['visit']) {
    echo 'С возвращением, дружище!' . '<hr>';
} else {
    setcookie('visit', 'visited', time() + 3600 * 10);
    echo 'Добро пожаловать, новичёк!' . '<hr>';
}

/*   Задача 2: Дата и время последнего посещения
Используя cookie реализовать вывод на страницу сообщения с датой и временем последнего визита.*/

if ($_COOKIE['lastVisit']) {
    setcookie('lastVisit', date('Y-m-d в H:i:s'));
    echo 'Дата последнего визита на страницу: ' . $_COOKIE['lastVisit'];
} else {
    setcookie('lastVisit', date('Y-m-d в H:i:s'));
    echo 'Вы впервые на странице! Добро пожаловать ;)';
}
echo '<hr>';

/*   Задача 3: Счетчик посещений
Используя cookie реализовать вывод на страницу сообщения с количеством посещений страницы.*/

$count = 1;
if ($_COOKIE['counter']) {
    setcookie('counter', $_COOKIE['counter'] + 1);
    echo 'Количество посещений: ' . $_COOKIE['counter'];
} else {
    setcookie('counter', $count);
    echo 'Это первое посещение страницы';
}
?>