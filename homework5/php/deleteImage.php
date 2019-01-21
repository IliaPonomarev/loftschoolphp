<?php
session_start();
if ($_SESSION['access'] !== 'granted') {
    die;
}
require 'config.php';
$db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, DBUSER, DBPASSWORD,
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$toDelete = $_GET['delete'];
if (!preg_match('/\d+\.(bmp|gif|jpg|png|svg)/', $toDelete)) {
    echo 'Неверное расширение файла';
    die;
}
$query = "UPDATE users SET photo=NULL WHERE photo=?";
$db->prepare($query)->execute([$toDelete]);
unlink('../photos/' . $toDelete);
header('Location: ../filelist.php');
