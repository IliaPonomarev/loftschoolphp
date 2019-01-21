<?php
session_start();
require_once 'config.php';
require_once 'fileValidate.php';


try {
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, DBUSER, DBPASSWORD,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


$stmt = $db->prepare("SELECT COUNT(*) FROM users WHERE login = ?");
$stmt->execute([$_POST['login']]);
$count = $stmt->fetch(PDO::FETCH_NUM)[0];
if ($count[0] !== '0') {
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
$values = [
    strip_tags(trim($_POST['login'])),
    password_hash(strip_tags(trim($_POST['password'])), PASSWORD_DEFAULT),
    strip_tags(trim($_POST['name'])),
    $dateValue,
    htmlspecialchars(trim($_POST['description']))
];
$query = '
INSERT INTO users
(login, password, name, age, description)
VALUES(?, ?, ?, ?, ?)';
$stmt = $db->prepare($query);
$result = $stmt->execute($values);
//$_SESSION['access'] == 'granted';
if ($image) {
    $lastUserId = $db->lastInsertId();
    $filename = "$lastUserId.$extension";
    $path = '../photos/' . $filename;
    $tmp_name = $_FILES['photo']['tmp_name'];
    $query = "UPDATE users SET photo='$filename' WHERE id=$lastUserId";
    $db->query($query);
    move_uploaded_file($tmp_name, $path);
}
if ($result) {
    echo 'Регистрация прошла успешно';
    $_SESSION['access'] = 'granted';
} else {
    echo 'Произошла ошибка';
}



