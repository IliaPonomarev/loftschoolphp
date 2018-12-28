<?php
//ФУНКЦИЯ 1
function task1($fileName)
{
    $xml = json_decode(json_encode(simplexml_load_file('data.xml')), true);
    output($xml);
}

function output($xml, $title = ' ')
{
    if (is_array($xml)) {
        if (count($xml) == 1 && $title != '@attributes') {
            echo '<br>' . $title . ': ' . '<br>';
        }
        foreach ($xml as $key => $value) {
            if (is_numeric($key)) {
                echo '<br>' . $title . ': ' . '<br>';
                echo '<br>';

                output($value, $title);
                echo '<br>';
            } else {
                output($value, $key);
            }
        }
    } else {
        echo $title . ': ' . $xml . '<br>';
    }
}

//ФУНКЦИЯ 2
function task2($arr)
{
    $jsonString = json_encode($arr);
    file_put_contents('output.json', $jsonString);
    $outputOriginal = json_decode(file_get_contents('output.json'), true);
    randomlyChangeArray($outputOriginal);
    file_put_contents('output2.json', json_encode($outputOriginal));
    $output = json_decode(file_get_contents('output.json'), true);
    $output2 = json_decode(file_get_contents('output2.json'), true);
    if ($output == $output2) {
        echo 'Изменений не было';
    } else {
        echo '<h2>' . 'Было: ' . '</h2>';
        echo '<pre>';
        print_r($output);
        echo '<h2>' . 'Стало: ' . '</h2>' . '<br>';
        print_r($output2);
    }

}


function randomlyChangeArray(&$array)
{
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            randomlyChangeArray($array[$key]);
        } elseif (rand(0, 4) == 0) {
            $array[$key] = 'newRecord';
        }
    }
}

//ФУНКЦИЯ 3
function task3($value)
{
    $arr = [];
    $i = 0;
    while ($i < $value) {
        array_push($arr, rand(1, 100));
        $i++;
    }
    $fp = fopen('file.csv', 'r+');
    fputcsv($fp, $arr, ",");
    fclose($fp);
    $fp = fopen('file.csv', "r");
    $csv_data = fgetcsv($fp, 0, ",");
    $sum = array_sum($csv_data);
    fclose($fp);
    echo "Сумма $value случайных элементов массива равна: $sum";
}

//ФУНКЦИЯ 4
function task4()
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL,
        "https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json");

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $curlExec = curl_exec($curl);
    curl_close($curl);
    preg_match_all('/"pageid":\d+|"title":".*?"/', $curlExec, $matches);
    foreach ($matches[0] as $item) {
        echo $item, '<br>';
    }
}