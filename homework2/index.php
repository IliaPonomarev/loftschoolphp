<?php

require('functions.php');

//ЗАДАНИЕ 1
echo '<br>'.'<br>'. 'Задача 1'. '<br>';
$arrStr = [
    'строка 1',
    'строка 2',
    'строка 3',
];

task1($arrStr);
echo task1($arrStr, true);

//ЗАДАНИЕ 2
echo '<br>'.'<br>'. 'Задача 2'. '<br>';
$arrNum = [1, 2, 3, 4, 5];

task2($arrNum, '+');

//ЗАДАНИЕ 3
echo '<br>'.'<br>'. 'Задача 3'. '<br>';

task3('+', 5,6,7);
//ЗАДАНИЕ 4
echo '<br>'.'<br>'. 'Задача 4'. '<br>';
task4(10, 10);

//ЗАДАНИЕ 5
echo '<br>'.'<br>'. 'Задача 5'. '<br>';
echo task5('тот');


//ЗАДАНИЕ 6
echo '<br>'.'<br>'. 'Задача 6'. '<br>';
task6();

//ЗАДАНИЕ 7
echo '<br>'.'<br>'. 'Задача 7'. '<br>';
task7("Карл у Клары украл Кораллы", "Две бутылки лимонада");

//ЗАДАНИЕ 8
echo '<br>'.'<br>'. 'Задача 8'. '<br>';
task8('test.txt');

//ЗАДАНИЕ 9
echo '<br>'.'<br>'. 'Задача 9'. '<br>';
task9();