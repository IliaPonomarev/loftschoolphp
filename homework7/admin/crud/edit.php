<?php
require '../../vendor/autoload.php';
require '../../config.php';
require '../Models/Order.php';
require '../Models/Client.php';
$id = $_GET['id'];
$order = \Models\Order::find($id);
$client = \Models\Client::find($id);

?>
<form method="POST" action="../crud/update.php?id=<?=$id?>">
    <label for="order_name">Наименование продукта</label>
    <input type="text" id="order_name" name="order_name" value="<?=$order->order_name?>"><br>
    <label for="name">Имя клиента</label>
    <input type="text" id="name" name="name" value="<?=$client->name?>"><br>
    <label for="email">Email клиента</label>
    <input type="email" id="email" name="email" value="<?=$client->email?>"><br>
    <input type="submit" value="Изменить">
</form>