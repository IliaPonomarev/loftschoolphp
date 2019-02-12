<?php
include 'store.php';
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
    <link href="../../css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="../../css/starter-template.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">

    </div>
</nav>

<div class="container">
<!--    <h3>Список заказов</h3>-->
    <div class="form-container">
        <form class="form-horizontal" id="registration-form" enctype="multipart/form-data" method="post" action="store.php" >
            <p id="message"> <?php if (isset($_GET['error'])) echo 'Такой email уже существует';?></p>
            <div class="form-group">
                <label for="registration-password-repeat" class="col-sm-2 control-label">EMAIL</label>
                <div class="col-sm-10">
                    <input name="email" type="email" class="form-control" id="registration-password-repeat" placeholder="EMAIL" required">
                </div>
            </div>
            <div class="form-group">
                <label for="registration-name" class="col-sm-2 control-label">Ваше имя</label>
                <div class="col-sm-10">
                    <input name="name" class="form-control" id="registration-name" placeholder="Ваше имя" required>
                </div>
            </div>
            <div class="form-group">
                <label for="registration-description" class="col-sm-2 control-label">Наименование товара</label>
                <div class="col-sm-10">
                    <textarea name="order_name" class="form-control" id="registration-description" placeholder="Наименование товара"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="registration-photo" class="col-sm-2 control-label">Фото</label>
                <div class="col-sm-10">
                    <input name="photo" type="file" id="registration-photo" class="form-control" placeholder="Загрузить фото">
                </div>
            </div>
            <input type="submit" name="submit">
        </form>
    </div>

    </table>
</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/main.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>

