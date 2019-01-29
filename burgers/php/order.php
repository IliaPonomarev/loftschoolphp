<?php
require_once "../config/config.php";

$stmt  = $db->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

$id =  $user ['id'];
$address = "Ул: $street, дом: $home, корп: $part , кварт: $appt, эт: $floor";
$stmt  = $db->prepare("INSERT INTO orders SET id_user = ?,comments = ? , change_money = ?,
 callback = ?, address =?");
$stmt->execute([$id,$comment,$payment,$callback,$address]);



