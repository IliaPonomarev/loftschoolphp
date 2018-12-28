<?php

require('functions.php');

//ЗАДАНИЕ 1
echo '<br>' . '<br>' . 'Задача 1' . '<br>';
task1('data.xml');

//ЗАДАНИЕ 2
echo '<br>' . '<br>' . 'Задача 2' . '<br>';
$arr = [
    'name' => 'Mixail',
    'surname' => 'Kireev',
    'appearance' => [
        'age' => '18',
        'salary' => '6500'
    ]
];

task2($arr);
//ЗАДАНИЕ 3
echo '<br>' . '<br>' . 'Задача 3' . '<br>';
task3(3);


//ЗАДАНИЕ 4
echo '<br>' . '<br>' . 'Задача 4' . '<br>';
task4();