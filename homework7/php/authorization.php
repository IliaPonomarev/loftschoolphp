<?php
session_start();
require '../vendor/autoload.php';
require '../config.php';
require '../Models/User.php';


$login = strip_tags(trim($_POST['login']));
$records = \Models\User::where('login','=', $login)->get()->toArray();

foreach ($records as $record){

}


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
