<?php
$host = 'localhost';
$user = 'mysql';
$password = 'mysql';
$dbname = 'mainproject';
$link = mysqli_connect($host, $user, $password, $dbname)
or die("Ошибка " . mysqli_error($link));

$query = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$user = mysqli_fetch_assoc($result);

$id =  $user ['id'];


$query = "INSERT INTO orders SET id_user = '$id',
 comments = '$comment' , change_money ='$payment' ,
 callback = '$callback', address = 'Ул: $street, дом: $home, корп: $part , кварт: $appt, эт: $floor'";
mysqli_query($link, $query) or die(mysqli_error($link));


