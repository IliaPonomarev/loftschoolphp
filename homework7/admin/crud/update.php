<?php
require '../../vendor/autoload.php';
require '../../config.php';
require '../Models/Order.php';
require '../Models/Client.php';


$order = \Models\Order::find($_GET['id']);
$order->order_name = $_POST['order_name'];
$order->save();


header('Location:../index.php',true,301);