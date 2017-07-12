<?php
/**
 * Created by PhpStorm.
 * User: oleg
 * Date: 11.07.2017
 * Time: 1:57
 */
function drawTable($cols,$rows,$color){
    echo "<table border='1'>";
    for ($tr = 1; $tr <= $rows; $tr++){
        echo "<tr>";
        for ($td = 1; $td <= $cols; $td++){
            if ($tr == 1 || $td == 1){
                echo "<th style='background: $color'>" . $tr * $td . "</th>";
            }else{
                echo "<td>" . $tr * $td . "</td>";
            }
        }
        echo "<tr>";
    }
    echo "</table>";
}

function drawMenu($array, $verticale=true){
    if (!is_array($array)){
        return false;
    }
    echo "<ul>";
    $style = " style='display: inline; margin-right: 15px;'";
    foreach ($array as $item){
        if (!$verticale){
            echo "<li$style><a href='$item[href]'>$item[link]</a></li>";
        }else{
            echo "<li><a href='$item[href]'>$item[link]</a></li>";
        }
    }
    echo "</ul>";
    return true;
}

function cleanStr($data){
    return trim(strip_tags($data));
}

function cleanInt($data){
    return (int)$data;
}

function cleanUInt($data){
    return abs(cleanInt($data));
}

