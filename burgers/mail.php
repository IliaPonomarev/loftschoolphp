<?php

if (!empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['phone'])) {
    $recepient = "seikadi123@gmail.com";

    $name = strip_tags(trim($_POST["name"]));
    $phone = strip_tags(trim($_POST["phone"]));
    $email = strip_tags(trim($_POST["email"]));
    $street = strip_tags(trim($_POST["street"]));
    $home = strip_tags(trim($_POST["home"]));
    $part = strip_tags(trim($_POST["part"]));
    $appt = strip_tags(trim($_POST["appt"]));
    $floor = strip_tags(trim($_POST["floor"]));
    $comment = strip_tags(trim($_POST["comment"]));
    $payment = strip_tags(trim($_POST["payment"]));
    $payment = strip_tags(trim($_POST["payment"]));
    $callback = strip_tags(trim($_POST["callback"]));

    include  'auth.php';
    include  'order.php';

    $host = 'localhost';
    $user = 'mysql';
    $password = 'mysql';
    $dbname = 'mainproject';
    $link = mysqli_connect($host, $user, $password, $dbname)
    or die("Ошибка " . mysqli_error($link));

    $query = "SELECT * FROM orders WHERE id_user = '$id'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $user = mysqli_fetch_assoc($result);

    $id_user = $user['id_user'];

    $query = "SELECT COUNT(*) FROM orders WHERE id_user = '$id_user'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $count = mysqli_fetch_assoc($result)['COUNT(*)'];


    $address =  $user['address'];
    $order_id = $user['order_id'];
    $message = "Ваш заказ будет доставлен по адресу: $address \nТелефон: $phone \nВаш заказ DarkBeefBurger за 500 рублей \nЭто ваш $count заказ ";

    $pagetitle = "Заказ номер: $order_id";
    mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
}








