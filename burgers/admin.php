<?php

$host = 'localhost';
$user = 'mysql';
$password = 'mysql';
$dbname = 'mainproject';
$link = mysqli_connect($host, $user, $password, $dbname)
or die("Ошибка " . mysqli_error($link));
echo '<link href="css/adminStyle.css" rel="stylesheet">';

function showUsers ($link)
{
    $query = "SELECT * FROM users";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) {
        ;
    }

    $content = '
<h3>Список зарегистрированных пользователей</h3>
<table>
<tr>
<th>email</th>
<th>name</th>
<th>phone</th>
</tr>';
    foreach ($data as $page) {
        $content .= "<tr>
<td>{$page['email']}</td>
<td>{$page['name']}</td>
<td>{$page['phone']}</td>
</tr>";
    }
    $content .= '</table>';
    echo $content;
}

function showOrders ($link){
    $query = "SELECT * FROM orders";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) {
        ;
    }

    $content = '
<h3>Список заказов</h3>
<table>
<tr>
<th>id заказа</th>
<th>id заказчика</th>
<th>address</th>
</tr>';
    foreach ($data as $page) {
        $content .= "<tr>
<td>{$page['order_id']}</td>
<td>{$page['id_user']}</td>
<td>{$page['address']}</td>
</tr>";
    }
    $content .= '</table>';
    echo $content;
}

showUsers($link);
showOrders($link);
