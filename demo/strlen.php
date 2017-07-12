<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12.07.2017
 * Time: 15:19
 */
// реализация встроенной фунцции strlen();

function myStrLen($string){
    if (!is_string($string)){
        return false;
    }
    $count = mb_strlen(trim($string));
    return $count;
}

function countStr($string){
    if (!is_string($string)){
        return false;
    }
    $count = 0;
    while(isset($string{$count})){
       $count++;
    }
    return $count;
}

function lenStr($str){
    if (!is_string($str)){
        return false;
    }
    $count = 0;
    while(!empty($str{$count})){
        $count++;
    }return $count;
}

$string = 'string ';

echo '<p>' . myStrLen($string) . " *** Посчитано при помощи myStrLen";
echo '<p>' . mb_strlen($string) . " *** Посчитано при помощи mb_strlen";
echo '<p>' . strlen($string) . " *** Посчитано при помощи strlen";
echo '<p>' . countStr($string) . " *** Посчитано при помощи countStr";
echo '<p>' . lenStr($string) . " *** Посчитано при помощи lenStr";
