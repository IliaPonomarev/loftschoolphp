<?php
require '../../vendor/autoload.php';
require '../../config.php';
require '../Models/Order.php';
require '../Models/Client.php';
if (isset($_POST['submit'])){
    $email = strip_tags(trim($_POST['email']));
    $name = strip_tags(trim($_POST['name']));
    $order_name = strip_tags(trim($_POST['email']));
    $photo = $_FILES['photo']['name'];
    $errors = false;

    $records = \Models\Client::where('email','=', $email)->get()->toArray();
    foreach ($records as $record){

    }

    if (!empty($record)){
        $errors = "Такой email существует";
    }

    if (!$errors){
        $client = new \Models\Client();
        $client->name = $name;
        $client->email = $email;
        $client->photo = $photo;
        $client->save();

        $client_id = $client->id;
        $order = new \Models\Order();
        $order->client_id = $client_id;
        $order->order_name = $order_name;
        $order->save();
        header('Location:../index.php',true,301);
    } else{
        header('Location:create.php?error=1',true,301);
    }

}

//use Models\Post;
//require "../config.php";
//require "../php/registration.php";
//
//$user = new \Models\User();
//$user->name = $_POST['title'];
//$user->age = $_POST['content'];
//$user->description = $_POST['content'];
//$user->photo = $_POST['content'];
//$user->save();
//
//