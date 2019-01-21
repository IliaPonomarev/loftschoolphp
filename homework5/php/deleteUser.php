<?php
session_start();
if ($_SESSION['access'] !== 'granted') {
    die;
}
require 'config.php';
$db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, DBUSER, DBPASSWORD,
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$toDelete = $_GET['delete'];
$query = "SELECT photo FROM users WHERE id = ?";
$stmt = $db->prepare($query);
$stmt->execute([$toDelete]);
$result = $stmt->fetch(pdo::FETCH_ASSOC);
if ($result['photo'] != '') {
    unlink('../photos/' . $result['photo']);
}
$query = "DELETE FROM users WHERE id = ?";
$db->prepare($query)->execute([$toDelete]);
header('Location: ../list.php');
