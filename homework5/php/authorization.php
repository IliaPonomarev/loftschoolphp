<?php
session_start();
require 'config.php';
$db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, DBUSER, DBPASSWORD,
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));;
$login = strip_tags(trim($_POST['login']));
$stmt = $db->prepare('SELECT * FROM users WHERE login = ?');
$stmt->execute([$login]);
$record = $stmt->fetch(PDO::FETCH_ASSOC);
if (!empty($record)) {
    $hash = $record['password'];
    if (password_verify($_POST['password'],$hash)){
        $_SESSION['access'] = 'granted';
        echo 'Добро пожаловать!';
    }else{
        echo 'Введённые логин и пароль не найдены';
    }

} else {
    echo 'Введённые логин и пароль не найдены';
}
