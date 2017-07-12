<?php
/**
 * Created by PhpStorm.
 * User: oleg
 * Date: 11.07.2017
 * Time: 1:59
 */
// инициализация массива меню
$leftMenu = array(
    array('link' => 'Домой', 'href' => 'index.php'),
    array('link' => 'О нас', 'href' => 'index.php?id=about'),
    array('link' => 'Контакты', 'href' => 'index.php?id=contacts'),
    array('link' => 'Таблица умножения', 'href' => 'index.php?id=table'),
    array('link' => 'Калькулятор', 'href' => 'index.php?id=calc')
);
/*******************/

$hour = (int)strftime('%H');
$welcome = '';
if ($hour > 0 && $hour < 6){
    $welcome = "Доброй ночи";
}elseif ($hour >= 6 && $hour < 12){
    $welcome = "Доброе утро";
}elseif ($hour >= 12 && $hour < 18){
    $welcome = "Добрый день";
}elseif ($hour >= 18 && $hour < 23){
    $welcome = "Добрый вечер";
}else{
    $welcome = "Доброй ночи";
}
define('COPIRIGHT', 'Супер-мега веб мастер');
setlocale(LC_ALL,'russian');
$day = strftime('%d');
$mon = strftime('%B');
$year = strftime('%Y');

/*розмер файла*/
$size = ini_get('post_max_size');
    $letters = $size{strlen($size) -1};
    switch (strtoupper($letters)){
        case 'G': {
            $max = $size *= 1024;
        }
        case 'M': {
            $max = $size *= 1024;
        }
        case 'K': {
            $max = $size *= 1024;
        }
    }