<?php
/**
 * Created by PhpStorm.
 * User: oleg
 * Date: 11.07.2017
 * Time: 1:12
 */

// Как реализовать шахматную доску на PHP + HTML + CSS
// инициализируем переменные $cols колонки, $rows ряды, $color стиль для закраса
$cols = 8;
$rows = 8;
$color = " style='background: black; height: 25px; width: 25px'";

echo "<table border='1'>";
    for ($tr = 1; $tr <= $rows; $tr++){
        //выводим теги рядов
        echo "<tr>";
        // запускаем еще один цикл для вывода солбиков
        for ($td = 1; $td <= $cols; $td++){
        // если сумма счетчиков строк и столбцов кратна - закрашиваем, иначе нет
            if (($td+$tr) % 2 == 0){
                echo "<td$color>" . "</td>";
            }else{
                echo "<td>" . "</td>";
            }
        }
        echo "</tr>";
    }
echo "</table>";