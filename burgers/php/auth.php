<?php
require_once "../config/config.php";
require __DIR__."/../vendor/autoload.php";
$loader = new Twig_Loader_Array([
    'index' => 'Hello {{ name }}!',
]);
$twig = new Twig_Environment($loader);

echo $twig->render('index', ['name' => 'Fabien']);


$stmt  = $db->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);


    if(empty($user)){
        $stmt  = $db->prepare("INSERT INTO users SET email = ?, name = ?, phone = ?");
        $stmt->execute([$email,$name,$phone]);
    }




