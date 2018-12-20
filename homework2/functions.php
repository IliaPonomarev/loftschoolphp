<?php

//ФУНКЦИЯ 1
function task1($arrStr, $str = false)
{
    if ($str == true) {
        return implode(' ', $arrStr);
    }

    foreach ($arrStr as $item) {
        echo "<p>" . $item . "</p>";
    }
}

//ФУНКЦИЯ 2
function task2($arrNum, $op)
{
    foreach ($arrNum as $item) {
        $type = gettype($item);
        if ($type !== "integer" && $type !== "double") {
            echo "Массив должен содержать только числа.";
            return;
        }
    }
    $result = 0;
    foreach ($arrNum as $item) {
        if ($op == '+') {
            $result += $item;
        } elseif ($op == '-') {
            $result -= $item;
        } elseif ($op == '*') {
            static $result = 1;
            $result *= $item;
        } elseif ($op == '/') {
            static $result = 1;
            $result /= $item;
        } else {
            echo 'Некорректный ввод';
            return;
        }
    }
    echo $result;
}

//ФУНКЦИЯ 3
function task3()
{
    $first = func_get_arg(0);
    if ($first !== '+' && $first !== '-' && $first !== '*' && $first !== '/') {
        echo 'Первым аргументом должна быть математическая операция ';
        return;
    }
    $other = func_get_args();
    $arr = array_splice($other, 1);
    $result = task2($arr, $first);
    return $result;
}

//ФУНКЦИЯ 4
function task4($num1, $num2)
{
    if (is_int($num1) && is_int($num2)) {
        print "<table><tr>";
        for ($i = 1; $i <= $num1; $i++) {
            for ($j = 1; $j <= $num2; $j++) {
                if ($i % 2 == 0 && $j % 2 == 0) {
                    print "<td> " . ($j * $i) . "</td>";
                } elseif ($i % 2 == 1 && $j % 2 == 1) {
                    print "<td>" . ($j * $i) . "</td>";
                } else {
                    print "<td>" . ($i * $j) . "</td>";
                }
            }
            if ($i != 10) {
                print "</tr><tr>";
            }
        }
        print "</tr></table>";
    } else {
        echo 'Введите целое число';
    }
}
//ФУНКЦИЯ 5
function task5($str){
    function mb_strrev($str, $encoding='UTF-8'){
        return mb_convert_encoding( strrev( mb_convert_encoding($str, 'UTF-16BE', $encoding) ), $encoding, 'UTF-16LE');
    }
    function translate($check){
        if ($check){
            echo 'Это палиндром';
        }
        else{
            echo 'Это не палиндром';
        }
    }

    $rev = mb_strrev($str);
    if ($rev == $str) {
        echo translate(true);
    } else {
        echo translate(false);
    }

}

//ФУНКЦИЯ 6
function task6()
{
    echo date("j.n.Y H:i");
    echo "<br>";
    echo strtotime("24.02.2016 00:00:00");
}

//ФУНКЦИЯ 7
function task7($string1, $string2)
{
    echo str_replace("К", "", $string1);
    echo "<br>";
    echo str_replace("Две", "Три", $string2);
}

//ФУНКЦИЯ 8
function task8($nameFile){
    fopen($nameFile,'r');
    echo file_get_contents($nameFile);
}

//ФУНКЦИЯ 9
function task9(){
    $file = "anothertest.txt";
    if (!file_exists($file)) {
        $fp = fopen($file, "w");
        fwrite($fp, "Hello again");
    }
    echo file_get_contents('anothertest.txt');
}