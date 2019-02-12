<?php session_start();
require '../vendor/autoload.php';
require '../config.php';
require 'Models/Order.php';
require 'Models/Client.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="../css/starter-template.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="../index.php" >Авторизация</a></li>
                <li><a href="../reg.php">Регистрация</a></li>
                <li><a href="../list.php" >Список пользователей</a></li>
                <li><a href="../filelist.php">Список файлов</a></li>
                <li><a href="" id="message" class="active">АДМИНКА</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container" style="padding-top: 50px;">
    <?php
    if ($_SESSION['access'] !== 'granted') {
        echo "Авторизуйтесь, чтобы получить доступ к этой странице";
        die;
    }
    ?>
    <a href="crud/create.php" class="order__create">Создать заказ</a>
    <h3>Список заказов</h3>

    <table>
        <tr>
            <th>ID заказа</th>
            <th>Имя клиента и ID</th>
            <th>Наименование продукта</th>
            <th>Редактировать заказ</th>
            <th>Удалить заказ</th>
        </tr>


        <?php
        $orders = \Models\Order::
            orderBy('id','desc')
            ->get();
        ?>
        <?php  foreach ($orders as $order) :?>

            <tr>
                <td><?=$order->id ?></td>
                <td><?=$order->orderData->name ?> (<?=$order->orderData->id ?>)</td>
                <td><?=$order->order_name ?></td>
                <td><a href="crud/edit.php?id=<?=$order->id?>">Редактировать</a></td>
                <td><a href="crud/destroy.php?id=<?=$order->id?>">Удалить</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/main.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
