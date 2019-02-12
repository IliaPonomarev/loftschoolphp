<?php
require '../../vendor/autoload.php';
require '../../config.php';
require '../Models/Order.php';
require '../Models/Client.php';


$post = \Models\Order::destroy($_GET['id']);
header('Location:../index.php',true,301);