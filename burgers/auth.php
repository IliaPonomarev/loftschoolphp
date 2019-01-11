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

    if(empty($user)){
        $query = "INSERT INTO users SET email = '$email', name = '$name', phone = '$phone'";
        mysqli_query($link, $query) or die(mysqli_error($link));
    }




