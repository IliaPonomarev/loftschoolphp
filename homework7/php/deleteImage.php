<?php
session_start();
if ($_SESSION['access'] !== 'granted') {
    die;
}
require 'config.php';

$toDelete = $_GET['delete'];
if (!preg_match('/\d+\.(bmp|gif|jpg|png|svg)/', $toDelete)) {
    echo 'Неверное расширение файла';
    die;
}
$query = "UPDATE users SET photo=NULL WHERE photo=?";
$db->prepare($query)->execute([$toDelete]);
unlink('../photos/' . $toDelete);
header('Location: ../filelist.php');
