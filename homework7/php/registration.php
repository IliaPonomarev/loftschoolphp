<?php
session_start();
require_once 'fileValidate.php';
require '../vendor/autoload.php';
require '../config.php';
require '../Models/User.php';


$login = $_POST['login'];
$records = \Models\User::where('login','=', $login)->get()->toArray();

foreach ($records as $record){

}


if (!empty($record)) {
    echo 'Введённый логин уже занят';
    die;
}
if ($_POST['password'] !== $_POST['password-repeat']) {
    echo 'Введённые пароли не совпадают';
    die;
}
$image = validationImage($_FILES['photo'], $extension);
if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", strip_tags($_POST['age']))) {
    echo 'Дата рождения введена неверно. Введите дату в формате 2000-12-31';
    return false;
}
$date = new DateTime(strip_tags($_POST['age']));
$dateValue = $date->format('Y-m-d');

$login = strip_tags(trim($_POST['login']));
$password = password_hash(strip_tags(trim($_POST['password'])), PASSWORD_DEFAULT);
$name = strip_tags(trim($_POST['name']));
$age = $dateValue;
$description = htmlspecialchars(trim($_POST['description']));

$user = new \Models\User();
$user->login = $login;
$user->password = $password;
$user->name = $name;
$user->age = $age;
$user->description = $description;
$result = $user->save();

if ($image) {

    $lastUserId = \Models\User::all()->last()->id;
    $filename = "$lastUserId.$extension";
    $path = '../photos/' . $filename;
    $tmp_name = $_FILES['photo']['tmp_name'];

    $file = \Models\User::find($lastUserId);
    $file->photo = $filename;
    $file->save();
    move_uploaded_file($tmp_name, $path);
}
if ($result) {
    echo 'Регистрация прошла успешно';
    $_SESSION['access'] = 'granted';
} else {
    echo 'Произошла ошибка';
}



