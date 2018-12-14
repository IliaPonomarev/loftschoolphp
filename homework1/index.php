<?php
//ЗАДАЧА 1
$name = 'Илья';
$age = '21';

echo "Меня зовут $name" . '<br>';
echo "Мне $age год" . '<br>';
echo "\"!|\/'\"\\" . '<br>' . '<br>';

//ЗАДАЧА 2
$feltTipPen = 23;
$pencil = 40;
$total = 80;

echo $total - $pencil - $feltTipPen . '<br>' . '<br>';

//ЗАДАЧА 3
define("MYNUMBER", '123456');

if (defined('MYNUMBER')) {
    echo MYNUMBER . '<br>';
}

echo MYNUMBER . '<br>' . '<br>';

//define("MYNUMBER", '654321');
//echo MYNUMBER;

//ЗАДАЧА 4
$age2 = 5;

if ($age2 >= 18 && $age2 <= 65) {
    echo "Вам еще работать и работать";
} elseif ($age2 > 65) {
    echo "Вам пора на пенсию";
} elseif ($age2 >= 1 && $age2 <= 17) {
    echo "Вам еще рано работать";
} else {
    echo "Неизвестный возраст";
}

echo '<br>' . '<br>';

//ЗАДАЧА 5
$day = 6;

switch ($day) {
    case $day >= 1 && $day <= 5:
        echo "Это рабочий день";
        break;
    case $day >= 6 && $day <= 7:
        echo "Это выходной день";
        break;
}

echo '<br>' . '<br>';

//ЗАДАЧА 6
$bmw = ['name' => 'bmw', 'model' => 'X5', 'speed' => '120', 'doors' => '5', 'years' => '2015'];
$toyota = ['name' => 'toyota', 'model' => 'Camry', 'speed' => '130', 'doors' => '4', 'years' => '2017'];
$opel = ['name' => 'opel', 'model' => 'Astra', 'speed' => '110', 'doors' => '2', 'years' => '2016'];

$allCars = [$bmw, $toyota, $opel];


foreach ($allCars as $item) {
    echo "CAR: " . $item['name'] . "<br>";
    echo $item['name'] . " " .
        $item['model'] . " " .
        $item['speed'] . " " .
        $item['doors'] . " " .
        $item['years'] . "<br>" . "<br>";
}

//ЗАДАЧА 7
print "<table><tr>";
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <=10 ; $j++) {
        if ($i % 2 == 0 && $j % 2 == 0) {
            print "<td>" . '(' . ($j * $i) . ')' . "</td>";
        } elseif ($i % 2 == 1 && $j % 2 == 1) {
            print "<td>" . '[' . ($j * $i) . ']' . "</td>";
        } else {
            print "<td>" . ' ' . ($i * $j) . ' ' . "</td>";
        }
    }
    if ($i != 10) {
        print "</tr><tr>";
    }
}
print "</tr></table>";

echo '<br>' . '<br>';

//ЗАДАЧА 8
$str = "hello world goodbye earth";
print "$str";
$array = explode(' ', $str);

echo '<br>' . '<br>';
print_r ($array);
echo '<br>' . '<br>';

$arrayLength = count($array);
while ($arrayLength) {
    $recursiveArray[] = $array[$arrayLength - 1];
    $arrayLength--;
}
$result = implode(' / ', $recursiveArray);
echo $result;











